<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=it-les', 'root', '');
}
catch (Exception $e)
{
die('Erreur: ' . $e->getMessage());
}

$req = $bdd->query('select * from candidat');
$req = $bdd->prepare('INSERT INTO candidat(cursus, civility,firstname,lastname ,mail, phone,dob,pob,nationality,lastdegree,curentlevel,leschoice,candidatType)VALUES(:cursus, :civility,:firstname,:lastname ,:mail, :phone,:dob,:pob,:nationality,:lastDegree,:curentLevel,:lesChoice,:candidatType)');
if(isset($_POST['formGamer'])){
$candidatType = 'gamer'   ;
}else{
$candidatType = 'creator'   ;
}
$req->execute(array(
    'cursus' => $_POST['cursus'],
    'civility' => $_POST['civility'],
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'mail' => $_POST['mail'],
    'phone' =>  $_POST['phone'],
    'dob' =>  $_POST['dob'],
    'pob' =>  $_POST['pob'],
    'nationality' =>  $_POST['nationality'],
    'lastDegree' =>  $_POST['lastDegree'],
    'curentLevel' =>  $_POST['curentLevel'],
    'lesChoice' => 'fdsfesfesf',
    'candidatType' => $candidatType
));
$id_candidat = $bdd->query("SELECT  max(id) as id from  candidat");
$id_candidat = $id_candidat->fetch();
$req = $bdd->prepare('INSERT INTO bac(id_candidat, stream,distinction,bacschoolname,city ,	country, obtainingyear)VALUES(:id_candidat, :stream,:distinction,:bacSchoolName,:city ,:country, :obtainingYear)');
$req->execute(array(
    'id_candidat' =>  $id_candidat['id'],
    'stream' =>  $_POST['stream'],
    'distinction' =>  $_POST['distinction'],
    'city' =>  $_POST['bacSchoolCity'],
    'bacSchoolName' =>  $_POST['bacSchoolName'],
    'country' =>  $_POST['bacCountry'],
    'obtainingYear' =>  $_POST['bacYear'],
));
$req = $bdd->prepare('INSERT INTO postbac(id_candidat, postDegree,	postSchoolName,city ,country, obtainingyear)VALUES(:id_candidat, :postDegree,:postSchoolName,:city ,:country, :obtainingYear)');
for($i=0;$i<4;$i++){
    if(!empty( $_POST['postDegree'.$i]) and !empty( $_POST['postSchoolName'.$i]) and !empty( $_POST['postCity'.$i])
        and !empty( $_POST['postCountry'.$i]) and !empty( $_POST['postYear'.$i])){
        $req->execute(array(
            'id_candidat' =>  $id_candidat['id'],
            'postDegree' =>  $_POST['postDegree'.$i],
            'postSchoolName' =>  $_POST['postSchoolName'.$i],
            'city' =>  $_POST['postCity'.$i],
            'country' =>  $_POST['postCountry'.$i],
            'obtainingYear' =>  $_POST['postYear'.$i]
        ));
    }
}
if(isset($_POST['formGamer'])){
    $req = $bdd->prepare('INSERT INTO gamerinfos(id_candidat, rangSoloQ,position,rang)VALUES(:id_candidat, :rangSoloQ,:position,:rang)');
    $listRangAnnee=[];
    for($i=1;$i<4;$i++){
        if(!empty( $_POST['gamerang'.$i])){
            $rang=  array($_POST['gamerang'.$i] => $i);
            array_push($listRangAnnee ,$rang);
        }
    }
    $listRangAnnee = serialize($listRangAnnee);
    $req->execute(array(
        'id_candidat' =>  $id_candidat['id'],
        'rangSoloQ' =>  $_POST['rangSoloQ'],
        'position' =>  $_POST['position'],
        'rang' => $listRangAnnee,
    ));
	$InsGamer = 'InsGamer.php?validate=1';
    header('Location: http://www.it-les.com/InsGamer.php?validate=1');
    exit;
}
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$InsCreator = 'InsCreateur.php?validate=1';
header("Location: http://$host$uri/$InsCreator");
exit();
?>
