<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clareza</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1179/1179267.png" type="image/x-icon">
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
  margin-bottom: 2rem;
  min-width: 388px;
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

/* .example-1 .wrapper {
  background: url(https://images.pexels.com/photos/1154510/pexels-photo-1154510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) 20% 1%/cover no-repeat;
} */

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

/* .example-3 .wrapper {
  background: url(https://images.pexels.com/photos/54326/runners-male-sport-run-54326.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;
} */

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
body {
  margin: 0;
  font-family: Helvetica, sans-serif;
  background-color: #f4f4f4;
}

a {
  color: #000;
}

/* header */

.header {
  top:0;
  left:0;
  right:0;
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: sticky;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f4;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
}

.header .logo {
  display: block;
  float: left;
  font-size: 2em;
  padding: 10px 20px;
  text-decoration: none;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header{
    background-color:white;
    display:flex;
   justify-content: space-between;
  }
  .header li {
    float: left;
    background-color:white;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
 
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }
  .logo{
    background-color:white;
  }
}

/*# sourceMappingURL=style.css.map */

    </style>
      <header class="header">
      <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1179/1179267.png" type="image/x-icon">
    <a href="" class="logo">Clareza</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="#work">Leitura da Biblia</a></li>
      <!-- <li><a href="#about">Leitura da Biblia Kids</a></li> -->
      <li><a href="#devocional">Devocionais</a></li>
    </ul>
  </header>
</head>
<body>
<div>
   
</div>
<div class="row">
 <?php $day = getdate()['yday'];
 automateGetDay($day);

 ?>
  <!-- /Div with double the width -->
  <div class="card example-1">
  <h1 style="text-align: center; font-size: 36px; margin-bottom: 20px;">Reflexao</h1>
  <div style="width: 100%; padding: 20px; background-color: #034378; text-align: center; font-family: sans-serif; font-size: 18px; line-height: 1.5; color: white;">
  <h4>A relação entre Deus e Caim</h4>

<p>“Se tivesse feito o que é certo, você estaria sorrindo; mas você agiu mal, e por isso o pecado está na porta, à sua espera. Ele quer dominá-lo, mas você precisa vencê-lo.”
‭‭Gênesis‬ ‭4‬:‭7‬ ‭‬ ‭</p>

<p>Caim estava com inveja de Abel, Deus, vendo isso, logo foi alertar Caim que ele poderia cair em pecado se não medisse seus atos.</p>
<p>Deus viu que Caim estava sensível, que ele tinha dado abertura para a tentação do pecado domina-lo e então disse: “você precisa vence-lo”.</p>

<p>Caim não deu ouvidos a Deus! Este foi seu primeiro erro. Quantas vezes deixamos de ouvir os avisos do Senhor? Quantas vezes Deus nos disse para não fazermos algo que nos levaria à tentação e não demos ouvidos a Ele?</p>
<p>Nosso Senhor não quer ver-nos mal! Ele nos ama e quer o melhor para nós, por isso Ele sempre nos diz o que devemos ou não fazer; nos basta ouvi-lo e fazer sua vontade.</p> 

<p>Precisamos vencer o pecado, que todos os dias bate à nossa porta! Entregue suas vontades e escolhas para Deus, não faça como Caim, que, por não ouvir o Senhor, foi amaldiçoado e não pôde mais cultivar a terra (Gênesis 4:11-12).</p>

<p>“Não vivam como vivem as pessoas deste mundo, mas deixem que Deus os transforme por meio de uma completa mudança da mente de vocês. Assim vocês conhecerão a vontade de Deus, isto é, aquilo que é bom, perfeito e agradável a ele.”
Romanos‬ ‭12‬:‭2‬</p>

<p>Você tem ouvido o que o Senhor tem te dito?</p>

  <p> Victorya Neves Mattos Silva </p>
</div>
  </div>
</div>
</body>
</html>


<?php
function automateGetDay($today){
  error_reporting(0);
  header('Content-type: text/plain; charset=utf-8');
$schedule = "
1 Gn 1-3 Mt 1
2 Gn 4-6 Mt 2
3 Gn 7-10 Mt 3
4 Gn 11-13 Mt 4
5 Gn 14-16 Mt 5
6 Gn 17,18 Mt 6
7 Gn 19,20 Mt 7
8 Gn 21-23 Mt 8
9 Gn 24 Mt 9
10 Gn 25,26 Mt 10
11 Gn 27,28 Mt 11
12 Gn 29,30 Mt 12
13 Gn 31 Mt 13
14 Gn 32,33 Mt 14
15 Gn 34,35 Mt 15
16 Gn 36,37 Mt 16
17 Gn 38-40 Mt 17
18 Gn 41,42 Mt 18
19 Gn 43,44 Mt 19
20 Gn 45,46 Mt 20
21 Gn 47,48 Mt 21
22 Gn 49,50 Mt 22
23 Êx 1-3 Mt 23
24 Êx 4,5 Mt 24
25 Êx 6,7 Mt 25
26 Êx 8 Mt 26
27 Êx 9 Mt 27, 28
28 Êx 10,11 Mc 1
29 Êx 12,13 Mc 2
30 Êx 14,15 Mc 3



1 Êx 16,17 Mc 4
2 Êx 18-20 Mc 5
3 Êx 21,22 Mc 6
4 Êx 23,24 Mc 7
5 Êx 25,26 Mc 8
6 Êx 27,28 Mc 9
7 Êx 29,30 Mc 10
8 Êx 31-33 Mc 11
9 Êx 34,35 Mc 12
10 Êx 36,37 Mc 13
11 Êx 38 Mc 14
12 Êx 39,40 Mc 15
13 Lv 1-4 Mc 16
14 Lv 5 Lc 1
15 Lv 6,7 Lc 2
16 Lv 8,9 Lc 3
17 Lv 10,11 Lc 4
18 Lv 12,13 Lc 5
19 Lv 14 Lc 6
20 Lv 15 Lc 7
21 Lv 16 Lc 8
22 Lv 17 Lc 9
23 Lv 18,19 Lc 10
24 Lv 20 Lc 11
25 Lv 21,22 Lc 12
26 Lv 23,24 Lc 13
27 Lv 25 Lc 14
28 Lv 26,27 Lc 15

1 Nm 1 Lc 16
2 Nm 2,3 Lc 17
3 Nm 4 Lc 18
4 Nm 5,6 Lc 19
5 Nm 7 Lc 20
6 Nm 8,9 Lc 21
7 Nm 10,11 Lc 22
8 Nm 12,13 Lc 23
9 Nm 14 Lc 24
10 Nm 15 Jo 1
11 Nm 16,17 Jo 2
12 Nm 18,19 Jo 3
13 Nm 20,21 Jo 4
14 Nm 22 Jo 5
15 Nm 23,24 Jo 6
16 Nm 25 Jo 7
17 Nm 26 Jo 8
18 Nm 27,28 Jo 9
19 Nm 29,30 Jo 10
20 Nm 31,32 Jo 11
21 Nm 33,34 Jo 12
22 Nm 35,36 Jo 13
23 Dt 1 Jo 14
24 Dt 2,3 Jo 15
25 Dt 4,5 Jo 16
26 Dt 6,7 Jo 17
27 Dt 8-10 Jo 18
28 Dt 11,12 Jo 19
29 Dt 13,14 Jo 20
30 Dt 15,16 Jo 21



1 Dt 17,18 At 1
2 Dt 19-21 At 2
3 Dt 22,23 At 3
4 Dt 24-26 At 4
5 Dt 27 At 5
6 Dt 28 At 6
7 Dt 29,30 At 7
8 Dt 31,32 At 8
9 Dt 33,34 At 9
10 Js 1,2 At 10
11 Js 3-5 At 11
12 Js 6,7 At 12
13 Js 8,9 At 13
14 Js 10,11 At 14
15 Js 12-14 At 15
16 Js 15,16 At 16
17 Js 17,18 At 17
18 Js 19,20 At 18
19 Js 21,22 At 19
20 Js 23,24 At 20
21 Jz 1,2 At 21
22 Jz 3,4 At 22
23 Jz 5,6 At 23
24 Jz 7,8 At 24
25 Jz 9 At 25
26 Jz 10,11 At 26
27 Jz 12-14 At 27
28 Jz 15,16 At 28
29 Jz 17,18 Rm 1
30 Jz 19 Rm 2


1 Jz 20-21 Rm 3
2 Rt1-4 Rm 4
3 1 Sm 1,2 Rm 5
4 1 Sm 3-5 Rm 6
5 1 Sm 6-8 Rm 7
6 1 Sm 9-10 Rm 8
7 1 Sm 11,12 Rm 9
8 1 Sm 13,14 Rm 10
9 1 Sm 15,16 Rm 11
10 1 Sm 17 Rm 12
11 1 Sm 18,19 Rm 13
12 1Sm 20,21 Rm 14
13 1 Sm 22,23 Rm 15
14 1 Sm 24,25 Rm 16
15 1 Sm 26,27 1Co 1
16 1 Sm 28,29 1Co 2
17 1 Sm 30,31 1Co 3
18 2 Sm 1,2 1Co 4
19 2 Sm 3,5 1Co 5
20 2 Sm 6,9 1C0 6
21 2 Sm 10,11 1Co 7
22 2 Sm 12 1Co 8
23 2 Sm 13,14 1Co 9
24 2 Sm 15,16 1Co 10
25 2 Sm 17,18 1Co 11
26 2 Sm 19,20 1Co 12
27 2 Sm 21,22 1Co 13
28 2 Sm 23,24 1Co 14
29 1 Rs 1 1Co 15
30 1 Rs 2 1Co 16


1 1 Rs 3,4 2Co 1
2 1 Rs 5,6 2Co 2
3 1 Rs 7 2Co 3
4 1 Rs 8 2Co 4
5 1 Rs 9,10 2Co 5
6 1 Rs 11,12 2Co 6
7 1 Rs 13,14 2Co 7
8 1 Rs 15,16 2Co 8
9 1 Rs 17,18 2Co 9
10 1 Rs 19,20 2Co 10
11 1Rs 21,22 2Co 11
12 2 Rs 1,2 2Co 12
13 2 Rs 3 2Co 13
14 2 Rs 4 Gl 1
15 2 Rs 5,6 Gl 2
16 2 Rs 7,8 Gl 3
17 2 Rs 9,10 Gl 4
18 2 Rs 11-13 Gl 5
19 2 Rs 14,15 Gl 6
20 2 Rs 16,17 Ef 1
21 2 Rs 18,19 Ef 2
22 2 Rs 20-22 Ef 3
23 2 Rs 23,24 Ef 4
24 2 Rs 25 Ef 5
25 1 Cr 1 Ef 6
26 1 Cr 2,3 Fl 1
27 1 Cr 4,5 Fl 2
28 1 Cr 6 Fl 3
29 1 Cr 7,8 Fl 4
30 1 Cr 9,10 Cl 1

1 1 Cr 11,12 Cl 2
2 1 Cr 13-15 Cl 3
3 1 Cr 16,17 Cl 4
4 1 Cr 18-20 1Ts 1
5 1 Cr 21-23 1Ts 2
6 1 Cr 24,25 1Ts 3
7 1 Cr 26,27 1Ts 4
8 1 Cr 28,29 1Ts 5
9 2 Cr 1,2 2Ts 1
10 2 Cr 3-5 2Ts 2
11 2 Cr 6,7 3Ts 3
12 2 Cr 8-10 1Tm 1
13 2 Cr 11-14 1Tm 2
14 2 Cr 15-17 1Tm 3
15 2 Cr 18,19 1Tm 4
16 2 Cr 20,21 1Tm 5
17 2 Cr 22-24 1Tm 6
18 2 Cr 25,26 2Tm 1
19 2 Cr 27-29 2Tm 2
20 2 Cr 30,31 2Tm 3
21 2 Cr 32,33 2Tm 4
22 2 Cr 34-36 Tt 1
23 Ed 1,2 Tt 2
24 Ed 3,4 Tt 3
25 Ed 5,6 Fm 1
26 Ed 7,8 Hb 1
27 Ed 9,10 Hb 2,3
28 Ne 1-3 Hb 4,5
29 Ne 4,5 Hb 6
30 Ne 6,7 Hb 7



1 Ne 8,9 Hb 8
2 Ne 10,11 Hb 9
3 Ne 12,13 Hb 10
4 Et 1,2 Hb 11
5 Et 3,4 Hb 12
6 Et 5-7 Hb 13
7 Et 8-10 Tg 1
8 Jó 1-3 Tg 2
9 Jó 4,5 Tg 3
10 Jó 6-8 Tg 4
11 Jó 9-11 Tg 5
12 Jó 12-14 1Pe 1
13 Jó 15-17 1Pe 2
14 Jó 18-20 1Pe 3
15 Jó 21-23 1Pe 4
16 Jó 24-28 1Pe 5
17 Jó 29-31 2Pe 1
18 Jó 32-34 2Pe 2
19 Jó 35-37 2Pe 3
20 Jó 38-40 1Jo 1
21 Jó 41,42 1Jo 2
22 Ec 1-3 1Jo 3
23 Ec 4-6 1Jo 4
24 Ec 7-9 1jo 5
25 Ec 10-12 2Jo 1
26 Ct 1-4 3Jo 1
27 Ct 5-8 Jd 1
28 Is 1,2 Ap 1
29 Is 3-5 Ap 2
30 Is 6,7 Ap 3


1 Is 8,9 Ap 4
2 Is 10,11 Ap 5,6
3 Is 12-14 Ap 7,8
4 Is 15-19 Ap 9,10
5 Is 20-22 Ap 11,12
6 Is 23-25 Ap 13
7 Is 26-28 Ap 14,15
8 Is 29,30 Ap 16
9 Is 31-33 Ap 17
10 Is 34-36 Ap 18
11 Is 37,38 Ap 19,20
12 Is 39,40 Ap 21
13 Is 41,42 Ap 22
14 Is 43,44 Sl 1-3
15 Is 45-47 Sl 4,5
16 Is 48,49 Sl 6,7
17 Is 50-52 Sl 8,9
18 Is 53-55 Sl 10,11
19 Is 56-58 Sl 12-15
20 Is 59-61 Sl 16-17
21 Is 62-64 Sl 18
22 Is 65,66 Sl 19-21
23 Jr 1,2 Sl 22
24 Jr 3,4 Sl 23-25
25 Jr 5 Sl 26-28
26 Jr 6 Sl 29,30
27 Jr 7,8 Sl 31,32
28 Jr 9,10 Sl 33,34
29 Jr 11,12 Sl 35,36
30 Jr 13,14 Sl 37

1 Jr 15,16 Sl 38,39
2 Jr 17,18 Sl 40,41
3 Jr 19-21 Sl 42-44
4 Jr 22 Sl 45, 46
5 Jr 23,24 Sl 47-49
6 Jr 25,26 Sl 50,51
7 Jr 27,28 Sl 52-54
8 Jr 29,30 Sl 55,56
9 Jr 31 Sl 57, 58
10 Jr 32 Sl 59-61
11 Jr 33,34 Sl 62-64
12 Jr 35,36 Sl 65-67
13 Jr 37,38 Sl 68,69
14 Jr 39,40 Sl 70,71
15 Jr 41-43 Sl 72,73
16 Jr 44,45 Sl 74
17 Jr 46,47 Sl 75-77
18 Jr 48 Sl 78
19 Jr 49 Sl 79,80
20 Jr 50 Sl 81-83
21 Jr 51 Sl 84,85
22 Jr 52 Sl 86-88
23 Lm 1,2 Sl 89
24 Lm 3,4, 5 Sl 90
25 Ez 1-3 Sl 91-93
26 Ez 4-6 Sl 94-96
27 Ez 7-9 Sl 97-99
28 Ez 10,11 Sl 100-102
29 Ez 12,13 Sl 103-104
30 Ez 14,15 Sl 105

1 Ez 16 Sl 106
2 Ez 17,18 Sl 107
3 Ez 19,20 Sl 108
4 Ez 21 Sl 109
5 Ez 22,23 Sl 110,111
6 Ez 24,25 Sl 112-115
7 Ez 26,27 Sl 116-118
8 Ez 28,29 Sl 119(1-37)
9 Ez 30,31 Sl 119(38-74)
10 Ez 32 Sl 119(75-112)
11 Ez 33,34 Sl 119(113-153)
12 Ez 35,36 Sl 119(154-176)
13 Ez 37,38 Sl 120-122
14 Ez 39,40 Sl 123-127
15 Ez 41-43 Sl 128-131
16 Ez 44,45 Sl 132-135
17 Ez 46,47 Sl 136,137
18 Ez 48 Sl 138,139
19 Dn 1,2 Sl 140-143
20 Dn 3,4 Sl 144,145
21 Dn 5,6 Sl 146,147
22 Dn 7,8 Sl 148-150
23 Dn 9,10 Fl 1
24 Dn 11 Fl 2
25 Dn 12 Fl 3
26 Os 1-3 Fl 4
27 Os 4-6 Cl 1
28 Os 7-9 Cl 2
29 Os 10-12 Cl 3
30 Os 13,14 Cl 4

1 Jl 1-3 Pv 1
2 Am 1, 2 Pv 2
3 Am 3 Pv 3
4 Am 4-6 Pv 4
5 Am 7-9 Pv 5
6 Ob 1 Pv 6
7 Jn 1-4 Pv 7
8 Mq 1-4 Pv 8
9 Mq 5-7 Pv 9
10 Na 1-3 Pv 10
11 Hc 1-3 Pv 11
12 Sf 1-3 Pv 12
13 Ag 1-2 Pv 13
14 Zc 1-2 Pv 14
15 Zc 3 Pv 15
16 Zc 4 Pv 16
17 Zc 5 Pv 17
18 Zc 6 Pv 18
19 Zc 7 Pv 19
20 Zc 8 Pv 20
21 Zc 9 Pv 21
22 Zc 10 Pv 22
23 Zc 11 Pv 23
24 Zc 12 Pv 24
25 Zc 13 Pv 25
26 Zc 14 Pv 26
27 Ml 1 Pv 27
28 Ml 2 Pv 28
29 Ml 3 Pv 29
30 Ml 4 Pv 30,31";


$schedule_lines = explode("\n", $schedule);
$cont = 1;
foreach ($schedule_lines as $schedule_line) {
  
  if (preg_match('/^([0-9]+)\s+([\pL\pN]+)(\s+[\pL\pN\-,\s]+)/u', $schedule_line, $matches)) {

        $chapters = array();
        $books_and_chapters = explode(' ', trim($matches[0]));
        $day = $books_and_chapters[0];
        
        $books_of_the_day = array();

      
        $book = $books_and_chapters[1];
        $book = strtolower($book);
        if(strpos($books_and_chapters[2],"-") == true){
          $chaptersSide = explode('-', $books_and_chapters[2]);
          for ($i = $chaptersSide[0]; $i != $chaptersSide[1]+1 ; $i++) {
            array_push($chapters,$i);
          }
        }else{
          $chapters = explode(',', $books_and_chapters[2]);
        }
        $books_of_the_day[] = ['bookOfTheDay' => $book, 'chaptersOfTheDay' => $chapters];
        
        $book = $books_and_chapters[3];
        $book = strtolower($book);
        if(str_contains($books_and_chapters[4],"-") == true){
          $chaptersSide = explode('-', $books_and_chapters[4]);
          for ($i = $chaptersSide[0]; $i != $chaptersSide[1]+1 ; $i++) {
           
            array_push($chapters,$i);
          }
        }else{
         
          $chapters = explode(',', $books_and_chapters[4]);
        }
        $books_of_the_day[] = ['bookOfTheDay' => $book, 'chaptersOfTheDay' => $chapters];

        $days[$cont] = $books_of_the_day;
        $cont++;
      }
}
// echo "<pre>";
// print_r($days);
date_default_timezone_set('America/Sao_Paulo');

$oneMonthAgo = date('Y-m-d', strtotime("-1 month"));

$day_number = 1 + date('d', strtotime("-1 month"));;

  
$month_number = strftime('%B');
$year = date("Y");

  //Get the day of the month
  $month = date('F');
  

  $day_of_year = date('z') + 1;
  $day_31_days_ago = $day_of_year - 31;

  if ($day_31_days_ago < 0) {
    $day_31_days_ago += 365;
  }
  $day = $days[$day_31_days_ago];

  $day_31_days_ago =  date('j');

  // Inicializa a sessão cURL
    $curl = curl_init();
    $api_key = 'e84e7f810e5b5aeaf2ea03e878efcb61';

    $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlR1ZSBKYW4gMDMgMjAyMyAyMzoxMzoxNCBHTVQrMDAwMC5nYWJyaWVsanVuaW9yNDI1NjZAZ21haWwuY29tIiwiaWF0IjoxNjcyNzg3NTk0fQ.a9RoOsm08VpJ7F2svfAmc7kZX2TxTst0Y0cIRJv-yx0";

      foreach($day as $book){
        $bookOfTheDay = $book['bookOfTheDay'];
       
        if($bookOfTheDay == 'Êx'){
          $bookOfTheDay = 'ex';
        }

        $chaptersOfTheDay = $book['chaptersOfTheDay'];

      // A URL do endpoint do API da Biblia.com para buscar versiculos
      $url = "https://www.abibliadigital.com.br/api/verses/nvi/$bookOfTheDay/".$chaptersOfTheDay[0];
      
      // Inicializa o curl
      $ch = curl_init();
      
      // Configura as opcoes do curl
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $token",
    ]);
      // Executa a solicitacao
      $response = curl_exec($ch);
      
      // Verifica se houve algum erro
      if (curl_errno($ch)) {
          die('Erro ao executar a solicitacao: ' . curl_error($ch));
      }
      
      // Fecha a conexao curl
      curl_close($ch);
      
      // Decodifica a resposta do API
      $book_data = json_decode($response,true);
      
      // Imprime o texto do versiculo
      //print_r($book_data);
      
      printoToUser($day_31_days_ago, $month_number, $year, $book_data,$bookOfTheDay,$chaptersOfTheDay);
    }

    
  
}


function getImage($bookOfTheDay){
  switch($bookOfTheDay){
    case 'gn':
      return 'https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
    break;
    case 'ex':
      return 'https://images.pexels.com/photos/4017971/pexels-photo-4017971.png?auto=compress&cs=tinysrgb&w=1600';
      break;
    case 'lv':
       return 'https://images.pexels.com/photos/4017971/pexels-photo-4017971.png?auto=compress&cs=tinysrgb&w=1600'; 
       break;
    case 'mt':
      return 'https://images.unsplash.com/photo-1492052722242-2554d0e99e3a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80';
    break;
    case 'mc':
      return 'https://images.unsplash.com/photo-1492052722242-2554d0e99e3a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80';
    case 'lc':
      return 'https://images.unsplash.com/photo-1492052722242-2554d0e99e3a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80';
    default: 
      return 'https://images.unsplash.com/photo-1492052722242-2554d0e99e3a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80';
    break;
  }
}
function printoToUser($day_number, $month_number, $year, $book_data,$bookOfTheDay,$chaptersOfTheDay){
  echo  ' <div class="example-1 card" >';
  echo '<div class="wrapper" style="background: url('.getImage($bookOfTheDay).') center/cover no-repeat;">';
  echo '<div class="date">
          <span class="day">'.$day_number.'</span>
          <span class="month">'.$month_number.'</span>
          <span class="year">'.$year.'</span>
        </div>';
   echo '<div class="data">';
   echo '<div class="content">';
   echo '<span class="author">Autor : '.$book_data['book']['author'].' </span>';
   echo '<h1 class="title"><a href="https://www.bibliaonline.com.br/acf/'.$bookOfTheDay.'/'.$chaptersOfTheDay[0].'">'.strtoupper($bookOfTheDay) .' - '.  getDays($chaptersOfTheDay);
   echo '</a></h1>';
   echo '<p class="text">
          '.firstChapter($book_data).'
            </p>
          </div>
        </div>
      </div>
    </div>'    ; 
}
function firstChapter($book_data){
  $string = "";
  $cont = 0;
  foreach($book_data['verses'] as $verse) { 
    $cont++;
    if($cont == 7 ) break;
    $string = $string . $verse['number'] . " - " . $verse['text'] . " ";
  }
  return $string;
}

function getDays($chaptersOfTheDay){
  $string = "";
  foreach($chaptersOfTheDay as $chaptersOfTheDay) {
    if( $string == "") $string = $chaptersOfTheDay;
    else $string .= ", ".$chaptersOfTheDay;
  }
  return $string;
}


?>
