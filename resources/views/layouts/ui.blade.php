<!--
  @StudioUnwanted 2019
  StudioUnwanted.com
-->

<html class="no-js" lang="{{ app()->getLocale() }}">

    @include('inc.head') 
    @yield('xcss')

<body>

    <div id="main-wrapper">
 <!--/-/-/-/-/-/-/-/-/
    Begin UI-Container  
-/-/-/-/-/-/-/-/-/-->

    {{-- @include('partials.preloader') --}}
    @include('inc.header')
          


                                        
                                            @yield('content')


    @include('inc.footer')
                                        




<!--/-/-/-/-/-/-/-/-/
    End UI-Container  
-/-/-/-/-/-/-/-/-/-->

</div>



<!--/-/-/-/-/-/-/-/-/
    Begin JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->





<!--/-/-/-/-/-/-/-/-/ 
    jquery 3.3.1  
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> 

<!--/-/-/-/-/-/-/-/-/ 
    Modernizer 2.8.3 
-/-/-/-/-/-/-/-/-/-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


 <!--/-/-/-/-/-/-/-/-/ 
    Main
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/mainapp.js')}}"></script>
                                  
                                      





                                        @yield('xjs')


<!--/-/-/-/-/-/-/-/-/
    END JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->

    
</body>

</html>