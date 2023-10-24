<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Merch;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
       
        $this->validate($request, [
            "image" => "required",
            "title" => "required",
            "info" => "required",
            "price" => "required",
            "url" => "required"
        ]); 

        Event::create(
            [
                "user_id" =>   auth()->user()->id,
                "image" => $request->image,
                "title" => $request->title,
                "info" => $request->info,
                "price" => $request->price,
                "url" => $request->url
            ]

        );
        return redirect()->back();
    }

    public function createMerch(Request $request)
    {
       
        $this->validate($request, [
            "image" => "required",
            "title" => "required",
            "info" => "required",
            "price" => "required",
            "url" => "required"
        ]); 

        Merch::create(
            [
                "user_id" =>   auth()->user()->id,
                "image" => $request->image,
                "title" => $request->title,
                "info" => $request->info,
                "price" => $request->price,
                "url" => $request->url
            ]

        );
        return redirect()->back();
    }
}
