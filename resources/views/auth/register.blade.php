@extends('layouts.private')

@section('content')



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>

<style>
.multi_step_form {
  background: #f6f9fb;
  display: block;
  overflow: hidden;
}
.multi_step_form #msform {
  text-align: center;
  position: relative;
  padding-top: 50px;
  min-height: 820px;
  max-width: 810px;
  margin: 0 auto;
  background: #ffffff;
  z-index: 1;
}
.multi_step_form #msform .tittle {
  text-align: center;
  padding-bottom: 55px;
}
.multi_step_form #msform .tittle h2 {
  font: 500 24px/35px "Roboto", sans-serif;
  color: #3f4553;
  padding-bottom: 5px;
}
.multi_step_form #msform .tittle p {
  font: 400 16px/28px "Roboto", sans-serif;
  color: #5f6771;
}
.multi_step_form #msform fieldset {
  border: 0;
  padding: 20px 105px 0;
  position: relative;
  width: 100%;
  left: 0;
  right: 0;
}
.multi_step_form #msform fieldset:not(:first-of-type) {
  display: none;
}
.multi_step_form #msform fieldset h3 {
  font: 500 18px/35px "Roboto", sans-serif;
  color: #3f4553;
}
.multi_step_form #msform fieldset h6 {
  font: 400 15px/28px "Roboto", sans-serif;
  color: #5f6771;
  padding-bottom: 30px;
}
.multi_step_form #msform fieldset .intl-tel-input {
  display: block;
  background: transparent;
  border: 0;
  box-shadow: none;
  outline: none;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag {
  padding: 0 20px;
  background: transparent;
  border: 0;
  box-shadow: none;
  outline: none;
  width: 65px;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag .iti-arrow {
  border: 0;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag .iti-arrow:after {
  content: "\f35f";
  position: absolute;
  top: 0;
  right: 0;
  font: normal normal normal 24px/7px Ionicons;
  color: #5f6771;
}
.multi_step_form #msform fieldset #phone {
  padding-left: 80px;
}
.multi_step_form #msform fieldset .form-group {
  padding: 0 10px;
}
.multi_step_form #msform fieldset .fg_2, .multi_step_form #msform fieldset .fg_3 {
  padding-top: 10px;
  display: block;
  overflow: hidden;
}
.multi_step_form #msform fieldset .fg_3 {
  padding-bottom: 70px;
}
.multi_step_form #msform fieldset .form-control, .multi_step_form #msform fieldset .product_select {
  border-radius: 3px;
  border: 1px solid #d8e1e7;
  padding: 0 20px;
  height: auto;
  font: 400 15px/48px "Roboto", sans-serif;
  color: #5f6771;
  box-shadow: none;
  outline: none;
  width: 100%;
}
.multi_step_form #msform fieldset .form-control.placeholder, .multi_step_form #msform fieldset .product_select.placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control:-moz-placeholder, .multi_step_form #msform fieldset .product_select:-moz-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control::-moz-placeholder, .multi_step_form #msform fieldset .product_select::-moz-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control::-webkit-input-placeholder, .multi_step_form #msform fieldset .product_select::-webkit-input-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control:hover, .multi_step_form #msform fieldset .form-control:focus, .multi_step_form #msform fieldset .product_select:hover, .multi_step_form #msform fieldset .product_select:focus {
  border-color: #5cb85c;
}
.multi_step_form #msform fieldset .form-control:focus.placeholder, .multi_step_form #msform fieldset .product_select:focus.placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus:-moz-placeholder, .multi_step_form #msform fieldset .product_select:focus:-moz-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus::-moz-placeholder, .multi_step_form #msform fieldset .product_select:focus::-moz-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus::-webkit-input-placeholder, .multi_step_form #msform fieldset .product_select:focus::-webkit-input-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .product_select:after {
  display: none;
}
.multi_step_form #msform fieldset .product_select:before {
  content: "\f35f";
  position: absolute;
  top: 0;
  right: 20px;
  font: normal normal normal 24px/48px Ionicons;
  color: #5f6771;
}
.multi_step_form #msform fieldset .product_select .list {
  width: 100%;
}
.multi_step_form #msform fieldset .done_text {
  padding-top: 40px;
}
.multi_step_form #msform fieldset .done_text .don_icon {
  height: 36px;
  width: 36px;
  line-height: 36px;
  font-size: 22px;
  margin-bottom: 10px;
  background: #5cb85c;
  display: inline-block;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
}
.multi_step_form #msform fieldset .done_text h6 {
  line-height: 23px;
}
.multi_step_form #msform fieldset .code_group {
  margin-bottom: 60px;
}
.multi_step_form #msform fieldset .code_group .form-control {
  border: 0;
  border-bottom: 1px solid #a1a7ac;
  border-radius: 0;
  display: inline-block;
  width: 30px;
  font-size: 30px;
  color: #5f6771;
  padding: 0;
  margin-right: 7px;
  text-align: center;
  line-height: 1;
}
.multi_step_form #msform fieldset .passport {
  margin-top: -10px;
  padding-bottom: 30px;
  position: relative;
}
.multi_step_form #msform fieldset .passport .don_icon {
  height: 36px;
  width: 36px;
  line-height: 36px;
  font-size: 22px;
  position: absolute;
  top: 4px;
  right: 0;
  background: #5cb85c;
  display: inline-block;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
}
.multi_step_form #msform fieldset .passport h4 {
  font: 500 15px/23px "Roboto", sans-serif;
  color: #5f6771;
  padding: 0;
}
.multi_step_form #msform fieldset .input-group {
  padding-bottom: 40px;
}
.multi_step_form #msform fieldset .input-group .custom-file {
  width: 100%;
  height: auto;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label {
  width: 168px;
  border-radius: 5px;
  cursor: pointer;
  font: 700 14px/40px "Roboto", sans-serif;
  border: 1px solid #99a2a8;
  text-align: center;
  transition: all 300ms linear 0s;
  color: #5f6771;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label i {
  font-size: 20px;
  padding-right: 10px;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label:hover, .multi_step_form #msform fieldset .input-group .custom-file .custom-file-label:focus {
  background: #5cb85c;
  border-color: #5cb85c;
  color: #fff;
}
.multi_step_form #msform fieldset .input-group .custom-file input {
  display: none;
}
.multi_step_form #msform fieldset .file_added {
  text-align: left;
  padding-left: 190px;
  padding-bottom: 60px;
}
.multi_step_form #msform fieldset .file_added li {
  font: 400 15px/28px "Roboto", sans-serif;
  color: #5f6771;
}
.multi_step_form #msform fieldset .file_added li a {
  color: #5cb85c;
  font-weight: 500;
  display: inline-block;
  position: relative;
  padding-left: 15px;
}
.multi_step_form #msform fieldset .file_added li a i {
  font-size: 22px;
  padding-right: 8px;
  position: absolute;
  left: 0;
  transform: rotate(20deg);
}
.multi_step_form #msform #progressbar {
  margin-bottom: 30px;
  overflow: hidden;
}
.multi_step_form #msform #progressbar li {
  list-style-type: none;
  color: #99a2a8;
  font-size: 9px;
  width: calc(100%/3);
  float: left;
  position: relative;
  font: 500 13px/1 "Roboto", sans-serif;
}
.multi_step_form #msform #progressbar li:nth-child(2):before {
  content: "\f12f";
}
.multi_step_form #msform #progressbar li:nth-child(3):before {
  content: "\f457";
}
.multi_step_form #msform #progressbar li:before {
  content: "\f1fa";
  font: normal normal normal 30px/50px Ionicons;
  width: 50px;
  height: 50px;
  line-height: 50px;
  display: block;
  background: #eaf0f4;
  border-radius: 50%;
  margin: 0 auto 10px auto;
}
.multi_step_form #msform #progressbar li:after {
  content: '';
  width: 100%;
  height: 10px;
  background: #eaf0f4;
  position: absolute;
  left: -50%;
  top: 21px;
  z-index: -1;
}
.multi_step_form #msform #progressbar li:last-child:after {
  width: 150%;
}
.multi_step_form #msform #progressbar li.active {
  color: #5cb85c;
}
.multi_step_form #msform #progressbar li.active:before, .multi_step_form #msform #progressbar li.active:after {
  background: #5cb85c;
  color: white;
}
.multi_step_form #msform .action-button {
  background: #5cb85c;
  color: white;
  border: 0 none;
  border-radius: 5px;
  cursor: pointer;
  min-width: 130px;
  font: 700 14px/40px "Roboto", sans-serif;
  border: 1px solid #5cb85c;
  margin: 0 5px;
  text-transform: uppercase;
  display: inline-block;
}
.multi_step_form #msform .action-button:hover, .multi_step_form #msform .action-button:focus {
  background: #405867;
  border-color: #405867;
}
.multi_step_form #msform .previous_button {
  background: transparent;
  color: #99a2a8;
  border-color: #99a2a8;
}
.multi_step_form #msform .previous_button:hover, .multi_step_form #msform .previous_button:focus {
  background: #405867;
  border-color: #405867;
  color: #fff;
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>






