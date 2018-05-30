<!DOCTYPE html>
<html lang="en">
    @include('layouts.front.head')
	<body>
		@include('layouts.front.navbar')
        
        @yield('body')

        @include('layouts.front.footer')
	</body>    
</html>
