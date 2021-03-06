<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>


<body>

@include('partials._nav')
<!-- Default Bootstrap Navbar-->


<div class="container" style="margin-top:30px">
    @include('partials._messages')

    @yield('content')

    @include('partials._footer')
</div> <!--End of .container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('partials._javascript')

@yield('scripts')
</body>
</html>