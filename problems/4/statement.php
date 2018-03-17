<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-18T19:46:31.775395074"/>
	<meta name="created" content="2018-01-18T01:09:58.030458558">
	<meta name="changed" content="2018-01-18T01:16:08.372442198">
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font color="#39424e"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt">You
are in-charge of the cake for your niece's birthday and have decided
the cake will have one candle for each year of her total age. When
she blows out the candles, she’ll only be able to blow out the
tallest ones.</span></font></font></font></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame"></a><a name="MathJax-Element-3-Frame"></a><a name="MathJax-Element-4-Frame"></a><a name="MathJax-Element-5-Frame"></a><a name="MathJax-Element-6-Frame"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">For
example, if your niece is turning 4 years old, and the cake will have
4 candles of height 3, 2, 1, 3, she will be able to blow out 2
candles successfully, since the tallest candle is of height 3 and
there are 2 such candles.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">take
your niece's age and an integer array containing height of each
candle as input, and return the number of candles she can
successfully blow out.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Input
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame1"></a><a name="MathJax-Element-4-Frame1"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">The
first line contains a single integer, n, denoting the number of
candles on the cake.<br/>
The second line contains n space-separated
integers, where each integer i describes the height of candle i .</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Constraints</span></b></span></span></font></font></font></span></strong></p>
<ul>
	<li/>
<p style="margin-top: 0.1in; margin-bottom: 0.21in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame2"></a><a name="MathJax-Element-2-Frame2"></a>
	<font size="4" style="font-size: 14pt">1<span style="text-decoration: none">
	</span><u>&lt;</u><span style="text-decoration: none"> n </span><u>&lt;</u><span style="text-decoration: none">
	10</span><span style="text-decoration: none"><sup>5</sup></span></font></p>
	<li/>
<p style="margin-top: 0.1in; margin-bottom: 0.21in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
	<font size="4" style="font-size: 14pt"><span style="text-decoration: none">1
	</span><u>&lt;</u><span style="text-decoration: none"> height</span><span style="text-decoration: none"><sub>
	</sub></span><span style="text-decoration: none">of i</span><span style="text-decoration: none"><sub>th</sub></span><span style="text-decoration: none">
	candle </span><u>&lt;</u><span style="text-decoration: none"> 10</span><span style="text-decoration: none"><sup>7</sup></span></font></p>
</ul>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Output
Format</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">Print
the number of candles the can be blown out on a new line.</span></font></font></font></p>
<p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Input 0</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="2" style="font-size: 10pt"><font color="#000000">4</span></font></font></font>
<span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="2" style="font-size: 10pt"><font color="#000000">3 2 1 3</span></font></font></font></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Sample
Output 0</span></b></span></span></font></font></font></span></strong></p>
<pre class="western" style="margin-bottom: 0.2in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2; background: #f4faff"><span style="display: inline-block; border: none; padding: 0in"><font face="inherit"><font size="2" style="font-size: 10pt"><font color="#000000">2</span></font></font></font></pre><p style="margin-bottom: 0in; border: none; padding: 0in; line-height: 150%; orphans: 2; widows: 2">
<span style="display: inline-block; border: none; padding: 0in"><span style="font-variant: normal"><font color="#39424e"><font face="inherit"><font size="3" style="font-size: 12pt"><span style="letter-spacing: normal"><span style="font-style: normal"><b><strong>Explanation
0</span></b></span></span></font></font></font></span></strong></p>
<p style="margin-top: 0.13in; margin-bottom: 0.13in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2"><a name="MathJax-Element-1-Frame3"></a><a name="MathJax-Element-2-Frame3"></a><a name="MathJax-Element-3-Frame2"></a><a name="MathJax-Element-4-Frame2"></a>
<span style="display: inline-block; border: none; padding: 0in"><font face="Whitney SSm A, Whitney SSm B, Avenir, Segoe UI, Ubuntu, Helvetica Neue, Helvetica, Arial, sans-serif"><font size="3" style="font-size: 12pt"><font color="#39424e">We
have one candle of height 1, one candle of height 2, and two candles
of height 3. Your niece only blows out the tallest candles, meaning
the candles where height=3. Because there are 2 such candles, we
print 2 on a new line.</span></font></font></font></p>
<p style="margin-bottom: 0in; line-height: 150%"><br/>

</p>
</body>
</html>
