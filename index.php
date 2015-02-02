<?php
set_time_limit(0);

$id = $_GET["id"];
$data = json_decode(file_get_contents("https://www.blogger.com/feeds/327279793114393343/posts/default/$id?alt=json"));
$info = (array) $data->entry->title;
$title = $info['$t'];
$info = (array) $data->entry->content;
$length = strpos($info['$t'], ';');
$file = base64_decode(substr($info['$t'], 0, $length - 1));
$description = substr($info['$t'], $length + 1);

require_once 'mercali.php';

$torrent = new Torrent( $file );
//echo '<br>private: ', $torrent->is_private() ? 'yes' : 'no', 
$title = $torrent->name(); 
$comment = $torrent->comment();
$piece_length = $torrent->piece_length();
$size =$torrent->size( 2 );
$hash_info=$torrent->hash_info();
//var_dump( $torrent->content() );

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta name="description" content="Download <?php echo $title ?> torrent or any other torrent from Windows category. Direct download via HTTP available as well."/>
    <title>Download <?php echo $title ?> Torrent - SeedTorrent</title>
    <link rel="stylesheet" type="text/css" href="/all.css" charset="utf-8" />
    <link rel="shortcut icon" href="//magiz.github.io/images/favicon.ico" />
    

    <link rel="apple-touch-icon" href="//magiz.github.io/images/apple-touch-icon.png" />

    <!--[if IE 7]>
    <link href="//magiz.github.io/css/ie7-3fb58fa.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!--[if IE 8]>
    <link href="//magiz.github.io/css/ie8.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="//magiz.github.io/js/html5.min-3fb58fa.js" type="text/javascript"></script>
    <![endif]-->

    <!--[if gte IE 9]>
    <link href="//magiz.github.io/css/ie9-3fb58fa.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <script src="/all.js" type="text/javascript"></script>
    <link rel="alternate" type="application/rss+xml" title="Subscribe to RSS feed" href="/?rss=1"/>
        <meta name="verify-v1" content="YccN/iP28SifHNEFY6u92i0ou3tAegQAIk2OyOJLp1s="/>
    <meta name="y_key" content="f0b40c3f5fee758f"/>
    <meta name="google-site-verification" content="C1rNEC4fJIvFoyyccMV2PbuqX3P-SFtlD2MNZ9D2uy0" />
    <link rel="search" type="application/opensearchdescription+xml" title="SeedTorrent Torrent Search" href="/opensearch.xml"/>
    <meta property="fb:app_id" content="123694587642603"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <script type="text/javascript">var _scq = _scq || [];</script></head>
<body>
<div id="wrapper">
    <div id="wrapperInner">
            
    <div id="logindiv"></div>
    <header>
	<nav id="menu">
		<a href="/" id="logo"></a>
		<i id="showHideSearch" class="ka ka-zoom" style="color: #ffeeb4; font-size: 34px; float:left; height: 50px; line-height: 50px;"></i>
		<div id="torrentSearch">
			<form action="/usearch/" method="get" id="searchform" accept-charset="utf-8" onsubmit="return doSearch(this.q.value);">
				<input id="contentSearch" class="input-big" type="text" name="q" value="" autocomplete="off" placeholder="Search query" /><div id="searchTool"><a title="Advanced search" href="/advanced/" class="ajaxLink"><i class="ka">e</i></a><button title="search" type="submit" value="" onfocus="this.blur();" onclick="this.blur();"><i class="ka">g</i></button></div>
			</form>
		</div>
		<ul id="navigation">
			
			<li> <a href="/browse/"> <i class="ka ka-torrent"></i><span class="menuItem">browse</span></a>
				<ul class="dropdown dp-middle dropdown-msg upper">
										
						<li class="topMsg"><a href="/new/"><i class="ka ka16 ka-torrent"></i>latest</a></li>
										<li class="topMsg"><a href="/movies/"><i class="ka ka16 ka-movie lower"></i>Movies</a></li>
					<li class="topMsg"><a href="/tv/"><i class="ka ka16 ka-movie lower"></i>TV</a></li>
					<li class="topMsg"><a href="/music/"><i class="ka ka16 ka-music-note lower"></i>Music</a></li>
					<li class="topMsg"><a href="/games/"><i class="ka ka16 ka-settings lower"></i>Games</a></li>
					<li class="topMsg"><a href="/books/"><i class="ka ka16 ka-bookmark"></i>Books</a></li>
					<li class="topMsg"><a href="/applications/"><i class="ka ka16 ka-settings lower"></i>Apps</a></li>
					<li class="topMsg"><a href="/anime/"><i class="ka ka16 ka-movie lower"></i>Anime</a></li>
					<li class="topMsg"><a href="/other/"><i class="ka ka16 ka-torrent"></i>Other</a></li>
									</ul>
			</li>
			</li>
			<li> <a href="/community/"> <i class="ka ka-community"></i><span class="menuItem">community</span></a>
			<li><a href="/blog/"><i class="ka ka-rss lower"></i><span class="menuItem">Blog</span></a></li>
			<li><a href="/faq/"><i class="ka ka-faq lower"></i><span class="menuItem">FAQ</span></a></li>
			</li>
			
			<li> <a href="/auth/login/" class="ajaxLink"><i class="ka ka-user"></i><span class="menuItem">Register / Sign In</span></a></li>
		</ul>
	</nav>
</header>

