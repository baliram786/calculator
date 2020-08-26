<?php 
include "config.php";
if(isset($_POST))
				{
					$number1 = $_POST['number1'];
					$number2 = $_POST['number2'];
					$operation = $_POST['operation'];
					// Check number values
					if(is_numeric($number1) && is_numeric($number2))
					{
						// Calculate total
						if($operation == '+')
						{
							$total = $number1 + $number2;	
						}
						if($operation == '-')
						{
							$total = $number1 - $number2;	
						}
						if($operation == '*')
						{
							$total = $number1 * $number2;	
						}
						if($_POST['operation'] == '/')
						{
							$total = $number1 / $number2;	
						}
						
						$sql = "INSERT INTO user (calculation,operation,number1,number2)
			VALUES ($total,'$operation',$number1,$number2)";
			echo $sql;
						$conn->query($sql);
						} 
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
					return true;
				

 ?>