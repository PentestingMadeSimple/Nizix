<!DOCTYPE html>
<html>
<head>
<title>Eseguo script</title>
</head>
<body>
<?php
// provo  exec

echo exec('whoami');
?>
//whoami restituisce l'user di linux che esegue questo script

<?php
// provo la funzione shell_exec

$out=shell_exec('ifconfig');

echo '<pre>'.$out.'</pre>';

?>
//ifconfig restituisce il risultato dell'istruzione
// (e' possibile che qualche permesso importante non faccia funzionare questa funzione)



//questa e' una funzione javascript  
// 
<script>
function ciao() {
alert("Ciao buste!");
}
</script>

//Questo bottone esegue la funzione
// 
<button type="button" onclick="ciao()">Click Me!</button>




//phpinfo() ci restituisce un sacco di informazioni importanti
// 
<?php

phpinfo();
phpinfo(INFO_MODULES);

?>

</body>
</html>