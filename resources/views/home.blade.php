@extends('partials.master')

@section('title')
    Iorga-Bercaru MAD 2017
@endsection

@section('content')

<!-- Page content -->
<div class="w3-content" style="max-width:2000px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="https://wallpaperscraft.com/image/youtube_video_site_red_26577_1280x720.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Youtube</h3>
      <p><b>Videos</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="http://static.myvideo.az/screens/194/1934617.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>INNA</h3>
      <p><b>Cantareata romana</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://i.ytimg.com/vi/HWWfecvwX9k/maxresdefault.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Ariana Grande</h3>
      <p><b>Descriere</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">iMusic</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum cursus leo sed tincidunt. Donec finibus convallis orci, non tempor turpis condimentum id. Nullam faucibus metus vitae convallis eleifend. Nam mollis porttitor lacus ullamcorper eleifend. Donec eu arcu dolor. Quisque lacinia elementum odio egestas sagittis. Nunc vel justo a risus consequat mollis at et ante. Nulla lobortis turpis quis scelerisque hendrerit. Aenean placerat eros in ullamcorper sagittis. Nulla venenatis lectus mi, nec suscipit dui viverra non. Cras euismod gravida efficitur. Integer maximus mauris id quam dignissim, nec condimentum est feugiat. Mauris porta lorem eros, vitae ornare risus lacinia non. Aliquam iaculis aliquam viverra.</p>
    <div class="w3-row w3-padding-64">
      <div class="w3-third">
        <p>Andrei Iorga</p>
        <img src="https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-9/13627069_1332829013413561_2702608968725584859_n.jpg?oh=bae5ebf863e90a1480c0a7d28b8e3315&oe=59925E4B" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Bercaru Bogdan</p>
        <img src="https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-9/13043263_1010225215693350_3840733177324791107_n.jpg?oh=b3ef72b89e17976be526957db821223a&oe=59854F47" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">What iMusic offers?</h2>
      <p class="w3-opacity w3-center"><i>MAD Project</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Youtube Search <span class="w3-tag w3-red w3-margin-left">New</span></li>
        <li class="w3-padding">Save videos <span class="w3-tag w3-red w3-margin-left">New</span></li>
        <li class="w3-padding">Play them later <span class="w3-badge w3-right w3-margin-right"></span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="http://images-onemusicph.com.s3.amazonaws.com/media/artists/1487920662_cover-pic-thumb-Artist'-Profile-Carousel-(Beyonce).jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Beyonce</b></p>
            <p class="w3-opacity">Artist</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Sign up</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://s-media-cache-ak0.pinimg.com/736x/3b/32/be/3b32be0720c0c46fe587981b93770206.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Adam Levine</b></p>
            <p class="w3-opacity">Artist</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Sign up</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://s1-ssl.dmcdn.net/J9bUs/x240-7V6.jpg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Nicki Minaj</b></p>
            <p class="w3-opacity">Artist</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Sign up</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
 
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->

<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection