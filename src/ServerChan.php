<?php

namespace liesauer\GLib;

class ServerChan
{
    public static function send($key, $text, $desp = '')
    {
        $postdata = http_build_query(
            array(
                'text' => $text,
                'desp' => $desp,
            )
        );
        $opts = array('http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata,
        ),
        );
        $context = stream_context_create($opts);
        file_get_contents('https://sc.ftqq.com/' . $key . '.send', false, $context);
    }
}
