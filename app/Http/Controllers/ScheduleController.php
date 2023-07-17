<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Notifications\PickupScheduledNotification;


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
