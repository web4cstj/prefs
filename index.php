<?php
/*
CONSIGNES
=========
- Dans le prologue (en début de fichier), récupérer les données GET suivantes : 
  - $backgroundColor, $color, $fontFamily, $fontSize et $lineHeight
  - Donner comme valeur par défaut à ces variables leur valeur actuelle
- Placer ces variables dans le document pour le rendre dynamique
- Tester l'application, en ajoutant le texte suivant(données) à la fin de l'adresse : ?color=999999&fontFamily=papyrus
- Ajouter dans le documents des liens permettant de recharger la page avec différentes mises en page
- Ultimement, faire un formulaire pour gérer les transformations
*/
$backgroundColor = "#FFFFCC";
if (isset($_GET['backgroundColor'])) {
	$backgroundColor = $_GET['backgroundColor'];
}
$color = "#000000";
if (isset($_GET['color'])) {
	$color = $_GET['color'];
}
$fontFamily = "Arial";
if (isset($_GET['fontFamily'])) {
	$fontFamily = $_GET['fontFamily'];
}
$fontSize = "16px";
if (isset($_GET['fontSize'])) {
	$fontSize = $_GET['fontSize'];
}
$lineHeight = "2";
if (isset($_GET['lineHeight'])) {
	$lineHeight = $_GET['lineHeight'];
}
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Préférences</title>
<style type="text/css">
body {
	background-color:<?php echo $backgroundColor ?>;
	color:<?php echo $color ?>;
	font-size:<?php echo $fontSize ?>;
	font-family:<?php echo $fontFamily ?>;
	line-height:<?php echo $lineHeight ?>;
}
</style>
</head>

<body>
	<h1>Lorem ipsum dolor sit amet</h1>
	<p>Consectetur adipiscing elit. Etiam mollis ultricies lorem. Duis tincidunt. Praesent mattis turpis vitae elit. Vivamus velit. Cras sollicitudin turpis a eros. Sed a est. Duis quis tellus posuere turpis dignissim luctus. Morbi auctor justo ac neque. Nullam tempor nulla eget augue. Etiam dignissim ante sed risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, diam vel condimentum porttitor, pede elit convallis turpis, eget luctus felis quam vel ante. Curabitur odio odio, aliquet non, placerat eget, pharetra sed, ligula. Sed nisl. Fusce rutrum sagittis nunc. Fusce quis lacus id nisi tristique fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque vitae lacus. Quisque non magna in eros fermentum vulputate. Maecenas sollicitudin erat et urna.</p>
	<p>Etiam vel eros et velit cursus faucibus. Sed sed enim. Praesent ut enim sit amet tortor aliquet euismod. Sed aliquam semper dui. Donec quam ante, ornare id, accumsan sed, eleifend ut, mauris. Vivamus tempus interdum nibh. Nunc dolor risus, rutrum ut, malesuada a, pretium ac, est. Nunc ut augue. Cras tempus magna rutrum enim. In hac habitasse platea dictumst. Quisque faucibus, sem in scelerisque vehicula, libero augue lobortis ipsum, sit amet congue mi nulla quis enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan, pede elementum ultricies fermentum, pede quam posuere risus, quis porttitor lectus mauris semper est. Proin eleifend volutpat elit. Nam pulvinar.</p>
	<p>Suspendisse vel tortor vitae magna pretium iaculis. Pellentesque nibh elit, mattis eget, accumsan sed, eleifend a, arcu. Cras luctus facilisis metus. Nulla vitae risus fermentum enim placerat pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum eu magna non risus congue pretium. Curabitur sollicitudin ligula in urna. Morbi sed magna in mi blandit sagittis. Nullam nec lacus. Sed consequat tempor ante.</p>
	<p>Vestibulum volutpat lorem quis quam. In id felis. Praesent congue felis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet tellus. Maecenas sed turpis sit amet nulla ultricies auctor. Praesent elementum gravida pede. Proin ac turpis id turpis lacinia tristique. Maecenas facilisis molestie augue. Integer tincidunt aliquet est. Duis ornare tempor sem. Duis lacinia gravida ligula. Donec metus magna, sodales sed, vulputate quis, vehicula eget, nisi. In malesuada lacus tempor nunc. Aenean in augue quis velit sagittis posuere. Quisque ornare. Nam congue massa ut lorem.</p>
	<p>Donec vel urna ut justo semper scelerisque. Mauris dapibus nisi sit amet dui. Proin et velit eget mi egestas commodo. Nam eros felis, dapibus in, viverra sit amet, semper mollis, libero. Integer vitae leo. Duis sagittis pharetra ligula. Suspendisse ante nibh, pulvinar nec, auctor vel, hendrerit sit amet, tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean sollicitudin, odio non pellentesque ultricies, mi urna suscipit lorem, in tristique elit augue at lorem. Ut felis massa, tincidunt non, consectetur at, interdum et, velit. Vivamus congue dictum metus. Etiam sodales blandit ligula. In volutpat lacus in justo. Cras quis nunc. Proin sit amet eros et neque eleifend fermentum. Nullam lacus est, consequat id, fermentum eget, tempor porttitor, odio. Nunc fermentum congue turpis. Fusce id mi.</p>
	<div><a href="formulaire.php?backgroundColor=<?php echo urlencode($backgroundColor); ?>&color=<?php echo urlencode($color); ?>&fontSize=<?php echo urlencode($fontSize); ?>&fontFamily=<?php echo urlencode($fontFamily); ?>&lineHeight=<?php echo urlencode($lineHeight); ?>">Modifier mes préférences</a></div>
</body>
</html>