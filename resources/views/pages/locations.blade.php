@extends('layouts.front.master')

@section('body')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4 class="text-capitalize"><i class="icon-location4 position-left"></i> Locations</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Place</li>
                <li class="active text-capitalize">Locations</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    
    <!-- Content area -->
	<div class="content">
        
        
        <div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Awhum-Waterfalls.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Awhum-Waterfalls.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Awhum Waterfalls</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Coconut-Beach.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Coconut-Beach.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Coconut Beach</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Gashaka-Gumti-National-Park-780x585.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Gashaka-Gumti-National-Park-780x585.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Gashaka Gumti National Park</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/ibeno_beach.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/ibeno_beach.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Ibeno Beach</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>
					</div>
        
        
        
        
        <div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Idanre-Hills.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Idanre-Hills.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Idanre Hills</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/millenium-park-abuja.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/millenium-park-abuja.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Millenium Park</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Obudu-Cattle-Ranch1-780x585.jpg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Obudu-Cattle-Ranch1-780x585.jpg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Obudu Cattle Ranch</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/locations/Yankari-Game-Reserve.jpeg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/Yankari-Game-Reserve.jpeg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a href="#" class="text-default">Yankari Game Reserve</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>
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