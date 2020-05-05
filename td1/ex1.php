<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<a href="/web-dyna-alt/tp1/ex1.php?message=Hello">Afficher Hello</a>
<a href="/web-dyna-alt/tp1/ex1.php?message=message2">Afficher le message 2</a>
<a href="/web-dyna-alt/tp1/ex1.php?message=message3">Afficher le message 3</a>
<br>
<?php
echo "Le message est ".$_GET["message"];
?>
</body>
</html>