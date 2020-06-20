<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MQTTController extends Controller
{
     
    public function getDang()
    {
        SendMsgViaMqtt("a", "bcd");
    }
}
