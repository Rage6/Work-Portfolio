<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

// use App\Mail\TestTemplate;
//
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function add_project(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string',
            'site_url'     => 'nullable|string',
            'code_url'     => 'nullable|string',
            'description'  => 'nullable|string',
            'skills'       => 'nullable|string',
            'img'          => 'nullable|image'
        ]);

        $new_project = new Project;
        $new_project->name        = $request->project_name;
        $new_project->site_url    = $request->site_url;
        $new_project->code_url    = $request->code_url;
        $new_project->description = $request->description;
        $new_project->skills      = $request->skills;

        $img_path = $request->file('img')->store('public/projects');
        $img_path = str_replace("public","/storage",$img_path);
        $new_project->img_path = $img_path;

        $new_project->save();

        return redirect()->route('home');
    }

    // public function email(Request $request)
    // {
    //   $request->validate([
    //     'email' => 'string',
    //     'name' => 'string',
    //     'title' => 'string',
    //     'content' => 'string'
    //   ]);
    //   Mail::to('nicholas.vogt2017@gmail.com')->send(new TestTemplate($request->title,$request->content,$request->email,$request->name));
    //   return redirect()->route('home');
    // }
}
