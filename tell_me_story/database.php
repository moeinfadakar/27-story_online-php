<?php
 
 $db = NEW mysqli("localhost","root","","tell_me_story");

if ($db->connect_error){

echo " something went wrong!";
echo "$db->connect_error";

}else{


}

?>