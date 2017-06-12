<script type="text/javascript" src="js/footer.js"></script>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 20%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>



        <div class="ui inverted vertical segment">
                <div class="ui center aligned container">
                    <div class="footer-section">
                        <div class="ui stackable equal height stackable grid">
                            <div class="four wide column">
                                <h4 class="ui header2">OILancer</h4>
                                <div class="ui divider"></div>
                                <div class="ui link list">
                                    <a href="#" class="item ">Home</a>
                                    <a href="#" class="item">Lowongan Kerja</a>
                                    <a href="#" class="item">Cari Freelancer</a>
                                    
                                </div>
                            </div>
                            <div class="four wide column">
                                <h4 class="ui header2">Company</h4>
                                <div class="ui divider"></div>
                                <div class="ui link list">
                                    <a href="#" class="item">Tentang Kami>
                                    <a href="#" class="item">Blog</a>
                                </div>
                            </div>
                            <div class="four wide column">
                                <h4 class="ui header2">Resource</h4>
                                <div class="ui divider"></div>
                                <div class="ui link list">
                                    <a href="#" class="item">Kebijakan Privasi</a>
                                    <a href="#" class="item">Syarat dan Ketentuan</a>
                                    <a href="#" class="item">Peraturan Client</a>
                                    <a href="#" class="item">Peraturan Freelancer</a>
                                </div>
                            </div>
                            <div class="four wide column">
                                <h4 class="ui header2">Social Media</h4>
                                <div class="ui divider"></div>
                                <div class="ui link list">
                                    <a href="#" class="item"><i class="grey facebook icon"></i> facebook</a>
                                    <a href="#" class="item"><i class="grey instagram icon"></i> instagram</a>
                                    <a href="#" class="item"><i class="grey google plus icon"></i> Google Plus</a>
                                </div>
                            </div>
                        </div>

                     

                        <div class="ui inverted section divider"></div>

                        <img src="public/images/logo-2.png" class="ui centered mini image">
                        <div class="ui horizontal inverted small divided link list">
                            <a class="item">OILancer</a>
                        </div>

                    </div>
                </div>
            </div>

<!-- map -->
<div id="map"></div>
<!-- map -->

                            
                            


<script>

      function initMap() {
        var myLatLng = {lat: -7.2746217, lng: 112.7919691};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var contentString = 'lokasi OILancer';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Lokasi Perusahaan'
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKT5O7A1ARnEIzq--ZRPVyNiCA4xnwxGo&callback=initMap">
    </script>