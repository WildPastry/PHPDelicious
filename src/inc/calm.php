<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PHP Delicious</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
  <div class="container">
  
  <?php
  echo "<h1 id='grabMe'>Delicious</h1>"."<br>";
  ?>
  <?php
    echo "<h2>My strings</h2>";

$myString = "This is my string";
echo($myString)."<br>";
$myStringRev = strrev ($myString);
echo ($myStringRev)."<br>";

function Palindrome($string){   
  if (strrev($string) == $string){   
      return 1;   
  } 
  else{ 
      return 0; 
  } 
}   

echo "<h2 class='mar'>Testing my strings</h2>";

if(Palindrome($myStringRev)){   
  echo ($myString). " = Palindrome"."<br>";  
}  
else {   
echo ($myString). " = Not a Palindrome"."<br>";   
} 

if(Palindrome($myString)){   
  echo ($myStringRev). " = Palindrome"."<br>"; 
}  
else {   
echo ($myStringRev). " = Not a Palindrome"."<br>";  
} 

echo "<h2 class='mar'>My array</h2>";

$myArray = array("34", "65", "77", "41");
foreach($myArray as $myArrayMap) {
  if ($myArrayMap >= 50){
    echo $myArrayMap. "&nbsp;". "PASS";
    echo "<br>";
  } else {
    echo $myArrayMap. "&nbsp;". "FAIL";
    echo "<br>";
  }

}
  ?> 
// PHP VARIABLES
$hello = "Hello World";
$_hello = "hello with underscore";
$number = 10;
$boolean = false;

// PHP ARRAY
$array = array(10,20,30,40);

// PHP ECHO & PHP PRINT
echo "Hello";
echo("Hello with Brackets");
echo $_hello;
print("This is using Print");
print "this is from print with no brackets";

// PHP VAR_DUMP (PRODUCTION TOOL)
var_dump("This is from a Var Dump");
var_dump($array); 
?>

<!-- DIFFERENT PHP WRITING STYLES -->
<!-- 1 -->
        <h1 class="heading_1 <?php echo "mar"; ?>">
        This is running from a PHP file</h1>
        <i class="fab fa-accessible-icon"></i>

<!-- 2 -->
        <?php echo "<h2>This is from an echo</h2>"; ?>

<!-- 3 -->
        <h2><?php
        $newVar = "newvar";
        echo $newVar; ?>
        </h2>

<!-- 4 -->
        <h3><?= "this is from the shortcode"; ?></h3>

<!-- VARIABLE OF AN ARRAY -->
        <?php
            $scores = array(0,58,85,89,100,45,54,80,0 ,0);
         ?>

         <!-- DISPLAYING THE LENGTH OF THE ARRAY-->
         <h2>The total number of people are <?= count($scores); ?></h2>
         <ul>

         <!-- DISPLAYING THE RESULTS IN THE ARRAY -->
             <?php foreach($scores as $score): ?>
                 <li>This person got <?= $score; ?></li>
             <?php endforeach; ?>
         </ul>

         <!-- FINDING THE TOTAL FROM THE ARRAY -->
         <?php
            $totalScore = 0;
            foreach($scores as $score){
                $totalScore += $score;
            }
            $averageScore = $totalScore / count($scores);
          ?>

          <!-- DISPLAYING TOTAL RESULTS -->
          <h3>The average score is <?= $averageScore; ?></h3>
          <?php if($averageScore > 50): ?>
              <h1>The class has passed</h1>
          <?php else: ?>
              <p>The class has failed</p>
          <?php endif; ?>

          <?php
            if($averageScore > 50){
                echo "<p>The class has passed</p>";
            } else {
                echo "<p>The class has failed</p>";
            }
           ?>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  </body>
</html>