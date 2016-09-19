<?
define('PROTECTOR', 1);

$headmod = 'pers';//фикс. места

$textl='Персонаж';
include('files/path.php');
include($path.'files/db.php');
include($path.'files/auth.php');
include($path.'files/func.php');
include($path.'files/core.php');
include($path.'files/head.php');
include($path.'files/zag.php');
if(empty($_GET[act])){
if($udata[lvl]<5){
$st="NG";}
elseif($udata[lvl]>=5 and $udata[lvl]<10){
$st="D";}
elseif($udata[lvl]>=10 and $udata[lvl]<15){
$st="C";}
elseif($udata[lvl]>=15 and $udata[lvl]<20){
$st="B";}
elseif($udata[lvl]>=20 and $udata[lvl]<25){
$st="A";}
elseif($udata[lvl]>25){
$st="S";}

if($udata[klas]=="wizard"){$kl="m";$kln="Маг";}
if($udata[klas]=="fighert"){$kl="f";$kln="Воин";}
echo"Ник: <b>$log<font color='grey'>";
if($udata[storona]=="white"){echo" [Светлый ";}
if($udata[storona]=="black"){echo" [Тёмный ";}
echo $kln;
echo"]</font></b><br/>";
////////////////////////////////////////////////////////////////////////////////////

	if($udata['pol'] == 'w'){
		echo "<img src='pic/ava/w.png'><br />";
	}
	else{
	$telo = mysql_result(mysql_query("SELECT COUNT(*) FROM `item` WHERE `usr` = '".$log."' AND tip='body' AND image='yes'"),0);
	
	if($telo){
	$bodys = mysql_result(mysql_query("SELECT `images` FROM `item` WHERE `usr` = '".$log."' AND tip='body' AND image='yes' LIMIT 1"),0);
	}
	else{
		$bodys = "0.png";
	}
		$head = mysql_result(mysql_query("SELECT COUNT(*) FROM `item` WHERE `usr` = '".$log."' AND tip='golova' AND image='yes'"),0);
	
	if($head){
	$heads = mysql_result(mysql_query("SELECT `images` FROM `item` WHERE `usr` = '".$log."' AND tip='golova' AND image='yes' LIMIT 1"),0);
	}
	else{
		$heads = "0.png";
	}
			$foot = mysql_result(mysql_query("SELECT COUNT(*) FROM `item` WHERE `usr` = '".$log."' AND tip='nogi' AND image='yes'"),0);
	
	if($foot){
	$foots = mysql_result(mysql_query("SELECT `images` FROM `item` WHERE `usr` = '".$log."' AND tip='nogi' AND image='yes' LIMIT 1"),0);
	}
	else{
		$foots = "0.png";
	}
	
			$weapon = mysql_result(mysql_query("SELECT COUNT(*) FROM `item` WHERE `usr` = '".$log."' AND tip='weapon' AND image='yes'"),0);
	
		if($weapon){
	$weapons = mysql_result(mysql_query("SELECT `images` FROM `item` WHERE `usr` = '".$log."' AND tip='weapon' AND image='yes' LIMIT 1"),0);
	}
	else{
		$weapons = "0.png";
	}
echo"<style type='text/css'>
.layer1 {
position: absolute;
width: 200px;
height: 300px;
background: transparent url('pic/ava/m.gif') center center no-repeat;
}
.layer2 {
position: absolute;
height: 300px;
width: 200px;
background: transparent url('pic/ava/".$bodys."') center center no-repeat;
}
.layer3{
position: absolute;
height: 300px;
width: 200px;
background: transparent url('pic/ava/".$heads."') center center no-repeat;
}
.layer4{
position: absolute;
height: 300px;
width: 200px;
background: transparent url('pic/ava/".$foots."') center center no-repeat;
}
.layer5{
position: absolute;
height: 300px;
width: 200px;
background: transparent url('pic/ava/".$weapons."') center center no-repeat;
}

</style>";

echo'
<div class="layer1"></div>
<div class="layer2"></div>
<div class="layer3"></div>
<div class="layer4"></div>
<div class="layer5"></div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
	}
	
echo"Уровень: $udata[lvl]<br/>";
if($udata[skill]>0){echo"<b>Очков для распределения: ".$udata[skill]."</b><br/>";}
echo"Опыт: $udata[exp]<br/>";
//Модификация, кол-во опыта на следующий уровень
if($udata[lvl] == 0)
{
$o = 200;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 1)
{
$o = 500;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 2)
{
$o = 1000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 3)
{
$o = 1750;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 4)
{
$o = 2750;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 5)
{
$o = 4000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 6)
{
$o = 7000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 7)
{
$o = 11955;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 8)
{
$o = 16851;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 9)
{
$o = 22973;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 10)
{
$o = 30475;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 11)
{
$o = 45000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 12)
{
$o = 60000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 13)
{
$o = 90000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 14)
{
$o = 120000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 15)
{
$o = 160000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 16)
{
$o = 210000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 17)
{
$o = 290000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 18)
{
$o = 390000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 19)
{
$o = 500000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 20)
{
$o = 750000;
$nlvl = $o-$udata[exp];
}
if($udata[lvl] == 21)
{
$o = 1000000;
$nlvl = $o-$udata[exp];
}




//Конец модификации
echo"До следующего уровня: $nlvl";
echo"<br/>";
echo"Монет: $udata[money]<br/>";
echo"Алмазов: $udata[nefrit]<br/>";
echo"Жизни: $udata[hp]/$udata[hpall]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=hp\">+5</a>]";
}echo'<br/>';
echo"Мана: $udata[mp]/$udata[mpall]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=mp\">+5</a>]";
}echo'<br/>';

