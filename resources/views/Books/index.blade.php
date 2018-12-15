@extends('Books.layout')

@section('content')
    <h1 class="text-center">Morls Laravel 5.7 Tutorials</h1>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
         @endif

    <div class="row">
        <a href="{{ route('books.create') }}" class="btn btn-primary pull-right">Create</a>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->author}}</td>
                        <td>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-info btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
@endsection