<?php
/**
 * we gaan contact maken met de mysql server
 */
$dsn ="mysql:host=localhost;dbname=atractiepark;charset=UTF8";

try{

    $pdo= new PDO($dsn,'root');

if ($pdo) {
    //echo"Er is een verbindling met de mysql-server";
}else{
    echo"Er is een interne server-error, naam contact op met de beheerder";
}
}catch(PDOException $e){
   echo $e->getMessage();
}

  /**
   * we gaan een insert-query maken voor het wegschrijven van de formulliergegevens 
   */
  $sql = "INSERT INTO achtbaan (`Id`, 
  `Naam_Achtbaan`, 
  `Naam_Pretpark`, 
  `Naam_Land`, 
  `Topsnelheid`, 
  `Hoogte`, 
  `Datum_eerste_opening`, 
  `Cijfer_voor_achtbaan` )
VALUES              (NULL
  ,:naam-achtbaan
  ,:naam-pretpark
  ,:naam-land
  ,:topsnelheid
  ,:hoogte
  ,:datum-eerste-opening
  ,:cijfer-achtbaan);";

// We bereiden de sql-query voor met de method prepare


$statement = $pdo->prepare($sql);

$statement->bindValue(':naam-achtbaan', $_POST['naam-achtbaan'], PDO::PARAM_STR);
$statement->bindValue(':naam-pretpark', $_POST['naam-pretpark'], PDO::PARAM_STR);
$statement->bindValue(':naam-land', $_POST['naam-land'], PDO::PARAM_STR);
$statement->bindValue(':topsnelheid', $_POST['topsnelheid'], PDO::PARAM_STR);
$statement->bindValue(':hoogte', $_POST['hoogte'], PDO::PARAM_STR);
$statement->bindValue(':datum-eerste-opening', $_POST['datum-eerste-opening'], PDO::PARAM_STR);
$statement->bindValue(':cijfer-achtbaan', $_POST['cijfer-achtbaan'], PDO::PARAM_STR);
// We vuren de sql-query af op de database


$result = $statement->execute();


if($result){
    echo "Er is een nieuw record gemaakt in de datebase";
    // header('Refresh:2; url=read.php');
}else{
    echo "Er is geen nieuw record gemaakt";
    // header('Refresh:2; url=read.php');
}

