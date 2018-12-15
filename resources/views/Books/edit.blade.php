@extends('Books.layout')

@section('content')
    <h1 class="text-center">Morls Laravel 5.7 Tutorials</h1>
    <h2 class="text-center">Book Edit</h2>
    <a href="{{ route('books.index') }}" class="btn btn-primary pull-right">Back</a>
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                    <label>Book Title</label>
                    <input type="text" name="name" class="form-control" value="{{$book->name}}">
                    <span class="help-block">
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </span>
                </div>
                <div class="form-group">
                    <label>Author Name</label>
                    <input type="text" name="author" class="form-control" value="{{$book->author}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">SUBMIT</button>
                @csrf
                @method('PATCH')
            </form>
        </div>
    </div>
@endsection