@extends('layouts.front.master')

@section('body')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4 class="text-capitalize"><i class="icon-location4 position-left"></i> Resources</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Place</li>
                <li class="active text-capitalize">Resources</li>
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
									<img src="{{URL::asset('images/demo/resources/agoda-logo.svg')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/locations/agoda-logo.svg')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a target="_blank" href="https://www.agoda.com/" class="text-default">Agoda</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/resources/booking.png')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/resources/booking.png')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a target="_blank" href="https://www.booking.com" class="text-default">Booking.com</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/resources/wakanow.png')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/resources/wakanow.png')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a target="_blank" href="https://www.wakanow.com/en-ng/" class="text-default">Wakanow</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="{{URL::asset('images/demo/resources/hotels-ng.png')}}" alt="">
									<div class="caption-overflow">
										<span>
											<a href="{{URL::asset('images/demo/resources/hotels-ng.png')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin"><a target="_blank" href="https://hotels.ng/" class="text-default">Hotels.ng</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
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