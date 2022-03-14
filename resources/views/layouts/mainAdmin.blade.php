<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    @include('layouts.sidebar')

    <main>
    @yield('main')
    </main>
        

        <!-- Initialize AOS scroll library -->
        <script>
            AOS.init();
        </script>
</body>

</html>