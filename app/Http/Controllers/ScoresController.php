<?php

namespace App\Http\Controllers;

use App\Models\Scores;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    // Show a list of scores
    public function index()
    {
        $scores = Scores::all();
        return view('admin.scores.index', compact('scores'));
    }

    // Show the form to create a new score
    public function create()
    {
        return view('admin.scores.create');
    }

    // Store a newly created score in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'theme_id' => 'required',
            'score' => 'required',
            'date' => 'required',
        ]);

        Scores::create($request->all());

        return redirect()->route('admin.scores.index')
            ->with('success', 'Score created successfully!');
    }

    // Show a specific score
    public function show(Scores $score)
    {
        return view('admin.scores.show', compact('score'));
    }

    // Show the form to edit a score
    public function edit(Scores $score)
    {
        return view('admin.scores.edit', compact('score'));
    }

    // Update a score after the form is submitted
    public function update(Request $request, Scores $score)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'theme_id' => 'required',
            'score' => 'required',
            'date' => 'required',
        ]);

        $score->update($request->all());

        return redirect()->route('admin.scores.index')
            ->with('success', 'Score updated successfully!');
    }

    // Delete a score
    public function destroy(Scores $score)
    {
        $score->delete();
        return redirect()->route('admin.scores.index')
            ->with('success', 'Score deleted successfully!');
    }
}
