<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-18T19:45:56.081732003"/>
	<meta name="created" content="2018-01-18T00:53:25.407805196">
	<meta name="changed" content="2018-01-18T00:58:09.125823196">
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
five positive integers, find the minimum and maximum values that can
be calculated by summing exactly four of the five integers. Then
print the respective minimum and maximum values as a single line of
two space-separated long integers.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Input
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">A
single line of five space-separated integers.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Constraints</span></b></span></span></font></font></font></span></strong></p>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">Each
	integer is in the inclusive range [1,10<sup>9</sup>].</span></font></font></font></p>
</ul>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Output
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">Print
two space-separated long integers denoting the respective minimum and
maximum values that can be calculated by summing exactly&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><i><span style="font-weight: normal"><em>four</span></i></span></font></font></font></span></em><font color="#39424e"><span style="letter-spacing: normal"><span style="font-variant: normal">&nbsp;</span></font></span><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">of
the five integers. (The output can be greater than 32 bit integer.)</span></span></span></span></font></font></font></span></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Input</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="margin-bottom: 0.2in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">1 2 3 4 5</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Output</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="margin-bottom: 0.2in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">10 14</span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; line-height: 150%">
<br/>

</p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Explanation</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame1"></a><a name="MathJax-Element-2-Frame"></a><a name="MathJax-Element-3-Frame"></a><a name="MathJax-Element-4-Frame"></a><a name="MathJax-Element-5-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Our
initial numbers are 1, 2, 3, 4, and 5. We can calculate the following
sums using four of the five integers:</span></font></font></font></p>
<ol>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-6-Frame"></a><a name="MathJax-Element-7-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">If
	we sum everything except 1, our sum is 2+3+4+5=14.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-8-Frame"></a><a name="MathJax-Element-9-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">If
	we sum everything except 2, our sum is 1+3+4+5=13.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-11-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">If
	we sum everything except 3, our sum is 1+2+4+5=12.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-12-Frame"></a><a name="MathJax-Element-13-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">If
	we sum everything except 4, our sum is 1+2+3+5=11.</span></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-14-Frame"></a><a name="MathJax-Element-15-Frame"></a>
	<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="3" style="font-size: 12pt"><font color="#39424e">If
	we sum everything except 5, our sum is 1+2+3+4=10.</span></font></font></font></p>
</ol>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-16-Frame"></a><a name="MathJax-Element-17-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">As
you can see, the minimal sum is 1+2+3+4=10 and the maximal sum is
2+3+4+5=14. Thus, we print these minimal and maximal sums as two
space-separated integers on a new line.</span></font></font></font></p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
<p style="margin-bottom: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Hints:</span></b></span></span></font></font></font></span></strong><span style="font-variant: normal"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal">Beware
of integer overflow! Use 64-bit Integer.</span></span></span></font></font></font></span></p>
</body>
</html>
