<!DOCTYPE html>
<?php
    include('Parsedown.php');
    $Parsedown = new Parsedown();

    function randpos(){
    	return ' style="margin:' . rand(20, 150) . 'px 0 0 ' . rand(0, 90) . 'px"';
    }

	$etudedeterrain = array(
		'charles-carcopino' => array(
			'title'=> 'Charles Carcopino',
			'file'=> 'contents/charles.md',
			'thumb'=> 'charles.png',
			'type'=> 'video',
			'yt_id' => 'PbZjzjqm6CQ',
			'slug'=> 'charles-carcopino'
		),
		'pauline' => array(
			'title'=> 'Pauline Chasseriaud',
			'file'=> 'contents/pauline.md',
			'thumb'=> 'pauline.png',
			'type'=> 'audio',
			'mp3' => 'audio/pauline-chasseriaud.mp3',
			'slug'=> 'pauline-chasseriaud'
		),
		'rapdm' => array(
			'title'=> 'Rencontre avec des petites mains',
			'file'=> 'contents/rapdm.md',
			'thumb'=> 'rapdm.png',
			'type'=> 'video',
			'yt_id' => 'Uu3p_wvyVmE',
			'slug'=> 'rapdm'
		),
		'quitterie' => array(
			'title'=> 'Quitterie Charpentier',
			'file'=> 'contents/quitterie.md',
			'thumb'=> 'quitterie.png',
			'type'=> 'audio',
			'mp3' => 'audio/quitterie-charpentier.mp3',
			'slug'=> 'quitterie-charpentier'
		)
	);

	$entretienssouslesoleil = array(
		'mischa-daams' => array(
			'title'=> 'Mischa Daams',
			'file'=> 'contents/mischa.md',
			'thumb'=> 'mischa.png',
			'type'=> 'video',
			'yt_id' => 'oNmUq1fsj7M',
			'slug'=> 'mischa-daams'
		),
		'david-de-tscharner' => array(
			'title'=> 'David de Tscharner',
			'file'=> 'contents/david.md',
			'thumb'=> 'david.png',
			'type'=> 'video',
			'yt_id' => 'fllkZOyh43Y',
			'slug'=> 'david-de-tscharner'
		),
		'fabien-leaustic' => array(
			'title'=> 'Fabien Léaustic',
			'file'=> 'contents/fabien.md',
			'thumb'=> 'fabien.png',
			'type'=> 'video',
			'yt_id' => 'vYRr0TgDHTE',
			'slug'=> 'fabien-leaustic'
		),
		'jacques-perconte' => array(
			'title'=> 'Jacques Perconte',
			'file'=> 'contents/jacques.md',
			'thumb'=> 'jacques.png',
			'type'=> 'video',
			'yt_id' => 'MMx3zE2SGiE',
			'slug'=> 'jacques-perconte'
		),
		'helen-evans' => array(
			'title'=> 'Helen Evans',
			'file'=> 'contents/helen.md',
			'thumb'=> 'helen.png',
			'type'=> 'video',
			'yt_id' => 'tdVfHXl6gtc',
			'slug'=> 'helen-evans'
		)
	);

	$horspiste = array(
		'feu-rouge' => array(
			'title'=> 'Feu rouge',
			'file'=> 'contents/feu-rouge.md',
			'thumb'=> 'feu-rouge.png',
			'type'=> 'texte',
			'slug'=> 'feu-rouge'
		),
		'immersion' => array(
			'title'=> 'Immersion dans le paysage',
			'file'=> 'contents/immersion.md',
			'thumb'=> 'immersion.png',
			'type'=> 'texte',
			'slug'=> 'un-acces-vers-une-immersion'
		),
		'paysage-sonore' => array(
			'title'=> 'Accès)s( étrange',
			'file'=> 'contents/acces-etrange.md',
			'thumb'=> 'acces_etrange.png',
			'type'=> 'audio',
			'mp3' => 'audio/paysage-sonore.mp3',
			'slug'=> 'paysage-sonore'
		),

		'panorama' => array(
			'title'=> 'Panorama',
			'file'=> 'contents/panorama.md',
			'thumb'=> 'panorama.png',
			'type'=> 'photo',
			'slug'=> 'panorama',
			'gallery' => 'contents/panorama-gallery.md',
		),
	);

	$contents = array_merge($etudedeterrain, $entretienssouslesoleil, $horspiste);
 ?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>libre accès)s( — paysage fiction</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="plyr/plyr.css">
</head>
<body class="locked">


		<div id="video">
			<div id="bar"></div>
			<video
				autoplay
				poster="" >
				<source type="video/mp4" src="video/intro.mp4">
				<source type="video/webm" src="video/intro.webm">
			</video>
			<div id="intro-overlay" class="start">
				<button class="replay play" id="replay">
					<span></span>
				</button>
			</div>
			<div id="introtext">
				<div class="flex">
					<div class="slide small" data-start="4" data-end="8">
						ÉSA Pyrénées<br>
						+ accès)s(
					</div>
					<div class="slide small" data-start="9" data-end="12">
						présentent
					</div>
					<div class="slide savate title" data-start="13" data-end="23">
						Libre accès)s(
					</div>
					<div class="slide small" data-start="18" data-end="23">
						Un workshop mené au Bel Ordinaire <br>
						par Sarah Brown et les étudiants <br>
						du Pôle Nouveaux médias de l’ÉSA Pyrénées
					</div>
				</div>
			</div>
		</div>


		<div id="skrollr-body">


		<div id="audioplayer" class="vide">
			<audio id="audio" src=""></audio>
			<button id="audioplayerbutton" class="paused">
				<strong>Play</strong>
				<span>Pause</span>
			</button>
			<div id="audioplayertextcontainer"><p id="audioplayertext"></p></div>
		</div>

		<header id="site-header">
			<a href="#apropos" class="contentlink" id="aproposlink" data-type='texte'>
				à propos
			</a>
			<h2  id="titre_libre_acces">Libre accès)s( </h2>
			<p id="intro_libre_acces">
				Découvrez les coulisses et les artistes du festival accès)s( #18 – paysage fiction.
			</p>
		</header>




		<div id="content" class="hidden">
			<aside id="aside"></aside>
			<?php foreach ($contents as $c): ?>
			 	<article id="<?= $c['slug'] ?>"
			 		class="content content-<?= $c['type'] ?>">
			 		<div>
			 			<h1><?= $c['title'] ?></h1>

				 		<?php if ($c['type'] == 'video'): ?>
				 			<div class="playercontainer">
				 			<div cass="player" id="player-<?= $c['slug'] ?>"  data-plyr-provider="youtube" data-plyr-embed-id="<?= $c['yt_id'] ?>"></div>
				 			</div>
				 		<?php endif ?>

			 			<div class="body">

			 				<div class="<?= $c['type'] ?>">
			 					<?= $Parsedown->text( file_get_contents($c['file']) ); ?>
			 				</div>
			 				<?php if ($c['gallery'] != ''): ?>

		 						<?= $Parsedown->text( file_get_contents($c['gallery']) ); ?>

		 					<?php endif ?>
			 			</div>

			 		</div>
			 	</article>
			<?php endforeach ?>
			<article id="apropos" class="content content-texte">
		 		<div>
		 			<h1>À propos</h1>

		 			<div class="body">
		 				<div class="texte">
		 					<?= $Parsedown->text( file_get_contents('contents/apropos.md') ); ?>
		 				</div>
		 				<div class="gallery">
		 					<img src="img/jeanne/DSC_0362.JPG" alt="">
<img src="img/jeanne/DSC_0365.JPG" alt="">
<img src="img/jeanne/DSC_0367.JPG" alt="">
<img src="img/jeanne/DSC_0368.JPG" alt="">
<img src="img/jeanne/DSC_0371.JPG" alt="">
<img src="img/jeanne/DSC_0379.JPG" alt="">
<img src="img/jeanne/DSC_0381.JPG" alt="">
<img src="img/jeanne/DSC_0384.JPG" alt="">
<img src="img/jeanne/DSC_0390.JPG" alt="">
<img src="img/jeanne/DSC_0391.JPG" alt="">
<img src="img/jeanne/DSC_0392.JPG" alt="">
<img src="img/jeanne/DSC_0396.JPG" alt="">
<img src="img/jeanne/DSC_0399.JPG" alt="">
<img src="img/jeanne/DSC_0401.JPG" alt="">
<img src="img/jeanne/DSC_0407.JPG" alt="">
<img src="img/jeanne/DSC_0408.JPG" alt="">
<img src="img/jeanne/DSC_0416.JPG" alt="">
<img src="img/jeanne/DSC_0417.JPG" alt="">
<img src="img/jeanne/DSC_0419.JPG" alt="">
<img src="img/jeanne/DSC_0420.JPG" alt="">
<img src="img/jeanne/DSC_0421.JPG" alt="">
<img src="img/jeanne/DSC_0422.JPG" alt="">
<img src="img/jeanne/DSC_0427.JPG" alt="">
<img src="img/jeanne/DSC_0428.JPG" alt="">
<img src="img/jeanne/DSC_0429.JPG" alt="">
<img src="img/jeanne/DSC_0430.JPG" alt="">
<img src="img/jeanne/DSC_0436.JPG" alt="">
<img src="img/jeanne/DSC_0437.JPG" alt="">
<img src="img/jeanne/DSC_0439.JPG" alt="">
<img src="img/jeanne/DSC_0440.JPG" alt="">
<img src="img/jeanne/DSC_0442.JPG" alt="">
<img src="img/jeanne/DSC_0443.JPG" alt="">
<img src="img/jeanne/DSC_0445.JPG" alt="">
<img src="img/jeanne/DSC_0448.JPG" alt="">
<img src="img/jeanne/DSC_0450.JPG" alt="">
<img src="img/jeanne/DSC_0452.JPG" alt="">
<img src="img/jeanne/DSC_0454.JPG" alt="">
<img src="img/jeanne/DSC_0455.JPG" alt="">
<img src="img/jeanne/DSC_0460.JPG" alt="">
<img src="img/jeanne/DSC_0461.JPG" alt="">
<img src="img/jeanne/DSC_0462.JPG" alt="">
<img src="img/jeanne/DSC_0463.JPG" alt="">
<img src="img/jeanne/DSC_0464.JPG" alt="">
<img src="img/jeanne/DSC_0479.JPG" alt="">
<img src="img/jeanne/DSC_0487.JPG" alt="">
<img src="img/jeanne/DSC_0491.JPG" alt="">
		 				</div>
		 			</div>

		 		</div>
		 	</article>
		</div>


		<div id="nav"

			>
			<!-- Étude de terrain  -->

			<div class="mountain dragscroll" id="mountain1"

				 data-_offsetstart="transform:translate(0vw,0vh);" data-_offsetend="transform:translate(-195vw,0vh);" >
				<div class="line">
					<header>
						<h2>Étude de terrain </h2>
						<p>À la rencontre des organisateurs, commissaire et stagiaires.</p>
					</header>

					<?php foreach ($etudedeterrain as $c): ?>
						<div class="homelink"  <?= randpos() ?> >
					 	<a class="contentlink" href="#<?= $c['slug'] ?>" data-type="<?= $c['type'] ?>" data-mp3="<?= $c['mp3'] ?>" id="homelink-<?= $c['slug'] ?>"	>
					 		<span class="info">[ <?= $c['type'] ?> ]</span>
					 		<span class="img"><img src="img/althome/<?= $c['thumb'] ?>"><img src="img/althomegreen/<?= $c['thumb'] ?>"></span>
					 		<h3><?= $c['title'] ?></h3>
					 		<?php if ($c['type'] == 'audio'): ?>
					 			<div class="audioinfo"><?= $Parsedown->text( file_get_contents($c['file']) ); ?></div>
					 		<?php endif ?>
					 	</a>
					 	</div>
					<?php endforeach ?>

				</div>
			</div>

			<!-- Entretiens sous le soleil  -->

			<div class="mountain dragscroll" id="mountain2"

				 data-_offsetstart="transform:translate(0vw,0vh);" data-_offsetend="transform:translate(-160vw,0vh);" >
				<div class="line">
					<header>
						<h2>Entretiens sous le soleil </h2>
						<p>Entretiens en vidéo avec cinq artistes présents dans l’exposition.</p>
					</header>

					<?php foreach ($entretienssouslesoleil as $c): ?>
						<div  class="homelink"  <?= randpos() ?> >
					 	<a class="contentlink" href="#<?= $c['slug'] ?>" data-type="<?= $c['type'] ?>" data-mp3="<?= $c['mp3'] ?>">
					 		<span class="info">[ <?= $c['type'] ?> ]</span>
					 		<span class="img"><img src="img/althome/<?= $c['thumb'] ?>"><img src="img/althomegreen/<?= $c['thumb'] ?>"></span>
					 		<h3><?= $c['title'] ?></h3>
					 		<?php if ($c['type'] == 'audio'): ?>
					 			<div class="audioinfo"><?= $Parsedown->text( file_get_contents($c['file']) ); ?></div>
					 		<?php endif ?>
					 	</a>
					 	</div>
					<?php endforeach ?>

				</div>
			</div>

			<!-- Hors piste  -->

			<div class="mountain dragscroll" id="mountain3"

				 data-_offsetstart="transform:translate(0vw,0vh);" data-_offsetend="transform:translate(-125vw,0vh);" >
				<div class="line">
					<header>
						<h2>Hors piste </h2>
						<p>Autour du festival, textes et sons pour voir différemment. </p>
					</header>

					<?php foreach ($horspiste as $c): ?>
						<div class="homelink"  <?= randpos() ?> >
					 	<a class="contentlink" href="#<?= $c['slug'] ?>" data-type="<?= $c['type'] ?>" data-mp3="<?= $c['mp3'] ?>">
					 		<span class="info">[ <?= $c['type'] ?> ]</span>
					 		<span class="img"><img src="img/althome/<?= $c['thumb'] ?>"><img src="img/althomegreen/<?= $c['thumb'] ?>"></span>
					 		<h3><?= $c['title'] ?></h3>
					 		<?php if ($c['type'] == 'audio'): ?>
					 			<div class="audioinfo"><?= $Parsedown->text( file_get_contents($c['file']) ); ?></div>
					 		<?php endif ?>
					 	</a>
					 	</div>
					<?php endforeach ?>

				</div>

			</div>

		</div>

		</div>

	<script type="text/javascript" src="js/autoplay.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/isinviewport.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="plyr/plyr.min.js"></script>
	<script type="text/javascript" src="js/intro.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">


	</script>

</body>

</html>
