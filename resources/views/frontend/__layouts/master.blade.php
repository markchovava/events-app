<!DOCTYPE html>
<html lang="en">

@include('frontend.__layouts.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->


    @include('frontend.__layouts.header')


    @yield('frontend.master')
    

    @include('frontend.__layouts.footer')

    @include('frontend.__layouts.js')

</body>

</html>