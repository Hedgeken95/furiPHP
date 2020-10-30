<?php
$msg = "ハロー";
var_dump( $msg );

$value = 100;
$sale = $value * 0.7;
var_dump( $sale );

$value = 150;
$sale = $value * 0.7;
var_dump( $sale );

var_dump( "入力してください" );
$msg = trim( fgets( STDIN ) );
var_dump( "入力結果:" . $msg );
?>