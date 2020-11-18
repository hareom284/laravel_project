@extends('frontendtemplate')
@section('content')
<h3 class="tile-title mt-3 text-center">Contact Us</h3>
<hr class="hr">

<div class="row contact">
  <div class="col-md-6">
    <div class="tile">
      <!-- <h3 class="tile-title mb-3">Contact Us</h3> -->
      <div class="tile-body">
        <form class="form-horizontal">
          <div class="form-group row">
            <label class="control-label col-md-3">Name</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="Enter full name">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" type="email" placeholder="Enter email address">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Message</label>
            <div class="col-md-8">
              <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="tile-footer">
        <div class="row">
          <div class="col-md-8 col-md-offset-3 mb-3">
            <button class="btn btn-success" type="button">Send Message</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 mr-auto">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.605988126474!2d96.12316661434625!3d16.845891722630967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1953fc49fb755%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1605688496347!5m2!1sen!2smm" width="400" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>

@endsection