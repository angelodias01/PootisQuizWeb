<?php

namespace App\Http\Controllers;

use App\Models\AchievementUser;
use Illuminate\Http\Request;

class AchievementUserController extends Controller
{
    // Show a list of achievement users
    public function index()
    {
        $achievementUsers = AchievementUser::all();
        return view('admin.achievementUser.index', compact('achievementUsers'));
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

        AchievementUser::create($request->all());

        return redirect()->route('admin.achievementUser.index')
            ->with('success', 'Achievement user created successfully!');
    }

    // Show a specific achievement user
    public function show(AchievementUser $achievementUser)
    {
        return view('admin.achievementUser.show', compact('achievementUser'));
    }

    // Show the form to edit an achievement user
    public function edit(AchievementUser $achievementUser)
    {
        return view('admin.achievementUser.edit', compact('achievementUser'));
    }

    // Update an achievement user after the form is submitted
    public function update(Request $request, AchievementUser $achievementUser)
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
    public function destroy(AchievementUser $achievementUser)
    {
        $achievementUser->delete();
        return redirect()->route('admin.achievementUser.index')
            ->with('success', 'Achievement user deleted successfully!');
    }
}
