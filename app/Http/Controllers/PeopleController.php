<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Place;
use App\FriendRequest;
use App\Friend;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PeopleController extends Controller
{
    //Return search page
    public function getSearch(){
        $keyword = Input::get('q');
        $users = User::all();
        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        
        return view('search')
            ->with('results', User::where('name', 'LIKE', '%' . $keyword . '%')->get())
            ->with('results2', User::where('username', 'LIKE', '%' . $keyword . '%')->get())
            ->with('keyword', $keyword)
            ->with('receiver_id', $reciever_id)
            ->with('friendRequest', $friendRequest)
            ->with('friendRequestCounter', $friendRequestCounter)
            ->with('users', $users);
    }
    
    //Get a profile by id
    public function profile($id)
    {
        $profile = User::find($id);
        $users = User::all();
        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendStatus = Friend::where('reciever_id', '=', $reciever_id)->where('sender_id', '=', $id)->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        return view('profile')
            ->with('profile', $profile)
            ->with('users', $users)
            ->with('receiver_id', $reciever_id)
            ->with('friendRequest', $friendRequest)
            ->with('friendRequestCounter', $friendRequestCounter)
            ->with('friendStatus', $friendStatus)
            ->with('places', Place::where('user_id', '=', $id)->paginate(5));

    }
    
    //Send friend requests
    public function sendRequest($id)
    {
        $sender_id = Auth::id();
        $reciever_id = User::find($id);
        $message = "Hello I would like to be friends with you";
        
        $friendRequest = new FriendRequest();
        
        $friendRequest->sender_id = $sender_id;
        $friendRequest->reciever_id = $reciever_id->id;
        $friendRequest->message = $message;
        $friendRequest->status = "Pending";
        $friendRequest->save();
        
        return redirect()->back();
    }
    
    //Accept friend requests
    public function acceptRequest($id)
    {
        $users = User::all();
        $reciever_id = Auth::id();
        $sender_id = FriendRequest::where('reciever_id', '=', $reciever_id)->pluck('sender_id')->toArray();
        $sender = User::find($id);
        
        $friend = new Friend();
        
        $friend->sender_id = $sender->id;
        $friend->reciever_id = $reciever_id;
        $friend->save();
        
        $acceptFriend = DB::table('friend_requests')->where([['sender_id', '=', $sender_id],['reciever_id', '=', $reciever_id]])->update(['status' => 'Accepted']);
        
        $friend2 = new Friend();
        $friend2->sender_id = $reciever_id;
        $friend2->reciever_id = $sender->id;
        $friend2->save();
        
        return redirect()->back();
    }
    
    //Reject friend requests
    public function rejectRequest($id)
    {
        $users = User::all();
        $reciever_id = Auth::id();
        $sender_id = FriendRequest::where('reciever_id', '=', $reciever_id)->pluck('sender_id')->toArray();
        
        $rejectFriend = DB::table('friend_requests')->where([['sender_id', '=', $sender_id],['reciever_id', '=', $reciever_id]])->update(['status' => 'Cancelled']);
        
        //$rejectFriend->update();
        
        return redirect()->back();
    }
}
