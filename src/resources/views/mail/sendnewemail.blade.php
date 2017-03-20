@extends('ph::welcome')

@section('content')

<div class="container">
	<div class="row"> 
	
	<div class="col-sm-12">
		<h3 class="text-center" style="color: #222222">Unisa Mailer App</h3>

@if(Session::has('flashmessage'))
 
 	<div class="alert alert-success">
 	
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
    <strong>{{Session::get('flashmessage')}}</strong>
	
 	</div>
 
 		@endif

	</div>

     <div class="col-sm-12">

		<form action="{{url('mail/sendmail') }}" method="POST" role="form">

				

			<legend style="color: #222222;">Send an email to everyone </legend>
		
			<div class="form-group">
				<label for="email">To:</label>
				<input type="email" class="form-control" id="" placeholder="Enter email address"  name="email">
			</div>



			<div class="form-group">   
				<label for="subject">Subject:</label>
				<input type="text" class="form-control" id="subject" placeholder="Enter Subject"  name="subject">
			</div>
		
			
		<div class="form-group">
				<label for="message">Message:</label>
								<textarea rows="5" cols="20" class="form-control ckeditor" id="message" placeholder="Enter your Message"  name="message">  </textarea>
			</div>
		

			<button type="submit" style="background: #172652 !important; border-color: #172652; color:#fff" class="btn unisa-blue-btn">Submit</button>
{{ csrf_field() }}   
 		</form>
	 </div>


	</div>
</div>
 <div class="container">
 <div class="row">
 	<div class="col-sm-12">
 	@if(Session::has('errors'))
 	@foreach($errors->all() as $error) 
 	<div class="alert alert-danger">
 	
 	
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
    <strong>{{$error}}</strong>
	
 	</div>
 	@endforeach	
 		@endif
 	</div>
 </div>
 	</div>
@stop
