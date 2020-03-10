<?php
$telefone = "5551992054751";
$nome = "william";
$text = "Olá, ".$nome." tudo bem cntg?";
$text = urlencode($text);
$link = "https://wa.me/".$telefone."?text=".$text;

?>
<a href="<?php echo $link; ?>">Whatsapp</a>