<head>
	<center><h1>Mengambil dan menghitung jumlah Karakter dari Nama</h1><center>
</head>
<table border="1">
	<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="5">OUTPUT</th>
	</tr>

	<tr>
		<th>A</th>
		<th>E</th>
		<th>I</th>
		<th>U</th>
		<th>O</th>
	</tr>
	<tr>
		<td>
			<?php
			$n1="ALFIAN DWICAHYA";
			echo $n1; 
			 ?>
		</td>
		<td>
			<?php
			$hrfA = substr_count($n1,"A");
			echo $hrfA;
			 ?>
		</td>
		<td>
			<?php
			$hrfE = substr_count($n1,"E");
			echo $hrfE 
			 ?>
		</td>
		<td>
			<?php
			$hrfI = substr_count($n1,"I");
			echo $hrfI 
			 ?>
		</td>
		<td>
			<?php
			$hrfU = substr_count($n1,"U");
			echo $hrfU 
			 ?>
		</td>
		<td>
			<?php
			$hrfO = substr_count($n1,"O");
			echo $hrfO 
			 ?>
		</td>
	</tr>
</table>