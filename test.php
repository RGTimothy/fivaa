<?php
	$val = 4;
	for($i = 0; $i < 5; $i++)
	{
		for($j = 7; $j > $i; $j--)
		{
			if($j > 5) echo $val;
			else echo $val + 2;
		}
		$val--;
		echo '</br>';
	}
?>
