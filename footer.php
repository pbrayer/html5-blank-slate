<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer" role="contentinfo">


<div class = "grid-x">
<div class = "medium-6 cell">
<ul class = "menu align-center" role = "navigation">
  <nav class="nav-footer-wrap" role="navigation">
  <?php h5bs_footer_nav(); ?>
  </nav>
</ul>
  <!-- <?php get_template_part( 'parts/icons', 'social' ); ?> -->
</div>

<div class = "medium-6 cell">
  <br>
  <p class="copyright">&copy; <?= date( 'Y' ); ?> <?= get_bloginfo( 'name' ); ?></p>
</div>
</div>
</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
  $analytics_id = get_option( 'client_google_analytics' ); ?>

  <!-- Google Universal Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', '<?= $analytics_id; ?>', 'auto');ga('send', 'pageview');
  </script>
<?php endif; ?>

</body>
</html>
