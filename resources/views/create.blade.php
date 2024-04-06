@extends('layout.app')

@section('title', 'Register book')


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

<form class="book-form" action="{{ route('books.store') }}" method="post">
    @csrf
    <div>
        <label for="">Title</label>
        <input type="text" id="title" name="title">
    </div>

    <div>
        <label for="">Author</label>
        <input type="text" id="description" name="author_name">
    </div>

    <div>
        <label for="">ISBN</label>
        <input type="text" id="Instructor" name="isbn">
    </div>

    <div>
        <label for="">Published year</label>
        <input type="year" id="email" name="published_year">
    </div>

    <input type="submit" value="Add book">


</form>
@endsection
