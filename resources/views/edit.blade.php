@extends('layout.app')

@section('title', 'Update Books')

@section('styles')
<style>
    .book-form div {
        margin-bottom: 20px;
    }
    .book-form input {
        display: block;
        width: 60%;
        padding: 10px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    .book-form input[type="submit"] {
        color: white;
        text-decoration: none;
        background-color: #27788A;
        padding: 10px 15px;
        border-radius: 5px;
        border: 1px;

    }

    .book-form input[type="submit"]:hover {
        color: white;
        background-color: #1B6575;
        text-decoration: none;
    }
</style>
@endsection

@section('content')
<h1>Rellena los gaps del formulario</h1>

<form class="book-form" action="{{ route('books.update', $book->id ) }}" method="post">
    @csrf

    @method('PUT')

    <div>
        <label for="">Title</label>
        <input type="text" id="title" name="title" value="{{ $book->title}}">
    </div>

    <div>
        <label for="">Author Name</label>
        <input type="text" id="author_name" name="author_name" value="{{ $book->author_name}}">
    </div>

    <div>
        <label for="">ISBN</label>
        <input type="text" id="isbn" name="isbn" value="{{ $book->isbn}}">
    </div>

    <div>
        <label for="">Published year</label>
        <input type="year" id="published_year" name="published_year" value="{{ $book->published_year}}">
    </div>

    <input type="submit" value="Update book">


</form>
@endsection