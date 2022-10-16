<?php
?>

<footer>
<div class="footer">
		<div class="footeritem">
				<img src="./img/phone_icon.png" alt="Telefon">
				<h4>06-80-100-1000</h4>
		</div>
		<div class="footeritem">
				<img src="./img/mail_icon.png" alt="E-mail">
				<h4>xx@xx.hu</h4>
		</div>
		<div class="footeritem">
				<iframe width="300" height="190" id="gmap_canvas" src="https://maps.google.com/maps?q=kecskem%C3%A9t,%20neumann%20j%C3%A1nos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:190px;width:300px;}</style><a href="https://www.embedgooglemap.net">map embed iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:190px;width:300px;}</style></div></div>
		</div>
</div>
		<div id="copyright">
				<h4>
            <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
            &nbsp;
            <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        </h4>
    </div>
</footer>
