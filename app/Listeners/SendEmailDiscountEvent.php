<?php

namespace App\Listeners;

use App\Events\DiscountEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Illuminate\Support\Facades\File;

class SendEmailDiscountEvent implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DiscountEvent  $event
     * @return void
     */
    public function handle(DiscountEvent $event)
    {
        // $users = User::all();
        // foreach ($users as $user) {
        //     Mail::to($user->email)
        //         ->send(new DiscountEvent($event->discount));
        // }
        $fileName = $event->discount->id . '.txt';
        $data = 'Đây là title: '. $event->discount->title . ' ------ với content: ' . $event->discount->content; 
        File::put(public_path('/txt/' . $fileName), $data);
        return true;
    }
}
