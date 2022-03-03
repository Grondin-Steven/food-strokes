<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

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