<div class="pusher"></div>
<div class="mainpart">
    
 
<script type="text/javascript" charset="utf-8">
$(function() {
    $('#desc img').each(function() {
        if ($(this).attr('width') > '620')  {
            $(this).attr('width','620');
        }
        $(this).removeAttr('height');
    });
});
</script> 
<table cellspacing="0" cellpadding="0" class="doublecelltable width100perc" id="mainDetailsTable">
	<tr>
		<td width="100%">
        					<?php /* <div class="goodFake" itemscope itemtype="http://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="8" />
    <meta itemprop="bestRating" content="10" />
    <meta itemprop="ratingCount" content="78" />

    <div class="floatLeft inlineblock">
        <a title="Good" id="thnxLink" data-hash="<?php echo $hash_info ?>" class="ajaxLink" href="/auth/login/">
            <span class="block relative"><span class="thnx"></span><span class="siteButton torrentfingers"></span></span>
            <span class="siteButton smallButton" id="thnxCount"><span>+63</span></span>
        </a>
            </div>
			
    <div class="floatRight inlineblock">
        <a title="Bad" id="fakeLink" data-hash="<?php echo $hash_info ?>" class="ajaxLink" href="/auth/login/">
            <span class="block relative"><span class="fake"></span><span class="siteButton redButton torrentfingers"></span></span>
            <span class="siteButton smallButton redButton" id="fakeCount"><span>-15</span></span>
        </a>
            </div>

            <br /><a id="report_button" href="/auth/login/" class="ireport icon16 textButton redButton ajaxLink center" style="min-width: 108px; float: left"><span></span>report fake</a>
    </div> */ ?>
				<h1 class="novertmarg"><a href="/<?php echo $id ?>.html"><span itemprop="name"><?php echo $title ?></span></a></h1>
					<div class="seedLeachContainer">
					<?php /*
				<div class="seedBlock"><span class="seedLeachIcon"></span>seeders: <strong itemprop="seeders">435</strong></div>
				<div class="leechBlock"><span class="seedLeachIcon"></span>leechers: <strong itemprop="leechers">75</strong></div>
				*/ ?>
			</div>
			<div class="buttonsline downloadButtonGroup clearleft novertpad">
            <a title="Add torrent to personal RSS" href="/bookmarks/add/rss/<?php echo $hash_info ?>/" class="siteButton giantIcon rssButton ajaxLink"><span></span>
    </a>
    
        <a href="/bookmarks/add/torrent/<?php echo $hash_info ?>/" class="siteButton giantIcon bookmarkButton ajaxLink" title="Add to bookmarks">
        <span>
        </span>
    </a>
    
    <a title="Magnet link" href="magnet:?xt=urn:btih:<?php echo $hash_info ?>&dn=utorrent+pro+v3+4+2+build+v38397+incl+crack+techtools&tr=udp%3A%2F%2F9.rarbg.com%3A2710%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337" class="siteButton giantIcon magnetlinkButton">
        <span>
        </span>
    </a>

    <a rel="nofollow" title="Download verified torrent file" href="http://torcache.gq/torrent/<?php echo $hash_info ?>.torrent" download="[kickass.so]utorrent.pro.v3.4.2.build.v38397.incl.crack.techtools" class="siteButton giantButton    verifTorrentButton"><span><em class="buttonPic"></em>
            Download torrent</span>
    </a>
        
</div><?php /*
            					<div class="font11px lightgrey line160perc">
Added on Jan 30, 2015 by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/ThumperDC/">ThumperDC</a></span><span title="Reputation" class="repValue positive">15.89K</span></span> in <span id="cat_10148315"><strong><a href="/applications/">Applications</a> > <a href="/windows/">Windows</a></strong></span>	 <br>
	Torrent verified.	Downloaded 2,252 times.
</div> */ ?>
        
            <div class="tabs tabSwitcher">
			
				<ul class="tabNavigation">
					<li><a href="#main" rel="main" class="darkButton"><span>Main</span></a></li>
                                        <li><a href="#technical" rel="technical" class="darkButton"><span>Technical</span></a></li>
                                                                                <li><a href="#comment" rel="comment" class="darkButton"><span>Comments <i class="menuValue">32</i></span></a></li>
				</ul>
			
				<hr class="tabsSeparator" />
                <div id="tab-main" class="contentTabContainer">
                 
                                                    
                                    									<div class="torrent_files">	<span class="folderopen"><span class="foldericon"></span><a href="#" onclick="Toggle('ul_top', this);return false;" title="<?php echo $title ?>" class="dotted"><?php echo $title ?></a> (Size: <?php echo $size ?>)</span>
	<div id="torrent_files">
			<table id="ul_top" class="torrentFileList" cellpadding="0" cellspacing="0" width="100%" >

																					<tr >
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType zipType"></span></td>
			<td class="torFileName" title="Torrent Pro v3.4.2 build v38397 Incl. Crack [TechTools.net].rar">Torrent Pro v3.4.2 build v38397 Incl. Crack [TechTools.net].rar</td>
			<td class="torFileSize">3.34 <span>MB</span></td>
		</tr>
							<tr >
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType pictureType"></span></td>
			<td class="torFileName" title="TechTools.NET.jpg">TechTools.NET.jpg</td>
			<td class="torFileSize">1.74 <span>MB</span></td>
		</tr>
							<tr  class="last">
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType txtType"></span></td>
			<td class="torFileName" title="wWw.TechTools.NET.txt">wWw.TechTools.NET.txt</td>
			<td class="torFileSize">37 <span>bytes</span></td>
		</tr>
				
					</table>
		</div>
</div>

                					<div class="data">
                        										<h2>Description</h2>
						<div class="textcontent" id="desc">
						<?php echo $description ?>
						</div>
</div>
													<h2>Sharing Widget</h2>
<br />
<div class="sharingWidgetBox">
	<div class="sharingWidget borderrad3px floatleft">
	<a class="siteButton giantButton" href="http://torcache.gq/torrent/<?php echo $hash_info ?>.torrent?title=[kickass.so]utorrent.pro.v3.4.2.build.v38397.incl.crack.techtools"><span>Download torrent</span></a>
		<div class="widgetSize"><span class="torType zipType"></span> <strong><?php echo $size ?></strong></div>
		<div class="widgetSeed"><span class="seedLeachIcon"></span>seeders:<strong>435</strong></div>
		<div class="widgetLeech"><span class="seedLeachIcon"></span>leechers:<strong>75</strong></div>
	</div>
		<div class="widgetName"><?php echo $title ?></div>
</div><!-- div class="sharingWidgetBox" -->
<div class="floatleft">
<label class="inlineblock width50px">html</label> <input onclick="select()" value='<a href="http://kickass.so/utorrent-pro-v3-4-2-build-v38397-incl-crack-techtools-t10148315.html"><img src="//kickass.so/torrentwidget/<?php echo $hash_info ?>.png"></a>' type="text" class="textinput" /><br />
<label class="inlineblock width50px">bbcode</label> <input onclick="select()" value='[url="//kickass.so/utorrent-pro-v3-4-2-build-v38397-incl-crack-techtools-t10148315.html"][img]//kickass.so/torrentwidget/<?php echo $hash_info ?>.png[/img][/url]' type="text" class="textinput" />
</div>
								</div>
				<div id="tab-technical" class="contentTabContainer">
					<div id="trackerBox">
						<h2>Trackers
