<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{   
    /**
    * Display a listing of the resource.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $userData = User::all();
        return view('user.index')->with("users", $userData);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Creating a new resource.
     * 
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $rule  =  array(
            'name'       => 'required',
            'comments'    => 'required',
        ) ;
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) {
            return Redirect::to("/create")->withErrors($validator);
        }
        $userData = User::create($request->all());

        return redirect('/');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $userData = User::find($id);
        return view('user.edit')->with("user", $userData);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rule  =  array(
            'name'       => 'required',
            'comments'    => 'required',
        ) ;
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) {
            return Redirect::to("/edit/$id")->withErrors($validator);
        }

        $userData = User::find($id);
        $userData->name = $request->input('name');
        $userData->comments = $request->input('comments');
        $userData->update();

        return redirect('/');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $userData = User::find($id);
        return view('user.show')->with("user", $userData);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/');
    }

}
