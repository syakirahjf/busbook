<!-- HIDAYU 1912604 -->
<?php
    //create function with date input to convert its format
    function formatDate($bdate){
        
        $dateFormatted =date("d M Y", strtotime($bdate));
    
        return $dateFormatted;
    }

  
 ?>