<div class="buttonsline">
	<button type="submit" class="siteButton bigButton" onclick="refreshTrackers('<?php echo $hash_info ?>');"><span>refresh</span></button>
</div>
</h2>
<div class="botmarg10px">
	<table cellpadding="0" cellspacing="0" class="data" id="trackers_table">
	<tr class="firstr">
		<th><span>tracker name</span></th>
		<th><span>Status</span></th>
		<th>checked</th>
		<th>seeders</th>
		<th>leechers</th>
		<th class="lasttd">downloads</th>
			</tr>
			<tr class="even">
		<td class="width100perc left"><div>udp://9.rarbg.com:2710/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">01 Feb 2015</span></td>
			<td class="green center">386</td>
		<td class="red center">72</td>
		<td class="brown lasttd center">2252</td>
			</tr>
			<tr class="odd">
		<td class="width100perc left"><div>udp://open.demonii.com:1337/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">01 Feb 2015</span></td>
			<td class="green center">435</td>
		<td class="red center">75</td>
		<td class="brown lasttd center">2187</td>
			</tr>
			<tr class="even">
		<td class="width100perc left"><div>udp://coppersurfer.tk:6969/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">01 Feb 2015</span></td>
			<td class="green center">328</td>
		<td class="red center">63</td>
		<td class="brown lasttd center">778</td>
			</tr>
			<tr class="odd">
		<td class="width100perc left"><div>udp://tracker.istole.it:80/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">30 Jan 2015</span></td>
			<td class="green center">0</td>
		<td class="red center">0</td>
		<td class="brown lasttd center">0</td>
			</tr>
			<tr class="even">
		<td class="width100perc left"><div>udp://tracker.publicbt.com:80/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">30 Jan 2015</span></td>
			<td class="green center">0</td>
		<td class="red center">0</td>
		<td class="brown lasttd center">0</td>
			</tr>
			<tr class="odd">
		<td class="width100perc left"><div>udp://12.rarbg.me:80/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">30 Jan 2015</span></td>
			<td class="green center">0</td>
		<td class="red center">0</td>
		<td class="brown lasttd center">0</td>
			</tr>
			<tr class="even">
		<td class="width100perc left"><div>udp://tracker.openbittorrent.com:80/announce</div></td>
		<td class="green">active</td>
		<td><span class="nobr">30 Jan 2015</span></td>
			<td class="green center">0</td>
		<td class="red center">0</td>
		<td class="brown lasttd center">0</td>
			</tr>
			<tr class="odd">
		<td class="width100perc left"><div>udp://glotorrents.pw:6969/announce</div></td>
		<td class="red">pending</td>
		<td><span class="nobr">01 Feb 2015</span></td>
			<td class="green center">296</td>
		<td class="red center">41</td>
		<td class="brown lasttd center">2020</td>
			</tr>
			<tr class="even">
		<td class="width100perc left"><div>http://tracker.nwps.ws:6969/announce</div></td>
		<td class="red">pending</td>
		<td><span class="nobr">01 Feb 2015</span></td>
			<td class="green center">131</td>
		<td class="red center">22</td>
		<td class="brown lasttd center">6</td>
			</tr>
			<tr class="odd">
		<td class="width100perc left"><div>http://explodie.org:6969/announce</div></td>
		<td class="red">pending</td>
		<td><span class="nobr">30 Jan 2015</span></td>
			<td class="green center">70</td>
		<td class="red center">11</td>
		<td class="brown lasttd center">90</td>
			</tr>
		</table>
	<a onclick="$('#utorrent_trackers').toggle();$('#utorrent_textarea').select();return false;">µTorrent compatible trackers list</a><br />
	<div id="utorrent_trackers" style="display:none">
	<br /><textarea class="botmarg5px" id="utorrent_textarea" rows="8">udp://9.rarbg.com:2710/announce

udp://open.demonii.com:1337/announce

udp://coppersurfer.tk:6969/announce

udp://tracker.istole.it:80/announce

udp://tracker.publicbt.com:80/announce

udp://12.rarbg.me:80/announce

udp://tracker.openbittorrent.com:80/announce

udp://glotorrents.pw:6969/announce

http://tracker.nwps.ws:6969/announce

http://explodie.org:6969/announce</textarea>
	</div>
</div>

					</div>
		            <h2>Locations</h2>
<table cellpadding="0" cellspacing="0" class="data" style="width:100%">
<tr class="firstr">
	<th colspan="2" class="width100perc lasttd"><span>name</span></th>
</tr>
<tr class="odd">
	<td class="width15perc">
		<span class="torrenticons17 thirdPartIcons"></span>
	</td>
	<td class="width50perc">SeedTorrent</td>
</tr>
</table>
		            <span class="lightgrey font10px">Torrent hash: <?php echo $hash_info ?></span>
				</div>
    			    							<div id="tab-comment" class="contentTabContainer commentTab">
											<div class="commentsLeftModule">
<div class="comments topComments">
	<h2>Uploader Comments</h2>
<div class="commentThread">
<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                	<?php //	<a  href="/user/TERMINATOR993/"><img src="///userpics/19/362/13c66958101d91c4c6c60460e0b270d1.gif"/></a> ?>
		</div>	
	</div>
	<div class="commentcontent">
		<div class="commentowner">
			<div class="rate " id="topratediv_22712728">
                                	<a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a>
                	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
                                <a class="ratemark  " id="topcommrate_22712728"  title="Votes for this comment">0</a>
			</div>
			<div class="commentTopControlLine">
			                    
            </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/TERMINATOR993/">TERMINATOR993</a></span><span title="Reputation" class="repValue positive">509</span></span>

				
				<span  class="lightgrey font11px">&bull; 01 Feb 2015, 02:52 </span>
			</div>
		</div>
		<div id="topctext_22712728" class="commentText botmarg5px">AVG 2015 say - IDP.Trojan.EB210B03 <img class="emoticon" src="//magiz.github.io/images/smiley/cry.gif" alt="cry" /> maybe AVG wrong.. 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

<p class="font11px lightgrey italic" id="edited_22712728">Last edited by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/TERMINATOR993/">TERMINATOR993</a></span></span>, 16&nbsp;hours&nbsp;ago</p>
</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


