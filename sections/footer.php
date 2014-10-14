<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h5><i class="fa fa-plane"></i>About Us</h5>
                <div class="textBox">
                    <p>At Alaska Airlines we are a company of pioneers, genuinely curious with a taste for adventure. We propel the industry with technological innovation and the highest standards of customer satisfaction. Enjoy a flight that mirrors life here in the Northwest &mdash; comfortable, efficient, and forward thinking.</p>
                    <p>Most importantly, we bring our own love of travel and exploration on board with us, so that we can share it with you.</p>
                </div>
                <a class="btn btn-success" href="#">Explore More</a>
            </div>
            <div class="col-sm-3">
                <h5><i class="fa fa-user"></i>Custom Support</h5>
                <ul class="footerLists">
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">FAQ Help</a></li>
                    <li><a href="#">Refund</a></li>
                </ul>
                <h5><i class="fa fa-suitcase"></i>Services</h5>
                <ul class="footerLists">
                    <li><a href="#">Arrival and departure</a></li>
                    <li><a href="#">Check-in information</a></li>
                    <li><a href="#">Baggage</a></li>
                </ul>
                <h5><i class="fa fa-plane"></i>Mileage Plan<sup>&trade;</sup></h5>
                <ul class="footerLists">
                    <li><a href="http://www.alaskaair.com/content/mileage-plan/benefits/about-mileage-plan.aspx">About Mileage Plan<sup>&trade;</sup></a></li>
                    <li><a href="http://www.alaskaair.com/content/mileage-plan/frequently-asked-questions/faq-companion-discount-code.aspx">Companion Fare FAQ</a></li>
                    <li><a href="http://www.alaskaair.com/content/mileage-plan/benefits/elite-levels-and-benefits.aspx">Elite Benefits</a></li>
                    <li><a href="#">Enroll Today</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5><i class="fa fa-dollar"></i>Specials</h5>
                <ul class="footerLists">
                    <li>Sign up for Email Deals</li>
                    <li><a href="#">Flight Deals</a></li>
                    <li><a href="#">Hotel Deals</a></li>
                    <li><a href="#">Car Deals</a></li>
                </ul>
                <h5>Information</h5>
                <ul class="footerLists">
                    <li><a href="#">Careers</a></li>
                    <li><a href="https://easybiz.alaskaair.com/ssl/signin/cosignin.aspx?CurrentForm=UCCoSignInStart&lid=footer:easyBiz">EasyBiz</a></li>
                    <li><a href="http://www.alaskaair.com/content/travel-info/optional-services-fees.aspx?cid=mobsite-optional-services-fees">Optional Services & Fees</a></li>
                    <li><a href="http://www.alaskaair.com/content/legal/privacy-policy.aspx?cid=mobsite-privacypolicy">Privacy</a></li>
                    <li><a href="http://www.alaskaair.com/content/travel-info/policies/children-infants-and-children.aspx?lid=home-page:quick-links::infants-children">Infants and Children</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--
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
        $('body').scrollspy({target:".sidenav"})
        //this sticks the side nav to the top of the page
        $('.sidenav').affix({
        offset: {
        top: 203
        , bottom: function () {
        return (this.bottom = $('.footer').outerHeight(true))
        }
        }
        })
        </script>
        
    </body>
</html>