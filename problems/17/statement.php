<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-23T00:36:30.402294217"/>
	<meta name="created" content="2018-01-22T23:52:28.873536678">
	<meta name="changed" content="2018-01-23T00:25:07.581457954">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#6b6b6b"><span style="text-decoration: none"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">Given
an array of </span><span style="text-decoration: none"><i><b>N
</b></i></span><span style="text-decoration: none">integers and a
number </span><span style="text-decoration: none"><i><b>K</b></i></span><span style="text-decoration: none">
your task is to print the remainder after multiplying all the numbers
of the array dividing by </span><span style="text-decoration: none"><i><b>K</b></i></span><span style="text-decoration: none">.</span></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">The
	first line of the input contains a single integer&nbsp;<b>T</b>&nbsp;denoting
	the number of test cases. The description of&nbsp;<b>T</b>&nbsp;test
	cases follows.</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">The
	first line of each test case contains two space separated integers&nbsp;<i><b>N</b></i>
	and <i><b>K</b></i><b>.</b></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">For
each test case, output the remainder on a new line</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>T</b>&nbsp;≤ 100</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>N</b>≤ 25</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt"><u>1
	≤&nbsp;</u><span style="text-decoration: none"><b>K</b></span><u>≤
	30</u></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">6 11</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">100 10 5 25 35 14</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">2 5</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">100 10</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">9</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">0</font></font></font>


<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">Explanation:</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">for 1<sup>st</sup> test case: 100 x 10 x 5 x 25 x 35 x 14 = 61250000 % 11 = 9</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">for 2<sup>nd</sup> test case: 100 x 10 = 1000 % 5 = 0</font></font></font>
</pre><p style="margin-bottom: 0in; line-height: 150%">
<br/>

</p>
</body>
</html>
