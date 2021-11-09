<table>
	<tr>
		
		<?php 	
			$product = $products[1];
			$kluch = null;
		?>
		
	<?php foreach($product as $key=>$value) : ?>

		<th>

			<?php
				$kluch[] = $key;
				echo $key;
			?>

		</th>

	<?php endforeach;?>		

	</tr>

	<?php
		$k = 1;
		foreach($products as $product) :
	?>

		<tr>

			<?php 
			$i = 0;
			
			while($i < count($kluch)) :
			
			?>
		
				<td><?php echo $products[$k][$kluch[$i]]; ?></td>
			
			<?php
				$i++;
				endwhile; 
			?>

		</tr>
	<?php
		$k++;
		endforeach;
	?>

</table>
