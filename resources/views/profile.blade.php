@extends('layouts.front.master')

@section('body')
<link href="{{URL::asset('css/flexslider.css')}}" rel="stylesheet" type="text/css">
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4 class="text-capitalize"><i class="icon-location4 position-left"></i> {{$profile->name}}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Profile</li>
                <li class="active text-capitalize">{{$profile->username}}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    
    
    <!-- Content area -->
	<div class="content">
    
            <!-- Footer -->
		<div class="footer text-muted">
			&copy; 2017. <a href="{{URL::route('index')}}">Tourn.ng</a> designed and developed by <a href="#">Olatunji Salam</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /content area -->
    
    <!-- Cover area -->
    <div class="profile-cover">
        <div class="profile-cover-img" style="background-image: url(/images/demo/cover3.jpg)"></div>
        <div class="media">
            <div class="media-left">
                <a href="#" class="profile-thumb">
                    <img src="{{$profile->profile_picture}}" class="img-circle" alt="">
                </a>
            </div>

            <div class="media-body">
                <h1>{{$profile->name}} <small class="display-block">{{$profile->location}}</small></h1>
            </div>

            <div class="media-right media-middle">
                <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                @if(Auth::id() != $profile->id)                
                    @foreach($friendRequest as $friendRequests)
                        @if($friendRequests->sender_id == $profile->id || $friendRequests->reciever_id == $profile->id)
                            <li><a href="{{url('acceptRequest/'.$profile->id)}}" class="btn btn-default"><i class="icon-user position-left"></i> Accept</a></li>
                            <li><a href="{{url('rejectRequest/'.$profile->id)}}" class="btn btn-danger"><i class="icon-user-cancel position-left"></i> Reject</a></li>
                        @else
                            <li><a href="{{url('sendRequest/'.$profile->id)}}" class="btn btn-default"><i class="icon-user-plus position-left"></i> Add friend</a></li>
                        @endif
                    @endforeach
                    @foreach($friendStatus as $friendsStatus)
                        @if($friendsStatus->sender_id == $profile->id && $friendsStatus->reciever_id == Auth::id())
                            <li><a href="#" class="btn btn-default disabled"><i class="icon-users position-left"></i> Friends</a></li>
                            <li><a href="#" class="btn btn-default"><i class="icon-bubbles position-left"></i> Send message</a></li>         
                        @endif
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- /cover area -->
    
    <!-- Toolbar -->
    <div class="navbar navbar-default navbar-xs content-group">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-filter">
            <ul class="nav navbar-nav element-active-slate-400">
                <li class="active"><a href="#timeline" data-toggle="tab"><i class="icon-menu7 position-left"></i> Timeline</a></li>
                <li><a href="#about" data-toggle="tab"><i class="icon-exclamation position-left"></i> About</a></li>
            </ul>
        </div>
    </div>
    <!-- /toolbar -->
    
    <!-- Content area -->
    <div class="content">
        <!--User profile-->
        <div class="col-lg-12">
            <div class="tabbable">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="timeline">
                        <!-- Timeline -->
                        <div class="timeline timeline-left content-group">
                            <div class="timeline-container">
                                <!-- Place post -->
                                @foreach($places as $place)
                                <div class="timeline-row">
                                    <div class="timeline-icon"><img src="{{$profile->profile_picture}}" alt=""></div>

                                        <div class="panel panel-flat timeline-content">
                                            <!--Panel body-->
                                            <div class="panel-body">
                                                <div class="panel-heading">
                                                        <h6 class="panel-title text-capitalize"><a class="text-teal" href="#">{{$profile->username}}</a> | {{$profile->name}}</h6>
                                                    <div class="heading-elements">
                                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i>
                                                                {{$place->created_at}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Place somewhere in the <body> of your page -->
                                                <div class="flexslider">
                                                  <ul class="slides">
                                                    <li data-thumb="{{$place->image_1}}">
                                                      <img src="{{$place->image_1}}" />
                                                    </li>
                                                        <li data-thumb="{{$place->image_2}}">
                                                          <img src="{{$place->image_2}}" />
                                                        </li>

                                                        <li data-thumb="{{$place->image_3}}">
                                                            <img src="{{$place->image_3}}" />
                                                        </li>

                                                        <li data-thumb="{{$place->image_4}}">
                                                            <img src="{{$place->image_4}}" />
                                                        </li>

                                                        <li data-thumb="{{$place->image_5}}">
                                                            <img src="{{$place->image_5}}" />
                                                        </li>
                                                  </ul>
                                                </div>
                                                <!-- /place somewhere in the <body> of your page -->

                                                <p class="text-justify">{{$place->description}}</p>
                                            </div>
                                            <!-- /panel body-->
                                            
                                            <!--Panel footer-->
                                            <div class="panel-footer">
                                                <ul>
                                                    <li><a href="{{url('place/'.$place->id)}}"><i class="icon-eye8 position-left"></i> View</a></li>
                                                    <li><a href="#"><span class="badge bg-teal-400 pull-right"> {{$place->likes}}</span> Like <i class="icon-heart6 position-left"></i> </a></li>
                                                </ul>
                                            </div>
                                            <!--/panel footer-->
                                        </div>
                                </div>
                                @endforeach
                                <!--/ place post-->
                                {{$places->links()}}
                            </div>                            
                        </div>
                    </div>
                    
                    
                    <!--About-->
                    <div class="tab-pane fade" id="about">
                        <!-- Timeline -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="panel-title">About</div>
                            </div>   

                            <div class="panel-body">
                                    <p>Name: {{$profile->name}}</p>
                                    <p>Id: {{$profile->username}}</p>
                                    <p>E-mail: {{$profile->email}}</p>
                                    <p>Location: {{$profile->location}}</p>
                                    <p>Date Joined: {{$profile->created_at}}</p>
                                    <p>Last Active: {{$profile->last_login}}</p>
                            </div>
                        </div>
                    </div>
                    <!--/about-->
                    
                    
                </div>
            </div>
        </div>
        <!--/user profile-->
        
        
    </div>
    <!-- /Content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->
<script type="text/javascript" src="{{URL::asset('js/plugins/flexslider/modernizr.js')}}"></script>
<script defer type="text/javascript" src="{{URL::asset('js/plugins/flexslider/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/plugins/flexslider/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/plugins/flexslider/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/plugins/flexslider/demo.js')}}"></script>
<script>
$(document).ready(function () {
    // Can also be used with $(document).ready()
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});
</script>
@stop