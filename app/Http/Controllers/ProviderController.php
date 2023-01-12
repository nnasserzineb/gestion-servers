<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Team;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::all();
     return view ('providers.index')->with('providers', $providers);
    }


    public function create()
    {
       $teams = Team::all();
          if($teams->count()==0){
           return redirect()->route('team.create');

       }
         return view('providers.create')->with('teams',$teams);


    }


    public function store(Request $request)
    {
        $request->validate([
            'name_provider'=>'required',
            'link'=>'required',
            'user'=>'required',
            'password'=>'required'
        ]);
        $input = $request->all();
        $providers =Provider::create($input);
        foreach($request->teams as $team){
            $providers->teams()->attach($team);

        }

         return redirect('provider')->with('flash_message', 'provider Addedd!');

    }


    // public function show(Provider $provider)
    // {
    //     //
    //  }


    public function edit($id)
    {
        $provider = Provider::findorFail($id);
        return view('providers.edit',compact('provider'));
    }


    public function update(Request $request, $id)
    {
        $provider = Provider::findorFail($id);
        $input = $request->all();
        $provider->update($input);
        return redirect('provider')->with('flash_message', 'provider Updated!');
    }


    public function destroy($id)
    {
        Provider::destroy($id);
        return redirect('provider')->with('flash_message', 'provider deleted!');
    }
    public function search(Request $request) {
        $providers= (Provider::where('name_provider', 'LIKE',"%{$request->search}%"))->paginate();;
        return view('providers.index',compact('providers'));
     }

}
