@extends('layouts.app')
@section('content')
<div class="container">
  <div class="p-5 my-2 bg-info text-white">
    <h2>Add Gym</h2>
  </div>

  @include('layouts.errors')
  @include('layouts.message')

  <form action="{{route('gyms.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="about">About</label>
        <textarea name="about" id="about" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-outline-primary" type="submit">Add Gym</button>
    </div>
    
    
  </form>



</div>
@endsection


