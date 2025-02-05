<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class LoggingController extends Controller
{
    public function log() 
    {
        Log::channel('enhance_stack')->debug(__('Informational message'));
        Log::channel('enhance_stack')->emergency(__('The system is shut down!'));
    }
}
