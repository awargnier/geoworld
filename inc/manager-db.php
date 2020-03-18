<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
 * @param $continent le nom d'un continent
 * @return tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT * FROM country WHERE continent = :cont;';
    $prep = $pdo->prepare($query);
    // on associe ici (bind) le paramètre (:cont) de la req SQL,
    // avec la valeur reçue en paramètre de la fonction ($continent)
    // on prend soin de spécifier le type de la valeur (String) afin
    // de se prémunir d'injections SQL (des filtres seront appliqués)
    $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetchAll();
}

/** Obtenir la liste des pays
 * @return liste d'objets
 */


function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM country;';
    return $pdo->query($query)->fetchAll();
}

function getCountryId($id){

    global $pdo;
    $requete = "SELECT * FROM country where id = :id";

    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $id);
    $prep->execute();

    $result = $prep->fetch();
    return $result;
}


function getContinents()
{
    global $pdo;
    $query = 'SELECT  distinct  continent from country order by continent ASC;';
    return $pdo->query($query)->fetchAll();
}

function getAuthentification($login, $pass)
{
    global $pdo;
    $query = "SELECT * FROM utilisateur where login=:login and password=:pass";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pass', $pass);
    $prep->execute();

    if ($prep->rowcount() == 1) {
        $result = $prep->fetch();
        return $result;
    } else {
        return false;
    }
}

function addUser($infos)
{
    global $pdo;


    $requete = ("INSERT INTO utilisateur (login, password, role, nom, prenom) VALUES(:login,:password,:role,:nom,:prenom)");
    try {
        $prep = $pdo->prepare($requete);
        $prep->bindValue(':login', $infos['login']);
        $prep->bindValue(':password', $infos['password']);
        $prep->bindValue(':role', $infos['role']);
        $prep->bindValue(':nom', $infos['nom']);
        $prep->bindValue(':prenom', $infos['prenom']);
        $prep->execute();
    } catch (Exception $e) {
        die ("erreur dans la requete " . $e->getMessage());
    }
}

function utilisateurs()
{
    global $pdo;
    $query = 'SELECT * FROM utilisateur ';
    try {
        $result = $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } catch (Exception $e) {
        die("erreur dans la requete " . $e->getMessage());
    }
}
function getUtilisateurId($id){

    global $pdo;
    $requete = "SELECT * FROM utilisateur where id = :id";

    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $id);
    $prep->execute();

    $result = $prep->fetch();
    return $result;
}

function deleteUtilisateur($id){
    global $pdo;
    $query = "delete from utilisateur where id=:id ;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}


function updateUsers($params)
{
    global $pdo;
    $requete = "update utilisateur set nom=:nom,prenom=:prenom,role=:role,login=:login,password=:password WHERE id=:id";
    try {
        $prep = $pdo->prepare($requete);
        $prep->bindValue(':id', $params['id']);
        $prep->bindValue(':login', $params['login']);
        $prep->bindValue(':password', $params['password']);
        $prep->bindValue(':role', $params['role']);
        $prep->bindValue(':nom', $params['nom']);
        $prep->bindValue(':prenom', $params['prenom']);
        $prep->execute();
    } catch (Exception $e) {
        die ("erreur dans la requete " . $e->getMessage());
    }

}
function updateCountry($infos)
{
    global $pdo;
    $requete = "update country set Code=:Code,Name=:Name,Continent=:Continent,Region=:Region,SurfaceArea=:SurfaceArea,
IndepYear=:IndepYear,Population=:Population,LifeExpectancy=:LifeExpectancy,GNP=:GNP,GNPOld=:GNPOld,LocalName=:LocalName,
GovernmentForm=:GovernmentForm,HeadOfState=:HeadOfState,Capital=:Capital,Code2=:Code2 
WHERE id=:id";


    try {
        $prep = $pdo->prepare($requete);
        $prep->bindValue(':id', $infos['id']);
        $prep->bindValue(':Code', $infos['Code']);
        $prep->bindValue(':Name', $infos['Name']);
        $prep->bindValue(':Continent', $infos['Continent']);
        $prep->bindValue(':Region', $infos['Region']);
        $prep->bindValue(':SurfaceArea', $infos['SurfaceArea']);
        $prep->bindValue(':IndepYear', $infos['IndepYear']);
        $prep->bindValue(':Population', $infos['Population']);
        $prep->bindValue(':LifeExpectancy', $infos['LifeExpectancy']);
        $prep->bindValue(':GNP', $infos['GNP']);
        $prep->bindValue(':GNPOld', $infos['GNPOld']);
        $prep->bindValue(':LocalName', $infos['LocalName']);
        $prep->bindValue(':GovernmentForm', $infos['GovernmentForm']);
        $prep->bindValue(':HeadOfState', $infos['HeadOfState']);
        $prep->bindValue(':Capital', $infos['Capital']);
        $prep->bindValue(':Code2', $infos['Code2']);
        $prep->execute();
    } catch (Exception $e) {
        die ("erreur dans la requete " . $e->getMessage());
    }

}
function getCapital($id)
{

    global $pdo;
    $requete = "SELECT city.* FROM city,country WHERE city.id = country.Capital and country.id = :id ";

    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $id);
    $prep->execute();
    if ($requete != 0){
        $result = $prep->fetchall()[0];
    }
    else
        $result = $prep->fetch();
    return $result;


}

function getLanguage($id){

    global $pdo;
    $requete = "SELECT language.Name,countrylanguage.Percentage FROM language,country,countrylanguage WHERE country.id = countrylanguage.idCountry and countrylanguage.idLanguage = language.id and country.id = :id  ";

    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $id);
    $prep->execute();

    $result = $prep->fetchAll();
    return $result;
}
function createRequete($create)
{
    global $pdo;
        $requete = ("INSERT INTO requete (requete) VALUES(:requete)");
        try {
            $prep = $pdo->prepare($requete);
            $prep->bindValue(':requete', $create['requete']);
            $prep->execute();
        } catch (Exception $e) {
            die ("erreur dans la requete " . $e->getMessage());
        }
}
function getRequete()
{
    global $pdo;
    $query = 'SELECT * FROM requete;';
    return $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
}

function RequeteExecute(){

    global $pdo;
    if (!empty($_GET['ListeRequete'])){
        $requete = $_GET['ListeRequete'];
        $prep = $pdo->prepare($requete);
        $prep->execute();
        $result = $prep->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}

function deleteRequete($id){
    global $pdo;
    $query = "delete from requete where idRequete=:id ;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}

function updateRequete($parametre)
{
    global $pdo;
    $requete = "update requete set requete=:requete WHERE idRequete=:id";
    try {
        $prep = $pdo->prepare($requete);
        $prep->bindValue(':id', $parametre['id']);
        $prep->bindValue(':requete', $parametre['requete']);
        $prep->execute();
    } catch (Exception $e) {
        die ("erreur dans la requete " . $e->getMessage());
    }

}




