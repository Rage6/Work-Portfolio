@extends('layouts.public')

@section('content')
<div class="centerWelcome">
  <div class="works">
    <div class="worksTitle">
      <span>
        My Works
      </span>
    </div>
    @if (count($all_projects) > 0)
      <div class="projectScroll">
        @foreach ($all_projects as $one_project)
          <div class="oneProject projectImg" style='background-image:url({{ url($one_project->img_path) }})'>
            {{ $one_project->name }}
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
@endsection
