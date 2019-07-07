@extends('layout')
@section('content')
    <h2 class="">Edit Your Todo List</h2>
    <div class="row">
        <div class="col-lg-12 col-lg-offset-3">
            <form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="post">
                {{ csrf_field() }}
                <input name="todo" type="text" class="form-control input-group-lg" value="{{ $todo->todo }}" placeholder="Create New Input">

            </form>
        </div>
    </div>
    <hr>
@endsection
