<!DOCTYPE html>
    <html>
    @include('partials._head')

    <body>

     @include('partials._nav')

    <div class="container">
    @include('partials._message')
    @yield('content')
    

    @include('partials._footer')
    

    @include('partials._javascript')

    @yield('scripts')

    </body>
    </html>
