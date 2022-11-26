<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Game;
use App\Models\Home;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.login');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check_user(Request $request){
        $game = Game::all();
        $blog = Blog::all();
        $home = Home::all();

        if ($request->username== 'Dilshan'){
            if ($request->password== '1234'){
//                dd('true');
                return view('admin.index', compact('game', 'blog', 'home'));

            }else{
                return redirect()->back()->with(session()->flash('message','password invalid'));
//                dd('password invalid');
            }
        }else{
            return redirect()->back()->with(session()->flash('message','username  invalid'));
//            dd('username  invalid');
        }

//       dd($request->username== 'Dilshan.Herath');
//       dd($request->password== '1234');
    }
}
