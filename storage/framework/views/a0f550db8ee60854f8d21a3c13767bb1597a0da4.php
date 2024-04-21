<div  class="container2">
				<aside>
					<b id="join">JOIN </b><br>
					<p><u> &emsp; &emsp; &emsp;&emsp;to rate now.</u></p>
				</aside>
				<article>
					<div id="title">
						註冊會員
					</div>
					<form action="/register" method="post">
						<?php echo csrf_field(); ?>
						帳號 : <input type="text" name="name" required><span class="ok">ok</span><br>
						性別 : <select name="sex">
							<option value="male">男</option>
							<option value="female">女</option>
						</select><br>
						E-mail : <input type="text" name="email"><br>
						電話號碼 : <input type="text" name="phone"required pattern="09\d{8}" title="09XXXXXXXX" placeholder="請使用未註冊過的號碼"><span class="ok">ok</span><br>
						密碼 : <input type="password" name="pw"required pattern="[A-Za-z0-9]{8,12}" title="請最少輸入8-12位英文與數字"><span class="ok">ok</span><br>
						<input type="submit" value="註冊會員">
						<input type="reset" value="重置">
					</form>
				</article>	
			</div>	<?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/user/nav.blade.php ENDPATH**/ ?>