<div class="reply">
		<div class="commentThread">
		<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                		<a  href="/user/ThumperDC/"><img src="///userpics/22/290/72e57250d696324e917ec16bfb04c208.png"/></a>
		</div>	
	</div>
	<div class="commentcontent">
		<div class="commentowner commentuploader">
			<div class="rate rated" id="topratediv_22719225">
                                	<a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a>
                	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
                                <a class="ratemark plus ajaxLink" id="topcommrate_22719225" href="/comments/votes/22719225/" title="Votes for this comment">7</a>
			</div>
			<div class="commentTopControlLine">
			                    
            </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/ThumperDC/">ThumperDC</a></span><span title="Reputation" class="repValue positive">15.89K</span></span>

				
				<span  class="lightgrey font11px">&bull; 01 Feb 2015, 11:18 </span>
<div class="uploader"><span class="rank_uploader" alt="uploader"></span></div>			</div>
		</div>
		<div id="topctext_22719225" class="commentText botmarg5px">AVG was never right :) 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

<p class="font11px lightgrey italic" id="edited_22719225">Last edited by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/ThumperDC/">ThumperDC</a></span></span>, 1&nbsp;hour&nbsp;ago</p>
</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


	</div>
	</div>
</div>

</div>
<div class="comments topComments">
	
</div>
	<h2>All Comments<a name="comments_start"></a></h2>
	<div class="comments">
		<div class="floatleft"><div class="commentform torrentPage" id="main">

<form action="/comments/create/torrent/" method="post" onsubmit="return addComment(this, 'torrent');">
    <input type="hidden" name="turing"/>
    <input type="hidden" name="objectId" value="10148315"/>

        <textarea name="content" class="comareajs botmarg5px quicksubmit"></textarea>
            <div class="textareaRecommendation font11px">please, leave only comments related to that torrent</div>
<script type="text/javascript" charset="utf-8">
    $(function() { $("#main form").bind('submit.my', function() { $(this).find('.captchaformjs').show() }) });
</script>
    <div class="captchaformjs" style="display:none;clear:left;">
    <table>
    <tr>
        <td>
            <img class="captcha" src="//magiz.github.io/images/blank.gif" alt="CAPTCHA" title="Click to reload" style="width: 140px; height: 47px; cursor: pointer;" />
<br/>
            <a class="textButton itop icon16 captchareload"><span></span>Not seeing the captcha?</a>
        </td>
        <td>
            <label for="captcha">Captcha <span class="asterisk">*</span>:</label>
            <input id="captcha" type="text" name="captcha" />
        </td>
    </tr>
</table>

    </div>
    <div class="objectAttachmentsJs overauto botmarg5px" style="clear: both;"></div>
    <div class="buttonsline">
                    <button type="submit" class="siteButton bigButton"><span>Post as a guest</span></button>
            <span class="buttonGoupText"> or <a class="ajaxLink" href="/auth/login/">sign-in</a></span>
            </div>
</form>
</div>
</div>
		<div id="comments"><div class="commentThread">
	    <div class="commentbody" id="comment22728516" style="background-color:#f8f7f5;">
        <div id="cpic_22728516" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/S_T1987/">
                    <img class="lazyjs" data-original="//magiz.github.io/images/commentlogo.png" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22728516"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22728516">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22728516">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/S_T1987/">S_T1987</a></span><span title="Reputation" class="repValue positive">6</span></span>
                                 <span id="cdate_22728516" class="lightgrey font11px">
                   &bull; 13&nbsp;min.&nbsp;ago                 </span>
                                                <a class="siteButton smallButton reject showComment" id="cshow_22728516" href="javascript:showComment(22728516)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22728516" class="commentText botmarg5px topmarg5px">
is this compatible with mac? 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22728516" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22728516');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22728516"><a class="siteButton smallButton" href="javascript: Hide('rep22728516');Show('rep_link22728516');Hide('close_link22728516')"><span>close</span></a></div>
        <div class="commentform" id="rep22728516" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22728030">
        <div id="cpic_22728030" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/superben_32/">
                    <img class="lazyjs" data-original="///userpics/46/331/680d8584d83012fb81e745fe932d9ccd.jpg" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22728030"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22728030">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22728030">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/superben_32/">superben_32</a></span><span title="Reputation" class="repValue positive">55</span></span>
                                 <span id="cdate_22728030" class="lightgrey font11px">
                   &bull; 01 February 2015, 19:21                 </span>
                                <div class="downloadedArrow"><img src="//magiz.github.io/images/torrentDownloaded.gif" alt="torrent downloaded" title="has downloaded this torrent" /></div>                <a class="siteButton smallButton reject showComment" id="cshow_22728030" href="javascript:showComment(22728030)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22728030" class="commentText botmarg5px topmarg5px">
Also, what is the settings.dat file for? 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22728030" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22728030');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22728030"><a class="siteButton smallButton" href="javascript: Hide('rep22728030');Show('rep_link22728030');Hide('close_link22728030')"><span>close</span></a></div>
        <div class="commentform" id="rep22728030" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22728023">
        <div id="cpic_22728023" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/superben_32/">
                    <img class="lazyjs" data-original="///userpics/46/331/680d8584d83012fb81e745fe932d9ccd.jpg" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22728023"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22728023">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22728023">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/superben_32/">superben_32</a></span><span title="Reputation" class="repValue positive">55</span></span>
                                 <span id="cdate_22728023" class="lightgrey font11px">
                   &bull; 01 February 2015, 19:21                 </span>
                                <div class="downloadedArrow"><img src="//magiz.github.io/images/torrentDownloaded.gif" alt="torrent downloaded" title="has downloaded this torrent" /></div>                <a class="siteButton smallButton reject showComment" id="cshow_22728023" href="javascript:showComment(22728023)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22728023" class="commentText botmarg5px topmarg5px">
Thanks a ton! There is no virus's here! 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22728023" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22728023');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22728023"><a class="siteButton smallButton" href="javascript: Hide('rep22728023');Show('rep_link22728023');Hide('close_link22728023')"><span>close</span></a></div>
        <div class="commentform" id="rep22728023" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22726991">
        <div id="cpic_22726991" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/rabbitr0n/">
                    <img class="lazyjs" data-original="///userpics/12/191/ced01ec800b418c0b7aac13dd83b8645.gif" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22726991"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22726991">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a href="/comments/votes/22726991/" title="Votes for this comment" class="ajaxLink ratemark plus" id="commrate_22726991">1</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/rabbitr0n/">rabbitr0n</a></span><span title="Reputation" class="repValue positive">1669</span></span>
                                 <span id="cdate_22726991" class="lightgrey font11px">
                   &bull; 01 February 2015, 18:19                 </span>
                                <div class="downloadedArrow"><img src="//magiz.github.io/images/torrentDownloaded.gif" alt="torrent downloaded" title="has downloaded this torrent" /></div>                <a class="siteButton smallButton reject showComment" id="cshow_22726991" href="javascript:showComment(22726991)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22726991" class="commentText botmarg5px topmarg5px">
Works PERFECTLY! Don't believe the hype, this file is awesome! <img class="emoticon" src="//magiz.github.io/images/smiley/rock.gif" alt="rock" /><img class="emoticon" src="//magiz.github.io/images/smiley/pirate.gif" alt="pirate" /> 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22726991" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22726991');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22726991"><a class="siteButton smallButton" href="javascript: Hide('rep22726991');Show('rep_link22726991');Hide('close_link22726991')"><span>close</span></a></div>
        <div class="commentform" id="rep22726991" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22726129">
        <div id="cpic_22726129" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/amlunx/">
                    <img class="lazyjs" data-original="///userpics/25/405/94521003165e599a8201cca29d162862.png" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22726129"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22726129">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22726129">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/amlunx/">amlunx</a></span><span title="Reputation" class="repValue positive">145</span></span>
                                 <span id="cdate_22726129" class="lightgrey font11px">
                   &bull; 01 February 2015, 17:33                 </span>
                                                <a class="siteButton smallButton reject showComment" id="cshow_22726129" href="javascript:showComment(22726129)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22726129" class="commentText botmarg5px topmarg5px">
only stupid dumb noob giving thumbs down 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22726129" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22726129');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22726129"><a class="siteButton smallButton" href="javascript: Hide('rep22726129');Show('rep_link22726129');Hide('close_link22726129')"><span>close</span></a></div>
        <div class="commentform" id="rep22726129" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22725453">
        <div id="cpic_22725453" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/djscorpion/">
                    <img class="lazyjs" data-original="//magiz.github.io/images/commentlogo.png" src="//magiz.github.io/images/blank.gif">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22725453"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22725453">
            <a href="/auth/login/" class="icon16 iminus redButton ajaxLink"><span></span></a> 
    	<a href="/auth/login/" class="icon16 iplus ajaxLink"><span></span></a>
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22725453">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/djscorpion/">djscorpion</a></span><span title="Reputation" class="repValue positive">21</span></span>
                                 <span id="cdate_22725453" class="lightgrey font11px">
                   &bull; 01 February 2015, 16:51                 </span>
                                <div class="downloadedArrow"><img src="//magiz.github.io/images/torrentDownloaded.gif" alt="torrent downloaded" title="has downloaded this torrent" /></div>                <a class="siteButton smallButton reject showComment" id="cshow_22725453" href="javascript:showComment(22725453)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22725453" class="commentText botmarg5px topmarg5px">
nice 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22725453" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22725453');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22725453"><a class="siteButton smallButton" href="javascript: Hide('rep22725453');Show('rep_link22725453');Hide('close_link22725453')"><span>close</span></a></div>
        <div class="commentform" id="rep22725453" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22724938">
        <div id="cpic_22724938" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="//magiz.github.io/images/commentlogo.png">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22724938"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22724938">
        <a  title="Votes for this comment" class=" ratemark " id="commrate_22724938">0</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_22724938" class="lightgrey font11px">
                   &bull; 01 February 2015, 16:26                 </span>
                                                <a class="siteButton smallButton reject showComment" id="cshow_22724938" href="javascript:showComment(22724938)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22724938" class="commentText botmarg5px topmarg5px">
thank you, PS theres no VIRUS, I cheacked 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22724938" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22724938');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22724938"><a class="siteButton smallButton" href="javascript: Hide('rep22724938');Show('rep_link22724938');Hide('close_link22724938')"><span>close</span></a></div>
        <div class="commentform" id="rep22724938" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment22724890">
        <div id="cpic_22724890" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="//magiz.github.io/images/commentlogo.png">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_22724890"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_22724890">
        <a href="/comments/votes/22724890/" title="Votes for this comment" class="ajaxLink ratemark minus" id="commrate_22724890">-1</a>
</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                    </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_22724890" class="lightgrey font11px">
                   &bull; 01 February 2015, 16:23                 </span>
                                                <a class="siteButton smallButton reject showComment" id="cshow_22724890" href="javascript:showComment(22724890)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_22724890" class="commentText botmarg5px topmarg5px">
Just use uTorrent 2.2.1 (free + no ads + works 100%) 
    <div class="objectAttachmentsJs overauto topmarg10px">
                                
        
            </div>

</div>
            <div id="rep_link22724890" class="replyLink">
            <a class="siteButton smallButton" href="javascript: showReply('22724890');"><span>reply</span></a>
        </div>
        <div style="display:none" id="close_link22724890"><a class="siteButton smallButton" href="javascript: Hide('rep22724890');Show('rep_link22724890');Hide('close_link22724890')"><span>close</span></a></div>
        <div class="commentform" id="rep22724890" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" --> 

		</div><!-- div class="commentThread" -->

    <span id="showmore_2" class="showmore folded" style="display:block">
	    <a onClick="getPage(2, '10148315', 'torrent')" style="cursor:pointer"><span class="font80perc">&#x25BC;</span> Show More</a>
	    <a onclick="getAll(2, '10148315', 'torrent')" style="cursor:pointer;float:right;padding-right:10px"><span class="font80perc">&#x25BC;</span> All</a>
	    <div class="clear"></div>
	</span>
	<div id="morecomments_2" style="display:none;"></div>
<form id="comment_form" action="/comments/create/torrent/" method="post" onsubmit="return addComment(this, 'torrent');" style="display:none">
    <input type="hidden" name="pid" value="">
    <input type="hidden" name="turing"/>
    <input type="hidden" name="objectId" value="10148315"/>
    <textarea class="botmarg5px comareajs quicksubmit" name="content" rows="10" cols="10" autofocus required></textarea>
    <script type="text/javascript" charset="utf-8">
    $(function() { $("#comment_form").bind('submit.my', function() { $(this).find('.captchaformjs').show() }) });
