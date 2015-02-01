<!-- FOOTER -->
<footer class="as-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5><i class="fa fa-user"></i>Basic Style Guide</h5>
                <ul class="footerLists">
                    <li><a href="digital-design-principles.php">Design Principles</a></li>
                    <li><a href="home.php">Brand Colors</a></li>
                    <li><a href="home.php#buttons">Buttons</a></li>
                    <li><a href="home.php#typography">Typography</a></li>
                </ul>
                
            </div>
            <div class="col-sm-4">
                
                <h5><i class="fa fa-suitcase"></i>Voice/Terms</h5>
                <ul class="footerLists">
                    <li><a href="voice.php#A">Terms A-D</a></li>
                    <li><a href="voice.php#E">Terms E-K</a></li>
                    <li><a href="voice.php#L">Terms L-Q</a></li>
                    <li><a href="voice.php#R">Terms R-Z</a></li>
                </ul>
                
            </div>
            <div class="col-sm-4">
               
                <h5><i class="fa fa-user"></i>More</h5>
                <ul class="footerLists">
                    
                    <li><a href="http://www.alaskabrandhub.com/">Alaska Brand Hub</a></li>
                    <li><a href="https://www.yammer.com/alaskaair.com/groups/digitalmarketing/info">Sales Page Parameters</a></li>
                </ul>
            </div>
        </div>
    </div>
<!--<hr>
<div class="container">
    <div class="row">
    
        <div class="col-sm-6 social">
            <span class="h6">Connect with us </span><a href="#"><i class="icon-google-plus"></i></a> <a href="#"><i class="icon-facebook"></i></a>  <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-github"></i></a> <a href="#"><i class="icon-pinterest"></i></a>
        </div>
        <div class="col-sm-6">
            Copyright &copy; 1995 - 2014 Alaska Air Group, Inc. All Rights Reserved</a>
        </div>
    </div>
</div>-->
</footer>




<!--
<div class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul class="nav-socialLinks">
                    <li class="mobile-headline"><strong>Connect with us</strong></li>
                    <li class="socialFirst"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-quote-left"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="legal">
                    <li><a href="http://www.alaskaair.com/content/legal/consumer-notices.aspx">Copyright &copy; 1995 - 2014 Alaska Air Group, Inc. All Rights Reserved</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
        
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!--<script src="js/docs.min.js"></script>
        IE10 viewport hack for Surface/desktop Windows 8 bug
        <script src="js/ie10-viewport-bug-workaround.js"></script>-->
        <script type="text/javascript">
        $('body').scrollspy({target:".voice-menu"});
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        });
        //Start animate advisory slideup when dismissed script
        $(".advisory").click(function (e) {
            $(this).slideUp('slow');
        });
     

        //smooth scrolling
//        $('a[href*=#]:not([href=#])').click(function() {
//    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
//        || location.hostname == this.hostname) {
//
 //       var target = $(this.hash);
 //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
 //          if (target.length) {
 //            $('html,body').animate({
  //               scrollTop: target.offset().top
 //           }, 1000);
 //           return false;
 //       }
 //   }
//});
        //end smooth scrolling


</script>
        
    </body>
</html>
