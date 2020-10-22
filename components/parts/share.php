<div class="pa-share">
<?php

$texto = "Recentemente, alguns artistas do chamado mundo gospel foram confrontados com uma série de críticas por conta de posicionamentos contrários à prática da homossexualidade.";
$url = get_permalink();
$titulo = get_the_title();
$site = get_bloginfo('name');
$via = "iasd";


$link_twitter = "https://twitter.com/intent/tweet?text=" . urlencode(wp_html_excerpt($texto, (247 - strlen($via)), '...')) . "&via=" . $via . "&url=" . urlencode($url);
$link_facebook = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($url) . "&display=popup&ref=plugin&ref=plugin&kid_directed_site=0";
$link_whatsapp = "https://api.whatsapp.com/send?text=" . urlencode($titulo) . "%20-%20" . $site . "%20-%20" . urlencode($url);
$link_email = "mailto:?subject=" . urlencode($titulo) . "%20-%20" . $site . "%20-%20" . urlencode($url);

?>	
	<ul class="list-inline">
		<li class="list-inline-item">Compartilhar: </li>
		<li class="list-inline-item"><a rel="canonical" target="_blank" href="<?= $link_twitter  ?>"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a rel="canonical" target="_blank" href="<?= $link_facebook ?>"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a rel="canonical" target="_blank" href="<?= $link_email ?>" data-action="share/whatsapp/share"><i class="fas fa-envelope"></i></a></li>
		<li class="list-inline-item"><a rel="canonical" target="_blank" href="<?= $link_whatsapp ?>"><i class="fab fa-whatsapp"></i></a></li>
	</ul>
</div>