</script>
        <div class="captchaformjs" style="display:none">
        <table>
    <tr>
        <td>
            <img class="captcha" src="//magiz.github.io/images/blank.gif" alt="CAPTCHA" title="Click to reload" style="width: 140px; height: 47px; cursor: pointer;" />
<br/>
            <a class="textButton itop icon16 captchareload"><span></span>Not seeing the captcha?</a>
        </td>
        <td>
            <label for="captcha">Captcha <span class="asterisk">*</span>:</label>
            <input id="captcha" type="text" name="captcha" />
        </td>
    </tr>
</table>

        </div>
        <div class="objectAttachmentsJs overauto" style="clear: both;"></div>
    <div class="buttonsline">
        <button type="submit" class="siteButton bigButton" name="submit"><span>reply</span></button>
    </div>
</form></div>
	</div>
</div><!-- div class="commentsLeftModule" -->
<br />
	<h2>User Opinions</h2>
	<div class="userOpinionsContainer" id="useropinion">
	<span class="isthumbup statusIcon"></span>  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_3"><a class="plain" href="/user/blaze69/">blaze69</a></span><span title="Reputation" class="repValue positive">15.21K</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/rayron/">rayron</a></span><span title="Reputation" class="repValue positive">5308</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Law_420/">Law_420</a></span><span title="Reputation" class="repValue positive">2810</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Cl0ud7/">Cl0ud7</a></span><span title="Reputation" class="repValue positive">2308</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/rabbitr0n/">rabbitr0n</a></span><span title="Reputation" class="repValue positive">1669</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/hitzzzzzzzz/">hitzzzzzzzz</a></span><span title="Reputation" class="repValue positive">1387</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/TERMINATOR993/">TERMINATOR993</a></span><span title="Reputation" class="repValue positive">509</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/BLOOD2RAYNE/">BLOOD2RAYNE</a></span><span title="Reputation" class="repValue positive">127</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/aziz0804/">aziz0804</a></span><span title="Reputation" class="repValue positive">71</span></span>,  
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Ljubo95/">Ljubo95</a></span><span title="Reputation" class="repValue positive">67</span></span> 
		... And 53 more
	<br />
	<span class="isthumbdown statusIcon valignMiddle"></span> <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_5"><a class="plain" href="/user/Dr_Stanley/">Dr_Stanley</a></span><span title="Reputation" class="repValue positive">16.4K</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/SQuad_Z/">SQuad_Z</a></span><span title="Reputation" class="repValue positive">1668</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/charmlurv/">charmlurv</a></span><span title="Reputation" class="repValue positive">320</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/hijode/">hijode</a></span><span title="Reputation" class="repValue positive">305</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/renges/">renges</a></span><span title="Reputation" class="repValue positive">246</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Meuuks33/">Meuuks33</a></span><span title="Reputation" class="repValue positive">45</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/hassan01/">hassan01</a></span><span title="Reputation" class="repValue positive">39</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/z9001a/">z9001a</a></span><span title="Reputation" class="repValue positive">7</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/vulence00/">vulence00</a></span><span title="Reputation" class="repValue positive">5</span></span>,  
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Pozz_/">Pozz_</a></span><span title="Reputation" class="repValue positive">4</span></span> 
		... And 5 more
	</div>


									</div>
			</div><!-- div class="tabs" -->
		</td>
		<td class="sidebarCell">
		    <div id="sidebar" >
    
                


    
        <div class="sliderbox">
<h3><a href="/community/">Latest Forum Threads</a><i id="hideLatestThreads" style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="latestForum" rel="latestForum" class="showBlockJS">
		<li>
		<a href="/community/show/taken-3-hd-rip/?unread=16122933">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				TAKEN 3 - HD RIP
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_5"><a class="plain" href="/user/Dr_Stanley/">Dr_Stanley</a></span></span> 27&nbsp;sec.&nbsp;ago</span>
	</li>
		<li>
		<a href="/community/show/kickass-upload-day-1st-february-2015-official-relase-thread-thread-95760/?unread=16122932">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				KickAss Upload Day (1st February, 2015): Official Relase thread :-)
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/Baze_Goran/">Baze_Goran</a></span></span> 32&nbsp;sec.&nbsp;ago</span>
	</li>
		<li>
		<a href="/community/show/what-movie-are-you-watching-right-now/?unread=16122926">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				What Movie are you watching right now?
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/8pt9ua/">8pt9ua</a></span></span> 1&nbsp;min.&nbsp;ago</span>
	</li>
		<li>
		<a href="/community/show/what-tv-show-are-you-watching-right-now-v3/?unread=16122924">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				What TV show are you watching right now? V3
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/-Shady-/">-Shady-</a></span></span> 1&nbsp;min.&nbsp;ago</span>
	</li>
		<li>
		<a href="/community/show/mistergaga-s-kindle-books/?unread=16122922">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				MisterGaga&#039;s Kindle Books
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_2"><a class="plain" href="/user/MisterGaga/">MisterGaga</a></span></span> 2&nbsp;min.&nbsp;ago</span>
	</li>
		<li>
		<a href="/community/show/help-me-remember-name-game/?unread=16122920">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Help Me Remember The Name Of This Game
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/MSPainter/">MSPainter</a></span></span> 2&nbsp;min.&nbsp;ago</span>
	</li>
	</ul>
</div><!-- div class="sliderbox" -->

    <div class="sliderbox">
<h3><a href="/blog/">Latest News</a><i style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="latestNews" rel="latestNews" class="showBlockJS">
	<li>
		<a href="/blog/post/merry-christmas/">
			<i class="ka ka16 ka-rss latest-icon"></i>
			<p class="latest-title">
				Merry Christmas!
			</p>
		</a>
		<span class="explanation">by SeedTorrent 1&nbsp;month&nbsp;ago</span>
	</li>
	<li>
		<a href="/blog/post/jessica-sutta-press-release-exclusively-for-kickass/">
			<i class="ka ka16 ka-rss latest-icon"></i>
			<p class="latest-title">
				Jessica Sutta: press release exclusively for Kickass
			</p>
		</a>
		<span class="explanation">by SeedTorrent 2&nbsp;months&nbsp;ago</span>
	</li>
	<li>
		<a href="/blog/post/login-news/">
			<i class="ka ka16 ka-rss latest-icon"></i>
			<p class="latest-title">
				Login news
			</p>
		</a>
		<span class="explanation">by SeedTorrent 2&nbsp;months&nbsp;ago</span>
	</li>
