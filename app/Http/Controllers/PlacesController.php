<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Place;
use App\FriendRequest;
use App\Comment;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PlacesController extends Controller
{
    //Get a place by id
    public function place($id)
    {
        $place = Place::find($id);
        $users = User::all();
        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->where('status', '=', 'pending')->get();
        
        return view('place')
            ->with('place', $place)
            ->with('users', $users)
            ->with('receiver_id', $reciever_id)
            ->with('friendRequest', $friendRequest)
            ->with('friendRequestCounter', $friendRequestCounter)
            ->with('comments', Comment::where('place_id', '=', $place->id)->paginate(5));

    }
    
    public function postComment($id)
    {
        $comment = new Comment();
        $place_id = Place::find($id);
        
        $comment->user_id = Auth::id();
        $comment->place_id = $place_id->id;
        $comment->comment = Input::get('comment');
        
        if ($comment->save()) {
            return Redirect::back()
                ->with('success', 'Comment Added successfully');
        } else {
            return Redirect::back()
                ->with('fail', 'Something went wrong, please try again later');
        }
    }
}
