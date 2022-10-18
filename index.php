<?php 
//CREDIT | BOSSNZ
include 'uidfreefire.class.php';
//key antirecaptcha ไปหาซื้อกันเองนะครัชชช
$token_antirecaptcha = "";
$topup = New topup_freefire($token_antirecaptcha);
$uid = ''; //uid platform
//login ด้วย uid freefire ก่อน
print_r($topup->login_freefire($uid));
//login เสร็จแล้วจะได้open_idไว้เติมฟรีฟายด้วยบัตรการีน่า
$open_id = ''; //open id after login
$garenacard = ''; //garena card
print_r($topup->topup_garenacard($open_id,$garenacard));
