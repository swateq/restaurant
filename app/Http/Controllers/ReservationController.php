<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        if(request()->ajax()) 
        { 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
 
         $data = Reservation::whereDate('start', '>=', $start)->get(['id','title','start',]);
         
         return response()->json($data);
        }
        return view('admin.reservations.index');
    }
    
    public function create()
    {
        return view('admin.reservations.create');
    }
   
    public function store(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start
                    ];
        $reservation = Reservation::insert($insertArr);  
        if(request()->ajax()){  
            return response()->json($reservation);
        } else{
            return redirect('/admin/reservations')->with('toast_success', 'Rezerwacja dodana prawidłowo!');
        }
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start];
        $reservation  = Reservation::where($where)->update($updateArr);
 
        return response()->json($reservation);
    } 
 
 
    public function destroy(Request $request)
    {
        $reservation = Reservation::where('id',$request->id)->delete();
   
        return response()->json($reservation);
    }    
}
