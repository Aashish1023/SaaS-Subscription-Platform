<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('pricing', compact('plans'));
    }

    Publicfunction choose(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId);
        // Logic to handle plan selection and payment processing
        return redirect()->route('checkout', ['plan' => $plan->id]);
    }
}
