<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Response;
use Auth;


class MessageController extends Controller
{
    function store(Request $request) {

        $message = new Message;
        $message->user_id = auth::user()->id;
        $message->message = $request->message;
        $message->save();

        return Response::json($message);
    }

    function index(){

        $messages = Message::whereUser_id(Auth::user()->id)->get();

        return Response::json($messages);
    }
}
