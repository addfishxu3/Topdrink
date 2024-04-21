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
			height: 930px;
			background: url('https://images.pexels.com/photos/6412830/pexels-photo-6412830.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') no-repeat;
			background-repeat: round;
			background-repeat: no-repeat;
			background-size: cover;
			max-width: 100%;
    		max-height: 100%;
    		object-fit: none;
			
			margin: 0px auto;
			padding-top: 40px;
			box-sizing: border-box;
			font-family: sans-serif;
			color: white;
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
		h1{
			position: relative;
			bottom: 0;
			top: 50px;
			text-align:center;
			line-height: 3em;
		}
		h2{
			position: relative;
			bottom: 0px;	
			line-height: 3em;
			text-align: center;
		}
		h3{
			padding-top: 100px;
			font-size: 45px;
			text-align: center;
			font-family: sans-serif;
			color: #082302;
		}
		hr{
			color: #082302;
			border: 2px solid #082302;
			width: 80%;
		}
		article{
			width: 100%;
			height: 1300px;
			margin-bottom: 100px;
			box-sizing: border-box;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;

		}
		main article div{
			width: 400px;
			height: 400px;
			max-height: 400px;
			margin: 10px;
			background: #f9f1d1;
			box-sizing: border-box;
			padding-left: 75px;
			padding-bottom: 20px;
			cursor: pointer;
		}
        footer{
			background: #082302;
			margin-top: 100px;
			padding: 20px;
			color: white;
			font-family: sans-serif;

		}
  </style>  <?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/layouts/css.blade.php ENDPATH**/ ?>