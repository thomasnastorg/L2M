<?php
$user = "MDL";
$mdp = "LNfqq93fT";

$dbh = new PDO("mysql:host=tnastorg.ovh;dbname=MDeuxL",$user,$mdp);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);