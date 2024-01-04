<style>
    /*
 * Theme Name: Basic
 * Description: Basic is fully responsive, clean and minimal WordPress theme. It has various options in WordPress Customizer to change look of the theme - primary design color, background and header, page layout (left or right sidebar, full or centered content). Clean valid code, semantic markup, markup by Schema.org, full adaptation to mobile devices. Basic is ready to use with child themes and gives for developers simple design change with custom hooks and action. Translation Ready (English, Russian, Ukrainian, French, German, Polish, Turkish). Fully compatible with WPML, WooCommerce, bbPress.
 * Theme URI: http://wp-puzzle.com/basic/
 * Tested up to: 5.5
 * Requires PHP: 7.0
 * Author: WP Puzzle
 * Author URI: http://wp-puzzle.com/
 * Version: 1.3.12
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Tags: two-columns, one-column, left-sidebar, right-sidebar, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, sticky-post, threaded-comments, translation-ready, microformats
 * Text Domain: basic
 */



/* reset & 12 columns
 * ============================================================================ */ 
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,menu,nav,output,ruby,section,summary,time,mark,audio,video{padding:0;margin:0;font-size:100%;vertical-align:baseline;border:0}article,aside,details,figcaption,figure,footer,header,menu,nav,section{display:block}body{line-height:1}
ol,ul{list-style:none}a:focus{outline:0}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:''}table{border-collapse:collapse;border-spacing:0}img,object,embed,video{max-width:100%}
object,embed,video{width:100%}img{height:auto;vertical-align:middle;border:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;-ms-interpolation-mode:bicubic}svg:not(:root){overflow:hidden}
.clearfix:before,.clearfix:after{display:table;line-height:0;content:""}.clearfix:after{clear:both}
.grid{width:90%;margin-left:auto;margin-right:auto}.grid [class*=col]{width:100%;margin-left:0}
@media screen and (min-width:1024px) {.grid{width:100%}.grid [class*=col]{float:left}.grid:after,.grid:before,.grid .newrow:before{display:table;line-height:0;content:""}.grid:after,.grid .newrow,.grid .newrow:before{clear:both}.grid [class*=col]{margin-left:1.694915254%;margin-right:0}.grid .newrow,.grid [class*=col]:first-of-type{margin-left:0}
.grid .col1{width:6.779661017%}.grid .col2{width:15.25423729%}.grid .col3{width:23.72881356%}.grid .col4{width:32.20338983%}.grid .col5{width:40.6779661%}.grid .col6{width:49.15254237%}.grid .col7{width:57.62711864%}.grid .col8{width:66.10169492%}.grid .col9{width:74.57627119%}.grid .col10{width:83.05084746%}.grid .col11{width:91.52542373%}.grid .col12{width:100%}}
.fl{float:left}.fr{float:right}.b{font-weight:bold}.i{font-style:italic}.tl{text-align:left}
.tc{text-align:center}.tr{text-align:right}.pn{padding:0}.mn{margin:0}.hide{display:none}
/* ============================================================================ */


/* ============================================================================
 *		LAYOUT
 * ============================================================================ */
