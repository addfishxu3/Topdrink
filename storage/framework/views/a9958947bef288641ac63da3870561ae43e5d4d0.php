<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $__env->make('user.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<title>Top.dr-註銷會員資料</title>
	<?php echo $__env->make('user.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
			<?php echo $__env->make('user.removenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</main>
	</div>
	<?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/user/remove.blade.php ENDPATH**/ ?>