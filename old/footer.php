<footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>&copy; 2025. All Rights Reserved. 
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- SmoothScroll -->           
    <script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/waypoints.min.js"></script>
    <!-- classie.js -->
	<script src="js/classie.js"></script>
    <!-- FlexSlider -->
    <script src="assets/flexslider/jquery.flexslider.js"></script>
	<!-- Modernizr -->
    <script src="js/modernizr.js"></script>
	<!-- Text Rotator -->
	<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
	<!-- Lightbox.js -->
    <script src="assets/lightbox/js/lightbox.min.js"></script>
	<!-- Theme JavaScript Core -->
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
    <script>
(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script> 
	
	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script> 