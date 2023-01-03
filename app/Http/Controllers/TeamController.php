<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(4);
      return view ('teams.index')->with('teams', $teams);

    }


    public function create()
    {
        return view('teams.create');
    }


    public function store(Request $request)
    {
      $request->validate([
            'name_team'=>'required',
            'number_mailer'=>'required'
        ]);

        $input = $request->all();
        Team::create($input);
        return redirect('team')->with('flash_message', 'Team Addedd!');
    }


    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show')->with('teams', $team);
    }


    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit')->with('teams', $team);
    }


    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $input = $request->all();
        $team->update($input);
        return redirect('team')->with('flash_message', 'Team Updated!');
    }


    public function destroy($id)
    {
        Team::destroy($id);
        return redirect('team')->with('flash_message', 'team deleted!');
    }
    
    public function search(Request $request) {
       $teams= (Team::where('name_team', 'LIKE',"%{$request->search}%"))->paginate();;
       return view('teams.index',compact('teams'));
    }
}
