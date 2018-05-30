@extends('layouts.front.master')

@section('body')

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-upload10 position-left"></i> <span class="text-semibold">My Places</span> - Share your experience with others</h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{URL::route('index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">My places
				</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">

		<!-- Horizontal form options -->
		<div class="row">
			<div class="col-md-6">

				<!-- Basic layout-->
				<form action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Share your experience</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<!--<li><a data-action="close"></a></li>-->
								</ul>
							</div>
						</div>

						<div class="panel-body">
						@if (Session::has('success'))
							<span class="help-block text-success"><i class="icon-check position-left"></i> {{ Session::get('success') }}</span>
						@elseif (Session::has('fail'))
							<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ Session::get('fail') }}</span>
						@endif
							<div class="form-group">
								<label for="tourcentername" class="col-lg-3 control-label">Name of tourist center: <span class="text-danger">*</span> </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="e.g. Yankari game reserve" id="tourcentername" name="tourcentername">
								</div>
								@if($errors->has('tourcentername'))
									<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('tourcentername')}}</span>
								@endif
							</div>

							<div class="form-group">
								<label for="address" class="col-lg-3 control-label">Address: <span class="text-danger">*</span></label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="Enter address" id="address" name="address">
									@if($errors->has('address'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('address')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label" for="location">Location: <span class="text-danger">*</span></label>
								<div class="col-lg-9">
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
								</div>
							</div>

							<div class="form-group">
								<label for="description" class="col-lg-3 control-label">Description: <span class="text-danger">*</span></label>
								<div class="col-lg-9">
									<textarea id="description" name="description" rows="5" cols="5" class="form-control" placeholder="Enter a description of this place, including experience, facilities, etc"></textarea>
									@if($errors->has('description'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('description')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="image1" class="col-lg-3 control-label">Image 1: <span class="text-danger">*</span></label>
								<div class="col-lg-9">
									<input id="image1" name="image1" type="file" class="form-control file-styled" placeholder="Enter Image">
									<span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
									@if($errors->has('image1'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('image1')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="image2" class="col-lg-3 control-label">Image 2:</label>
								<div class="col-lg-9">
									<input id="image2" name="image2" type="file" class="form-control file-styled" placeholder="Enter Image">
									<span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
									@if($errors->has('image2'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('image2')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="image3" class="col-lg-3 control-label">Image 3:</label>
								<div class="col-lg-9">
									<input id="image3" name="image3" type="file" class="form-control file-styled" placeholder="Enter Image">
									<span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
									@if($errors->has('image3'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('image3')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="image4" class="col-lg-3 control-label">Image 4:</label>
								<div class="col-lg-9">
									<input id="image4" name="image4" type="file" class="form-control file-styled" placeholder="Enter Image">
									<span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
									@if($errors->has('image4'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('image4')}}</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="image5" class="col-lg-3 control-label">Image 5:</label>
								<div class="col-lg-9">
									<input id="image5" name="image5" type="file" class="form-control file-styled" placeholder="Enter Image">
									<span class="help-block">Format: jpeg, jpg, bmp, gif, png</span>
									@if($errors->has('image5'))
										<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('image5')}}</span>
									@endif
								</div>
							</div>

							<div class="text-right">
								{{csrf_field()}}
								<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</div>
				</form>
				<!-- /basic layout -->

			</div>

			<div class="col-md-6">

				<!-- Static mode -->
				<form class="form-horizontal" action="#">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Previous Experience</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<!--<li><a data-action="close"></a></li>-->
								</ul>
							</div>
						</div>

						<div class="panel-body">
						@foreach($places as $place)
							@if(Auth::id() == $place->user_id)
							<div class="col-lg-12">
								<div class="thumbnail">
									<div class="thumb">
										<img src="{{$place->image_1}}" alt="" style="height: 250px;">
										<div class="caption-overflow">
											<span>
												<a href="{{$place->image_1}}" class="btn btn-flat border-white text-white btn-rounded btn-icon" data-popup="lightbox"><i class="icon-zoomin3"></i></a>
												<a href="{{$place->image_1}}" class="btn btn-flat border-white text-white btn-rounded btn-icon"><i class="icon-link"></i></a>
											</span>
										</div>
									</div>

									<div class="caption">
										<h6 class="text-semibold no-margin-top">{{$place->title}}</h6>
										{{ str_limit($place->description, $limit = 150, $end = '...') }}
										<p class="text-semibold">{{$place->location}} | <span class="help-block">{{$place->address}}</span> </p>
									</div>

									<div class="panel-footer">
										<ul>
											<li><a href="{{url('place/'.$place->id)}}"><i class="icon-eye8 position-left"></i> View</a></li>
											<li><a href="#"><i class="icon-pencil4 position-left"></i> Edit</a></li>
											<li><a type="button" class="delete-place" id="{{$place->id}}" href="#del_place_modal" data-toggle="modal"><i class="icon-close2 position-left"></i> Delete</a></li>
										</ul>
									</div>
								</div>
							</div>
							@endif
						@endforeach
						{{$places->links()}}
						</div>
					</div>
				</form>
				<!-- /static mode -->
			</div>
		</div>
		<!-- /vertical form options -->
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

<div class="modal fade" id="del_place_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="del_place_modal_label">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i> No</button>
                <a type="button" class="btn btn-info" id="btn_delete_place"><i class="icon-check"></i> Yes</a>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $(".delete_place").click(function (event) {
        $("#btn_delete_place").prop('href', '/place/delete/' + event.target.id);
    });
});
</script>
@stop