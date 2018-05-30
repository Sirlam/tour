@extends('layouts.front.master')

@section('body')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-home position-left"></i> <span class="text-semibold">Home</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-lg-5">
                <!-- Search places -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Search places</h6>
                        <div class="heading-elements">
                            <form class="heading-form" action="#">
                                <div class="form-group" id="country-selector">
                                    <label for="changecountry-nigeria" class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                        <input type="checkbox" class="switch" checked="checked" name="type" id="changecountry-nigeria">
                                        Nigeria
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                            <!-- Accordion with left control button -->
                            <h6 class="content-group text-semibold">Locate different tourist attractions <small class="display-block">Multiple <code>options</code> including marker, multiple countries etc.</small></h6>

                            <div class="panel-group panel-group-control content-group-lg" id="accordion-control">
                                <div class="panel">
                                    <div class="panel-heading bg-danger">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-control" href="#accordion-control-group1">Instructions on using map</a>
                                        </h6>
                                    </div>
                                    <div id="accordion-control-group1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Map has been restricted to Nigeria alone and is shown in both map and satellite view</p>
                                            <ol>
                                                <li>Enter the name of the tourist attraction you are trying to locate</li>
                                                <li>Google predictions is enables to select the appropriate tourist center</li>
                                                <li>Once result is displayed, click on the icon of the location to display full address</li>
                                                <li>Click View on Google Maps to access more features like driving directions, images, ratings etc.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /accordion with left control button -->

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="total-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative" id="traffic-sources"></div>
                </div>
                <!-- /search places -->
            </div>

            <div class="col-lg-7">
                <!-- map area -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Map</h6>
                    </div>
                    <div id="map-canvas">
                        <!--<div class="row text-center">-->
                            <div class="pac-card" id="pac-card">
                                <div>
                                    <div id="title">Countries</div>
                                        <div id="country-selector" class="pac-controls">
                                            <input class="styled" type="radio" name="type" id="changecountry-usa" checked="checked">
                                            <label for="changecountry-usa">Nigeria</label>
                                            <input type="radio" name="type" id="changecountry-usa-and-uot" class="hidden">
                                            <label class="hidden" for="changecountry-usa-and-uot">USA and unincorporated organized territories</label>
                                        </div>
                                    </div>
                                    <div id="pac-container">
                                        <input class="form-control" id="pac-input" type="text" placeholder="Enter a location">
                                    </div>
                                </div>

                                <div id="map"></div>

                                <div id="infowindow-content">
                                  <img src="" width="16" height="16" id="place-icon">
                                  <span id="place-name"  class="title"></span><br>
                                  <span id="place-address"></span>
                                </div>
                            </div>
                        <!--</div>-->
                    </div>
                <!-- /map area -->
            </div>
        </div>
        <!-- /main charts -->

        <!-- Image gallery -->
        <div class="row">
            <!-- Image grid -->
            <h6 class="content-group text-semibold">
                User Experience
                <small class="display-block">View photos, comments and ratings shared by other users</small>
            </h6>

            @foreach($places as $place)
            @if(Auth::id() != $place->user_id)
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <div class="thumb">
                        <img src="{{$place->image_1}}" alt="" style="height: 200px;">
                        <div class="caption-overflow">
                            <span>
                                <a href="{{$place->image_1}}" class="btn btn-flat border-white text-white btn-rounded btn-icon" data-popup="lightbox"><i class="icon-zoomin3"></i></a>
                                <a href="{{$place->image_1}}" class="btn btn-flat border-white text-white btn-rounded btn-icon"><i class="icon-link"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="caption">
                        <h6 class="text-bold no-margin-top text-capitalize">{{$place->title}}</h6>
                        <p>{{ str_limit($place->description, $limit = 80, $end = '...') }}</p>
                        <p class="text-semibold text-capitalize">{{$place->location}} |
                            <span class="help-block">{{str_limit($place->address, $limit = 40, $end = '...')}}</span>
                        </p>
                        @foreach($users as $user)
                            @if($user->id == $place->user_id)
                            <p class="text-semibold text-capitalize"><i class="icon-user"></i> : <a href="{{url('profile/'.$user->id)}}">{{$user->username}}</a> </p>
                            @endif
                        @endforeach
                    </div>

                    <div class="panel-footer">
                        <ul>
                            <li><a href="{{url('place/'.$place->id)}}"><i class="icon-eye8 position-left"></i> View</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right"> {{$place->likes}}</span> Like <i class="icon-heart6 position-left"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
           {{$places->links()}}
        </div>
        <!-- /Image gallery -->


        <!-- Footer -->
        <div class="footer text-muted">
        &copy; 2017. <a href="{{URL::route('index')}}">Tour.ng</a> designed and developed by <a href="#">Olatunji Salam</a>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvwtvx8fQxJajRaPIcq9DE9knxftFmsVs&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript" src="{{URL::asset('js/plugins/media/fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/gallery.js')}}"></script>
<script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.465422, lng: 3.406448},
          zoom: 3
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var countries = document.getElementById('country-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Set initial restrict to the greater list of countries.
        autocomplete.setComponentRestrictions(
            {'country': ['ng']});

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a given radio button. The radio buttons specify
        // the countries used to restrict the autocomplete search.
        function setupClickListener(id, countries) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setComponentRestrictions({'country': countries});
          });
        }

        setupClickListener('changecountry-usa', 'ng');
        setupClickListener(
            'changecountry-usa-and-uot', ['us', 'pr', 'vi', 'gu', 'mp']);
        }
</script>

@stop
