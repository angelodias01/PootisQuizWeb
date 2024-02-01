<?php

namespace App\Http\Controllers;

use App\Models\Themes;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function checkAllThemes()
    {
        $themes = Themes::orderBy('themeName')->get();

        $groupedThemes = $themes->groupBy('themeName');

        return view('/admin/themes/checkThemes', compact('groupedThemes'));
    }

    public function deleteTheme(Themes $theme)
    {
        $theme->delete();
        return redirect()->route('check.all.themes')->with('success', 'Theme deleted successfully!');
    }

    // Show a list of themes
    public function index()
    {
        $theme = Themes::all();
        return view('admin.themes.index', compact('theme'));
    }

    // Show the form to create a new theme
    public function create()
    {
        return view('admin.themes.create');
    }

    // Store a newly created theme in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'abbreviation' => 'required',
        ]);

        Themes::create($request->all());

        return redirect()->route('admin.themes.index')
            ->with('success', 'Themes created successfully!');
    }

    // Show details of a specific theme
    public function show(Themes $theme)
    {
        return view('admin.themes.show', compact('theme'));
    }

    // Show the form to edit a theme
    public function edit(Themes $theme)
    {
        return view('admin.themes.edit', compact('theme'));
    }

    // Update a theme after the form is submitted
    public function update(Request $request, Themes $theme)
    {
        $this->validate($request, [
            'name' => 'required',
            'abbreviation' => 'required',
        ]);

        $theme->update($request->all());

        return redirect()->route('admin.themes.index')
            ->with('success', 'Themes updated successfully!');
    }

    // Delete a theme
    public function destroy(Themes $theme)
    {
        $theme->delete();
        return redirect()->route('admin.themes.index')
            ->with('success', 'Themes deleted successfully!');
    }
}