</ul>
</div><!-- div class="sliderbox" -->
<div class="sliderbox">
<h3>Blogroll<i style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="blogroll" rel="blogroll" class="showBlockJS">
	<li><a href="/blog/VTS/post/loading-up-on-uploading/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> Loading Up On Uploading</p></a><span class="explanation">by <a class="plain" href="/user/VTS/">VTS</a> 12&nbsp;hours&nbsp;ago</span></li>
	<li><a href="/blog/PXgamer/post/blog-37-dmca-upload-day-2015/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> Blog 37 / DMCA Upload Day 2015</p></a><span class="explanation">by <a class="plain" href="/user/PXgamer/">PXgamer</a> 18&nbsp;hours&nbsp;ago</span></li>
	<li><a href="/blog/H4ckus/post/thepiratebay-is-back-to-the-bay/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> Thepiratebay is back to the bay!</p></a><span class="explanation">by <a class="plain" href="/user/H4ckus/">H4ckus</a> yesterday</span></li>
	<li><a href="/blog/Mr.Pink/post/time-to-retire/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> Time to Retire</p></a><span class="explanation">by <a class="plain" href="/user/Mr.Pink/">Mr.Pink</a> yesterday</span></li>
	<li><a href="/blog/Ascetic_trip/post/50-top-classic-rock-bands/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> 50 Top Classic Rock Bands</p></a><span class="explanation">by <a class="plain" href="/user/Ascetic_trip/">Ascetic_trip</a> yesterday</span></li>
	<li><a href="/blog/Gr8fulDawg/post/go-hawks/"><i class="ka ka16 ka-comment latest-icon"></i><p class="latest-title"> Go &#039;Hawks</p></a><span class="explanation">by <a class="plain" href="/user/Gr8fulDawg/">Gr8fulDawg</a> yesterday</span></li>
</ul>
</div><!-- div class="sliderbox" -->

    <div class="sliderbox">
<h3>Goodies<i style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="goodies" rel="goodies" class="showBlockJS">

	<li>
		<a target="_blank" rel="external" href="http://addons.mozilla.org/en-US/firefox/addon/11412" target="_blank" rel="external">
			<span class="ifirefox thirdPartIcons"></span>Firefox search plugin
		</a>
	</li>
	<li>
		<a target="_blank" rel="external" href="/content/utorrent.btsearch">
			<span class="iutorrent thirdPartIcons"></span>uTorrent search template
		</a>
	</li>
	<li>
		<a target="_blank" rel="external" href="http://twitter.com/SeedTorrent">
			<span class="ifollow thirdPartIcons"></span>Follow us on Twitter
		</a>
	</li>
	<li>
		<a target="_blank" rel="external" href="/blog/post/30/">
			<span class="ikat thirdPartIcons"></span>Kickass wallpapers
		</a>
	</li>
	<li>
		<a target="_blank" rel="external" href="http://www.facebook.com/official.KAT.fanclub">
			<span class="ifacebook thirdPartIcons"></span>Like us on Facebook
		</a>
	</li>
	<li>
		<a target="_blank" rel="external nofollow" href="http://chat.efnet.org:9090/?channels=%23KAT.ph"><span class="iirc thirdPartIcons"></span>IRC official chat</a>
	</li>
</ul>
</div><!-- div class="sliderbox" -->
    <div class="sliderbox">
<h3>Latest Searches<i style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="latestSearches" rel="latestSearches" class="showBlockJS">
	<li>
		<a href="/search/neva/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				neva
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/the%20next%20three%20days/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				the next three days
			</p>
		</a>
				<span class="explanation">1&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/ava%20taylor%20snatching%20ava/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				ava taylor snatching ava
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/maceo%20plex/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				maceo plex
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/emma%20heart%20720p/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				emma heart 720p
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/all%20growed%20up/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				all growed up
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/baby%20hindi/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				baby hindi
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/cmylmz%202010/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				cmylmz 2010
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/raccoon%20city/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				raccoon city
			</p>
		</a>
				<span class="explanation">11&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/microsoft%20office%202010/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				microsoft office 2010
			</p>
		</a>
				<span class="explanation">1&nbsp;sec.&nbsp;ago</span>
	</li>

	<li>
		<a href="/search/lonely%20cow%20weeps/">
			<i class="ka ka16 ka-zoom latest-icon"></i>
			<p class="latest-title">
				lonely cow weeps
			</p>
		</a>
				<span class="explanation">1&nbsp;sec.&nbsp;ago</span>
	</li>

</ul>
</div><!-- div class="sliderbox" -->
        	<div class="sliderbox">
	<h3>Friends Links<i style="float:right; margin-top:-3px;" class="ka ka16 ka-arrow2-up foldClose"></i></h3>
    <ul id="friendsLinks" rel="friendsLinks" class="showBlockJS">
		
		<li>
			<a href="http://torrents.to/" target="_blank" rel="external">
				<span class="itorrentsto thirdPartIcons"></span>Torrents.to
			</a>
		</li>
		<li>
			<a href="http://www.torrentdownloads.net/" target="_blank" rel="external">
				<span class="itorrentdownloads thirdPartIcons"></span>Torrent Downloads
			</a>
		</li>
		
		<li>
			<a href="http://www.torrentreactor.net/" target="_blank" rel="external">
				<span class="itorreact thirdPartIcons"></span>TorrentReactor
			</a>
		</li>
		

		<li>
			<a href="http://torrent-finder.info/" target="_blank" rel="external">
				<span class="itorrentfinder thirdPartIcons"></span>Torrent Finder
			</a>
		</li>
	</ul>
</div><!-- div class="sliderbox" -->
        
</div>

		</td>
	</tr>
