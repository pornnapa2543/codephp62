<?php
$score = 99;

if( $score >= 80 ){
     echo "A";
}else if( $score >= 70 && $score < 80 ){
     echo "B";
}else if( $score >= 60 && $score < 70 ){
     echo "D";
}else if( $score >= 50 && $score < 60 ){
     echo "D";
}else{
     echo "คุณสอบตก";
}
?>