
<form action="includes/xt-rem.php" method="post" id="rem-form" name="rem-form">
<h2>Replicate Expression Multiple Field</h2>
<p class="help"><span class="i-icon" instr-id="i-icon-rem"><a href="#" title="Help Instructions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <a href="#" class="i-icon-a" instr-id="i-icon-rem" title="Help Instructions">Instructions</a></p>

	<div class="question" id="rem-txt-list">
		<div class="q-left">Parameter List:</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="list" id="list">hidden-value#1
hidden-value#2
hidden-value#3

Visible option #1
Visible option #2
Visible option #3
</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">Expression to Replicate:
		<br />
		<select name="exp-choice-1" id="exp-choice-1">
			<option value="">Select Example</option>
			<option value="eol-ahm">link texts</option>
			<option value="eol-so">select options</option>
		</select>
		</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="exp-1" id="exp-1"><option value="|F1|">|F2|</option>
</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">&nbsp;</div>
		<div class="q-right">
			<div class="submit-r">
				<div class="submit-top"></div>
				<a href="#"><div class="submit-middle" id="submit-rem">Run</div></a>
				<div class="submit-bottom"></div>
			</div>
		</div>
	</div>
</form>
<div class="question">
	<div class="q-left">Results:</div>
	<div class="q-right">
		<div class="q-reg-top"></div>
		<div class="q-reg-middle" id="results-rem">&nbsp;</div>
		<div class="q-reg-bottom"></div>
	</div>
</div>






<div class="hidden">
<div id="eol-ahm-i">url-path#1
url-path#2
url-path#3
url-path#4

Text #1
Text #2
Text #3
Text #4</div>
<div id="eol-ahm-e"><a href="|F1|">|F2|</a>
</div>
<div id="eol-so-i">hidden-value#1
hidden-value#2
hidden-value#3

Visible option #1
Visible option #2
Visible option #3</div>
<div id="eol-so-e"><option value="|F1|">|F2|</option>
</div>
</div>



