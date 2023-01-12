<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Serve;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    public function index()
    {
        //
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
        //
    }


    public function show(Domain $domain)
    {
        //
    }


    public function edit(Domain $domain)
    {
        //
    }


    public function update(Request $request, Domain $domain)
    {
        //
    }


    public function destroy(Domain $domain)
    {
        //
    }
}
