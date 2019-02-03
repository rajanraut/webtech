	<?php
	include_once("config.php");
	$result=mysqli_query($mysqli,"SELECT * from images");
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>";?><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" /><?php echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	?>
