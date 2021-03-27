<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class LoggingController extends Controller
{
    public function log() 
    {
        Log::channel('enhance_stack')->debug('資訊性訊息');
        Log::channel('enhance_stack')->emergency('系統已關閉！');
    }
}
