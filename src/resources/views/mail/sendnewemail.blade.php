@extends('welcome')

@section('content')

<div class="container">
	<div class="row"> 
	
	<div class="col-sm-12">
		<h1 class="text-center">Unisa Mailer App</h1>

@if(Session::has('flashmessage'))
 
 	<div class="alert alert-success">
 	
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
    <strong>{{Session::get('flashmessage')}}</strong>
	
 	</div>
 
 		@endif

	</div>

     <div class="col-sm-12">

		<form action="{{url('mail/sendmail') }}" method="POST" role="form">

				

			<legend style="color: #e2e2e2;">Send an email to everyone </legend>
		
			<div class="form-group">
				<label for="email">To:</label>
				<input type="email" class="form-control" id="" placeholder="Enter email address" value="{{Input::old('email')}}" name="email">
			</div>



			<div class="form-group">   
				<label for="subject">SubJect:</label>
				<input type="text" class="form-control" id="subject" placeholder="Enter Subject" value="{{Input::old('subject')}}" name="subject">
			</div>
		
			
		<div class="form-group">
				<label for="message">Message:</label>
								<textarea rows="5" cols="20" class="form-control ckeditor" id="message" placeholder="Enter your Message" value="{{Input::old('message')}}" name="message">  </textarea>
			</div>
		

			<button type="submit" class="btn btn-primary">Submit</button>
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
