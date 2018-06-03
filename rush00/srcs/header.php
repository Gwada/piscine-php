<header>
	<?php

	if ($_SESSION['page'] === 'srcs/connect.php')
	{
		echo '<div class="form-connect">';

		if (isset($_POST['Inscription']))
			echo '<form method="post" action="create.php">';
		else
			echo '<form method="post" action="login.php">';

		echo '<input type="text" name="login" value="login"size="50" /><br /><br />';
		echo '<input type="password" name="passwd" value="passwd" size="50" />';
		echo '<input type="submit" name="submit" value="Terminer"/></form></div>';
	}
	else if (!isset($_SESSION['loggued_on_user']) OR $_SESSION['loggued_on_user'] === "")
	{
		echo '<div id="button">';
		if ($_SESSION['page'] === 'index.php')
		{
			echo '<form method="post" action="srcs/connect.php"><input class="button" type="submit" name="Inscription" value="Inscription"/> </form>';
			echo '<form method="post" action="srcs/connect.php"><input class="button" type="submit" name="Connexion" value="Connexion"/> </form>';
		}
		else
		{
			echo '<form method="post" action="connect.php"><input class="button" type="submit" name="Inscription" value="Inscription"/></form>';
			echo '<form method="post" action="connect.php"><input class="button" type="submit" name="Connexion" value="Connexion" size="2vw"/></form>';
		}
		if ($_SESSION['false_log'] == 'wrong')
			echo '<p class="invalid">MDP ou login incorrect</p><br/>';
		if ($_SESSION['false_log'] == 'exist')
			echo '<p class="invalid">Login indisponible</p><br/>';
		$_SESSION['false_log'] = "";
		echo '</div>';	
	}
	else if (isset($_SESSION['loggued_on_user']))
	{

		echo '<div id="button">';
		if ($_SESSION['page'] === 'index.php')
			echo '<form method="post" action="srcs/logout.php"><input class="button" type="submit" name="Logout" value="Logout"/> </form>';
		else
			echo '<form method="post" action="logout.php"><input class="button" type="submit" name="Logout" value="Logout"/> </form>';
		if (isset($_SESSION['login']) AND $_SESSION['login'] == 'admin')
			echo '<p class="valid"> Hello <a href="http://localhost:8100/rush00/srcs/admin.php">'.$_SESSION['login'].'</p><br/>';
		else
			echo '<p class="valid"> Hello <a href="http://localhost:8100/rush00/index.php">'.$_SESSION['login'].'</p><br/>';
		echo '</div>';

	}?>
	<div id="menu">
		<ul><?php

			if ($_SESSION['login'] != 'admin')
		echo 	'<li><a href="">Tapis</a>
					<ul>
						<li><a href="#">Poulet crudités</a></li>
						<li><a href="#">Jambon fromage</a></li>
						<li><a href="#">Saumon</a></li>
					</ul>
				</li>
				<li><a href="#">Accessoire</a>
					<ul>
						<li><a href="#">Coca-Cola</a></li>
						<li><a href="#">Fanta</a></li>
						<li><a href="#">Sprite</a></li>
					</ul>
				</li>
				<li><a href="#">Vetements</a>
					<ul>
						<li><a href="#">Cookie</a></li>
						<li><a href="#">Cake chocolat</a></li>
						<li><a href="#">Flan vanille</a></li>
					</ul>
				</li>
				<li><a id="panier" href="http://localhost:8100/rush00/srcs/panier.php">Mon panier</a></li>';
			else
			echo '<li><a href="#">Articles</a>
					<ul>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="ITEM" value="ADD"/></form></li>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="ITEM" value="DEL"/></form></li>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="ITEM" value="MOD"/></form></li>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="ITEM" value="STK"/></form></li>
					</ul>
				</li>
				<li><a href="#">Utilisateurs</a>
					<ul>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="USERS" value="ADD"/></form></li>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="USERS" value="DEL"/></form></li>
						<li><form method="post" action="http://localhost:8100/rush00/srcs/admin.php"><input type="submit" name="USERS" value="MOD"/></form></li>
					</ul></li>';?>
				<li><a href="#">Mon compte</a></li>
			</ul>
		</div>
	</body>
</header>