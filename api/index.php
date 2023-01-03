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
  margin-bottom: 2rem;
  min-width: 350px;
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
/*# sourceMappingURL=style.css.map */

    </style>
</head>
<body>
<div>
   
</div>
<div class="row">
 <?php $day = getdate()['yday'];
 automateGetDay();
//  getDay($day);
 ?>
  
</div>
</body>
</html>


<?php
function automateGetDay(){
   error_reporting(0);
  setlocale(LC_TIME, 'pt_BR');
  $day_number = 1 + date("w");
  
  
  $month_number = strftime('%B');
  $year = date("Y");
  $bookOfTheDay = 'gn';
  $chaptersOfTheDay = array('1','2','3');
  //Loop by books
  $days = [
    1 => [ 
        0=> ['bookOfTheDay' => 'gn', 'chaptersOfTheDay' => array('1','2')],	
        1 => [ 'bookOfTheDay' => 'lc', 'chaptersOfTheDay' => array('1')]
      ],
  ];
  // echo $day['1'][0]['bookOfTheDay'];
  // Inicializa a sessão cURL
    $curl = curl_init();
    $api_key = 'e84e7f810e5b5aeaf2ea03e878efcb61';

    $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlR1ZSBKYW4gMDMgMjAyMyAyMzoxMzoxNCBHTVQrMDAwMC5nYWJyaWVsanVuaW9yNDI1NjZAZ21haWwuY29tIiwiaWF0IjoxNjcyNzg3NTk0fQ.a9RoOsm08VpJ7F2svfAmc7kZX2TxTst0Y0cIRJv-yx0";
    foreach($days as $day){
      foreach($day as $book){
        $bookOfTheDay = $book['bookOfTheDay'];
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
      
      printoToUser($day_number, $month_number, $year, $book_data,$bookOfTheDay,$chaptersOfTheDay);
    }
  }
}
function printoToUser($day_number, $month_number, $year, $book_data,$bookOfTheDay,$chaptersOfTheDay){
  echo  ' <div class="example-1 card" >';
  echo '<div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">';
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

function getDay($day){
 // echo $day;
switch($day){
  case '1':
    echo ' <div class="example-1 card" >
      <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
        <div class="date">
          <span class="day">01</span>
          <span class="month">Jan</span>
          <span class="year">2023</span>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">Autor : Moisês </span>
            <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/1">Gn 1 e 2</a></h1>
            <p class="text">No princípio Deus criou os céus e a terra.
            Era a terra sem forma e vazia; trevas cobriam a face do abismo, e o Espírito de Deus se movia sobre a face das águas.
            Disse Deus: "Haja luz", e houve luz.
            Deus viu que a luz era boa, e separou a luz das trevas.
            
            Gênesis 1:1-4</p>
          </div>
        </div>
      </div>
    </div>';
    echo ' <div class="example-1 example-3 card">
      <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
        <div class="date">
          <span class="day">01</span>
          <span class="month">Jan</span>
          <span class="year">2023</span>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">Autor: Lucas </span>
            <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/1">Lucas 1</a></h1>
            <p class="text">Ora, a serpente era o mais astuto de todos os animais selvagens que o Senhor Deus tinha feito. E ela perguntou à mulher: "Foi isto mesmo que Deus disse: ‘Não comam de nenhum fruto das árvores do jardim’? "
Respondeu a mulher à serpente: "Podemos comer do fruto das árvores do jardim,
mas Deus disse: ‘Não comam do fruto da árvore que está no meio do jardim, nem toquem nele; do contrário vocês morrerão’ ".

Gênesis 3:1-3</p>        
          </div>
        </div>
      </div>
    </div>';
      break;
    case '2':
        echo ' <div class="example-1 card" >
          <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
            <div class="date">
              <span class="day">02</span>
              <span class="month">Jan</span>
              <span class="year">2023</span>
            </div>
            <div class="data">
              <div class="content">
                <span class="author">Autor : Moisês </span>
                <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/3">Gn 3 a 5</a></h1>
                <p class="text">Ora, a serpente era o mais astuto de todos os animais selvagens que o Senhor Deus tinha feito. E ela perguntou à mulher: "Foi isto mesmo que Deus disse: ‘Não comam de nenhum fruto das árvores do jardim’? "
                Respondeu a mulher à serpente: "Podemos comer do fruto das árvores do jardim,
                mas Deus disse: ‘Não comam do fruto da árvore que está no meio do jardim, nem toquem nele; do contrário vocês morrerão’ ".
                
                Gênesis 3:1-3</p>
              </div>
            </div>
          </div>
        </div>';
        echo ' <div class="example-1 example-3 card">
          <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
            <div class="date">
              <span class="day">02</span>
              <span class="month">Jan</span>
              <span class="year">2023</span>
            </div>
            <div class="data">
              <div class="content">
                <span class="author">Autor: Lucas </span>
                <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/2">Lucas 2</a></h1>
                <p class="text">Naqueles dias César Augusto publicou um decreto ordenando o recenseamento de todo o império romano.
                Este foi o primeiro recenseamento feito quando Quirino era governador da Síria.
                E todos iam para a sua cidade natal, a fim de alistar-se.
                Assim, José também foi da cidade de Nazaré da Galiléia para a Judéia, para Belém, cidade de Davi, porque pertencia à casa e à linhagem de Davi.
                
                Lucas 2:1-4</p>        
              </div>
            </div>
          </div>
        </div>';
          break;
          case '3':
            echo ' <div class="example-1 card" >
              <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                <div class="date">
                  <span class="day">03</span>
                  <span class="month">Jan</span>
                  <span class="year">2023</span>
                </div>
                <div class="data">
                  <div class="content">
                    <span class="author">Autor : Moisês </span>
                    <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/6">Gn 6 a 8</a></h1>
                    <p class="text">Quando os homens começaram a multiplicar-se na terra e lhes nasceram filhas,
                    os filhos de Deus viram que as filhas dos homens eram bonitas e escolheram para si aquelas que lhes agradaram.
                    Então disse o Senhor: "Por causa da perversidade do homem, meu Espírito não contenderá com ele para sempre; e ele só viverá cento e vinte anos".
                    
                    Gênesis 6:1-3</p>
                  </div>
                </div>
              </div>
            </div>';
            echo ' <div class="example-1 example-3 card">
              <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                <div class="date">
                  <span class="day">03</span>
                  <span class="month">Jan</span>
                  <span class="year">2023</span>
                </div>
                <div class="data">
                  <div class="content">
                    <span class="author">Autor: Lucas </span>
                    <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/3">Lucas 3</a></h1>
                    <p class="text">No décimo quinto ano do reinado de Tibério César, quando Pôncio Pilatos era governador da Judéia; Herodes, tetrarca da Galiléia; seu irmão Filipe, tetrarca da Ituréia e Traconites; e Lisânias, tetrarca de Abilene;
                    Anás e Caifás exerciam o sumo sacerdócio. Foi nesse ano que veio a palavra do Senhor a João, filho de Zacarias, no deserto.
                    Ele percorreu toda a região próxima ao Jordão, pregando um batismo de arrependimento para o perdão dos pecados.
                    
                    Lucas 3:1-3</p>        
                  </div>
                </div>
              </div>
            </div>';
              break;
        case '4':
          echo ' <div class="example-1 card" >
            <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
              <div class="date">
                <span class="day">04</span>
                <span class="month">Jan</span>
                <span class="year">2023</span>
              </div>
              <div class="data">
                <div class="content">
                  <span class="author">Autor : Moisês </span>
                  <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/9">Gn 9 a 11</a></h1>
                  <p class="text">Deus abençoou Noé e seus filhos, dizendo-lhes: "Sejam férteis, multipliquem-se e encham a terra.
                  Todos os animais da terra tremerão de medo diante de vocês: os animais selvagens, as aves do céu, as criaturas que se movem rente ao chão e os peixes do mar; eles estão entregues em suas mãos.
                  Tudo o que vive e se move lhes servirá de alimento. Assim como lhes dei os vegetais, agora lhes dou todas as coisas.
                  
                  Gênesis 9:1-3</p>
                </div>
              </div>
            </div>
          </div>';
          echo ' <div class="example-1 example-3 card">
            <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
              <div class="date">
                <span class="day">04</span>
                <span class="month">Jan</span>
                <span class="year">2023</span>
              </div>
              <div class="data">
                <div class="content">
                  <span class="author">Autor: Lucas </span>
                  <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/4">Lucas 4</a></h1>
                  <p class="text">Jesus, cheio do Espírito Santo, voltou do Jordão e foi levado pelo Espírito ao deserto,
                  onde, durante quarenta dias, foi tentado pelo diabo. Não comeu nada durante esses dias e, ao fim deles, teve fome.
                  O diabo lhe disse: "Se você é o Filho de Deus, mande a esta pedra que se transforme em pão".
                  Jesus respondeu: "Está escrito: ‘Nem só de pão viverá o homem’ ".
                  
                  Lucas 4:1-4</p>        
                </div>
              </div>
            </div>
          </div>';
            break;
            case '5':
              echo ' <div class="example-1 card" >
                <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                  <div class="date">
                    <span class="day">05</span>
                    <span class="month">Jan</span>
                    <span class="year">2023</span>
                  </div>
                  <div class="data">
                    <div class="content">
                      <span class="author">Autor : Moisês </span>
                      <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/12">Gn 12 a 14</a></h1>
                      <p class="text">Então o Senhor disse a Abrão: "Saia da sua terra, do meio dos seus parentes e da casa de seu pai, e vá para a terra que eu lhe mostrarei.
                      "Farei de você um grande povo, e o abençoarei. Tornarei famoso o seu nome, e você será uma bênção.
                      Abençoarei os que o abençoarem, e amaldiçoarei os que o amaldiçoarem; e por meio de você todos os povos da terra serão abençoados".
                      
                      Gênesis 12:1-3</p>
                    </div>
                  </div>
                </div>
              </div>';
              echo ' <div class="example-1 example-3 card">
                <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                  <div class="date">
                    <span class="day">05</span>
                    <span class="month">Jan</span>
                    <span class="year">2023</span>
                  </div>
                  <div class="data">
                    <div class="content">
                      <span class="author">Autor: Lucas </span>
                      <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/5">Lucas 5</a></h1>
                      <p class="text">Certo dia Jesus estava perto do lago de Genesaré, e uma multidão o comprimia de todos os lados para ouvir a palavra de Deus.
                      Viu à beira do lago dois barcos, deixados ali pelos pescadores, que estavam lavando as suas redes.
                      Entrou num dos barcos, o que pertencia a Simão, e pediu-lhe que o afastasse um pouco da praia. Então sentou-se, e do barco ensinava o povo.
                      
                      Lucas 5:1-3</p>        
                    </div>
                  </div>
                </div>
              </div>';
                break;
                case '6':
                  echo ' <div class="example-1 card" >
                    <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                      <div class="date">
                        <span class="day">06</span>
                        <span class="month">Jan</span>
                        <span class="year">2023</span>
                      </div>
                      <div class="data">
                        <div class="content">
                          <span class="author">Autor : Moisês </span>
                          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/15">Gn 15 a 17</a></h1>
                          <p class="text">Depois dessas coisas o Senhor falou a Abrão numa visão: "Não tenha medo, Abrão! Eu sou o seu escudo; grande será a sua recompensa! "
                          Mas Abrão perguntou: "Ó Soberano Senhor, que me darás, se continuo sem filhos e o herdeiro do que possuo é Eliézer de Damasco? "
                          E acrescentou: "Tu não me deste filho algum! Um servo da minha casa será o meu herdeiro! "
                          Então o Senhor deu-lhe a seguinte resposta: "Seu herdeiro não será esse. Um filho gerado por você mesmo será o seu herdeiro".
                          
                          Gênesis 15:1-4</p>
                        </div>
                      </div>
                    </div>
                  </div>';
                  echo ' <div class="example-1 example-3 card">
                    <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                      <div class="date">
                        <span class="day">06</span>
                        <span class="month">Jan</span>
                        <span class="year">2023</span>
                      </div>
                      <div class="data">
                        <div class="content">
                          <span class="author">Autor: Lucas </span>
                          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/6">Lucas 6</a></h1>
                          <p class="text">Certo sábado, enquanto Jesus passava pelas lavouras de cereal, seus discípulos começaram a colher e a debulhar espigas com as mãos, comendo os grãos.
                          Alguns fariseus perguntaram: "Por que vocês estão fazendo o que não é permitido no sábado? "
                          Jesus lhes respondeu: "Vocês nunca leram o que fez Davi, quando ele e seus companheiros estavam com fome?
                          Ele entrou na casa de Deus e, tomando os pães da Presença, comeu o que apenas aos sacerdotes era permitido comer, e os deu também aos seus companheiros".
                          
                          Lucas 6:1-4</p>        
                        </div>
                      </div>
                    </div>
                  </div>';
                    break;
                    case '7':
                      echo ' <div class="example-1 card" >
                        <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                          <div class="date">
                            <span class="day">06</span>
                            <span class="month">Jan</span>
                            <span class="year">2023</span>
                          </div>
                          <div class="data">
                            <div class="content">
                              <span class="author">Autor : Moisês </span>
                              <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/18">Gn 18 a 19</a></h1>
                              <p class="text">O Senhor apareceu a Abraão perto dos carvalhos de Manre, quando ele estava sentado à entrada de sua tenda, na hora mais quente do dia.
                              Abraão ergueu os olhos e viu três homens em pé, a pouca distância. Quando os viu, saiu da entrada de sua tenda, correu ao encontro deles e curvou-se até ao chão.
                              Disse ele: "Meu senhor, se mereço o seu favor, não passe pelo seu servo sem fazer uma parada.
                              Mandarei buscar um pouco d’água para que lavem os pés e descansem debaixo desta árvore.
                              
                              Gênesis 18:1-4</p>
                            </div>
                          </div>
                        </div>
                      </div>';
                      echo ' <div class="example-1 example-3 card">
                        <div class="wrapper" style="background: url(https://images.pexels.com/photos/12275925/pexels-photo-12275925.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                          <div class="date">
                            <span class="day">06</span>
                            <span class="month">Jan</span>
                            <span class="year">2023</span>
                          </div>
                          <div class="data">
                            <div class="content">
                              <span class="author">Autor: Lucas </span>
                              <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Sl/3">Salmos 3</a></h1>
                              <p class="text">Senhor, muitos são os meus adversários! Muitos se rebelam contra mim!
                              São muitos os que dizem a meu respeito: "Deus nunca o salvará! " Pausa
                              Mas tu, Senhor, és o escudo que me protege; és a minha glória e me fazes andar de cabeça erguida.
                              
                              Salmos 3:1-3</p>        
                            </div>
                          </div>
                        </div>
                      </div>';
                      echo ' <div class="example-1 example-3 card">
                        <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
                          <div class="date">
                            <span class="day">06</span>
                            <span class="month">Jan</span>
                            <span class="year">2023</span>
                          </div>
                          <div class="data">
                            <div class="content">
                              <span class="author">Autor: Lucas </span>
                              <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/7">Lucas 7</a></h1>
                              <p class="text">Tendo terminado de dizer tudo isso ao povo, Jesus entrou em Cafarnaum.
                              Ali estava doente, quase à morte, o servo de um centurião, a quem seu senhor estimava muito.
                              Ele ouviu falar de Jesus e enviou-lhe alguns líderes religiosos dos judeus, pedindo-lhe que fosse curar o seu servo.
                              Chegando-se a Jesus, suplicaram-lhe com insistência: "Este homem merece que lhe faças isso,
                              
                              Lucas 7:1-4</p>        
                            </div>
                          </div>
                        </div>
                      </div>';
                        break;
case '8':
  echo ' <div class="example-1 card" >
    <div class="wrapper" style="background: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
      <div class="date">
        <span class="day">06</span>
        <span class="month">Jan</span>
        <span class="year">2023</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor : Moisês </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Gn/18">Gn 20 a 22</a></h1>
          <p class="text">Abraão partiu dali para a região do Neguebe e foi viver entre Cades e Sur. Depois morou algum tempo em Gerar.
          Ele dizia que Sara, sua mulher, era sua irmã. Então Abimeleque, rei de Gerar, mandou buscar Sara e tomou-a para si.
          Certa noite Deus veio a Abimeleque num sonho e lhe disse: "Você morrerá! A mulher que você tomou é casada".
          
          Gênesis 20:1-3</p>
        </div>
      </div>
    </div>
  </div>';
  echo ' <div class="example-1 example-3 card">
    <div class="wrapper" style="background: url(https://images.pexels.com/photos/51159/letter-handwriting-family-letters-written-51159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
      <div class="date">
        <span class="day">06</span>
        <span class="month">Jan</span>
        <span class="year">2023</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor: Lucas </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/Lc/8">Lucas 8</a></h1>
          <p class="text">Depois disso Jesus ia passando pelas cidades e povoados proclamando as boas novas do Reino de Deus. Os Doze estavam com ele,
          e também algumas mulheres que haviam sido curadas de espíritos malignos e doenças: Maria, chamada Madalena, de quem haviam saído sete demônios;
          Joana, mulher de Cuza, administrador da casa de Herodes; Susana e muitas outras. Essas mulheres ajudavam a sustentá-los com os seus bens.
          
          Lucas 8:1-3</p>        
        </div>
      </div>
    </div>
  </div>';
    break;
  case '291':
    echo ' <div class="example-1 card" >
    <div class="wrapper">
      <div class="date">
        <span class="day">18</span>
        <span class="month">Out</span>
        <span class="year">2022</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor : Desconhecido </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/jó/3">Jó 3 e 4</a></h1>
          <p class="text">Na terra de Uz vivia um homem chamado Jó. Era homem íntegro e justo; temia a Deus e evitava o mal. Tinha ele sete filhos e três filhas, e possuía sete mil ovelhas, três mil camelos, quinhentas parelhas de boi e quinhentos jumentos, e tinha muita gente a seu serviço. Era o homem mais rico do oriente. Jó 1:1-3</p>
        </div>
      </div>
    </div>
  </div>';
  echo ' <div class="example-1 example-3 card">
    <div class="wrapper">
      <div class="date">
        <span class="day">18</span>
        <span class="month">Out</span>
        <span class="year">2022</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor: Lucas </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/atos/8">Atos 8 e 9</a></h1>
          <p class="text">E Saulo estava ali, consentindo na morte de Estêvão. Naquela ocasião desencadeou-se grande perseguição contra a igreja em Jerusalém. Todos, exceto os apóstolos, foram dispersos pelas regiões da Judéia e de Samaria. Alguns homens piedosos sepultaram Estêvão e fizeram por ele grande lamentação. Atos 8:1,2</p>        
        </div>
      </div>
    </div>
  </div>';
    break;
        case '292':
    echo ' <div class="example-1 card">
    <div class="wrapper">
      <div class="date">
        <span class="day">18</span>
        <span class="month">Out</span>
        <span class="year">2022</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor : Desconhecido </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/jó/3">Jó 3 e 4</a></h1>
          <p class="text">Na terra de Uz vivia um homem chamado Jó. Era homem íntegro e justo; temia a Deus e evitava o mal. Tinha ele sete filhos e três filhas, e possuía sete mil ovelhas, três mil camelos, quinhentas parelhas de boi e quinhentos jumentos, e tinha muita gente a seu serviço. Era o homem mais rico do oriente. Jó 1:1-3</p>
        </div>
      </div>
    </div>
  </div>';
  echo ' <div class="example-1 example-3 card">
    <div class="wrapper">
      <div class="date">
        <span class="day">18</span>
        <span class="month">Out</span>
        <span class="year">2022</span>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Autor: Lucas </span>
          <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/atos/8">Atos 8 e 9</a></h1>
          <p class="text">E Saulo estava ali, consentindo na morte de Estêvão. Naquela ocasião desencadeou-se grande perseguição contra a igreja em Jerusalém. Todos, exceto os apóstolos, foram dispersos pelas regiões da Judéia e de Samaria. Alguns homens piedosos sepultaram Estêvão e fizeram por ele grande lamentação. Atos 8:1,2</p>        
        </div>
      </div>
    </div>
  </div>';
    break;
    case '325':
      echo ' <div class="example-1 card" >
      <div class="wrapper" style="background: url(https://images.pexels.com/photos/54326/runners-male-sport-run-54326.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
        <div class="date">
          <span class="day">18</span>
          <span class="month">Out</span>
          <span class="year">2022</span>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">Autor : Desconhecido </span>
            <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/jó/3">Jó 3 e 4</a></h1>
            <p class="text">Na terra de Uz vivia um homem chamado Jó. Era homem íntegro e justo; temia a Deus e evitava o mal. Tinha ele sete filhos e três filhas, e possuía sete mil ovelhas, três mil camelos, quinhentas parelhas de boi e quinhentos jumentos, e tinha muita gente a seu serviço. Era o homem mais rico do oriente. Jó 1:1-3</p>
          </div>
        </div>
      </div>
    </div>';
    echo ' <div class="example-1 example-3 card">
      <div class="wrapper" style="background: url(https://images.pexels.com/photos/54326/runners-male-sport-run-54326.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center/cover no-repeat;">
        <div class="date">
          <span class="day">18</span>
          <span class="month">Out</span>
          <span class="year">2022</span>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">Autor: Lucas </span>
            <h1 class="title"><a href="https://www.bibliaonline.com.br/nvi/atos/8">Atos 8 e 9</a></h1>
            <p class="text">E Saulo estava ali, consentindo na morte de Estêvão. Naquela ocasião desencadeou-se grande perseguição contra a igreja em Jerusalém. Todos, exceto os apóstolos, foram dispersos pelas regiões da Judéia e de Samaria. Alguns homens piedosos sepultaram Estêvão e fizeram por ele grande lamentação. Atos 8:1,2</p>        
          </div>
        </div>
      </div>
    </div>';
      break;
  }
}

?>
