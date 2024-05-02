<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
	if (is_home() || is_front_page()) {
	?>
		<meta name="description" content="Treat someone you love to a rude, funny or sarcastic mug.">
	<?php
	}
	?>

	<?php
	if (is_product()) {
	?>
		<meta name="description" content="<?php echo strip_tags(wc_get_product($post->ID)->get_description()); ?>">
	<?php
	}
	?>

	<?php wp_head(); ?>

	<?php if (!file_exists('c:\windows')) { ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-DR0DTLB52E"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-WZLPMWB8YG');
		</script>
	<?php } ?>

	<!-- Meta Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '358964673257456');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=358964673257456&ev=PageView&noscript=1" /></noscript>
	<!-- End Meta Pixel Code -->
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="inner-wrapper grid">
			<button type="button" id="mobile-menu-open-button" class="menu-button">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="24" fill="#ffffff">
					<path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
				</svg>
			</button>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home">
				<svg width="95px" viewBox="0 0 143 83" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.32535 52.2759C3.63905 51.4277 4.37101 50.9862 5.52125 50.9514C6.67148 50.9165 7.44411 51.3057 7.83914 52.119L7.874 58.7242C9.50059 57.725 11.5513 57.481 14.026 57.9922C16.5007 58.5034 18.2609 60.1126 19.3066 62.8197C20.3523 65.5268 20.1838 68.2746 18.8012 71.063C17.4302 73.8399 15.4376 75.3561 12.8235 75.6117C10.2209 75.8673 8.54787 75.4955 7.80429 74.4963C7.38602 75.3561 6.57853 75.7453 5.38182 75.664C4.19674 75.5943 3.49963 75.1644 3.29049 74.3743L3.32535 52.2759ZM12.9978 62.4363C11.5106 61.9018 9.86657 62.14 8.0657 63.1508V70.0174C9.40183 71.2373 10.8193 71.644 12.3181 71.2373C13.8285 70.8307 14.7928 70.0755 15.2111 68.9717C15.641 67.8563 15.7513 66.6189 15.5422 65.2596C15.3331 63.9002 14.4849 62.9591 12.9978 62.4363Z" fill="white" />
					<path d="M35.5319 81.2408C34.4397 82.3097 32.5866 82.85 29.9724 82.8616C27.3582 82.8733 25.4296 82.3911 24.1864 81.4151C22.5714 80.6483 22.0428 79.5794 22.6005 78.2084C23.1582 76.849 24.2154 76.5237 25.7723 77.2325C26.8412 78.1736 28.2761 78.6093 30.077 78.5395C31.8778 78.4815 32.6795 77.6565 32.482 76.0648V74.5137C30.7392 75.42 28.9965 75.786 27.2537 75.6117C25.5225 75.4374 24.1457 74.7461 23.1233 73.5378C22.1125 72.3294 21.4909 70.7493 21.2585 68.7974C21.0262 66.8455 21.2876 65.126 22.0428 63.6388C22.798 62.14 23.1582 60.8445 23.1233 59.7524C23.1001 58.6603 23.7507 58.1026 25.0752 58.0793C26.3997 58.0561 27.1491 58.515 27.3234 59.4561C27.5093 60.3856 27.1956 61.8786 26.3823 63.9351C25.5806 65.9799 25.4702 67.6704 26.0512 69.0066C26.6321 70.3427 27.8056 71.0166 29.5716 71.0282C31.3492 71.0398 32.3135 70.4298 32.4646 69.1983L32.482 59.6304C32.482 58.5615 33.2605 58.0038 34.8173 57.9573C36.3742 57.9109 37.1759 58.5615 37.2224 59.9093L37.2746 77.4416C37.2049 78.9055 36.624 80.1719 35.5319 81.2408Z" fill="white" />
					<path d="M64.5665 50.934C65.8678 50.9572 66.5823 51.4626 66.7102 52.4502L66.745 74.3743C66.5359 75.1644 65.833 75.5943 64.6362 75.664C63.4512 75.7453 62.6495 75.3561 62.2312 74.4963C61.4876 75.4955 59.71 75.8673 56.8983 75.6117C54.0983 75.3561 52.1347 73.9677 51.0077 71.4464C49.8807 68.9136 49.811 66.1658 50.7986 63.2031C51.7978 60.2404 53.5348 58.5034 56.0095 57.9922C58.4842 57.481 60.5349 57.725 62.1615 58.7242L62.1964 52.4676C62.4752 51.4219 63.2653 50.9107 64.5665 50.934ZM62.0744 62.9765C60.2735 61.9657 58.6295 61.7275 57.1423 62.262C55.6551 62.7848 54.807 63.7259 54.5979 65.0853C54.3887 66.4447 54.4933 67.682 54.9116 68.7974C55.3414 69.9012 56.3058 70.6564 57.8046 71.063C59.315 71.4697 60.7382 71.063 62.0744 69.8431V62.9765Z" fill="white" />
					<path d="M81.6109 74.8449C79.7403 75.8324 77.4457 76.0648 74.7269 75.542C72.0082 75.0191 70.0911 73.5726 68.9758 71.2025C67.872 68.8207 67.7907 66.2413 68.7318 63.4645C69.6729 60.6761 71.5318 58.9101 74.3087 58.1665C77.0855 57.4113 79.4266 57.4577 81.3321 58.3059C83.2375 59.1424 83.9462 60.2462 83.4582 61.6172C82.9703 62.9765 82.0582 63.36 80.7221 62.7674C79.0955 61.8031 77.434 61.5068 75.7377 61.8786C74.0531 62.2504 73.1061 63.116 72.897 64.4753L79.0142 64.4579C80.0831 64.7251 80.6117 65.3874 80.6001 66.4447C80.5885 67.4903 80.0424 68.2165 78.9619 68.6231H72.8447C73.2049 69.9244 74.1809 70.8307 75.7726 71.3419C77.3759 71.8415 79.02 71.4813 80.7047 70.2614C82.5055 69.5759 83.5744 69.9244 83.9114 71.307C84.2483 72.678 83.4815 73.8573 81.6109 74.8449Z" fill="white" />
					<path d="M88.3554 58.4627C90.319 57.4636 92.5439 57.2835 95.0303 57.9225C97.5283 58.5499 98.6785 59.4329 98.481 60.5715C98.2835 61.6985 97.7432 62.2969 96.8602 62.3666C95.9772 62.4363 94.9664 62.2446 93.8278 61.7915C92.6892 61.3383 91.7364 61.2628 90.9696 61.5649C90.2144 61.867 90.0053 62.355 90.3422 63.0288C90.6791 63.6911 91.446 64.0919 92.6427 64.2313C93.8394 64.3591 94.9896 64.5915 96.0934 64.9285C97.1971 65.2538 98.2021 65.9218 99.1084 66.9326C100.026 67.9318 100.206 69.3783 99.6486 71.2722C99.1026 73.166 97.8768 74.4847 95.9714 75.2283C94.0659 75.9718 91.7422 75.9312 89.0003 75.1063C86.2699 74.2814 84.8292 73.288 84.6782 72.1261C84.5271 70.9643 84.9396 70.2091 85.9156 69.8605C86.8915 69.5003 88.0301 69.7269 89.3314 70.5402C90.6443 71.3419 91.934 71.6846 93.2004 71.5684C94.4784 71.4523 95.1523 70.9701 95.222 70.1219C95.2917 69.2738 94.4436 68.7393 92.6775 68.5186C90.9231 68.2862 89.2501 67.7517 87.6583 66.9152C86.0666 66.0787 85.294 64.7135 85.3404 62.8197C85.3985 60.9143 86.4035 59.4619 88.3554 58.4627Z" fill="white" />
					<path d="M101.374 59.735C101.513 58.3872 102.303 57.7075 103.744 57.6959C105.185 57.6727 105.998 58.3466 106.184 59.7175V73.7121C105.928 75.0714 105.121 75.7511 103.762 75.7511C102.402 75.7511 101.606 75.0366 101.374 73.6075V59.735ZM101.304 53.7747C101.304 51.8576 102.164 50.9281 103.884 50.9862C105.615 51.0443 106.469 51.997 106.445 53.8444C106.434 55.6917 105.574 56.6212 103.866 56.6328C102.17 56.6328 101.316 55.6801 101.304 53.7747Z" fill="white" />
					<path d="M117.059 82.8093C114.631 82.7977 112.545 82.3097 110.802 81.3454C109.861 80.3695 109.646 79.3761 110.158 78.3653C110.669 77.3661 111.651 77.1047 113.103 77.581C115.264 78.4175 116.902 78.7196 118.018 78.4873C119.145 78.2549 119.795 77.7204 119.969 76.8839L119.987 75.0714C118.36 76.0706 116.31 76.3146 113.835 75.8034C111.36 75.2922 109.6 73.683 108.554 70.9759C107.509 68.2688 107.671 65.5268 109.042 62.75C110.425 59.9615 112.417 58.4395 115.02 58.1839C117.634 57.9283 119.313 58.3001 120.057 59.2993C120.475 58.4395 121.277 58.0503 122.462 58.1316C123.658 58.2013 124.361 58.6312 124.57 59.4213L124.64 76.2216C124.594 78.4756 123.926 80.1371 122.636 81.206C121.346 82.2865 119.487 82.821 117.059 82.8093ZM114.968 71.551C116.455 72.0738 118.099 71.8298 119.9 70.819V63.9525C118.564 62.7326 117.14 62.3259 115.63 62.7326C114.131 63.1392 113.167 63.9002 112.737 65.0156C112.319 66.1194 112.214 67.3509 112.423 68.7103C112.632 70.0696 113.48 71.0166 114.968 71.551Z" fill="white" />
					<path d="M126.4 59.979C126.644 58.9217 127.463 58.3872 128.858 58.3756C130.263 58.3524 131.042 58.8287 131.193 59.8047C132.936 58.7823 134.731 58.3001 136.578 58.3582C138.437 58.4163 139.872 58.9914 140.883 60.0835C141.905 61.1757 142.533 62.6977 142.765 64.6496C142.997 66.6015 142.567 68.9136 141.475 71.5859C140.383 74.2581 139.918 76.4482 140.081 78.1561C140.244 79.8757 139.628 80.7877 138.234 80.8923C136.851 80.9969 135.991 80.1371 135.654 78.313C135.329 76.5005 135.8 74.1129 137.066 71.1502C138.344 68.1758 138.669 65.9799 138.042 64.5625C137.415 63.145 136.154 62.4305 134.26 62.4189C132.378 62.4072 131.361 63.0172 131.21 64.2488L131.193 73.9909C131.193 75.0598 130.414 75.6175 128.858 75.664C127.301 75.7104 126.499 75.0598 126.453 73.7121L126.4 59.979Z" fill="white" />
					<path d="M3.22009 8.77263C1.13576 8.79287 0.0632382 7.44716 0.00252953 4.7355C-0.0581791 2.02385 0.973868 0.657905 3.09867 0.637669L11.6889 0.698378C21.0381 -0.455087 26.9572 0.850149 29.4462 4.61409C31.9555 8.37802 32.4918 12.1723 31.055 15.997C29.6182 19.8216 27.6756 22.169 25.227 23.0392C27.372 23.4439 29.1326 25.4372 30.5086 29.019C34.3737 37.5991 36.7211 42.557 37.5508 43.8926C38.4008 45.2282 39.5239 46.2906 40.9202 47.0798C42.3367 47.8892 42.964 49.0022 42.8021 50.4188C42.6605 51.8555 42.104 52.8977 41.1326 53.5453C40.1815 54.1928 39.0078 54.4053 37.6115 54.1827C36.2355 53.9601 34.91 53.181 33.6351 51.8454C32.3805 50.5098 30.5795 47.0798 28.2321 41.5553C25.8847 36.0308 24.0128 32.1961 22.6165 30.051C21.2202 27.8857 18.3365 26.8537 13.9655 26.9549V40.1287C13.581 42.132 12.1341 43.1236 9.62485 43.1034C7.1358 43.1034 5.8508 42.0511 5.76985 39.9465V8.74228L3.22009 8.77263ZM23.77 13.6597C23.9319 9.5922 20.5625 7.94294 13.662 8.71192L13.6923 18.6378C20.2489 19.3663 23.6081 17.7069 23.77 13.6597Z" fill="white" />
					<path d="M71.4263 42.7088C70.7382 43.2956 69.3217 43.5385 67.1767 43.4373C65.0519 43.3563 63.1193 41.5755 61.379 38.0949C57.8579 41.4946 54.1243 43.1438 50.1782 43.0427C46.2524 42.9415 42.9438 41.5351 40.2524 38.8234C37.5812 36.0915 36.276 32.8942 36.3367 29.2314C36.3974 25.5485 36.8527 22.4523 37.7026 19.943C38.5728 17.4135 39.2102 14.9953 39.6149 12.6883C40.0197 10.3612 39.8982 7.95306 39.2507 5.46401C38.6031 2.97495 39.2304 1.34594 41.1326 0.57696C43.0348 -0.192016 44.593 0.0811731 45.8072 1.39653C47.0416 2.71188 47.7701 4.86704 47.9927 7.862C48.2153 10.8367 47.7195 14.2465 46.5054 18.0914C45.2912 21.9161 45.0686 25.68 45.8376 29.3832C46.6268 33.0662 49.0349 34.8774 53.0619 34.8166C57.1091 34.7357 59.7904 32.6109 61.1058 28.4422L61.0754 3.97665C61.0754 1.30546 62.5527 -0.020008 65.5072 0.000228228C68.4617 0.0204644 69.9895 1.33582 70.0907 3.94629V33.8453C70.0097 35.3225 70.4448 36.3951 71.3959 37.0629C72.3673 37.7307 72.7821 38.6919 72.6404 39.9465C72.519 41.1809 72.1143 42.1017 71.4263 42.7088Z" fill="white" />
					<path d="M73.976 4.18913C73.9356 1.37629 76.202 0.0811731 80.7754 0.303772L90.5798 0.243063C96.1043 0.324008 100.485 2.15539 103.723 5.7372C106.961 9.29877 108.833 13.2853 109.339 17.6968C109.845 22.0881 109.622 26.0746 108.671 29.6564C107.72 33.2382 105.868 36.385 103.116 39.0966C100.384 41.8083 96.3876 43.0831 91.1262 42.9212L79.6523 42.982C75.9693 43.0831 74.1379 41.8083 74.1582 39.1573C74.1986 36.4861 75.8074 35.1303 78.9845 35.0898L79.0452 8.83334C75.7265 8.52979 74.0367 6.98172 73.976 4.18913ZM100.597 15.997C99.0386 11.3831 96.3573 9.01546 92.5529 8.89405L87.2409 8.86369L87.2712 34.8773H93.676C96.9745 34.7559 99.3421 32.7323 100.779 28.8065C102.236 24.8604 102.175 20.5906 100.597 15.997Z" fill="white" />
					<path d="M113.922 7.862C116.189 3.41003 119.659 0.951331 124.334 0.485897C129.029 0.000228226 132.782 0.516252 135.595 2.03397C138.428 3.55168 139.369 5.48424 138.418 7.83165C137.467 10.1588 135.646 10.7153 132.954 9.50113C130.283 8.28696 127.521 7.81141 124.668 8.07448C121.814 8.31731 120.398 9.80468 120.418 12.5366C120.459 15.2482 121.784 16.6243 124.395 16.6648C127.005 16.685 129.393 16.7255 131.558 16.7862C133.744 16.8266 134.867 17.8486 134.928 19.852C135.008 21.8553 134.503 23.1505 133.41 23.7373C132.317 24.3039 130.162 24.4759 126.944 24.2533C123.727 24.0307 121.592 24.5872 120.54 25.9228C119.487 27.2382 119.214 28.9077 119.72 30.9313C120.226 32.9549 121.865 34.1185 124.637 34.422C127.43 34.7053 129.737 34.594 131.558 34.0881C133.379 33.562 135.039 32.702 136.536 31.508C138.054 30.3141 139.541 30.1522 140.998 31.0224C142.476 31.8925 142.992 33.3293 142.546 35.3327C142.101 37.3158 140.654 39.0258 138.206 40.4625C135.777 41.8791 132.479 42.6683 128.31 42.8302C124.142 42.9718 120.519 42.2737 117.443 40.7357C114.388 39.1978 112.425 36.2534 111.555 31.9026C110.685 27.5316 112.303 23.6665 116.411 20.3073C112.486 16.4422 111.656 12.2937 113.922 7.862Z" fill="white" />
				</svg>
			</a>

			<?php if (!is_checkout() || is_wc_endpoint_url('order-received')) { ?>

				<nav class="account-and-basket">
					<ul>
						<li><a href="/my-account">
								<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z" />
								</svg>
								Account</a></li>
						<li><a href="/basket">
								<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M22 9h-4.79l-4.39-6.57c-.4-.59-1.27-.59-1.66 0L6.77 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM11.99 4.79L14.8 9H9.18l2.81-4.21zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
								</svg>
								Basket
								<?php if (sizeof(WC()->cart->get_cart()) > 0) {
									echo '<div class="badge">' . WC()->cart->get_cart_contents_count() . '</div>';
								} ?>
							</a></li>
					</ul>
				</nav>

				<div class="search">
					<?php
					get_search_form();
					?>
				</div>
		</div>

		<nav class="nav">
			<div class="inner-wrapper">
				<div class="menu">
					<?php
					get_template_part('components/desktop-menu');
					?>

					<div class="currency-switcher"><?php dynamic_sidebar('currency-switcher'); ?></div>
				</div>
			</div>
		</nav>
	<?php } ?>
	</header>

	<dialog id="mobile-menu" class="mobile-menu">
		<div class="dialog-inner-wrapper">
			<button id="mobile-menu-close-button" class="dialog-close-button">
				<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
					<path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
				</svg>
			</button>

			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home">
				<svg class="logo" viewBox="0 0 1006 413" xmlns="http://www.w3.org/2000/svg">
					<path d="M472.719 315.31C473.718 312.608 476.05 311.202 479.714 311.091C483.378 310.98 485.839 312.22 487.097 314.81L487.208 335.849C492.389 332.666 498.921 331.889 506.804 333.518C514.686 335.146 520.293 340.272 523.624 348.894C526.954 357.517 526.418 366.27 522.014 375.151C517.647 383.996 511.3 388.826 502.973 389.64C494.683 390.454 489.354 389.27 486.986 386.087C485.654 388.826 483.081 390.066 479.27 389.807C475.495 389.585 473.274 388.215 472.608 385.699L472.719 315.31ZM503.528 347.673C498.791 345.971 493.555 346.729 487.818 349.949V371.821C492.074 375.707 496.589 377.002 501.363 375.707C506.174 374.411 509.246 372.006 510.578 368.49C511.948 364.937 512.299 360.996 511.633 356.666C510.967 352.336 508.265 349.339 503.528 347.673ZM575.305 407.57C571.826 410.975 565.924 412.696 557.597 412.733C549.27 412.77 543.127 411.234 539.167 408.125C534.023 405.683 532.339 402.278 534.115 397.911C535.892 393.581 539.259 392.545 544.218 394.803C547.623 397.8 552.194 399.188 557.93 398.966C563.666 398.781 566.22 396.153 565.59 391.083V386.143C560.039 389.029 554.488 390.195 548.937 389.64C543.423 389.085 539.037 386.883 535.781 383.034C532.561 379.185 530.581 374.152 529.841 367.935C529.101 361.718 529.933 356.24 532.339 351.503C534.744 346.729 535.892 342.603 535.781 339.124C535.707 335.646 537.779 333.869 541.998 333.795C546.217 333.721 548.604 335.183 549.159 338.181C549.751 341.141 548.752 345.897 546.161 352.447C543.608 358.961 543.256 364.345 545.107 368.601C546.957 372.857 550.695 375.003 556.32 375.04C561.982 375.077 565.054 373.135 565.535 369.212L565.59 338.736C565.59 335.331 568.07 333.555 573.029 333.407C577.988 333.259 580.542 335.331 580.69 339.624L580.856 395.469C580.634 400.132 578.784 404.166 575.305 407.57ZM667.788 311.035C671.932 311.109 674.208 312.719 674.616 315.865L674.727 385.699C674.06 388.215 671.821 389.585 668.01 389.807C664.235 390.066 661.681 388.826 660.349 386.087C657.981 389.27 652.318 390.454 643.362 389.64C634.444 388.826 628.189 384.403 624.599 376.373C621.01 368.305 620.788 359.553 623.933 350.116C627.116 340.679 632.649 335.146 640.531 333.518C648.414 331.889 654.946 332.666 660.127 335.849L660.238 315.92C661.126 312.59 663.643 310.961 667.788 311.035ZM659.849 349.394C654.113 346.174 648.877 345.416 644.14 347.118C639.403 348.783 636.701 351.781 636.035 356.111C635.369 360.441 635.702 364.382 637.034 367.935C638.403 371.451 641.475 373.856 646.249 375.151C651.06 376.447 655.594 375.151 659.849 371.266V349.394ZM722.078 387.198C716.12 390.343 708.811 391.083 700.151 389.418C691.491 387.753 685.385 383.145 681.832 375.596C678.316 368.009 678.057 359.793 681.055 350.948C684.053 342.066 689.974 336.441 698.819 334.073C707.664 331.667 715.121 331.815 721.19 334.517C727.259 337.181 729.517 340.697 727.962 345.064C726.408 349.394 723.503 350.615 719.247 348.728C714.066 345.656 708.774 344.713 703.371 345.897C698.005 347.081 694.988 349.838 694.322 354.168L713.807 354.113C717.212 354.964 718.895 357.073 718.858 360.441C718.821 363.772 717.082 366.085 713.64 367.38H694.156C695.303 371.525 698.412 374.411 703.482 376.04C708.589 377.631 713.825 376.484 719.192 372.598C724.928 370.414 728.332 371.525 729.406 375.929C730.479 380.296 728.036 384.052 722.078 387.198ZM743.561 335.016C749.815 331.834 756.902 331.26 764.822 333.296C772.779 335.294 776.443 338.107 775.813 341.733C775.184 345.323 773.463 347.229 770.651 347.451C767.838 347.673 764.619 347.063 760.992 345.619C757.365 344.176 754.33 343.935 751.888 344.898C749.482 345.86 748.816 347.414 749.89 349.561C750.963 351.67 753.405 352.947 757.217 353.391C761.029 353.798 764.693 354.538 768.208 355.611C771.724 356.648 774.925 358.776 777.812 361.995C780.736 365.178 781.309 369.785 779.533 375.818C777.793 381.85 773.889 386.05 767.82 388.419C761.751 390.787 754.349 390.658 745.615 388.03C736.918 385.403 732.329 382.238 731.848 378.538C731.367 374.837 732.681 372.431 735.79 371.321C738.898 370.174 742.525 370.896 746.67 373.486C750.852 376.04 754.96 377.131 758.993 376.761C763.064 376.391 765.211 374.855 765.433 372.154C765.655 369.452 762.953 367.75 757.328 367.047C751.74 366.307 746.411 364.604 741.341 361.94C736.271 359.275 733.81 354.927 733.958 348.894C734.143 342.825 737.344 338.199 743.561 335.016ZM785.028 339.069C785.473 334.776 787.989 332.611 792.578 332.574C797.167 332.5 799.758 334.646 800.35 339.013V383.589C799.536 387.919 796.963 390.084 792.634 390.084C788.304 390.084 785.769 387.808 785.028 383.256V339.069ZM784.806 320.084C784.806 313.978 787.545 311.017 793.022 311.202C798.536 311.387 801.256 314.422 801.182 320.306C801.145 326.19 798.407 329.151 792.967 329.188C787.564 329.188 784.843 326.153 784.806 320.084ZM834.989 412.566C827.254 412.529 820.612 410.975 815.06 407.903C812.063 404.795 811.378 401.631 813.006 398.411C814.635 395.228 817.762 394.396 822.388 395.913C829.271 398.577 834.489 399.54 838.042 398.799C841.632 398.059 843.704 396.357 844.26 393.692L844.315 387.919C839.134 391.102 832.602 391.879 824.719 390.251C816.837 388.622 811.23 383.497 807.899 374.874C804.569 366.251 805.087 357.517 809.454 348.672C813.858 339.79 820.204 334.942 828.494 334.128C836.821 333.314 842.169 334.498 844.537 337.681C845.869 334.942 848.423 333.703 852.198 333.962C856.01 334.184 858.248 335.553 858.915 338.07L859.137 391.583C858.989 398.762 856.861 404.055 852.753 407.459C848.645 410.901 842.724 412.603 834.989 412.566ZM828.328 376.706C833.065 378.371 838.301 377.594 844.037 374.374V352.503C839.782 348.617 835.248 347.322 830.437 348.617C825.663 349.912 822.591 352.336 821.222 355.889C819.89 359.405 819.557 363.327 820.223 367.657C820.889 371.987 823.591 375.003 828.328 376.706ZM864.743 339.846C865.521 336.478 868.13 334.776 872.571 334.739C877.048 334.665 879.528 336.182 880.009 339.291C885.56 336.034 891.278 334.498 897.162 334.683C903.083 334.868 907.654 336.7 910.874 340.179C914.13 343.658 916.129 348.506 916.869 354.723C917.609 360.94 916.24 368.305 912.761 376.817C909.282 385.329 907.802 392.305 908.32 397.745C908.838 403.222 906.877 406.127 902.436 406.46C898.032 406.793 895.293 404.055 894.22 398.244C893.184 392.471 894.683 384.866 898.717 375.429C902.787 365.955 903.824 358.961 901.825 354.446C899.827 349.931 895.811 347.655 889.779 347.618C883.784 347.581 880.546 349.524 880.065 353.446L880.009 384.477C880.009 387.882 877.53 389.659 872.571 389.807C867.611 389.955 865.058 387.882 864.91 383.589L864.743 339.846Z" fill="white" />
					<path d="M10.7485 66.1882C3.7388 48.4378 7.30019 36.7361 21.4327 31.0831C35.5652 25.317 46.645 30.8004 54.6723 47.5333L128.274 235.778C132.91 253.528 127.709 264.495 112.672 268.678C97.7481 272.862 87.6857 267.039 82.485 251.211L10.7485 66.1882ZM167.449 40.5801C166.997 29.8394 177.003 20.3989 197.467 12.2586C218.044 4.11831 237.942 4.17484 257.162 12.4282C276.496 20.6816 288.65 35.4359 293.624 56.6911C298.712 77.8333 294.246 98.8625 280.227 119.779L213.408 212.205C207.303 227.694 205.833 239.113 208.999 246.462C210.808 256.977 205.438 264.439 192.888 268.848C180.451 273.37 170.785 269.47 163.888 257.146L83.3329 67.5449C75.6449 50.3598 79.0932 38.7712 93.6779 32.779C108.263 26.7868 120.699 32.0441 130.988 48.5508L185.765 182.188L228.332 127.919C252.753 98.2972 259.706 76.4766 249.192 62.4572C238.677 48.3247 227.823 44.8199 216.63 51.9426C205.551 58.9523 194.697 61.4962 184.069 59.5742C173.442 57.6522 167.902 51.3208 167.449 40.5801ZM312.449 114.691C313.805 101.576 321.494 94.9619 335.513 94.8488C349.532 94.6227 357.447 101.18 359.255 114.521V250.702C356.768 263.93 348.911 270.544 335.683 270.544C322.455 270.544 314.71 263.591 312.449 249.684V114.691ZM311.77 56.6911C311.77 38.0363 320.137 28.9915 336.87 29.5568C353.716 30.1221 362.025 39.393 361.799 57.3695C361.686 75.346 353.32 84.3908 336.7 84.5039C320.193 84.5039 311.883 75.233 311.77 56.6911ZM386.22 49.0596C387.69 35.9447 395.435 29.3307 409.454 29.2176C423.473 28.9915 431.388 35.549 433.197 48.89V250.702C430.709 263.93 422.852 270.544 409.624 270.544C396.396 270.544 388.651 263.591 386.39 249.684L386.22 49.0596ZM596.342 29.048C609.005 29.2741 615.958 34.1922 617.202 43.8023L617.541 257.146C615.506 264.834 608.666 269.018 597.02 269.696C585.488 270.487 577.687 266.7 573.617 258.333C566.381 268.057 549.083 271.674 521.722 269.187C494.475 266.7 475.368 253.189 464.401 228.655C453.434 204.008 452.756 177.269 462.366 148.439C472.089 119.609 488.992 102.707 513.073 97.7319C537.155 92.7572 557.11 95.1315 572.939 104.855L573.278 43.9719C575.991 33.7965 583.679 28.8219 596.342 29.048ZM572.091 146.235C554.566 136.398 538.568 134.081 524.097 139.281C509.625 144.369 501.372 153.527 499.337 166.755C497.302 179.983 498.319 192.024 502.389 202.878C506.572 213.618 515.956 220.967 530.541 224.924C545.239 228.881 559.089 224.924 572.091 213.053V146.235ZM762.201 261.725C743.998 271.335 721.669 273.596 695.213 268.509C668.757 263.421 650.102 249.345 639.248 226.281C628.507 203.104 627.716 178.004 636.874 150.983C646.032 123.849 664.121 106.664 691.143 99.4278C718.164 92.0789 740.946 92.5311 759.487 100.784C778.029 108.925 784.926 119.665 780.177 133.007C775.429 146.235 766.554 149.966 753.552 144.199C737.723 134.815 721.556 131.932 705.049 135.55C688.655 139.168 679.441 147.591 677.406 160.819L736.932 160.65C747.333 163.25 752.478 169.694 752.365 179.983C752.251 190.158 746.938 197.225 736.423 201.182H676.897C680.402 213.844 689.899 222.663 705.388 227.638C720.99 232.499 736.988 228.994 753.382 217.123C770.906 210.453 781.308 213.844 784.587 227.298C787.865 240.64 780.403 252.115 762.201 261.725ZM800.358 109.942C798.776 100.219 805.164 95.1315 819.522 94.6793C833.881 94.227 841.851 97.5057 843.434 104.515C888.997 90.7222 919.58 94.0574 935.182 114.521C950.785 134.872 951.746 158.841 938.065 186.427C932.412 196.037 923.594 202.143 911.609 204.743C921.898 209.039 932.299 219.328 942.814 235.608L968.252 264.947C982.611 279.758 992.334 289.199 997.422 293.269C1002.62 297.452 1005.05 303.388 1004.71 311.076C1004.49 318.877 1001.66 324.53 996.235 328.035C990.921 331.54 984.363 332.67 976.562 331.427C968.874 330.183 958.925 322.495 946.714 308.362L931.791 287.333C916.754 268.113 903.639 252.002 892.446 239C881.253 225.885 865.82 220.854 846.148 223.907V255.959C844 264.552 835.916 268.791 821.896 268.678C807.99 268.678 800.811 262.969 800.358 251.55V109.942ZM903.13 157.597C902.565 135.324 883.005 128.993 844.452 138.603L844.621 181.509C884.192 187.841 903.695 179.87 903.13 157.597Z" fill="white" />
				</svg>
			</a>

			<nav>
				<?php
				get_template_part('components/mobile-menu');
				?>
			</nav>
		</div>
	</dialog>