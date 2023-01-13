<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Serve;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    public function index()
    {
        $domains=Domain::all();
        return view('domains.index',compact('domains'));
    }



    public function create()
    {
        $servers = Serve::all();
        if($servers->count()==0){
            return redirect()->route('server.create');

        }
        return view('domains.create',compact('servers'));

    }


    public function store(Request $request)
    {
        Domain::create([
            // 'name of data'=>$request->name get of forma,
            'domain_name'=>$request->domain_name,
            'DueDate'=>$request->DueDate,
            'server_id'=>$request->server_id


        ]);
         return redirect('domain');
    }


    public function show($id)
    {
        $domain = Domain::findorFail($id);
        return view('domains.show',compact('domain'));
    }


    public function edit($id)
    {
        $servers = Serve::all();
        $domain = Domain::findorFail($id);
        return view('domains.edit',compact('domain','servers'));





    }


    public function update(Request $request,$id)
    {
        $domain=Domain::findorFail($id);



        $domain-> update(
           $request->all()
        );



        return redirect()->route('domains.index');
    }


    public function destroy($id)
    {
        Domain::destroy($id);
        return redirect()->route('domains.index');
    }

    public function search(Request $request) {
        $domain= (Serve::where('domain_name', 'LIKE',"%{$request->search}%"))->paginate();;
        return view('domains.index',compact('domain'));
    }
}
