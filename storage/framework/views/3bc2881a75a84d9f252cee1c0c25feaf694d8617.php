<h1>Create</h1>
<form method="post" action="/store" >
	<?php echo csrf_field(); ?>
	Service Name:<input type="text" name="name"><br>
	Service Price:<input type="text" name="price"><br>
	Service Description:<textarea rows="5" cols="30" name="description"></textarea>
		<button type="submit">Submit</button>
</form>

<h1>Update</h1>
<form method="post"action="/update">
	<?php echo csrf_field(); ?>
	Service ID: <input type="text" name="id"><br>
	New Price: <input type="text" name="price"><br>
	<button type="submit">Update</button>
</form>

<h1>Delete</h1>
<form method="post"action="/delete">
	<?php echo csrf_field(); ?>
	Which id do you want to del?: <input type="text" name="id"><br>
	<button type="submit">Delete</button>
</form>
<?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/service/create.blade.php ENDPATH**/ ?>