@extends('welcome')

@section('content')


<div class="container">

 <div class="row text-center"> 
 <div class="col-sm-12" style="margin-top: 100px;">
 <h1>  Unisa Mailer App</h1>


 </div>

  <div class="col-sm-12" style="margin-top: 100px;">
   <div class="col-sm-5">
       <a href="{{ route('mail.index')  }}" class="btn btn-info btn-block btn-lg"> Send Mail </a>

   </div>



    <div class="col-sm-5">
       <a href="{{ route('sms.store')  }}" class="btn btn-success btn-block btn-lg"> Send sms </a>

   </div>




</div>
 


 </div>



 </div>



@stop