html { height: 100%; }
body { width: 100%; min-width: 280px; background: #fff; }
.wrapper { margin: 0 auto; }
#header { min-height: 100px; background-repeat: no-repeat; background-position: top center; background-size: cover; }
#main { padding: 60px 0; margin: 0 auto; position: relative; }
#content { width: 100%; float: none; }
#sidebar { display: none; }
#sidebar.block{ display: block;}
#footer { width: 100%; padding: 20px 0; margin: 0; background: #39c4cc; }
.maxwidth { margin: 0 auto; position: relative; width: 90%; max-width: 1080px; }
body.custom-background .wrapper { margin: 0 auto; background: #fff; max-width: 1160px; }

/* adaptive layout */
@media screen and (min-width: 1024px) {
	.header-image {margin: 0 auto; position: relative; width: 90%; max-width: 1080px;}
	#content { width: 67.12962962962963%; float: left; }
	#sidebar { width: 27.77777777777778%; margin-top: 0; float: right; display: block; }
	.layout-leftbar #sidebar { float: left; }
	.layout-leftbar #content { float: right; }
	.layout-full #sidebar { display: none; }
	.layout-full #content { float: none; width: 100%; }
	.layout-center #sidebar { display: none; }
	.layout-center #content { float: none; width: 70%; margin-left: auto; margin-right: auto; }
	.wrapper { width: 100%; }
}
/* ============================================================================ */




/* ============================================================================
 *		inline HTML TAGS
 * ============================================================================ */
body { font: 16px/1.4 'Open Sans', Tahoma, Verdana, Segoe, sans-serif; color: #222; word-wrap: break-word; }

a { color: #222; }
a:hover { color: #39c4cc; }

p { padding: 0 0 1em 0; }
p:last-child { padding-bottom: 0; }

h1, h2, h3, h4, h5, h6, .wtitle, .title { 
	margin: 0;
	padding: 0 0 0.5em;
	line-height: 1.1;
	font-family: 'PT Serif', TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
	font-weight: bold;
}
h1 { font-size: 36px; padding: 0; }
h2 { font-size: 30px; }
h3 { font-size: 24px; }
h4 { font-size: 20px; }
h5, h6 { font-size: 18px; }
@media screen and (min-width: 768px){
	h1 { font-size: 36px; padding: 0; }
	h2 { font-size: 30px; }
	h3 { font-size: 24px; }
	h4 { font-size: 20px; }
	h5, h6 { font-size: 18px; }
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { text-decoration: none; }

blockquote, q { 
	position: relative;
	padding: 30px 30px 30px 80px;
	margin: 10px 0 20px 30px;
	color: #444;
	font: normal 1em/1.2 'PT Serif', TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
	background: #EFEFEF;
	border-left: 3px solid #39c4cc;
	border-radius: 3px;
	display: block;
}
blockquote:after {
	content: '”';
	position: absolute;
	top: 10px;
	left: 20px;
	font-size: 4em;
	line-height: 1;
}

table th { background: #ddd; border-right: 1px solid #fff; padding: 10px 20px; }
table tr th:last-child { border-right: 1px solid #ddd; }
table td { padding: 5px 20px; border: 1px solid #ddd; }

pre { background: #f5f5f5; border: 1px solid #ddd; padding: 10px; text-shadow: 1px 1px rgba(255, 255, 255, 0.4); font-size: 12px; line-height: 1.25; margin: 0 0 1em 0; overflow:auto }
sup, sub { font-size: 75%; height: 0; line-height: 0; position: relative; vertical-align: baseline }
sup { bottom: 1ex }
sub { top: .5ex }
small { font-size: 75% }
big { font-size: 125% }



/* ============================================================================
 *		FORM HTML TAG
 * ============================================================================ */
input, textarea, select, button {
	padding: 10px 10px 10px 0;
	border-color: #ddd;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	font: 300 16px/1.25 'Open Sans', Tahoma, Verdana, Segoe, sans-serif;
	color: #222;
}
textarea { 
	min-height: 90px; 
	max-width: 100%; 
	box-sizing: border-box;
}
textarea,
select,
input[type=text], 
input[type=password], 
input[type=email], 
input[type=url], 
input[type=tel], 
input[type=date], 
input[type=datetime], 
input[type=datetime-local], 
input[type=time],
input[type=month], 
input[type=week], 
input[type=number], 
input[type=search] { 
	padding: 9px 10px;
	border-width: 1px; 
	border-style: solid;
	min-height: 20px;
	/*height: 20px; */
}
input[type=search] { 
	height: 40px;
}
input[type=color] { 
	padding: 0; 
	border: 0; 
	background: #fff;
}
input:focus, textarea:focus, select:focus {
	outline: none; 
	border-color: #39c4cc; 
	-webkit-box-shadow: inset 0 0 8px rgba(0,0,0,0.08); 
	box-shadow: inset 0 0 8px rgba(0,0,0,0.08); 
}
input[type=submit], 
input[type=button],
button, .submit, .button {
	padding: 10px 20px;
	min-height: 20px;
	/*height: 40px;*/
	line-height: 20px;
	border: 0;
	background-color: #39c4cc;
	color: #fff;
	cursor: pointer;
}
input[type=submit]:hover, 
input[type=button]:hover,
button:hover,
.submit:hover,
.button:hover {
	opacity: 0.9;
}
/* ============================================================================ */



/* ============================================================================
 *		HEADER
 * ============================================================================ */
.sitetitle { text-align: center; }
.logo { margin: 0 auto; padding: 30px 0; }
#logo {
	display: block; margin: 0; padding: 0; color: #39c4cc; text-decoration: none;
	font: bold 26px/0.83 'PT Serif', Tahoma, Verdana, Segoe, sans-serif; letter-spacing: -0.02em;
}
#logo:hover { opacity: 0.9; }
.sitedescription {/*text-align: center;*/padding-top: 10px;}
.sitetitle.center .custom-logo { margin-left: auto;margin-right: auto; }
.sitetitle.right .custom-logo { margin-left: auto;margin-right: 0; }
.custom-logo-top { display: block; margin-bottom: 20px;}
.custom-logo-bottom { display: block; margin-top: 20px; }
.sitetitle .custom-logo-left { float: left; margin-right: 20px; }
.sitetitle .custom-logo-right { float: right; margin-left: 20px; }
.sitetitle.right .custom-logo-right, .sitetitle.left .custom-logo-right { margin-left: 20px; margin-right: 0; }
.sitetitle.left .custom-logo-left, .sitetitle.right .custom-logo-left { margin-left: 0; margin-right: 20px; }

@media screen and (min-width: 768px){
	#logo {font-size:60px;}
}

/* mobile navigation button */
#mobile-menu { display: block; padding: 15px 0; text-decoration: none; text-transform: uppercase; color: #fff;
	text-align: center; font-weight: 500; cursor: pointer; background: #39c4cc;/*#eee;*/ z-index: 999; position: relative; }
#mobile-menu:hover { opacity: 0.8; }


/* header navigation */
.topnav nav {display: none;z-index:9999;}
.top-menu { background: #39c4cc; position: absolute; z-index: 1000; width: 90%; left: 5%; }
.top-menu li { padding: 0; display: block; }
.top-menu li a, .top-menu li span {
	display: block; padding: 15px 20px; color: #fff; line-height: 20px;
	font-weight: 500; text-decoration: none; position: relative; cursor: pointer;
}
.top-menu li a:hover,
.top-menu li span:hover,
.top-menu li .sub-menu > li > a:hover,
.top-menu li .sub-menu > li > span:hover  {
	background-color: rgba(255,255,255,0.2);
}
.top-menu .current_page_item > a,
.top-menu .current_page_item > span,
.top-menu .current-menu-item > a,
.top-menu .current-menu-item > span {
	background-color: rgba(0, 0, 0, 0.22)
}
.top-menu .current-menu-item > a:hover,
.top-menu .current-menu-item > span:hover { color: #fff; }
.top-menu .sub-menu { margin: 0; }

@media screen and (min-width: 1024px) {
	.top-menu .open-submenu:after, .top-menu .open-submenu { display: none; }
}

@media screen and (max-width: 1023px) {
	.topnav { background: #39c4cc; }
	.top-menu { margin-top: 1px; box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.25); }
	.top-menu .sub-menu li a { padding: 10px 20px; }
	.top-menu .sub-menu { margin: 0 0 0 20px; font-size: 14px; }
	.top-menu li.menu-item-has-children { position: relative; }
	.top-menu li.menu-item-has-children > .open-submenu {
		width: 50px; height: 50px; position: absolute; top: 0; right: 0;
		background: rgba(255,255,255,0.3); box-sizing: border-box; font-size: 24px;
		line-height: 50px; padding: 0; text-align: center;
	}
	.top-menu a { border-bottom: 1px solid #ffffff1a; }
	.top-menu .sub-menu li.menu-item-has-children > .open-submenu { height: 40px; line-height: 40px; }
	.top-menu .sub-menu.closed { display: none; }
	.top-menu .submenu-opened .sub-menu.closed { display: none; }
	.top-menu .open-submenu:before { content: '+'; position: absolute; width: 100%; top: 0; left: 0; }
	.top-menu .submenu-opened > .open-submenu:before { content: '–'; }
}

/* ============================================================================ */



/* ============================================================================
 *		CONTENT
 * ============================================================================ */
.entry-box { margin: 30px 0 0; }
.entry-box .entry {	padding-bottom: 30px;}

.entry-box ul,
.entry-box ol { margin: 0.5em 0 1em 50px; }
.entry-box ul { list-style: outside url("img/li.svg"); }
.entry-box ol { list-style: decimal; }
.entry-box ul ul,
.entry-box ul ol,
.entry-box ol ol,
.entry-box ol ul { margin-top: 0; margin-bottom: 0; }
.entry-box li { padding-top: 5px; }
.entry-box ul li { padding-left: 5px; position: relative; }
.ftrwidget ul { list-style: outside url("img/li.svg"); }

.video-responsive { overflow: hidden; padding-bottom: 56.25%; position: relative; height: 0; margin-bottom: 1em;  }
.video-responsive iframe { left: 0; top: 0; height: 100%; width: 100%; position: absolute;  }

.comment-body ol, .comment-body ul { margin: 0.2em 0 0.5em 40px }
.comment-body ul {list-style-type: disc;}
.comment-body ol {margin-left: 40px;list-style-type: decimal;}

.entry h1, .entry h2, .entry h3, .entry h4, .entry h5, .entry h6,
.comment-body h2, .comment-body h3, .comment-body h4, .comment-body h5, .comment-body h6 {
	padding-top: 30px;
	padding-bottom: 10px;
}
.sticky{border:5px solid #eee;padding:30px;}

.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute!important;height:1px;width:1px;overflow:hidden;}
.screen-reader-text:focus{background-color:#f1f1f1;border-radius:3px;box-shadow:0 0 2px 2px rgba(0,0,0,0.6);
	clip:auto!important;color:#21759b;display:block;font-size:14px;font-size:0.875rem;font-weight:bold;height:auto;
	left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000;
}

.blog-home-header {margin-bottom: 50px;}

 
/* ANONS 
 * ----------------------------------------- */
.anons { margin-bottom: 60px;}
.anons h2 { font-size: 30px; padding-bottom: 0; }
.anons-thumbnail { display: none; }
.anons-thumbnail.show { display: block; }
.anons img { margin-bottom: 15px; margin-top: 5px; max-width: 100%; height: auto; }

.largeimage { margin: 0 0 1em; max-width: 100%; height: auto; }
.medium, .thumbnail { float: left; margin: 5px 1.5em 0.5em 0; }
.medium { max-width: 50%; height: auto; }
.thumbnail { max-width: 30%; height: auto; }

.more-link-box {text-align: right;}
.more-link { display: inline-block; padding: 10px 20px; background: #39c4cc; color: #fff; text-decoration: none; -webkit-border-radius: 5px; border-radius: 5px; -webkit-transition: opacity 0.2s; transition: opacity 0.2s; position: relative; }
.more-link:after { content: '➤'; float: right; margin-left: 10px; margin-right: -5px; }
.more-link:hover { opacity: 0.8; color: #fff; }

	
/* __________ post __________ */
.meta { margin: 10px 0 0; font-size: 12px; }
.meta span {  padding-right: 20px; }
.meta span.hide { display: none; }
.meta .fa { padding: 0 5px 0 0; }
.meta, .meta a { color: #999999; }
.meta a { text-decoration: none; }
.meta a:hover { text-decoration: underline; }


/* __________ archive __________ */
.inform { margin-bottom: 2em; border-bottom: 1px dotted #e2e2e2; }
.inform h1 { padding-bottom: 1em; }
.inform .archive-desc { padding: 0 0 2em 4em; }

/* __________ socialshare __________ */
.social_share { margin: 30px 0 0; padding: 30px 0 0; border-top: 1px solid #DDD; }
.social_share li, .social_share ul { margin: 0 !important; padding: 0 10px 0 0 !important; list-style: none; }
.social_share li:before { display: none; }
.psb { display: block; float: left; height: 40px; width: 40px; margin: 0 10px 0 0; background: url(img/socialshare.png) 0 0 no-repeat; transition: top 0.3s; position: relative; top: 0; }
.psb, .share42-item { transition: top 0.3s; position: relative; top: 0; }
.psb:hover, .share42-item:hover { position: relative; top: 3px; }
.fb { background-position: 0 0; }
.ok { background-position: -80px 0; }
.tw { background-position: -40px 0; }
.vk { background-position: -120px 0; }
.gp { background-position: -160px 0; }



/* __________ images __________*/
.entry iframe { max-width: 100%; }
.entry img { max-width: 100%; height: auto; margin-bottom: 10px; margin-top: 8px; }
.alignleft img {display: block;margin: 0 auto 0 0;}
.alignright img {display: block;margin: 0 0 0 auto;}
img.alignleft, .alignleft { float: left; margin-right: 20px; margin-left: 0; }
img.alignright, .alignright { float: right; margin-left: 20px; margin-right: 0; }
.aligncenter, div.aligncenter, img.centered { display: block; margin-left: auto; margin-right: auto; }
.entry .attachment, .entry .caption, .entry .gallery-caption { text-align: center; }
.entry .attachment .navigation { height: 150px; }
.wp-caption, .attachment img { text-align: center; max-width: 100%; }
.wp-caption img { margin-top: 0; margin-bottom: 0;}
.wp-caption-text, .wp-caption p.wp-caption-text { font-size: 12px; color: #222; margin: 0 0 15px; }
.entry .wp-smiley { margin: 0; padding: 0; border: 0; }

/* __________ galleries __________*/
.gallery { border: 2px solid #eee;padding: 15px 20px;margin: 20px 0 30px; }
.gallery:after { content: '';display: table;clear: both;}
.gallery-item img { display: block;margin: 0 auto; }

.gallery-columns-1 .gallery-item { width: 100%; padding: 10px 0; }

.gallery-columns-2 .gallery-item { width: 48%; padding: 10px 1%; float: left; }
.gallery-columns-2 .gallery-item:nth-child(2n+1) { clear: both; }

.gallery-columns-3 .gallery-item { width: 31.33333333333333%; padding: 10px 1%; float: left; }
.gallery-columns-3 .gallery-item:nth-child(3n+1) { clear: both; }

.gallery-columns-4 .gallery-item { width: 23%; padding: 10px 1%; float: left; }
.gallery-columns-4 .gallery-item:nth-child(4n+1) { clear: both; }

.gallery-columns-5 .gallery-item { width: 18%; padding: 10px 1%;float: left; }
.gallery-columns-5 .gallery-item:nth-child(5n+1) { clear: both; }

.gallery-columns-6 .gallery-item { width: 14.66666666666667%;padding: 10px 1%; float: left; }
.gallery-columns-6 .gallery-item:nth-child(6n+1) { clear: both; }

.gallery-columns-7 .gallery-item { width: 12.28571428571429%; padding: 10px 1%; float: left; }
.gallery-columns-7 .gallery-item:nth-child(7n+1) { clear: both; }

.gallery-columns-8 .gallery-item { width: 10.5%; padding: 10px 1%; float: left; }
.gallery-columns-8 .gallery-item:nth-child(8n+1) { clear: both; }

.gallery-columns-9 .gallery-item { width: 10%; padding: 10px 0.5555555555555556%; float: left; }
.gallery-columns-9 .gallery-item:nth-child(9n+1) { clear: both; }




/* __________ paginate __________ */
.nav-links { line-height: 40px; }
.nav-links a { text-decoration: none; }
.nav-links .page-numbers { padding: 4px 12px 6px; margin-right: 5px; background: #ddd; color: #444; -webkit-border-radius: 4px; border-radius: 4px; -webkit-transition: background, color 0.3s; transition: background, color 0.3s; }
.nav-links a:hover, .nav-links .current { background: #39c4cc; color: #fff; }
.nav-links .total { margin-right: 5px; }


/* ============================================================================
 *		COMMENTS
 * ============================================================================ */
#comments, #respond { margin: 60px 0 0; }
.comments-title, #reply-title { font-size: 30px; padding: 20px 0 5px 0; margin-bottom: 20px; border-bottom: 1px solid #ddd; }
.comments-title .cnt { float: right; font-size: 0.7em; }
.comment-list { margin: 10px 0 0 0; }
.comment-body { margin: 0 0 20px 0; padding: 20px 20px 20px 100px; background: #F9F9F9; -webkit-border-radius: 4px; border-radius: 4px; position: relative; }
.comment-body a { text-decoration: none; }
.comment-body a:hover { text-decoration: underline; }
.comment .avatar { position: absolute; top: 20px; left: 20px; -webkit-border-radius: 4px; border-radius: 4px; }
.comment-author { float: left; margin-right: 10px; line-height: 20px; }
.comment-metadata { font-size: 0.7em; line-height: 17px; padding-top: 3px; }
.says { display: none; }
.comment-content { margin: 10px 0; font-size: 14px; line-height: 1.3; clear: both; }
.comment-reply-link { font-size: 10px; text-transform: uppercase; font-weight: 500; color: #C5C5C5; position: absolute; bottom: 5px; right: 10px; }
.bypostauthor .comment-body { background: #EFEFEF; }


/* _____ REPLY to comment  */
.rinput,.rcomment { margin-bottom: 10px; }
.rinput input { width: 92%; padding-left: 4%; padding-right: 4%; }
.rcomment textarea { width: 100%; }
#cancel-comment-reply-link { font-size: 14px; float: right; }
.comment #respond { margin: -20px 0 60px 0; }


/* ============================================================================
 *		SIDEBAR
 * ============================================================================ */
#widgetlist { margin: 0; padding: 0; list-style: none; }
#widgetlist > li:last-child { margin-bottom: 0; }
.widget, .categories, #widgetlist > li { margin-bottom: 60px; padding: 0; }
.wtitle { padding: 0 0 5px 0; margin-bottom: 15px; border-bottom: 2px solid #555; color: #555; font-size: 20px; text-align: center; text-transform: uppercase; }
.widget ul { margin: 0 0 0 15px; list-style: outside url("img/li.svg");}
.widget li { padding: 5px 0 5px 5px; }
.widget .children { margin-left: 20px; }
.widget_calendar td, .widget_calendar th {padding: 10px}
.widget a {	text-decoration: none; }
.widget a:hover {	text-decoration: underline; }


/* ============================================================================
 *		OTHER
 * ============================================================================ */
 
/* _____ Search & Results */
.search-results .inform { margin-bottom: 4em; }
.searchform { width: 100%; max-width: 400px; margin: 0; padding: 0; position: relative; }
#header .searchform { display: none; margin: 30px auto; max-width: 300px; }
#content .searchform { margin: 30px 0; }
input.s { width: 90%; }
input.search_submit { position: absolute; top: 0; right: 0; width: 40px; padding-left: 12px; padding-right: 12px; -webkit-border-radius: 0 5px 5px 0; border-radius: 0 5px 5px 0; }
.serp { margin-bottom: 40px; margin-left: 20px; position: relative; }
.serp:before { content: ''; position: absolute; left: -20px; top: 8px; border: 3px solid black; border-radius: 50%; }
.serp h2 { font-size: 20px; }
.serp .meta { margin: 5px 0 0 0; font-size: 10px; line-height: 1; }
.serp .entry { margin-top: 10px; }
.serp .entry p { font-size: 14px; line-height: 1.3; }


/* _____ Woocommerce */
.product_meta { font-size: 0.9em;  }
.product_meta > span { display: block;  }
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
	background: #39c4cc;
	line-height: 22px;
	-webkit-transition: opacity 0.3s;
	-moz-transition: opacity 0.3s;
	-ms-transition: opacity 0.3s;
	-o-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.woocommerce-page .page-description {margin: 1em 0 2em;}
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
	background: #39c4cc;
	opacity: 0.8;
}

/* ________ BB Press _________ */
form#bbp-search-form {
	margin-bottom: 20px;
}

form#bbp-search-form input[type=text] {
	padding: 5px 10px;
}

form#bbp-search-form input[type=submit] {
	padding: 7px 15px;
	margin-left: -10px;
}
#bbpress-forums p.bbp-topic-meta img.avatar, #bbpress-forums ul.bbp-reply-revision-log img.avatar, #bbpress-forums ul.bbp-topic-revision-log img.avatar, #bbpress-forums div.bbp-template-notice img.avatar, #bbpress-forums .widget_display_topics img.avatar, #bbpress-forums .widget_display_replies img.avatar {
	margin-bottom: 0;
	border: 1px solid #ddd;
	padding: 1px;
	background: #fff;
}
#wp-bbp_reply_content-editor-container {
	border: 1px solid #ddd;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
#qt_bbp_reply_content_toolbar{
	border-radius: 6px 6px 0 0;
}
/*.bbp-body .bbp-topic-title,*/
.bbp-topic-permalink,
.bbp-forum-title {
	text-decoration: none;
	font: bold 18px/125% 'PT Serif', sans-serif;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content {
	margin: 0;
	color: #818181;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	padding: 20px;
}


.bbp-header .bbp-topic-title .bbp-topic-title,
.bbp-header .bbp-forum-info {
	padding-left: 10px;
	box-sizing: border-box;
}
li.bbp-topic-title {
	width: 47%;
}
li.bbp-forum-topic-count {
	text-align: left;
}
li.bbp-forum-reply-count,
li.bbp-topic-voice-count,
li.bbp-topic-reply-count {
	text-align: left;
	width: 13%;
}
li.bbp-forum-freshness,
li.bbp-topic-freshness {
	text-align: left;
	width: 19%;
}




/* ============================================================================ */



/* ============================================================================
 *		FOOTER
 * ============================================================================ */
#footer { color: #fff; font-size: 14px; line-height: 1.25; text-decoration: none; }
#footer a {color: #fff; transition: opacity 0.3s;}
#footer a:hover { color: #999999; text-decoration: underline; }
#footer .maxwidth { position: relative; }

.footer-menu { border-bottom: 1px solid rgba(255, 255, 255, 0.2); margin-bottom: 30px; }
.footmenu { padding: 0 0 20px 0; margin: 0; text-align: center; }
.footer-menu li { display: inline-block; padding: 5px 10px; }
#footer .footer-menu a:hover { color: #fff; opacity: 0.7; }

#copy { text-align: center; /*font-size: 12px;*/ }
#designedby { text-align: center; opacity: 0.8; }
#toTop { position: fixed; z-index: 1000; bottom: 20px; right: 20px; margin: 0; padding: 14px 12px; display: none; cursor: pointer;
	background: #222; color: #fff !important; border-radius: 3px; transform: rotate(-90deg); font-size: 24px; text-align: center; }
#toTop:hover { background: #999; text-decoration: none !important; border-radius: 3px; }



/* ============================================================================
 *		ADAPTIVE
 * ============================================================================ */

/* ___ Laptop/Tablet ( > 768px )  --------------------------------------------- */
@media only screen and (min-width: 768px)  {

	.sitetitle { text-align: left; }
	.sitetitle.center { text-align: center; }
	.sitetitle.right { text-align: right; }
	#header {background-size: auto;}
	#header .searchform { display: block; float: right; margin: 35px 0 0; }
	body.custom-background #header {background-size: contain;}

	.anons-thumbnail { display: block; }

	.rinput { display: inline-block; width: 30%; margin-right: 4%; }
	.rurl { margin-right: 0; }

	#copy {text-align: left; padding-bottom: 0;}
	#designedby {text-align: right;}
	
}

/* ___ Desktop ( > 1024px ) ------------------------------------------------ */
@media only screen and (min-width: 1024px) {

	body.custom-background #header .menu{width:100%;margin:0;padding:0 40px;border-radius:0}
	body.custom-background .wrapper {margin: 40px auto;}
	body.custom-background .wrapper {border-radius:10px;}
	body.custom-background #footer {border-radius: 0 0 10px 10px;}
	
	#mobile-menu { display: none; }
	.topnav nav {display: block;}
	.top-menu { border-radius: 5px; position: static; text-align: center; }
	.top-menu li { display: inline-block; position: relative; }
	.top-menu li a { border-bottom: 0; font-weight: normal; color: #fff; -webkit-transition: background 0.3s; transition: background 0.3s; }
	.top-menu > li:hover > a { background: rgba(255,255,255,0.3);  }
	.top-menu .sub-menu, .top-menu .children { display: none; margin: 0; position: absolute; top: 100%; left: 0; background: #39c4cc; width: 300px; z-index: 1000;  box-shadow: 3px 3px 0 rgba(0,0,0,0.1); }
	.top-menu .sub-menu li, .top-menu .children li { display: block; text-align: left;}
	.top-menu .sub-menu li a, .top-menu .children li a { color: #fff; border-top: 1px solid rgba(255,255,255,0.2); }
	.top-menu li:hover > .sub-menu,
	.top-menu li:hover > .children { display: block; }
	.top-menu .sub-menu .sub-menu,
	.top-menu .children .children { display: none; top: 0; left: 100%; padding: 0; border-top: 0; border-left: 3px solid #fff; }
	.top-menu .sub-menu li:hover > .sub-menu,
	.top-menu .children li:hover > .children { display: block; }
	.top-menu .menu-item-has-children > a:after, .top-menu .menu-item-has-children > span:after,
	.top-menu .page_item_has_children > a:after, .top-menu .page_item_has_children > span:after{
		content: '»'; position: absolute; right: 20px; margin: 1px 0 0 15px; transform: rotate(90deg);
	}
	.top-menu .sub-menu > .menu-item-has-children > a:after, .top-menu .sub-menu > .menu-item-has-children > span:after,
	.top-menu .children > .page_item_has_children > a:after, .top-menu .children > .page_item_has_children > span:after {
		content: '»'; margin: 0; transform: none;
	}
	.top-menu .menu-item-has-children> a, .top-menu .menu-item-has-children> span,
	.top-menu .page_item_has_children> a, .top-menu .page_item_has_children> span {
		padding-right: 40px;
	}
	
}

/* ___ Desktop ( > 1200px ) ------------------------------------------------ */
@media only screen and (min-width: 1280px) {
	body.custom-background #header {border-radius: 10px 10px 0 0;}
	#navpages li { padding-left: 10px; }
	#navpages .sub-menu { margin-left: 10px; }
	#navpages .sub-menu .sub-menu { left: 190px; }
	#navpages li a { font-size: 16px; padding: 10px; }
	
	.comment-list ul.children {margin: 0 0 50px 30px;}

}

/* -------------------------------------------------------------------------- */

</style>