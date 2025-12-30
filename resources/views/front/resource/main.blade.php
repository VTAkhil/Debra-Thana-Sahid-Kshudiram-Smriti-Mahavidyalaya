<!DOCTYPE html>
<html lang="en">
    @include("front.resource.head")
    <body id="body" class="it-magic-cursor">
        @include("front.resource.header")
        @yield('content')
        @include("front.resource.footer")
    </body>
</html>