<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LISTADO DE USUARIO</title>
</head>
<body>
	<h1>Usuarios</h1>
	<ul>

	<?php foreach ($User as $user): ?>
		<li><?php echo $user ?></li>

	<?php endforeach; ?>
	</ul>
	

</body>
</html>