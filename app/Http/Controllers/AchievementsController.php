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
    public function deleteAchievement(Achievements $achievement)
    {
        $achievement->delete();
        return redirect()->route('check.all.achievements')->with('success', 'Achievement deleted successfully!');
    }
    public function createAchievement()
    {
        $achievements = Achievements::all();
        return view('admin.achievements.createAchievement', compact('achievements'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'achievement_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $achievement = new Achievements();
        $achievement->achievementName = $validatedData['achievement_name'];
        $achievement->description = $validatedData['description'];
        $achievement->save();

        return redirect()->route('check.all.achievements')->with('success', 'Achievement created successfully!');
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
        return view('admin.achievements.createAchievement');
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
