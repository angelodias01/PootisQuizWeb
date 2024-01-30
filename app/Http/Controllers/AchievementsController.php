<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use App\Models\Themes;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function checkAllAchievements()
    {
        $achievements = Achievements::select('achievementId', 'achievementName', 'description', 'created_at')->get();

        return view('/admin/achievements/checkAchievements', compact('achievements'));
    }


    // Shows an achievements list
    public function index()
    {
        $achievements = Achievements::all();
        return view('admin.achievements.index', compact('achievements'));
    }

    // Shows the form for a new achievement
    public function create()
    {
        return view('admin.achievements.create');
    }

    // Stores a new achievement in the bd
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        Achievements::create($request->only(['name', 'description']));

        return redirect()->route('admin.achievements.index')
            ->with('success', 'Achievement created successfully!');
    }

    // Shows a single achievement
    public function show(Achievements $achievement)
    {
        return view('admin.achievements.show', compact('achievement'));
    }

    // Shows the form to edit a question
    public function edit(Achievements $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    // Updates the achievement after submitting the form
    public function update(Request $request, Achievements $achievement)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $achievement->update($request->only(['name', 'description']));

        return redirect()->route('admin.achievements.index')
            ->with('success', 'Achievement updated successfully!');
    }

    // Deletes an achievement
    public function destroy(Achievements $achievement)
    {
        $achievement->delete();
        return redirect()->route('admin.achievements.index')
            ->with('success', 'Achievement deleted successfully!');
    }
}
