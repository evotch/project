<form role="form">
    <div class="checkbox">
      <label>
        <input type="checkbox"> One Way
      </label>
      <label>
        <input type="checkbox"> Use Miles
      </label>
    </div>

    <div class="form-group"> 
      From  
      <input type="text" class="form-control" id="flightDepartureAiport" placeholder="Seattle, WA">
    </div>
    <div class="form-group">  
      To 
      <input type="text" class="form-control" id="flightDepartureAiport" placeholder="Destiation">
    </div>
  <div class="row">
    <div class="col-md-9 form-group">
    Departing
      <input type="date" class="form-control" id="flightDepartureDate" placeholder="Departure Date">
    </div>
<div class="col-md-3 form-group">
      Time
      <input type="time" class="form-control" id="flightDepartureTime" placeholder="Departure Time">
</div>
</div>

      <div class="row">
    <div class="col-md-9 form-group">
    Returning
      <input type="date" class="form-control" id="flightDepartureDate" placeholder="Returning Date">
    </div>
<div class="col-md-3 form-group">
      Time
      <input type="time" class="form-control" id="flightDepartureTime" placeholder="Returning Time">
</div>
</div>
        <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox"> Low Fare Calendar
      </label>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 form-group">
      <select class="form-control">
        <option value="one">1 Adult</option>
        <option value="two">2 Adult</option>
        <option value="three">3 Adult</option>
        <option value="four">4 Adult</option>
        <option value="five">5 Adult</option>
        <option value="four">6 Adult</option>
        <option value="five">7 Adult</option>
      </select>
</div>
<div class="col-md-6 form-group">
      <select class="form-control">
        <option value="one">1 Child</option>
        <option value="two">2 Children</option>
        <option value="three">3 Children</option>
        <option value="four">4 Children</option>
        <option value="five">5 Children</option>
        <option value="four">6 Children</option>
        <option value="five">7 Children</option>
      </select>
</div>
</div>

    <div class="form-group">
      <input type="text" class="form-control" id="flightArrivalAirport" placeholder="Discount Code">
    </div>
    <div class="form-group">
      <select class="form-control">
        <option value="one">Upgarde Preference</option>
        <option value="two">Mileage Upgrade</option>
        <option value="three">MVP Upgrade</option>
        <option value="four">MVP Gold Upgrade</option>
        <option value="five">MVP Gold Guest Upgrade</option>

      </select>
    </div>
    <button type="submit" class="btn btn-default btn-block">Find Flights</button>

</form>

