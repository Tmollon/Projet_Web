<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=drugs';   		
    private static $user='Nassim' ;    		
    private static $mdp='cpir' ;	
  private static $monPdo;
  private static $monPdoGsb=null;
/**
* Constructeur privé, crée l'instance de PDO qui sera sollicitée
* pour toutes les méthodes de la classe
*/				
private function __construct(){
  PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
  PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
}
public function _destruct(){
  PdoGsb::$monPdo = null;
}
/**
* Fonction statique qui crée l'unique instance de la classe

* Appel : $instancePdoGsb = PdoGsb::getPdoGsb();

* @return l'unique objet de la classe PdoGsb
*/
public  static function getPdoGsb(){
  if(PdoGsb::$monPdoGsb==null){
      PdoGsb::$monPdoGsb= new PdoGsb();
  }
  return PdoGsb::$monPdoGsb;  
}
?>

session_start();
if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    // connexion à la base de données
    $db_username = 'Nassim';
    $db_password = 'cpir';
    $db_name     = 'drugs';
    $db_host     = 'localhost';
    
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if (!$db) {
        echo "Connexion non établie.";
        exit;
    }
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['pseudo']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['mdp']));

    if ($username !== "" && $password !== "") {
        $requete = "SELECT count(*) FROM membres where 
              pseudo = '" . $username . "' and mdp = '" . md5($password) . "' ";
        $exec_requete = mysqli_query($db, $requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['pseudo'] = $username;
            header('Location: index.php?action=Accueil');
        } else {
            header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
mysqli_close($db); // fermer la connexion
?>
<?php
var_dump($_SESSION['pseudo']);

?>

<?php
if (isset($_POST['deconnecte'])) {
    var_dump('deconnecter');
    session_destroy();
}
?>


<link rel="stylesheet" href="Styles/inscription.css">

<link rel="stylesheet" href="Styles/general.css">

<div class="wrapper">
    <h2>Connectez vous</h2>
    <form action="/Projet_Web/index.php?action=Connexion" method="POST">
        <div class="form-group">
            <label for="nom">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required minlength="3" maxlength="25" />
        </div>
        <div class="form-group">
            <label for="message">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="mot de passe " />
        </div>
        <div class="form-group">
            <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Envoyer</button>
        </div>
    </form>
</div>
