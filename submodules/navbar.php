
 <section class="navigation">
  <div class="nav-container">
    <div class="brand">
        <img src="images/logo.jpg" width="70" height="50" alt="">
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
      <li>
                    <a class="nitem" href="home.php">Home</a>
                </li>
                <li>
                    <a class="nitem" href="about.php">About Us</a>
                <li>
                <li>
                    <a class="nitem" href="contact.php">Contact Us</a>
                </li>
                <li>
                    <a class="nitem" href="Faq.php">FAQ</a>
                </li>
                <li>
                    <a class="nitem" href="cart.php">Cart</a>
                </li>
                <?php
                    if (isset($_SESSION["uname"])) {
                        echo "<li>";
                        echo "<a class='nitem' href='logout.php'>Logout</a>";
                        echo "</li>";
                    }

                    else {
                        echo "<li>";
                        echo "<a class='nitem' href='login.php'>Login</a>";
                        echo "</li>";
                    }
                ?>
                
      </ul>
    </nav>
  </div>
</section>

<script>
    (function($) { 
  $(function() { 

    //  open and close nav 
    $('#navbar-toggle').click(function() {
      $('nav ul').slideToggle();
    });


    // Hamburger toggle
    $('#navbar-toggle').on('click', function() {
      this.classList.toggle('active');
    });


    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.navbar-dropdown').slideToggle("slow");

      // Close dropdown when select another dropdown
      $('.navbar-dropdown').not($(this).siblings()).hide("slow");
      e.stopPropagation();
    });


    // Click outside the dropdown will remove the dropdown class
    $('html').click(function() {
      $('.navbar-dropdown').hide();
    });
  }); 
})(jQuery); 
</script>


