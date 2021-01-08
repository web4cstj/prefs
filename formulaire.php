<?php
/*
CONSIGNES
=========
- Dans le prologue (en début de fichier), récupérer les données GET suivantes : 
  - $backgroundColor, $color, $fontFamily, $fontSize et $lineHeight
  - Donner comme valeur par défaut à ces variables leur valeur actuelle
- Placer ces variables dans le document pour le rendre dynamique
- Tester l'application, en ajoutant le texte suivant(données) à la fin de l'adresse : ?color=999999&fontFamily=papyrus
- Ajouter dans le document des liens permettant de recharger la page avec différentes mises en page
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
	<form action="index.php">
		<h1>Mettre à jour mes préférences</h1>
		<table>
			<tr>
				<th><label for="backgroundColor">backgroundColor</label></th>
				<td><input type="color" name="backgroundColor" id="backgroundColor" value="<?php echo $backgroundColor; ?>"></td>
			</tr>
			<tr>
				<th><label for="color">color</label></th>
				<td><input type="color" name="color" id="color" value="<?php echo $color ?>"></td>
			</tr>
			<tr>
				<th><label for="fontSize">fontSize</label></th>
				<td><input type="text" name="fontSize" id="fontSize" value="<?php echo $fontSize ?>"></td>
			</tr>
			<tr>
				<th><label for="fontFamily">fontFamily</label></th>
				<td><input type="text" name="fontFamily" id="fontFamily" value="<?php echo $fontFamily ?>" list="families"><datalist id="families">
					<option value="Papyrus"></option>
					<option value="Isadora"></option>
					<option value="Comic Sans MS"></option>
					<option value="Courier"></option>
					<option value="Verdana"></option>
				</datalist></td>
			</tr>
			<tr>
				<th><label for="lineHeight">lineHeight</label></th>
				<td><input type="number" name="lineHeight" id="lineHeight" step=".1" value="<?php echo $lineHeight; ?>"></td>
			</tr>
			<tr>
				<th colspan="2"><button type="submit">Mettre à jour</button></th>
			</tr>
		</table>
	</form>
</body>
</html>