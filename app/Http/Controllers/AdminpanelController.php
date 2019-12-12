<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{

    public function registered()
    {	
    	$users = User::all();
    	return view('adminpanel')->with('users',$users);
    }

    public function edit(Request $request, $id)

	{
		$users = User::find($id);
		return view('adminpaneledit')->with('users',$users);


   		
	}

	public function update(Request $request, $id)

	{	

		$this->validate($request,[
	   'name' => 'required',
	   'nohp' => 'required'
    	]);		

		$users = User::find($id);
		$users->name = $request->name;
		$users->nohp = $request->nohp;
		$users->save();

		return redirect('/adminpanel')->with('success', 'Data updated');
	}

	public function delete(Request $request, $id)
	{
    
    $users = User::find($id);
    $users->delete();
    return redirect('/adminpanel')->with('danger', 'Data deleted');
	
	}

}
