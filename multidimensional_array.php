<?php
$products = array
(
	0 => array
	(
		'id' => 13,
		'category_id' => 7,
		'name' => 'Leaving Of Liverpool',
		'description' => 'Leaving Of Liverpool',
		'price' => 1.00,
		'virtual' => 1,
		'active' => 1,
		'sort_order' => 13,
		'created' => '2007-06-24 14:08:03',
		'modified' => '2007-06-24 14:08:03',
		'image' => 'NONE'
	),
	1 => array
	(
		'id' => 16,
		'category_id' => 7,
		'name' => 'Yellow Submarine',
		'description' => 'Yellow Submarine',
		'price' => 1.00,
		'virtual' => 1,
		'active' => 1,
		'sort_order' => 16,
		'created' => '2007-06-24 14:10:02',
		'modified' => '2007-06-24 14:10:02',
		'image' => 'NONE'
	)
);// ends Array

// now display the info in a table

echo "<html><table>";
foreach ($products as $key => $value){
	foreach($value as $k => $v){
		//echo "<pre>";
		echo "<tr>";
		echo "<td>$k</td>";	// get index
		echo "<td>$v</td>";	// get value
		echo "</tr>";
		//echo "</pre>";
	}
}
echo "</table></html>";
?>
