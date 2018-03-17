<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="2018-01-18T19:12:15.012328219"/>
	<meta name="changed" content="2018-01-18T19:14:51.825050826"/>
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
		code.cjk { font-family: "DejaVu Sans Mono", monospace }
		a:link { so-language: zxx }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Given
a square matrix of size N * N, calculate the absolute difference
between the sums of its diagonals.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Input
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame1"></a><a name="MathJax-Element-3-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">The
first line contains a single integer, N . The next N lines denote the
matrix's rows, with each line containing N space-separated integers
describing the columns.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Constraints</span></b></span></span></font></font></font></span></strong></p>
<ul>
	<li/>
<p style="margin-top: 0.1in; margin-bottom: 0.21in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame2"></a>
	 -100 <u>&lt;</u><span style="text-decoration: none"> Elements in
	the matrix </span><u>&lt;</u><span style="text-decoration: none">
	100</span></p>
</ul>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Output
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Print
the absolute difference between the two sums of the matrix's
diagonals as a single integer.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Input</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">3</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">11 2 4</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">4 5 6</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">10 8 -12</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Output</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">15</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Explanation</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">The
primary diagonal is:</span></font></font></font></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">11</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">   </span></span></font></span></code><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">5</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">     </span></span></font></span></code><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">-12</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Sum
across the primary diagonal: 11 + 5 - 12 = 4</span></font></font></font></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">The
secondary diagonal is:</span></font></font></font></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">     </span></span></font></span></code><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">4</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">   </span></span></font></span></code><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">5</span></span></span></span></span></font></font></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">10</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Sum
across the secondary diagonal: 4 + 5 + 10 = 19&nbsp;<br/>
Difference:
|4 - 19| = 15</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Note:</b></span></span></font></font></font></span></strong><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">&nbsp;|x|
is&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#4691f6"><span style="text-decoration: none"><font face="Whitney SSm A, Whitney SSm B, AvenirNext-Regular, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal">absolute
value</span></span></span></font></font></span></font></span><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">&nbsp;function</span></span></span></span></font></font></font></span></p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
</body>
</html>
