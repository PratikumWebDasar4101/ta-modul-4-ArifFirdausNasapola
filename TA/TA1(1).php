<?php 
	
	$angka = array('satu' => "1",
					'duaa' => "2",
					'tigas' => "3" );

	$biasa = array (4,5,6);

	echo $angka["tigas"];
	echo"<br>";
	foreach ($angka as $key => $arip) {
		echo $arip;
	}
	echo "<br>";
	for ($i=0; $i < count($biasa); $i++) { 
		echo $biasa[$i];
	}
?>