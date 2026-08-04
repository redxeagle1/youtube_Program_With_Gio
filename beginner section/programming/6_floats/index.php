<?php
$random_sample = 13.5e5;
$max_float = PHP_FLOAT_MAX;
echo "$max_float<br>";
echo is_finite( $max_float ) ;
echo is_infinite( $max_float ) ;
echo is_nan( $max_float ) ;
echo '<br>' . $random_sample ;