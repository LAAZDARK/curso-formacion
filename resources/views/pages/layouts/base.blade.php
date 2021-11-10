<!DOCTYPE html>
<html>
@include('pages.includes.head')
<!-- Header-->

@include('pages.includes.nav')

@include('pages.includes.sidebar')
<!-- Home section-->
@yield('contenido')




<!--footer-->
@include('pages.includes.footer')
{{-- js --}}
{{-- </div> --}}

@include('pages.includes.js')

</html>
