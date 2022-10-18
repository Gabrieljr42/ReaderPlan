<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
   
</div>
<div class="row">
 <?php $day = getdate()['yday'];
 getDay($day);
 ?>
  
</div>
</body>
</html>


<?php

function getDay($day){
switch($day){
  case '291':
    echo ' <div class="example-1 card">
    <div class="wrapper">
      <div class="date">
        <span class="day">01</span>
        <span class="month">Jan</span>
        <span class="year">2023</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Moisês</span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/gn/1">Gênesis 1 a 2</a></h1>
          <p class="text">No princípio Deus criou os céus e a terra. Era a terra sem forma e vazia; trevas cobriam a face do abismo, e o Espírito de Deus se movia sobre a face das águas. Gênesis 1:1,2</p>
          <label for="show-menu" class="menu-button"><span></span></label>
        </div>
        <input type="checkbox" id="show-menu" />
        <ul class="menu-content">
          <li>
            <a href="#" class="fa fa-bookmark-o"></a>
          </li>
          <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
          <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
        </ul>
      </div>
    </div>
  </div>';
  echo ' <div class="example-1 card">
    <div class="wrapper">
      <div class="date">
        <span class="day">01</span>
        <span class="month">Jan</span>
        <span class="year">2023</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Moisês</span>
          <h1 class="title"><a href="#">Gênesis 1 a 2</a></h1>
          <p class="text">No princípio Deus criou os céus e a terra. Era a terra sem forma e vazia; trevas cobriam a face do abismo, e o Espírito de Deus se movia sobre a face das águas. Gênesis 1:1,2</p>
          <label for="show-menu" class="menu-button"><span></span></label>
        </div>
        <input type="checkbox" id="show-menu" />
        <ul class="menu-content">
          <li>
            <a href="#" class="fa fa-bookmark-o"></a>
          </li>
          <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
          <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
        </ul>
      </div>
    </div>
  </div>';
    break;
  }
}

?>