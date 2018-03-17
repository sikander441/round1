<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-18T23:12:37.820717692"/>
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h2.cjk { font-family: "Source Han Sans CN Regular" }
		h2.ctl { font-family: "Lohit Devanagari" }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<h2 class="western" align="justify" style="font-variant: normal; letter-spacing: normal; font-style: normal; orphans: 2; widows: 2">
<br/>
<br/>

</h2>
<p style="margin-bottom: 0in; line-height: 0.15in; orphans: 2; widows: 2">
<br/>

</p>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2; text-decoration: none">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt">Given
three sides, check whether triangle is valid or not.</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt">Three
	integers <i><b>a,b,c</b></i> the three sides of a triangle</font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt">For
each test case, output YES if it is a valid triangle or NO if it is
an invalid triangle.</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt">1<u>&lt;</u><span style="text-decoration: none">
	a,b,c </span><u>&lt;</u><span style="text-decoration: none"> 100</span></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Example
1</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 142%; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">7 10 5</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">YES</font></font></font></pre><p>
<font size="4" style="font-size: 14pt"><br/>
<span style="font-variant: normal"><font color="#4a4a4a"><font face="Helvetica, sans-serif"><span style="letter-spacing: normal"><span style="font-style: normal"><b>Example
2</b></span></span></font></font></span></font></p>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 142%; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">1 10 12</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">NO</font></font></font></pre><p>
<font size="4" style="font-size: 14pt"><br/>
</font><br/>
<br/>

</p>
</body>
</html>
