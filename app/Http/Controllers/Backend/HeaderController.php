<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Models\HeaderTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headers = Header::with(['translation' => function ($query) {
            $query->where('locale', app()->getLocale());
        }])
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('backend.headers.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.headers.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //problem
//        $data = $request->validate([
//            'translation' => 'required|array',
//            'translation.*.locale' => 'required|string',
//            'translation.*.title' => 'required|string',
//        ]);

        $data = $request->all();


        $header = Header::create($data);

            HeaderTranslation::create([
            'header_id' => $header->id,
            'title' => $request->title,
            'locale' => App::getLocale(),
        ]);
//        $header->translation()->createMany($data['translation']);

        return redirect()->route('admin.headers.index')->with('success', 'Header created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $header = Header::with('translation')->findOrFail($id); // Ensure it throws 404 if not found
        return view('backend.headers.show', compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $headerId,Request $request)
    {
        $language = $request->language;
        $header = Header::find($headerId);
        $translatedObject = $header->translate($language);

        return view('backend.headers.edit', compact('header','translatedObject','language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        HeaderTranslation::updateOrCreate(['header_id'=>$id,'locale'=>$data['language']],['title'=>$data['title']]);

        return redirect()->route('admin.headers.index')->with('success', 'Header updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header = Header::find($id);
        $header->delete();


        return redirect()->route('admin.headers.index')->with('success', 'Header deleted successfully.');
    }
}
