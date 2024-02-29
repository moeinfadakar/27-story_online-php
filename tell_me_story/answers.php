<?php

include "database.php";
session_start();
$number = $_GET["x"];


//getting information :

$enter_the_story = $db->query("SELECT * FROM `story_line`");
$the_record = $enter_the_story->fetch_assoc();

$all_filed = $db->query("SELECT * FROM `story_line` WHERE story_number");

$the_id_number = $db->query("SELECT * FROM `story_line`");
$the_id = $the_id_number->fetch_assoc();


$all_cols = $db->query("SELECT * FROM `story_line` WHERE story_number = $number ");
$one_single = $all_cols->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="bootstrap.rtl.css" type="text/css" >

</head>
<body>
<div class="container">
<div class="row">

<h2><?php echo "شنگول و منگول و حبه انگور"; ?></h2>

    <form method="post" action="the_process.php">


<br>
        <input class=""  name="number" type="hidden" value="<?php echo $number ?>">

<?php foreach ($all_cols as $all_col) :  ?>


    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answer" value="<?php echo $all_col["id"]; ?>" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1"> <li class="list-group-item"> <?php echo $all_col["id"]; ?> <?php echo $all_col["text"] ;?> </li> </label>
    </div>
<br>

<?php endforeach; ?>

        <br><br>

<button class="btn btn-dark" type="submit"> بعدی</button>

</form>


</div>
</div>


<script src="bootstrap.bundle.js"></script>
</body>
</html>







