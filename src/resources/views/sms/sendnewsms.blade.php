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

		<form action="{{url('sms/bene') }}" method="POST" role="form">

			<legend style="color: #e2e2e2;">Send an sms to everyone </legend>
		
			<div class="form-group">
				<label for="to">To:</label>
				<input type="number" class="form-control" id="" placeholder="Enter phone number Format: 27823377985" value="{{Input::old('to')}}" name="to">
			</div>

			<!-- <div class="form-group">   
				<label for="from">From:</label>
				<input type="number" class="form-control" id="subject" placeholder="Enter phone number Format: 27823377985" value="{{Input::old('from')}}" name="from">
			</div> -->

			<div class="form-group">   
				<label for="textmessage">Message:</label>
				<textarea rows="5" cols="20" class="form-control ckeditor" id="textmessage" placeholder="Enter your Message" value="{{Input::old('textmessage')}}" name="textmessage">  </textarea>
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

