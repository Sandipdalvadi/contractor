

@extends('user.common.user_layout')
@section('content')

</div>
</div>
</header>

<div class="container-fluid page-title">
<div class="row green-banner">
<div class="container main-container">
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
<h3 class="white-heading">Post A Job</h3>
</div>
<div class="col-lg-9 col-md-8 col-sm-6 colxs-12 capital">
<h5></h5>
</div>
</div>
</div>
</div>

<div class="container-fluid contact_us">
<form name="contact_us" id="form-style-2">
<div class="row user-information">
<div class="container main-container-home">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Job Title</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="name"/>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Location (optional)</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="location" placeholder="eg. London"/>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Job type</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="job-type" placeholder="Free Time"/>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Job category</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<select class="form-control" id="tagPicker" multiple="multiple">
<option value="1">Graphic Designer</option>
<option value="2">Email marketing</option>
<option value="3">Webdesigner </option>
<option value="4">Animations</option>
<option value="5">Display Adversting</option>
<option value="6">Web develioper</option>
<option value="7">Programmer</option>
</select>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Job tags (optional)</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="job-tag" placeholder="eg. php, developer"/>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Your email</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="email" name="job-tag" placeholder="your@email"/>
</div>
</div>
</div>
</div>
</div>
<!-- User Data Row-->
<div class="row user-info">
<div class="container main-container-home">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group submit">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Your email</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<span>Write about your company, job description, skills required, benefits, etc.</span>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label>Description</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<textarea class="textarea"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label class="">Application email/URL</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="application-email" />
</div>
</div>
<div class="form-group ">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label class="default">Maximum rate/h ($) <br /><span>(optional)</span></label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="application-email" />
</div>
</div>
<div class="form-group ">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label class="default">External "Apply for Job" link<br /><span>(optional)</span></label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="text" name="apply-for-job" />
</div>
</div>
<div class="form-group file-type ">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<label class="default">Post image <br /><span>(optional)</span></label>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<input type="file" name="post-image" class="inputfile"/>
<div class="upload">
<div class="filename"><i class="fa fa-file-image-o" aria-hidden="true"></i>Browse image </div>
<i>Size should be 850 px 350 px</i>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>

<div class="container-fluid green-banner job-page">
<div class="row">
<div class="container main-container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center white-text">
<p>Please review your information once more and press the below button to put your job online</p>
<a href="#" class="btn btn-getstarted bg-red center-small">Submit</a>
</div>
</div>
</div>
</div>

@endsection