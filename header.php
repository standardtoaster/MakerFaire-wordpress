<!DOCTYPE html>
<!--[if lte IE 7]><html class="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 7)|!(IE)]><! --><html <?php language_attributes(); ?>><!-- <![endif]-->
<head>
	<meta charset="utf-8" />
	<!-- http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />

    <!-- don't allow IE9 to render the site in compatibility mode. Dude. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png"/>
    <!-- This is the traditional favicon.
             - size: 16x16 or 32x32 -->
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/custom_icon.png"/>
    <!-- The is the icon for iOS's Web Clip.
             - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
             - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
             - Transparency is not recommended (iOS will put a black BG behind the icon) -->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie.css"/>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="body">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('header-widget-area') ) : else : ?>
        <?php endif; ?>
	</header>
	<nav class="body">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('nav-widget-area') ) : else : ?>
        <?php endif; ?>
	</nav>
