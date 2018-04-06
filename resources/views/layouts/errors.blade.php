@if ($errors->all())
<div class="alert alert-danger my-2">
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</div>
@endif