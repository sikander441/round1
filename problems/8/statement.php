<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-18T20:14:49.879664810"/>
	<meta name="created" content="00:00:00">
	<meta name="changed" content="2018-01-18T20:14:01.664777224">
	<meta name="created" content="2018-01-18T20:05:29.889363104">
	<meta name="changed" content="2018-01-18T20:10:55.986629714">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
		a:link { so-language: zxx }
		code.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt">Consider
a staircase of size n=4:</span></font></font></font></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">   </code><code class="western">#</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">  </code><code class="western">##</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western"> </code><code class="western">###</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">####</span></span></span></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<a name="MathJax-Element-2-Frame"></a><span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">Observe
that its base and height are both equal to n, and the image is drawn
using&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: #f8f8f8"><code class="western">#</span></span></span></span></font></font></font></span></code><font color="#39424e"><span style="letter-spacing: normal"><span style="font-variant: normal">&nbsp;</span></font></span><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">symbols
and spaces.&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><i><span style="font-weight: normal"><em>The
last line is not preceded by any spaces.</span></span></i></span></font></font></font></span></em></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-3-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Write
a program that prints a staircase of size n.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Input
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame1"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">A
single integer, n, denoting the size of the staircase.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Output
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">Print
a staircase of size n using&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: #f8f8f8"><code class="western">#</span></span></span></span></font></font></font></span></code><font color="#39424e"><span style="letter-spacing: normal"><span style="font-variant: normal">&nbsp;</span></font></span><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">symbols
and spaces.</span></span></span></span></font></font></font></span></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Note</b></span></span></font></font></font></span></strong><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">:
The last line must have 0 spaces in it.</span></span></span></span></font></font></font></span></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Input</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="margin-bottom: 0.2in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: transparent"><code class="western">6 </span></span></span></span></span></font></font></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Output</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">     </code><code class="western">#</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">    </code><code class="western">##</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">   </code><code class="western">###</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">  </code><code class="western">####</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western"> </code><code class="western">#####</span></span></span></font></span></code>
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#454c5f"><span style="letter-spacing: normal"><span style="background: transparent"><code class="western">######</span></span></span></font></span></code></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Explanation</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame3"></a>
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">The
staircase is right-aligned, composed of&nbsp;</span></span></span></font></font></font></span><span style="font-variant: normal"><font color="#454c5f"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: #f8f8f8"><code class="western">#</span></span></span></span></font></font></font></span></code><font color="#39424e"><span style="letter-spacing: normal"><span style="font-variant: normal">&nbsp;</span></font></span><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><span style="font-weight: normal"><span style="font-variant: normal">symbols
and spaces, and has a height and width of n=6.</span></span></span></span></font></font></font></span></p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
</body>
</html>
