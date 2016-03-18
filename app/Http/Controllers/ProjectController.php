<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::where('status', '=', '1')->get();

        return view('projects.index')->with(compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project                    = new Project;
        $project->user_id           = Auth::user()->id;
        $project->project_name      = $request->project_name;
        $project->author_name       = $request->author_name;
        $project->author_address    = $request->author_address;
        $project->author_email      = $request->author_email;
        $project->author_phone      = $request->author_phone;
        $project->contact_name      = $request->contact_name;
        $project->contact_address   = $request->contact_address;
        $project->contact_email     = $request->contact_email;
        $project->contact_phone     = $request->contact_email;
        $project->identity_card     = $request->identity_card;
        $project->category          = $request->category;
        $project->context           = $request->context;
        $project->application       = $request->application;
        $project->goals             = $request->goals;
        $project->informations      = $request->informations;
        $project->save();
        return redirect()
            ->route('projets.show', $project->id)
            ->with(compact('project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $project = Project::findOrFail($id);
            return view('projects.show')->with(compact('project'));
        }catch(\Exception $e) {
            return redirect()->route('projet.index')->with(['erreur' => 'Oooooooppppsssssss !!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project   = Project::find($id);
        return view('projects.edit')->with(compact('project'));
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
        $project                    = Project::find($id);
        $project->user_id           = Auth::user()->id;
        $project->project_name      = $request->project_name;
        $project->author_name       = $request->author_name;
        $project->author_address    = $request->author_address;
        $project->author_email      = $request->author_email;
        $project->author_phone      = $request->author_phone;
        $project->contact_name      = $request->contact_name;
        $project->contact_address   = $request->contact_address;
        $project->contact_email     = $request->contact_email;
        $project->contact_phone     = $request->contact_email;
        $project->identity_card     = $request->identity_card;
        $project->category          = $request->category;
        $project->context           = $request->context;
        $project->application       = $request->application;
        $project->goals             = $request->goals;
        $project->informations      = $request->informations;
        $project->update();
        return redirect()->route('projet.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projet.index');
    }
}
