<style>
		@media(max-width: 1500px){
			#all{
				background: #082302;
				height: 1150px;
				width: 100%;
			}
		}
		html,head,body,header,nav,li,section,main,div,h3,aside,article,p{
			margin: 0;
		}
		#showcase{/*底*/
			height: 140px;
			width: 100%;
			background: #082302;
		}
		.container{/*標題內容*/
			width: 95%;
			margin: 0 auto;
		}
		.container2{
			width: 60%;
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
			color: #f9f7de;
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
			background: #082302;
			height: 650px;
			box-sizing: border-box;
			padding-top: 75px;

		}
		aside{
			box-sizing: border-box;
			float: left;
			flex-grow: 7;
			padding-right: 150px;
			height: 500px;
			background: #082302;
			color: white;
			padding-top: 120px;		
		}
		#join{

			font-size: 85px;
			font-family: sans-serif;
			color: #fa7e0a;
		}
		p{
			font-size: 50px;
			font-family: sans-serif;
			color: #f9f1d1;
		}
		article{
			box-sizing: border-box;
			padding-top: 70px;
			padding-left: 3%;
			padding-right: 3%;
			float: left;
			flex-grow: 3;
			height: 500px;
			background: #f9f1d1;
		}
		#title{
			font-size: 20px;
			color: #082302;
			line-height: 3em;
		} 
		
		form{
			line-height: 3em;
			color: #082302;
			font-family: sans-serif;
		}
		form>input,form>select{
			padding: 3px 5px;
			border: 1px soild #082302;
			border-radius: 10px;
		}
		.ok{
			color: #fa7e0a;
		}
		form>input:valid+.ok{
			display: inline;
		}
		form>input:invalid+.ok{
			display: none;
		}
		footer{
			background: #082302;
			padding: 20px;
			height: 20px;
			color: white;
			font-family: sans-serif;
		}
	</style>