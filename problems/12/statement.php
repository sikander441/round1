<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="2018-01-18T23:24:13.153425763"/>
	<meta name="changed" content="2018-01-18T23:34:59.482112328"/>
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-bottom: 0.1in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.17in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><font color="#000000">Given
two number l and r. Count the total numbers between l and r which
when subtracted from their respective reverse, the difference is a
product of k</font><font color="#000000"><span style="text-decoration: none">.</span></font></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">The
	only line of the input contains three space seperated integers
	<i><b>l,r,k.</b></i> </font></font></font>
	</p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">Print
the count of such numbers as described in the question</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;<b>l</b>&nbsp;≤ <b>r </b><u>&lt;</u><span style="text-decoration: none">
	2000.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;<b> </b><b>k </b>≤ 30</font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 142%; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input:</b></font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">35 45 5</font></font></font>

<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output:</b></font></font></font>

<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">2</font></font></font>
</pre><p style="margin-bottom: 0in; line-height: 100%">
<font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Explaination:</b></font></font></p>
<p style="margin-bottom: 0in; line-height: 100%">
</p>
<pre class="western" style="margin-bottom: 0.1in; border: 1px solid #ededed; padding: 0.1in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 151%; text-align: justify; orphans: 2; widows: 2; background: #e0e0e0"><font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">38 and 44 are the two numbers.</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">|38-83| = 45 which is a product of 5</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">|44-44| = 0 which is a product of 5</font></font></font></pre>
<br/>

</p>
<p style="margin-bottom: 0in; line-height: 100%"><br/>

</p>
</body>
</html>
