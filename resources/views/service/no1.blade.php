<h1>DRINK INFO</h1>
<?php
DB::connection('mysql');
$service=DB::select('select*from service where id =?',[1]);
foreach ($service as $service) {
	// code...
	echo "<img src=".$service->image." alt="" width="250px">";
	echo "<h3>".$service->name."</h3>";
	echo "<h4>".$service->score."</h4>";
	echo "<p>".$service->description."</p>";
}

?>