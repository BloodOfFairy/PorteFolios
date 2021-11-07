<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>portefolios Yohem</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<nav>
		<script type="text/javascript">
			function menu_Spawn(close){
				nav = document.querySelector('nav');
				img = document.querySelector('img');
				if (nav.style.transform == 'translate(0px)' || close === true) {
					nav.style.transform = 'translate(-300px)';
					img.style.transform = 'translate(0px) scale(1) rotate(0deg)';
				}else{ 
					nav.style.transform = 'translate(0px)';
					img.style.transform = 'translate(-9vh) scale(0.6)  rotate(180deg)';
				}
			}

			function blit_Sous_Menu(btn){
				allSousMenu = document.getElementsByClassName('sous-menu');
				allTitle = document.getElementsByClassName('menu_title');
				title = btn.querySelector('h4');
				sousMenu = btn.getElementsByClassName('sous-menu');
				title = btn.querySelector('h4');
				if (sousMenu[0].style.display == 'none') {
					sousMenu[0].style.display = 'block';
				}else {
					sousMenu[0].style.display = 'none';
				}
			}

			function remv_Animate(){
				content.classList.remove('animate');
			}

			function Change_Content(btn){
				menu_Spawn(true);
				selector = btn.id;
				content = document.querySelector('#content');
				content.classList.add('animate');
				contentParagraphe = document.querySelector('#content p');
				contentParagraphe.innerHTML = PAGES[selector];
				contentTitle = document.querySelector('#content h2');
				if (selector == Object.keys(PAGES)[0]) {
					contentTitle.innerHTML = btn.alt;
				}else contentTitle.innerHTML = btn.innerHTML;
				setTimeout(remv_Animate, 1000);
			}

			var PAGES = {
				'Yohem' : "Bonjours, Je me nome Yohem VAXELAIRE. Jeune progammeur et pationné de programmation, agée de 17ans. Je recherche de préference du travail dans le millieu du web. Je suis capable de faire du frontend autant que du backend. Malgrés mon jeune age, je posséde deja 5 ans d'expérience dans la programation 'loisir'. Je suis capable de faire des projects python bien que se language m'interrresse moins.",
				'hebergement' : `Ce site d'hebergement en ligne à été créé seulement par moi. Sa principale qualitée et un accessibilté facile pour le client, avec une interface Admin qui permet de modifier des pages sans écrire une seule ligne de code. Dans un aspect chaleureux convivale. <a href="../papa/" target="_blank">Site Web accessible ici!</a>`,
				'nsi_Web' : `Lors d'un project de premiere je devais créer un site web, dynamique, fait a 90% par moi. Avec un systeme de jeu tel que un qcm ou un plus ou moins. le site est responsive et moderne.<a href="../nsi/" target="_blank">Site Web accessible ici!</a>`,
				'commune' : `Je faisais partie de CMJ(conseille municipal des jeunes) de mon village, je m'etait donc mis en tete de faire bénévolement un site internet pour celle-ci. c'était mon premier project complet en web. Il comporte un panel Admin, un systeme de news. Bien que sont front ne sois pas trés élégant. Il m'as apporté de nombreuses connaissances. <a href="../nsi/" target="_blank">Site Web accessible ici!</a>`,
				'video-game' : `Lors de mes cours de premier en NSI(programation), nous avons du faire un project de petit jeu video grace a python et sa librerie pygame. J'avais donc choisit de faire un jeu ouvert en 2d comme un zelda par exmple. Il comportait des systeme d'interaction joueur/object, joueur/pnj et avait meme une legere intelligence artificielle pour decter quelle block de la carte afficher sur l'ecran.`,
				'map_painter' : `Dans mon jeu video de cours. Un probleme est venu a la fin du dévelloppement. Je n'avait pas le temps de créer un map joli et grande a la main. J'ai donc déssider de créer un logiciel de dessins de map en python avec systeme de sauvegarde et d'importation.`,
				"Boldair" : `Pendant 3 étés j'ai travailler dans un parc d'aventure et de tyrolienne, sans poste fixe. Il m'arrivait souvent d'aller travailler au snack ou a l'équipement du parc, a la surveillance, ... .`,

			};

			var selector = Object.keys(PAGES)[0];
			console.log(selector);
		</script>
		<ul id="menu-nav">
			<h3 style="text-align: center;">Expérience :</h3>
			<li class="menu-deroulant" onclick="blit_Sous_Menu(this)">
				<h4 class="menu_title">Web</h4>
				<ul class="sous-menu">
					<li id="hebergement" onclick="Change_Content(this)">Hébergement</li>
					<li id="nsi_Web" onclick="Change_Content(this)">Histoire de la programation</li>
					<li id="commune" onclick="Change_Content(this)">Commune de Liézey</li>
				</ul>
			</li>
			<li class="menu-deroulant" onclick="blit_Sous_Menu(this)">
				<h4 class="menu_title">Python</h4>
				<ul class="sous-menu">
					<li id="video-game" onclick="Change_Content(this)">Oriona (jeux vidéo)</li>
					<li id="map_painter" onclick="Change_Content(this)">Logicielle de dessins de maps</li>
				</ul>
			</li>
			<li class="menu-deroulant" onclick="blit_Sous_Menu(this)">
				<h4 class="menu_title" >Autre</h4>
				<ul class="sous-menu" >
					<li id="Boldair" onclick="Change_Content(this)">Bold'air</li>
				</ul>
			</li>
		</ul>
		<img id="menu_btn" src="images/btnMenu.png" alt="menu-lateral" onclick="menu_Spawn()">
	</nav>
	<img id="Yohem" src="Images/icon.jpg" alt="Yohem VAXELAIRE" onclick="Change_Content(this)">
	<div id="content" onclick="menu_Spawn(true)"> <h2 id="title">Yohem VAXELAIRE</h2><p>Bonjours, Je me nome Yohem VAXELAIRE. Jeune progammeur et pationné de programmation, agée de 17ans. Je recherche de préference du travail dans le millieu du web. Je suis capable de faire du frontend autant que du backend. Malgrés mon jeune age, je posséde deja 5 ans d'expérience dans la programation 'loisir'. Je suis capable de faire des projects python bien que se language m'interrresse moins.</p></div>
</body>
</html>