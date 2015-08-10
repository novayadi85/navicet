<select>
<?php
 for ($i = 0; $i <= 900; $i+=30) {
    $time1 = date('H:i', mktime(16, $i, 0, 0, 0, 0));
    if($i >= 390){
		$time1 = 'I morgen '.$time1;
	}
	echo "<option value='" .$i . '=='. $time1 . "'>" .$time1. "</option>";
}
?>
</select>