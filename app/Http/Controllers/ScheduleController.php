<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Notifications\PickupScheduledNotification;
use App\Mail\WastePickupScheduled;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;




class ScheduleController extends Controller
{

public function store(Request $request)
{
    $schedule = new Schedule();
    $schedule->cname = $request->input('cname');
    $schedule->cnum = $request->input('cnum');
    $schedule->date = $request->input('date');
    $schedule->time = $request->input('time');
    $schedule->message = $request->input('message');
    $schedule->city = $request->input('city');
    $schedule->estate = $request->input('estate');
     $schedule->status = $request->input('status');
    $schedule->save();

    // Redirect or perform other actions after saving the data
    // Get the logged-in user
    $user = Auth::user();
    
    $name = $user->name; // Assuming the user object contains the name property
    $email = $user->email; // Assuming the user object contains the email property
    
    Mail::to($user->email)->send(new WastePickupScheduled($name, $email));
    
    


   // Trigger email
   Mail::to($user->email)->send(new WastePickupScheduled($name, $email));
    // Example redirect:
    return redirect()->back()->with('success', 'Schedule saved successfully');
}
  public function display()
    {
        $rows = Schedule::all();
        return view('customercollection', ['rows' => $rows]);
    }
    public function rate()
    {
        return view('reviews/createreview');
    }
}
