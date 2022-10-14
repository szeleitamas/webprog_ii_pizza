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
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <?php
			if(file_exists('./styles/'.$search['file'].'.css')) { ?>
					<link rel="stylesheet" href="./styles/ <?php echo $search['file']?>.css" type="text/css">
			<?php } ?>
</head>
<body>
<header>
    <div id="headerbox">
        <div class="headeritem">
            <nav>
                <ul id="menu">
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
    <?php
			if(isset($footer['copyright'])) { ?>
					&copy;&nbsp; <?php echo $footer['copyright'] ?>
			<?php } ?>
</footer>
</body>
</html>
