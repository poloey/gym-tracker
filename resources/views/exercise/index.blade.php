@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="p-5 bg-info text-white my-2">
      <h3>All Exercises</h3>
      <a class="btn btn-secondary" href="{{route('exercises.create')}}">add a exercise</a>
    </div>
    <table class="table table-border">
      <tr>
        <th>Date</th>
        <th>Gym</th>
        <th>type</th>
        <th>rep</th>
        <th>delete</th>
      </tr>
      @foreach($exercises as $exercise)
      <tr>
        <td>{{$exercise->created_at->toFormattedDateString()}} </td>
        <td>{{$exercise->gym->name}}</td>
        <td>{{$exercise->type}}</td>
        <td>{{$exercise->rep}}</td>
        <td>
          <form class="d-inline"
            onsubmit="return confirm('are you sure you want to delete this entry?')"
            action="{{route('exercises.destroy', ['exercise' => $exercise->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection