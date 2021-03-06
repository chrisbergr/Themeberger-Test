<?php

function chobz_ui() {

	?>

	<header class="chobz-ui">
		<section class="chobz-ui--left">
			<div class="chobz-ui--top">
				<div class="chobz-ui--hamburger">
					<a href="#" id="chobz_burger" aria-label="Main Menu opener">
						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="menu-icon">
							<path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
						</svg>
						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="menu-close">
							<path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z" class=""></path>
						</svg>
					</a>
				</div>
			</div>
			<div class="chobz-ui--middle">
				<div class="chobz-ui--logo">

					<a href="<?php echo esc_url( get_home_url() ); ?>" rel="home" aria-label="Go to homepage">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="LOGO" x="0px" y="0px" viewBox="0 0 1546 309" style="enable-background:new 0 0 1546 309;" xml:space="preserve" class="logo">
							<path class="logo-monogram" d="M81.7,79.5V49.1H51.3V18.6h91.3v30.4h-30.4v30.4H203V49.1h-30.4V18.6h91.3v30.4h-30.4v151.6h30.4  v-29.9h30.4v29.6l-30.7,30.7H127.7v-30.4H203v-30.5h-90.9v91.3h30.4v30.4H51.3v-30.4h30.4v-30.4H51.5l-30.7-30.6v-90.3l30.7-30.7  H81.7z M51.3,125.4v75.4h30.4v-75.3h30.4v14.4H203V110H51.3V125.4z M203,246.7h30.4v15h30.4v30.4h-91.3v-30.5H203V246.7z M263.8,110  h-14.9V79.5h14.7l30.7,30.7v29.6h-30.4L263.8,110L263.8,110z"></path>
							<g class="logo-hockenberger">
								<path d="M431.5,49h17.1v90.9h-17.1V49z M439.4,86.6h52.9v16.5h-52.9V86.6z M481.2,49h17.1v90.9h-17.1V49z"></path>
								<path d="M544,136.6c-5-2.8-8.9-6.7-11.7-11.8s-4.1-10.9-4.1-17.6V81.6c0-6.7,1.4-12.5,4.1-17.6s6.6-9,11.7-11.8   c5-2.8,10.8-4.2,17.4-4.2c6.6,0,12.4,1.4,17.4,4.2c5,2.8,8.9,6.7,11.7,11.8s4.1,10.9,4.1,17.6v25.8c0,6.7-1.4,12.5-4.1,17.6   s-6.6,9-11.7,11.8c-5,2.8-10.8,4.2-17.4,4.2C554.8,140.8,549,139.4,544,136.6z M569.5,121.7c2.3-1.3,4.1-3.2,5.4-5.6   c1.3-2.4,1.9-5.2,1.9-8.4V81.1c0-3.2-0.6-6-1.9-8.4c-1.3-2.4-3.1-4.3-5.4-5.6c-2.3-1.3-5-2-8.1-2c-3.1,0-5.8,0.7-8.1,2   c-2.3,1.3-4.1,3.2-5.4,5.6c-1.3,2.4-1.9,5.2-1.9,8.4v26.6c0,3.2,0.6,6,1.9,8.4c1.3,2.4,3.1,4.3,5.4,5.6c2.3,1.3,5,2,8.1,2   C564.5,123.7,567.2,123,569.5,121.7z"></path>
								<path d="M645.1,140.8c0,0-2.5-1.3-7.4-4c-4.9-2.6-8.7-6.5-11.3-11.6c-2.6-5.1-3.9-11.2-3.9-18.3V82   c0-7.2,1.3-13.3,3.9-18.3c2.6-5.1,6.3-8.9,11.3-11.6c4.9-2.7,10.8-4,17.8-4c5.7,0,10.8,1.2,15.3,3.7c4.5,2.5,8.2,6,11.2,10.7   s5,10.3,6.1,17h-17.8c-0.7-3-1.7-5.6-3.1-7.7c-1.4-2.1-3.1-3.8-5.1-4.9c-2-1.1-4.2-1.7-6.7-1.7c-3.2,0-5.9,0.7-8.2,2   s-4,3.2-5.2,5.8c-1.2,2.5-1.8,5.6-1.8,9.1v24.9c0,3.5,0.6,6.6,1.8,9.1s2.9,4.4,5.2,5.7s5,2,8.2,2c2.5,0,4.8-0.6,6.8-1.7   c2-1.1,3.7-2.7,5.1-4.8s2.4-4.7,3-7.8h17.8c-1.2,6.6-3.2,12.3-6.2,17s-6.6,8.3-11.1,10.7c-4.5,2.5-9.6,3.7-15.3,3.7   C648.6,140.8,645.1,140.8,645.1,140.8z"></path>
								<path d="M715.5,49h17.1v90.9h-17.1V49z M725.8,104.4L762.2,49h21.6L728,126.6L725.8,104.4z M740.9,93.9l14.8-9.3   l31.9,55.3h-20.3L740.9,93.9z"></path>
								<path d="M809.4,49h17.1v90.9h-17.1V49z M815.6,49h54.7v16.5h-54.7V49z M815.6,86.5h47.8V103h-47.8V86.5z M815.6,123.4   h54.7v16.5h-54.7V123.4z"></path>
								<path d="M897.7,49h20.9l33.8,69.6l-1.5,1.6V49h16.4v90.8h-21.1l-33.7-68.6l1.5-1.6v70.2h-16.4V49z"></path>
								<path d="M999.1,49h17.1v90.9h-17.1V49z M1006.6,123.4h29c3.9,0,6.9-0.9,9.1-2.8c2.1-1.9,3.2-4.6,3.2-8v-0.2   c0-2.3-0.5-4.3-1.4-5.9c-1-1.6-2.4-2.9-4.2-3.7c-1.9-0.9-4.1-1.3-6.7-1.3h-29V85h29c3.5,0,6.3-0.9,8.2-2.7c1.9-1.8,2.9-4.3,2.9-7.6   c0-2.9-1-5.2-2.9-6.8s-4.7-2.4-8.2-2.4h-29V49h29.6c5.9,0,10.9,1,15.1,2.9c4.2,1.9,7.3,4.8,9.5,8.4c2.2,3.7,3.3,8.1,3.3,13.3   c0,3.5-0.7,6.7-2.1,9.4c-1.4,2.7-3.4,5-6.1,6.7c-2.7,1.8-5.9,2.9-9.6,3.6c4,0.5,7.4,1.8,10.3,3.7c2.9,1.9,5,4.4,6.5,7.4   c1.5,3,2.2,6.6,2.2,10.6v0.2c0,5.2-1.1,9.7-3.3,13.4c-2.2,3.7-5.4,6.5-9.6,8.5s-9.2,2.9-15.1,2.9h-30.6V123.4z"></path>
								<path d="M1093.5,49h17.1v90.9h-17.1V49z M1099.6,49h54.7v16.5h-54.7V49z M1099.6,86.5h47.8V103h-47.8V86.5z    M1099.6,123.4h54.7v16.5h-54.7V123.4z"></path>
								<path d="M1184.3,48.9h17.1v90.9h-17.1V48.9z M1191.1,86.8h31.6c1.8,0,3.3-0.4,4.6-1.3c1.3-0.9,2.4-2.1,3.1-3.8   c0.7-1.6,1.1-3.5,1.2-5.6c0-2.1-0.4-4-1.1-5.6c-0.7-1.6-1.8-2.9-3.1-3.8c-1.3-0.9-2.9-1.3-4.7-1.3h-31.6V48.9h33   c5,0,9.4,1.1,13.2,3.4c3.8,2.3,6.7,5.4,8.8,9.5c2.1,4.1,3.1,8.9,3.1,14.3c0,5.4-1,10.2-3.1,14.3c-2.1,4.1-5,7.3-8.8,9.5   s-8.2,3.4-13.2,3.4h-33V86.8z M1210.2,100.5l18.3-2.9l24.5,42.3h-20.8L1210.2,100.5z"></path>
								<path d="M1339,89.1v17.8c0,6.8-1.4,12.7-4.1,17.8c-2.7,5.1-6.6,9.1-11.6,11.9s-10.8,4.2-17.4,4.2   c-6.6,0-12.5-1.3-17.5-4c-5.1-2.6-9-6.4-11.8-11.2c-2.8-4.8-4.2-10.4-4.2-16.8V82c0-6.8,1.4-12.7,4.1-17.8   c2.7-5.1,6.6-9.1,11.6-11.9s10.8-4.2,17.4-4.2c5.4,0,10.4,1.1,15,3.3c4.6,2.2,8.4,5.4,11.5,9.5c3.1,4.1,5.1,8.8,6.2,14.2h-18.5   c-0.6-1.9-1.7-3.6-3.1-5c-1.4-1.4-3.1-2.5-5.1-3.2c-1.9-0.7-3.9-1.1-6-1.1c-3,0-5.7,0.7-8,2c-2.3,1.3-4.1,3.2-5.4,5.7   c-1.3,2.5-1.9,5.3-1.9,8.5v26.8c0,2.8,0.6,5.3,1.9,7.5c1.3,2.2,3.1,3.8,5.5,5c2.4,1.2,5.1,1.8,8.3,1.8c3.1,0,5.8-0.6,8.1-1.9   c2.3-1.3,4.1-3.1,5.3-5.5c1.3-2.4,1.9-5.3,1.9-8.6v-1.5h-13.8V89.1H1339z"></path>
								<path d="M1368.9,49h17.1v90.9h-17.1V49z M1375.1,49h54.7v16.5h-54.7V49z M1375.1,86.5h47.8V103h-47.8V86.5z    M1375.1,123.4h54.7v16.5h-54.7V123.4z"></path>
								<path d="M1457.2,48.9h17.1v90.9h-17.1V48.9z M1464,86.8h31.6c1.8,0,3.3-0.4,4.6-1.3c1.3-0.9,2.4-2.1,3.1-3.8   c0.7-1.6,1.1-3.5,1.2-5.6c0-2.1-0.4-4-1.1-5.6c-0.7-1.6-1.8-2.9-3.1-3.8c-1.3-0.9-2.9-1.3-4.7-1.3H1464V48.9h33   c5,0,9.4,1.1,13.2,3.4c3.8,2.3,6.7,5.4,8.8,9.5c2.1,4.1,3.1,8.9,3.1,14.3c0,5.4-1,10.2-3.1,14.3c-2.1,4.1-5,7.3-8.8,9.5   s-8.2,3.4-13.2,3.4h-33V86.8z M1483.1,100.5l18.3-2.9l24.5,42.3h-20.8L1483.1,100.5z"></path>
							</g>
							<g class="logo-christian">
								<path d="M450.1,262.8c0,0-2.5-1.3-7.4-4c-4.9-2.6-8.7-6.5-11.3-11.6c-2.6-5.1-3.9-11.2-3.9-18.3V204    c0-7.2,1.3-13.3,3.9-18.3c2.6-5.1,6.3-8.9,11.3-11.6c4.9-2.7,10.8-4,17.8-4c5.7,0,10.8,1.2,15.3,3.7s8.2,6,11.2,10.7    s5,10.3,6.1,17h-17.8c-0.7-3-1.7-5.6-3.1-7.7c-1.4-2.1-3.1-3.8-5.1-4.9c-2-1.1-4.2-1.7-6.7-1.7c-3.2,0-5.9,0.7-8.2,2    s-4,3.2-5.2,5.8s-1.8,5.6-1.8,9.1v24.9c0,3.5,0.6,6.6,1.8,9.1s2.9,4.4,5.2,5.7s5,2,8.2,2c2.5,0,4.8-0.6,6.8-1.7s3.7-2.7,5.1-4.8    s2.4-4.7,3-7.8H493c-1.2,6.6-3.2,12.3-6.2,17s-6.6,8.3-11.1,10.7c-4.5,2.5-9.6,3.7-15.3,3.7C453.5,262.8,450.1,262.8,450.1,262.8z    "></path>
								<path d="M517,171h17.1v90.9H517V171z M524.9,208.5h52.9V225h-52.9V208.5z M566.7,171h17.1v90.9h-17.1V171z"></path>
								<path d="M612.2,170.9h17.1v90.9h-17.1V170.9z M619,208.8h31.6c1.8,0,3.3-0.4,4.6-1.3c1.3-0.9,2.4-2.1,3.1-3.8    c0.7-1.6,1.1-3.5,1.2-5.6c0-2.1-0.4-4-1.1-5.6c-0.7-1.6-1.8-2.9-3.1-3.8c-1.3-0.9-2.9-1.3-4.7-1.3H619v-16.5h33    c5,0,9.4,1.1,13.2,3.4c3.8,2.3,6.7,5.4,8.8,9.5c2.1,4.1,3.1,8.9,3.1,14.3s-1,10.2-3.1,14.3c-2.1,4.1-5,7.3-8.8,9.5    s-8.2,3.4-13.2,3.4h-33V208.8z M638.1,222.5l18.3-2.9l24.5,42.3h-20.8L638.1,222.5z"></path>
								<path d="M720.4,261.9h-17.8V171h17.8V261.9z"></path>
								<path d="M769.6,262.8c0,0-2.1-0.4-6.2-1.3c-4.1-0.9-8-2.2-11.7-3.8c-3.6-1.7-6.9-3.7-9.8-6.1l7.9-14.1    c3.5,2.9,7.5,5.1,12.1,6.7c4.6,1.6,9.3,2.3,14.1,2.3c5.6,0,9.9-0.9,13-2.8c3.1-1.9,4.6-4.6,4.6-8v-0.1c0-2.4-0.7-4.3-2.1-5.8    s-3.2-2.5-5.4-3.1c-2.2-0.7-5-1.3-8.5-1.8c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3-0.1l-1.4-0.2c-6.1-1-11.1-2.2-15.1-3.6    s-7.4-4-10.2-7.6c-2.8-3.6-4.2-8.7-4.2-15.3v-0.1c0-5.9,1.3-10.9,3.9-15.1s6.4-7.3,11.4-9.5s11-3.3,18.1-3.3c3.3,0,6.6,0.4,10,1.1    c3.4,0.8,6.7,1.8,10,3.3s6.3,3.1,9.3,5.1l-7.3,14.5c-3.5-2.4-7.2-4.3-11-5.6s-7.5-2-11-2c-5.3,0-9.3,0.9-12.2,2.6    s-4.3,4.2-4.3,7.3v0.1c0,2.6,0.8,4.7,2.3,6.2s3.4,2.6,5.6,3.3c2.2,0.7,5.3,1.5,9.3,2.3c0.2,0,0.3,0.1,0.5,0.1    c0.2,0,0.3,0.1,0.5,0.1c0.3,0,0.5,0.1,0.7,0.2c0.2,0.1,0.5,0.1,0.7,0.2c5.8,1.1,10.6,2.5,14.4,4.1c3.9,1.6,7.1,4.2,9.7,7.8    c2.6,3.6,3.9,8.4,3.9,14.6v0.1c0,5.8-1.4,10.8-4.1,14.9c-2.7,4.1-6.7,7.3-11.8,9.4s-11.4,3.3-18.7,3.3    C771.7,262.8,769.6,262.8,769.6,262.8z"></path>
								<path d="M822.1,171h66.6v16.5h-66.6V171z M846.9,178.4H864v83.4h-17.1V178.4z"></path>
								<path d="M923.6,261.9h-17.8V171h17.8V261.9z"></path>
								<path d="M976.7,171h10.9l34.8,90.9h-18.4l-21.8-62.1l-21.8,62.1h-18.4L976.7,171z M958.6,230.8h47.8v16.5h-47.8V230.8    z"></path>
								<path d="M1041.9,171h20.9l33.8,69.6l-1.5,1.6V171h16.4v90.8h-21.1l-33.7-68.6l1.5-1.6v70.2h-16.4V171z"></path>
							</g>
						</svg>
					</a>

				</div>
			</div>
			<div class="chobz-ui--bottom">
				<div class="chobz-ui--lang">
					<?php dynamic_sidebar( 'ui-bl' ); ?>
				</div>
			</div>
		</section><!-- .chobz-ui-left -->
		<section class="chobz-ui--right">
			<div class="chobz-ui--top">
				<div class="chobz-ui--search">
					<a href="#" id="chobz_lens">
						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="search-icon">
							<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="search-close">
							<path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z" class=""></path>
						</svg>
					</a>
				</div>
			</div>
			<div class="chobz-ui--middle">
				<div class="chobz-ui--shortmenu">

					<?php if ( function_exists( 'wp_nav_menu' ) && has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="shortmenu" role="navigation">
						<?php
						wp_nav_menu(
							array(
								'menu_class'     => 'ui-primary-menu',
								'theme_location' => 'primary',
								'menu_id'        => 'primary',
								'container'      => false,
								'fallback_cb'    => false,
							)
						);
						?>
					</nav>
					<?php endif; ?>

				</div>
			</div>
			<div class="chobz-ui--bottom">
				<div class="chobz-ui--social">

					<ul class="external_links">
						<li class="twitter"><a href="https://twitter.com/chrisbergr" title="@chrisbergr on Twitter" rel="me">Twitter</a></li>
						<li class="instagram"><a href="https://instagram.com/chrisbergr" title="chrisbergr on Instagram" rel="me">Instagram</a></li>
						<li class="facebook"><a href="https://facebook.com/chrisbergr" title="chrisbergr on Facebook" rel="me">Facebook</a></li>
						<li class="pinterest"><a href="https://pinterest.com/chrisbergr" title="chrisbergr on Pinterest" rel="me">Pinterest</a></li>
					</ul>

				</div>
			</div>
		</section><!-- .chobz-ui-right -->
		<aside class="chobz-ui--searchoverlay">
			<div class="chobz-ui-searchoverlay--inner">
				<?php dynamic_sidebar( 'ui-search' ); ?>
			</div>
		</aside><!-- .chobz-ui-searchoverlay -->
		<nav class="chobz-ui--fullmenu">
			<div class="chobz-ui-fullmenu--inner">
				<?php
				wp_nav_menu(
					array(
						'menu_class'     => 'ui-full-menu',
						'theme_location' => 'fullmenu',
						'menu_id'        => 'fullmenu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</div>
		</nav><!-- .chobz-ui-fullmenu -->
	</header>

	<?php

}
add_action( 'themeberger_before_header', 'chobz_ui', 10 );
