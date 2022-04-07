<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class product_event
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $product;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(\App\Events\product_event $event)
    {
        $this->update_viewer($event->product);
    }
    function update_viewer($product){
        $product->viewer=$product->viewer + 1;
        $product->save();
    }
}
