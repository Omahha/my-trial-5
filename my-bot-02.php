<?php
session_start();
if(!isset($_SESSION["message"])){
    echo "reply text: ".$_SESSION["message"];
}