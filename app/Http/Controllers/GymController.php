<?php

namespace App\Http\Controllers;

use App\Gym;
use Session;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gyms = Gym::all();
        return view('gym.index', compact('gyms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gym.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'about' => 'required|min:15',
        ]);
        Gym::create([
            'name' => $request->name,
            'about' => $request->about,
        ]);
        Session::flash('message', 'Gym added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        return view('gym.show', compact('gym'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit(Gym $gym)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gym $gym)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gym $gym)
    {
        $gym->delete();
        return redirect(route('gyms.index'));
    }
}
