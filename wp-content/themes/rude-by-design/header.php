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

	<?php wp_head(); ?>
</head>

<?php if (!file_exists('c:\windows')) { ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZLPMWB8YG"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-WZLPMWB8YG');
	</script>
<?php } ?>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="inner-wrapper">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home">
				<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143 83">
					<path d="M3.325 52.276c.314-.848 1.046-1.29 2.196-1.325 1.15-.035 1.923.355 2.318 1.168l.035 6.605c1.627-.999 3.677-1.243 6.152-.732 2.475.511 4.235 2.12 5.28 4.828 1.046 2.707.878 5.455-.505 8.243-1.37 2.777-3.363 4.293-5.977 4.549-2.603.255-4.276-.116-5.02-1.116-.418.86-1.225 1.25-2.422 1.168-1.185-.07-1.882-.5-2.092-1.29l.035-22.098Zm9.673 10.16c-1.487-.534-3.131-.296-4.932.715v6.866c1.336 1.22 2.753 1.627 4.252 1.22 1.51-.406 2.475-1.161 2.893-2.265.43-1.116.54-2.353.331-3.712-.209-1.36-1.057-2.3-2.544-2.824ZM35.532 81.24c-1.092 1.07-2.945 1.61-5.56 1.622-2.614.011-4.542-.47-5.786-1.447-1.615-.767-2.143-1.836-1.585-3.207.557-1.359 1.614-1.684 3.171-.975 1.07.94 2.504 1.376 4.305 1.306 1.8-.058 2.602-.883 2.405-2.474v-1.551c-1.743.906-3.485 1.272-5.228 1.098-1.732-.175-3.108-.866-4.13-2.074-1.011-1.209-1.633-2.789-1.865-4.74-.233-1.953.029-3.672.784-5.16.755-1.498 1.115-2.794 1.08-3.886-.023-1.092.628-1.65 1.952-1.673 1.325-.023 2.074.436 2.248 1.377.186.93-.127 2.423-.94 4.48-.802 2.044-.913 3.734-.332 5.07.581 1.337 1.755 2.01 3.52 2.022 1.778.012 2.742-.598 2.894-1.83l.017-9.568c0-1.069.779-1.626 2.335-1.673 1.557-.046 2.359.605 2.405 1.952l.053 17.533c-.07 1.464-.651 2.73-1.743 3.799ZM64.567 50.934c1.3.023 2.015.529 2.143 1.516l.035 21.924c-.21.79-.912 1.22-2.109 1.29-1.185.081-1.986-.308-2.405-1.168-.743 1-2.521 1.371-5.333 1.116-2.8-.256-4.763-1.644-5.89-4.166-1.127-2.532-1.197-5.28-.21-8.243 1-2.963 2.737-4.7 5.212-5.21 2.474-.512 4.525-.268 6.151.731l.035-6.256c.28-1.046 1.07-1.557 2.37-1.534Zm-2.493 12.043c-1.8-1.011-3.444-1.25-4.932-.715-1.487.523-2.335 1.464-2.544 2.823-.21 1.36-.105 2.597.314 3.712.43 1.104 1.394 1.86 2.893 2.266 1.51.407 2.933 0 4.27-1.22v-6.867ZM81.61 74.845c-1.87.987-4.164 1.22-6.883.697-2.719-.523-4.636-1.97-5.751-4.34-1.104-2.381-1.185-4.96-.244-7.737.94-2.789 2.8-4.555 5.577-5.299 2.776-.755 5.118-.708 7.023.14 1.906.836 2.614 1.94 2.126 3.311-.488 1.36-1.4 1.743-2.736 1.15-1.626-.964-3.288-1.26-4.984-.888-1.685.371-2.632 1.237-2.841 2.596l6.117-.017c1.07.267 1.598.93 1.586 1.987-.011 1.045-.558 1.772-1.638 2.178h-6.117c.36 1.301 1.336 2.208 2.928 2.719 1.603.5 3.247.14 4.932-1.08 1.8-.686 2.87-.338 3.206 1.045.337 1.371-.43 2.55-2.3 3.538ZM88.355 58.463c1.964-1 4.189-1.18 6.675-.54 2.498.627 3.648 1.51 3.451 2.648-.197 1.128-.738 1.726-1.62 1.796-.884.07-1.895-.122-3.033-.575-1.139-.454-2.092-.53-2.858-.227-.756.302-.965.79-.628 1.464.337.662 1.104 1.063 2.3 1.202 1.197.128 2.348.36 3.451.698 1.104.325 2.11.993 3.015 2.004.918.999 1.098 2.445.54 4.34-.545 1.893-1.771 3.212-3.677 3.955-1.905.744-4.229.703-6.97-.122-2.731-.825-4.172-1.818-4.323-2.98-.15-1.162.262-1.917 1.238-2.266.975-.36 2.114-.133 3.415.68 1.313.802 2.603 1.145 3.87 1.028 1.277-.116 1.951-.598 2.021-1.446.07-.848-.778-1.383-2.544-1.603a14.926 14.926 0 0 1-5.02-1.604c-1.591-.836-2.364-2.202-2.318-4.095.058-1.906 1.063-3.358 3.015-4.357ZM101.374 59.735c.139-1.348.929-2.027 2.37-2.04 1.441-.022 2.254.652 2.44 2.023v13.994c-.256 1.36-1.063 2.04-2.422 2.04-1.36 0-2.156-.715-2.388-2.144V59.735Zm-.07-5.96c0-1.917.86-2.847 2.58-2.789 1.731.058 2.585 1.011 2.561 2.858-.011 1.848-.871 2.777-2.579 2.789-1.696 0-2.55-.953-2.562-2.858ZM117.059 82.81c-2.428-.012-4.514-.5-6.257-1.465-.941-.975-1.156-1.969-.644-2.98.511-.999 1.493-1.26 2.945-.784 2.161.837 3.799 1.139 4.915.906 1.127-.232 1.777-.767 1.951-1.603l.018-1.813c-1.627 1-3.677 1.244-6.152.732-2.475-.51-4.235-2.12-5.281-4.827-1.045-2.707-.883-5.45.488-8.226 1.383-2.788 3.375-4.31 5.978-4.566 2.614-.256 4.293.116 5.037 1.115.418-.86 1.22-1.249 2.405-1.167 1.196.07 1.899.5 2.108 1.29l.07 16.8c-.046 2.254-.714 3.915-2.004 4.984-1.29 1.08-3.149 1.615-5.577 1.603Zm-2.091-11.259c1.487.523 3.131.279 4.932-.732v-6.867c-1.336-1.22-2.76-1.626-4.27-1.22-1.499.407-2.463 1.168-2.893 2.284-.418 1.103-.523 2.335-.314 3.694.209 1.36 1.057 2.307 2.545 2.841ZM126.4 59.979c.244-1.057 1.063-1.592 2.458-1.603 1.405-.024 2.184.453 2.335 1.429 1.743-1.023 3.538-1.505 5.385-1.447 1.859.058 3.294.633 4.305 1.726 1.022 1.092 1.65 2.614 1.882 4.566.232 1.951-.198 4.264-1.29 6.936-1.092 2.672-1.557 4.862-1.394 6.57.163 1.72-.453 2.632-1.847 2.736-1.383.105-2.243-.755-2.58-2.579-.325-1.813.146-4.2 1.412-7.163 1.278-2.974 1.603-5.17.976-6.588-.627-1.417-1.888-2.131-3.782-2.143-1.882-.012-2.899.598-3.05 1.83l-.017 9.742c0 1.069-.779 1.627-2.335 1.673-1.557.046-2.359-.604-2.405-1.952L126.4 59.98ZM3.22 8.773C1.136 8.793.063 7.447.003 4.736-.058 2.023.973.657 3.099.638l8.59.06c9.35-1.153 15.268.152 17.757 3.916 2.51 3.764 3.046 7.558 1.609 11.383-1.437 3.825-3.38 6.172-5.828 7.042 2.145.405 3.906 2.398 5.282 5.98 3.865 8.58 6.212 13.538 7.042 14.874a9.428 9.428 0 0 0 3.37 3.187c1.416.81 2.043 1.922 1.881 3.339-.142 1.437-.698 2.479-1.67 3.126-.95.648-2.124.86-3.52.638-1.377-.223-2.702-1.002-3.977-2.338-1.255-1.335-3.055-4.765-5.403-10.29-2.347-5.524-4.22-9.359-5.616-11.504-1.396-2.165-4.28-3.197-8.65-3.096v13.174c-.385 2.003-1.832 2.995-4.341 2.974-2.49 0-3.774-1.052-3.855-3.157V8.742l-2.55.03Zm20.55 4.887c.162-4.068-3.207-5.717-10.108-4.948l.03 9.926c6.557.728 9.916-.931 10.078-4.978Z" />
					<path d="M71.426 42.709c-.688.587-2.104.83-4.25.728-2.124-.08-4.057-1.861-5.797-5.342-3.521 3.4-7.255 5.049-11.2 4.948-3.927-.102-7.235-1.508-9.927-4.22-2.67-2.731-3.976-5.929-3.915-9.592.06-3.683.516-6.779 1.366-9.288.87-2.53 1.507-4.948 1.912-7.255.405-2.327.283-4.735-.364-7.224-.648-2.489-.02-4.118 1.882-4.887 1.902-.769 3.46-.496 4.674.82 1.235 1.315 1.963 3.47 2.186 6.465.222 2.975-.274 6.384-1.488 10.23-1.214 3.824-1.436 7.588-.667 11.291.789 3.683 3.197 5.494 7.224 5.434 4.047-.081 6.728-2.206 8.044-6.375l-.03-24.465c0-2.672 1.477-3.997 4.431-3.977 2.955.02 4.483 1.336 4.584 3.946v29.9c-.081 1.477.354 2.55 1.305 3.217.971.668 1.386 1.629 1.244 2.883-.121 1.235-.526 2.156-1.214 2.763ZM73.976 4.19c-.04-2.814 2.226-4.109 6.8-3.886l9.804-.06c5.524.08 9.905 1.911 13.143 5.493 3.238 3.562 5.11 7.548 5.616 11.96.506 4.391.283 8.378-.668 11.96-.951 3.581-2.803 6.728-5.555 9.44-2.732 2.711-6.728 3.986-11.99 3.824l-11.474.061c-3.683.101-5.514-1.174-5.494-3.825.04-2.67 1.65-4.027 4.826-4.067l.061-26.257c-3.319-.303-5.008-1.851-5.069-4.644Zm26.621 11.807c-1.558-4.614-4.24-6.982-8.044-7.103l-5.312-.03.03 26.013h6.405c3.299-.121 5.666-2.145 7.103-6.07 1.457-3.947 1.396-8.216-.182-12.81ZM113.922 7.862c2.267-4.452 5.737-6.91 10.412-7.376 4.695-.486 8.448.03 11.261 1.548 2.833 1.518 3.774 3.45 2.823 5.798-.951 2.327-2.772 2.883-5.464 1.67-2.671-1.215-5.433-1.69-8.286-1.428-2.854.243-4.27 1.73-4.25 4.463.041 2.711 1.366 4.087 3.977 4.128 2.61.02 4.998.06 7.163.121 2.186.04 3.309 1.063 3.37 3.066.08 2.003-.425 3.299-1.518 3.885-1.093.567-3.248.739-6.466.516-3.217-.222-5.352.334-6.404 1.67-1.053 1.315-1.326 2.985-.82 5.008.506 2.024 2.145 3.187 4.917 3.491 2.793.283 5.1.172 6.921-.334a14.26 14.26 0 0 0 4.978-2.58c1.518-1.194 3.005-1.356 4.462-.486 1.478.87 1.994 2.307 1.548 4.31-.445 1.984-1.892 3.694-4.34 5.13-2.429 1.417-5.727 2.206-9.896 2.368-4.168.142-7.791-.556-10.867-2.094-3.055-1.538-5.018-4.483-5.888-8.833-.87-4.371.748-8.236 4.856-11.596-3.925-3.865-4.755-8.013-2.489-12.445Z" />
				</svg>
			</a>

			<?php if (!is_checkout() || is_wc_endpoint_url('order-received')) { ?>

				<nav class="account-and-basket">
					<div class="menu">
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
					</div>
				</nav>

				<div class="search">
					<?php
					get_search_form();
					?>
				</div>

				<nav class="nav">
					<div class="menu">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/product-category/mugs/">Mugs</a></li>
							<li><a href="/product-category/coasters/">Coasters</a></li>
						</ul>
					</div>

					<div class="currency-switcher">Currency<?php dynamic_sidebar('currency-switcher'); ?></div>

				</nav>
		</div>
	<?php } ?>
	</header>

	<?php
	if (is_home() || is_front_page()) {
	?>
		<div class="banner-wrapper">
			<div class="inner-wrapper"><?php get_template_part('components/banner'); ?></div>
		</div>
	<?php
	}
	?>