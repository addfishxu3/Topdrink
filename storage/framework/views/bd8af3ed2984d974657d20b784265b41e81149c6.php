<h1>Service List</h1>
<?php
DB::connection('mysql');
$service=DB::select('select*from service where id =?',[2]);
foreach ($service as $service) {
	// code...
	echo "<h3>".$service->name."</h3>";
	echo "<hp>".$service->description."</p>";
}

?><?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/service/index.blade.php ENDPATH**/ ?>