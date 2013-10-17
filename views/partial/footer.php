<?php
if (!isset($config_loaded)) {
  $path = pathinfo($_SERVER['SCRIPT_FILENAME']);
  require($path['dirname'] . '/config.php');
}
?>

</div><!--/span-->
</div><!--/row-->
<hr>

<footer>
	<p>&copy; HIMSI UIN JAKARTA 2013</p>
</footer>

</div><!--/.fluid-container-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/jquery.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/bootstrap-typeahead.js"></script>

</body>
</html>
