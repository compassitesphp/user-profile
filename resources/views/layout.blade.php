<!doctype HTML>
<html>
    <head>
        <title>{{ $title }}</title>
        <style>
            p            

            {
                color: red;
            }
            h2
            {
                color: green;
            }
        </style>
    </head>
    <body>
        @yield('content')
        
        @yield('footer')
        
        @yield('extra')
    </body>
</html>