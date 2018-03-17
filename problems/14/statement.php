<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-19T01:09:21.911941793"/>
	<meta name="created" content="00:00:00">
	<meta name="changed" content="2018-01-19T00:58:39.133613630">
	<meta name="created" content="2018-01-19T00:47:13.657158430">
	<meta name="changed" content="2018-01-19T00:52:29.048807203">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p align="justify" style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt">Given
<i><b>n</b></i> print the first <i><b>n</b></i> Pernicious number on
a new line each.</font></font></font></p>
<p align="justify" style="line-height: 0.17in; orphans: 2; widows: 2">
<br/>
<br/>

</p>
<p align="justify" style="line-height: 0.17in; orphans: 2; widows: 2">
<span style="font-variant: normal"><font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal">A&nbsp;</span></span></span></font></font></font></span><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><strong>pernicious
number</span></span></span></span></font></font></font></span></strong><span style="font-variant: normal"><font color="#000000"><span style="letter-spacing: normal">&nbsp;</span></font></span><span style="font-variant: normal"><font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal">is
a positive integer which has&nbsp;</span></span></span></font></font></font></span><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><em>prime
number of ones in its binary representation</span></span></span></span></font></font></font></span></em><span style="font-variant: normal"><font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal">.
The first pernicious number is 3 since 3 = (11)(in binary
representation) and 1 + 1 = 2, which is a prime.</span></span></span></font></font></font></span></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">The
	only line of the input contains <i><b>n</b></i></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><span style="text-decoration: none">Output
the first </span><span style="text-decoration: none"><i><b>n
</b></i></span><span style="text-decoration: none">pernicious number.</span></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;<i><b>n</b></i>&nbsp;<u>&lt;</u><span style="text-decoration: none">&nbsp;</span><span style="text-decoration: none">10</span><span style="text-decoration: none"><sup>5</sup></span></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.19in; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input:</b></font></font></font>
<font color="#000000"><font face="Consolas, Bitstream Vera Sans Mono, Courier New, Courier, monospace"><font size="2" style="font-size: 9pt">25</font></font></font>
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output:</b></font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">3 5 6 7 9 10 11 12 13 14 17 18 19 20 21 22 24 25 26 28 31 33 34 35 36</font></font></font></pre><p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#333333"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="2" style="font-size: 10pt"><br/>
</font></font></font><br/>
<br/>

</p>
<p style="margin-bottom: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.15in; orphans: 2; widows: 2">
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt"><b>NOTE:-
</b>You have to print the <b>first N pernicious numbers not upto N
pernicious numbers</b>.</font></font></font></p>
<p style="margin-bottom: 0in; line-height: 100%"><br/>

</p>
</body>
</html>
