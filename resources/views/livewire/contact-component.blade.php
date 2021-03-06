<div class="relative full-width">
    <!-- Breadcrumb -->
    <div class="container-web relative">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-web">
                    <ul class="clear-margin">
                        <li class="animate-default title-hover-red"><a href="#">Home</a></li>
                        <li class="animate-default title-hover-red"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Content Contact -->
    <div class="relative container-web">
        <div class="container">
            <div class="row bottom-margin-default">
                <div id="map" class=" map-contact relative overfollow-hidden">
                    
                </div>
            </div>
            <script>
                    var map, marker, infoWindow;
                    var SYDNEY = {lat: 40.707668, lng: -74.0158977};
                    var OPERA_HOUSE = {lat: 40.707668, lng: -74.0158977};
                    function initMap() {
                      // Create a map in the usual way.
                      map = new google.maps.Map(
                          document.getElementById('map'), {
                              center: SYDNEY,
                              zoom: 12,
                              styles: [
                                  {
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#f5f5f5"
                                      }
                                    ]
                                  },
                                  {
                                    "elementType": "labels.icon",
                                    "stylers": [
                                      {
                                        "visibility": "off"
                                      }
                                    ]
                                  },
                                  {
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#616161"
                                      }
                                    ]
                                  },
                                  {
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                      {
                                        "color": "#f5f5f5"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "administrative.land_parcel",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#bdbdbd"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "poi",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#eeeeee"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "poi",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#757575"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "poi.park",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#e5e5e5"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "poi.park",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#9e9e9e"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "road",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#ffffff"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "road.arterial",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#757575"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "road.highway",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#dadada"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "road.highway",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#616161"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "road.local",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#9e9e9e"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "transit.line",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#e5e5e5"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "transit.station",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#eeeeee"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                      {
                                        "color": "#c9c9c9"
                                      }
                                    ]
                                  },
                                  {
                                    "featureType": "water",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                      {
                                        "color": "#9e9e9e"
                                      }
                                    ]
                                  }
                                ]
                          });

                      // Create a marker. Markers behave smoothly with the beta renderer.
                      marker = new google.maps.Marker({position: OPERA_HOUSE, map: map});
                      
                    }
            </script>
            <div class="row footer-from-address">
                <div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
                    <div class="row">
                        <p class="title-contact bold bottom-margin-default">Contact Infomation</p>
                        <div class="relative clearfix row-info-contact full-width bottom-margin-default">
                            <div class="relative left-row-info-contact">
                                <img src="img/icon_office-min.png" alt="" />
                            </div>
                            <div class="relative right-row-info-contact">
                                <p class="bold name-row-contact">Main Office</p>
                                <p>PO Box 16122 Collins Street West, Victoria 8007 Australia</p>
                                <p>Hotline: <a href="tel:19001901">19001901</a></p>
                                <p>Fax: <a href="tel:02839759568">(028) 3975 9568</a></p>
                                <p>Email: <a href="mailto:support@megastore.com">support@megastore.com</a></p>
                            </div>
                        </div>
                        <div class="relative clearfix row-info-contact full-width bottom-margin-default top-margin-15-default">
                            <div class="relative left-row-info-contact">
                                <img src="img/icon_point_map-min.png" alt="" />
                            </div>
                            <div class="relative right-row-info-contact">
                                <p class="bold name-row-contact">Sales Office</p>
                                <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                <p>Hotline: <a href="tel:19001901">19001901</a></p>
                                <p>Fax: <a href="tel:02839759568">(028) 3975 9568</a></p>
                                <p>Email: <a href="mailto:support@megastore.com">support@megastore.com</a></p>
                            </div>
                        </div>
                        <div class="relative clearfix row-info-contact full-width bottom-margin-default top-margin-15-default">
                            <div class="relative left-row-info-contact">
                            </div>
                            <div class="relative right-row-info-contact">
                                <p>No. 1122  Marmora Road, South Large, California, USA</p>
                                <p>Hotline: <a href="tel:19001901">19001901</a></p>
                                <p>Fax: <a href="tel:02839759568">(028) 3975 9568</a></p>
                                <p>Email: <a href="mailto:support@megastore.com">support@megastore.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
                    <div class="row">
                        <p class="title-contact bold bottom-margin-default">Submit a Message</p>
                        <div class="relative full-width form-contact">
                            <form method="POST" action="/" class="form-placeholde-animate">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input type="text" name="name" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Phone number<span class="req">*</span>
                                    </label>
                                    <input type="text" name="phone" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Your email<span class="req">*</span>
                                    </label>
                                    <input type="text" name="email" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Message<span class="req">*</span>
                                    </label>
                                    <textarea required name="message" rows="6" autocomplete="off"></textarea>
                                </div>
                                <button type="submit" class="uppercase animate-default button-hover-red">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Contact -->
</div>