

<form action="includes/xt-strip-ext.php" method="post" id="se-form" name="se-form">
<h2>Strip Extensions</h2>

	<div class="question">
		<div class="q-left">Paths List:
		<br /><br />
		/content/...</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="paths-list" id="paths-list">/tmp/0.24101.txt
/tmp/0.28872.txt
/tmp/0.8457.htm
/tmp/0.18006.htm
/tmp/0.29528.pdf
/tmp/0.24102.pdf
/tmp/0.28874.doc
/tmp/0.8458.html
/tmp/0.1800.ppt
/tmp/0.29529.xlsx</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">Type:</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle">
				<select name="type" id="type">
					<option value="strip" selected>Strip</option>
					<option value="get">Get</option>
				</select>
			</div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">&nbsp;</div>
		<div class="q-right">
			<div class="submit-r">
				<div class="submit-top"></div>
				<a href="#"><div class="submit-middle" id="submit-se">Run</div></a>
				<div class="submit-bottom"></div>
			</div>
		</div>
	</div>
</form>
<div class="question">
	<div class="q-left">Results:</div>
	<div class="q-right">
		<div class="q-reg-top"></div>
		<div class="q-reg-middle" id="results-se"></div>
		<div class="q-reg-bottom"></div>
	</div>
</div>



