<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Application of Regional Natural Potential</title>
        
        <!-- Meta -->
        <meta name="description" content="Fore is a free, responsive front end template from Papaya, made by Jordan Bowman.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jordan Bowman">
        <meta name="keywords" content="awesome, hott, extremely attractive, sheer brilliance">
        
        <!-- Google Author link -->
        <link rel="author" href="Google+URL"/>

        <!-- Favicon.ico and apple-touch-icon.png (according to Apple docs). A good tool is http://iconifier.net/ -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon" href="touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png" />

        <!-- CSS, Normalize First, minify for production -->
        <link rel="stylesheet" type='text/css' href="less/master.css"/>
        
        <!-- Import web fonts using the link tag instead of CSS @import -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
        
        <!-- Icons from http://fontawesome.io/ -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>

        <style>
            .img-circle-div img {
                width: 150px; /* Atur lebar gambar sesuai kebutuhan */
                height: 150px; /* Atur tinggi gambar sesuai kebutuhan */
                object-fit: cover; /* Memastikan gambar tetap proporsional dan tidak terdistorsi */
            }
        </style>
                
    </head>

    <body>
        
        <!-- Header -->
        <header id="main-header">
            <div class="container">
                <h1>Application of Regional Natural Potential</h1>
            </div>
        </header>
        
        
        <!-- First call to action -->
<section class="call-to-action" style="text-align: center; padding: 50px 20px;">
    <div class="cta-container cf">
        <p style="font-size: 20px; margin-bottom: 20px; color: #333333;">Want to start now? Yeah, that's right.</p>
        
        <!-- Tombol Dashboard -->
        <a href="/admin" style="display: inline-block;">
            <button type="button" style="font-size: 18px; padding: 15px 30px; background-color: #2f8603; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; font-weight: bold; text-align: center;">
                DASHBOARD →
            </button>
        </a>
    </div>
</section>


        
        <!-- Macbook Section -->
        <section id="macbook">
            <div class="container">
                <h2>About Us</h2>
                <p>We are a team of third-semester students from the Banjarmasin State Polytechnic, working on a project that focuses on the application of regional natural potential. Our goal is to create a platform that helps local communities better utilize their resources. This website is part of our final semester exam for the web design course, and we aim to make it a helpful tool for many.</p>
                <img src="images/macbookpro.png"/>
            </div>
        </section>
        
        
        <!-- Summary Section -->
        <section id="summary">
            <div class="container">
                <h2>What makes this web so great?</h2>
                <p>This website is designed to be fully responsive, meaning it will look great on any device – whether you're on a smartphone, tablet, or desktop. It's easy to navigate, user-friendly, and visually appealing. We built it with modern web standards, using clean, maintainable code. The best part? It's completely free to use, and we’ll keep it that way. We’re committed to making it a valuable resource for our users, with regular updates and improvements.</p>
            </div>
        </section>
        
        
        <!-- Two Images Section -->
        <section id="two-images">
            <div class="container">
                <header class="body-header">
                    <h2>Our Biodata</h2>
                    <p>To fulfill the final semester exam assignment of the web design course.</p>
                </header>
                @foreach ($portfolioData as $data)
                <article class="cf" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                    <div class="img-circle-div" style="margin: 20px;">
                        <img src="images/aden.jpeg" style="border-radius: 50%;"/>
                        <h3>Adentiarno Al Madani</h3>
                        <p>3rd semester student of Banjarmasin State Polytechnic</p>
                    </div>
                </article>
                @endforeach
            </div>
        </section>
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="social-boat">
                    <div class="gplus">
                        <div class="g-plusone"></div>
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                    <div class="facebook">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = document.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </div>
                </div>
                <div id="footer-text" class="small">
                    <p>&copy; Untitled | Photos by <a href="http://www.jrdnbwmn.com" target="_blank">Jordan Bowman</a> | Design by <a href="http://www.eatapapaya.com" target="_blank">Papaya</a></p>
                </div>
            </div>
        </footer>

    </body>
</html>
