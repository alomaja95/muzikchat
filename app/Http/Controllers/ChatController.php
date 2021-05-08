<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $user;
    public $target_id;
    public $connect_id_string;

    public function __construct()
    {
//        $this->middleware('auth');
//        $user = User::find(Auth::id());

    }

    public function chat ($user_id, $target_id, $connect_id_string)
    {

        $this->user              = User::find($user_id);
        Auth::login($this->user);
        $this->connect_id_string = $connect_id_string;
        $this->target_id         = $target_id;
        $target                  = User::find($target_id);

        return view('chat', ['target' => $target]);
    }

    public function send (Request $request)
    {
        $this->user = User::find(Auth::id());

//        $this->saveToSession($request);
        event(new ChatEvent($request->message, $this->user));
    }

    public function saveToSession ($request)
    {

       Chat::create([
           'receiver_id'        => $this->target_id,
           'sender_id'          => $this->user->id,
           'connect_id_string'  => $this->connect_id_string,
           'message'            => $request->message,
       ]);
        //session()->put('chat', $request->chat);
    }

    public function getOldMessages()
    {
        $chats = Chat::where('connect_id_string', $this->connect_id_string)->get();
        if ($chats){
            return $chats;
        }
        return [];
    }

    public function deleteSession()
    {
        Chat::where('connect_id_string', $this->connect_id_string)->delete();
    }

}
