<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use Response;
use Yajra\DataTables\DataTables;

use Carbon\Carbon;



class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addGosalaVishnupuramBirthday()
    {
        return view('gosala-birthday');
    }

    public function addGosalaVishnupuramGoPooja()
    {
        return view('gosala-gopooja');
    }
    public function remembranceDay()
    {
        return view('gosala-remembrance');
    }

    public function weddingDay()
    {
        return view('gosala-wedding-day');
    }

    public function addEvent(Request $request)
    {   
        $new_event = new Event();
        $new_event->date = $request->date ?? now();
        $new_event->user_id = $request->user_id ?? 0;
        $new_event->tamil_month = $request->tamil_month ?? '';
        $new_event->star = $request->star ?? '';
        $new_event->rasi = $request->rashi ?? '';
        $new_event->gothram = $request->gothram ?? '';
        $new_event->paksham = $request->paksham ?? '';
        $new_event->thidi = $request->thidi ?? '';
        $new_event->tamil_date = $request->tamil_date ?? now();
        $new_event->husband_star = $request->husband_star ?? '';
        $new_event->husband_rasi = $request->husband_rasi ?? '';
        $new_event->husband_gothram = $request->husband_gothram ?? '';
        $new_event->wife_star = $request->wife_star ?? '';
        $new_event->wife_rasi = $request->wife_rasi ?? '';
        $new_event->name = $request->name ?? '';
        $new_event->go_pooja_reason = $request->go_pooja_reason ?? '';
        $new_event->mobile = $request->mobile ?? '';
        $new_event->email = $request->email ?? '';
        $new_event->event_type = $request->event_type ?? '';
        $new_event->address = $request->address ?? '';
        $q = $new_event->save();
        if($q){
            return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
        }
        return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
    }

    public function updateEvent(Request $request)
    {   
        if($request->event_id == ''){
        $new_event = new Event();
        }else{
        $new_event = Event::where('id',$request->event_id)->first();
        }
        
        $new_event->date = $request->date ?? now();
        $new_event->user_id = $request->user_id ?? 0;
        $new_event->tamil_month = $request->tamil_month ?? '';
        $new_event->star = $request->star ?? '';
        $new_event->rasi = $request->rasi ?? '';
        $new_event->gothram = $request->gothram ?? '';
        $new_event->paksham = $request->paksham ?? '';
        $new_event->thidi = $request->thidi ?? '';
        $new_event->tamil_date = $request->tamil_date ?? now();
        $new_event->husband_star = $request->husband_star ?? '';
        $new_event->husband_rasi = $request->husband_rasi ?? '';
        $new_event->husband_gothram = $request->husband_gothram ?? '';
        $new_event->wife_star = $request->wife_star ?? '';
        $new_event->wife_rasi = $request->wife_rasi ?? '';
        $new_event->name = $request->name ?? '';
        $new_event->go_pooja_reason = $request->go_pooja_reason ?? '';
        $new_event->mobile = $request->mobile ?? '';
        $new_event->email = $request->email ?? '';
        $new_event->event_type = $request->event_type ?? '';
        $new_event->address = $request->address ?? '';
        
        if($request->event_id == ''){
            $q = $new_event->save();
        }
        else{
            $q = $new_event->update();
        }
        if($q){
            return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
        }
        return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
    }

    public function getEventById(Request $request)
    { 
        $new_event = Event::where('id',$request->event_id)->first();

        return Response::json($new_event);
    }

    public function addEventApi(Request $request)
    {   
        $new_event = new Event();
        $new_event->date = $request->date ?? '';
        $new_event->user_id = $request->user_id ?? 0;
        $new_event->tamil_month = $request->tamil_month ?? '';
        $new_event->star = $request->star ?? '';
        $new_event->rasi = $request->rashi ?? '';
        $new_event->gothram = $request->gothram ?? '';
        $new_event->paksham = $request->paksham ?? '';
        $new_event->thidi = $request->thidi ?? '';
        $new_event->tamil_date = $request->tamil_date ?? '';
        $new_event->husband_star = $request->husband_star ?? '';
        $new_event->husband_rasi = $request->husband_rasi ?? '';
        $new_event->husband_gothram = $request->husband_gothram ?? '';
        $new_event->wife_star = $request->wife_star ?? '';
        $new_event->wife_rasi = $request->wife_rasi ?? '';
        $new_event->name = $request->name ?? '';
        $new_event->go_pooja_reason = $request->go_pooja_reason ?? '';
        $new_event->mobile = $request->mobile ?? '';
        $new_event->email = $request->email ?? '';
        $new_event->event_type = $request->event_type ?? '';
        $new_event->address = $request->address ?? '';
        $q = $new_event->save();
        
        if($q){
            return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
        }
        return Response::json(['status'=>true,'message'=>'request submitted successfully','data'=>[]]);
    }

    public function getAllEventType(Request $request)
    {
        $event_type = $request->event_type;
        $data = [
            'count_user' => Event::latest()->count(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.go_pooja',
            'title'    => 'Table User',
            'event_type' => $event_type,
        ];

        if ($request->ajax()) {
            $q_user = Event::select('*')->where('event_type', 'birthday')->orderByDesc('created_at');
            return DataTables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


        if($event_type == 'gopooja'){
            return view('event.go_pooja')->with($data);
        }elseif ($event_type == 'birthday') {
            return view('event.birthday')->with($data);
        }elseif ($event_type == 'remembrance') {
            return view('event.remembrance')->with($data);
        }elseif ($event_type == 'wedding') {
            return view('event.wedding')->with($data);
        }

        return "Invalid event type!!";
    }

    public function deleteEvent($id)
    {
        Event::find($id)->delete();

        return response()->json(['success'=>'Event deleted!']);
    }


    //Ajax requests
    public function ajaxBirthday(Request $request)
    {
        $q_user = Event::select('*')->where('event_type', 'birthday')->orderByDesc('created_at');
        return DataTables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function ajaxGopooja(Request $request)
    {
        $q_user = Event::select('*')->where('event_type', 'gopooja')->orderByDesc('created_at');
        return DataTables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function ajaxRemembrance(Request $request)
    {
        $q_user = Event::select('*')->where('event_type', 'remembrance')->orderByDesc('created_at');
        return DataTables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function ajaxWedding(Request $request)
    {
        $q_user = Event::select('*')->where('event_type', 'wedding')->orderByDesc('created_at');
        return DataTables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
//Api requests
    public function detailEvent(Request $request)
    { 
        $new_event = Event::where('id',$request->event_id)->first();

        return Response::json($new_event);
    }

    public function allEvents(Request $request)
    {
        $event_type  = $request->event_type;
        $events = Event::where('event_type',$event_type)->get();
        return Response::json(['status'=>true,'message'=>'data fetched successfully','data'=>$events]);

    }

    public function upcomingEvent(Request $request)
    {
        $date = Carbon::now()->format('Y/m/d');

        $events = Event::whereDate('date', '>=',$date )->get();
        return Response::json(['status'=>true,'message'=>'data fetched successfully','data'=>$events]);

    }

  
}
