<!doctype html>
<html lang="ar" dir="rtl">

@include('partials.header')

<body data-active="dashboard" data-crumbs="Workspace | Dashboard">

    <div class="shell">

        {{-- Sidebar --}}
        @include('partials.nav')

        <div class="main">

            {{-- Topbar --}}
            @include('partials.topbar')

            {{-- Page --}}
            @yield('content')

            {{-- Footer --}}
            @include('partials.footer')

        </div>

    </div>

</body>

</html>