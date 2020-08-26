 <!DOCTYPE html>
<html>
	<head>
		<title>Simple Calculator In PHP</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		    <!-- Calculator form by webdevtrick.com -->
		 <form method="post" name="form" id="form"  action="#">
		        <input name="number1" id ="number1"
		        type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation" id="operation">
		        	<option value="+">Plus</option>
		            <option value="-">Minus</option>
		            <option value="*">Multiply</option>
		            <option value="d/">Devide</option>
		        </select>
		        <input name="number2" id ="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary submit"/>
		    </form>
	    <div id="demo"></div>
		</div>
	
	</body>
</html>
<script>
             $(document).ready(function(){

                $('#form').on('submit', function(e){
					e.preventDefault();
					var number1 = $('#number1').val();
					var operation = $('#operation').val();
					var number2 = $('#number2').val();
					$.ajax({
					type: "POST",
					url: 'save.php',
					data: {number1: number1,number2:number2,operation:operation},
					success: function(data){
						console.log(data);
					//$("#demo").html(data); 
					}
				});
               }); 

             function fecthData()
             {  //alert("bsdb");
					$.ajax({
					url: 'fetch.php',
					type: 'get',
					success: function(data){
				   $("#demo").html(data); 
				}
				});
             }
               
             setInterval(function(){fecthData()} , 2000)

             });
        </script>