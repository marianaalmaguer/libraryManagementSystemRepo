@extends('layout.app')

@section('title', 'Book records')

@section('styles')
<style>
    .book-container {
        margin-bottom: 20px;
    }

    .add-book-button {
        color: white;
        text-decoration: none;
        background-color: #27788A;
        padding: 10px 15px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }

    .add-book-button:hover {
        color: white;
        background-color: #1B6575;
        text-decoration: none;
    }

    .book-details {
        margin-bottom: 5px;
    }
    .delete-book-button {
    color: white;
    text-decoration: none;
    background-color: #27788A;
    padding: 10px 15px;
    border-radius: 5px;
    display: inline-block;
    margin-top: 10px;
    border: none;
    }

    .delete-book-button:hover {
        color: white;
        background-color: #1B6575;
        text-decoration: none;
    }

</style>
@endsection

@section('content')
    <h1>¡Welcome! This is the content of the Books: </h1>
    <a class="add-book-button" href="{{ route('books.create') }}">Add new book</a>



    <h2>Registered books</h2>
    @foreach ($books as $book)
        <div class="book-container">
            <div class="book-details" >Book Title: {{$book->title}}</div>
            <div class="book-details">Author: {{$book->author_name}}</div>
            <div class="book-details">ISBN: {{$book->isbn}}</div>
            <div class="book-details">Published year: {{$book->published_year}}</div>
            <a class="add-book-button" href="{{ route('books.edit', $book->id)}}">Edit book</a>
            <form action="{{route('books.destroy', $book->id)}}" method="post">
                @method('DELETE')
                @csrf

                <button type="submit" class="delete-book-button">Delete</button>
            </form>

        </div>
    @endforeach
@endsection
