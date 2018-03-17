<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="2018-01-23T00:55:26.647940672"/>
	<meta name="changed" content="2018-01-23T00:59:38.501345564"/>
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-bottom: 0.1in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">Given
an </font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">two
non-negative integers </font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt"><b>a</b></font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">
and </font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt"><b>b</b></font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">
.Find the position of the rightmost bit where a carry is generated</font></font></span></font></font></font></p>
<p style="margin-bottom: 0.1in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">i</font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">n
binary addition of </font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt"><b>a</b></font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">
and </font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt"><b>b</b></font></font></span><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">.</font></font></span></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.38in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">The
	first line of the input contains a single integer&nbsp;<b>T</b>&nbsp;denoting
	the number of test cases. The description of&nbsp;<b>T</b>&nbsp;test
	cases follows.</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">The
	first line of each test case contains two space separated
	integers&nbsp;<i><b>a</b></i>&nbsp;and&nbsp;<i><b>b</b></i><b>.</b></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.38in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">For
each test case, output the remainder on a new line</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.38in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>T</b>&nbsp;≤ 200</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>a,b</b>≤ 2000</font></font></font></p>
	<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.22in; orphans: 2; widows: 2">
	</p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.38in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.2in; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">10 2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">10 5</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">0</font></font></font>



<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">Explanation:</font></font></font>
<span style="display: inline-block; border: none; padding: 0in"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><font color="#000000">for 1<font size="1" style="font-size: 6pt">st</font> test case: </span></font></font></font>
<span style="display: inline-block; border: none; padding: 0in"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><b><font color="#000000">(10)</b><font size="1" style="font-size: 6pt"><b>10</b></font> = (1010)<font size="1" style="font-size: 6pt">2</span></font></font></font></font>
<span style="display: inline-block; border: none; padding: 0in"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><b><font color="#000000">(2)</b><font size="1" style="font-size: 6pt"><b>10</span></b></font> = (10)<span style="display: inline-block; border: none; padding: 0in"><font size="1" style="font-size: 6pt">2</span></font>.</font></font></font>
<font color="#000000">  <font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">10</span></span></font></font><span style="display: inline-block; border: none; padding: 0in"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><b>1</span></b></span></font></font><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">0</span></span></font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">+   <span style="display: inline-block; border: none; padding: 0in"><b>1</span></b>0</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">As highlighted, 1st carry bit from the right </font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">will be generated at position '2'.</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">for 2<font size="1" style="font-size: 6pt">nd</font> test case:'0' as no carry bit will be generated.</font></font></font>
</pre><p>
<br/>
<br/>
<br/>

</p>
</body>
</html>
