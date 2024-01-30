<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Themes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{

    public function checkAllQuestions()
    {
        // Obtém todas as perguntas e os nomes dos temas relacionados
        $questions = Questions::join('themes', 'questions.themeId', '=', 'themes.themeId')
            ->select(
                'themes.themeName',
                'questions.questionsId',
                'questions.themeId',
                'questions.questionsText',
                'questions.correctAnswer',
                'questions.wrongAnswer1',
                'questions.wrongAnswer2',
                'questions.wrongAnswer3',
                'questions.created_at'
            )
            ->orderBy('themes.themeName') // Ordena pelo nome do tema
            ->get();

        // Agrupa as perguntas pelo nome do tema
        $groupedQuestions = [];
        foreach ($questions as $question) {
            $themeName = $question->themeName;
            $groupedQuestions[$themeName][] = $question;
        }

        return view('/admin/questions/checkQuestions', compact('groupedQuestions'));
    }



    // Show a list of questions
    public function index()
    {
        $questions = Questions::all();
        return view('admin.questions.index', compact('questions'));
    }
    // Show the form to create a new question
    public function create()
    {
        return view('admin.questions.create');
    }

    // Store a newly created question in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'theme_id' => 'required',
            'question_text' => 'required',
            'correct_answer' => 'required',
            'wrong_answer1' => 'required',
            'wrong_answer2' => 'required',
            'wrong_answer3' => 'required',
        ]);

        Questions::create($request->all());

        return redirect()->route('admin.questions.index')
            ->with('success', 'Question created successfully!');
    }

    // Show a specific question
    public function show(Questions $question)
    {
        return view('admin.questions.show', compact('question'));
    }

    // Show the form to edit a question
    public function edit(Questions $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    // Update a question after the form is submitted
    public function update(Request $request, Questions $question)
    {
        $this->validate($request, [
            'theme_id' => 'required',
            'question_text' => 'required',
            'correct_answer' => 'required',
            'wrong_answer1' => 'required',
            'wrong_answer2' => 'required',
            'wrong_answer3' => 'required',
        ]);

        $question->update($request->all());

        return redirect()->route('admin.questions.index')
            ->with('success', 'Question updated successfully!');
    }

    // Delete a question
    public function destroy(Questions $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')
            ->with('success', 'Question deleted successfully!');
    }
}



/*  CODIGO ANTES DA SOLUÇÃO RASCa

  namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Themes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{

    public function checkAllQuestions()
    {
        $questions = Questions::join('themes', 'questions.themeId', '=', 'themes.themeId')
            ->select(
                'themes.themeName',
                'questions.questionsId',
                'questions.themeId',
                'questions.questionsText',
                'questions.correctAnswer',
                'questions.wrongAnswer1',
                'questions.wrongAnswer2',
                'questions.wrongAnswer3',
                'questions.created_at'
            )
            ->orderBy('themes.themeName')
            ->orderBy('questions.created_at')
            ->get();

        return view('/admin/questions/checkQuestions', compact('questions'));
    }




    // Show a list of questions
    public function index()
    {
        $questions = Questions::all();
        return view('admin.questions.index', compact('questions'));
    }
    // Show the form to create a new question
    public function create()
    {
        return view('admin.questions.create');
    }

    // Store a newly created question in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'theme_id' => 'required',
            'question_text' => 'required',
            'correct_answer' => 'required',
            'wrong_answer1' => 'required',
            'wrong_answer2' => 'required',
            'wrong_answer3' => 'required',
        ]);

        Questions::create($request->all());

        return redirect()->route('admin.questions.index')
            ->with('success', 'Question created successfully!');
    }

    // Show a specific question
    public function show(Questions $question)
    {
        return view('admin.questions.show', compact('question'));
    }

    // Show the form to edit a question
    public function edit(Questions $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    // Update a question after the form is submitted
    public function update(Request $request, Questions $question)
    {
        $this->validate($request, [
            'theme_id' => 'required',
            'question_text' => 'required',
            'correct_answer' => 'required',
            'wrong_answer1' => 'required',
            'wrong_answer2' => 'required',
            'wrong_answer3' => 'required',
        ]);

        $question->update($request->all());

        return redirect()->route('admin.questions.index')
            ->with('success', 'Question updated successfully!');
    }

    // Delete a question
    public function destroy(Questions $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')
            ->with('success', 'Question deleted successfully!');
    }
}*/
