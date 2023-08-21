<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all'utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censur

nel primo file index.php ci sarà il form 
nel secondo file deve ricevere la richesta e stampare il paragrafo e quanto lungo e poi sotto stampa di nuovo il paragrafo e la sua lunghezza ma solo dopo aver sostituito all'interno del paragrafo la parola da censurare con 3 asterischi 

con la action conterrà il riferimento dell'altro file 
 -->
<?php
 
?>

<form action="form.php" method="GET">
    <textarea name="textarea" cols="30" rows="10"></textarea>
    <button>
        invia
    </button>
</form>


    
</body>
</html>