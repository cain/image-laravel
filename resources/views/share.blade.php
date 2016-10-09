@extends('layouts.app')

@section('content')
  <form method="POST" action="/share" enctype="multipart/form-data">
    {{csrf_field()}}

    <input type="file" name="share" />

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection
