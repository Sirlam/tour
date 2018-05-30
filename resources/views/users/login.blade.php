@extends('layouts.front.master')

@section('body')

<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
					<!-- Simple login form -->
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="panel panel-body login-form">
							<div class="text-center">
							    @if (Session::has('success'))
                                    <span class="help-block text-success"><i class="icon-check position-left"></i> {{ Session::get('success') }}</span>
                                @elseif (Session::has('fail'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ Session::get('fail') }}</span>
                                @endif
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="email" class="form-control" placeholder="Email" id="email" name="email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
							    {{csrf_field()}}
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="#">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


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