<!-- Amirul 1914119 -->
<?php
    function minDate()
    {
        return date('Y-m-d');
    }

    function maxDate()
    {
        $curDate=date('Y-m-d');
        $maxDate=date('Y-m-d', strtotime($curDate. '+10 days'));
        return $maxDate;
    }
?>