<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codespaces</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/style.css" media="all" />
        <script src="/assets/script.js"></script>
    </head>
    <body class="about">
        <div id="main" class="about">
            <a href="/"><img src="/assets/codespaces.png" /></a>
            <div class="about__container">
                <div class="about__left">
                    <img src="/assets/default.jpg" />
                </div>
                <div class="about__right">
                    <h1>About Me</h1>
                    <h3 class="about-name">My Name</h3>
                    <p>Welcome to my about page! Here you can find more information about my background, skills, and interests.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut sem eu libero finibus scelerisque a vel nulla. Donec venenatis magna justo, at fringilla sapien convallis in. Suspendisse dapibus est sit amet mollis gravida. Aliquam vulputate purus id magna semper elementum. Praesent at faucibus quam, eget convallis risus. In eget magna semper nunc blandit elementum eget sed tellus. Sed a pulvinar sapien. Aenean vulputate enim vel finibus scelerisque. Vivamus vestibulum, risus non scelerisque hendrerit, diam magna efficitur dui, in rhoncus lorem arcu sed quam. Donec viverra arcu vel dapibus condimentum. Sed mattis placerat nulla, sit amet malesuada nisi molestie a. Nulla malesuada euismod massa id scelerisque. Morbi nec lectus ligula. Mauris sed sapien quis eros aliquet fringilla id ut felis. Sed eget condimentum leo. Morbi congue sapien eget iaculis pellentesque.</p>
                    <p>Curabitur pellentesque pellentesque arcu, ac suscipit risus maximus at. Ut sed leo sit amet ante laoreet finibus non et neque. Nam ornare orci nisl, vel sagittis turpis laoreet eget. Nulla bibendum nunc vitae metus posuere, sit amet varius purus porttitor. Pellentesque dapibus dolor in feugiat suscipit. Donec commodo mattis tellus sed imperdiet. Maecenas a tempus ex. Donec aliquet lacus sed metus pellentesque tincidunt. Duis fringilla urna tortor, nec vulputate lacus facilisis sit amet. Mauris quis dui vitae arcu pulvinar elementum. Morbi sit amet nisl sit amet leo gravida elementum sed sit amet odio. Nulla facilisi. Quisque fringilla ornare nunc, vel volutpat erat ultricies non. Suspendisse posuere, tellus id volutpat facilisis, urna odio mollis nisi, quis rhoncus est ex ac lectus. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    <div class="about__socials"><?php

                        // Set socials.
                        $socials = [
                            'instagram' => 'https://www.instagram.com',
                            'snapchat'  => 'https://www.snapchat.com',
                            'facebook'  => 'https://www.facebook.com',
                            'imessage'  => 'tel:1231231234'
                        ];

                        // Loop.
                        foreach( $socials as $social_id => $social_url ) {

                            // Output. ?>
                            <a href="<?php echo $social_url; ?>" class="about-social" target="_blank">
                                <img src="/assets/<?php echo $social_id; ?>.svg" />
                            </a><?php

                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>