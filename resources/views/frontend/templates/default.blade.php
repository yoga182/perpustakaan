<!DOCTYPE html>
<html lang="en">
    @include('frontend.templates.partials.head')
<body>

    <!-- navigation -->
    @include('frontend.templates.partials.navigation')

    <!-- content -->
    <div class="container"> 
        @yield('content')
    </div>

    <!-- js -->
    @include('frontend.templates.partials.scripts')
    @include('frontend.templates.partials.toast')
</body>
</html>