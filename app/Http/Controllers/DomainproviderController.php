<?php

namespace App\Http\Controllers;

use App\Models\Domainprovider;
use Illuminate\Http\Request;

class DomainproviderController extends Controller
{

    public function index()
    {
        $domainproviders=Domainprovider::all();
        return view('dominproviders.index',compact('domainproviders'));

    }


    public function create()
    {
        return view('dominproviders.create');
    }


    public function store(Request $request)
    {

        $request-> validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        Domainprovider::create(
           $request->all()
        );

    }


    public function show($id)
    {
        $domainprovider = Domainprovider::findorFail($id);
        return view('dominproviders.show',compact('domainprovider'));
    }


    public function edit($id)
    {
        $domainprovider = Domainprovider::findorFail($id);
        return view('dominproviders.edit',compact('domainprovider'));
    }


    public function update(Request $request,$id)
    {
        $domainprovider=Domainprovider::findorFail($id);
        $domainprovider-> update(
            $request->all()
        );
        return redirect('domainprovider');

    }


    public function destroy($id)
    {
        Domainprovider::destroy($id);
        return redirect('domainprovider');
    }
    public function search(Request $request) {
        $domainprovider= (Domainprovider::where('name', 'LIKE',"%{$request->search}%"))->paginate();;
        return view('dominproviders.index',compact('domainprovider'));

    }
}
