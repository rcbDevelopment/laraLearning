<!DOCTYPE html>
<html lang=eng>
<head>
    <style>
        header {
	    background: #e3e3e3;
	    padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
	<header>
		<h1>
			<?php 
				$name = htmlspecialchars($_GET['name']); 
				echo "hello $name " ; 
			?>
		</h1>
	</header>    	
something static
</body>
</html>

