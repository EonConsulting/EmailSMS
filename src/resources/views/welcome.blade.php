<!DOCTYPE html>
<html lang=en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Unisa Mailer App</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">


   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

<style type="text/css">

body{

/*     background: url('vendor/EmailSMS/images/background.jpeg') fixed center center;*/
     background-size: cover; 
     color: #e2e2e2;
     font-weight: 300;
     height: 100%;
     width: 100%;



}

 label {color: #222222;}   
* Buttons */
/* Example Usage <btn class="unisa-blue-btn"> */
.unisa-blue-btn     {background: #172652 !important; border-color: #172652; color:#fff;}
.unisa-red-btn      {background: #930010 !important; border-color: #930010; color:#fff;}
.unisa-black-btn    {background: #222222 !important; border-color: #222222; color:#fff;}
.unisa-orange-btn   {background: #F7931D !important; border-color: #F7931D; color:#fff;}
.unisa-grey-btn     {background: #777777 !important; border-color: #777777; color:#fff;}


</style>

    </head>
    <body>
        
        @yield("content")

         

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>

    </body>
</html>