<?php
    $page = "Home";
    $desc = "PHP practice - Home";
    require("inc/header.php");
 ?>
 
<?php
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

<?php
    require("inc/footer.php");
 ?>