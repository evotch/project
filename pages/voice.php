  <?php include ("../sections/header.php"); ?>
  <style>
  .sidenav .active .nav>li>a {
    padding: 1px 0 1px 20px;
    font-size: .9em;
  }
  .sidenav .nav>li>a {
    padding: 1px 15px;
    font-size: .9em;
  }
  </style>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <div class="row">
        <div class="col-md-9">
          <div class="docs-section">
            <?php include ("../voice/intro.php"); ?>
          </div>
          <div class="docs-section"> 
            <?php include ("../voice/tone.php"); ?>
          </div>          
          <div id="A" class="docs-section">   
            <div class="page-header">
              <h3>Terms</h3>
              <h4>A</h4>               
            </div>
            <?php include ("../voice/ampm.php"); ?>
            <?php include ("../voice/abbreviations.php"); ?> 
            <?php include ("../voice/account.php"); ?>  
            <?php include ("../voice/affect.php"); ?> 
            <?php include ("../voice/age.php"); ?>  
            <?php include ("../voice/airfare.php"); ?>
            <?php include ("../voice/alaskaair.php"); ?>
            <?php include ("../voice/asqx.php"); ?>
          </div>
          <div id="B" class="docs-section">                    
            <div class="page-header">
              <h4>B</h4>               
            </div>
            <?php include ("../voice/blackout.php"); ?>
            <?php include ("../voice/bold.php"); ?> 
            <?php include ("../voice/bonus-travel.php"); ?>  
            <?php include ("../voice/bring-vs-take.php"); ?> 
          </div>
          <div id="C" class="docs-section">   
            <div class="page-header">
              <h4>C</h4>               
            </div>
            <?php include ("../voice/cancel.php"); ?>
            <?php include ("../voice/capitalization.php"); ?>
            <?php include ("../voice/carry-on.php"); ?>
            <?php include ("../voice/certificate.php"); ?> 
            <?php include ("../voice/check-box.php"); ?>             
            <?php include ("../voice/check-in.php"); ?> 
            <?php include ("../voice/check-out.php"); ?> 
            <?php include ("../voice/checkpoint.php"); ?>
            <?php include ("../voice/choose.php"); ?>
            <?php include ("../voice/city-codes.php"); ?>
            <?php include ("../voice/city-guides.php"); ?>
            <?php include ("../voice/class-of-service.php"); ?>
            <?php include ("../voice/clear-vs-uncheck.php"); ?>

          </div>
        </div>  
        <div class="col-md-3">
          
          <div class="sidenav" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
            <div class="page-header">
            <h3>Table of Contents</h3>
          </div>
          <!--still trying to get the navigation to exand when you scroll over each letter-->
          <ul class="nav">
              <li><a href="#A">A</a>
                <ul class="nav">
                    <li><a href="#ampm">am/pm</a></li>
                    <li><a href="#abbreviations">Abbreviations, monetary</a></li>
                    <li><a href="#account">Account</a></li>
                    <li><a href="#affect">Affect vs. effect</a></li>
                    <li><a href="#age">Age</a></li>
                    <li><a href="#airfare">Airfare</a></li>
                    <li><a href="#alaskaair">Alaskaair.com</a></li>
                    <li><a href="#asqx">Alaska Airlines and Horizon Air</a></li>
                    <li><a href="#as">AS</a></li>
                </ul>
              </li>
              <li><a href="#B">B</a>
                <ul class="nav">
                    <li><a href="#">Blackout</a></li>
                    <li><a href="#">Bold</a></li>
                    <li><a href="#">Book</a></li>
                    <li><a href="#">Bonus Travel Certificate (BTC)</a></li>
                    <li><a href="#">Bring vs. take</a></li>
                </ul>
              </li>
              <li><a href="#C">C</a>
                <ul class="nav">
                    <li><a href="#">Can vs. may</a></li>
                    <li><a href="#">Canceled/canceling/cancellation</a></li>
                    <li><a href="#">Capitalization</a></li>
                    <li><a href="#">Carry on vs. carry-on</a></li>
                    <li><a href="#">Check box</a></li>
                    <li><a href="#">Check in/check-in/checked in</a></li>
                    <li><a href="#">Check out/checkout/checked out</a></li>
                    <li><a href="#">Checkpoint</a></li>
                    <li><a href="#">Choose</a></li>
                    <li><a href="#">City codes</a></li>
                    <li><a href="#">City Guides</a></li>
                    <li><a href="#">Class of service </a></li>
                    <li><a href="#">Clear vs. uncheck</a></li>
                    <li><a href="#">Click</a></li>
                    <li><a href="#">Coach Class</a></li>
                    <li><a href="#">Commas</a></li>
                    <li><a href="#">Companion Fare Discount Code </a></li>
                    <li><a href="#">Confirmation code</a></li>  
                    <li><a href="#">Connection</a></li>  
                    <li><a href="#">Currency</a></li>  
                    <li><a href="#">Customer Care</a></li> 
                    <li><a href="#">Customer or traveler vs. passenger</a></li> 
                </ul>
              </li>
              <li><a href="#D">D</a>
                <ul class="nav">
                    <li><a href="#">Dashes</a></li>
                    <li><a href="#">Do NOT use spaces on either side of the em dash, or en dash</a></li>
                    <li><a href="#">Dates</a></li>
                    <li><a href="#">Dates, abbreviating a series</a></li>
                    <li><a href="#">Delta Air Lines</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Discount Code</a></li>
                    <li><a href="#">Double spacing</a></li>
                </ul>
              </li>   
              <li><a href="#E">E</a>
                <ul class="nav">
                    <li><a href="#">EasyBiz</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">E-Statements</a></li>
                    <li><a href="#">E-ticket</a></li>
                    <li><a href="#">Effect vs. affect</a></li>
                    <li><a href="#">e.g. vs. i.e.</a></li>
                    <li><a href="#">Electronic ticket</a></li>
                    <li><a href="#">Ellipsis</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Error messages</a></li>
                    <li><a href="#">Exchange</a></li>
                    <li><a href="#">Exclamation points</a></li>
                </ul>
              </li>  
              <li><a href="#F">F</a>
                <ul class="nav">
                    <li><a href="#">FAA</a></li>
                    <li><a href="#">Federal Aviation Administration</a></li>
                    <li><a href="#">Fewer vs. less</a></li>
                    <li><a href="#">First Class</a></li>
                    <li><a href="#">Footnotes</a></li>
                    <li><a href="#">Free</a></li>
                    <li><a href="#">Frequent flyer</a></li>
                </ul>
              </li> 
              <li><a href="#G">G</a>
                <ul class="nav">
                    <li><a href="#">GDS</a></li>
                    <li><a href="#">Gift certificate</a></li>
                </ul>
              </li> 
              <li><a href="#H">H</a>
                <ul class="nav">
                    <li><a href="#">Hawaii</a></li>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">Horizon Air</a></li>
                    <li><a href="#">Hyphens</a></li>
                </ul>
              </li> 
              <li><a href="#I">I</a>
                <ul class="nav">
                    <li><a href="#">Identification/ID</a></li>
                    <li><a href="#">i.e. vs. e.g</a></li>
                    <li><a href="#">IMAGE</a></li>
                    <li><a href="#">Inflight</a></li>
                    <li><a href="#">Internet</a></li>
                    <li><a href="#">Intranet</a></li>
                    <li><a href="#">ITA</a></li>
                    <li><a href="#">Italics</a></li>
                    <li><a href="#">Its vs. it’s</a></li>
                </ul>
              </li> 
              <li><a href="#I">J</a>
              </li> 
              <li><a href="#K">K</a>
              </li>
              <li><a href="#L">L</a>
                <ul class="nav">
                    <li><a href="#">Lay/lie</a></li>
                    <li><a href="#">Less vs. fewer</a></li>
                    <li><a href="#">Links</a></li>
                    <li><a href="#">Login vs. sign in</a></li>
                    <li><a href="#">Low Fare Calendar</a></li>
                </ul>
              </li>
              <li><a href="#M">M</a>
                <ul class="nav">
                    <li><a href="#">May vs. can</a></li>
                    <li><a href="#">Mileage Plan&trade;</a></li>
                    <li><a href="#">Money &amp; Miles</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">MVP&reg;, MVP&reg; Gold, and Gold 75k</a></li>
                </ul>
              </li>
              <li><a href="#M">N</a>
                <ul class="nav">
                    <li><a href="#">Nonrefundable</a></li>
                    <li><a href="#">Nontransferable</a></li>
                    <li><a href="#">Nonstop</a></li>
                </ul>
              </li>
              <li><a href="#O">O</a>
                <ul class="nav">
                    <li><a href="#">Offline</a></li>
                    <li><a href="#">Onboard</a></li>
                    <li><a href="#">One way</a></li>
                    <li><a href="#">Online</a></li>
                    <li><a href="#">Open jaw</a></li>
                    <li><a href="#">Outbound/inbound</a></li>
                </ul>
              </li>
              <li><a href="#P">P</a>
                <ul class="nav">
                    <li><a href="#">Partner</a></li>
                    <li><a href="#">Partner airline</a></li>
                    <li><a href="#">Passenger vs. traveler</a></li>
                    <li><a href="#">Periods</a></li>
                    <li><a href="#">Phone numbers</a></li>
                    <li><a href="#">Province/state names</a></li>
                    <li><a href="#">Punctuation</a></li>
                </ul>
              </li>
              <li><a href="#Q">Q</a>
                <ul class="nav">
                    <li><a href="#">Quotation marks</a></li>
                </ul>
              </li>
              <li><a href="#R">R</a>
                <ul class="nav">
                    <li><a href="#">Radio button</a></li>
                    <li><a href="#">Reaccomodate</a></li>
                    <li><a href="#">Record locator (reloc or PNR)</a></li>
                    <li><a href="#">Registered trademark</a></li>
                    <li><a href="#">Reenter</a></li>
                    <li><a href="#">Reissue</a></li>
                    <li><a href="#">Reprotect</a></li>
                    <li><a href="#">Reservations</a></li>
                    <li><a href="#">Round trip</a></li>
                </ul>
              </li>
              <li><a href="#S">S</a>
                <ul class="nav">
                    <li><a href="#">Sabre</a></li>
                    <li><a href="#">Sea-Tac</a></li>
                    <li><a href="#">Security checkpoint</a></li>
                    <li><a href="#">Segment</a></li>
                    <li><a href="#">Select</a></li>
                    <li><a href="#">Self-service kiosk</a></li>
                    <li><a href="#">Sign in vs. login</a></li>
                    <li><a href="#">Sign out</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Spacing</a></li>
                    <li><a href="#">SSR</a></li>
                    <li><a href="#">Standby</a></li>
                    <li><a href="#">Sign out</a></li>
                    <li><a href="#">State/province names</a></li>
                    <li><a href="#">Sub and super scripting</a></li>
                    <li><a href="#">Systemwide</a></li>
                </ul>
              </li>
              <li><a href="#T">T</a>
                <ul class="nav">
                    <li><a href="#">Time of day</a></li>
                    <li><a href="#">Time zones</a></li>
                    <li><a href="#">Tone/voice</a></li>
                    <li><a href="#">Trademark</a></li>
                    <li><a href="#">Trademarked item list</a></li>
                    <li><a href="#">Transfer/transferable/transferred/transferring</a></li>
                    <li><a href="#">Traveler vs. passenger</a></li>
                </ul>
              </li>
              <li><a href="#U">U</a>
                <ul class="nav">
                    <li><a href="#">UMNR</a></li>
                    <li><a href="#">Uncheck vs. clear</a></li>
                    <li><a href="#">Underline</a></li>
                    <li><a href="#">URL</a></li>
                    <li><a href="#">User ID</a></li>
                    <li><a href="#">User interface documentation wiki</a></li>
                </ul>
              </li>
              <li><a href="#V">V</a>
                <ul class="nav">
                    <li><a href="#">Vacations</a></li>
                    <li><a href="#">Vacation Packages</a></li>
                    <li><a href="#">Voice/tone</a></li>
                </ul>
              </li>
              <li><a href="#W">W</a>
                <ul class="nav">
                    <li><a href="#">Washington, D.C., airports</a></li>
                    <li><a href="#">Web addresses</a></li>
                    <li><a href="#">Web Bag Drop</a></li>
                    <li><a href="#">Website</a></li>
                </ul>
              </li>
            </ul>
          </div><!--end sidenav holder-->
        </div><!--end col3-->
      </div><!--end row-->
    </div><!--end container-->
    <?php include ("../sections/footer.php"); ?>