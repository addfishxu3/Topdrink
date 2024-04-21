<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Top.dr (Top drink)台灣手搖飲料排名，蒐集用戶對手搖飲料的評分資料，列出飲料排名。">
	<meta name="keywords" content="手搖,飲料,排名">
	<meta name="author" content="李家瑜">
	<title>Top.dr</title>
	<style type="text/css">  
		@media(min-width: 1500px){

			h1{
				font-size: 100px;
			}
			h2{
				font-size: 83px;
			}

		}
		@media(max-width: 1500px){
			main{
			height: 2300px;
			}
			h1{
				font-size: 100px;
			}
			h2{
				font-size: 83px;
			}


		}

		@media(max-width: 700px){
			main{
				height: 4000px;
			}
			h1{
				font-size: 80px;
			}
			h2{
				font-size: 63px;
			}

		}
		html,head,body,header,nav,li,section,main,div,h3{
			margin: 0;
		}
		
		#showcase{/*底圖，文字*/
			height: 140px;
			width: 100%;
			background: #082302;
		}
		.container{/*標題內容*/
			width: 95%;
			margin: 0 auto;

		}
		header div{
			display: flex;
		}
		#logo{
			width: 120px;
			height: 110px;
			cursor: pointer;
		}
		#list{
			width: 100%;
			height: 110px;
			display: flex;
			justify-content: end;
		}
        .nav{
        	box-sizing: border-box;
        	width: 110px;
			text-decoration: none;
			color: #f9f1d1;
			font-size: 15px;
			font-family: sans-serif;
			background: #fa7e0a;
			text-align: center;
			padding-top: 40px;
			cursor: pointer;
    		transition: all .3s linear;
		}
		.nav:hover{
    		color: #082302;
    		border: 5px solid #082302;
		}
	
		main{
			height: 700px;
			background: #082302;
			margin: 0 auto;
		}
		section{
			

		}
		main div{
			display: flex;
		}
		#ulist{
			width: 100%;
			height: 320px;
			display: flex;
			justify-content: center;
		}
		.unav{
			margin-top: 300px;
			margin-right: 50px;
			box-sizing: border-box;
			width: 200px;
			text-decoration: none;
			color: #f9f1d1;
			font-size: 25px;
			font-family: sans-serif;
			background: #fa7e0a;
			text-align: center;
			padding-top: 0px;
			cursor: pointer;
    		
		}
        footer{
			background: #082302;
			margin-top: 0px;
			padding: 20px;
			color: white;
			font-family: sans-serif;

		}
  </style>  
</head>

<body>
	<header>
		<section id ="showcase" >
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
			
		</section>
	</header>
	<main>
		<section>
			<div id="ulist">
				<div class="usernav">
					<a href="http://127.0.0.1:8000/registration" class="unav"><b>註冊會員</b></a>
				</div>
				<div class="usernav">
					<a href="http://127.0.0.1:8000/updatedata" class="unav"><b>更新會員資料</b></a>
				</div>
				<div class="usernav">
					<a href="http://127.0.0.1:8000/delete" class="unav"><b>註銷會員</b></a>
				</div>
			</div>
		</section>
	</main>

	<footer id="footer" align="center" >Copyright &copy; 2022 四資管二 B10909022 李家瑜.All Rights Reserved. </footer>
</body>
</html>