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
            .current_page_item {background-color: blue;}
        </style>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <div id="menu">
            <ul>
                <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/">Homepage</a></li>
                <li class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}"><a href="/clients">Our Clients</a></li>
                <li class="{{ Request::is('aboud') ? 'current_page_item' : '' }}"><a href="/about">About Us</a></li>
                <li class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}"><a href="/articles">Articles</a></li>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        @yield('content')
    </body>
</html>
