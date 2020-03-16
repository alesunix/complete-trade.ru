<?php

# Данные о странице
$title = 'Услуги';
$keywords = 'Бишкек,дизаин';
$description = 'Еще одним из успешных направлении  нашей компании является разработка дизаинов';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<style>
.well {
background: #fff; /* Цвет фона */
}
.tabl {
-webkit-justify-content: center;
-ms-flex-pack: justify;
justify-content: center;
-webkit-flex-wrap: wrap;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-align-items: flex-start;
-ms-flex-align: start;
align-items: center;
}
.tab {
position: relative;
overflow: hidden;
#margin: 5px;
width: 40%;
#background: #1111119e;
font-family: inherit;
font-size: 1em;
text-align: center;
cursor: pointer;
}
/* MEDIA QUERIES */
@media all and (max-width: 950px) and (min-width: 701px){
.tab {
    display:block;
    width:47%;
  }
}
@media all and (max-width: 700px) and (min-width: 0px){
.tab {
    display:block;
    width:100%;
  }
}
</style>
<div class='well well-small'>
<center>
<h7>
<div class="tabl">
<div class="tab">
Еще одним из успешных направлении  нашей компании <br>
является разработка дизаинов как полностью бренда, <br>
так и отдельно этикеток, колпачков, крышек, бутылок,  <br>
логотипа, post-материалов и многое другое. Мы <br>
гарантируем конфиденциальность полученнои <br>
информации о новых видах  продукции клиента. <br>
Разработки наших дизайнеров на протяжении последних <br>
десяти лет являются лучшими в сфере <br>
алкогольной продукции.<br>
</div>
<div class="tab">
<img src="/i/2.jpg" width=70% alt="">
</div>

<div class="tab">
<img src="/i/1.jpg"  width=70% alt="">
</div>
<div class="tab">
Персонал компании постоянно совершенствует свои <br>
знания посредством изучения последних тенденций  <br>
и технологии, применяемых в изготовлении печатной  <br>
продукции, в частности этикеточной продукции. Ваши <br>
этикетки будут лучшими на рынке. Ведь мы <br>
изготавливаем их у ведущего производителя  <br>
этикеточной продукции в странах  Европы.<br>
</div>
<div class="tab">
Дизайнерские разработки: <br>
Идея, этикетка, медальон, термоколпачок, <br>
гуала, колпачок винтовои , колпачки, <br>
гофрокороб или поддон, коробка подарочная, <br>
фирменный  ценник, фирменный шелфтокер, <br>
фирменный  воблер, фирменная листовка, фирменныи  <br>
буклет,  фирменный каталог, плакат, билборд, лайтбокс, <br>
визитка, логотип, фирменный бланк, сертификат, бренд.<br>
</div>
<div class="tab">
<img src="/i/design.png"  width=70% alt="">
</div>
</div>
</h7>
</center>
<style>
.servises {
    width: 80%; /* Ширина таблицы */  
	padding: 10px;
    text-align: center;  	
}
</style>









</div>
EOF;
