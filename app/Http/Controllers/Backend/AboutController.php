<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::orderBy('id', 'desc')->paginate(5);

        return view('backend.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.abouts.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $about = About::create($data);

        AboutTranslation::create([
            'header_id' => $about->id,
            'title' => $request->title,
            'locale' => App::getLocale(),
        ]);

        return redirect()->route('admin.abouts.index')->with('success', 'About created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $about = About::with('translation')->findOrFail($id); // Ensure it throws 404 if not found
        return view('backend.abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $aboutId,Request $request)
    {
        $language = $request->language;
        $about = About::with('translation')->find($aboutId);
        $translatedObject = $about->translate($language);

        return view('backend.abouts.edit', compact('about','translatedObject','language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        AboutTranslation::updateOrCreate(['about_id' => $id,'locale'=>$data['language']],['title'=>$data['title']]);

        return redirect()->route('admin.abouts.index')->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect()->route('admin.abouts.index')->with('success', 'About deleted successfully');
    }
}
