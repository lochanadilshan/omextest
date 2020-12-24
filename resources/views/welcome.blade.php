{{-- @include('partials.header') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgba(3, 37, 43, 0.856);
                color: #b3b7b9;
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
                font-size: 54px;
            }

            .links > a {
                color: #9ca6ac;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    OMEX COMPUTERS & TECHNOLOGIES 
                </div>
                <img src="{{'assets/img/desktop.png'}}">

                <div class="links">
                    <a href="http://127.0.0.1:8000/customer">customer List</a>
                    <a href="http://127.0.0.1:8000/customer/create">Registration Form</a>
                    <a href="http://127.0.0.1:8000/customer/show">items</a>
                    <a href="http://127.0.0.1:8000/customer/theme">Theme</a>

                </div>
            </div>
        </div>
    </body>
</html>
{{-- @include('partials.footer') --}}