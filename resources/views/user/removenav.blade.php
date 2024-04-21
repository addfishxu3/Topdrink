<div  class="container2">
				<aside>
					<b id="join">JOIN </b><br>
					<p><u> &emsp; &emsp; &emsp;&emsp;to rate now.</u></p>
				</aside>
				<article>
					<div id="title">
						註銷會員資料
					</div>
					<form action="/remove" method="post">
						@csrf
						ID : <input type="text" name="id" required><br>						
						電話號碼 : <input type="text" name="phone"required pattern="09\d{8}" title="09XXXXXXXX" placeholder="請輸入帳號電話號碼"><span class="ok">ok</span><br>
						<input type="submit" value="確認註銷">
						<input type="reset" value="重置">
					</form>
				</article>	
			</div>	