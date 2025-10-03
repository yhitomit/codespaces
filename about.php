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
                    <img src="/assets/Image.jpg" />
                </div>
                <div class="about__right">
                    <h1>About Timothy</h1>
                    <h3 class="about-name">Timothy Mathews</h3>
                    <p>Welcome to my about page! Here you can find more information about my background, skills, and interests.</p>
                    <p>My name is Timothy Mathews and I am currently taking a computer sciennce class. We are currently entering into the fall, which is one of my favorite seasons. In the fall Pulaski Rec forms a fourteen to seventeen soccer league of which i am a part. Up until a few weeks ago my Parents had to drive me to the soccer fields, but now i can drive myself as I aquired my license on the twenty-eigth of september. Driving is enjoyable, but the first time i was in the car by myself there was an erie quiet. I had never not been with someone else in the car. Now it is October. People often poke fun at me and my brother, because we almost always wear shorts, even into November. For some reason my legs just don't get cold. Maybe its becasue I'm part asian. Though i do have some asian blood in me, I am mostly white, but this doesn't stop my friends, especially Tucker, from joking with me. I like the jokes. I think being part asian is pretty cool. The final thing i would like to say is no, I don't eat dogs. My Favortie band is Sabaton.</p>
                    <p><iframe width="499" height="887" src="https://www.youtube.com/embed/APaeZtbeTKs" title="🇦🇺 🇳🇿 To all of our friends in Aus + NZ! It was an absolute pleasure playing for you! 🙏" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>

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

                        }?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>