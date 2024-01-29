@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Question</h2>
        <form method="POST" action="{{ route('questions.store') }}">
            @csrf
            <!-- Bloody formulário -->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Create</button>
        </form>
    </div>
@endsection
