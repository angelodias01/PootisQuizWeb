<?php

namespace App\Http\Controllers;

use App\Models\AchievementsUser;
use Illuminate\Http\Request;

class AchievementsUserController extends Controller
{
    // Show a list of achievement users
    public function index()
    {
        $achievementUser = AchievementsUser::all();
        return view('admin.achievementUser.index', compact('achievementUser'));
    }

    // Show the form to create a new achievement user
    public function create()
    {
        return view('admin.achievementUser.create');
    }

    // Store a newly created achievement user in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'achievement_id' => 'required',
            'date_earned' => 'required',
        ]);

        AchievementsUser::create($request->all());

        return redirect()->route('admin.achievementUser.index')
            ->with('success', 'Achievement user created successfully!');
    }

    // Show a specific achievement user
    public function show(AchievementsUser $achievementUser)
    {
        return view('admin.achievementUser.show', compact('achievementUser'));
    }

    // Show the form to edit an achievement user
    public function edit(AchievementsUser $achievementUser)
    {
        return view('admin.achievementUser.edit', compact('achievementUser'));
    }

    // Update an achievement user after the form is submitted
    public function update(Request $request, AchievementsUser $achievementUser)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'achievement_id' => 'required',
            'date_earned' => 'required',
        ]);

        $achievementUser->update($request->all());

        return redirect()->route('admin.achievementUser.index')
            ->with('success', 'Achievement user updated successfully!');
    }

    // Delete an achievement user
    public function destroy(AchievementsUser $achievementUser)
    {
        $achievementUser->delete();
        return redirect()->route('admin.achievementUser.index')
            ->with('success', 'Achievement user deleted successfully!');
    }
}
