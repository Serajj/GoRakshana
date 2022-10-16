<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

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
    public function index()
    {
        $date = Carbon::now()->format('Y/m/d');

        $data = array(
            'count_user' => DB::table('events')->count(),
            'upcoming_event_count' =>  DB::table('events')->whereDate('date', '>=',$date )->count(),
            'menu'      => 'menu.v_menu_admin',
            'content' => 'content.view_dashboard'
        );
        return view('layouts.v_template',$data);
    }
}
