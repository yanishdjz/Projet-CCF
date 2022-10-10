
<?php
if (isset($_POST['btn']))
{
$email = htmlspecialchars(trim ($_POST['email']));
$password = htmlspecialchars(trim ($_POST['password']));
$password2 = htmlspecialchars(trim($_POST['password2']));
if($email && $password && $password2)
            {
                  if($password == $password2)
                  {
                        if(strlen($password)>3)
                        {
                              $password = md5($password);
                              $repaetpassword = md5($password2);
                              $connect = mysql_connect ('localhost','root','');
                              mysql_select_db('phplogin');

                              $reg = mysql_query("INSERT INTO users VALUES('','$email','$password','$password2',)");
                              die('Inscription terminée');
                        }else echo "le mot de passe est court";

                  } else echo"Les mots de passes ne sont pas identiques";
      
            }else echo "Veuillez completer tous les champs";

        }
?>

<form method="post" action="test.php">
<head>
  
  <link rel="stylesheet" href="connectionXinscription.css">
  <script src="connectionXinscription.js" defer></script>
  <title>Mon site - Connexion</title>
</head>

<body>
  <div class="container">
    <div class="titre">
      PRONOTE
    </div>

    <div class="tab-body" data-id="connexion">
      <form>
        <div class="row">
          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <input placeholder="Mot de Passe" type="password" class="input">
        </div>
        <a href="#" class="link">Mot de passe oublié ?</a>
        <button class="btn" type="button">Connexion</button>
      </form>
    </div>

    <div class="tab-body" data-id="inscription">
      <form>
        <div class="row">

          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
        
          <input type="password" class="input" placeholder="Mot de Passe">
        </div>
        <div class="row">
          
          <input type="password2" class="input" placeholder="Confirmer Mot de Passe">
        </div>
        <button class="btn" type="button">Inscription</button>
      </form>
    </div>

    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
    </div>
  </div>
</body>
</form>
