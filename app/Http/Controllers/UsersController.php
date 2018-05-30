<?php

namespace App\Http\Controllers;

#require '../../../vendor/autoload.php';

use App\User;
use App\Place;
use App\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManager;


class UsersController extends Controller
{
    //Display the register page
    public function getRegister(){
        return view('users.register');
    }

    //Save User Registration
    public function postRegister(Request $request){
        $validate = Validator::make(Input::all(), array(
           'username' => 'required|unique:users|min:4',
            'email' => 'required|unique:users',
            'fullname' => 'required|min:6',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'location' => 'required',
            'profile_picture' => 'image|mimes:jpeg,jpg,bmp,gif,png',
        ));
        if($validate->fails()){
            return Redirect::route('getRegister')->withErrors($validate)->withInput();
        }else{
            $user = new User();
            $user->name = Input::get('fullname');
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->location = Input::get('location');

            if($request->hasFile('profile_picture')){
                $image = Input::file('profile_picture');
                $imagename = time()."-".$image->getclientOriginalName();
                #$imagepath = public_path('/images/demo/users/'.$imagename);
                $manager = new ImageManager(array('driver' => 'gd'));
                $manager->make($image->getRealPath())->resize(550,550)->save(public_path() . '/images/demo/users/' . $imagename);
                $user->profile_picture = '/images/demo/users/' . $imagename;
            }else{
                $user->profile_picture = '/images/demo/users/ic_account_circle_white_48dp.png';
            }

            if($user -> save()){
                return Redirect::route('getLogin')->with('success', 'Registration Successful');
            }else{
                return Redirect::route('getRegister')->with('fail', 'An error occurred');
            }
        }
    }

    //Display the login page
    public function getLogin(){
        return view('users.login');
    }

    //Get user places
    public function getMyPlaces(){
        $users = User::all();
        $id = Auth::id();
        
        $reciever_id = Auth::id();
        $friendRequest = FriendRequest::where('reciever_id', '=', $reciever_id)->get();
        $friendRequestCounter = DB::table('friend_requests')->select(DB::raw('count(*) as friend_request_count'))->where('reciever_id', '=', $reciever_id)->get();
        //$places = DB::table('places')->paginate(2);
        return view('users.myPlaces')->with('users', $users)
            ->with('receiver_id', $reciever_id)
            ->with('friendRequest', $friendRequest)
            ->with('friendRequestCounter', $friendRequestCounter)
            ->with('places', Place::where('user_id', "=", $id)->paginate(2));
    }

    public function postPlaces(Request $request){
        $validate = Validator::make(Input::all(), array(
            'tourcentername' => 'required|min:4',
            'address' => 'required|min:4',
            'location' => 'required',
            'description' => 'required| min:4',
            'image1' => 'required|image|mimes:jpeg,jpg,bmp,gif,png',
            'image2' => 'image|mimes:jpeg,jpg,bmp,gif,png',
            'image3' => 'image|mimes:jpeg,jpg,bmp,gif,png',
            'image4' => 'image|mimes:jpeg,jpg,bmp,gif,png',
            'image5' => 'image|mimes:jpeg,jpg,bmp,gif,png',
        ));
        if($validate->fails()){
            return Redirect::route('getMyPlaces')->withErrors($validate)->withInput();
        }else{
            $place = new Place();
            $place->title = Input::get('tourcentername');
            $place->address = Input::get('address');
            $place->location = Input::get('location');
            $place->user_id = Auth::id();
            $place->description = Input::get('description');

            $image1 = Input::file('image1');
            $imagename1 = time()."-".$image1->getclientOriginalName();
            $manager1 = new ImageManager(array('driver' => 'gd'));
            $manager1->make($image1->getRealPath())->resize(550,550)->save(public_path() . '/images/demo/experience/' . $imagename1);
            $place->image_1 = '/images/demo/experience/' . $imagename1;

            if($request->hasFile('image2')) {
                $image2 = Input::file('image2');
                $imagename2 = time() . "-" . $image2->getclientOriginalName();
                $manager2 = new ImageManager(array('driver' => 'gd'));
                $manager2->make($image2->getRealPath())->resize(550, 550)->save(public_path() . '/images/demo/experience/' . $imagename2);
                $place->image_2 = '/images/demo/experience/' . $imagename2;
            }

            if($request->hasFile('image3')) {
                $image3 = Input::file('image3');
                $imagename3 = time() . "-" . $image3->getclientOriginalName();
                $manager3 = new ImageManager(array('driver' => 'gd'));
                $manager3->make($image3->getRealPath())->resize(550, 550)->save(public_path() . '/images/demo/experience/' . $imagename3);
                $place->image_3 = '/images/demo/experience/' . $imagename3;
            }

            if($request->hasFile('image4')) {
                $image4 = Input::file('image4');
                $imagename4 = time() . "-" . $image4->getclientOriginalName();
                $manager4 = new ImageManager(array('driver' => 'gd'));
                $manager4->make($image4->getRealPath())->resize(550, 550)->save(public_path() . '/images/demo/experience/' . $imagename4);
                $place->image_4 = '/images/demo/experience/' . $imagename4;
            }

            if($request->hasFile('image5')) {
                $image5 = Input::file('image5');
                $imagename5 = time() . "-" . $image5->getclientOriginalName();
                $manager5 = new ImageManager(array('driver' => 'gd'));
                $manager5->make($image5->getRealPath())->resize(550, 550)->save(public_path() . '/images/demo/experience/' . $imagename5);
                $place->image_5 = '/images/demo/experience/' . $imagename5;
            }

            if($place -> save()){
                return Redirect::route('getMyPlaces')->with('success', 'Added Successfully');
            }else{
                return Redirect::route('getMyPlaces')->with('fail', 'An error occurred');
            }
        }
    }

    //Delete Place
    public function deletePlace($id)
    {
        $place = Place::find($id);
        if ($place) {
            File::delete('public/' . $place->image_1);
            File::delete('public/' . $place->image_2);
            File::delete('public/' . $place->image_3);
            File::delete('public/' . $place->image_4);
            File::delete('public/' . $place->image_5);
            $place->delete();
            return Redirect::route('getMyPlaces') . with('success', 'Deleted Successfully');
        }
        return Redirect::route('getMyPlaces') . with('fail', 'Something went wrong, please try again later');
    }

    //Login the user
    public function postLogin(){
        $validator = Validator::make(Input::all(),array(
            'email' => 'required|email',
            'password' => 'required'
        ));
        if($validator->fails()){
            return Redirect::route('getLogin')->withErrors($validator)->withInput();
        }else{
            $remember = (Input::has('remember')) ? true : false;
            $auth = Auth::attempt(array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ), $remember);
            if ($auth) {
                $user = Auth::User();
                return Redirect::intended('/')->with('user', $user);
            } else {
                return Redirect::route('getLogin')->with('fail', 'Invalid Username and password');
            }
        }
    }

    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::route('index');
    }
    
}
