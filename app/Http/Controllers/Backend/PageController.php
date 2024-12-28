<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\PageTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //  $pages = Page::latest()->paginate(3);
        $query = Page::with('category');

        if (request()->filled('search')) {
            $search = request('search');
            $query->where('title', 'LIKE', "%" . $search . "%");

        }


        if (request()->filled('category_id')) {
            $category_id = request('category_id');
            $query->where('category_id', $category_id);
        }



        //$pages = $pages->paginate(5);
        $pages = $query->orderBy('id','desc')->paginate(5);

        $categories = Category::all();


        return view('backend.pages.index', compact('pages', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePageRequest $request)
    {
        $validatedData = $request->validated();
        //$data = $request->all();

        $image = Storage::url(Storage::disk('public')->put('pages', $request->file('image')));
        $validatedData['image'] = $image;
        $page = Page::create($validatedData);

        PageTranslation::create([
            'page_id' => $page->id,
            'title' => $request->title,
            'description'=>$request->description,
            'locale' => App::getLocale(),
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::with( 'translation')->findOrFail($id);
        $previousUrl = url()->previous();
        return view('backend.pages.show', compact('page' , 'previousUrl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $pageId,Request $request)
    {
        $language = $request->language;
        $page = Page::with('translation')->findOrFail($pageId);
        $translatedObject = $page->translate($language);
        return view('backend.pages.edit',compact('page','translatedObject','language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, string $id)
    {
        // Validate the incoming data
        $data = $request->all();
        //$validatedData = $request->validated();

        // Find the page by ID
        $page = Page::findOrFail($id);

        PageTranslation::updateOrCreate(['page_id' => $id,'locale'=>$data['language']],['title'=>$data['title'],'description'=>$data['description']]);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($page->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $page->image));
            }

            // Store the new image and update the path
            $image = Storage::url(Storage::disk('public')->put('pages', $request->file('image')));
            $validatedData['image'] = $image;
        } else {
            // Retain the current image if no new image is uploaded
            $validatedData['image'] = $page->image;
        }

        // Update the page with the validated data
        $page->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $page = Page::find($id);
        $page->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }
}
