<?php
/*
Template Name: Home
*/

get_header(); ?>

<section class="home-section">



    <article class="home-intro">
        <div class="home-intro-content">
            <div class="home-carousel">

                <?php if (have_rows('add_images')) : ?>
                    <?php while (have_rows('add_images')) : the_row(); ?>
                        <div>
                            <img class="d-block w-100 home-carousel-img" src="<?php the_sub_field('image'); ?>" alt="First slide">
                            <div class="home-carousel-caption">
                                <img src="<?php the_field('slider_title_image'); ?>" class="img-fluid d-none d-lg-block" alt="home-intro-text">
                                <h2><?php the_field('short_description'); ?></h2>
                                <hr>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="home-intro-scroll d-none d-xl-block">
            <p>Scroll</p>
        </div>
    </article>
    <article class="home-action container">
        <div class="home-action-content container">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page-logo.png" alt="home-action">

            <?php

            while ( have_posts() ) : the_post();

                echo get_the_content();

            endwhile;
            ?>


            <a href="<?php the_field('armenia’s_wine_heritage_button_link'); ?>"> <button><?php the_field('armenia’s_wine_heritage_button_name'); ?></button></a>
        </div>
    </article>
    <article class="wineries">
        <div class="wineries-content container">
            <h3><?php echo pll_e('VINEYARDS & WINERIES')?></h3>
            <hr>
            <div class="d-flex justify-content-between flex-wrap">
                <?php $args = array(
                    'post_type' => 'winery',
                    'posts_per_page' => -1,
                );


                $releaseQuery = new WP_Query( $args );



                if ( $releaseQuery->have_posts() ) :
                    while ( $releaseQuery->have_posts() ) :
                        $releaseQuery->the_post(); ?>

                        <?php if (get_field('check_for_home_page')) : ?>
                        <div class="wineries-box">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo the_field('front_page_image'); ?>" alt="<?php the_title(); ?>">
                                <span><?php the_title(); ?></span>
                                <div class="wineries-box-border"></div>
                            </a>
                        </div>

                    <?php  endif; ?>
                    <?php endwhile; endif; ?>

                <div class="wineries-box">
                    <a href="<?php echo pll_e('wineroute path')?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wineries-f.png" alt="wineries">

                        <span><?php echo pll_e('all_wineries')?></span>
                        <div class="wineries-box-border"></div>
                    </a>
                </div>

            </div>
        </div>
    </article>
    <article class="home-trail route_map">
        <div class="home-trail-content container">
            <h3><?php echo pll_e('WINE ROUTE MAP')?></h3>
            <hr>
            <div class="home-trail-box">
                
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 843.7 597.2" style="enable-background:new 0 0 843.7 597.2;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A325B;}
    .st1{fill:#322D51;}
    .st2{fill:#E53537;}

    .st3{fill:none;stroke:#FFFFFF;stroke-width:2.4536;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3.888100e-02,9.7203;}

    .st4{fill:none;stroke:#FFFFFF;stroke-width:2.4231;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3.839800e-02,9.5994;}

    .st5{fill:none;stroke:#FFFFFF;stroke-width:2.4856;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3.938700e-02,9.8468;}

    .st6{fill:none;stroke:#FFFFFF;stroke-width:2.3581;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3.736700e-02,9.3418;}

    .st7{fill:none;stroke:#FFFFFF;stroke-width:2.4612;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3.900100e-02,9.7503;}
    .st8{fill:#961A2D;}
    .st9{fill:#B2202E;}
    .st10{fill:#E23836;}
    .st11{fill:#FFFFFF;}
</style>
                    <rect class="st0" width="843.7" height="597.2"/>
                    <path class="st1" d="M322.3,290.3l37.7-13.4l14.8,6.7c0,0,52.3,10.3,73.7,6.7c21.4-3.6,36.4-15.1,36.4-15.1l3.3-28.5l30.9,1.5
	l21-29.4l9.7,11l-9.7,15.3l25.2,34.4l25.5-2.2c0,0,3.4,19.9-1.2,32.3s-8.5,17.3-8.5,17.3l1.2,46.4L571.5,385l-4.6-2.5l-9.5,8
	l-8.8,43.5l-19-17.3L430.2,393l-12.9-11.9l-26.5-6.9h-18.2l-12.4-8.1l-14.6,0.7L325,342.1l8.6-15.7L322.3,290.3z"/>
                    <path class="st2 hinareni_map" d="M178.1,260.3c0,3.8-3.1,6.8-6.8,6.8c-3.8,0-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8
	C175,253.5,178.1,256.5,178.1,260.3z"/>
                    <circle class="st2 areni_map" cx="187.4" cy="281.5" r="6.8"/>
                    <path class="st2 trinity_map" d="M356.7,256.1c0,3.8-3.1,6.8-6.8,6.8c-3.8,0-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8
	C353.7,249.3,356.7,252.3,356.7,256.1z"/>

                    <path class="st2 old_map" d="M503.6,220.6c0,3.8-3.1,6.8-6.8,6.8s-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8S503.6,216.9,503.6,220.6z"/>
                    <circle class="st2 getnatoun_map" cx="552.1" cy="199.6" r="6.8"/>
                    <polygon class="st1" points="211.7,292.7 193.2,304.5 193.2,312.6 185.1,328 193.2,339.4 197,349.2 202.4,355.7 211.7,349.8
	242.1,354.5 242.1,307.1 "/>
                    <polygon class="st1" points="0,192.2 42.9,178.2 60,195.3 72.4,195.3 75.3,199.2 81.8,199.2 93.5,205.7 133.3,244.8 135,252.3
	173.4,304.7 172.1,313.7 170.6,316.5 168.6,323.6 169.6,328.1 168,332.3 184,349.7 197.2,363.8 203,359.1 208.9,356.7 238.7,466.7
	205.6,496.1 222.9,597.2 0,597.2 "/>
                    <g>
                        <path class="st3" d="M46.3,175.8l17.9,18.4l0,0c15.3,0,29.9,6.2,40.8,17.3l32.5,33.3l0,0c0,9.4,3.6,18.4,10.1,25.1l33.8,34.7
		l11.7-12c6-6.2,15.8-6.2,21.9,0l0,0l0,0c3.8-3.9,10.1-3.9,13.9,0l3.8,3.9h18.5l0,0c4.7,4.8,12.4,4.8,17.1,0l12.8-13.2H318l9.8-10.1
		h14.1l0,0c6.2-6.4,16.3-6.4,22.5,0l1.3,1.4h19.1l6,6.1h64.5c6.8,0,13.4-2.8,18.3-7.8l0,0c4.8-5,7.6-11.7,7.6-18.7v-17.2h14
		c8.4,0,16.4-3.4,22.3-9.5l17.4-17.9v-17.6l8-8.2v-8.7c0-11.7,4.5-22.8,12.5-31.1l36.6-37.6"/>
                        <path class="st4" d="M536.8,210.8l10.3,10.8l0,0c10.3-10.8,27-10.8,37.3,0l7.5,7.9h48.6"/>
                        <polyline class="st5" points="591.9,229.5 625.7,263.3 659.8,263.3 	"/>
                        <path class="st5" d="M546.7,221l-12.7,12.7l12.4,12.4v0c0,6.3,2.5,12.3,7,16.8l0,0c4.5,4.5,10.5,7,16.8,7H618l9.6-7.2"/>
                        <path class="st6" d="M587.1,279v21.9c0,7.1-3,14-8.4,19l0,0v42.6c0,7.3-3.1,14.3-8.6,19.5l0,0l-6.6-6.2l0,0
		c-6.3,5.9-9.8,13.9-9.8,22.2v21l-6.5,6.1c-7.2,6.8-19,6.8-26.2,0l0,0h-28.3c-5.9,0-11.5,2.2-15.6,6.1l0,0
		c-4.1,3.9-6.5,9.2-6.5,14.7v15.1c0,7.3-3.1,14.3-8.6,19.4L441.1,500"/>
                        <line class="st5" x1="482.9" y1="230.5" x2="484.9" y2="104.5"/>
                        <path class="st5" d="M218.4,292.7l14.7,14.7v62.9l6.7,6.7l0,0c0,17.6,7,34.6,19.5,47.1l31.4,31.4"/>
                        <path class="st7" d="M183.6,303.7v15.4l-10.5,10.3l15.6,15.3v10.4l13.7,13.4V352h19V418l10.8,10.6v19.4l0,0c9.2,9,9.2,23.6,0,32.6
		l-23.1,22.6"/>
                        <path class="st5" d="M282.9,102.3v25.3l0,0c-8.2,8.2-8.2,21.6,0,29.8l4.7,4.7V193l0,0c8.7,8.7,13.6,20.4,13.6,32.7v37.7l20,20v17
		l2,2c9.4,9.4,9.4,24.6,0,34l-0.1,0.1l11.6,11.6l0,0c0,6.8,5.5,12.2,12.2,12.2h1.7c8.3,0,16.3,3.3,22.2,9.2l0,0h22.5
		c14,0,27.3,5.5,37.2,15.4l0,0"/>



                    </g>
                    <g>
                        <g>
                            <path class="st2" d="M151.3,246c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-3.3c0-0.1,0-0.1-0.1-0.1h-2.5
			c-0.1,0-0.1,0-0.1,0.1v3.3c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1v3.2
			c0,0.1,0,0.1,0.1,0.1h2.5c0.1,0,0.1,0,0.1-0.1v-3.2c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1V246z"/>
                            <path class="st2" d="M154.9,246c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1
			V246z"/>
                            <path class="st2" d="M162.6,246c0,0.1,0,0.1-0.1,0.1h-1.1l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V246z"
                            />
                            <path class="st2" d="M172.5,246C172.5,246,172.5,246,172.5,246C172.5,246,172.5,246,172.5,246c0,0.1,0,0.2-0.1,0.2H171
			c-0.1,0-0.1,0-0.1-0.1l-0.4-1.4c0-0.1-0.1-0.1-0.1-0.1h-1.9c-0.1,0-0.1,0-0.1,0.1l-0.4,1.4c0,0.1-0.1,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0l2.5-8.1c0-0.1,0.1-0.1,0.1-0.1h1c0.1,0,0.1,0,0.1,0.1L172.5,246z M169.6,241.3
			c0,0,0-0.1,0-0.2c0-0.1-0.1-0.3-0.1-0.5h0c-0.1,0.4-0.2,0.7-0.2,0.7l-0.5,1.8c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.1,0.1,0.1h1
			c0.1,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0L169.6,241.3z"/>
                            <path class="st2" d="M179.3,246C179.3,246,179.3,246,179.3,246c0,0.1,0,0.2-0.1,0.2h-1.4c0,0-0.1,0-0.1-0.1l-1.2-3.4l-0.1-0.1
			h-1.2c-0.1,0-0.1,0-0.1,0.1v3.3c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h3c0.8,0,1.4,0.2,1.8,0.7
			c0.4,0.4,0.7,1,0.7,1.8v0.1c0,0.3-0.1,0.6-0.2,0.8c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.1-0.2,0.2-0.4,0.3s-0.2,0.2-0.2,0.2v0
			L179.3,246z M177.7,240.1c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h1.5
			c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V240.1z"/>
                            <path class="st2" d="M185.8,246c0,0.1,0,0.1-0.1,0.1H181c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h4.7c0.1,0,0.1,0,0.1,0.1
			v1.1c0,0.1,0,0.1-0.1,0.1h-3.2c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h2.6c0.1,0,0.1,0,0.1,0.1v1.1c0,0.1,0,0.1-0.1,0.1
			h-2.6c-0.1,0-0.1,0-0.1,0.1v1.9c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1,0.1V246z"/>
                            <path class="st2" d="M193.1,246c0,0.1,0,0.1-0.1,0.1h-1.1l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V246z"
                            />
                            <path class="st2" d="M196.7,246c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1
			V246z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path class="st2" d="M206,285.2C206,285.2,206,285.3,206,285.2C206.1,285.3,206.1,285.3,206,285.2c0,0.1,0,0.2-0.1,0.2h-1.3
			c-0.1,0-0.1,0-0.1-0.1l-0.4-1.4c0-0.1-0.1-0.1-0.1-0.1H202c-0.1,0-0.1,0-0.1,0.1l-0.4,1.4c0,0.1-0.1,0.1-0.1,0.1H200
			c-0.1,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0l2.5-8.1c0-0.1,0.1-0.1,0.1-0.1h1c0.1,0,0.1,0,0.1,0.1L206,285.2z M203.1,280.5
			c0,0,0-0.1,0-0.2c0-0.1-0.1-0.3-0.1-0.5h0c-0.1,0.4-0.2,0.7-0.2,0.7l-0.5,1.8c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.1,0.1,0.1h1
			c0.1,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0L203.1,280.5z"/>
                            <path class="st2" d="M212.9,285.2C212.9,285.2,212.9,285.3,212.9,285.2c0,0.1,0,0.2-0.1,0.2h-1.4c0,0-0.1,0-0.1-0.1l-1.2-3.4
			l-0.1-0.1h-1.2c-0.1,0-0.1,0-0.1,0.1v3.3c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h3
			c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8v0.1c0,0.3-0.1,0.6-0.2,0.8c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.1-0.2,0.2-0.4,0.3
			s-0.2,0.2-0.2,0.2v0L212.9,285.2z M211.2,279.4c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5c-0.1,0-0.1,0-0.1,0.1v1.8
			c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V279.4z"/>
                            <path class="st2" d="M219.4,285.3c0,0.1,0,0.1-0.1,0.1h-4.7c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h4.7
			c0.1,0,0.1,0,0.1,0.1v1.1c0,0.1,0,0.1-0.1,0.1h-3.2c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h2.6c0.1,0,0.1,0,0.1,0.1v1.1
			c0,0.1,0,0.1-0.1,0.1h-2.6c-0.1,0-0.1,0-0.1,0.1v1.9c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1,0.1V285.3z"/>
                            <path class="st2" d="M226.6,285.3c0,0.1,0,0.1-0.1,0.1h-1.1l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V285.3
			z"/>
                            <path class="st2" d="M230.2,285.3c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3
			c0.1,0,0.1,0,0.1,0.1V285.3z"/>
                        </g>
                    </g>

                    <g>
                        <g>
                            <path class="st2" d="M367.5,252.8c0,0.1,0,0.1-0.1,0.1h-1.5c-0.1,0-0.1,0-0.1,0.1v6.7c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-6.7c0-0.1,0-0.1-0.1-0.1h-1.5c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1h4.7c0.1,0,0.1,0,0.1,0.1
			V252.8z"/>
                            <path class="st2" d="M374.6,259.8C374.6,259.8,374.6,259.8,374.6,259.8c0,0.1,0,0.2-0.1,0.2h-1.4c0,0-0.1,0-0.1-0.1l-1.2-3.4
			l-0.1-0.1h-1.2c-0.1,0-0.1,0-0.1,0.1v3.3c0,0.1,0,0.1-0.1,0.1H369c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h3
			c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8v0.1c0,0.3-0.1,0.6-0.2,0.8c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.1-0.2,0.2-0.4,0.3
			s-0.2,0.2-0.2,0.2v0L374.6,259.8z M372.9,253.9c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5c-0.1,0-0.1,0-0.1,0.1v1.8
			c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V253.9z"/>
                            <path class="st2" d="M377.7,259.8c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3
			c0.1,0,0.1,0,0.1,0.1V259.8z"/>
                            <path class="st2" d="M385.3,259.8c0,0.1,0,0.1-0.1,0.1H384l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V259.8
			z"/>
                            <path class="st2" d="M388.9,259.8c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3
			c0.1,0,0.1,0,0.1,0.1V259.8z"/>
                            <path class="st2" d="M395.2,252.8c0,0.1,0,0.1-0.1,0.1h-1.5c-0.1,0-0.1,0-0.1,0.1v6.7c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-6.7c0-0.1,0-0.1-0.1-0.1h-1.5c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1h4.7c0.1,0,0.1,0,0.1,0.1
			V252.8z"/>
                            <path class="st2" d="M399.5,256.1v3.7c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-3.7l-2.3-4.4c0-0.1,0-0.1,0-0.1
			c0-0.1,0-0.1,0.1-0.1h1.5l0.1,0.1l1.3,2.6c0,0.1,0.1,0.1,0.1,0.1s0.1,0,0.1-0.1l1.3-2.6l0.1-0.1h1.5c0.1,0,0.1,0,0.1,0.1
			c0,0,0,0,0,0.1L399.5,256.1z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path class="st2" d="M423.4,222.3c0,0.4-0.1,0.7-0.2,1s-0.3,0.5-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2h-0.7
			c-0.4,0-0.7-0.1-1-0.2s-0.6-0.3-0.8-0.5s-0.4-0.5-0.5-0.7c-0.1-0.3-0.2-0.6-0.2-1v-3.9c0-0.4,0.1-0.7,0.2-1
			c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2h0.7c0.4,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.3,0.8,0.5
			c0.2,0.2,0.4,0.5,0.5,0.7s0.2,0.6,0.2,1V222.3z M421.9,218.3c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.4-0.3-0.7-0.3h-0.7
			c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.7v3.9c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.7c0.3,0,0.5-0.1,0.7-0.3
			c0.2-0.2,0.3-0.4,0.3-0.7V218.3z"/>
                            <path class="st2" d="M430.2,224.4c0,0.1,0,0.1-0.1,0.1h-4.7c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3
			c0.1,0,0.1,0,0.1,0.1v6.7c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1,0.1V224.4z"/>
                            <path class="st2" d="M437.2,222c0,0.8-0.2,1.4-0.7,1.8c-0.4,0.4-1,0.7-1.8,0.7h-3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1
			h3c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8V222z M435.7,218.5c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5
			c-0.1,0-0.1,0-0.1,0.1v5.3c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V218.5z"/>
                            <path class="st2" d="M447.4,222.1c0,0.8-0.2,1.4-0.7,1.8s-1,0.7-1.8,0.7h-3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h3
			c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8v0.1c0,0.2,0,0.3-0.1,0.5c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.2-0.3,0.3-0.3,0.4
			c-0.1,0.1-0.1,0.2-0.1,0.2s0,0.1,0.1,0.2c0.1,0.1,0.2,0.2,0.3,0.4c0.1,0.2,0.2,0.3,0.2,0.5c0.1,0.2,0.1,0.3,0.1,0.5V222.1z
			 M445.8,218.5c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h1.5
			c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V218.5z M445.8,221.9c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.4-0.3-0.7-0.3h-1.5
			c-0.1,0-0.1,0-0.1,0.1v1.9c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V221.9z"/>
                            <path class="st2" d="M454.9,224.3C454.9,224.4,454.9,224.4,454.9,224.3c0,0.1,0,0.2-0.1,0.2h-1.4c0,0-0.1,0-0.1-0.1l-1.2-3.4
			l-0.1-0.1h-1.2c-0.1,0-0.1,0-0.1,0.1v3.3c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h3
			c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8v0.1c0,0.3-0.1,0.6-0.2,0.8c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.1-0.2,0.2-0.4,0.3
			s-0.2,0.2-0.2,0.2v0L454.9,224.3z M453.3,218.5c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5c-0.1,0-0.1,0-0.1,0.1v1.8
			c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V218.5z"/>
                            <path class="st2" d="M458,224.4c0,0.1,0,0.1-0.1,0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1
			V224.4z"/>
                            <path class="st2" d="M465.7,222c0,0.8-0.2,1.4-0.7,1.8c-0.4,0.4-1,0.7-1.8,0.7h-3c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1
			h3c0.8,0,1.4,0.2,1.8,0.7c0.4,0.4,0.7,1,0.7,1.8V222z M464.2,218.5c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-1.5
			c-0.1,0-0.1,0-0.1,0.1v5.3c0,0.1,0,0.1,0.1,0.1h1.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7V218.5z"/>
                            <path class="st2" d="M470.8,216c0.6,0,1.1,0.1,1.5,0.4c0.1,0.1,0.3,0.2,0.4,0.3s0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.2,0.2,0.3
			s0.1,0.2,0.1,0.2c0,0,0,0.1-0.1,0.1l-1.2,0.6c0,0,0,0-0.1,0c0,0-0.1,0-0.1-0.1s0-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.4-0.5
			s-0.3-0.2-0.5-0.2h-0.9c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.7v3.9c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.7
			c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-0.6c0-0.1,0-0.1-0.1-0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1
			h2.8c0.1,0,0.1,0,0.1,0.1v2c0,0.4-0.1,0.7-0.2,1s-0.3,0.5-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2h-0.7
			c-0.4,0-0.7-0.1-1-0.2s-0.6-0.3-0.8-0.5s-0.4-0.5-0.5-0.7c-0.1-0.3-0.2-0.6-0.2-1v-3.9c0-0.4,0.1-0.7,0.2-1
			c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2H470.8z"/>
                            <path class="st2" d="M479.9,224.4c0,0.1,0,0.1-0.1,0.1H475c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h4.7
			c0.1,0,0.1,0,0.1,0.1v1.1c0,0.1,0,0.1-0.1,0.1h-3.2c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h2.6c0.1,0,0.1,0,0.1,0.1v1.1
			c0,0.1,0,0.1-0.1,0.1h-2.6c-0.1,0-0.1,0-0.1,0.1v1.9c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1,0.1V224.4z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path class="st2" d="M549.3,174.9c0.6,0,1.1,0.1,1.5,0.4c0.1,0.1,0.3,0.2,0.4,0.3s0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.2,0.2,0.3
			s0.1,0.2,0.1,0.2c0,0,0,0.1-0.1,0.1l-1.2,0.6c0,0,0,0-0.1,0c0,0-0.1,0-0.1-0.1s0-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.4-0.5
			s-0.3-0.2-0.5-0.2h-0.9c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.7v3.9c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.7
			c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-0.6c0-0.1,0-0.1-0.1-0.1h-1.3c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1
			h2.8c0.1,0,0.1,0,0.1,0.1v2c0,0.4-0.1,0.7-0.2,1s-0.3,0.5-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2h-0.7
			c-0.4,0-0.7-0.1-1-0.2s-0.6-0.3-0.8-0.5s-0.4-0.5-0.5-0.7c-0.1-0.3-0.2-0.6-0.2-1v-3.9c0-0.4,0.1-0.7,0.2-1
			c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2H549.3z"/>
                            <path class="st2" d="M558.4,183.4c0,0.1,0,0.1-0.1,0.1h-4.7c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h4.7
			c0.1,0,0.1,0,0.1,0.1v1.1c0,0.1,0,0.1-0.1,0.1h-3.2c-0.1,0-0.1,0-0.1,0.1v1.8c0,0.1,0,0.1,0.1,0.1h2.6c0.1,0,0.1,0,0.1,0.1v1.1
			c0,0.1,0,0.1-0.1,0.1h-2.6c-0.1,0-0.1,0-0.1,0.1v1.9c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1,0.1V183.4z"/>
                            <path class="st2" d="M564.4,176.4c0,0.1,0,0.1-0.1,0.1h-1.5c-0.1,0-0.1,0-0.1,0.1v6.7c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-6.7c0-0.1,0-0.1-0.1-0.1h-1.5c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1h4.7c0.1,0,0.1,0,0.1,0.1
			V176.4z"/>
                            <path class="st2" d="M571.3,183.4c0,0.1,0,0.1-0.1,0.1h-1.1l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V183.4
			z"/>
                            <path class="st2" d="M578.6,183.3C578.6,183.3,578.6,183.3,578.6,183.3C578.6,183.4,578.6,183.4,578.6,183.3c0,0.1,0,0.2-0.1,0.2
			h-1.3c-0.1,0-0.1,0-0.1-0.1l-0.4-1.4c0-0.1-0.1-0.1-0.1-0.1h-1.9c-0.1,0-0.1,0-0.1,0.1l-0.4,1.4c0,0.1-0.1,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0l2.5-8.1c0-0.1,0.1-0.1,0.1-0.1h1c0.1,0,0.1,0,0.1,0.1L578.6,183.3z M575.7,178.6
			c0,0,0-0.1,0-0.2c0-0.1-0.1-0.3-0.1-0.5h0c-0.1,0.4-0.2,0.7-0.2,0.7l-0.5,1.8c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.1,0.1,0.1h1
			c0.1,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0L575.7,178.6z"/>
                            <path class="st2" d="M584,176.4c0,0.1,0,0.1-0.1,0.1h-1.5c-0.1,0-0.1,0-0.1,0.1v6.7c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-6.7c0-0.1,0-0.1-0.1-0.1h-1.5c-0.1,0-0.1,0-0.1-0.1v-1.1c0-0.1,0-0.1,0.1-0.1h4.7c0.1,0,0.1,0,0.1,0.1
			V176.4z"/>
                            <path class="st2" d="M590.8,181.3c0,0.4-0.1,0.7-0.2,1s-0.3,0.5-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2h-0.7
			c-0.4,0-0.7-0.1-1-0.2s-0.6-0.3-0.8-0.5s-0.4-0.5-0.5-0.7c-0.1-0.3-0.2-0.6-0.2-1v-3.9c0-0.4,0.1-0.7,0.2-1
			c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2h0.7c0.4,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.3,0.8,0.5
			c0.2,0.2,0.4,0.5,0.5,0.7s0.2,0.6,0.2,1V181.3z M589.2,177.3c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.4-0.3-0.7-0.3h-0.7
			c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.7v3.9c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.7c0.3,0,0.5-0.1,0.7-0.3
			c0.2-0.2,0.3-0.4,0.3-0.7V177.3z"/>
                            <path class="st2" d="M598.1,181.3c0,0.4-0.1,0.7-0.2,1s-0.3,0.5-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2h-0.7
			c-0.4,0-0.7-0.1-1-0.2s-0.6-0.3-0.8-0.5s-0.4-0.5-0.5-0.7c-0.1-0.3-0.2-0.6-0.2-1v-6c0-0.1,0-0.1,0.1-0.1h1.3c0.1,0,0.1,0,0.1,0.1
			v6c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.7c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.1,0-0.1,0.1-0.1h1.3
			c0.1,0,0.1,0,0.1,0.1V181.3z"/>
                            <path class="st2" d="M605.5,183.4c0,0.1,0,0.1-0.1,0.1h-1.1l-0.1-0.1l-2.7-5.4l0.1,5.3c0,0.1,0,0.1-0.1,0.1h-1.3
			c-0.1,0-0.1,0-0.1-0.1v-8.1c0-0.1,0-0.1,0.1-0.1h1.1l0.1,0.1l2.7,5.4l-0.1-5.3c0-0.1,0-0.1,0.1-0.1h1.2c0.1,0,0.1,0,0.1,0.1V183.4
			z"/>

                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <path class="st8" d="M697.7,279.3c6,2.2,24.3-1.3,30.4,1.9c12,6.5,22.3-5.6,23.6-17.8c-14.6,10.3-23.5-2.6-28.1-5.3
				c-1.8-1-3.9-0.9-5.1,0.5c-1.2,1.4-4.1,3.3-6.4,1.8c-2.8-1.8-5.1-9.2-8.1-4.5c-4.1,7.2-8.8,12-9.9,13
				C692.4,270.2,694.7,281.1,697.7,279.3z"/>
                                <path class="st9" d="M683.8,274.5c0-5.5,9.2-14.6,12.8-14.6c2.8,0-6,11.5,3.8,15c9.8,3.5,9.9-5.4,12.4-6.9
				c3.1-1.7,11.4,3.6,12.9,8.6c3.2,10.7-36.8,6.9-36.8,6.9S683.8,280,683.8,274.5z"/>
                                <g>
                                    <circle class="st8" cx="731.6" cy="260.5" r="0.7"/>
                                    <circle class="st8" cx="696.3" cy="252.3" r="0.8"/>
                                    <circle class="st8" cx="744.5" cy="261.4" r="0.5"/>
                                    <circle class="st8" cx="722.7" cy="248" r="0.5"/>
                                    <circle class="st8" cx="727.4" cy="234.6" r="0.6"/>
                                    <circle class="st8" cx="710" cy="237.8" r="0.7"/>
                                    <circle class="st8" cx="711.6" cy="252.9" r="0.7"/>
                                </g>
                                <circle class="st8" cx="734.7" cy="248.7" r="5.5"/>
                                <path class="st10" d="M683.8,275.8c0,0,7.1,5.2,14.6,5.2c14.1,0,20.1-11.2,28.7-11.2c4.6,0,5.3,2.5,12,2.5c6.7,0,11-10,11-16.2
				c2.1-5.4,10.2,9,10.2,22c0,28.7-32.6,33.6-38.4,41.4l0,0C715.5,312,683.8,304,683.8,275.8L683.8,275.8z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st11" d="M697.1,354.4l1,6.8h0l1.3-6.8h0.8l1.4,6.8h0l1-6.8h0.9l-1.4,8.8h-0.8l-1.4-6.9h0l-1.4,6.9h-0.8l-1.5-8.8
				H697.1z"/>
                                <path class="st11" d="M705.4,354.4v8.8h-0.9v-8.8H705.4z"/>
                                <path class="st11" d="M708.4,354.4l2.3,6.4h0v-6.4h0.9v8.8h-1l-2.7-7.6h0v7.6h-0.9v-8.8H708.4z"/>
                                <path class="st11" d="M717,354.4v0.8H714v3h2.3v0.8H714v3.4h3.2v0.8H713v-8.8H717z"/>
                                <path class="st11" d="M721.1,354.4h2.1c1.4,0,2.4,0.8,2.4,2.3c0,1-0.4,1.8-1.4,2.1l1.5,4.3h-1l-1.4-4.1l-1.2,0v4.1h-0.9V354.4z
				 M722,358.2h0.8c1.4,0,1.8-0.5,1.8-1.5c0-1-0.4-1.5-1.8-1.5H722V358.2z"/>
                                <path class="st11" d="M729.2,363.3c-1.5,0-2.5-1.2-2.5-4.5c0-3.3,1-4.5,2.5-4.5s2.5,1.2,2.5,4.5
				C731.6,362,730.6,363.3,729.2,363.3z M729.2,355.1c-0.8,0-1.5,0.7-1.5,3.7c0,3,0.7,3.7,1.5,3.7c0.8,0,1.5-0.7,1.5-3.7
				C730.7,355.8,730,355.1,729.2,355.1z"/>
                                <path class="st11" d="M733.8,354.4v6.4c0,0.9,0.3,1.6,1.3,1.6s1.3-0.8,1.3-1.6v-6.4h0.9v6.4c0,1.4-0.7,2.4-2.2,2.4
				c-1.6,0-2.2-1-2.2-2.4v-6.4H733.8z"/>
                                <path class="st11" d="M742.8,354.4v0.8H741v8h-0.9v-8h-1.8v-0.8H742.8z"/>
                                <path class="st11" d="M747.7,354.4v0.8h-3.1v3h2.3v0.8h-2.3v3.4h3.2v0.8h-4.1v-8.8H747.7z"/>
                            </g>
                            <g>
                                <path class="st11" d="M683.5,335.4h2.3l-2.8,13.4h-2.3l-2.8-13.4h2.3l1.7,9.3h0L683.5,335.4z"/>
                                <path class="st11" d="M687.9,348.8h-2.2l2.5-13.4h2.9l2.5,13.4h-2.2l-0.4-3h-2.5L687.9,348.8z M688.7,343.8h1.9l-0.9-5.8h0
				L688.7,343.8z"/>
                                <path class="st11" d="M698.5,348.8h-2.3v-5.6l-2.8-7.8h2.3l1.6,5.1h0l1.5-5.1h2.3l-2.8,7.8V348.8z"/>
                                <path class="st11" d="M702.6,338.7c0-1.9,1.1-3.4,3.5-3.4c2.4,0,3.5,1.5,3.5,3.4v6.9c0,1.9-1.1,3.4-3.5,3.4
				c-2.4,0-3.5-1.5-3.5-3.4V338.7z M704.9,345.5c0,1,0.3,1.5,1.2,1.5c0.9,0,1.2-0.5,1.2-1.5v-6.8c0-1-0.3-1.5-1.2-1.5
				c-0.9,0-1.2,0.5-1.2,1.5V345.5z"/>
                                <path class="st11" d="M713.5,337.4h-2.2v-2h6.8v2h-2.2v11.4h-2.3V337.4z"/>
                                <path class="st11" d="M724,338.7c-0.1-1.2-0.7-1.5-1.2-1.5c-0.7,0-1.2,0.5-1.2,1.3c0,2.3,4.7,3.4,4.7,7c0,2.2-1.5,3.4-3.6,3.4
				c-2.1,0-3.4-1.7-3.5-3.7l2.2-0.3c0.1,1.4,0.6,2,1.4,2c0.8,0,1.3-0.4,1.3-1.2c0-2.7-4.7-3.4-4.7-7.2c0-2.1,1.3-3.3,3.6-3.3
				c1.9,0,3,1.4,3.2,3.2L724,338.7z"/>
                                <path class="st11" d="M732.2,335.4h3.4c2.4,0,3.6,1.3,3.6,4v5.3c0,2.7-1.3,4-3.6,4h-3.4V335.4z M734.5,346.9h0.8
				c1.2,0,1.7-0.5,1.7-1.9v-5.9c0-1.4-0.4-1.9-1.7-1.9h-0.8V346.9z"/>
                                <path class="st11" d="M741.7,337.4v-2h6.1v2.2l-4.2,9.2h4.2v2h-6.6v-2.2l4.3-9.2H741.7z"/>
                                <path class="st11" d="M749.7,338.7c0-1.9,1.1-3.4,3.5-3.4c2.4,0,3.5,1.5,3.5,3.4v6.9c0,1.9-1.1,3.4-3.5,3.4
				c-2.4,0-3.5-1.5-3.5-3.4V338.7z M752,345.5c0,1,0.3,1.5,1.2,1.5c0.9,0,1.2-0.5,1.2-1.5v-6.8c0-1-0.3-1.5-1.2-1.5
				c-0.9,0-1.2,0.5-1.2,1.5V345.5z"/>
                                <path class="st11" d="M761.2,348.8h-2.3v-13.4h3.2c2.6,0,3.9,1.1,3.9,4c0,2.2-0.8,3-1.6,3.4l1.9,6.1H764l-1.6-5.6
				c-0.3,0-0.8,0.1-1.2,0.1V348.8z M761.2,341.4h0.8c1.2,0,1.7-0.5,1.7-2.1c0-1.6-0.5-2.1-1.7-2.1h-0.8V341.4z"/>
                            </g>
                        </g>
                    </g>
</svg>

                <div class="home-trail-box-border-a for_zindex"></div>
                <div class="home-trail-box-border-b for_zindex"></div>


                <?php $args = array(
                    'post_type' => 'contact',
                    'posts_per_page' => -1,
                );


                $releaseQuery = new WP_Query( $args );



                if ( $releaseQuery->have_posts() ) :
                    while ( $releaseQuery->have_posts() ) :
                        $releaseQuery->the_post(); ?>

                        <div class="map-info  <?php echo the_field('description2'); ?>">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4><?php echo the_field('name'); ?></h4>
                                    <hr>
                                </div>
                                <img src="<?php echo the_field('image'); ?>" alt="<?php echo the_field('name'); ?>">
                            </div>
                            <p>Adress:
                                <?php echo the_field('address'); ?>
                            <p>Phone:
                                <span>    <?php echo the_field('phone_number'); ?></span>
                            </p>
                        </div>



                    <?php endwhile; endif; ?>


            </div>
        </div>
    </article>
</section>
<?php get_footer(); ?>