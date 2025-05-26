<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id = 1)
    {
        $groupe = Groupe::find($id);
        $groupes = Groupe::all();
        $lessons = Lesson::all();
        $modules = Module::all();
        $rooms = Room::all();

        $moduleDurations = Lesson::selectRaw('modules.module_name, SUM(TIME_TO_SEC(TIMEDIFF(end_time, start_time)) / 3600) as total_hours')
        ->join('modules', 'lessons.module_id', '=', 'modules.id')
        ->groupBy('modules.module_name')
        ->get();
        return view('home',compact('groupes','lessons','modules','rooms','groupe','moduleDurations'));

    }
}
