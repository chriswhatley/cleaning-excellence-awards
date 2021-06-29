<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_partials/meta')
    </head>
    <body 
    	class="antialiased font-sans m-0 font-base text-blue-charcoal-500 leading-normal scrolling-touch" 
    	x-data="{ open: false }" 
    	:class="{ 'md:overflow-hidden': open }">
        
        @include('_partials/navigation')	
        
        @yield('content')

        @include('_partials/footer')
    </body>
</html>
