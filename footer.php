    
    
    <!-- FOOTER -->
    <footer>
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <h4><i class="fa fa-plane"></i>About Us</h4>
      <div class="textBox">
        <p>At Alaska Airlines we are a company of pioneers, genuinely curious with a taste for adventure. We propel the industry with technological innovation and the highest standards of customer satisfaction. Enjoy a flight that mirrors life here in the Northwest &mdash; comfortable, efficient, and forward thinking.</p>
        <p>Most importantly, we bring our own love of travel and exploration on board with us, so that we can share it with you.</p>
      </div>
      <a class="btn btn-success" href="#">Explore More &raquo;</a>
    </div>
    <div class="col-sm-3">
    <h4><i class="fa fa-plane"></i>About Alaska</h4>
        <ul>
          <li><a href="#">Careers</a></li>
          <li><a href="https://easybiz.alaskaair.com/ssl/signin/cosignin.aspx?CurrentForm=UCCoSignInStart&lid=footer:easyBiz">EasyBiz</a></li>
          <li><a href="http://www.alaskaair.com/content/travel-info/optional-services-fees.aspx?cid=mobsite-optional-services-fees">Optional Services & Fees</a></li>
          <!--<li><a href="http://www.alaskaair.com/content/legal/privacy-policy.aspx?cid=mobsite-privacypolicy">Privacy</a></li>-->
        </ul>
    </div>
    <div class="col-sm-3">
    <h4><i class="fa fa-plane"></i>About Alaska</h4>
        <ul>
          <li><a href="#">Careers</a></li>
          <li><a href="https://easybiz.alaskaair.com/ssl/signin/cosignin.aspx?CurrentForm=UCCoSignInStart&lid=footer:easyBiz">EasyBiz</a></li>
          <li><a href="http://www.alaskaair.com/content/travel-info/optional-services-fees.aspx?cid=mobsite-optional-services-fees">Optional Services & Fees</a></li>
          <!--<li><a href="http://www.alaskaair.com/content/legal/privacy-policy.aspx?cid=mobsite-privacypolicy">Privacy</a></li>-->
        </ul>
    </div>
    </div>
    </div>  
    </footer>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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