@extends('layouts.public')

@section('content')
<div class="centerWelcome">
  <div class="works">
    <div class="worksTitle">
      <span>
        My Works
      </span>
    </div>
    <div class="workGallery">
      @if (count($all_projects) > 0)
        <div class="projectListOutline">
          <div class="projectList">
            @foreach ($all_projects as $one_project)
              <svg
                class="oneProject"
                data-id="{{ $one_project->id }}"
                viewBox="0 0 100 100"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <pattern 
                    id="projectSquare_{{ $one_project->id }}" 
                    patternUnits="userSpaceOnUse" 
                    width="85" 
                    height="85">
                      <image 
                        class="projectImg"
                        href="{{ url($one_project->img_path) }}" 
                        x="15" 
                        y="15" 
                        width="70" 
                        height="70" />
                  </pattern>
                  <radialGradient 
                    id="projectCircle_{{ $one_project->id }}">
                      <stop offset="97%" stop-color="rgba(11, 45, 57, 0.7)"/>
                      <stop offset="97%" stop-color="#E7B85A"/>
                  </radialGradient>
                </defs>
                <a href="{{ $one_project->site_url }}" target="_blank">
                  <circle 
                    fill="url('#projectCircle_{{ $one_project->id }}')"
                    cx="50" 
                    cy="50" 
                    r="50" />
                </a>
                <a href="{{ $one_project->site_url }}" target="_blank">
                  <rect 
                    x="15" 
                    y="15" 
                    height="70" 
                    width="70" 
                    fill="url('#projectSquare_{{ $one_project->id }}')" />
                </a>
              </svg>
            @endforeach
          </div>
        </div>
        <div>
          <!-- Testing -->
        </div>
      @else 
        <div class="projectList">
            <div class="oneProject projectImg" style='background-image:url({{ url($one_project->img_path) }})'>
              <i>No works found</i>
            </div>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
