<?php
echo "<h1>S'inscrire</h1>";
if (isset($_POST['submit']))
{
      $username = htmlspecialchars(trim ($_POST['username']));
      $password = htmlspecialchars(trim ($_POST['password']));
      $repaetpassword = htmlspecialchars(trim($_POST['repaetpassword']));
            if($username && $password && $repaetpassword)
            {
                  if($password == $repaetpassword)
                  {
                        if(strlen($password)>3)
                        {
                              $password = md5($password);
                              $repaetpassword = md5($repaetpassword);
                              $connect = mysql_connect ('localhost','root','');
                              mysql_select_db('phplogin');

                              $reg = mysql_query("INSERT INTO users VALUES('','$username','$password','$repaetpassword',)");
                              die('Inscription terminée');
                        }else echo "le mot de passe est court";

                  } else echo"Les mots de passes ne sont pas identiques";
      
            }else echo "Veuillez completer tous les champs";


}

?>

<form method="post" action="register.php">
    
      <p>username</p>
      <input type="text"  name="username"/>
      <p>password</p>
      <input type="password"  name="password"/>
      <p>repeat password</p>
      <input type="password"  name="repaetpassword"/>
      <br><br>
      <input type="submit" name="submit" value="valider"/>
      
</form>

   
