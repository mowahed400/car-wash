<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Front-End.head')
    </head>

    <body>

        <!-- Top Bar Start -->
        @include('Front-End.top-bar')

        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        @include('Front-End.nav-bar')

        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        @include('Front-End.carousel')
        <!-- Carousel End -->


        <!-- About Start -->
{{--        @include('Front-End.about')--}}
        <!-- About End -->


        <!-- Service Start -->
        @include('Front-End.service')
        <!-- Service End -->


        <!-- Facts Start -->
        @include('Front-End.facts')
        <!-- Facts End -->


        <!-- Price Start -->
        @include('Front-End.price')
        <!-- Price End -->


        <!-- Location Start -->
        @include('Front-End.location')
        <!-- Location End -->


        <!-- Team Start -->
{{--        @include('Front-End.team')--}}
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include('Front-End.Testimonial')
        <!-- Testimonial End -->


        <!-- Blog Start -->
{{--        @include('Front-End.blog')--}}
        <!-- Blog End -->


        <!-- Footer Start -->
        @include('Front-End.footer')
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('Front-End') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('Front-End') }}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ asset('Front-End') }}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('Front-End') }}/lib/counterup/counterup.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('Front-End') }}/js/main.js"></script>








    </body>
</html>
