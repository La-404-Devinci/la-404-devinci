<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all()->load(['tags', 'thumbnail']);

        return Inertia::render('Dashboard/Project/Index', [
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $users = User::all();

        return Inertia::render('Dashboard/Project/Form', [
            'tags' => $tags,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'content' => ['nullable', 'string'],
            'website' => ['nullable', 'url'],
            'dribbble' => ['nullable', 'url'],
            'github' => ['nullable', 'url'],
            'published' => ['required', 'boolean'],

            'thumbnail' => ['nullable', 'string'],
            'tags' => ['required', 'array'],
            'users' => ['required', 'array'],
        ]);

        try {
            // $thumbnail = File::create([
            //     'uri' =>
            // ]);

            $project = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'content' => $request->content,
                'website' => $request->website,
                'dribbble' => $request->dribbble,
                'github' => $request->github,
                'published' => $request->pusblised
            ]);

            $project->users()->sync($request->users);
            $project->tags()->sync($request->tags);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('dashboard.project.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
