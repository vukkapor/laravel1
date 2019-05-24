<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.header')
        <title>
            @yield('title', "Cars")
        </title>
    </head>
    <body>

            <nav class="site-header sticky-top py-1">
                    <div class="container d-flex flex-column flex-md-row justify-content-between">

                      <a class="py-2 d-none d-md-inline-block" href="/cars">Cars</a>
                      <a class="py-2 d-none d-md-inline-block" href="/about">About us</a>
                    </div>
            </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-main">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('partials.footer')
    </body>
</html>
