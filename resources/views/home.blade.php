@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <example-component></example-component>
                <div>
                    <div>
                        UPLOAD A NEW PROJECT
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('add_project') }}">
                        @csrf
                        <input name="project_name" type="text" placeholder="Enter project name" />
                        <br>
                        <input name="site_url" type="text" placeholder="Enter its URL" />
                        <br>
                        <input name="code_url" type="text" placeholder="Enter its link in GitHub" />
                        <br>
                        <textarea name="description" type="text" placeholder="Describe this project"></textarea>
                        <br>
                        <input name="skills" type="text" placeholder="Enter the skills in this project" />
                        <br>
                        <input name="img" type="file" accept="image/png, image/jpeg, image/jpg" />
                        <br>
                        <button type="submit">
                            ADD PROJECT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
