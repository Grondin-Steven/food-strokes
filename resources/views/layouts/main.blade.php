<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div id="scrollUp">
        <a href="#top"><img src="/img/to_top.png"></a>
    </div>
    @include('layouts.nav')

    <main>
        @yield('main')
    </main>
    @include('layouts.footer')

    <!-- Initialize AOS scroll library -->
    <script>
        AOS.init();
    </script>
</body>

</html>
