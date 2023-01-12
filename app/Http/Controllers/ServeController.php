<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Serve;
use Illuminate\Http\Request;

class ServeController extends Controller
{

    public function index()
    {


        $servers = Serve::all();
        return view('servers.index',compact('servers'));
    }


    public function create()
    {
        $providers = Provider::all();
        if($providers->count()==0){
            return redirect()->route('provider.create');

        }
        return view('servers.create',compact('providers'));
    }


    public function store(Request $request)
    {

        Serve::create(
            $request->all()
        );
        return redirect('server');





       // return response('data insert succese');
    }


    public function show(Serve $serve)
    {


    }


    public function edit($id)
    {
        $serve = Serve::findorFail($id);
        return view('servers.edit',compact('serve'));

    }


    public function update(Request $request,$id)
    {
        $serve=Serve::findorFail($id);
        $serve-> update(
            $request->all()
        );



        return redirect()->route('servers.index');
    }


    public function destroy($id)
    {
        Serve::destroy($id);
        return redirect()->route('servers.index');
    }
}