if(!empty($udata[clan])){
$req = mysql_query("SELECT * FROM `clan` WHERE `lider` = '$udata[clan]' LIMIT 1");
$clan = mysql_fetch_array($req);

echo"Вы в клане: <b><a href=\"clan.php?id=$clan[id]\">$clan[name]</a></b><br/>";
}else{echo"";}
$req = mysql_query("SELECT id,name FROM `pit` WHERE `usr` = '$log'");
$avto=mysql_num_rows($req);
if($avto==1){
$pit = mysql_fetch_array($req);
echo"Питомец: <b><a href=\"pit.php?id=$pit[id]\">$pit[name]</a></b><br/>";
}
echo'<br/>';
echo"<b>Физические параметры:</b><br/>
Сила: $udata[sila]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=sila\">+</a>]";
}echo'<br/>';

echo"Ловкость: $udata[lovk]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=lovk\">+</a>]";
}echo'<br/>';

echo"Интелект: $udata[um]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=um\">+</a>]";
}echo'<br/>';

echo"Физ. Защита: $udata[prot]";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=prot\">+</a>]";
}echo'<br/>';
echo"Критический удар: $udata[krit]%";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=krit\">+</a>]";
}echo'<br/>';
echo"Крит-урон: $udata[ukrit]%";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=ukrit\">+</a>]";
}echo'<br/>';
echo"Анти-крит: $udata[antikrit]%";if($udata[skill]>0){
echo"[<a href=\"pers.php?act=skill&amp;what=antikrit\">+</a>]";
}echo'<br/>';
echo"<b>Урон: $udata[umin]/$udata[umax] +($udata[sila])</b><br/>";

$pverh=$udata[prot]+$udata[pgolova];
$pcenter=$udata[prot]+$udata[pbody];
$pniz=$udata[prot]+$udata[pnogi];
echo"<b>Защита головы: ~$pverh</b><br/>";
echo"<b>Защита туловища: ~$pcenter</b><br/>";
echo"<b>Защита ног: ~$pniz</b><br/>";

echo"[<b><a href=\"pers.php?act=mag\">Мои умения</a></b>]<br/>";
echo"[<b><a href=\"pers.php?act=stats\">Статистика</a></b>]<br/>";
echo"[<b><a href=\"pers.php?act=shmot\">Вооружение</a></b>]<br/>";
echo"[<b><a href='msg.php'>Почта</a></b>]<br/>";

