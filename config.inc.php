<?php
# Общие настройки
$config							= array();
$config['sitelink']				= 'http://complete-trade.ru/'; # URL сайта, со слэшем на конце
$config['sitename']				= ''; # Заголовок сайта
$config['slogan']				= '

<div class="headerstyle">
<div class="tabstyle">
<img src="/i/Logo.png" alt="complete-trade" >
ОсОО "Комплит-Трейд" <br><small>Комплектующие и укупорочные изделия<br> для алкогольной и пищевой промышлености</small>
</div>
<div class="tabstyle">

</div>
<div class="tabstyle">
<small>График работы<br>  
 с 9.00 до 17.00 <br>  
 Пн-Пт </small>
</div>
<div class="tabstyle">
<small>
comluck@complete-trade.ru <br>  
+996 (555) 94 76 76 <br> 
+996 (312) 54 33 15 <br> 

</small>
</div></div>

'; # Слоган
$config['encoding']				= 'utf-8'; # Кодировка

$config['template']				= 'info'; # Шаблон

# Настройки доступа
$config['login']				= 'Complete'; # Логин админа
$config['password']				= '0555947676'; # Пароль админа

# Настройки доступа в закрытую зону
$config['access_login']			= 'admin'; # Логин
$config['access_password']		= 'Qaz159753'; # Пароль

### ОТПРАВКА СООБЩЕНИЙ ###

# Настройка отправки сообщений
$config['secretWord']					= 'sdfsdfgaghah'; # Секретное слово для генерации антиспама
$config['email']['receiver']			= 'comluck@complete-trade.ru'; # E-mail адрес, на который отправляется сообщение
$config['email']['subject']				= 'Письмо с сайта «' . $config['sitename'] . '»'; # Тема письма обратной связи

# Настройка формы
$config['form']['feedback']['subject']	= true; # Обязательно ли поле «Тема письма»

# Уведомления
$config['form']['feedbackSent']			= 'Сообщение отправлено администратору. Спасибо!<br>Сейчас вы будете перенаправлены на главную страницу.'; # Сообщение отправлено
$config['form']['notSent']				= 'Извините, письмо не было отправлено. Пожалуйста, повторите отправку.'; # Неудачная отправка
$config['form']['isSpam']				= 'Если вы видите данное сообщение, то скорее всего у вас отключен JavaScript. Включите его для отправки или просто отошлите письмо на ' . $config['email']['receiver']; # СПАМ?!
$config['form']['emptyEmail']			= 'Извините, e-mail не введён либо его формат неверен.'; # Нет мыла!
$config['form']['emptyName']			= 'Извините, имя не введено либо его формат неверен.'; # Нет имени!
$config['form']['emptyTopic']			= 'Извините, вы забыли указать тему письма.'; # Нет темы!
$config['form']['emptyMessage']			= 'Перед отправкой напишите сообшение.'; # Нет сообщения!