<!DOCTYPE html>
<html>

<head>
    <title>Flaticon WebFont</title>
    <link rel="stylesheet" type="text/css" href="flaticon.css">
    <meta charset="UTF-8">
    <style>
    body {
        font-family: sans-serif;
        line-height: 1.5;
        font-size: 16px;
        padding: 20px;
        color:#333;
    }
    * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    [class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after {
        font-family: Flaticon;
        font-size: 30px;
        font-style: normal;
        margin-left: 20px;
        color: #333;
    }
    .image p {
		font-size: 12px;
		margin: 0px;
		clear: none;
		width: 300px;
		line-height: 40px;
	}
    .text {
        float: left;
        font-size:14px;
        margin-top: 15px;
    }
    .text ul {
        margin-left:0px;
        color:#111;
        margin-bottom:20px;
    }
    .text .ex {
        font-size:12px;
        color:#666;
        margin-left:35px;
        display:block;
    }
    .text ul li {
        margin-top:10px;
        list-style:none;
    }
    .num {
        background:#66A523;
        color:#fff;
        border-radius:20px;
        padding:1px;
        display:inline-block;
        width:22px;
        height:22px;
        text-align:center;
        margin-right: 5px;
    }
    .text ul strong {
        font-weight:normal;
        color:#000;
    }
    .image {
        width: 280px;
        float: left;
        margin-bottom: 15px;
        margin-right: 30px;
    }
    #glyphs {
        clear: both;
    }
    .image p:nth-child(even) i {
        clear: none;
    }
    .glyph {
        display: inline-block;
        width: 120px;
        margin: 10px;
        text-align: center;
        vertical-align: top;
        background: #FFF;
    }
    .glyph .glyph-icon {
        padding: 10px;
        display: block;
        font-family:"Flaticon";
        font-size: 64px;
        line-height: 1;
    }
    .glyph .glyph-icon:before {
        font-size: 64px;
        color: #666;
        margin-left: 0;
    }
    .class-name {
        font-size: 12px;
    }
    .author-name {
		font-size: 10px;
	}
	a{
		color: #66A523;
	}
    .instructions {
        font-style:italic;
        font-size:22px;
        margin-bottom:10px;
    }
    .iconsuse {
        font-size:22px;
        font-style:italic;
        padding-top:20px;
        margin-top:20px;
        border-top:1px solid #bbb;
    }
    .usetitle {
        margin-bottom: 10px;
        font-size: 20px;
        font-style: italic;
    }
    .class-name:last-child {
        font-size: 10px;
        color:#888;
    }
    .class-name:last-child a {
        font-size: 10px;
        color:#555;
    }
    .class-name:last-child a:hover {
        color:#66A523;
    }
    .glyph > input {
        display: block;
        width: 100px;
        margin: 5px auto;
        text-align: center;
        font-size: 12px;
        cursor: text;
    }
    .glyph > input.icon-input {
        font-family:"Flaticon";
        font-size: 16px;
        margin-bottom: 10px;
    }
    h1.logo {
        font-size: 40px;
        letter-spacing: -1px;
        margin-top: -16px;
        text-transform: lowercase;
        border-bottom:1px solid #bbb;
    }
    h1.logo strong {
        font-size: 16px;
        font-family:sans-serif;
        font-weight:normal;
        color:#333;
    }
    h1.logo a {
        color:#34302d;
        text-decoration: none;
    }
    h1.logo a span {
        color:#66A523;
    }
    #footer {
        padding-top:40px;
        clear:both;
        text-align:center;
    }
    #footer a {
        color:#66A523;
    }
    textarea {
		margin: 0px;
		width: 800px;
		height: 150px;
		border: 1px solid #CCC;
		resize: none;
		background: #EEE;
    }
    .author-link, .attrDiv a{
    	font-size: 12px;
    	color: #333;
    	text-decoration: none;
    }
    .external {
    	display: block;
    }
    .attrDiv {
		font-size: 12px;
	}
    .attribution {
        border-top: 1px solid #AAA;
        margin: 10px 0;
        padding-top: 15px;
    }

    <?php 
    for ($i=0; $i<255; $i++) { ?>
        .flaticon-<?=$i?>:before {
            content: "\e0<?=dechex($i)?>";
        }
    <?php
    }
    ?>

    </style>
</head>

<body>
    <header>
        <h1 class="logo">
            <a href="http://www.flaticon.com">
                <span>FLAT</span>ICON</a>
            <strong>Font Demo</strong>
        </h1>
    </header>

    <section id="glyphs"><div class="glyph">

    <?php for ($i=0; $i<255; $i++) { ?>

        <div style="display:inline-block;">
        <div class="glyph-icon flaticon-<?=$i?>"></div>
		<div class="class-name">.flaticon-<?=$i?></div>
        </div>
    <?php } ?>

    </div></section>        

	</body>
</html>