////////////////////
}elseif($_GET[act]==skill){
switch($_GET[what]){
default:
echo'Ошибка! Доступ закрыт!<br/>';
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'sila':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[sila]+1;
mysql_query("UPDATE users SET skill = '$nskill',sila='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'prot':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[prot]+1;
mysql_query("UPDATE users SET skill = '$nskill',prot='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;

case 'lovk':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[lovk]+1;
mysql_query("UPDATE users SET skill = '$nskill',lovk='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;

case 'um':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[um]+1;
mysql_query("UPDATE users SET skill = '$nskill',um='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;

case 'krit':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[krit]+1;
mysql_query("UPDATE users SET skill = '$nskill',krit='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'ukrit':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[ukrit]+1;
mysql_query("UPDATE users SET skill = '$nskill',ukrit='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'antikrit':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[antikrit]+1;
mysql_query("UPDATE users SET skill = '$nskill',antikrit='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'hp':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[hpall]+5;
mysql_query("UPDATE users SET skill = '$nskill',hpall='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
case 'mp':
if($udata[skill]>0){
$nskill=$udata[skill]-1;
$nparm=$udata[mpall]+5;
mysql_query("UPDATE users SET skill = '$nskill',mpall='$nparm' WHERE `usr` = '$log'");
echo'Параметр повышен успешно!<br/>';
}else{
echo'Нет свободных очков опыта!<br/>';
}
echo"<a href=\"pers.php?\">Назад</a>";
break;
}
}
elseif($_GET[act]==shmot){
//Шмот

echo"<b>Снаряжение:</b><br/>";
$i=1;
while($i<=10){
switch($i){
case '1':
$tip='Оружие';
$gt='weapon';
break;
case '2':
$tip='Шлем';
$gt='golova';
break;
case '3':
$tip='Доспех';
$gt='body';
break;
case '4':
$tip='Плащ';
$gt='plash';
break;
case '5':
$tip='Рукавицы';
$gt='ruki';
break;
case '6':
$tip='Пояс';
$gt='poyas';
break;
case '7':
$tip='Сапоги';
$gt='nogi';
break;
case '8':
$tip='Щит';
$gt='shit';
break;
case '9':
$tip='Амулет';
$gt='amulet';
break;
case '10':
$tip='Кольцо';
$gt='kolco';
break;
}
if($gt!='kolco'){
echo"$tip: ";
$req = mysql_query("SELECT id,name FROM `item` WHERE `usr` = '$log' and `tip`='$gt' and `image`='yes'");
$avto=mysql_num_rows($req);
if($avto==0){
echo"Пусто<br/>";
}else{               
$mag = mysql_fetch_array($req);
echo" <a href='inventar.php?mod=info&amp;id=$mag[id]'><b>$mag[name]</b></a> [<a href='snyat.php?tip=$gt'><font color='red'>X</font></a>]
<br/>";
}}else{
$req = mysql_query("SELECT id,name FROM `item` WHERE `usr` = '$log' and `tip`='$gt' and `image`='yes'");
$avto=mysql_num_rows($req);
if($avto==0){
echo"Кольцо: Пусто<br/>";
echo"Кольцо: Пусто<br/>";
}elseif($avto==1){
$mag = mysql_fetch_array($req);
echo"Кольцо: <a href='inventar.php?mod=info&amp;id=$mag[id]'><b>$mag[name]</b></a> [<a href='snyat.php?tip=$gt'><font color='red'>X</font></a>]<br/>";
echo"Кольцо: Пусто<br/>";
}elseif($avto==2){
While($best = mysql_fetch_array($req))
{              
echo"Кольцо: <a href='inventar.php?mod=info&amp;id=$best[id]'><b>$best[name]</b></a> [<a href='snyat.php?tip=$gt&amp;id=$best[id]'><font color='red'>X</font></a>]<br/>";
}
}
}
$i++;
}



//Конец
}
elseif($_GET[act]==stats){
echo"<b>Статистика:</b><br/>
<b>СЛАВА: $udata[slava]</b><br/>
Предательства: $udata[predatel]<br/>
Побед на арене: $udata[arenawins]<br/>
Поражений на арене: $udata[arenaloses]<br/>
Побед: $udata[wins]<br/>
Поражений: $udata[loses]";

}
elseif($_GET[act]==mag){
$req = mysql_query("SELECT * FROM `mag` WHERE `usr` = '$log'");
if(mysql_num_rows($req)>=1)
{
While($mag = mysql_fetch_array($req))
{
$maglvl=$mag[lvl]-1;
$magmp=explode("|",$mag[mp]);
$mag[mp]=$magmp[$maglvl];//мп

$maghp=explode("|",$mag[hp]);
$mag[hp]=$maghp[$maglvl];//хп

$maghp=explode("|",$mag[plushp]);
$mag[plushp]=$maghp[$maglvl];//+хп

$maghp=explode("|",$mag[uron]);
$mag[uron]=$maghp[$maglvl];//+урон
echo'<div class="event">';
echo"<b>$mag[name]:</b><br/>";
echo"Уровень: $mag[lvl]<br/>";
echo"Класс: ";
if($mag[klas]=="wizard"){echo"Маг<br/>";}
if($mag[klas]=="fighert"){echo"Воин<br/>";}
echo"Урон: $mag[uron]<br/>";
echo"Забирает маны: $mag[mp]<br/>";
echo"Забирает здоровья: $mag[hp]<br/>";
echo"Даёт здоровья: $mag[plushp]</div>";
echo'<br/>';
$proverka_na_hilla = mysql_result(mysql_query("SELECT `hill` FROM `users` WHERE `usr` = '".$log."' LIMIT 1"),0);
	if ($proverka_na_hilla > 0){
		echo "Уровень целителя: ", $proverka_na_hilla, " лвл<br />";
	}
}
}else{
echo '<b>Нет умений!</b>';
}
echo"<a href=\"pers.php?\">Назад</a>";
}
else{
echo'Ошибка';
}
include($path.'files/down.php');
?>