<!-- Multi step form --> 
<div class="container pt-100" style="margin-top: 40px;">
<section class="multi_step_form">  
    <form method="POST" id="msform" action="{{ route('register') }}">
    @csrf

    <!-- Tittle -->
    <div class="tittle">
      <h2>Hello! Let's get you started...</h2>
      <p>Just need some quick information from you to get you going. It wont take too long.</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Your Role</li>  
      <li>Profile Details</li> 
      <li>Security Questions</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h3>Please tell us how you will be using Gigminds?</h3>
      <h6>This will help us to make sure you have access to necessary functions and features.</h6> 
      <div class="form-row"> 
        <div class="form-group col-md-4">  
            <input class="form-check-input" type="radio" name="user_type" id="user_type" value="Candidate" checked><br/>
            <strong>Career Opportunities</strong><br/>
            Choose this option if you are looking to change/upgrade your career.
        </div>  
        <div class="form-group col-md-4"> 
            <input class="form-check-input" type="radio" name="user_type" id="user_type" value="Hiring Manager"><br/>
            <strong>Recruiter/Hiring Manager</strong><br/>
            Choose this option if you are looking to find a perfect candidate match.
        </div> 
        <div class="form-group col-md-4"> 
            <input class="form-check-input" type="radio" name="user_type" id="user_type" value="Staffing Agency"><br/>
            <strong>Staffing/Consulting</strong><br/>
            Choose this option if you are staffing agency looking to fulfill reqs.
        </div> 
      </div> 
      <div class="done_text"> 
        <h6>Registration is currently restricted to members with Access Code. <br>Please enter it here.</h6> 
      </div>  
      <div class="code_group"> 
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
      </div>  
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
      <br/>
      <br/>
    </fieldset>
    <fieldset>
      <h3>Profile Details</h3>
      <h6>Please provide your name and email address. Your email is your Username.</h6>
      <div class="form-group row">
        <div class="col-6 text-left">
            <label for="first_name" class="col-form-label">First Name</label><br/>
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-6 text-left">
            <label for="last_name" class="col-form-label">Last Name</label><br/>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 text-left">
            <label for="email" class="col-form-label">Email Address</label><br/>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-6 text-left">
            <label for="password" class="col-form-label">Password</label><br/>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-6 text-left">
            <label for="password-confirm" class="col-form-label">Confirm Password</label><br/>            
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
      </div>
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
      <br/>
      <br/>      
    </fieldset>  
    <fieldset>
      <h3>Create Security Questions</h3>
      <h6>Please update your account with security questions</h6> 
      <div class="form-group"> 
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option> 
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option> 
        </select>
      </div> 
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div> 
      <div class="form-group"> 
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option> 
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option> 
        </select>
      </div> 
      <div class="form-group fg_3"> 
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div> 
      <button type="button" class="action-button previous previous_button">Back</button> 
        <button type="submit" class="action-button btn btn-primary">
            {{ __('Register') }}
        </button>
        <br/>
        <br/>
    </fieldset>  
  </form>  
</section> 
</div>
<br/>
<br/>
<!-- End Multi step form -->   


<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>

<script id="rendered-js">
      ;(function ($) {
  "use strict";

  //* Form js
  function verificationForm() {
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0 },
      {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = now * 50 + "%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'absolute' });

          next_fs.css({
            'left': left,
            'opacity': opacity });

        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack' });

    });

    $(".previous").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //de-activate current step on progressbar
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0 },
      {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = (1 - now) * 50 + "%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'left': left });

          previous_fs.css({
            'transform': 'scale(' + scale + ')',
            'opacity': opacity });

        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack' });

    });

    $(".submit").click(function () {
      return false;
    });
  };

  //* Add Phone no select
  function phoneNoselect() {
    if ($('#msform').length) {
      $("#phone").intlTelInput();
      $("#phone").intlTelInput("setNumber", "+880");
    };
  };
  //* Select js
  function nice_Select() {
    if ($('.product_select').length) {
      $('select').niceSelect();
    };
  };
  /*Function Calls*/
  verificationForm();
  phoneNoselect();
  nice_Select();
})(jQuery);
      //# sourceURL=pen.js
    </script>

@endsection
