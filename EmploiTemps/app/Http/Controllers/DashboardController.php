<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($id = 1)
    {
        $groupe = Groupe::find($id);
        $groupes = Groupe::all();
        $lessons = Lesson::all();
        $modules = Module::all();
        $rooms = Room::all();
        return view('admin.dashboard',compact('groupes','lessons','modules','rooms','groupe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
