<?php
	function count_handshake($jumlah) {
		$a = 0;
		$b = 0;
		for ($i=1; $i < $jumlah ; $i++) { 
			for ($n=$i; $n < $jumlah ; $n++) { 
				$b = $n+1;
				$a++;
			}
		}
		return $a;
	}
	echo count_handshake(6);
?>