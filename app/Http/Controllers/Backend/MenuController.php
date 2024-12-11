<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $menus = Menu::latest()->paginate(3);

        $menus = Menu::orderBy('id', 'desc');
        if (request()->filled('search')) {
            $search = request('search');
            $menus->where('name', 'LIKE', "%" . $search . "%");

        }
        $menus = $menus->paginate(10);

        return view('backend.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.menus.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMenuRequest $request)
    {
        $validatedData = $request->validated();
        Menu::create($validatedData);

        return redirect()->route('admin.menus.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::findOrFail($id);
        return view('backend.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::findOrFail($id);
        return view('backend.menus.form', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, string $id)
    {
        $validatedData = $request->validated();

        // Find the category by ID
        $menu = Menu::findOrFail($id);

        // Update the menu with the validated data
        $menu->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.menus.index')->with('success', 'Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully.');
    }
}
