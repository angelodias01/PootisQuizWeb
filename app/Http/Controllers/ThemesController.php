<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
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

    public function createTheme()
    {
        $themes = Themes::all();
        return view('admin.themes.createTheme', compact('themes'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'theme_name' => 'required|string|max:255',
            'theme_abreviation' => 'required|string|max:255',
        ]);

        $theme = new Themes();
        $theme->themeName = $validatedData['theme_name'];
        $theme->themeAbreviation = $validatedData['theme_abreviation'];
        $theme->save();

        return redirect()->route('check.all.themes')->with('success', 'Theme created successfully!');
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
            'abreviation' => 'required',
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
