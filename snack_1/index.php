<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$arr_partite = [
	//partita 1
	[
		[
			'nome'		=> 'Olimpia Milano',
			'di_casa'	=> true,
			'punteggio'	=> 55
		],
		[
			'nome'		=> 'Cantù',
			'di_casa'	=> false,
			'punteggio'	=> 60
		],
	],
	//partita 2
	[
		[
			'nome'		=> 'Bari',
			'di_casa'	=> false,
			'punteggio'	=> 80
		],
		[
			'nome'		=> 'Taranto',
			'di_casa'	=> true,
			'punteggio'	=> 90
		],
	],
	//partita 3
	[
		[
			'nome'		=> 'Parma',
			'di_casa'	=> true,
			'punteggio'	=> 99
		],
		[
			'nome'		=> 'Internazionale',
			'di_casa'	=> false,
			'punteggio'	=> 105
		],
	],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>13° Giornata di Campionato</h2>
    <?php
    // associamo ad una variabile la funzione che conta gli elementi nell'array
	$arr_length = count($arr_partite);
    // ciclo for nel array
	for ($_i = 0; $_i < $arr_length ; $_i++) {
        // associamo alla variabile l'elemento iesimo
		$partita = $arr_partite[$_i];

		//stampiamo il div con le partite e la condizione della classe ?>
		<div>
			<span class="<?= $partita[0]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[0]['nome'] ?></span>
			<span class="<?= $partita[1]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[1]['nome'] ?></span>
			<?= " | {$partita[0]['punteggio']}-{$partita[1]['punteggio']}" ?>
		</div><?php
	} ?>
</body>
</html>

<style>

.casa{
    background-color: red;
}

.ospite{
    background-color: green;
}



</style>