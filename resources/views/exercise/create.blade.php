@extends('layouts.app')
@section('content')
<div class="container">
  <div class="p-5 my-2 bg-info text-white">
    <h2>Add exercise</h2>
  </div>

  @include('layouts.errors')
  @include('layouts.message')

  <form action="{{route('exercises.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="gym">select gym</label>
      <select name="gym" id="gym" class="form-control">
        @foreach ($gyms as $gym)
          <option value="{{$gym->id}}">{{$gym->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select name="type" id="type" class="form-control">
          @foreach ($types as $type)
            <option value="{{$type}}">{{$type}}</option>
          @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="rep">Rep</label>
        <input type="text" name="rep" id="rep" class="form-control">
    </div>

    <div class="form-group">
      <button class="btn btn-outline-primary" type="submit">Add exercise</button>
    </div>
    
    
  </form>



</div>
@endsection


