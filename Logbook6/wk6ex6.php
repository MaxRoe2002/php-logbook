<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	//echo "I pay £ " . calculatetax(13250,22) . " tax";
    //echo "I pay £ " . calculatetax(13250) . " tax";
    echo "I pay £ " . calculatetax(13250, 22, 4800) . " tax";
    
	html_footer();
?>
