<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
            'company' => 'nullable|string|max:255'
        ]);

        Subscriber::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company
        ]);

        return response()->json([
            'message' => 'Merci de vous être abonné(e)!'
        ]);
    }
}
