<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('pricing', compact('plans'));
    }

    Public function choose(Request $request)
    {
        $user = Auth::user();
        $user->plan_id = $request->plan_id;
        $user->save();
        // Logic to handle plan selection and payment processing
        return redirect()->route('dashboard')->with('success', 'Plan selected successfully!');
    }
}
