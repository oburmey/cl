<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div>
        @include('menu')
    </div>
    <div class="flex-center position-ref full-height">
        {{ Form::open(array('url' => 'register')) }}
        <div class="form-group">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname',null,['class' => 'form-text']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname') }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email') }}
        </div>
        <div class="form-group">
            {{ Form::label('country_id', 'Country') }}
            {{ Form::select('country_id', $countries) }}
        </div>
        <div class="form-group">
            {{ Form::label('language_id', 'Language') }}
            {{ Form::select('language_id', $languages)}}
        </div>
        <div class="form-group">
            {{ Form::label('birthday', 'Birthday') }}
            {{ Form::date('birthday', \Carbon\Carbon::now())}}
        </div>
        <div  class="form-group">
            @if($errors)
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif
        </div>
        {{ Form::submit('Register!') }}
        {{ Form::close() }}

    </div>

    </body>
</html>
