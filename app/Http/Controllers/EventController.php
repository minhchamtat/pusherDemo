<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Event;
use App\Events\DiscountEvent;
use App\Discount;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function postSend(Request $request)
    {
    	// dd($request->all());
    	$discount_id = DB::table('discounts')->insertGetId([
    		'content' => $request->content,
    		'title' => $request->title
    	]);

    	$discount = Discount::find($discount_id);
    	event(new DiscountEvent($discount));

    	return redirect('/')->with('message', 'Đã gửi mail');
    }
}
