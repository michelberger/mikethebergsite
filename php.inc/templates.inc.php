<?php 
// This file will include functions that will complete HTML and JS forms based on serverside info


// Places header information based on given values
function pageHead($title, $keywords, $description) {
   $title = htmlspecialchars($title);
   $keywords = htmlspecialchars($keywords);
   $description = htmlspecialchars($description);
   
   echo '<title>'.$title.'</title><meta type="keywords" content="'.$keywords.'"><meta type="description" content="'.$description.'">';
}

?>