<?php
use Carbon\Carbon;
use App\Models\Message;
 

    function notifiction()
    {
        $notification = DB::select("SELECT users.id, users.name,users.email, COUNT(is_read) AS unread FROM users LEFT JOIN messages ON users.id = messages.from AND messages.is_read = 0 WHERE users.id = ".Auth::id()." GROUP BY users.id, users.name,users.email");

        return $notification;
    }

    function message(){
        $message = Message::where("is_read",0)->get(['id','message']);
        return $message;
    }

?>