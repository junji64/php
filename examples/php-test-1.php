<?php

$x  = 4;
function assignx () { 
   $x = 0;
   print "\$x inside function is $x. <br>";
} 
assignx();
print "\$x outside of function is $x. <br>";

?>
<?php
  increment ();
  increment ();
  increment ();
  function increment () {
      $a=0;
      echo $a;
      $a++;
  }
?>

<?php
  $ilike = "Rock";
  function music (){
      global $ilike;
      echo "I love listening to $ilike music!", "\n";
  }
  music ();
?>

<?php
$num_of_calls = 0;
function andAnotherThing( $txt ){
    global $num_of_calls;

    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherThing("A");
print("Called<p>");
andAnotherThing("B");
print("Called again<p>");
 ?>
 
 <?php

function birthday(  ){
    static $age = 0;

    $age = $age + 1;

    echo "Birthday number $age<br />";
}

$age = 30;

birthday(  );
birthday(  );

echo "Age: $age<br />";

?>