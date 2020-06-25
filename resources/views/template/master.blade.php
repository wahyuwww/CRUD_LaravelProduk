<html>
    <head>
        <title>@yield('title') </title >
    </head>
    <body> 
        <h1>ini adalah header</h1>
        <hr/>
        @include('template/nav')
        <br/>
          
        @yield ('content')
        <hr/>
        <footer> ini adalah foter</footer>
     </body>
</html>