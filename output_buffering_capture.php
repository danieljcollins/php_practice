<?php

// start capturing the output
ob_start();

$items = ['Home', 'Blog', 'FAQ', 'Contact'];

foreach($items as $item):

	// note that we're about to step out of PHP
?>
<li><?php echo $item ?></li>
<?php
// back into php
endforeach;

// $items_lists contains all the HTML captured by the output buffer
$items_li_html = ob_get_clean();

?>

<!-- menu 1: we can now re-use that (multiple times if required) in
our HTML. -->

<ul class="header-nav">
<?php echo $items_li_html ?>
</ul>

<!-- menu 2 -->
<ul class="footer-nav">
<?php echo $items_li_html ?>
</ul>

<!-- menu 1 we can re-use it (multiple times if required) in our HTML -->
<ul class="header-nav">
<li>Home</li>
<li>Blog</li>
<li><FAQ</li>
<li>Contact</li>
</ul>

<!-- menu 2 -->
<ul class="footer-nav">
<li>Home</li>
<li>Blog</li>
<li>FAQ</li>
<li>Contact</li>

<?php
//	ob_end_flush();
?>
