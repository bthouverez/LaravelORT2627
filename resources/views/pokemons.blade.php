<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pokemons</title>
</head>
<body>

	<ul>
		@foreach($pokemons as $pokemon)

			<li>Voici un pokemon {{ $pokemon }}</li>

		@endforeach
	</ul>
</body>
</html>