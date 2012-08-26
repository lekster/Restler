<?php
return <<<TEMPLATE
p,article.ul,article.ol {
	font-size: 16px;
	line-height: 24px;
	max-width: 540px;
}

footer {
	margin-left: 120px;
	padding: 0;
	text-align: right;
	max-width: 640px;
}

footer img{
	vertical-align: text-bottom;
}

footer a, footer a:hover{
	background: none;
}

article {
	background: white;
	position: relative;
	padding: 25px 50px;
	min-width: 380px;
	max-width: 550px;
	/*
	margin: 50px 0;
	padding: 25px 210px 0 30px;
	*/
	margin-top: 50px;
	margin-left: 120px;
	margin-bottom: 10px;
	margin-right: 180px;
	min-height: 600px;
	background-repeat: no-repeat;
	background-position: top right;
	-moz-box-shadow: 5px 5px 5px #ccc;
	-webkit-box-shadow: 5px 5px 5px #ccc;
	box-shadow: 5px 5px 5px #ccc;
}

article:after {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 0;
	height: 0;
	border-top: 10px solid #E6E2DF;
	border-left: 10px solid #E6E2DF;
	border-bottom: 10px solid #d9d3cf;
	border-right: 10px solid #d9d3cf;
}

article pre {
	padding: 13px;
	background: #f3f3f3;
	border-style: dashed;
	border-color: #DADADA;
	border-width: 1px;
	/* max-width: 600 px; */
	overflow: auto;
}
code {
	font-family: Consolas, Monaco, Andale Mono, monospace;
	background: #ffffdd;
	font-size: 15px;
}

pre code {
	line-height: 1.5;
	background-color: transparent;
	font-size: 13px;
}

abbr {
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	background: blue;
	opacity: 0.3;
	color: white;
	padding: 4px;
	cursor: help;
}

abbr:HOVER {
	opacity: 0.6;
	background: black;
}

a abbr,a abbr:HOVER {
	background: inherit;
	color: inherit;
	opacity: inherit;
	border: inherit;
	cursor: inherit;
	padding: inherit;
}

aside {
	display: block;
	float: right;
	width: 390px;
}

blockquote {
	margin: 1em 2em;
	max-width: 476px;
	background: #ECEDE5;
	border-left: 10px solid #ccc;
	padding: .5em 10px;
}

blockquote p {
	color: #666;
	/* max-width: 460px; */
	margin: 0;
}

hr {
	width: 540px;
	text-align: left;
	margin: 0 auto 0 0;
	color: #999;
}

dl {
	margin: 2em 0;
	padding: 0;
	/* max-width: 476px; */
}

dt { 
	font-family: Fixed, monospace;
	padding: .5em;
	border: 1px solid #131210;
	border-right: 1px solid #131210;
	border-top: 1px solid #131210;
	padding: .5em;
}

dd {
	margin: 0 0 1em 0;
	padding: .5em;
	border-left: 1px solid #131210;
	border-right: 1px solid #131210;
	border-bottom: 1px solid #131210;
}

dd pre {
	border: none;
	padding: 0;
	background-color: transparent;
}

ol.toc li {
	clear: left;
	border-bottom: dashed 1px #aaa;
	height: 1.05em;
	margin-top: 20px;
	position: relative;
	margin-top: 20px;
	height: 1.05em;
}

ol.toc li:HOVER {
	color: #0099ff;
	border-bottom: dashed 1px #0099ff;
}

ol.toc li:HOVER small {
	color: #7FCCFF;
}

ol.toc a {
	text-decoration: none;
	color: inherit;
}

ol.toc .right,ol.toc span {
	background: #fff;
	padding: 0 3px 0 0;
	float: left;
	position: absolute;
	text-decoration: none;
}

div.right {
	float:right;
}
ol.toc .right {
	padding: 0 0 0 3px;
	right: 0;
}

ol.toc a:HOVER {
	
}

