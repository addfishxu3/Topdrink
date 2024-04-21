<head>
	<style type="text/css">
		html,head,body,header,nav,li,section,main,div,h3{
			margin: 0;
		}
		body{
			
			background: #082302;
			color: #fa7e0a;
		}
		main div{
			padding-top: 30px;
			width: 30%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<main>
		<div>
	<center><h1>DRINK INFO</h1>

<?php
DB::connection('mysql');
$service=DB::select('select*from service where id =?',[1]);
foreach ($service as $service) {
	// code...
	echo "<img src=".$service->image.">";
	echo "<h2>".$service->name."</h2>";

	echo "<h4>SCORE:".$service->score."</h4>";
	echo "<p>".$service->description."</p>";
}

?></center></div></main>
</body>
