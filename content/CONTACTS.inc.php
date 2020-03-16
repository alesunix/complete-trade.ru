<?php
{
# Данные о странице
$title = 'Контактная информация ОсОО "Комплит-Трейд ';
$keywords = 'Контакты, ОсОО "Комплит-Трейд';
$description = 'Контактная информация ОсОО "Комплит-Трейд';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<div class='well well-small'>
<center>
<img src="/i/contact.png" width=300 alt=""> <br>
</center>
<br>

<div class="tabl">
<div class="tab">
<b><h7>
<br>г.Бишкек Ул.Скрябина 80 - 1 этаж, 4 офис   
<br>График работы с 9.00 до 17.00 Пн-Пт 
<br>+996 (555) 94 76 76
<br>comluck@complete-trade.ru
<br><a href="https://api.whatsapp.com/send?phone=996555947676"><img src="i/whatsapp.png" width="100" height="100" alt="WhatsApp"></a> 
<br><a href="https://www.instagram.com/eco_packaging.kg/" target="_blank"><img src="i/instagram.png" width="100" height="100" alt="instagram"></a> 
<br><a href="https://www.facebook.com/CompleteTradeKg/" target="_blank"><img src="i/facebook.png" width="100" height="100" alt="facebook"></a> 
</b></h3>
</div> 
<div class="tab">
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2925.1100603953587!2d74.60819521547184!3d42.849409179157085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb63a285a57cb%3A0x3bdeb6f96fbff918!2zMSDRjdGC0LDQtiwgNCDQvtGE0LjRgSwgODAg0YPQuy4g0KHQutGA0Y_QsdC40L3QsCwg0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1573004678209!5m2!1sru!2skg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div> </div> 







</div>
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
overflow: visible;
#margin: 5px;
width: 35%;
#background: #1111119e;
font-family: inherit;
font-size: 1em;
text-align: left;
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
    display: block;
    width:100%;
	text-align: center;
  }
  h7 {
font-size: 14px;
}
}
</style>
EOF;
}