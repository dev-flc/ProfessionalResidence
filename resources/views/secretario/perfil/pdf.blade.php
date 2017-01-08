<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style type="text/css">
		p
		{
			font-size: 20px;
			text-align: justify;
		}
	</style>
	<center>
		<h1><strong>TITULO: </strong>{{ $acta->ACT_nombre }}</h1>
	</center>
	<p>{{ $acta->ACT_descripcion }}</p>

</body>
</html>