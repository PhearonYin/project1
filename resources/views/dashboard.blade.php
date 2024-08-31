@include('layouts.header')

<body>

    <div class="main-wrapper">
        @include('layouts.navbar_top')
        @section('navbar_top')



            @include('layouts.sidebar')
        @section('sidebar')

        @endsection


        <div class="page-wrapper">
            <div class="content container-fluid">



                @include('layouts.card_dashboard')
                @section('card_dashboard')
                
                


                @include('layouts.social_likes')
               @section('social_likes')
             
            </div>
            <footer>
                <p>Copyright © 2024 Mr Yin PheaRon.</p>
            </footer>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
