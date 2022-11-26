<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            $game = new Game();

            $name = $request->image;
            $imagename = time().$name->getClientOriginalName();
            $name->storeAs('/public', $imagename);

            $game->title = $request['title'];
            $game->description = $request['description'];
            $game->photo = $imagename;

            $game->save();
            return redirect()->back()->withSuccess('message','Game Added Succefully');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
        $name = $request->image;
        $imagename = time().$name->getClientOriginalName();
        $name->storeAs('/public', $imagename);

        Game::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $imagename
        ]);
        return redirect(route('admin.index'))->with('message', 'Game Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game -> delete();
        return redirect('admin');
    }
}
