<form role="form">
  <div class="col-sm-12">
    <div class="checkbox">
      <label>
        <input type="checkbox"> One Way
      </label>
      <label>
        <input type="checkbox"> Use Miles
      </label>
    </div>
</div>
  <div class="col-sm-6">
    <div class="form-group">   
      <input type="text" class="form-control" id="flightDepartureAiport" placeholder="Seattle, WA">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" id="flightDepartureDate" placeholder="Departure Date">
    </div>
    <div class="col-sm-6 no-padding-left">
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
    <div class="col-sm-6 no-padding">
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
  <div class="col-sm-6">
    <div class="form-group">
      <input type="text" class="form-control" id="flightArrivalAirport" placeholder="To">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" id="flightArrivalDate" placeholder="Return Date">
    </div>
    <button type="submit" class="btn btn-default btn-block">Find Flights</button>
  </div>
</form>
<div class="row">
  <div class="col-sm-12">
    <div class="checkbox">
    <button type="button" class="btn btn-link">Advanced Search </button>
    </div>
  </div>
</div>
