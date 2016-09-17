
<form action="includes/xt-split-path.php" method="post" id="sp-form" name="sp-form">
	<input type="hidden" name="input-delimiter" id="input-delimiter" value="/">

<h2>Extract Partial Paths</h2>
<p class="help"><span class="i-icon" instr-id="i-icon-split-path"><a href="#" title="Help Instructions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <a href="#" class="i-icon-a" instr-id="i-icon-split-path" title="Help Instructions">Instructions</a></p>

	<div class="question">
		<div class="q-left">Paths List:</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="paths-list" id="paths-list">/a1/a2/a3/a4/a5.htm
/b1/b2/b3/b4/b5/b6/b7
/c4/c3/c2/c1/c77/c99.htm</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">Output Delimiter:</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle">
				<select name="output-delimiter" id="output-delimiter">
					<option value="/" selected>/</option>
					<option value="	">tab</option>
				</select>
			</div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">Start Index:</div>
		<div class="q-right">
			<div class="l-25">
				<div class="textbox-top"></div>
				<div class="textbox-middle"><input type="text" name="start-index" id="start-index" value="3"/></div>
				<div class="textbox-bottom"></div>
			</div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">End Index:</div>
		<div class="q-right">
			<div class="l-25">
				<div class="textbox-top"></div>
				<div class="textbox-middle"><input type="text" name="end-index" id="end-index" value="5"/></div>
				<div class="textbox-bottom"></div>
			</div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">&nbsp;</div>
		<div class="q-right">
			<div class="submit-r">
				<div class="submit-top"></div>
				<a href="#"><div class="submit-middle" id="submit-sp">Run</div></a>
				<div class="submit-bottom"></div>
			</div>
		</div>
	</div>
</form>
<div class="question">
	<div class="q-left">Results:</div>
	<div class="q-right">
		<div class="q-reg-top"></div>
		<div class="q-reg-middle" id="results-sp"></div>
		<div class="q-reg-bottom"></div>
	</div>
</div>



