<?php include ("../sections/header-brand.php"); ?>
<link href='~/media/224D340AEC064E9580054EF9447DCF1D.css' rel='stylesheet' type='text/css'>
<link href='~/media/C73783F3C0D3426A8E1B95F795439EF5.css' rel='stylesheet' type='text/css'>
<link href='http://localhost/css/beyond.css' rel='stylesheet' type='text/css'>






<div class="contentWrapNoSubNav beyond-campaign">
<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="image-container"><img id="beyondMainImage" class="full-screen" src="http://placehold.it/972x350"></div>
<div id="nav" class="navbar-collapse collapse affix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
  <ul class="nav navbar-nav nav-justified text-uppercase text-center">
    <li class="active"><a href="#wifi-inflight">Inflight Wifi</a></li>

    <li><a href="#fun-inflight">Inflight Entertainment</a></li>

    <li><a href="#aa-content">Alaska Content</a></li>

    <li><a href="#mag-inflight">Inflight Magazine</a></li>
    <!--<li id="book-link"><a class="text-success" data-toggle="collapse" data-target="#book-now"><span class="glyphicon glyphicon-plane"></span>&nbsp;<strong>Book Now</strong></a></li>-->
  </ul> 
</div>  

  </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="lead">We are proud to introduce you to our new, improved Alaska flight experience…Alaska Beyond&trade;</p>
      <p>Whether watching free entertainment, snacking on locally-sourced food & beverages, relaxing in our custom-designed, leather, power-equipped seats, or experiencing our award-winning service—we are confident your Alaska flight experience will be above and beyond your expectations. </p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3>Inflight Media & Wi-Fi</h3>
        <img class="full-screen" src="http://placehold.it/972x350">
      
      <p>We're curating an inflight media experience designed to inspire you. Starting with an exciting section of free content that will get you excited about your destination while you’re still in the air.
        Enjoy blockbuster movies, television, music, and the web with our <a href="http://www.alaskaair.com/content/travel-info/on-board/inflight-entertainment.aspx">inflight entertainment players</a> for as low as $1.99. Or, simply use your own mobile device to access all of the same content and web access with our new inflight app.
        Download it from the app store now and stay connected during your flight.</p>
        <a class="btn btn-green" href="">Learn More</a>
        <div class="col-md-4 text-center"> 
<button id="singlebutton" name="singlebutton" class="btn btn-primary">Next Step!</button> 
</div>
    </div></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Locally Sourced Food & Drinks</h3>
        <img class="full-screen" src="http://placehold.it/972x350">
        <p>We are always on the hunt for new, tasty local discoveries to bring on board and share with you. Being from the Northwest, we have an amazing community of artisans, chefs, and vineyards to partner with.</p>
        <p>On our flights you will find entrees created by Tom Douglas, a Fruit & Cheese plate featuring Beecher’s handmade cheese, Chateau St. Michelle and Canoe Ridge wines, as well as premium spirts crafted by Sun Liquor Distillery.</p>
        <a class="btn btn-green" href="">Learn More</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Power at Every Seat</h3>
        <img class="full-screen" src="http://placehold.it/972x350">
        <p>We’ve commissioned custom-designed <a target="_blank" href="http://www.recaro-as.com/home-acs.html">Recaro</a> leather seats, designed to offer you more legroom without compromising comfort or recline.</p>
        <p>Now in every one of those seats, on every Alaska flight, you can stay fully charged with 110 volt power and USB outlets in the seatback. There’s no need to put your life on hold just because you’re at 35,000 feet, stay connected with power and Wi-Fi on every flight.</p>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>Award Winning Service</h3>
          <p>At Alaska, we are passionate about the places we go and we bring that love of travel on board with us when we fly.</p>
          <p>Our flight attendants have earned their reputation for warm, genuine, and exceptional customer service. We take pride in getting excited about your trip while you’re up in the air. There’s no reason that your adventure shouldn’t start when you step on board with us. </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-sm-12"><h2>Lorem Ipsum Title</h2></div>
        <div class="col-sm-4">
          <img src="http://placehold.it/300x150">
          <h3>First Class Experience</h3>
          <p>Plenty of room, attentive service, and complementary Food & Drinks, who says the golden age of air travel is over. Learn more about your perfect flight <a href="http://www.alaskaair.com/content/travel-info/on-board/first-class-experience.aspx">here</a>.</p>
        </div>
        <div class="col-sm-4">
          <img src="http://placehold.it/300x150">
          <h3>Flying to Disneyland&reg;</h3>
          <p>The magic of your family adventure begins before you land with Disney-themed coloring books, snack packs, and more. Start your Disneyland® trip <a href="http://www.alaskaair.com/content/travel-info/on-board/fly-to-disneyland.aspx">here</a>.</p>
        </div>
        <div class="col-sm-4">
          <img src="http://placehold.it/300x150">
          <h3>Discover Music Onboard</h3>
          <p>Being based in Seattle, there are so many things that we share with our hometown. One of them is a deep love of music, check out our inflight music system to discover new, talented West Coast artists. </p>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
                
                                $('#nav').affix({
  offset: {
                top: $('#beyondMainImage').height()
  }

}); 

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                                $('html,body').animate({
                                  scrollTop: target.offset().top
                                }, 1000);
                                return false;
                  }
                }
  });
});

</script>

  <?php include ("../sections/footer.php"); ?>