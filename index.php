<?php
session_start();
header("Content-Type: text/html; charset=utf-8"); 
$_SESSION['test'] = $_SERVER['REMOTE_ADDR']; 
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<title>Регистрация на сайте "Морской бриз" </title>
<link rel="stylesheet" href="style.css" media="all">
</HEAD>

<body>
<div class="button1">
<p> <button>Личный кабинет</button> </p>
</div>

<HEADER>
<div class="header1">
<p>Туристическое агенство "Морской бриз"</p>
</div>
<aside>
<p>Звонки принимаются круглосуточно +7(912)767-373-7</p>
</aside>
<div class="kursive">
Лето круглый год
</div>
</HEADER>

<div class="blok">
<div class="name">
<p>Регистрация нового клиента</p>
</div>
<div class="pole">
	<form method="post" action="php/toclients.php">
      <p>Email:
        <input type="email" name="email" id="email" value="" placeholder="Email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required/>
		*
      </p>
	  <p>Пароль:
        <input type="password" name="password" id="password" value="" placeholder="Password" pattern="([0-9A-zА-Яа-яЁё\s-]{4,18})" required/>
		*
	  </p>
	  <p>Фамилия:
        <input type="text" name="surname" id="surname" value="" placeholder="Surname" pattern="([A-zА-Яа-яЁё\s-]{1,18})"/>
      </p>
	  <p>Имя:       
        <input type="text" name="name" id="name" value="" placeholder="Name" pattern="([A-zА-Яа-яЁё\s-]{1,18})"/>
      </p>
	  <p>Телефон:
        <input type="tel" name="phone" id="phone" value="" placeholder="Phone" pattern="([0-9+]{5,20})"/>
      </p>
      <p class="submit"><input type="submit" name="commit" value="Зарегистрироваться"></p>
		<?php 
			echo $_SESSION['message'];
			$_SESSION['message'] = ''; 
		?>
     </form>
	 <form>
		<p class="asubmit"><button formaction="php/showclients.php">Показать всех Show All Notes</button></p>
	 </form>	
	 <form>
		<p class="asubmit"><button formaction="php/showlastclients.php">Показать последнего зарегистрированного Show All Last Added Note</button></p>
	 </form>
	 
</div>
</div>

<div class="oplata">
<img src="pic/Oplata1.png" alt="00000">
</div>

<footer>
    #Генеральный директор агенства: Спешилова Ольга Алексеевна (АСУ-13-1б)
</footer>

</BODY>
</HTML>