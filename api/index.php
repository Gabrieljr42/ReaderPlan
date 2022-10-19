<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  background-image: -webkit-gradient(linear, left top, right top, from(#034378), to(#2d4e68));
  background-image: linear-gradient(to right, #034378, #2d4e68);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height: 100vh;
  font-family: "Open Sans", sans-serif;
}

a {
  text-decoration: none;
}

h1 {
  font-family: "Open Sans", sans-serif;
  font-weight: 301;
}

.row {
  max-width: 900px;
  margin: 50px auto 0;
}

.card {
  float: left;
  padding: 0 1.7rem;
  width: 48%;
  min-width: 400px;
}

.card .menu-content {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.card .menu-content::before, .card .menu-content::after {
  content: '';
  display: table;
}

.card .menu-content::after {
  clear: both;
}

.card .menu-content li {
  display: inline-block;
}

.card .menu-content a {
  color: #fff;
}

.card .menu-content span {
  position: absolute;
  left: 50%;
  top: 0;
  font-size: 10px;
  font-weight: 700;
  font-family: 'Open Sans';
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}

.card .wrapper {
  background-color: #fff;
  min-height: 600px;
  position: relative;
  overflow: hidden;
  -webkit-box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);
          box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);
}

.card .wrapper:hover .data {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.card .data {
  position: absolute;
  bottom: 0;
  width: 100%;
  -webkit-transform: translateY(calc(330px + 1em));
          transform: translateY(calc(330px + 1em));
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
}

.card .data .content {
  padding: 1em;
  position: relative;
  z-index: 1;
  height: 500px;
}

.card .author {
  font-size: 12px;
}

.card .title {
  margin-top: 10px;
}

.card .text {
  height: 70px;
  margin: 0;
}

.card input[type='checkbox'] {
  display: none;
}

.card input[type='checkbox']:checked + .menu-content {
  -webkit-transform: translateY(-60px);
          transform: translateY(-60px);
}

.example-1 .wrapper {
  background: url(https://images.pexels.com/photos/1459495/pexels-photo-1459495.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) 20% 1%/cover no-repeat;
}

.example-1 .date {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #77d7b9;
  color: #fff;
  padding: 0.8em;
}

.example-1 .date span {
  display: block;
  text-align: center;
}

.example-1 .date .day {
  font-weight: 700;
  font-size: 24px;
  text-shadow: 2px 3px 2px rgba(0, 0, 0, 0.18);
}

.example-1 .date .month {
  text-transform: uppercase;
}

.example-1 .date .month,
.example-1 .date .year {
  font-size: 12px;
}

.example-1 .content {
  background-color: #fff;
  -webkit-box-shadow: 0 5px 30px 10px rgba(0, 0, 0, 0.3);
          box-shadow: 0 5px 30px 10px rgba(0, 0, 0, 0.3);
}

.example-1 .title a {
  color: gray;
}

.example-1 .menu-button {
  position: absolute;
  z-index: 999;
  top: 16px;
  right: 16px;
  width: 25px;
  text-align: center;
  cursor: pointer;
}

.example-1 .menu-button span {
  width: 5px;
  height: 5px;
  background-color: gray;
  color: gray;
  position: relative;
  display: inline-block;
  border-radius: 50%;
}

.example-1 .menu-button span::after, .example-1 .menu-button span::before {
  content: '';
  display: block;
  width: 5px;
  height: 5px;
  background-color: currentColor;
  position: absolute;
  border-radius: 50%;
}

.example-1 .menu-button span::before {
  left: -10px;
}

.example-1 .menu-button span::after {
  right: -10px;
}

.example-1 .menu-content {
  text-align: center;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: -1;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.example-1 .menu-content li {
  width: 33.333333%;
  float: left;
  background-color: #77d7b9;
  height: 60px;
  position: relative;
}

.example-1 .menu-content a {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-size: 24px;
}

.example-1 .menu-content span {
  top: -10px;
}

.example-2 .wrapper {
  background: url(https://images.pexels.com/photos/250609/pexels-photo-250609.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;
}

.example-2 .wrapper:hover .menu-content span {
  -webkit-transform: translate(-50%, -10px);
          transform: translate(-50%, -10px);
  opacity: 1;
}

.example-2 .header {
  color: #fff;
  padding: 1em;
}

.example-2 .header::before, .example-2 .header::after {
  content: '';
  display: table;
}

.example-2 .header::after {
  clear: both;
}

.example-2 .header .date {
  float: left;
  font-size: 12px;
}

.example-2 .menu-content {
  float: right;
}

.example-2 .menu-content li {
  margin: 0 5px;
  position: relative;
}

.example-2 .menu-content span {
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0;
}

.example-2 .data {
  color: #fff;
  -webkit-transform: translateY(calc(70px + 4em));
          transform: translateY(calc(70px + 4em));
}

.example-2 .title a {
  color: #fff;
}

.example-2 .button {
  display: block;
  width: 100px;
  margin: 2em auto 1em;
  text-align: center;
  font-size: 12px;
  color: #fff;
  line-height: 1;
  position: relative;
  font-weight: 700;
}

.example-2 .button::after {
  content: '\2192';
  opacity: 0;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translate(0, -50%);
          transform: translate(0, -50%);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.example-2 .button:hover::after {
  -webkit-transform: translate(5px, -50%);
          transform: translate(5px, -50%);
  opacity: 1;
}
/*# sourceMappingURL=style.css.map */

    </style>
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
