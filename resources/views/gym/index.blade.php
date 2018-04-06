@extends('layouts.app')
<?php $bg = ['bg-primary', 'bg-secondary', 'bg-danger', 'bg-warning', 'bg-info', 'bg-success'] ?>
@section('content')
<div class="container">
    <div class="p-5 bg-info text-white my-2">
      <h3>List of Gym</h3>
      <a class="btn btn-secondary" href="{{route('gyms.create')}}">add a gym</a>
    </div>
    <div class="row">
      @foreach ($gyms as $gym)
        <div class="col-md-4 py-2">
          <a href="{{route('gyms.show', $gym->id)}}">
            <div class="card {{$bg[rand(0, 5)]}}">
              <div class="card-body text-white">
                <h3>{{$gym->name}}</h3>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection