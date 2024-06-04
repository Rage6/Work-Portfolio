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
        <scroll-bar-component></scroll-bar-component>
        <div class="projectListOutline" id="projectListOutline">
          <div class="projectList" id="projectList">
            @foreach ($all_projects as $one_project)
              <project-component 
                id="{{ $one_project->id }}" 
                img_path="{{ $one_project->img_path }}" 
                site_url="{{ $one_project->site_url }}">
              </project-component>
            @endforeach
          </div>
        </div>
        <div class="selectedProjects">
          <div class="emptyContent">
            
          </div>
          @foreach ($all_projects as $one_project)
            <detail-component 
              id="{{ $one_project->id }}" 
              name="{{ $one_project->name }}" 
              description="{{ $one_project->description }}"
              site_url="{{ $one_project->site_url }}"
              code_url="{{ $one_project->code_url }}"
              img_path="{{ $one_project->img_path }}"
              current="">
            </detail-component>
          @endforeach
        </div>
      @else 
        <div class="projectList" id="projectList">
            <div class="oneProject projectImg" style='background-image:url({{ url($one_project->img_path) }})'>
              <i>No works found</i>
            </div>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
