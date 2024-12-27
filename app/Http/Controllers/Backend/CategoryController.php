<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $categories = Category::latest()->paginate(3);
        $categories = Category::orderBy('id', 'desc');

        if (request()->filled('search')) {
            $search = request('search');
            $categories->where('name', 'LIKE', "%" . $search . "%");

        }

        $categories =  $categories->paginate(10);

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = $request->all();


        $category = Category::create($data);

        CategoryTranslation::create([
            'category_id' => $category->id,
            'name' => $request->name,
            'locale' => App::getLocale(),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $previousUrl = url()->previous();
        $category = Category::with('pages', 'translation')->findOrFail($id);  // Eager load pages
        return view('backend.categories.show', compact('category', 'previousUrl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $categoryId,Request $request)
    {
        $language = $request->language;
        $category = Category::with('translation')->find($categoryId);
        $translatedObject = $category->translate($language);

        return view('backend.categories.edit', compact('category','translatedObject','language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $data = $request->all();

        CategoryTranslation::updateOrCreate(['category_id' => $id,'locale'=>$data['language']],['name'=>$data['name']]);

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
