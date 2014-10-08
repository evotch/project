          <div class="homelet"><!-- The Homelet -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="active"><a href="#booking" role="tab" data-toggle="tab">Book</a></li>
              <li><a href="#checkin" role="tab" data-toggle="tab">Check In</a></li>
              <li><a href="#manage" role="tab" data-toggle="tab">Manage</a></li>
              <li><a href="#status" role="tab" data-toggle="tab">Status</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active flightSearch" id="booking">
                <div class="bookingForms">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="active"><a href="#flights" role="tab" data-toggle="tab">Flights</a></li>
                    <li><a href="#hotels" role="tab" data-toggle="tab">Hotels</a></li>
                    <li><a href="#cars" role="tab" data-toggle="tab">Cars</a></li>
                    <li><a href="#packages" role="tab" data-toggle="tab">Packages</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active flightSearch" id="flights">
                      <?php include ("forms/flight.php"); ?>
                    </div>
                    <!-- Hotels-->
                    <div class="tab-pane" id="hotels">
                      <?php include ("forms/hotel.php"); ?>
                    </div>
                    <!-- Cars -->
                    <div class="tab-pane" id="cars">
                      <?php include ("forms/car.php"); ?>
                    </div>
                    <!-- Packages -->
                    <div class="tab-pane" id="packages">
                      <?php include ("forms/package.php"); ?>
                    </div> 
                  </div><!-- End Tab panes -->  
                </div><!-- End Booking Forms -->
                <button type="button" class="btn btn-link no-padding-left"></button>
              </div>
              <!-- checkin-->
              <div class="tab-pane" id="checkin">
                <?php include ("forms/flight.php"); ?>
              </div>
              <!-- Manage -->
              <div class="tab-pane" id="manage">
                <?php include ("forms/package.php"); ?>
              </div>
              <!-- Packages -->
              <div class="tab-pane" id="status">
                <?php include ("forms/package.php"); ?>
              </div> 
            </div><!-- End Tab panes -->  
          </div><!-- End Booking Forms -->