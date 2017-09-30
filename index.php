<!-- Test -->
<!DOCTYPE HTML>

<html>
  <head><title> Wordpress </title></head>
  <body>
    <form action="process.php" method="post">
      Enter your name: <input name="name" type = "text">
      <input type = "submit">
    </form>
    <br>

    <?php
      $people = array("Bob", "Chris", "Alex");

      $numbers = array(5, 3, 7);
      $sum = 0;


      sort($people);
      // sort($people, SORT_STRING);
      foreach ($people as $person) {
        echo $person . ' ';
      }

      // for loop adding numbers
      // foreach ($numbers as $number) {
      //   $sum = $sum + $number;
      // }
      //
      // echo $sum;

      sort($numbers, SORT_NUMERIC);
      echo "<br>";
      echo "<br>";
      foreach ($numbers as $number) {
        echo $number . ', ';
      }

// Arrays
      // $people = array("Alice", "Bob", "Chris");
      // print_r ($people);
      // echo $people[2];
// define variables, sums, concatenation
    // $myvar = "This is a variable";
    // $number = 5;
    // $number2 = 3;
    // $name = "Rose";
    // $sum = $number + $number2;
    // echo $sum;
    // echo "Hello, " . $name . "!";
    // echo "<p><b>hello</b></p>";
    // echo "<p>hello2</p>";
// if/else statements
    // $loggedIn = false;
    // if ($loggedIn == true) {
    //   echo "You are logged in";
    // } else {
    //   echo "Please log in";
    // }

// what came with WordPress, but shows an error: "Error establishing a database connection"
    // /**
    //  * Front to the WordPress application. This file doesn't do anything, but loads
    //  * wp-blog-header.php which does and tells WordPress to load the theme.
    //  *
    //  * @package WordPress
    //  */
    //
    // /**
    //  * Tells WordPress to load the WordPress theme and output it.
    //  *
    //  * @var bool
    //  */
    // define('WP_USE_THEMES', true);
    //
    // /** Loads the WordPress Environment and Template */
    // require( dirname( __FILE__ ) . '/wp-blog-header.php' );
    ?>

  </body>
</html>
