<h1>Create</h1>
<form method="post" action="/store" >
	@csrf
	Service Name:<input type="text" name="name"><br>
	Service Price:<input type="text" name="price"><br>
	Service Description:<textarea rows="5" cols="30" name="description"></textarea>
		<button type="submit">Submit</button>
</form>

<h1>Update</h1>
<form method="post"action="/update">
	@csrf
	Service ID: <input type="text" name="id"><br>
	New Price: <input type="text" name="price"><br>
	<button type="submit">Update</button>
</form>

<h1>Delete</h1>
<form method="post"action="/delete">
	@csrf
	Which id do you want to del?: <input type="text" name="id"><br>
	<button type="submit">Delete</button>
</form>
