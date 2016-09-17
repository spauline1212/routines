	


<div class="how-to-page">
	<div class="how-to-tl"></div>
	<div class="how-to-tm"></div>
	<div class="how-to-tr"></div>

	<div class="how-to-ml"></div>
	<div class="how-to-mm">
		<div class="content-header how-to-content-header"><? include('close-x.inc'); ?></div>
		<div class="clear"></div>
		<div class="how-to-mm-inner-case">
			<h2>Total Occurences of elements of A in B</h2>

<h3>Inputs:</h3>
<p>
In Needle box, or set A, enter search strings (such as file paths or url paths) on separate lines<br />
In Haystack box, or B, enter the subject list of strings, also on seperate lines. Note, B can definitely contain more than one instance of any string. <br /></p>

<h3>Returns</h3>
<p>If a &isin; A and f(a) = total number of occurrences of a in B, then this function returns:<br />
<span style="font-size:22px;line-height:23px;">&nbsp;&sum;</span>&nbsp;&nbsp;&nbsp;&nbsp;f(a)<br />
<span style="font-size:8px;line-height:9px;">a &isin; A</span>
</p>

<h3>Example:</h3>

<pre>
A:

aaa
bbb
ccc


B:

ccc
ccc
aaa
aaa
aaa
d
f
ggg
aaaa
bbb


Returns:
6 
</pre>
<p>(2 occurrences of ccc, 3 occurrences of aaa, 1 occurrence of bbb.  aaaa is not a perfect match of aaa, and all other strings in B are not in A)</p>	

		</div><!--/how-to-mm-inner-case-->
		<div class="clear"></div>
	</div>
	<div class="how-to-mr"></div>

	<div class="how-to-bl"></div>
	<div class="how-to-bm"></div>
	<div class="how-to-br"></div>
</div> <!--/how-to-page-->




