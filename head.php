<?php

if(!$page_title) {
  $page_title = "Default title";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: black;
      color: white;
    }

    a {
      text-decoration: none;
      color: inherit;
      font-size: 30px;
    }

    li {
      list-style: none;
      display: flex;
    }


  </style>
