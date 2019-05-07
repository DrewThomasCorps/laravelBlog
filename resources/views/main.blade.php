<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>



<body>

@include('partials._nav')
<!-- Default Bootstrap Navbar-->


<div class="container">
    @yield('content')

    @include('partials._footer')
</div> <!--End of .container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('partials._javascript')
</body>
</html>