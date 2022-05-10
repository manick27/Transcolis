<?php require_once "functions.php"; ?>


<html>
<head>
	<link href="Css/style.css" rel="stylesheet">
	<meta charset="UTF-8">
	<link href="Css/fontawesome/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
<?php
	if(verifCon()){
?>
	<header style="position: fixed;">
	<?php
		}else{
	?>
	<header>
	<?php
		}
	?>	
		<div id="titre">
			<i class="fas fa-truck-monster" style="font-size: 3em; color: rgb(67, 194, 67);"></i>
			TransColis
		</div>
		<nav>
			<ul id="menu">
				<?php
					if(!verifCon()){
				?>
					<li class="menulink"><a href="index.php"><i class="fas fa-home">Accueil</i></a></li>
					<li class="menulink publ1"><a href="connexion.php"><i class="fas fa-user-circle">Connexion</i></a></li>
					<li class="menulink publ2"><a href="inscription.php"><i class="fas fa-user-edit">Inscription</i></a></li>
				<?php
					}
					else{
				?>
					<li class="menulink" id="sub"><a id="w">&#9776; Menu</a></li>
					<li class="menulink"><a href="monCompte.php"><i class="fas fa-laptop">Mon compte</i></a></li>
				<?php
					}
				?>
				<li class="menulink"><a href="#footer"><i class="fas fa-phone-alt">Contacts</i></a></li>
				<li class="menulink"><a href="#propos"><i class="fas fa-info-circle">A propos</i></a></li>
				<?php
					if(!verifCon()){
				?>
					
				<?php
					}
					else{
				?>
					<li class="menulink"><a href="connexion.php?decon=true"><i class="fas fa-user-times">Déconnexion</i></a></li>
				<?php
					}
				?>
			</ul>
		</nav>
		<?php 
			if(!verifCon()){

			}else{
				require_once "submenu.php";
			}
		?>
	</header>
</body>
<script type="text/javascript" src="js/submenu.js"></script>
</html>

