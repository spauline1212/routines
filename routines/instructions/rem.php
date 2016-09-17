	


<div class="how-to-page">
	<div class="how-to-tl"></div>
	<div class="how-to-tm"></div>
	<div class="how-to-tr"></div>

	<div class="how-to-ml"></div>
	<div class="how-to-mm">
		<div class="content-header how-to-content-header"><? include('close-x.inc'); ?></div>
		<div class="clear"></div>
		<div class="how-to-mm-inner-case">
			<h2>Replicate Expression Multiple Field</h2>

<h3>Definition:<h3>
<p>Let <br /><br />

|F1|<sub>1</sub><br />
|F1|<sub>2</sub><br />
...<br />
|F1|<sub>n</sub><br />
<br /><br />

|F2|<sub>1</sub><br />
|F2|<sub>2</sub><br />
...<br />
|F2|<sub>n</sub><br />
<br /><br />
...
<br /><br />

|FM|<sub>1</sub><br />
|FM|<sub>2</sub><br />
...<br />
|FM|<sub>n</sub><br />
<br /><br />

<br />be M sets of n string expressions as above, and let f(|F1|, |F2|, ... |FM|) be a multidimensional string function that creates a string expression that uses up to |F1| to |FM|, for example, f(|F1|, ... |F3|) = "Hello, my name is |F1|, I am from the city |F2|, and my favorite color  is |F3|."<br /><br />
Then this routine returns:<br /><br />

f(|F1|<sub>1</sub>, |F2|<sub>1</sub>, ...|FM|<sub>1</sub>)<br />
f(|F1|<sub>2</sub>, |F2|<sub>2</sub>, ...|FM|<sub>2</sub>)<br />
...<br />
f(|F1|<sub>n</sub>, |F2|<sub>n</sub>, ...|FM|<sub>n</sub>)<br />
</p>

<br />
<br />

<h3>Example</h3>
<xmp>
Parameter list:

hidden-value#1
hidden-value#2
hidden-value#3

Visible option #1
Visible option #2
Visible option #3


Expression:

<option value="|F1|">|F2|</option>


Results:

<option value="hidden-value#1">Visible option #1</option>
<option value="hidden-value#2">Visible option #2</option>
<option value="hidden-value#3">Visible option #3</option>
</xmp>


			<p>&nbsp;<br />&nbsp;<br /></p>			
		</div><!--/how-to-mm-inner-case-->
		<div class="clear"></div>
	</div>
	<div class="how-to-mr"></div>

	<div class="how-to-bl"></div>
	<div class="how-to-bm"></div>
	<div class="how-to-br"></div>
</div> <!--/how-to-page-->




