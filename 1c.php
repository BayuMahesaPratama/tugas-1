<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>
    <style>
		.container{
			width: 90%;
		}

		.kotak{
			width: 100px;
			height: 100px; 
			background-color:turquoise;
			text-align: center;
			line-height: 100px;
			box-sizing: border-box;
		}

		.kotak1 {
            border-left: 3px solid black ;
            border-right: 3px solid black ;
			border-bottom: 3px solid black ;
            border-top: 3px solid black ;
		}

		.kotak2 {
            border-left: 3px solid black ;
			border-bottom: 3px solid black;

		}

        .kotak3 {
			position: absolute;
 			margin-top: -100px;
			margin-left: 100px;
			border-left: 3px solid black;
            border-right: 3px solid black ;
            border-top: 3px solid black ;
			border-bottom: 3px solid black;
		} 

        .kotak4 {
            border-left: 3px solid black ;
            border-bottom: 3px solid black;

        }

		.kotak5 {
			position: absolute;
 			margin-top: -100px;
			margin-left: 100px;
			border-left: 3px solid black ;
            border-bottom: 3px solid black ;
		}

		.kotak6 {
			position: absolute;
 			margin-top: -100px;
			margin-left: 200px;
			border-left: 3px solid black;
            border-right: 3px solid black ;
            border-top: 3px solid black ;
            border-bottom: 3px solid black ;
		} 

	</style>
</head>
<body>
<div class="container">
	<div class="kotak kotak1">1</div>
	<div class="kotak kotak2">2</div>		
	<div class="kotak kotak3">2</div>
	<div class="kotak kotak4">3</div>
	<div class="kotak kotak5">3</div>
	<div class="kotak kotak6">3</div>
</div>
</body>
</html>