<?php

namespace App\Http\Controllers;

use App\user;
use App\Admin;
use App\Question;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $users=User::all();
        return view('admin')->with('users',$users);
        //return redirect()->route('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function admin_manage(){
        $users=User::all();
        return view('admin_manage')->with('users',$users);
        //return redirect()->route('admin');
    }
    
    //public function admin_add_user()
   // {
    //    return view('admin_add_user');
  //  }

  
  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     /* public function store(Request $request)
    {
      //Insert data into Student Table
      $user = new User;
      $user->$i=$request->$i;
      $user->id = $request->id;
      $user->name= $request->name;
      $user->email = $request->email;
      $user->role = $request->role;
      $user->save();

      return redirect()->route('admin_add_user');

    }*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        return view("edit")->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $user = User::find($id);
         $user->name = $request->name;
      $user->email = $request->email;
      $user->role = $request->role;
      $user->save();
      return redirect()->route('admin_manage');

    }
   

    public function delete($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect()->route('admin_manage');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Admin $admin)
    //{
        //
    //}
}
