@extends('ph::welcome')

@section('content')


    <div class="container">

        <div class="row text-center">
            <div class="col-sm-12" style="margin-top: 100px;">
                <h3 style=" color:#222222"> Unisa Mailer App</h3>


            </div>

            <div class="col-sm-12" style="margin-top: 100px;">
                <div class="col-sm-6">
                    <a href="{{ route('mail.index')  }}" class="btn unisa-blue-btn btn-block btn-lg"
                       style="background: #172652 !important; border-color: #172652; color:#fff;"> Send Mail </a>

                </div>


                <div class="col-sm-6">
                    <a href="{{ route('sms.store')  }}" class="btn btn-success btn-block btn-lg"
                       style="background: #F7931D !important; border-color: #F7931D; color:#fff;"> Send sms </a>

                </div>


            </div>


        </div>


    </div>



@stop
