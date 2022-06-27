<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    if (isset($_GET['mail']) && isset($_GET['name']) && isset($_GET['age'])) {
        $mail = $_GET['mail'];
        $name = $_GET['name'];
        $age = $_GET['age'];

        // funzione che trova la chiocciola nella email 
        $chiocciola = strpos($mail, '@');
        // funzione che determina la lunghezza di name
        $name_lenght = strlen($name);
        // funzione che determina se l'eta inserita e un numero o una stringa
        $age_type = is_numeric($age);
        //condizione che controlla se le condizioni sono vere.
        if ($chiocciola !== false && strpos($mail, '.', $chiocciola !== false) && $name_lenght > 3 &&  $age_type) {
            $result = '<div>Accesso consetito</div>'; 
        } else {
            $result = '<div>Accesso negato</div>';
        }



    } else {
        $result = '';
        $message = 'Inserisci i dati corretti' ;
    }
    
   
   
   

    
    

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
	<label for="mail">inserisci la tua mail</label>
    <input type="text" name="mail" id="email">
    <br>
    <label for="name">inserisci il tuo nome</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="age">inserisci la tua eta</label>
    <input type="text" name="age" id="age"> 
    <br>
	<button>invia</button>
</form>
<h2><?= $message ?></h2>
<?= $result ?>



</body>
</html>

<style>

#email, #name, #age{
    margin-bottom: 10px;
}






</style>