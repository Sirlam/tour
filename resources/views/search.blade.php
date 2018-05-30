@extends('layouts.front.master')

@section('body')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4 class="text-capitalize"><i class="icon-eye position-left"></i> Search</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Search</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    
    <!-- Content area -->
	<div class="content">
    
        <div class="row">
            <!--All Search panel-->
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel">
                    <div class="panel-body">
                        <!--Search form-->
                        <form action="#" method="get" enctype="multipart/form-data">
                            <label for="q" class="sr-only">Search:</label>
                            <div class="col-lg-9">
                                <input type="text" id="q" name="q" class="form-control" placeholder="Search people and friends">
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left ml-10">
                                    <b><i class="icon-search4"></i></b>Search
                                </button>
                            </div>
                        </form>
                        <br><br>
                        <hr>
                        <!--/search form-->
                        
                        <!--Search results-->
                        @if($keyword != "")
                        Search results for: {{$keyword}}
                        @foreach($results as $result)
                        <div class="col-sm-12">
                            <div class="panel panel-body">
                                <div class="media">
                                    <a href="{{url('profile/'.$result->id)}}" class="media-left">
                                        <img src="{{$result->profile_picture}}" class="img-circle img-lg pull-left" alt="">    
                                    </a>
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="media-heading">{{$result->name}}</h6>
                                    <span class="text-muted">{{$result->location}}</span>
                                </div>
                                
                                <div class="media-right media-middle">
                                    <ul class="icons-list icons-list-vertical">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{url('sendRequest/'.$result->id)}}"><i class="icon-user-plus pull-right"></i> Add friend</a></li>
                                                <li><a href="{{url('profile/'.$result->id)}}"><i class="icon-eye pull-right"></i> View profile</a></li>
                                                <li><a href="#"><i class="icon-mail5 pull-right"></i> Send message</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!--/search results-->
                        
                        <!--Search results-->
                        @if($keyword != "")
                        @foreach($results2 as $result2)
                        <div class="col-sm-12">
                            <div class="panel panel-body">
                                <div class="media">
                                    <a href="#" class="media-left">
                                        <img src="{{$result2->profile_picture}}" class="img-circle img-lg pull-left" alt="">    
                                    </a>
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="media-heading">{{$result2->name}}</h6>
                                    <span class="text-muted">{{$result2->location}}</span>
                                </div>
                                
                                <div class="media-right media-middle">
                                    <ul class="icons-list icons-list-vertical">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-user-plus pull-right"></i> Add friend</a></li>
                                                <li><a href="#"><i class="icon-eye pull-right"></i> View profile</a></li>
                                                <li><a href="#"><i class="icon-mail5 pull-right"></i> Send message</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!--/search results-->
                    </div>
                </div>
            </div>
            <!--/all Search panel-->
        </div>

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

@stop