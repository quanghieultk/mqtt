<?php
use Illuminate\Support\Facades\Auth;
use Salman\Mqtt\MqttClass\Mqtt;

function SubscribetoTopic($topic)
    {
        $mqtt = new Mqtt();
        // $client_id = Auth::user()->id;
        $client_id = 1;
        $mqtt->ConnectAndSubscribe($topic, function($topic, $msg){
            echo "Msg Received: \n";
            echo "Topic: {$topic}\n\n";
            echo "\t$msg\n\n";
        }, $client_id);


    }

function SendMsgViaMqtt($topic, $message)
    {
            $mqtt = new Mqtt();
            $client_id =1;
            // $client_id = Auth::user()->id;
            $output = $mqtt->ConnectAndPublish($topic, $message, $client_id);
            if ($output === true)
            {
                return "published";
            }
            
               return "Failed";
    }
?>
