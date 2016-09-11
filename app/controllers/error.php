<?php

namespace controllers;

use munkireport\Controller as Controller;
use munkireport\View as View;

class error extends Controller
{
    public function __construct()
    {
    }

    /**
     * Client error, displays an http error page
     *
     **/
    public function client_error($status_code = 404)
    {
        $data = array('status_code' => $status_code);
        $obj = new View();

        $obj->view('error/client_error', $data);
    }
}
