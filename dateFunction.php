<!-- HIDAYU 1912604 -->
<?php
    //create function with date input to convert its format for user's better view 
    function formatDate($bdate){
        
        $dateFormatted =date("d M Y", strtotime($bdate));
    
        return $dateFormatted;
    }

  
 ?>
