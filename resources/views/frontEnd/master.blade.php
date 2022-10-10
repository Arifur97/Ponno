<!Doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ponnobahar | Online Shopping in Bangladesh </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/why-shop-us.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/new1.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/bootsnav.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/main.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/Responsive.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/jssor-slider.css"/>
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/datepickers.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/etalage.css">
    {{--@yield('og')--}}
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1942532836000222';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
{{--<script>--}}
    {{--window.fbAsyncInit = function() {--}}
        {{--FB.init({--}}
            {{--appId      : '500939260291289',--}}
            {{--xfbml      : true,--}}
            {{--version    : 'v2.10'--}}
        {{--});--}}
        {{--FB.AppEvents.logPageView();--}}
    {{--};--}}

    {{--(function(d, s, id){--}}
        {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
        {{--if (d.getElementById(id)) {return;}--}}
        {{--js = d.createElement(s); js.id = id;--}}
        {{--js.src = "//connect.facebook.net/en_US/sdk.js";--}}
        {{--fjs.parentNode.insertBefore(js, fjs);--}}
    {{--}(document, 'script', 'facebook-jssdk'));--}}
{{--</script>--}}

{{--<script>--}}
    {{--window.fbAsyncInit = function() {--}}
        {{--FB.init({--}}
            {{--appId      : '1942532836000222',--}}
            {{--xfbml      : true,--}}
            {{--version    : 'v2.10'--}}
        {{--});--}}
        {{--FB.AppEvents.logPageView();--}}
    {{--};--}}

    {{--(function(d, s, id){--}}
        {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
        {{--if (d.getElementById(id)) {return;}--}}
        {{--js = d.createElement(s); js.id = id;--}}
        {{--js.src = "//connect.facebook.net/en_US/sdk.js";--}}
        {{--fjs.parentNode.insertBefore(js, fjs);--}}
    {{--}(document, 'script', 'facebook-jssdk'));--}}

    {{--function fbShare(link, name) {--}}
        {{--var appId = '1942532836000222';--}}
        {{--var pageUrl ="https://www.facebook.com/dialog/feed?app_id="+appId +"&link="+link;--}}
        {{--var w = 600;--}}
        {{--var h= 400;--}}
        {{--var left = (screen.width/2) - w/2;--}}
        {{--var top = (screen.height/2) - h/2;--}}
        {{--window.open(pageUrl, name, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizeable=no, copyhistory=no, width='+800+', height='+650+', top='+top+', left='+left);--}}
        {{--return false;--}}
    {{--}--}}
{{--</script>--}}


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include('frontEnd.include.header')
@include('frontEnd.include.menu')
<div id="res">
    @yield('body')
</div>
@include('frontEnd.include.why-shop')
@include('frontEnd.include.footer')
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('/front/') }}/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="{{ asset('/front/') }}/js/bootsnav.js"></script>
<script src="{{ asset('/front/') }}/js/jssor.js"></script>
<script src="{{ asset('/front/') }}/js/jssor.slider.js"></script>
<script src="{{ asset('/front/') }}/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('/front/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins.js"></script>
<script src="{{ asset('/front/') }}/js/jquery.etalage.min.js"></script>
<script src="{{ asset('/front/') }}/js/main.js"></script>
<script src="{{ asset('/front/') }}/js/bootstrap-dtepickers.js"></script>

<script src="{{ asset('/minislider/') }}/js/jssor.slider-26.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">jssor_1_slider_init();</script>

<script>
    $(document).ready(function () {
        $('#pcash').click(function () {
            $('#cash').css('display', 'block');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'none');
        });

        $('#procket').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'block');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'none');
        });
        $('#pbkash').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'block');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'none');
        });
        $('#pvisa').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'block');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'none');
        });
        $('#pmaster').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'block');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'none');
        });
        $('#pnexus').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'block');
            $('#american').css('display', 'none');
        });
        $('#pamerican').click(function () {
            $('#cash').css('display', 'none');
            $('#rocket').css('display', 'none');
            $('#bkash').css('display', 'none');
            $('#visa').css('display', 'none');
            $('#master').css('display', 'none');
            $('#nexus').css('display', 'none');
            $('#american').css('display', 'block');
        });
    });
</script>
<script>
    // When the document is ready
    $(document).ready(function () {
        $('#example1').datepicker({
//            format: "dd/mm/yyyy"
            format: "yyyy-mm-dd"
        });
    });
</script>
<script>
    jQuery(document).ready(function ($) {
        $('#etalage').etalage({
            thumb_image_width: 420,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
        });

    });
</script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:5.5,
        items:6,
        nav:true,
        dots:false,
        autoplay: true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:3
            },
            700:{
                items:5
            },
            1000:{
                items:6
            }
        }
    })
</script>

<script>
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $Loop: 1,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 253,                          //[Optional] The offset position to park thumbnail,

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider1.$ScaleWidth(Math.min(parentWidth, 720));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

</body>
</html>
