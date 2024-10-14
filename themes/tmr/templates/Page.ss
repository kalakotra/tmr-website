<!DOCTYPE html>
<!--
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Silverstripe Theme Starter by www.kalakotra.com
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
-->

<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0">
	$MetaTags(false)
	
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#173072">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#173072">

	<meta property="og:image" content="/og-image.jpg">
	<meta property="og:image:width" content="303">
	<meta property="og:image:height" content="454">
	<meta property="og:description" content="Ihr kompetenter Handelspartner im europaweiten Handel mit NE-Sekund&auml;rrohstoffen (Nicht-Eisenmetallen) mit Schwerpunkt Aluminium">
	<meta property="og:title" content="TMR Recycling">
	<meta property="og:type" content="website">
	<meta property="og:url" content="$BaseHref">
	
</head>
<body class="$ClassName.ShortName" <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>
<% include Header %>
<% if ClassName=HomePage %>
	<% include Slider CarouselLoop=$Slide, CarouselID='HomeSlider', CarouselCustomClass='HomeSlider', CarouselWidth='1920', CarouselHeight='920' %>
<% end_if %>
$Layout
<% include Footer %>

</body>
</html>