ol.toc ol {
	list-style: lower-roman;
	margin: 1.5em 0 1em 5%;
	padding: 0;
	background: #fff;
	float: left;
	display: block;
	width: 95%;
}

ol.toc small {
	color: #a999a9;
}
/**
 * Right side
 */
#right {
	top: 42px;
	right: 32px;
	width: 160px;
	position: fixed;
}

#right h3 a {
	/*font: normal 20px Helvetica, Verdana, Tahoma;*/
	overflow: hidden;
	background-color:#cfc4ba;
	color: white;
	display: block;
	padding: 8px 20px;
	width: 160px;
	border-color:#BF9573;
	border-width:1px;
	border-style: dotted;
	outline: 1px rgba(0, 0, 0, .1) dashed;
	outline-offset: -6px;

	/* Firefox v1.0+ */
	-moz-border-radius:10px 0px 0px 10px;
	/* Safari v3.0+ and by Chrome v0.2+ */
	-webkit-border-radius:10px 0px 0px 10px;
	/* Firefox v4.0+ , Safari v5.0+ , Chrome v4.0+ , Opera v10.5+  and by IE v9.0+ */
	border-radius:10px 0px 0px 10px;
	
	/* Firefox v3.5+ */
	-moz-box-shadow:inset 0px 0px 4px 3px rgba(0,0,0,0.07);
	/* Safari v3.0+ and by Chrome v0.2+ */
	-webkit-box-shadow:inset 0px 0px 4px 3px rgba(0,0,0,0.07);
	/* Firefox v4.0+ , Safari v5.1+ , Chrome v10.0+  and by Opera v10.5+ */
	box-shadow:inset 0px 0px 4px 3px rgba(0,0,0,0.07);
		
}
#right h3 a:HOVER {
	background-color: #BAAB9C;
}
/**
 * Left side
 */
#left {
	position: fixed;
	top: 32px;
	bottom: 0;
	left: 0;
	height: auto;
	width: 136px;
	margin: 0;
	padding: 7px 0 7px 7px;
	overflow: auto;
	background: black;
	line-height: 1.6;
}

#left img {
	margin-bottom: 0px;
	padding-top: 0px;
	padding-left: 0px;
}

#left h3 {
	color: white;
	border-bottom: 1px solid #aaaaaa;
	border-top: 1px solid #aaaaaa;
}

#left a {
	color: #bbccff;
	display: block;
	padding: 0 5px 0 5px;
}

#left a:hover {
	color: white;
}

#left ul {
	list-style: none;
	padding: 0 0 0 0px;
	margin: 0;
	color: white;
}

#left li {
	white-space: nowrap;
}

#left ul ul {
	padding-left: 10px;
}

#left a.active {
	color: black;
	background: #E6E2DF;
	border-left: 4px solid #AA0000;
}

ul.tags{
	margin: 0 auto;
    padding: 0;
}

ul.tags li {
    text-align: left;
    float: left;
    list-style: none;
    padding: 2px;
}

.collapsed {
	display: none;
}

nav.floating-menu {
	height: 32px;
	top: 0;
	left: 0;
	padding: 0;
	margin: 0;
	position: fixed;
	background: #000000;
	border: 0;
	width: 100%;
	z-index: 100;
	overflow: hidden;
	/*
	background: -moz-linear-gradient(bottom, #aaa, #000 50%);
	background: -webkit-gradient(linear, center bottom, center top, from(#aaa),
		color-stop(50%, #000) );
	*/
	-moz-box-shadow: 0 0 10px #000000;
	-webkit-box-shadow: 0 0 10px #000000;
	box-shadow: 0 0 10px #000000;
}

nav.floating-menu ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
}

nav.floating-menu li {
	float: left;
}

nav.floating-menu a:link,
nav.floating-menu  a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	/*display: block;
	width: 120px; */
	color: #cccccc;
	text-align: center;
	padding: 4px 20px 20px 20px;
	text-decoration: none;
	text-transform: none;
	/*
	border-left: 1px solid #222;
	border-right: 1px solid #bbb;
	*/
}

