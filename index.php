<?php
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Webprog-II-I</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>
<body>
<?php include("./pages/header.php")?>
<div class="row">
		<?php
		if(isset($_GET['page'])) {
				if($_GET['page']=="soap") include("./pages/soap.php");
				if($_GET['page']=="mnb") include("./pages/mnb.php");
				if($_GET['page']=="login") include("./pages/login.php");
		}
		else {
				include("./pages/content.php");
		}
		?>
</div>
			<?php include("./pages/footer.php")?>;
</body>
</html>