</table>
</div>
    <h3>Select Your Language</h3>
    <div class="textcontent threecolls">
        <div class="firstColl">
            <ul>
                                
                        <li class="current_lang"><a onclick="setLanguage('en', '.kickass.so');return false;" class="plain"><strong>English</strong></a></li>
                                
                        <li><a onclick="setLanguage('af', '.kickass.so');return false;" class="plain">Afrikaans</a></li>
                                
                        <li><a onclick="setLanguage('al', '.kickass.so');return false;" class="plain">Albanian</a></li>
                                
                        <li><a onclick="setLanguage('ar', '.kickass.so');return false;" class="plain">Arabic (Modern)</a></li>
                                
                        <li><a onclick="setLanguage('eu', '.kickass.so');return false;" class="plain">Basque</a></li>
                                
                        <li><a onclick="setLanguage('bn', '.kickass.so');return false;" class="plain">Bengali</a></li>
                                
                        <li><a onclick="setLanguage('bs', '.kickass.so');return false;" class="plain">Bosnian</a></li>
                                
                        <li><a onclick="setLanguage('bg', '.kickass.so');return false;" class="plain">Bulgarian</a></li>
                                
                        <li><a onclick="setLanguage('ch', '.kickass.so');return false;" class="plain">Chinese Simplified</a></li>
                                
                        <li><a onclick="setLanguage('tw', '.kickass.so');return false;" class="plain">Chinese Traditional</a></li>
                                
                        <li><a onclick="setLanguage('hr', '.kickass.so');return false;" class="plain">Croatian</a></li>
                                
                        <li><a onclick="setLanguage('cz', '.kickass.so');return false;" class="plain">Czech</a></li>
                                
                        <li><a onclick="setLanguage('da', '.kickass.so');return false;" class="plain">Danish</a></li>
                                
                        <li><a onclick="setLanguage('nl', '.kickass.so');return false;" class="plain">Dutch</a></li>
                                
                        <li><a onclick="setLanguage('tl', '.kickass.so');return false;" class="plain">Filipino</a></li>
                                
                    </ul>
        </div>
        <div class="secondColl">
            <ul>
                         <li><a onclick="setLanguage('fi', '.kickass.so');return false;" class="plain">Finnish</a></li>
                                
                        <li><a onclick="setLanguage('fr', '.kickass.so');return false;" class="plain">French</a></li>
                                
                        <li><a onclick="setLanguage('ka', '.kickass.so');return false;" class="plain">Georgian</a></li>
                                
                        <li><a onclick="setLanguage('de', '.kickass.so');return false;" class="plain">German</a></li>
                                
                        <li><a onclick="setLanguage('el', '.kickass.so');return false;" class="plain">Greek</a></li>
                                
                        <li><a onclick="setLanguage('hi', '.kickass.so');return false;" class="plain">Hindi</a></li>
                                
                        <li><a onclick="setLanguage('hu', '.kickass.so');return false;" class="plain">Hungarian</a></li>
                                
                        <li><a onclick="setLanguage('id', '.kickass.so');return false;" class="plain">Indonesian</a></li>
                                
                        <li><a onclick="setLanguage('it', '.kickass.so');return false;" class="plain">Italian</a></li>
                                
                        <li><a onclick="setLanguage('kn', '.kickass.so');return false;" class="plain">Kannada</a></li>
                                
                        <li><a onclick="setLanguage('lt', '.kickass.so');return false;" class="plain">Lithuanian</a></li>
                                
                        <li><a onclick="setLanguage('ml', '.kickass.so');return false;" class="plain">Malayalam</a></li>
                                
                        <li><a onclick="setLanguage('ms', '.kickass.so');return false;" class="plain">Malaysian</a></li>
                                
                        <li><a onclick="setLanguage('no', '.kickass.so');return false;" class="plain">Norwegian</a></li>
                                
                        <li><a onclick="setLanguage('pr', '.kickass.so');return false;" class="plain">Pirate</a></li>
                                
                    </ul>
        </div>
        <div class="thirdColl">
            <ul>
                         <li><a onclick="setLanguage('pl', '.kickass.so');return false;" class="plain">Polish</a></li>
                                
                        <li><a onclick="setLanguage('pt', '.kickass.so');return false;" class="plain">Portuguese</a></li>
                                
                        <li><a onclick="setLanguage('pa', '.kickass.so');return false;" class="plain">Punjabi</a></li>
                                
                        <li><a onclick="setLanguage('ro', '.kickass.so');return false;" class="plain">Romanian</a></li>
                                
                        <li><a onclick="setLanguage('ru', '.kickass.so');return false;" class="plain">Russian</a></li>
                                
                        <li><a onclick="setLanguage('sr', '.kickass.so');return false;" class="plain">Serbian</a></li>
                                
                        <li><a onclick="setLanguage('src', '.kickass.so');return false;" class="plain">Serbian-Cyrillic</a></li>
                                
                        <li><a onclick="setLanguage('sk', '.kickass.so');return false;" class="plain">Slovak</a></li>
                                
                        <li><a onclick="setLanguage('es', '.kickass.so');return false;" class="plain">Spanish</a></li>
                                
                        <li><a onclick="setLanguage('sv', '.kickass.so');return false;" class="plain">Swedish</a></li>
                                
                        <li><a onclick="setLanguage('ta', '.kickass.so');return false;" class="plain">Tamil</a></li>
                                
                        <li><a onclick="setLanguage('te', '.kickass.so');return false;" class="plain">Telugu</a></li>
                                
                        <li><a onclick="setLanguage('tr', '.kickass.so');return false;" class="plain">Turkish</a></li>
                                
                        <li><a onclick="setLanguage('uk', '.kickass.so');return false;" class="plain">Ukrainian</a></li>
                                
                        <li><a onclick="setLanguage('vi', '.kickass.so');return false;" class="plain">Vietnamese</a></li>
                            </ul>
        </div>
    </div><!-- div class="textcontent" -->
</div>
</div><!--id="main"-->
</div><!--id="wrap"-->

<footer class="lightgrey">
	<ul>
		<li><a class="plain" href="#translate_site" id="translate_link"><strong>change language</strong></a></li>
		<li><a href="/rules/" class="lower">rules</a></li>
        <li><a href="/ideabox/">idea box</a></li>
		<li class="lower"><a href="/achievements/">Achievements</a></li>
		<li><a href="/trends/">trends</a></li>
		<li class="lower"><a href="/latest-searches/">Latest Searches</a></li>
        <li><a href="/request/">torrent requests</a></li>        	</ul>
	<ul>
		<li><a href="/about/">about</a></li>
		<li><a href="/welcome/">welcome</a></li>
		<li><a href="/privacy/">privacy</a></li>
		<li><a href="/dmca/">dmca</a></li>
        		<li><a href="/logos/">logos</a></li>
				<li><a href="/contacts/">contacts</a></li>
        <li><a href="/api/">api</a></li>
	</ul>
        </footer>
<a class="feedbackButton eventsButtons" href="/issue/create/" id="feedback"><span>Report a bug</span></a>
</body>
</html>
