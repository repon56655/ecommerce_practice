
<!DOCTYPE html>
<html lang="en">
    <head>
                @include('backend.includes.head')
                @include('backend.includes.css')
    </head>
    <body class="sb-nav-fixed">
                @include('backend.includes.topbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('backend.includes.leftbar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        @yield('contents')

                    </div>
                </main>
                @include('backend.includes.footer')

            </div>
        </div>
        @include('backend.includes.scripts')

    </body>
</html>
