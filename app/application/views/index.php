<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo PATH_STATIC_GLOBAL_IMAGES; ?>favicon.jpg" />
    <link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>css/templatemo-style.css">
    <title>Puzzle by templatemo</title>
</head>

<body>
<div class="fixed-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Puzzle</a>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a class="external" href="https://www.facebook.com/templatemo" target="_blank">External</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="container">
    <section class="col-md-12 content" id="home">
        <div class="col-lg-6 col-md-6 content-item">
            <img src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>images/1.jpg" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 content-item content-item-1 background">
            <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
            <p>Puzzle is a Bootstrap (v3.3.6) responsive template provided by <span class="light-blue-text">templatemo</span>. You can download, edit and use this layout for absolutely free of charge.</p>
            <p>No backlink is required to use this template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>
            <button type="button" class="btn btn-big dark-blue-bordered-btn">Big Button</button>
            <button type="button" class="btn btn-big dark-blue-btn">Download</button>
        </div>
    </section>

    <section class="col-md-12 content padding" id="services">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
            <img src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>images/2.jpg" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
            <h2 class="section-title">Quility Services</h2>
            <p class="section-text">Morbi auctor tristique mattis. Vestibulum vitae sapien a ligula mollis ullamcorper ac a nisi. Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar. In semper mi ut enim mollis, ut auctor lectus posuere.</p>
            <ul class="dark-blue-text">
                <li>+ Cras id dui eu tortor eleifend gravida</li>
                <li>+ Maecenas tempus nisi in arcu</li>
                <li>+ Nulla eget sem sit amet turpis tempus</li>
                <li>+ Crasvel eros id ipsum accumsan</li>
            </ul>
            <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui mews, euismod vel sapien at, maximus feugiat tellus. </p>
            <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. </p>
        </div>

    </section>

    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>


    <section class="col-md-12 content" id="clients">
        <div class="col-lg-6 col-md-6 content-item">
            <img src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>images/3.jpg" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 content-item background flexbox">
            <h2 class="section-title">Our Clients</h2>
            <p>Maecenas tempus nisi in arcu facilisis venenatis. Fusce ac turpis sem. Nulla eget sem sit amet turpis tempus viverra at et odio. Crasvel eros id ipsum accumsan venenatis ut nec ipsum. </p>
            <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui metus, euismod vel sapien at, maximus feugiat tellus. </p>
            <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. In quis sapien a metus interdum hendrerit. </p>
            <p>Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar.</p>
            <div>
                <button type="button" class="btn dark-blue-bordered-btn normal-btn">Small Button</button>
                <button type="button" class="btn yellow-btn normal-btn">Download</button>
                <button type="button" class="btn green-btn normal-btn">Demo</button>
            </div>
        </div>
    </section>


    <section class="col-md-12 content" id="contact">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
            <img src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>images/4.jpg" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
            <h2 class="section-title">Contact Us</h2>
            <p class="margin-b-25">Nulla eget sem sit amet turpis tempus viverra at et odio. Cras vel eros id ipsum accumsan venenatis ut nec ipsum.</p>

            <!--<div class="row"> -->
            <form method="post" name="contact-form" class="contact-form">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name..." required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                    <div class="form-group contact-field">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..." required>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group contact-field">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject..." required>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group contact-field">
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..." required></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group margin-b-0">
                        <button type="submit" id="form-submit" class="btn no-bg btn-contact">Submit</button>
                    </div>
                </div>
            </form>
            <!--</div> -->
            <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

        </div>

    </section>

    <footer class="col-md-12 content" id="externals">
        <div class="col-lg-6 col-md-6 last">
            <img src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>images/5.png" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 background last about-text-container">
            <h2 class="section-title">About This Website</h2>
            <p class="about-text">Puzzle Template is brought to you by templatemo. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. In quis sapien a metus interdum hendrerit.</p>
        </div>
    </footer>

</div>

<div class="text-center footer">
    <div class="container">
        Copyright @ 2084 乔之出品

    </div>
</div>

<script src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>js/jquery.min.js"></script>
<script src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>js/bootstrap.min.js"></script>
<script src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>js/jquery.singlePageNav.min.js"></script>
<script src="<?php echo PATH_STATIC_GLOBAL_INDEX; ?>js/jquery.pin.js"></script>

<script>

    // Check scroll position and add/remove background to navbar
    function checkScrollPosition() {
        if($(window).scrollTop() > 50) {
            $(".fixed-header").addClass("scroll");
        } else {
            $(".fixed-header").removeClass("scroll");
        }
    }

    $(document).ready(function () {
        // Single page nav
        $('.fixed-header').singlePageNav({
            offset: 59,
            filter: ':not(.external)',
            updateHash: true
        });

        checkScrollPosition();

        // nav bar
        $('.navbar-toggle').click(function(){
            $('.main-menu').toggleClass('show');
        });

        $('.main-menu a').click(function(){
            $('.main-menu').removeClass('show');
        });
    });

    $(window).on("scroll", function() {
        checkScrollPosition();
    });
</script>
</body>
</html>