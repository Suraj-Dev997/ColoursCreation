<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Photography Studio</h6>
                <p class="text-justify abtp">They say that "no place is boring if you've had a good night's sleep and
                    have a
                    pocket full of unexposed film".</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li>
                        <a href="{{ url('/') }}">Home

                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/gallery') }}">Photo Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('/gallery/video') }}">Video Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>


        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">

            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-youtube-play"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{ url('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Additional Scripts -->
<script src="{{ url('frontend/assets/js/custom.js') }}"></script>
<script src="{{ url('frontend/assets/js/owl.js') }}"></script>
<script src="{{ url('frontend/assets/js/slick.js') }}"></script>
<script src="{{ url('frontend/assets/js/isotope.js') }}"></script>
<script src="{{ url('frontend/assets/js/accordions.js') }}"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>
<script>
    $(document).ready(function() {
        $(".tab button").click(function() {
            $(this).tab('show');
        });
    });

    function openCity(evt, cityName) {
        $(".tablinks").removeClass("active");
        $('.tabcontent').hide();
        $('#' + cityName).show();
        $(evt).addClass("active");
    }
</script>


</body>

</html>
