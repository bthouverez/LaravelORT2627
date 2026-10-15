<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pokemons</title>
	<style>	
		table {
			width: 100%;
			border-collapse: collapse;
			text-align:center;
		}
		tr, td, th {
			border: 1px solid black;
		}
	</style>
</head>
<body>

	<table>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Taille</th>
			<th>Poids</th>
			<th>Vie</th>
			<th>Genre</th>
			<th>Date capture</th>
			<th>Niveau</th>
			<th>Shiny</th>
			<th>Image</th>
		</tr>
		@foreach($pokemons as $pokemon)

			<tr>
				<td>{{ $pokemon->id }}</td>
				<td>{{ $pokemon->name }}</td>
				<td>{{ $pokemon->height }}</td>
				<td>{{ $pokemon->weight }}</td>
				<td>{{ $pokemon->life }}</td>
				<td>{{ $pokemon->genre ? 'Femelle' : 'Male' }}</td>
				<td>{{ $pokemon->captured_at }}</td>
				<td>{{ $pokemon->level }}</td>
				<td>{{ $pokemon->is_shiny ? 'Oui' : 'Non' }}</td>
				<td><img width="150" src="{{ $pokemon->image }}" alt="Image {{ $pokemon->name}}"></td>

			</tr>

		@endforeach
	</table>
</body>
</html>