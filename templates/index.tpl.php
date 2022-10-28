<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>
				<?php
					echo $title['title'] ?>;
		</title>
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css" type="text/css">
    <?php
			if(file_exists('./styles/'.$search['file'].'.css')) { ?>
					<link rel="stylesheet" href="./styles/<?=$search['file']?>.css" type="text/css">
			<?php } ?>
</head>
<body>
<header>
		<div class="session-bar">
				Session
		</div>
		<div class="banner">
				<p>Banner</p>
		</div>
		<nav class="flex-nav">
				<ul>
					<?php foreach ($pages as $url => $page) { ?>
					<?php if(! isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
					<li<?= (($page == $search) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
						<?= $page['title'] ?></a>
					</li>
					<?php } ?>
					<?php } ?>
				</ul>
		</nav>
</header>
<div id="content">
    <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
</div>
<footer>
<div class="footerbox">
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./img/<?=$footer['phoneicon']?>" alt="<?=$footer['phonealt']?>">
				</div>
				<div class="footeritem-text">
            <?php if(isset($footer['phone'])) { ?><?= $footer['phone'] ?> <?php } ?>
				</div>
		</div>
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./img/<?=$footer['mailicon']?>" alt="<?=$footer['mailalt']?>">
				</div>
				<div class="footeritem-text">
            <?php if(isset($footer['mail'])) { ?><?= $footer['mail'] ?> <?php } ?>
				</div>
		</div>
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./img/<?=$footer['gpsicon']?>" alt="<?=$footer['gpsalt']?>">
				</div>
				<div class="footeritem-text">
            <?php if(isset($footer['gps'])) { ?><?= $footer['gps'] ?> <?php } ?>
				</div>
		</div>
</div>
		<div id="copyright">
				<h4>
            <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
						&nbsp;
				</h4>
		</div>
</footer>
</body>
</html>
