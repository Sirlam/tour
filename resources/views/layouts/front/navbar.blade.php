<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{URL::route('index')}}"><img src="{{URL::asset('images/logo_light.png')}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                @if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="visible-xs-inline-block position-right">Notifications</span>
						<span class="badge bg-warning-400">
                            @foreach($friendRequestCounter as $friendRequestCounter)
                                {{$friendRequestCounter->friend_request_count}}
                            @endforeach
                        </span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Notifications
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
                            @foreach($friendRequest as $friendRequests)
							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									{{$friendRequests->message}}
									<div class="media-annotation">{{$friendRequests->created_at}}</div>
                                    @foreach($users as $user)
                                        @if($user->id == $friendRequests->sender_id)
									       <div class="media-annotation">from: <a href="{{url('profile/'.$user->id)}}">{{$user->name}}</a></div>
                                        @endif
                                    @endforeach
								</div>
							</li>
                            @endforeach
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
				@endif
			</ul>

            @if(Auth::check())
			    <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
			    @else
			    <p class="navbar-text"><span class="label bg-danger-400">Not Logged In</span></p>
            @endif
			<ul class="nav navbar-nav navbar-right">
				<li><a><img src="{{URL::asset('images/flags/gb.png')}}" class="position-left" alt="">English</a>
				</li>

                @if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="{{URL::asset('images/demo/users/face10.jpg')}}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="{{URL::asset('images/demo/users/face3.jpg')}}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{URL::asset('images/demo/users/face24.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{URL::asset('images/demo/users/face4.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{URL::asset('images/demo/users/face25.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{Auth::user()->profile_picture}}" alt="">
						<span>{{Auth::user()->username}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{url('profile/'.Auth::user()->id)}}"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="{{URL::route('getMyPlaces')}}"><i class="icon-file-media"></i> Share An Experience</a></li>
						<li><a href="#"><i class="icon-heart6"></i> Favourite Places</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="{{URL::route('getLogout')}}"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
				@else
				<li><a href="{{URL::route('getLogin')}}" class="btn btn-primary btn-link"><i class="icon-lock"></i> Login</a> </li>
				<li><a href="{{URL::route('getRegister')}}" class="btn btn-danger btn-link"><i class="icon-check"></i> Register</a> </li>
				@endif
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

		<!-- Page container -->
    	<div class="page-container">

    		<!-- Page content -->
    		<div class="page-content">

    			<!-- Main sidebar -->
    			<div class="sidebar sidebar-main">
    				<div class="sidebar-content">

    				@if(Auth::check())
    					<!-- User menu -->
    					<div class="sidebar-user">
    						<div class="category-content">
    							<div class="media">
    								<a href="#" class="media-left"><img src="{{Auth::user()->picture_url}}" class="img-circle img-sm" alt=""></a>
    								<div class="media-body">
    									<span class="media-heading text-semibold">{{Auth::user()->username}}</span>
    									<div class="text-size-mini text-muted">
    										<i class="icon-pin text-size-small"></i> &nbsp;{{Auth::user()->location}}
    									</div>
    								</div>

    								<div class="media-right media-middle">
    									<ul class="icons-list">
    										<li>
    											<a href="#"><i class="icon-cog3"></i></a>
    										</li>
    									</ul>
    								</div>
    							</div>
    						</div>
    					</div>
    					<!-- /user menu -->
                    @endif

    					<!-- Main navigation -->
    					<div class="sidebar-category sidebar-category-visible">
    						<div class="category-content no-padding">
    							<ul class="navigation navigation-main navigation-accordion">

    								<!-- Main -->
    								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
    								<li class="active"><a href="{{URL::route('index')}}"><i class="icon-home4"></i> <span>Home</span></a></li>
    								@if(Auth::check())
    								<li>
    									<a href="#"><i class="icon-user"></i> <span>Friends</span></a>
    									<ul>
    										<li><a href="#">All Friends</a></li>
    									</ul>
    								</li>
    								<li>
    									<a href="#"><i class="icon-users"></i> <span>People</span></a>
    									<ul>
    										<li><a href="{{URL::route('search')}}">Search People</a></li>
    									</ul>
    								</li>
    								@endif
    								<li><a href="{{URL::route('locations')}}"><i class="icon-location4"></i> <span>Locations</span></a></li>
    								<li><a href="{{URL::route('resources')}}"><i class="icon-list-unordered"></i> <span>Resources</span></a></li>
    								<!-- /main -->
    							</ul>
    						</div>
    					</div>
    					<!-- /main navigation -->

    				</div>
    			</div>
    			<!-- /main sidebar -->
