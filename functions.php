

    <?php
    //This is to test some functions and homework
    // Get a partial string from within your own name
    // and print it to the screen!
    $myname = ("Carlos");
    
    $partial = substr($myname, 0, 3);
    print $partial;
    print $myname;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $uppercase = strtoupper("Carlos");
    print $uppercase;
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $lowercase = strtolower("Carlos");
    print $lowercase;
    ?>
  </p>
<?php
//Testing functions addcslashes and addslashes

$str = "Carlos Antonius Medina Baltodanus";
echo $str." <br>";
echo addcslashes ($str_myname, 'n'). "<br>";
echo addcslashes ($str_myname, 'a'). "<br>";

echo addslashes ($str_myname). "<br>";
?>








