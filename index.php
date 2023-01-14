<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

$today = date("d/m/Y");
echo $today;
echo "<br><br>";

## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$today2 = date("d-m-y");
echo $today2;
echo "<br><br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.

$today3 = date("D d M Y");
echo $today3;
echo "<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

$today4 = strtotime('day');
echo $today4;
echo "<br><br>";

$today5 = strtotime('2016/08/02 15:00:00');
echo $today5;
echo "<br><br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

$dateToday = new DateTime('2023-01-14');
$dateYars = new DateTime('2016-05-16');

$interval = $dateToday->diff($dateYars);
$annee = $interval->y;
$mois = $interval->m;
$jour = $interval->d;
$total = ($annee * 365 + 1) + $mois * 30 + $jour;
echo $total;
echo "<br><br>";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

$dateYars1 = new DateTime('2016-03-01');
$dateYars2 = new DateTime('2016-02-01');

$interval2 = $dateYars1->diff($dateYars2);
$mois2 = $interval2->m;
$jour2 = $interval2->d;
$total2 = $mois2 * 29 + $jour2;
echo $total2;
echo "<br><br>";

##Exercice 7 Afficher la date du jour + 20 jours.

$dateToday2 = new DateTime( '2023-01-14' ,new DateTimeZone('Europe/Paris'));
$dateToday2->modify("+20 hour");
echo $dateToday2->format('Y-m-d H:i:s');
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours

$dateToday3 = new DateTime('2023-01-14');
$dateToday3->modify("-22 hour");
echo $dateToday3->format('Y-m-d H:i:s');
echo "<br><br>";

## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )
?>

<label for="mois">mois</label>
<select>
    <?php
    $janvier = new DateTime('2022-01-14');
    $correct = $janvier->format('M');
    $fevrier = $janvier->modify("+1 month");
    $correct2 = $fevrier->format('M');
    $mars = $janvier->modify("+1 month");
    $correct3 = $mars->format('M');
    $avril = $janvier->modify("+1 month");
    $correct4 = $avril->format('M');
    $mai = $janvier->modify("+1 month");
    $correct5 = $mai->format('M');
    $juin = $janvier->modify("+1 month");
    $correct6 = $juin->format('M');
    $juillet = $janvier->modify("+1 month");
    $correct7 = $juillet->format('M');
    $aout = $janvier->modify("+1 month");
    $correct8 = $aout->format('M');
    $septembre = $janvier->modify("+1 month");
    $correct9 = $septembre->format('M');
    $octobre = $janvier->modify("+1 month");
    $correct10 = $octobre->format('M');
    $novembre = $janvier->modify("+1 month");
    $correct11 = $novembre->format('M');
    $decembre = $janvier->modify("+1 month");
    $correct12 = $decembre->format('M');

    echo "<option> $correct </option>";
    echo "<option> $correct2 </option>";
    echo "<option> $correct3 </option>";
    echo "<option> $correct4 </option>";
    echo "<option> $correct5 </option>";
    echo "<option> $correct6 </option>";
    echo "<option> $correct7 </option>";
    echo "<option> $correct8 </option>";
    echo "<option> $correct9 </option>";
    echo "<option> $correct10 </option>";
    echo "<option> $correct11 </option>";
    echo "<option> $correct12 </option>"
    ?>
</select>

<label for="année">mois</label>
<select>
    <?php
    $annee1 = new DateTime('2022-01-14');
    $correction = $annee1->format('Y');
    $annee2 = $annee1->modify("-1 year");
    $correction2 = $annee2->format('Y');
    $annee3 = $annee1->modify("-1 year");
    $correction3 = $annee3->format('Y');
    $annee4 = $annee1->modify("-1 year");
    $correction4 = $annee4->format('Y');
    $annee5 = $annee1->modify("-1 year");
    $correction5 = $annee5->format('Y');
    $annee6 = $annee1->modify("-1 year");
    $correction6 = $annee6->format('Y');
    $annee7 = $annee1->modify("-1 year");
    $correction7 = $annee7->format('Y');
    $annee8 = $annee1->modify("-1 year");
    $correction8 = $annee8->format('Y');
    $annee9 = $annee1->modify("-1 year");
    $correction9 = $annee9->format('Y');
    $annee10 = $annee1->modify("-1 year");
    $correction10 = $annee10->format('Y');
    $annee11 = $annee1->modify("-1 year");
    $correction11 = $annee11->format('Y');
    $annee12 = $annee1->modify("-1 year");
    $correction12 = $annee12->format('Y');

    echo "<option> $correction </option>";
    echo "<option> $correction2 </option>";
    echo "<option> $correction3 </option>";
    echo "<option> $correction4 </option>";
    echo "<option> $correction5 </option>";
    echo "<option> $correction6 </option>";
    echo "<option> $correction7 </option>";
    echo "<option> $correction8 </option>";
    echo "<option> $correction9 </option>";
    echo "<option> $correction10 </option>";
    echo "<option> $correction11 </option>";
    echo "<option> $correction12 </option>"
    ?>
</select>

