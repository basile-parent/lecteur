<?php

include_once $pathToPhpRoot.'popupProf.php';
include_once $pathToPhpRoot.'popupDanse.php';
include_once $pathToPhpRoot.'popupEvenement.php';
include_once $pathToPhpRoot.'popupTag.php';

?>

<div id="menu" class="menu_visible">
	<img src="style/images/barre_menu.png" id="menu_bar" />
	<h1>
		<?= $_SESSION["user"] ?>
	</h1>
	
	<ul id="menu_list">
		<li class="level_1">
			<a href="index.php" id="menu_accueil">
				Accueil
			</a>
		</li>
		<?php if (isset($_SESSION[DROIT_CONSULT])) { ?>
		<li class="level_1">
			Lister
		</li>
			<li class="level_2">
				<a href="listeEvenements.php">
					Danse / Évènement
				</a>
			</li>
			<li class="level_2">
				<a href="listeNiveaux.php">
					Danse / Niveau
				</a>
			</li>
			<li class="level_2">
				<a href="listeProfesseurs.php">
					Danse / Prof
				</a>
			</li>
			<?php if (isset($_SESSION[DROIT_CAN_BOOKMARK])) { ?>
			<li class="level_2">
				<a href="listeFavoris.php">
					<img src="style/images/favori.png" />
					Favoris
				</a>
			</li>
			<?php } ?>
		
		<li class="level_1">
			<a href="recherche.php">
				Rechercher
			</a>
		</li>
		
		<?php if(isset($_SESSION[DROIT_ACTION_USE_PLAYLIST])) { ?>
		<li class="level_1">
			<a href="playlist.php">
				Playlists
			</a>
		</li>
		<?php } ?>
		
		<?php } ?>
		
		<?php if (isset($_SESSION[DROIT_EDIT_VIDEO])) { ?>
		<li class="level_1">
			Gérer
		</li>
			<li class="level_2">
				<a href="#" onClick="showPopup('danseDialog'); return false;">
					Danses
				</a>
			</li>
			<li class="level_2">
				<a href="#" onClick="showPopup('profDialog'); return false;">
					Professeurs
				</a>
			</li>
			<li class="level_2">
				<a href="#" onClick="showPopup('evtDialog'); return false;">
					Evènements
				</a>
			</li>
			<li class="level_2">
				<a href="#" onClick="showPopup('tagDialog'); return false;">
					Tags
				</a>
			</li>
		<?php } ?>
			
		
		<?php if (isset($_SESSION[DROIT_UPLOAD])) { ?>
		<li class="level_1">
			Convertion
		</li>
			<li class="level_2">
				<a href="upload.php">
					Upload
				</a>
			</li>
			<li class="level_2">
				<a href="manageRawVideos.php">
					Vidéos brutes
				</a>
			</li>
			<li class="level_2">
				<a href="manageVideosBin.php">
					Corbeille
				</a>
			</li>
			<?php if (isset($_SESSION[DROIT_ADMIN]) || $_SESSION["user"] == "admin") { ?>
			<li class="level_2">
				<a href="export.php">
					Exporter
				</a>
			</li>
			<?php } ?>
		<?php } ?>
		
		
		
		<?php if (isset($_SESSION[DROIT_EDIT_VIDEO])) { ?>
		<li class="level_1">
			<a href="manageVideos.php">
				Vidéos dispo
			</a>
		</li>
		<?php } ?>
		
		
		<?php if (isset($_SESSION[DROIT_ADMIN]) || $_SESSION["user"] == "admin") { ?>
		<li class="level_1">
			<a href="admin.php">
				Administrer
			</a>
		</li>
		<?php } ?>
		
		<?php if ($_SESSION["userLogged"] != $_SESSION["userId"]) { ?>
		<li class="level_1">
			<a href="#" onClick="logAs(<?= $_SESSION["userLogged"] ?>); return false;">
				Retour profil
			</a>
		</li>
		<?php } ?>
		
		<li class="level_1 deconnexion">
			<a href="login.php?action=disconnect">
				Déconnexion
			</a>
		</li>
	</ul>
</div>

<!-- 
<div id="collapse_menu">
	<a href="#" onClick="collapseMenu(); return false;"></a>
</div>
-->

<script>
	function showPopup(id) {
		$('#' + id).dialog("open");
	}


	/*
	function collapseMenu() {
		var width = $('#menu').css('width');
		if ($('#menu').hasClass('menu_visible')) {
			$( "#menu, #menu_bar, #collapse_menu, #bodyContent" ).animate({
				'margin-left' : '-=' + width
			}, 1000, function() {
				$('#menu').removeClass('menu_visible');
				$('#collapse_menu').addClass('collapsed');
			});
			
		} else {
			$( "#menu, #menu_bar, #collapse_menu, #bodyContent" ).animate({
				'margin-left' : '+=' + width
			}, 1000, function() {
				$('#menu').addClass('menu_visible');
				$('#collapse_menu').removeClass('collapsed');
			});
		}
	}
	*/

	$(document).ready(function() {
		$("li.deconnexion a").button();
	});
</script>