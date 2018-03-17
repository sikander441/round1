<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-19T01:24:11.325734319"/>
	<meta name="created" content="00:00:00">
	<meta name="changed" content="2018-01-19T01:19:18.713019997">
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
<h2 class="western"><br/>
<br/>

</h2>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt">Given
three numbers a, b and k, find k-th digit in a<span style="display: inline-block; border: none; padding: 0in"><sup><font size="3" style="font-size: 12pt">b</font></sup><sup><font size="4" style="font-size: 16pt">
</span></font></sup>from right side</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt">Three
	integers&nbsp; <i><b>a,b and k</b></i>&nbsp;</font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Output</b></font></font></font></h3>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt">k-th
digit in a<span style="display: inline-block; border: none; padding: 0in"><sup><font size="3" style="font-size: 12pt">b</font></sup><sup><font size="4" style="font-size: 16pt">
</span></font></sup>from right side.</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt">1<u>&lt;</u><span style="text-decoration: none">&nbsp;a,b&nbsp;</span><u>&lt;</u><span style="text-decoration: none">&nbsp;</span><span style="text-decoration: none">20</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><span style="text-decoration: none">1</span><span style="text-decoration: none">
	</span><span style="text-decoration: none"><u>&lt;</u></span><span style="text-decoration: none">
	k </span><span style="text-decoration: none"><u>&lt;</u></span><span style="text-decoration: none">
	len(a</span><span style="text-decoration: none"><sup>b</sup></span><span style="text-decoration: none">)</span></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="4" style="font-size: 14pt"><b>Example
1</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.19in; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">3 3 1</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">7</font></font></font></pre><p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#333333"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="4" style="font-size: 14pt">Explaination:</font></font></font></p>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">3^3
= 27 for k = 1. First digit is 7 in 27</font></font></font></p>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#333333"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="4" style="font-size: 14pt"><br/>
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><b>Example
2</b></font></font></font></font></font></p>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.19in; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">5 2 2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="4" style="font-size: 14pt">2</font></font></font></pre><p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#333333"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><font size="4" style="font-size: 14pt">Explaination:</font></font></font></p>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">5^2
= 25 for k = 2. First digit is 2 in 25</font></font></font></p>
<p style="line-height: 0.17in; orphans: 2; widows: 2"><br/>
<br/>

</p>
<p><br/>
<br/>
<br/>

</p>
</body>
</html>