nav.floating-menu a:hover,
nav.floating-menu  a:active,
nav.floating-menu  a.active {
	color: white;
	background: #333;
	/*
	border-top: 3px solid #aa0000;
	background-color: #ddd;
	background: -moz-linear-gradient(bottom, #ddd, #aaa 50%);
	background: -webkit-gradient(linear, center bottom, center top, from(#ddd),
		color-stop(50%, #aaa) );
	-moz-box-shadow: 0 0 10px #000000;
	*/
}

nav.floating-menu  a.active {
	border-top: 3px solid #aa0000;
}

tag {
	font-family: 'Helvetica Neue', sans-serif;
	background-color: #0099ff;
    padding: 1px 3px 2px;
    font-size: 10px;
    font-weight: bold;
    color: #ffffff;
    text-transform: uppercase;
    white-space: nowrap;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

li tag{
	background-color: #72828C;
	cursor: help;
}
li tag:Hover{
	background-color: #0099ff;
}

badge {
	font-family: 'Helvetica Neue', sans-serif;
	padding: 1px 5px 2px;
	font-size: 10px;
	font-weight: bold;
	white-space: nowrap;
	color: #ffffff;
	background-color: #b94a48;
	-webkit-border-radius: 9px;
	-moz-border-radius: 9px;
	border-radius: 9px;
	position:relative;
	right:4px;
	top:-6px;
}
/*
badge {
	background: radial-gradient( center -9px, circle closest-side, white 0, red 26px );
	background: -moz-radial-gradient( center -9px, circle closest-side, white 0, red 26px );
	background: -ms-radial-gradient( center -9px, circle closest-side, white 0, red 26px );
	background: -o-radial-gradient( center -9px, circle closest-side, white 0, red 26px );
	background: -webkit-radial-gradient( center -9px, circle closest-side, white 0, red 26px );
	background-color: red;
	border: 2px solid white;
	border-radius: 12px; /* must be 1/2 of ( border-width*2 + width ) *//*
	box-shadow: 1px 1px 1px black;
	color: white;
	font: bold 17px/15px Helvetica, Verdana, Tahoma;
	height: 18px; /* height + padding-top must equal width *//*
	padding-top: 2px; /* height + padding-top must equal width *//*
	text-align: center;
	width: 20px;
}
*/

.popover {
	font-family: Georgia, Palatino, serif;
	font-size: 13px;
}

.popover-title {
	margin: 0;
}

.popover-content, .popover-content p {
	margin: 0;
}

.popover-content a {
	display : block;
	padding: 0px 5px 0px 5px;
}

requires {
	margin:0;
	right:24px;
	bottom:-12px;
	margin-left:20px;
	padding:0 10px 0 12px;
	background:#767AAE;
	color:#fff;
	text-decoration:none;
	-moz-border-radius-bottomright:4px;
	-webkit-border-bottom-right-radius:4px;
	border-bottom-right-radius:4px;
	-moz-border-radius-topright:4px;
	-webkit-border-top-right-radius:4px;
	border-top-right-radius:4px;
	float:right;
	height:24px;
	line-height:24px;
	position:relative;
	font-size:11px;
}

requires:before{
	content:"";
	float:left;
	position:absolute;
	top:0;
	left:-12px;
	width:0;
	height:0;
	border-color:transparent #767AAE transparent transparent;
	border-style:solid;
	border-width:12px 12px 12px 0;
}

requires:after{
	content:"";
	position:absolute;
	top:10px;
	left:0;
	float:left;
	width:4px;
	height:4px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	background:#fff;
	-moz-box-shadow:-1px -1px 2px #004977;
	-webkit-box-shadow:-1px -1px 2px #004977;
	box-shadow:-1px -1px 2px #004977;
}

TEMPLATE;
