<!DOCTYPE html>
<html>
<body>

<h1>AUGEST</h1>
<h2>Automatický generátor statusu<h2>
  
<h3>Ahoj tohle je AUGEST!<br>Taky se vám někdy stalo, že chcete na své sociální sítě přidat nějaký intelektuální, a přitom jednodužším lidem stále dostupný, status?
Například motivační, láskyplný statusík od srdíčka?<br>Mě taku ne, ale stejně je tady toto elegantní řešení v podobě prostého generátoru, studnice moudrosti, 
náhodných slov tvořících věty... a tak vůbec.<br></h3>
<h3>Stiskněte tlačítko níže a zkopírujte text z okna pod ním.</h3>
<p>DISCLAIMER: Autor aplikace není odpovědný za případné poškození vašeho zařízení, podráždění očí, uvolnění zubní náhrady ani krvácení v oblasti konečníku.</p><br>

<form method="POST">
  <br><input type="submit" value="Generovat"><br>
</form>

<?php
if (isset($a))
{
  $a=rand(1,10); //První věta (a+b)
  $b=rand(11,15);
  $c=array(
    "Život je jako bonboniéra",
    "Někdy mám pocit, že se svět zbláznil, pak přijde ona a všechno je v pohodě",
    "Minulost nezměním, moc mi chybíš",
    "Doktor mi zakázal pít tvrdej. Chápu proč",
    "Jednou snad pochopím, proč ti tak vadily mé zlotvyky",
    "Když jsem byl malý, táta mě vzal do města, podívat se na průvod",
    "Slyšel jsem, jak moc našemu organismu škodí pití alkoholu",
    "Moje přítelkyně mě podvedla s jejím bývalým. Omluvila se",
    "Včera jsem si byl po ránu zaběhat a musím říct, že při vybíhání schodů jsem poznal rozdíl",
    "Sousedi dělali večer hroznej randál, měli prý takovou menší hádku",
    ", ale čekal bych spíš ten sex, no. ",
    ", ale válka je válka. ",
    ", a tak je to správné, kamarádi. ",
    ", někdy to tak prostě musí být. ",
    ", ale přemíšlím o dobrovolné eutanázii. ",
    );
  $ab=$a.$b;
  echo '<textarea columns="20" rows="10">'.$ab.'</textarea>';
}
else $a=1;
?>

</body>
</html>
