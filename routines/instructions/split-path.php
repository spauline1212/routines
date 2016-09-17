	


<div class="how-to-page">
	<div class="how-to-tl"></div>
	<div class="how-to-tm"></div>
	<div class="how-to-tr"></div>

	<div class="how-to-ml"></div>
	<div class="how-to-mm">
		<div class="content-header how-to-content-header"><? include('close-x.inc'); ?></div>
		<div class="clear"></div>
		<div class="how-to-mm-inner-case">
			<h2>Extract Partial Paths</h2>

<h3>Inputs:</h3>
<p>Enter file paths or url paths on separate lines<br />
Choose start and end indices.<br /></p>

<h3>Returns:</h3>
<p>Returns a list of subpaths consisting of extracting the subath of each original path whose starting subdirectory is the start index and whose ending subdirectory is the end index, where the index measures the sequential parts of the path delimited by the slash [/]</p>

<h3>Example:</h3>

<xmp>
Paths List:

/a1/a2/a3/a4/a5.htm
/b1/b2/b3/b4/b5/b6/b7
/c4/c3/c2/c1/c77/c99.htm


Start Index: 3
End Index: 5


Results:

/a3/a4/a5.htm
/b3/b4/b5
/c2/c1/c77
</xmp>


					
		</div><!--/how-to-mm-inner-case-->
		<div class="clear"></div>
	</div>
	<div class="how-to-mr"></div>

	<div class="how-to-bl"></div>
	<div class="how-to-bm"></div>
	<div class="how-to-br"></div>
</div> <!--/how-to-page-->




