<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-18T19:44:25.676272523"/>
	<meta name="created" content="00:00:00">
	<meta name="changed" content="2018-01-18T00:36:18.425699953">
	<meta name="created" content="2018-01-18T00:28:37.079343428">
	<meta name="changed" content="2018-01-18T00:31:44.584234866">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
		code.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt">Given
an array of <b>N</b> integers, can you find the sum of its elements?</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Constraints</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>1&lt;=N&lt;=100</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>*integers
not greater than 1000</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<br/>

</p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Input
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame1"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">The
first line contains an integer,<b>N</b>, denoting the size of the
array.&nbsp;<br/>
The second line contains <b>N </b>space-separated
integers representing the array's elements.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Output
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Print
the sum of the array's elements as a single integer.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Input</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">6</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">1 2 3 4 10 11</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Output</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="margin-bottom: 0.2in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">31</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Explanation</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame2"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">We
print the sum of the array's elements, which is: 1 + 2 + 3 + 4 + 10 +
11 = 31.</span></font></font></font></p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
</body>
</html>
