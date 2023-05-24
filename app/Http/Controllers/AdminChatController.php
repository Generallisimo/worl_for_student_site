<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminChatController extends Controller
{
    public function AdminChatView(){
        $chat = Chat::all();
        return view('admin_panel/chat/index', compact('chat'));
    }

    public function AdminChatID($id){
        $message = Message::where('chat_id', $id)->get();
        $chatID = Chat::where('id', $id)->value('user_id');
        // dd($chatID);
        return view('admin_panel/chat/view', compact('message', 'chatID'));
    }

    public function AdminSend(Request $request, int $id){
        $userID = auth()->id();
        $chat = Chat::where('user_id', $id)->value('id');
        // dd($chat);
        $message = new Message;
        $message->chat_id = $chat;
        $message->user_role = $userID;
        $message->message = $request->input('message');
        $message->save();
    
        return redirect()->back();
    }
}
