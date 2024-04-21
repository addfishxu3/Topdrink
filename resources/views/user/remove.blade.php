<!DOCTYPE html>
<html lang="en">
<head>
	@include('user.meta')
	<title>Top.dr-註銷會員資料</title>
	@include('user.css')
</head>

<body>
	<header id ="showcase">
			<div class="container">
				<div>
					<a href="http://127.0.0.1:8000/">
						<div id="logo" >
							<img src="images/logo.jpg" alt="logo" >
						</div>
					</a>
				</div>
				<div id="list">	
					<div class="dnav">
						<a href="http://127.0.0.1:8000/customer" class="nav"><b>會員中心</b></a>	
					</div>
					<div class="dnav">
						<a href="http://127.0.0.1:8000/aboutus" class="nav"><b>關於我們</b></a>
					</div>
				</div>
			</div>		
	</header>
	<div id="all">
		<main>	
			@include('user.removenav')
		</main>
	</div>
	@include('user.footer')
</body>
</html>