@extends('layouts.app')

@section('content')
  <h1 class="page-header">Share Your Gaming Screenshots with the World</h1>
  <p class="text-center">Let the world see your amazing screenshots by <a href="#">sharing</a> your experiences for the rest of the gaming world.
  </p><br>
  <div class="col-lg-4 col-lg-offset-4">
    <form style="display:inline; " class="search">
      <input class="" type="text" name="search" placeholder="Search..">
    </form>
  </div>

  {{-- content --}}
  <div class="wf-container">
      <div class="wf-box"><a href="#">
          <img class="img-wf" src="img/gta5.jpg"></a>
      </div>
  </div>
@endsection
