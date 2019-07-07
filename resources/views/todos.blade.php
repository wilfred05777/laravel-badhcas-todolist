@extends('layout')

@section('content')
    <h2 class="">Todo List</h2>
    <div class="row">

        <div class="col-lg-12 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input name="todo" type="text" class="form-control input-group-lg" placeholder="Create New Input">

            </form>
        </div>
    </div>
    <hr>
    <h3>
    @foreach($todos as $todo)
        {{ $todo->todo }}
            <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger">Delete</a>
            <a href="{{ route('todo.update',['id'=>$todo->id]) }}" class="btn btn-primary">Update</a>

                @if(!$todo->completed)
                    <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark As Completed</a>

                    @else

                    <span class="text-sucess" class="btn btn-info">Completed</span>
                @endif

            <hr>
    @endforeach
    </h3>
    <div class="pagination-lg">

    {!! $todos->links() !!}
    </div>
@endsection
