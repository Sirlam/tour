@extends('layouts.front.master')

@section('body')
<link href="{{URL::asset('css/flexslider.css')}}" rel="stylesheet" type="text/css">
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4 class="text-capitalize"><i class="icon-location4 position-left"></i> {{$place->title}}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Place</li>
                <li class="active text-capitalize">{{$place->title}}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    
    <!-- Content area -->
	<div class="content">
        <!--Image Sliders-->
        <div class="row">
            <div class="col-lg-11">
                <!-- Timeline -->
                <div class="timeline timeline-left content-group">
                    <div class="timeline-container">
                        <!-- Place post -->
                        <div class="timeline-row">
                            <div class="timeline-icon">
                                @foreach($users as $user)
                                    @if($user->id == $place->user_id)
                                    <img src="{{$user->profile_picture}}" alt="">
                                    @endif
                                @endforeach
                            </div>

                                <div class="panel panel-flat timeline-content">
                                    <!--Panel body-->
                                    <div class="panel-body">
                                        <div class="panel-heading">
                                            @foreach($users as $user)
                                                @if($user->id == $place->user_id)
                                                <h6 class="panel-title text-capitalize"><a class="text-teal" href="#">{{$user->username}}</a> | {{$user->name}}</h6>
                                                @endif
                                            @endforeach
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
                                        
                                        <!--Comment Form-->
                                        <form action="{{url('postComment/' . Auth::id())}}" role="form" class="form-horizontal">
                                            <label class="sr-only" for="comment">Comment:</label>
                                            <textarea placeholder="Write your comment here" rows="15" class="form-control" name="comment" id="comment"></textarea><br>
                                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10">
                                                <b><i class="icon-check"></i></b> Comment
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-labeled btn-labeled-right ml-10">
                                                <b><i class="icon-cross"></i></b> Reset
                                            </button>
                                            {{csrf_field()}}
                                        </form>
                                        <!--/ comment form-->
                                        @if (Session::has('success'))
                                                <div class="alert alert-success"> {{ Session::get('success') }}</div>
                                        @elseif (Session::has('fail'))
                                                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                                        @endif
                                        
                                        @foreach($comments as $comment)
                                            <h6 class="content-group">
                                                <i class="icon-comment-discussion position-left"></i>
                                                Comment from 
                                                @foreach($users as $user)
                                                @if($user->id == $comment->user_id)
                                                    <a href="{{url('profile/'. $user->id)}}">{{$user->name}}</a>:
                                                @endif
                                                @endforeach
                                            </h6>

                                            <blockquote>
                                                    <p>{{$comment->comment}}</p>

                                                <footer>Time, <cite title="Source Title">{{$comment->created_at}}</cite></footer>
                                            </blockquote>
                                        @endforeach
                                        <div class="row">
                                        {{ $comments->links() }}
                                        </div>
                                    </div>
                                    
                                    <!-- /panel body-->
                                </div>
                        </div>
                        <!--/ place post-->
                    </div>
                </div>
                <!-- /timeline -->
            </div>
        </div>
        <!-- /image Sliders-->
        
        
        <!-- Footer -->
		<div class="footer text-muted">
			&copy; 2017. <a href="{{URL::route('index')}}">Tourn.ng</a> designed and developed by <a href="#">Olatunji Salam</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /content area -->

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