<section>
	<?php

		array_key_exists("ITEM", $_POST) ? $_SESSION["ITEM"] = $_POST["ITEM"] : $_SESSION["USERS"] = $_POST["USERS"];
		$path = ($_SESSION['page'] == 'index.php' ? "./srcs/" : "./");

		if (isset($_SESSION['page2']) AND $_SESSION['page2'] == "srcs/admin.php")
		{
			if (isset($_POST['ITEM']) AND !empty($_POST['ITEM']))
			{
				if ($_POST['ITEM'] != "STK")
				{
					if ($_POST["ITEM"] == "ADD")
						$path .= "create_item.php";
					else if ($_POST["ITEM"] == "MOD")
						$path .= "mod_item.php";
					else if ($_POST["ITEM"] == "DEL")
						$path .= "delete_item.php";
					
					if ($_POST["ITEM"] == "ADD")
						include("localhost:8100/rush00/srcs/create_item.php");
					else if ($_POST["ITEM"] == "MOD")
						include("localhost:8100/rush00/srcs/mod_item.php");
					else if ($_POST["ITEM"] == "DEL")
						include("localhost:8100/rush00/srcs/delete_item.php");

					echo '<form action='.$path.' method="post" >';
					echo '<fieldset>';
					echo $path;

					if ($_POST['ITEM'] == 'ADD')
					{
						echo '<legend> Ajout de produits </legend>';
						echo 'Reference: <input type="text" name="reference" value="" size="25" maxlength="254" autofocus required /><br />';
						echo 'Name: <input type="text" name="name" value="" size="25" maxlength="254" required /><br />';
						echo 'Couleur: <input type="text" name="couleur" value="" size="25" maxlength="15" required/><br />';
						echo 'Prix: <input type="text" name="prix" value="" size="25" required/><br />';
						echo 'Quantite: <input type="text" name="quantite" value="" size="25" required/><br />';
						echo 'Categorie: <input type="text" name="categorie" value="" size="25" maxlength="31" required/><br />';
					}
 					else if ($_POST['ITEM'] == 'DEL')
 					{
 						echo '<legend> Supression de produits </legend>';
 						echo 'Reference: <input type="text" name="reference" value="" size="25" maxlength="254" autofocus required /><br />';
 						echo 'Quantite: <input type="text" name="quantite" value="" size="25" required/><br />';
 					}
 					else if ($_POST['ITEM'] == 'MOD')
 					{
 						echo '<legend> Modification de produits </legend>';
 						echo 'Reference: <input type="text" name="reference" value="" size="25" maxlength="254" autofocus required /><br />';
 						echo 'new Name: <input type="text" name="name" value="" size="25" maxlength="254" /><br />';
						echo 'new Couleur: <input type="text" name="couleur" value="" size="25" maxlength="15" /><br />';
						echo 'new Prix: <input type="text" name="prix" value="" size="25" /><br />';
						echo 'new Quantite: <input type="text" name="quantite" value="" size="25" /><br/>';
						echo 'new Categorie: <input type="text" name="categorie" value="" size="25" maxlength="31"/><br />';
 					}

					echo '</fieldset>';
					echo '<p><input type="submit" value="Envoyer" />';
					echo '<input type="reset" value="Annuler" /></p>';
					echo '</form>';
				}

			}
			if (isset($_POST["USERS"]))
			{
				if ($_POST["USERS"] == "ADD")
				{
					$path .= "create.php";
					include("localhost:8100/rush00/srcs/create.php");
				}
				else if ($_POST["USERS"] == "MOD")
				{
					$path .= "up_user.php";
					include("localhost:8100/rush00/srcs/up_user.php");
				}
				else if ($_POST["USERS"] == "DEL")
				{
					$path .= "del_user.php";
					include("localhost:8100/rush00/srcs/del_user.php");
				}

				echo '<form action='.$path.' method="post">';
				echo '<fieldset>';

				if ($_POST['USERS'] == 'ADD')
				{
					echo '<legend> Ajout de clients </legend>';
					echo 'login: <input type="text" name="login" value="login" size="10" maxlength="254" autofocus required /><br />';
 					echo 'passwd: <input type="password" name="passwd" value="passwd" size="25" maxlength="254" required /><br />';
 					echo 'user_group: <input type="text" name="user_group" value="user_group" size="25" maxlength="15" required/><br />';
				}
 				else if ($_POST['USERS'] == 'DEL')
				{
 					echo '<legend> Supression de clients </legend>';
 					echo 'login: <input type="text" name="login" value="login" size="10" maxlength="254" autofocus required /><br />';
				}
 				else if ($_POST['USERS'] == 'MOD')
 				{
 					echo '<legend> Modification de login/mot de passe clients </legend>';
 					echo 'login: <input type="text" name="login" value="login" size="10" maxlength="254" autofocus required /><br />';
 					echo 'new login: <input type="text" name="newlogin" value="newlogin" size="10" maxlength="254" autofocus required /><br />';
 					echo 'new passwd: <input type="password" name="newpasswd" value="newpasswd" size="25" maxlength="254" required /><br />';

 				}
				echo '<p><input type="submit" name="submit" value="Terminer" />';
				echo '<input type="reset" value="Annuler" /></p>';
				echo '</form>';
			}
		}
	$_SESSION['USERS'] = NULL;
	?>
</section>
