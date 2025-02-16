<!--This is the template file used to display the site's homepage, and it is used when a static page is set as the front page or when the site's settings define a custom layout for the homepage-->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header();?>
</head>
<body data-spy="scroll" data-target=".navbar">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9R8RKH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="preloader" class="preloader">
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand  mr-auto " href="index-14.html">Divya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
                    <path class="line top"
                          d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"></path>
                    <path class="line middle" d="m 30,50 h 40"></path>
                    <path class="line bottom"
                          d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"></path>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link active" href="#home">Home</a></li>
                    <li><a class="nav-link" href="#services">Working Area</a></li>
                    <li><a class="nav-link" href="#skills">Skills</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--    @yield('content')-->

    <?php get_template_part('includes/section', 'home'); ?>
    <?php get_template_part('includes/section', 'service'); ?>

    <?php get_footer();?>
</div>

</body>
</html>
