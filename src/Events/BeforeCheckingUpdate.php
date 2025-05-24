<?php

namespace Rashid\LaravelInstaller\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Rashid\LaravelInstaller\Helpers\UpdateChecker;

class BeforeCheckingUpdate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $request;
    public $update_checker;
    /**
     * Create a new event instance.
     *
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request,UpdateChecker $update_checker)
    {
        $this->request = $request;
        $this->update_checker = $update_checker;
    }

    public function getRequest()
    {
        return $this->request;
    }
}
