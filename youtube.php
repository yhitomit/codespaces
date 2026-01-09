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
                    <?php include dirname(__FILE__) . '/assets/microphone.svg'; ?>
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
         <div id="content">
            <div id="side-menu"><?php

                    // Menu array. 
                    $menu_array = [
                        'menu' => [
                            '/'                 => 'Home',
                            '/shorts/'          => 'Shorts',
                            
                        ],
                        'Subscriptions' => [
                            '1'                 => 'Channel 1',
                            '2'                 => 'Channel 2',
                            '3'                 => 'Channel 3',
                            '4'                 => 'Channel 4',
                            '5'                 => 'Channel 5'
                        ],
                        'You'           => [
                            '/history'          => 'History',
                            '/playlist'         => 'Playlist',
                            '/watch-later'      => 'Watch Later',
                            '/liked'            => 'Liked Videos',
                            '/your-videos'      => 'Your Videos',
                            '/downloads'        => 'Downloads'
                        ],
                        'explore'       => [
                            '/shopping'         => 'Shopping',
                            '/music'            => 'Music',
                            '/movie-tv'         => 'Movie & Tv',
                        ],
                        'account'       => [
                            '/settings'         => 'Settings',
                            '/report'           => 'Report',
                            '/help'             => 'Help',
                            '/feedback'         => 'Send Feedback',

                        ],
                    ];
                    
                    // Menu loop.
                    foreach( $menu_array as $section => $menu_items ) {

                        // Output section.?>
                        <div class="menu-section menu-section-<php echo $section; ?>"><?php

                        // Menu item loop
                        foreach($menu_items as $url => $label) {
                            
                            // Output. ?>
                            <div class="menu-item menu-item-section-<?php echo $section; ?> menu-item-<?php echo str_replace('/', '', $url);?>">
                                <a href="<?php echo $url; ?>"><?php echo $label; ?></a>
                            </div><?php
                            
                        } ?>

                    </div><?php

                    } ?>



            </div>
            <div id="main-content">
                <div id="category-filter"><?php

                // Category array.
                $categories = [
                    'All',
                    'Podcast',
                    'Gaming',
                    'Reaction Videos',
                    'Music',
                    'Mixes',
                    'Esports',
                    'Live',
                ]; 
                
                
                // Loop through categories.
                foreach($categories as $category) {

                    //Output category. ?>
                    <a href="<?php echo '/' . urlencode(strtolower( $category )); ?>">
                        <?php echo $category; ?>
                    </a><?php 
                }?>

                </div>
                <div id="video-content"><?php


                    // Title array.
                    $titles = [
                             'How to Build a House',
                            'Best Deck for Clash Royale',
                            'Root: Corvid Gameplay',
                            'Backyard Ducks',
                            'Georgia vs. Ole Miss',
                            'Dude perfect: Overtime 68',
                            'Charlie Kirk Debuncts Leftist: Again!',
                            'Band of Brothers',
                        
                    ]; 
                    
                    // Videos.
                    $videos = range(0,8);

                    // Loop through videos.
                    foreach( $videos as $video ) {

                        // Random title.
                        $title = $titles[rand(0,8 )];

                        // Output. ?>
                        <div id="video-<?php echo $video; ?>" class="video-item">
                            <div class="video-item-image">
                                <img src="https://picsum.photos/id/<?php echo rand( 0, 20); ?>/530/300"/>
                            </div>
                            <div class="video-item-text">
                                <h3><?php echo $title; ?></h3>
                                <p>Channel <?php echo rand(1,500); ?></p>
                                <p><?php echo rand(1,9); ?> hours ago</p>
                            </div>
                        </div><?php
                    } ?>

                </div>
            </div>
        </div>
        <!-- https://picsum.photos/530/300 -->
    </body>
</html>