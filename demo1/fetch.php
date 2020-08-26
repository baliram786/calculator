 <?php
include "config.php";
$sql = "SELECT * FROM user ORDER BY ID DESC limit 10";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						// output data of each row
							$counter = 1;
							?>
						<table class="table">
						<thead>
						<tr>
						<th>Sr No.</th>	
						<th>calculation</th>
					   </tr>
						</thead>
                        
                       <?php
						while($row = $result->fetch_assoc()) {
						?>
						<tr>
						<td><?php echo $counter++; ?></td>		
						<td><?php echo $row["number1"]." ".$row["operation"]." ".$row["number2"]." = ".$row["calculation"]  ?></td>
						</tr>
						<?php
						}
						?>
						
						</table>
						<?php
						}