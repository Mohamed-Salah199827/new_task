<!-- start php  -->
<?php



//! echo
// echo "<h1>mohamed</h1>";
//! make variable use : $variableName
$varName = "";
//! data type  (integer boolean string array object) 
// number
$int = 22;
$float = 2.9;
// boolean
$bool = true;
// text string
$myName = "mohamed";
// print_r
//! indexed array 

$arr = ["mohamed", "salah"];
print_r($arr);
//! associative array 
$data = ["fName" => "mohamed", "lName" => "salah"];
//! if contains
//  or (||) and (&&)
if ($data["fName"] == "mohamed") {
    echo "mohamed";
} elseif ($data["fName"] == "ahmed") {
    echo "ahmed";
} else {
    echo false;
}




?>