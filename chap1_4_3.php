<?php
$msg = "ハロー";
$price = 150;
var_dump( $msg );
var_dump( $price );
var_dump( $msg . $price );

var_dump( "数値を入力せよ" );
$value = trim( fgets( STDIN ) );
var_dump( $value );
var_dump( $value + 10 );

var_dump( "ハロー", 10, 2.5 );
?>
