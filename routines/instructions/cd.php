	


<div class="how-to-page">
	<div class="how-to-tl"></div>
	<div class="how-to-tm"></div>
	<div class="how-to-tr"></div>

	<div class="how-to-ml"></div>
	<div class="how-to-mm">
		<div class="content-header how-to-content-header"><? include('close-x.inc'); ?></div>
		<div class="clear"></div>
		<div class="how-to-mm-inner-case">
			<h1>Create Directory Tree</h1>

<p><strong>Inputs:</strong><br />
file path list, and root directory to base all in<br /></p>

<p><strong>Returns:</strong><br />
DOS batch code that will create the whole directory structure and files with those names but empty based in the root you specify</p>

<p><strong>Example:</strong></p>

<pre>
Files List:
/content/www/de/de/education/k12/assessing-projects.html
/content/www/de/de/education/k12/assessing-projects/assessment-plans.html
/content/www/de/de/education/k12/assessing-projects/assessment-plans/elementary.html
/content/www/de/de/education/k12/assessing-projects/assessment-plans/secondary.html
/content/www/de/de/education/k12/assessing-projects/strategies/checking-understanding.html
/content/www/de/de/education/k12/assessing-projects/overview-and-benefits/types.html
/content/www/de/de/education/k12/assessing-projects/try-it/tutorial/creating.html
/content/www/de/de/education/k12/assessing-projects/workspace.html
/content/www/de/de/education/k12/pointers/teach-elements-assessment.html

Prefis Root Directory:
C:/TEMP/2012


Results:
mkdir "C:\TEMP\2012\content\www\de\de\education\k12"
cd "C:\TEMP\2012\content\www\de\de\education\k12"
type nul>"assessing-projects.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects"
type nul>"assessment-plans.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\assessment-plans"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\assessment-plans"
type nul>"elementary.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\assessment-plans"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\assessment-plans"
type nul>"secondary.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\strategies"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\strategies"
type nul>"checking-understanding.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\overview-and-benefits"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\overview-and-benefits"
type nul>"types.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\try-it\tutorial"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects\try-it\tutorial"
type nul>"creating.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects"
cd "C:\TEMP\2012\content\www\de\de\education\k12\assessing-projects"
type nul>"workspace.html"
mkdir "C:\TEMP\2012\content\www\de\de\education\k12\pointers"
cd "C:\TEMP\2012\content\www\de\de\education\k12\pointers"
type nul>"teach-elements-assessment.html"
</pre>


			<p>&nbsp;<br />&nbsp;<br /></p>			
		</div><!--/how-to-mm-inner-case-->
		<div class="clear"></div>
	</div>
	<div class="how-to-mr"></div>

	<div class="how-to-bl"></div>
	<div class="how-to-bm"></div>
	<div class="how-to-br"></div>
</div> <!--/how-to-page-->




