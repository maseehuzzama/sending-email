<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){

        Mail::send('mail.test',
            ['testVar' => 'Just a silly test'],
            function($message) {
                 $message->to('maseeh.18@gmail.com')->subject('A simple test');
            });
    }
}
