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
        // Retrieve all questions and related theme names
        $questions = DB::table('questions')
            ->join('themes', 'questions.themeId', '=', 'themes.themeId')
            ->select(
                'questions.questionsId',
                'questions.themeId',
                'themes.themeName',
                'questions.questionsText',
                'questions.correctAnswer',
                'questions.wrongAnswer1',
                'questions.wrongAnswer2',
                'questions.wrongAnswer3',
                'questions.created_at',
                'questions.updated_at'
            )
            ->orderBy('themes.themeName') // Order by theme name in descending order
            ->get();

        // Group questions by theme name
        $groupedQuestions = $questions->groupBy('themeName');

        // Pass the grouped questions to the view
        return view('/admin/questions/checkQuestions', compact('groupedQuestions'));
    }

    public function deleteQuestion(Questions $question)
    {
        $question->delete();
        return redirect()->route('check.all.questions')->with('success', 'Question deleted successfully!');
    }

    public function createQuestion()
    {
        $themes = Themes::all();
        return view('admin.questions.createQuestion', compact( 'themes'));

    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'theme_id' => 'required|string|max:255',
            'question_text' => 'required|string',
            'correct_answer' => 'required|string',
            'wrong_answer_1' => 'required|string',
            'wrong_answer_2' => 'required|string',
            'wrong_answer_3' => 'required|string',
            'selected_answer' => 'string'
        ]);

        // Criação de uma nova instância de Question
        $question = new Questions();
        $question->themeId = $validatedData['theme_id'];
        $question->questionsText = $validatedData['question_text'];
        $question->correctAnswer = $validatedData['correct_answer'];
        $question->wrongAnswer1 = $validatedData['wrong_answer_1'];
        $question->wrongAnswer2 = $validatedData['wrong_answer_2'];
        $question->wrongAnswer3 = $validatedData['wrong_answer_3'];
        $question->selectedAnswer = "";
        $question->created_at = now();
        $question->updated_at = null;

        // Salva a nova questão no banco de dados
        $question->save();

        // Redireciona para uma rota de sucesso com uma mensagem flash
        return redirect()->route('check.all.questions')->with('success', 'Questão criada com sucesso!');
    }



    // Show a list of questions
    public function index()
    {
        $questions = Questions::all();
        return view('admin.questions.index', compact('questions'));
    }


    // Show a specific question
    public function show(Questions $question)
    {
        return view('admin.questions.show', compact('question'));
    }

    // Show the form to edit a question
    public function editQuestion( $question)
    {
        $question = Questions::findOrFail($question);
        $themes = Themes::all();
        return view('admin.questions.editQuestion',compact('question', 'themes'));
    }
    // Update a theme after the form is submitted
    public function updateQuestion(Request $request, Questions $question)
    {
        $validatedData = $request->validate([
            'theme_id' => 'required|string|max:255',
            'question_text' => 'required|string',
            'correct_answer' => 'required|string',
            'wrong_answer_1' => 'required|string',
            'wrong_answer_2' => 'required|string',
            'wrong_answer_3' => 'required|string',
            'selected_answer' => 'string'
        ]);

        $question->themeId = $validatedData['theme_id'];
        $question->questionsText = $validatedData['question_text'];
        $question->correctAnswer = $validatedData['correct_answer'];
        $question->wrongAnswer1 = $validatedData['wrong_answer_1'];
        $question->wrongAnswer2 = $validatedData['wrong_answer_2'];
        $question->wrongAnswer3 = $validatedData['wrong_answer_3'];
        $question->selectedAnswer = "";
        $question->updated_at = now();
        $question->save();

        return redirect()->route('check.all.questions')->with('success', 'Question updated successfully!');
    }

    // Delete a question
    public function destroy(Questions $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')
            ->with('success', 'Question deleted successfully!');
    }
}
