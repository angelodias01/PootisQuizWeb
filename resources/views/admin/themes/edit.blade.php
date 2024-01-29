
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Theme</h2>
        <form method="POST" action="{{ route('themes.update', $themes->id) }}">
            @csrf
            @method('PUT')
            <!-- Bloody formulário para atualizar -->
            <button class="bg-green-500 hover:bg-green-700 text-gray-300 font-bold py-2 px-4 rounded-full" type="submit">Update</button>
        </form>
    </div>
@endsection