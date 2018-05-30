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

					<!-- Advanced login -->
					<form action="{{URL::route('postRegister')}}" method="post" enctype="multipart/form-data">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
								<h5 class="content-group">Create account <small class="display-block">* fields are required</small></h5>
							</div>

							<div class="content-divider text-muted form-group"><span>Your credentials</span></div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" id="username" name="username" class="form-control" placeholder="* Username">
								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
								@if($errors->has('username'))
								    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('username')}}</span>
								@endif
							</div>

							<div class="form-group has-feedback has-feedback-left">
                                <input type="email" id="email" name="email" class="form-control" placeholder="* Your email">
                                <div class="form-control-feedback">
                                    <i class="icon-mention text-muted"></i>
                                </div>
                                @if($errors->has('email'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('email')}}</span>
                                @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="* Name">
                                <div class="form-control-feedback">
                                    <i class="icon-user-tie text-muted"></i>
                                </div>
                                @if($errors->has('fullname'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('fullname')}}</span>
                                @endif
                            </div>

							<div class="content-divider text-muted form-group"><span>Your privacy</span></div>

							<div class="form-group has-feedback has-feedback-left">
                                <input type="password" id="password" name="password" class="form-control" placeholder="* Create password">
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                                @if($errors->has('password'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('password')}}</span>
                                @endif
                            </div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="* Repeat password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
								@if($errors->has('confirm_password'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('confirm_password')}}</span>
                                @endif
							</div>

                            <div class="content-divider text-muted form-group"><span>Profile Picture</span></div>

                            <div class="form-group">
                                <input type="file" id="picture_url" name="picture_url" placeholder="Profile Picture" class="form-control file-styled">
                                <span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
                                @if($errors->has('picture_url'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('picture_url')}}</span>
                                @endif
                            </div>

							<div class="content-divider text-muted form-group"><span>Additions</span></div>

							<div class="form-group">
							    <label for="location">Location: </label>
                                <select id="location" name="location" class="form-control">
                                    <option value="Abia">Abia</option>
                                    <option value="Abuja">Abuja</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa-Ibom">Akwa-Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross-River">Cross-River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                </select>

                                @if($errors->has('location'))
                                    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('location')}}</span>
                                @endif
                            </div>

							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled" checked="checked">
										Send me <a href="#">test account settings</a>
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled" checked="checked">
										Subscribe to monthly newsletter
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										Accept <a href="#">terms of service</a>
									</label>
								</div>
							</div>

							{{csrf_field()}}
							<button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
						</div>
					</form>
					<!-- /advanced login -->


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

	<script type="text/javascript" src="{{URL::asset('js/plugins/uploaders/fileinput.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/pages/form_layouts.js')}}"></script>

@stop