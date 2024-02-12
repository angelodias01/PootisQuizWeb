<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use App\Models\Themes;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function index()
    {
        $themes = Themes::all();
        return response()->json($themes);
    }
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
    public function editTheme( $theme)
    {
        $theme = Themes::findOrFail($theme);
        return view('admin.themes.editTheme', compact('theme'));
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
        $theme->updated_at = null;
        $theme->save();

        return redirect()->route('check.all.themes')->with('success', 'Theme created successfully!');
    }
    // Update a theme after the form is submitted
    public function updateTheme(Request $request, Themes $theme)
    {
        $validatedData = $request->validate([
            'theme_name' => 'required|string|max:255',
            'theme_abreviation' => 'required|string|max:255',
        ]);

        $theme->themeName = $validatedData['theme_name'];
        $theme->themeAbreviation = $validatedData['theme_abreviation'];
        $theme->updated_at = now();
        $theme->save();

        return redirect()->route('check.all.themes')->with('success', 'Theme updated successfully!');
    }

}
