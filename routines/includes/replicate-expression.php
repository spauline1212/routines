

<form action="includes/xt-replicate-expression.php" method="post" id="re-form" name="re-form">
<h2>Replicate Expression</h2>
<p class="help"><span class="i-icon" instr-id="i-icon-replicate-expression"><a href="#" title="Help Instructions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <a href="#" class="i-icon-a" instr-id="i-icon-replicate-expression" title="Help Instructions">Instructions</a></p>
	<div class="question">
		<div class="q-left">Parameter List:</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="list" id="list">List item A
List item B
List item C</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">Expression to Replicate:
		<br />
		<select name="exp-choice" id="exp-choice">
			<option value="">Select Example</option>
			<option value="eol-ah">link tags</option>
			<option value="eol-li">li tags</option>
			<option value="eol-name-example">Name Example</option>
		</select>
		</div>
		<div class="q-right">
			<div class="q-reg-top"></div>
			<div class="q-reg-middle"><textarea name="exp" id="exp"><li>|F|</li>
</textarea></div>
			<div class="q-reg-bottom"></div>
		</div>
	</div>
	<div class="question">
		<div class="q-left">&nbsp;</div>
		<div class="q-right">
			<div class="submit-r">
				<div class="submit-top"></div>
				<a href="#"><div class="submit-middle" id="submit-re">Run</div></a>
				<div class="submit-bottom"></div>
			</div>
		</div>
	</div>
</form>
<div class="question">
	<div class="q-left">Results:</div>
	<div class="q-right">
		<div class="q-reg-top"></div>
		<div class="q-reg-middle" id="results-re">&nbsp;</div>
		<div class="q-reg-bottom"></div>
	</div>
</div>






<div class="hidden">
<div id="eol-ah-i">url-path#1
url-path#2
url-path#3
url-path#4</div>
<div id="eol-ah-e"><a href="|F|"></a>
</div>
<div id="eol-li-i">List item A
List item B
List item C</div>
<div id="eol-li-e"><li>|F|</li>
</div>
<div id="eol-name-example-i">John
Mary
Joe</div>
<div id="eol-name-example-e">Hello |F|, |F|, and again |F|
</div>
<div id="eol--i"></div>
<div id="eol--e"></div>
</div>



