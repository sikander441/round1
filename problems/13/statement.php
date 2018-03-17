<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-19T00:18:30.166092837"/>
	<meta name="created" content="2018-01-18T23:53:19.830334541">
	<meta name="changed" content="2018-01-19T00:00:53.568161249">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p align="justify" style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; orphans: 2; widows: 2; text-decoration: none">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt">Given
a array size of n, find the last k digits (1 &lt;= k &lt; 10) of
product of array numbers</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">The
	first line of the input contains two space seperated integers <i><b>n
	</b></i>and <i><b>k.</b></i></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">The
	next line contains <i><b>n</b></i> space seperated integers. </font></font></font>
	</p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">Print
the last <span style="text-decoration: none"><i><b>k</b></i></span><span style="text-decoration: none">
digits of product of the array numbers.</span></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;<i><b>n</b></i>&nbsp;<u>&lt;</u><span style="text-decoration: none">&nbsp;</span><span style="text-decoration: none">50</span><span style="text-decoration: none">.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;&nbsp;<b>k&nbsp;</b>≤ 10</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.24in; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt">1
	≤&nbsp;&nbsp;array element &nbsp;≤ 200</font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.4in; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.19in; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Input:</b></font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">6  2</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">22 31 44 27 37 43</font></font></font>
<font color="#6b6b6b"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Output:</b></font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">56</font></font></font></pre><p>
<br/>
<br/>
<br/>

</p>
<p style="margin-bottom: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 0.15in; orphans: 2; widows: 2">
<font color="#333333"><font face="FreeMono, monospace"><font size="3" style="font-size: 12pt"><b>Explaination:</b></font></font></font></p>
<pre class="western" style="margin-bottom: 0.1in; border: 1px solid #ededed; padding: 0.1in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 0.2in; orphans: 2; widows: 2; background: #e0e0e0"><font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">22*31*44*27*37*43=1289053656</font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">The last <i><b>k( </b></i><i>i.e. 2</i><i><b>) </b></i> digits of the product is <b>56</b></font></font></font></pre><p align="justify" style="margin-bottom: 0in; line-height: 100%; orphans: 2; widows: 2">
<br/>

</p>
</body>
</html>
