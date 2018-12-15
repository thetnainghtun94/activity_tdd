@extends('Books.layout')

@section('content')
    <h1 class="text-center">Morls Laravel 5.7 Tutorials</h1>
    <a href="{{ route('books.index') }}" class="btn btn-primary pull-right">Back</a>
    <div class="row">

        <div class="col-md-4 col-md-offset-3">
            <form action="{{ route('books.store') }}" method="POST">
                <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                    <label>Book Title</label>
                    <input type="text" name="name" class="form-control">
                    <span class="help-block">
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                         @endif
                    </span>
                </div>
                <div class="form-group {{ $errors->has('author') ? 'has-error': '' }}">
                    <label>Author Name</label>
                    <input type="text" name="author" class="form-control">
                    <span class="help-block">
                        @if($errors->has('author'))
                            {{ $errors->first('author') }}
                        @endif
                    </span>
                </div>
                <button type="submit" class="btn btn-success btn-block">SUBMIT</button>
                @csrf
            </form>
        </div>
    </div>
@endsection