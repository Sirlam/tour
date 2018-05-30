<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Place;
use App\FriendRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    //Display the home page
    public function index(){
        $users = User::all();
        $places = DB::table('places')->paginate(20);        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        return view('pages.index')->with('users', $users)->with('places', $places)->with('receiver_id', $reciever_id)->with('friendRequest', $friendRequest)->with('friendRequestCounter', $friendRequestCounter);
    }
    
    public function locations(){
        $users = User::all();
        $places = DB::table('places')->paginate(20);        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        return view('pages.locations')->with('users', $users)->with('places', $places)->with('receiver_id', $reciever_id)->with('friendRequest', $friendRequest)->with('friendRequestCounter', $friendRequestCounter);
    }
    
    public function resources(){
        $users = User::all();
        $places = DB::table('places')->paginate(20);        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        return view('pages.resources')->with('users', $users)->with('places', $places)->with('receiver_id', $reciever_id)->with('friendRequest', $friendRequest)->with('friendRequestCounter', $friendRequestCounter);
    }
}
