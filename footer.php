<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Client_2015
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'Client_2015_theme')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'Client_2015_theme'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(esc_html__('Theme: %1$s by %2$s.', 'Client_2015_theme'), 'Client_2015_theme', '<a href="https://plus.google.com/+Jbhuet/about" rel="designer">Jean-Bernard Huet - JBHuet.com</a>'); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
