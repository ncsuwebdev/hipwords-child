<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hipwords
 */
?>

<!-- #content -->
</div>

<div class="footer container">

	<div class="col-md-4">
		<?php if (!dynamic_sidebar('footer-widget-1')) : ?>
		<h1 class="widget-title"><?php _e('Footer Widget 1', 'hipwords'); ?></h1>
		<div class="textwidget"><p><?php _e('This is your first footer widget box. To edit go to Appearance > Widgets and choose Footer Widget 1.','hipwords'); ?></p></div>
		<?php endif; //end of footer-widget-1 ?>
	</div>

	<div class="col-md-4">
		<?php if (!dynamic_sidebar('footer-widget-2')) : ?>
		<h1 class="widget-title"><?php _e('Footer Widget 2', 'hipwords'); ?></h1>
		<div class="textwidget"><p><?php _e('This is your first footer widget box. To edit go to Appearance > Widgets and choose Footer Widget 2.','hipwords'); ?></p></div>
		<?php endif; //end of footer-widget-2 ?>
	</div>

	<div class="col-md-4">
		<?php if (!dynamic_sidebar('footer-widget-3')) : ?>
		<h1 class="widget-title"><?php _e('Footer Widget 3', 'hipwords'); ?></h1>
		<div class="textwidget"><p><?php _e('This is your first footer widget box. To edit go to Appearance > Widgets and choose Footer Widget 3.','hipwords'); ?></p></div>
		<?php endif; //end of footer-widget-3 ?>
	</div>

</div> <!-- end container -->

<footer id="colophon" class="container text-center" role="contentinfo">
&copy;UNC CAUSE | UNIVERSITY OF NORTH CAROLINA COLLEGE AND UNIVERSITY SYSTEMS EXCHANGE
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
