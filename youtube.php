<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YouTube</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/youtube.css?ver=<?php echo date('YmdHis'); ?>" media="all" />
    </head>
    <body>
        <!-- Get started here -->
         <div id="header">
            <div class="header-inner header-left">
                <button id="hamburger">
                   <?php include dirname(__FILE__) . '/assets/hamburger.svg'; ?>
                </button>
                <img id="logo" src="/assets/youtube.svg"?ver=<?php echo date ('YmdHis'); ?>" />
            </div>
            <div class="header-inner header-center">
                <form method="GET" id="search" action="https://www.youtube.com/results">
                    <input type="text" name="search_query" placeholder="Search" />
                    <input type="submit" value="Search" />
                </form>
                <button id="voice-search">
                    <img src="/assets/microphone.svg">
                </button> 
            </div>
            <div class="header-inner header-right">
                  <button id="settings">
                    <?php include dirname(__FILE__) . '/assets/vertical-dots.svg'; ?>
                </button> 
                <button id="user">
                    <?php include dirname(__FILE__) . '/assets/user.svg'; ?>
                    <span>Sign In</span>
                </button>
            </div>
         </div>
        <!-- https://picsum.photos/530/300 -->
    </body>
</html>