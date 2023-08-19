<?php
//collect values from the QUERY STRING
//file_name.php?a=20&b=30&c=25&action=calculate
if(isset($_GET['a'])){
    $a = $_GET['a'];
}
if(isset($_GET['b'])){
    $b = $_GET['b'];
}
if(isset($_GET['c'])){
    $c = $_GET['c'];
}

echo "($a, $b, $c)";

//check if the value of a is zero, no quadaratic equation formed
if($a == 0){
    //stop everything
    echo "No quadratic equation formed";
    
    //exit(225);
    die("This is a dead end!");
}
else{
    /// ALL IS WELL
    // calculate the discriminant
    $disc = pow($b, 2)  - 4 * $a *$c;
    if($disc == 0){
        echo "<br > The roots are real and equal";
        $root = - $b / (2 * $a);
        echo "<br /> The roots are  ($root, $root)";
    }else if($disc > 0){
        /// roots are real but unequal 
        $root1 = (-$b + sqrt($disc)) / (2 * $a);
        $root2 = (-$b - sqrt($disc)) / (2 * $a);
        
        echo "<br /> The roots are  ($root1, $root2)";
    }else{
        echo "<br /> The Roots are imaginary";
    }
}///outer else ends
?>
<a href="<?php echo $_SERVER['PHP_SELF'] . '?a=20&b=30&c=25&action=calculate'; ?>" title="Solve Quadratic Equation" >SOLVE </a>