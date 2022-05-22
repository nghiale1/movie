@extends('client.template.master')
@section('header')
    <header class="page-header">
        <div class="container">
            <h1>Chọn hàng ghế</h1>
        </div>
    </header>
@show
@section('content')
<section class="content-section" data-background="#f7f7f7">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
          <div class="section-title text-center">
			  <h6>CONTACT FORM</h6>
            <h2>Say Hello</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-6">
		  	<div class="contact-form">
			  	<div class="form-group">
					<input type="text" placeholder="Your name">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="text" placeholder="Your e-mail">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<select>
						<option>Select your subject</option>
					</select>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<textarea placeholder="Your message"></textarea>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="submit" value="SUBMIT">
				</div>
				<!-- end form-group -->
			  </div>
			  <!-- end contact-form -->
		  </div>
		  <!-- end col-6 -->
		</div>
		<!-- end row -->
		</div>
		<!-- end container -->
	</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
