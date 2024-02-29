<?php

include "database.php";


$add = $_POST["number"];
$javab = $_POST["answer"];

$the_con = $db->query("SELECT * FROM `story_line` WHERE id = $javab AND story_number = $add AND con = 1");
$the_correct_answer = $the_con->fetch_assoc();

$shep_alive = $db->query("SELECT * FROM `story_line` WHERE id = $javab AND story_number = $add AND con = 4");
$alive_shep = $the_con->fetch_assoc();


$add++;

if ($the_correct_answer["id"] == $javab)
{
echo "doost darm";
header("location: answers.php?x=$add");


}elseif ($alive_shep["id"] == $javab){
    echo "khili khobe nbood";
    header("location: END2.php");
}else{
    header("location: end_of_story.php");
}











//if ($javab = $the_con ){
//    echo "yess";
//
//
//
//}else{
//    echo "noooo";
//
//
//
//}







//

?>


