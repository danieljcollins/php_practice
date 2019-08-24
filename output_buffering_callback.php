<?php

// You can apply any kind of additional processing to the output by 
// passing a callable to ob_start()

function clearAllWhiteSpace($buffer){
	return str_replace(array("\n", "\t", ' '), '', $buffer);
}

ob_start('clearAllWhiteSpace');
?>

<h1>Lorem Ipsum</h1>

<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuiada fames ac turpis egestas. <a href="#">Donnec non enim</a> in turpis pulvinar facilisis.</p>

<h2>Header Level 2</h2>

<ol>
<li>Lorem ipsum dolor sit amet...</li>
<li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<?php
/* Output will be flushed and processed when script ends or call
 * ob_end_flush();
 */

?>
