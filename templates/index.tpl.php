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
    <link rel="stylesheet" href="./styles/styles.css" type="text/css">
    <?php
			if(file_exists('./styles/'.$search['file'].'.css')) { ?>
					<link rel="stylesheet" href="./styles/<?=$search['file']?>.css" type="text/css">
			<?php } ?>
</head>
<body>
<header>
    <div class="session">
				<div>
						<h5>Resize the browser window to see the responsive effect.</h5>
				</div>
				<div class="headerbox">
						<div class="headerbox-img">
								<img  class="logo" src="./images/<?=$header['logo']?>" alt="<?=$header['logoalt']?>">
						</div>
						<div class="headerbox-text">
								<h1>Neumann Pizza</h1>
								<h4>A legjobb hely a városban</h4>
						</div>
				</div>
        <div class="row">
            <nav>
                <ul class="navbar">
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
        </div>

    </div>
</header>
<div id="content">
    <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
</div>
<footer>
<div class="footerbox">
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./images/<?=$footer['phoneicon']?>" alt="<?=$footer['phonealt']?>">
				</div>
				<div class="footeritem-text">
            <?php if(isset($footer['phone'])) { ?><?= $footer['phone'] ?> <?php } ?>
				</div>
		</div>
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./images/<?=$footer['mailicon']?>" alt="<?=$footer['mailalt']?>">
				</div>
				<div class="footeritem-text">
            <?php if(isset($footer['mail'])) { ?><?= $footer['mail'] ?> <?php } ?>
				</div>
		</div>
		<div class="footeritem">
				<div class="footeritem-logo">
						<img src="./images/<?=$footer['gpsicon']?>" alt="<?=$footer['gpsalt']?>">
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
