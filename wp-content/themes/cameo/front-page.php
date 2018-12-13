
<?php get_header();  ?>
<!doctype html>
<html class="no-js" lang="zh-Hant">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>中央研究院</title>
	<meta name="description" content="90週年系列活動">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home/fonts/KozMinPr6N/styles.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home/fonts/Didot-HTF-L96-Light/styles.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home/fonts/source-han-serif-tc/styles.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home/css/main.css">
</head>

<body id="index-page">

	<div id="loading">
		<div class="center">
			<img class="nine" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/loading_9.svg" alt="文字-9-的圖片">
			<img class="zero" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/loading_0.svg" alt="文字-0-的圖片">
			<div class="text didot">Loading</div>
			<div class="dot one"></div>
			<div class="dot two"></div>
			<div class="dot three"></div>
		</div>
	</div>

	<div class="page-transition down light"></div>
	<div class="page-transition down dark"></div>

	<div id="fullpage">
		<div class="section top-section">
			<div class="view human">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/circle-white.svg" alt="白色橢圓形線條圖">
				<img class="gold should-hide should-move" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/circle-gold.svg" alt="金色橢圓形線條圖">
				<h2 class="heading-cht pr6n should-hide">
					<span class="large" lang="zh-Hant">人文</span>
					<span class="small" lang="zh-Hant">與</span>
					<span class="large" lang="zh-Hant">社會</span>
					<br>
					<span class="large" lang="zh-Hant">科學</span>
				</h2>
				<img class="main should-hide should-move-opposite" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/human.png" alt="古文圖片">
				<h2 class="heading-eng didot should-hide">
					<span class="large" lang="en">HUMANITIES </span>
					<span class="small" lang="en">&</span>
					<br>
					<span class="large" lang="en">SOCIAL SCIENCES</span>
				</h2>
			</div>

			<div class="view life">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/square-white.svg" alt="白色方形線條圖">
				<img class="gold should-hide should-move" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/square-gold.svg" alt="金色方形線條圖">
				<h2 class="heading-cht pr6n should-hide">
					<span class="large" lang="zh-Hant">生命</span>
					<br>
					<span class="large" lang="zh-Hant">科學</span>
				</h2>
				<img class="main should-hide should-move-opposite" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/life.png" alt="類似DNA的圖片">
				<h2 class="heading-eng didot should-hide">
					<span class="large" lang="en">LIFE </span>
					<br>
					<span class="large" lang="en">SCIENCES</span>
				</h2>
			</div>

			<div class="view math">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/triangle-white.svg" alt="白色三角形線條圖">
				<img class="gold should-hide should-move" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/triangle-gold.svg" alt="金色三角形線條圖">
				<h2 class="heading-cht pr6n should-hide">
					<span class="large" lang="zh-Hant">數理</span>
					<br>
					<span class="large" lang="zh-Hant">科學</span>
				</h2>
				<img class="main should-hide should-move-opposite" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/math.png" alt="原子圖片">
				<h2 class="heading-eng didot should-hide">
					<span class="large" lang="en">MATHEMATICS </span>
					<span class="small" lang="en">&</span>
					<br>
					<span class="large" lang="en">PHYSICAL SCIENCES</span>
				</h2>
			</div>

			<div class="view human holder">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/circle-white.svg" alt="白色橢圓形線條圖">
			</div>
			<div class="view life holder">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/square-white.svg" alt="白色方形線條圖">
			</div>
			<div class="view math holder">
				<img class="white" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/triangle-white.svg" alt="白色三角形線條圖">
			</div>

			<nav class="nav prev" tabindex="1" title="上一個畫面">
				<div class="arrow-line"></div>
				<div class="arrow-tip-top"></div>
				<div class="arrow-tip-bot"></div>
				<div class="title-cht pr6n math" lang="zh-Hant">數理科學</div>
				<div class="title-eng didot math">
					<div class="line1" lang="en">MATHEMATICS &</div>
					<div class="line2" lang="en">PHYSICAL SCIENCES</div>
				</div>
				<div class="title-cht pr6n human" lang="zh-Hant">人文與社會科學</div>
				<div class="title-eng didot human">
					<div class="line1" lang="en">HUMANITIES &</div>
					<div class="line2" lang="en">SOCIAL SCIENCES</div>
				</div>
				<div class="title-cht pr6n life" lang="zh-Hant">生命科學</div>
				<div class="title-eng didot life">
					<div class="line1" lang="en">LIFE</div>
					<div class="line2" lang="en">SCIENCES</div>
				</div>
			</nav>

			<nav class="nav next" tabindex="2" title="下一個畫面">
				<div class="arrow-line"></div>
				<div class="arrow-tip-top"></div>
				<div class="arrow-tip-bot"></div>
				<div class="title-cht pr6n math" lang="zh-Hant">數理科學</div>
				<div class="title-eng didot math">
					<div class="line1" lang="en">MATHEMATICS &</div>
					<div class="line2" lang="en">PHYSICAL SCIENCES</div>
				</div>
				<div class="title-cht pr6n human" lang="zh-Hant">人文與社會科學</div>
				<div class="title-eng didot human">
					<div class="line1" lang="en">HUMANITIES &</div>
					<div class="line2" lang="en">SOCIAL SCIENCES</div>
				</div>
				<div class="title-cht pr6n life" lang="zh-Hant">生命科學</div>
				<div class="title-eng didot life">
					<div class="line1" lang="en">LIFE</div>
					<div class="line2" lang="en">SCIENCES</div>
				</div>
			</nav>

			<nav class="nav-down" tabindex="3" title="看更多內容">
				<div class="arrow-line"></div>
				<div class="arrow-tip-left"></div>
				<div class="arrow-tip-right"></div>
				<div class="text didot">READ MORE</div>
			</nav>
		</div>

		<div class="section bot-section han fp-auto-height">
			<!-- <div class='bot-links'>
				<div class='link human active' data-tab='human'>人文與社會科學</div>
				<div class='link life' data-tab='life'>生命科學</div>
				<div class='link math' data-tab='math'>數理科學</div>
			</div> -->
			<div class='bot-navs'>
				<nav class="nav prev" tabindex="1" title="上一個畫面">
					<div class="arrow-line"></div>
					<div class="arrow-tip-top"></div>
					<div class="arrow-tip-bot"></div>
					<div class="title-cht pr6n math" lang="zh-Hant">數理科學</div>
					<div class="title-eng didot math">
						<div class="line1" lang="en">MATHEMATICS &</div>
						<div class="line2" lang="en">PHYSICAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n human" lang="zh-Hant">人文與社會科學</div>
					<div class="title-eng didot human">
						<div class="line1" lang="en">HUMANITIES &</div>
						<div class="line2" lang="en">SOCIAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n life" lang="zh-Hant">生命科學</div>
					<div class="title-eng didot life">
						<div class="line1" lang="en">LIFE</div>
						<div class="line2" lang="en">SCIENCES</div>
					</div>
				</nav>

				<div class="nav-inactive">
					<div class="arrow-line"></div>
					<div class="title-cht pr6n math" lang="zh-Hant">數理科學</div>
					<div class="title-eng didot math">
						<div class="line1" lang="en">MATHEMATICS &</div>
						<div class="line2" lang="en">PHYSICAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n human" lang="zh-Hant">人文與社會科學</div>
					<div class="title-eng didot human">
						<div class="line1" lang="en">HUMANITIES &</div>
						<div class="line2" lang="en">SOCIAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n life" lang="zh-Hant">生命科學</div>
					<div class="title-eng didot life">
						<div class="line1" lang="en">LIFE</div>
						<div class="line2" lang="en">SCIENCES</div>
					</div>
				</div>
	
				<nav class="nav next" tabindex="2" title="下一個畫面">
					<div class="arrow-line"></div>
					<div class="arrow-tip-top"></div>
					<div class="arrow-tip-bot"></div>
					<div class="title-cht pr6n math" lang="zh-Hant">數理科學</div>
					<div class="title-eng didot math">
						<div class="line1" lang="en">MATHEMATICS &</div>
						<div class="line2" lang="en">PHYSICAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n human" lang="zh-Hant">人文與社會科學</div>
					<div class="title-eng didot human">
						<div class="line1" lang="en">HUMANITIES &</div>
						<div class="line2" lang="en">SOCIAL SCIENCES</div>
					</div>
					<div class="title-cht pr6n life" lang="zh-Hant">生命科學</div>
					<div class="title-eng didot life">
						<div class="line1" lang="en">LIFE</div>
						<div class="line2" lang="en">SCIENCES</div>
					</div>
				</nav>
			</div>
			<section class="wrap human active">
				<nav class="nav-panel">
					<ul>
						<li tabindex="100" class="item active" data-tab='human01'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">歷史語言研究所</div>
							<div class="eng" lang="en">Institute of History and Philology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human02'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">民族學研究所</div>
							<div class="eng" lang="en">Institute of Ethnology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human03'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">近代史研究所</div>
							<div class="eng" lang="en">Institute of Modern History</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human04'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">經濟研究所</div>
							<div class="eng" lang="en">Institute of Economics</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human05'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">歐美研究所</div>
							<div class="eng" lang="en">Institute of European and American Studies</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human06'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">社會學研究所</div>
							<div class="eng" lang="en">Institute of Sociology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human07'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">中國文哲研究所</div>
							<div class="eng" lang="en">Institute of Chinese Literature and Philosophy</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human08'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">臺灣史研究所</div>
							<div class="eng" lang="en">Institute of Taiwan History</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human09'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">語言學研究所</div>
							<div class="eng" lang="en">Institute of Linguistics</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human10'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">法律學研究所</div>
							<div class="eng" lang="en">Institutum Iurisprudentiae</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human11'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">政治學研究所</div>
							<div class="eng" lang="en">Institute of Political Science</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='human12'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">人文社會科學研究中心</div>
							<div class="eng" lang="en">Research Center for Humanities and Social Sciences</div>
							<div class="line bot"></div>
						</li>
					</ul>
				</nav>

				<div class="tab-panel">
					<img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/back.svg" alt="回上一頁">
					<div class="tab active human01">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www2.ihp.sinica.edu.tw" target="_blank">歷史語言研究所</a></h3>
							<p class="content" lang="zh-Hant">為一多學科整合之研究所，目前研究領域涵蓋歷史學、考古學、人類學及文字學，個人研究與集體研究並重，除了深化既有領域，並開拓新興課題，同時積極整理出版所藏史料，開發研究工具，持續為學術社群做出貢獻。現有研究人員約45名。</p>
							<div class="phone">886-2-2782-9555</div>
							<a href="http://www2.ihp.sinica.edu.tw" target="_blank" class="website">www2.ihp.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www2.ihp.sinica.edu.tw" target="_blank">Institute of History and Philology</a></h3>
							<p class="content" lang="en">Researchers at the Institute of History and Philology conduct interdisciplinary research in history, archaeology,
								anthropology, and philology. Equal emphasis is placed on the pursuit of individual research and scholarly collaboration.
								In addition to deepening research in established areas, the IHP seeks to pioneer research in emerging areas of study.
								It also contributes to scholarship by actively engaging in the publication of, and establishment of databases for,
								historical documents and artifacts. Currently there are about 45 research fellows at the IHP.</p>
							<div class="phone">886-2-2782-9555</div>
							<a href="http://www2.ihp.sinica.edu.tw" target="_blank" class="website">www2.ihp.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human02">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ioe.sinica.edu.tw" target="_blank">民族學研究所</a></h3>
							<p class="content" lang="zh-Hant">為臺灣文化人類學研究的重鎮，對文化的獨特性與普同性有深入的理解與詮釋，並致力於理論的突破與學術的實踐。目前主要研究取向涵蓋：臺灣原住民族研究，漢人社區與宗教文化研究，中國少數民族、東亞、東南亞及太平洋地域的族群文化研究，文化與心理行為研究、醫療與身體經驗研究，文化展演研究，經濟、生態與環境研究。現有研究人員約28名。</p>
							<div class="phone">886-2-2652-3300</div>
							<a href="http://www.ioe.sinica.edu.tw" target="_blank" class="website">www.ioe.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ioe.sinica.edu.tw" target="_blank">Institute of Ethnology</a></h3>
							<p class="content" lang="en">The Institute is considered one of Taiwan’s leading centers for research into cultural anthropology. Research in the
								Institute covers a wide range of fields, including: Indigenous Austronesian people in Taiwan; Han Chinese communities
								and religious culture; ethnic minorities of China; cultural studies of ethnic groups throughout East Asia, Southeast
								Asia and Oceania; culture and psychology of behavior; medical anthropology and body experience; cultural performance;
								and the research related to the economy, ecology and environment of ethnic groups. Currently there are about 28 research
								fellows at the Institute. </p>
							<div class="phone">886-2-2652-3300</div>
							<a href="http://www.ioe.sinica.edu.tw" target="_blank" class="website">www.ioe.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human03">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.mh.sinica.edu.tw" target="_blank">近代史研究所</a></h3>
							<p class="content" lang="zh-Hant">研究範圍為近現代中國在政治、軍事、外交、社會、經濟、文化、思想等各方面的變遷，尤其著重探討現代性(modernity)的形成。除了秉持歷來史學研究的良好傳統與基礎之外，更加強對當代社會、人文與世界的關懷。現有研究人員約31名。</p>
							<div class="phone">886-2-2782-4166</div>
							<a href="http://www.mh.sinica.edu.tw" target="_blank" class="website">www.mh.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.mh.sinica.edu.tw" target="_blank">Institute of Modern History</a></h3>
							<p class="content" lang="en">The Institute of Modern History conducts historical research on the political, military, diplomatic, social, economic,
								cultural and intellectual transformations of modern China, with special focus on the formation of “modernity” in
								China. In addition to undertaking historical inquiry based on firm scholarly foundations and refined traditions,
								the Institute also aims to strengthen its concern for contemporary society, civilization and the world. There are
								currently approximately 31 researchers at this Institute.</p>
							<div class="phone">886-2-2782-4166</div>
							<a href="http://www.mh.sinica.edu.tw" target="_blank" class="website">www.mh.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human04">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.econ.sinica.edu.tw" target="_blank">經濟研究所</a></h3>
							<p class="content" lang="zh-Hant">自創所以來即以基礎學術研究為導向，並重視與臺灣相關之政策研究與分析。研究內容遍及經濟學中所有領域，研究人員亦積極參與，以解決本土經濟問題為主的政策性研究計畫及研討會，用嚴謹的學理來分析當今國內外經濟問題，並提供預測及政府相關經濟政策之建言。現有研究人員約30位。</p>
							<div class="phone">886-2-2782-2791</div>
							<a href="http://www.econ.sinica.edu.tw" target="_blank" class="website">www.econ.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.econ.sinica.edu.tw" target="_blank">Institute of Economics</a></h3>
							<p class="content" lang="en">Since its inception, the Institute of Economics has conducted in-depth, fundamental research into economic theory
								and its applications. Research at the Institute covers all fields of economics, with particular emphasis on analytical
								research into Taiwan’s economic policies. Researchers actively participate in policy-related research projects and
								seminars related to economic issues in Taiwan. Using rigorous methods of inquiry to analyze domestic and international
								economic issues, the Institute also regularly releases economic forecasts on Taiwan and offers policy recommendations
								to the government for deliberation. There are currently about 30 research fellows at the Institute.</p>
							<div class="phone">886-2-2782-2791</div>
							<a href="http://www.econ.sinica.edu.tw" target="_blank" class="website">www.econ.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human05">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ea.sinica.edu.tw" target="_blank">歐美研究所</a></h3>
							<p class="content" lang="zh-Hant">是以西方國家做為研究標的、最具國際化色彩、跨領域與多學門集體合作研究特色的區域研究所。研究重點包括：文化研究、美臺中關係、歐美哲學、歐盟與歐美社會發展政策等。除出版專書、季刊外，並設有公共政策論壇學術網站研究平台。現有研究人員約23位。</p>
							<div class="phone">886-2-2789-9390</div>
							<a href="http://www.ea.sinica.edu.tw" target="_blank" class="website">www.ea.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ea.sinica.edu.tw" target="_blank">Institute of European and American Studies</a></h3>
							<p class="content" lang="en">With the study of Western countries’ legal systems and cultures as its main research objective, the Institute of European
								and American Studies adopts a global outlook to promote collaborative cross-disciplinary and multi-disciplinary research
								into a range of fields. Key research areas of the Institute include: Cultural Studies, U.S.-Taiwan-China Relations,
								Trends in Contemporary Western Philosophy, European Union Studies, and Social Development and Policy in the US and
								Europe. In addition to publishing monographs and a quarterly journal, the Institute has established an Internet forum
								for public policy and academic research. At present, the Institute has approximately 23 researchers.</p>
							<div class="phone">886-2-2789-9390</div>
							<a href="http://www.ea.sinica.edu.tw" target="_blank" class="website">www.ea.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human06">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ios.sinica.edu.tw" target="_blank">社會學研究所</a></h3>
							<p class="content" lang="zh-Hant">在臺灣的經濟活動、政治生活、家庭與生命史，以及社會網絡上，社會學研究所累積了重要的研究成果，特別是臺灣資本主義的發展、臺灣現代國家的主觀與客觀面向、家庭結構變遷與青少年生命史、社會網絡中的聯繫與接觸等。本所並將臺灣社會安置在東亞中，進行比較與區域研究，藉以凸顯臺灣社會的特殊與普同的面向。本所以掌握臺灣社會的關鍵議題，並透過紮實與原創的研究將之提煉為社會學的基本議題為努力的目標。</p>
							<div class="phone">886-2-2652-5100</div>
							<a href="http://www.ios.sinica.edu.tw" target="_blank" class="website">www.ios.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ios.sinica.edu.tw" target="_blank">Institute of Sociology</a></h3>
							<p class="content" lang="en">Institute of Sociology has made important contributions to the economy, the politics, the family and life cycle, and
								the social network of the Taiwanese society, such as the capitalist development of Taiwan, the subjective and objective
								aspects of the Taiwanese state, the change of family structure and the life cycles of the youth, the link and the
								contact within social networks. Situating Taiwan within East Asia, Institute of Sociology also conducts research
								from a comparative and regional perspective, aiming to highlight the unique and the common features of the Taiwanese
								society. Institute of Sociology sets as its goals grasping the crucial issues of the Taiwanese society and further
								establishing them through solid and original research as the fundamental agenda of sociology.</p>
							<div class="phone">886-2-2652-5100</div>
							<a href="http://www.ios.sinica.edu.tw" target="_blank" class="website">www.ios.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human07">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.litphil.sinica.edu.tw" target="_blank">中國文哲研究所</a></h3>
							<p class="content" lang="zh-Hant">以古典文學、近現代文學、中國哲學、比較哲學、經學文獻為5大研究領域，目前的研究項目為：明清文學、文學與宗教、華文文學、跨文化哲學、東亞儒學、經學史及東亞經學等，近年的研究主軸是近代東亞與世界的文學及思想交流。現有研究人員約28名。</p>
							<div class="phone">886-2-2788-3620</div>
							<a href="http://www.litphil.sinica.edu.tw" target="_blank" class="website">www.litphil.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.litphil.sinica.edu.tw" target="_blank">Institute of Chinese Literature and Philosophy</a></h3>
							<p class="content" lang="en">Scholars at the ICLP focus their research on five main areas, including classical Chinese literature, modern Chinese
								literature, Chinese philosophy, comparative philosophy, and the Chinese classics. Current research projects focus
								on Ming-Qing Literature, Literature and Religion, Sinophone Literature, Cross-cultural Philosophy, Confucianism across
								East Asia, History of the Chinese Classics, and the Study of Classics in East Asia. Research in recent years has
								focused on literary and intellectual exchanges between modern East Asia and the world. At present, there are about
								28 researchers at this Institute. </p>
							<div class="phone">886-2-2788-3620</div>
							<a href="http://www.litphil.sinica.edu.tw" target="_blank" class="website">www.litphil.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human08">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ith.sinica.edu.tw" target="_blank">臺灣史研究所</a></h3>
							<p class="content" lang="zh-Hant">主要研究大航海時代以來臺灣在東亞及世界歷史上的發展歷程，分別從政治體制、社會經濟、文化思想、族群歷史、環境變遷等多重視角，研究分析臺灣的歷史定位。現有研究人員20名。</p>
							<div class="phone">886-2-2652-5350</div>
							<a href="http://www.ith.sinica.edu.tw" target="_blank" class="website">www.ith.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ith.sinica.edu.tw" target="_blank">Institute of Taiwan History</a></h3>
							<p class="content" lang="en">The Institute of Taiwan History’s main research efforts focus on the historical development of Taiwan in East Asia
								and throughout world history, since the early Age of Exploration. Delving into the study of Taiwan’s historical significance
								by adopting multi-dimensional perspectives, the Institute explores Taiwan’s development from the vantage points of
								political systems, socioeconomic developments, cultural thought, ethnic history, and environmental transformations.
								The Institute currently has 20 research fellows.</p>
							<div class="phone">886-2-2652-5350</div>
							<a href="http://www.ith.sinica.edu.tw" target="_blank" class="website">www.ith.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human09">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ling.sinica.edu.tw" target="_blank">語言學研究所</a></h3>
							<p class="content" lang="zh-Hant">以科學為宗旨從事人類語言研究，長期致力於語言學核心研究，含句法、音韻、語意、語音各項結構性的理論分析，並同時兼及語言計算模擬、認知語言探討、臺灣本土與鄰近相關語言之結構與類型研究、跨學科研究及語言典藏。現有研究人員約18名。</p>
							<div class="phone">886-2-2652-5000</div>
							<a href="http://www.ling.sinica.edu.tw" target="_blank" class="website">www.ling.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ling.sinica.edu.tw" target="_blank">Institute of Linguistics</a></h3>
							<p class="content" lang="en">The overall objective of the Institute is to achieve scientific and systematic knowledge about human language by conducting
								linguistic as well as interdisciplinary research on the languages of Taiwan and genetically and geographically-related
								languages. Important contributions have been made especially in fundamental linguistic analyses, linguistic computation
								and simulation, language archiving, and cross-discipline studies. Currently there are approximately 18 research fellows
								at the Institute.</p>
							<div class="phone">886-2-2652-5000</div>
							<a href="http://www.ling.sinica.edu.tw" target="_blank" class="website">www.ling.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human10">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.iias.sinica.edu.tw" target="_blank">法律學研究所</a></h3>
							<p class="content">2011年正式成立，以「（1）憲政體制與人權保障、（2）行政管制與行政爭訟、（3）科技發展與法律規範、（4）法律思想與社會變遷、（5）大陸與港澳法律發展、（6）司法制度、司法行為與立法學」六大重點研究領域為發展方向，期能為我國法學研究樹立典範，促進民主法治的實踐。現有研究人員約18名。</p>
							<div class="phone">886-2-2652-5400</div>
							<a href="http://www.iias.sinica.edu.tw" target="_blank" class="website">www.iias.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.iias.sinica.edu.tw" target="_blank">Institutum Iurisprudentiae</a></h3>
							<p class="content" lang="en">The Institutum Iurisprudentiae was founded in 2011. The six core research fields at the Institute are: 1) constitutional
								structure and human rights protection 2) administrative regulation and judicial remedies 3) law, science, and technology
								4) legal thought and social change 5) legal development in China, Hong Kong and Macau 6) judiciary system, judicial
								behavior and legislative studies. The Institute aims to serve as a model of excellence for legal studies in Taiwan,
								and spur the implementation of democracy and rule of law. Currently there are 18 research fellows at this Institute.</p>
							<div class="phone">886-2-2652-5400</div>
							<a href="http://www.iias.sinica.edu.tw" target="_blank" class="website">www.iias.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human11">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ipsas.sinica.edu.tw" target="_blank">政治學研究所</a></h3>
							<p class="content" lang="zh-Hant">研究方向為「以理論為導向、以區域為基礎的比較政治與國際關係研究」。在這個總體架構之下設立了5大研究群組：臺灣政治與新興民主國家、中國大陸與社會主義政經轉型、兩岸關係與國際關係理論、東亞政治價值變遷與全球民主發展、政治學研究方法。現有研究人員約14名。</p>
							<div class="phone">886-2-2652-5300</div>
							<a href="http://www.ipsas.sinica.edu.tw" target="_blank" class="website">www.ipsas.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ipsas.sinica.edu.tw" target="_blank">Institute of Political Science</a></h3>
							<p class="content" lang="en">The Institute of Political Science has set as its overall research agenda “theory-oriented, area-based comparative politics and international relations studies.” Five research groups have been established to reach this overall goal. These include: Taiwan politics and nascent democracies; Political and economic transitions in Mainland China and post-socialist countries; Cross-Strait relations and international relations theory; Political value change in East Asia and global democratic development; Methodology. Currently there are about 14 research fellows at the Institute.</p>
							<div class="phone">886-2-2652-5300</div>
							<a href="http://www.ipsas.sinica.edu.tw" target="_blank" class="website">www.ipsas.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab human12">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.rchss.sinica.edu.tw" target="_blank">人文社會科學研究中心</a></h3>
							<p class="content" lang="zh-Hant">研究特色乃是跨領域研究，目前包含5個專題中心：政治思想研究專題中心、制度與行為研究專題中心、亞太區域研究專題中心、調查研究專題中心，及地理資訊科學研究專題中心。現有研究人員21名。</p>
							<div class="phone">886-2-2782-1693</div>
							<a href="http://www.rchss.sinica.edu.tw" target="_blank" class="website">www.rchss.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.rchss.sinica.edu.tw" target="_blank">Research Center for Humanities and Social Sciences</a></h3>
							<p class="content" lang="en">The Research Center for Humanities and Social Sciences (RCHSS) is currently Academia Sinica’s only research center in the social sciences and humanities, fostering interdisciplinary research. The Center consists of five thematic research centers, including the Center for Political Thought, Center for Institution and Behavior Studies (CIBS), Center for Asia-Pacific Area Studies (CAPAS), Center for Survey Research (CSR) and Center for Geographic Information Science (GIS). There are 21 research fellows at this Center.</p>
							<div class="phone">886-2-2782-1693</div>
							<a href="http://www.rchss.sinica.edu.tw" target="_blank" class="website">www.rchss.sinica.edu.tw</a>
						</div>
					</div>
				</div>
			</section>

			<section class="wrap life">
				<nav class="nav-panel">
					<ul>
						<li tabindex="100" class="item active" data-tab='life01'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">植物暨微生物學研究所</div>
							<div class="eng" lang="en">Institute of Plant and Microbial Biology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life02'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">細胞與個體生物學研究所</div>
							<div class="eng" lang="en">Institute of Cellular and Organismic Biology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life03'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">生物化學研究所</div>
							<div class="eng" lang="en">Institute of Biological Chemistry</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life04'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">生物醫學科學研究所</div>
							<div class="eng" lang="en">Institute of Biomedical Sciences</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life05'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">分子生物研究所</div>
							<div class="eng" lang="en">Institute of Molecular Biology</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life06'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">基因體研究中心</div>
							<div class="eng" lang="en">Genomics Research Center</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life07'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">生物多樣性研究中心</div>
							<div class="eng" lang="en">Biodiversity Research Center</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='life08'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">農業生物科技研究中心</div>
							<div class="eng" lang="en">Agricultural Biotechnology Research Center</div>
							<div class="line bot"></div>
						</li>
					</ul>
				</nav>

				<div class="tab-panel">
					<img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/back.svg" alt="回上一頁">
					<div class="tab active life01">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://ipmb.sinica.edu.tw" target="_blank">植物暨微生物學研究所</a></h3>
							<p class="content" lang="zh-Hant">從事植物學與植物相關之微生物學的基礎研究，並研發以植物及微生物為主體之農業生物科技。重點研究主軸包括：一、植物功能性分子機制研究；二、植物、微生物與環境之交互作用機制分析。現有助研究員以上研究人員28位。</p>
							<div class="phone">886-2-2789-9590</div>
							<a href="http://ipmb.sinica.edu.tw" target="_blank" class="website">ipmb.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://ipmb.sinica.edu.tw" target="_blank">Institute of Plant and Microbial Biology</a></h3>
							<p class="content" lang="en">The IPMB presently has 28 principal investigators (at the level of assistant research fellow or above) undertaking
								basic research in plant and plant-related microbial biology, and development of agricultural biotechnology. The Center’s
								research focuses on two major areas: mechanisms of plant functioning and plant–microbial interactions.</p>
							<div class="phone">886-2-2789-9590</div>
							<a href="http://ipmb.sinica.edu.tw" target="_blank" class="website">ipmb.sinica.edu.tw</a>
						</div>
					</div>

					<div class="tab life02">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.icob.sinica.edu.tw" target="_blank">細胞與個體生物學研究所</a></h3>
							<p class="content" lang="zh-Hant">研究領域著重在不同個體生物成長、發育與演化的過程、細胞間的交互作用，以及個體生物面對環境變遷的適應行為。目前研究重點：細胞功能障礙，生態、演化及發育，海洋生物與科技，神經科學， 幹細胞與再生生物學。現有研究人員22名。</p>
							<div class="phone">886-2-2789-9515</div>
							<a href="http://www.icob.sinica.edu.tw" target="_blank" class="website">www.icob.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.icob.sinica.edu.tw" target="_blank">Institute of Cellular and Organismic Biology</a></h3>
							<p class="content" lang="en">The overall focus of the Institute of Cellular and Organismic Biology is to investigate the basic mechanisms by which
								cellular function and cell-cell interactions can coordinate the growth and development of an organism, and their
								adaptation to an ever-changing environment. At present, there are 22 research fellows pursuing five research directions
								at ICOB: cellular dysfunction, ecology, evolution and development, marine biology and biotechnology, neuroscience,
								stem cell and regenerative biology. </p>
							<div class="phone">886-2-2789-9515</div>
							<a href="http://www.icob.sinica.edu.tw" target="_blank" class="website">www.icob.sinica.edu.tw</a>
						</div>
					</div>

					<div class="tab life03">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ibc.sinica.edu.tw" target="_blank">生物化學研究所</a></h3>
							<p class="content" lang="zh-Hant">研究聚焦在下列4項主題：膜蛋白結構與修飾之生化機制、細胞自噬的調控機制與疾病、結構生物學，和以結構為基礎之蛋白質功能研究及藥物研發。於南港院區和臺大校總區各有一棟研究大樓，自創所以來與臺大生化科學研究所一直有密切合作關係，共享研究生教學與研究資源。現有研究人員約23名。</p>
							<div class="phone">886-2-2785-5696</div>
							<a href="http://www.ibc.sinica.edu.tw" target="_blank" class="website">www.ibc.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ibc.sinica.edu.tw" target="_blank">Institute of Biological Chemistry</a></h3>
							<p class="content" lang="en">The IBC's research covers four themes: Membrane protein structures and modifications, autophagy regulation and diseases, structural biology, and structure-based study of protein functions and drug discovery. The IBC laboratories are housed in two research facilities located on the Academia Sinica and National Taiwan University (NTU) main campuses. Over the years, the IBC has benefited from a long-term collaborative relationship with the NTU Institute of Biochemical Sciences in the sharing of teaching, research and resources. The Institute currently has a team of about 23 research fellows.</p>
							<div class="phone">886-2-2785-5696</div>
							<a href="http://www.ibc.sinica.edu.tw" target="_blank" class="website">www.ibc.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab life04">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.ibms.sinica.edu.tw" target="_blank">生物醫學科學研究所</a></h3>
							<p class="content" lang="zh-Hant">以研究人類疾病為主，研究人員依專長分為6個研究組：流行病學與遺傳學、神經科學、心臟血管、感染疾病與免疫學、癌症，以及結構生物學。研究與臨床醫學並進，以增進及充實各種疾病診斷、治療及預防之方法與技能。現有研究人員約48名。</p>
							<div class="phone">886-2-2789-9000</div>
							<a href="http://www.ibms.sinica.edu.tw" target="_blank" class="website">www.ibms.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.ibms.sinica.edu.tw" target="_blank">Institute of Biomedical Sciences</a></h3>
							<p class="content" lang="en">Based on the research activities, our principle investigators can be divided into 6 areas: Epidemiology & Genetics
								Division, Neuroscience Division, Cardiovascular Research Division, Infectious Disease & Immunology Division, Cancer
								Division, and Structural Biology Division. The aim of the IBMS is to advance diagnostic, therapeutic, and preventive
								measures for major diseases. There are currently about 48 research fellows at this Institute.</p>
							<div class="phone">886-2-2789-9000</div>
							<a href="http://www.ibms.sinica.edu.tw" target="_blank" class="website">www.ibms.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab life05">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.imb.sinica.edu.tw" target="_blank">分子生物研究所</a></h3>
							<p class="content" lang="zh-Hant">分子生物學是以化學及物理學為基礎，利用分子生物及細胞生物相關技術來探討各種生物問題。研究主題包含染色體與核酸之細胞功能與機制、大分子結構、感染與免疫、植物生理調控、發育生物學、神經科學及系統生物學等相關研究，研究水準接近歐美類似單位。現有研究人員約37名。</p>
							<div class="phone">886-2-2789-9222</div>
							<a href="http://www.imb.sinica.edu.tw" target="_blank" class="website">www.imb.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.imb.sinica.edu.tw" target="_blank">Institute of Molecular Biology</a></h3>
							<p class="content" lang="en">Researchers at the Institute of Molecular Biology use cellular and molecular biology as a foundation to elucidate
								functions and interactions between cellular systems. At the IMB, research areas include chromosome biology, developmental
								biology, infection and immunobiology, neuroscience, plant biology, RNA biology, structural biology and systems biology.
								There are now approximately 37 research fellows at this Institute.</p>
							<div class="phone">886-2-2789-9222</div>
							<a href="http://www.imb.sinica.edu.tw" target="_blank" class="website">www.imb.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab life06">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.genomics.sinica.edu.tw" target="_blank">基因體研究中心</a></h3>
							<p class="content">於2003年成立，近期積極針對國人重要疾病之防治，透過跨領域研究，發展高靈敏度的研究平台和儀器，分析人類疾病與微生物基因體、蛋白質體及醣體學結構與功能。主要研究課題如下：化學生物學研究、醫學生物學研究、物理與資訊基因體學研究。現有研究人員約24名。</p>
							<div class="phone">886-2-2789-9930</div>
							<a href="http://www.genomics.sinica.edu.tw" target="_blank" class="website">www.genomics.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.genomics.sinica.edu.tw" target="_blank">Genomics Research Center</a></h3>
							<p class="content" lang="en">Established in 2003, researchers at the GRC adopt interdisciplinary approaches to conduct research in microbial genomics,
								proteogenomics, glycoproteomics associated with diseases. The Center then translates these discoveries into diagnostic
								and therapeutic tools and biomedical devices for disease prevention and treatment. To achieve these aims, the GRC
								houses three major research centers: Chemical Biology, Medical Biology, and Physical and Computational Genomics.
								At present, there are about 24 research fellows at the GRC.</p>
							<div class="phone">886-2-2789-9930</div>
							<a href="http://www.genomics.sinica.edu.tw" target="_blank" class="website">www.genomics.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab life07">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.biodiv.sinica.edu.tw" target="_blank">生物多樣性研究中心</a></h3>
							<p class="content" lang="zh-Hant">重點研究方向分成4大學門：海洋生物多樣性與生態系研究、陸域生物多樣性與生態系研究、演化遺傳與基因體研究、微生物多樣性與生物資訊。另設有「系統分類及生物多樣性資訊」專題中心、生物多樣性研究博物館、新世代基因體定序核心實驗室、鴛鴦湖工作站與綠島海洋研究站。現有助研究員以上研究人員18名。</p>
							<div class="phone">886-2-2789-9621</div>
							<a href="http://www.biodiv.sinica.edu.tw" target="_blank" class="website">www.biodiv.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.biodiv.sinica.edu.tw" target="_blank">Biodiversity Research Center</a></h3>
							<p class="content" lang="en">There are 18 research fellows (at the level of assistant research fellow or higher) in four major research divisions
								in the Center, namely, 1) Marine Biodiversity and Ecosystems, 2) Terrestrial Biodiversity and Ecosystems, 3) Evolutionary
								Genetics and Genomics, and 4) Microbial Diversity and Bioinformatics. The Center also has a thematic center for the
								study of Systematics and Biodiversity Informatics, a Biodiversity Research Museum, a High Throughput Genomics Core,
								a Yuan-Yang Lake Station, and a Marine Station in Green Island.</p>
							<div class="phone">886-2-2789-9621</div>
							<a href="http://www.biodiv.sinica.edu.tw" target="_blank" class="website">www.biodiv.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab life08">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://abrc.sinica.edu.tw" target="_blank">農業生物科技研究中心</a></h3>
							<p class="content" lang="zh-Hant">針對國家所需以及在院方支持下，建立了尖端生物科技研發團隊，目前有4項研究專題：植物逆境、草藥科學、分子疫苗科技、酵素科技，並設置與農業生物科技相關之分子生物、生化、免疫及細胞學等實驗室。現有研究人員約20名。</p>
							<div class="phone">886-2-2651-5910</div>
							<a href="http://abrc.sinica.edu.tw" target="_blank" class="website">abrc.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://abrc.sinica.edu.tw" target="_blank">Agricultural Biotechnology Research Center</a></h3>
							<p class="content" lang="en">To meet Taiwan’s need for the development of agricultural biotechnology, the ABRC has established four hubs to perform
								cutting-edge research in this field, including centers for Integrative Plant Stress Biology, Herbal Medicine, Molecular
								Vaccine, and Enzyme Biotechnology. The ABRC has established laboratories in key areas related to this field, such
								as those for molecular biology, biochemistry, immunology and cellular biology. The Center currently has approximately
								20 research fellows.</p>
							<div class="phone">886-2-2651-5910</div>
							<a href="http://abrc.sinica.edu.tw" target="_blank" class="website">abrc.sinica.edu.tw</a>
						</div>
					</div>
				</div>
			</section>

			<section class="wrap math">
				<nav class="nav-panel">
					<ul>
						<li tabindex="100" class="item active" data-tab='math01'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">數學研究所</div>
							<div class="eng" lang="en">Institute of Mathematics</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math02'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">物理研究所</div>
							<div class="eng" lang="en">Institute of Physics</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math03'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">化學研究所</div>
							<div class="eng" lang="en">Institute of Chemistry</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math04'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">地球科學研究所</div>
							<div class="eng" lang="en">Institute of Earth Sciences</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math05'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">資訊科學研究所</div>
							<div class="eng" lang="en">Institute of Information Science</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math06'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">統計科學研究所</div>
							<div class="eng" lang="en">Institute of Statistical Science</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math07'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">原子與分子科學研究所</div>
							<div class="eng" lang="en">Institute of Atomic and Molecular Sciences</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math08'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">天文及天文物理研究所</div>
							<div class="eng" lang="en">Institute of Astronomy and Astrophysics</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math09'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">應用科學研究中心</div>
							<div class="eng" lang="en">Research Center for Applied Sciences</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math10'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">環境變遷研究中心</div>
							<div class="eng" lang="en">Research Center for Environmental Changes</div>
							<div class="line bot"></div>
						</li>
						<li class="item" data-tab='math11'>
							<div class="line top"></div>
							<div class="cht" lang="zh-Hant">資訊科技創新研究中心</div>
							<div class="eng" lang="en">Research Center for Information Technology Innovation</div>
							<div class="line bot"></div>
						</li>
					</ul>
				</nav>

				<div class="tab-panel">
					<img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/home/img/back.svg" alt="回上一頁">
					<div class="tab active math01">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.math.sinica.edu.tw" target="_blank">數學研究所</a></h3>
							<p class="content" lang="zh-Hant">致力推動臺灣數學發展及培養數學研究人才，現有助研究員以上研究人員約22人，專長涵蓋大部分數學重要領域，近年從事的研究主題包括：應用數學與分析、幾何與數學物理、機率論及其應用、數論與代數、組合數學及其應用、計算數學。</p>
							<div class="phone">886-2-2368-5999</div>
							<a href="http://www.math.sinica.edu.tw" target="_blank" class="website">www.math.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.math.sinica.edu.tw" target="_blank">Institute of Mathematics</a></h3>
							<p class="content" lang="en">The Institute of Mathematics is currently comprised of about 22 research fellows (at the level of assistant research
								fellow or higher) dedicated to the advancement of mathematics and nurturing of mathematicians in Taiwan. Their areas
								of specialty cover most important research fields including: Applied Mathematics and Analysis, Geometry and Mathematics
								Physics, Probability Theory and Applications, Number Theory and Algebra, Combinatorial Mathematics and Applications,
								and Computing Mathematics.</p>
							<div class="phone">886-2-2368-5999</div>
							<a href="http://www.math.sinica.edu.tw" target="_blank" class="website">www.math.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math02">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.phys.sinica.edu.tw" target="_blank">物理研究所</a></h3>
							<p class="content" lang="zh-Hant">多年來致力於前瞻物理研究，主要研究方向分為「中高能物理」、「生物動態物理」、「量子材料物理」三大主流，涵蓋的領域有粒子物理與宇宙學、原子核物理、新穎材料、表面與介面物理、生物物理，及流體與非線性物理等，以追求卓越研究、孕育物理基礎科學研究精英為目標。現有研究人員約44名。</p>
							<div class="phone">886-2-2788-0058</div>
							<a href="http://www.phys.sinica.edu.tw" target="_blank" class="website">www.phys.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.phys.sinica.edu.tw" target="_blank">Institute of Physics</a></h3>
							<p class="content" lang="en">For many years, the Institute of Physics, with its 44 faulty-level research fellows, has been pursuing cutting-edge research programs in three main directions: Medium and High Energy Physics, Physics of Active Biological Systems, and Quantum Materials Physics, covering subjects on Particle Physics and Cosmology, Nuclear Physics, Physics of Emergent Materials, Surface and NanoScience Laboratory, Biophysics, and Nonlinear and Fluid Dynamics. We strive to achieve excellence in basic and applied research and to nurture outstanding talents for the future.</p>
							<div class="phone">886-2-2788-0058</div>
							<a href="http://www.phys.sinica.edu.tw" target="_blank" class="website">www.phys.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math03">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.chem.sinica.edu.tw" target="_blank">化學研究所</a></h3>
							<p class="content" lang="zh-Hant">致力於尖端基礎化學學術研究及化學技術在永續材料、永續能源、永續生命上的應用。研究領域可歸納為材料化學、合成化學與化學催化、化學生物學三個重點。研究方向包括有機光電材料、綠色催化、合成方法學、化學探針、致病機制探討等。現有研究人員28名。</p>
							<div class="phone">886-2-2782-1889</div>
							<a href="http://www.chem.sinica.edu.tw" target="_blank" class="website">www.chem.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.chem.sinica.edu.tw" target="_blank">Institute of Chemistry</a></h3>
							<p class="content" lang="en">Researchers at the Institute of Chemistry delve into the development of cutting-edge chemical technology and its practical applications in biomedicine and sustainable science. Currently there are 28 research fellows at the Institute. Research thrusts cover materials chemistry, chemical catalysis and synthesis, and chemical biology. Major topics include organic electronic materials, optoelectronic materials, green catalysis, synthetic methodology, disease mechanism, and chemical probes.</p>
							<div class="phone">886-2-2782-1889</div>
							<a href="http://www.chem.sinica.edu.tw" target="_blank" class="website">www.chem.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math04">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.earth.sinica.edu.tw" target="_blank">地球科學研究所</a></h3>
							<p class="content" lang="zh-Hant">研究方向著重於地球物理、地球化學和地質學之理論與應用研究。當前研究課題包括觀測與理論地震學、岩石學與造山運動、活動大地構造學、同位素地球化學、行星與地球動力學、高壓礦物物理學、地表作用與複合地質災害之跨學科研究等。現有研究人員約26名。</p>
							<div class="phone">886-2-2783-9910</div>
							<a href="http://www.earth.sinica.edu.tw" target="_blank" class="website">www.earth.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.earth.sinica.edu.tw" target="_blank">Institute of Earth Sciences</a></h3>
							<p class="content" lang="en">Researchers at the Institute of Earth Sciences delve into the theoretical and applied aspects of geophysics, geochemistry
								and geology. Current topics include observational and theoretical seismology, petrology and orogeny, active tectonics,
								isotope geochemistry, planetary and global geodynamics, high-pressure mineral physics, surface processes, and inter-disciplinary
								research of complex geohazards. At present, there are about 26 research fellows at the Institute.</p>
							<div class="phone">886-2-2783-9910</div>
							<a href="http://www.earth.sinica.edu.tw" target="_blank" class="website">www.earth.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math05">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.iis.sinica.edu.tw" target="_blank">資訊科學研究所</a></h3>
							<p class="content" lang="zh-Hant">從事資訊科學領域的基礎研究，開發前瞻性之尖端技術，以及發展應用導向之最先進系統。現有約39位研究人員，48位博士後研究學者，將近220位專任之資訊技術人員與研究助理，支援資訊領域之研究與系統之開發。</p>
							<div class="phone">886-2-2788-3799</div>
							<a href="http://www.iis.sinica.edu.tw" target="_blank" class="website">www.iis.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.iis.sinica.edu.tw" target="_blank">Institute of Information Science</a></h3>
							<p class="content" lang="en">This Institute pursues basic research in the field of information science, to develop cutting-edge technologies as
								well as innovative and application-driven information systems. Currently there are 39 research fellows, 48 post-doctoral
								fellows and almost 220 full-time research engineers and research assistants, all dedicated to research in information
								science and systems development. </p>
							<div class="phone">886-2-2788-3799</div>
							<a href="http://www.iis.sinica.edu.tw" target="_blank" class="website">www.iis.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math06">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.stat.sinica.edu.tw" target="_blank">統計科學研究所</a></h3>
							<p class="content" lang="zh-Hant">致力於統計基礎研究與跨領域應用統計研究，研究領域涵蓋：機率論及其應用、數理統計與推論、生物醫學統計、生物資訊、系統生物學與統計遺傳學、功能性腦影像統計分析、財務數學、時間序列、空間及環境統計、實驗設計、統計機器學習、統計圖學與訊息視覺化、社會網絡。現有研究人員約32位。</p>
							<div class="phone">886-2-2783-5611</div>
							<a href="http://www.stat.sinica.edu.tw" target="_blank" class="website">www.stat.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.stat.sinica.edu.tw" target="_blank">Institute of Statistical Science</a></h3>
							<p class="content" lang="en">The Institute conducts basic and interdisciplinary research related to statistics, including probability and its applications,
								mathematical statistics, biomedical statistics, bioinformatics, systems biology and statistical genetics, functional
								brain images, mathematical finance, time series, spatial and environmental statistics, experimental design, statistical
								machine learning, statistical graphics and information visualization and social networks. There are now 32 research
								fellows at the Institute.</p>
							<div class="phone">886-2-2783-5611</div>
							<a href="http://www.stat.sinica.edu.tw" target="_blank" class="website">www.stat.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math07">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.iams.sinica.edu.tw" target="_blank">原子與分子科學研究所</a></h3>
							<p class="content" lang="zh-Hant">以尖端基礎科學為中心，從原子與分子的層次深入探討自然科學的基本現象。目前有4個研究群：化學動態學與光譜、尖端材料與表面科學、生物物理與分析技術、原子物理與光學。現有約26位研究人員，10位合聘研究人員。</p>
							<div class="phone">886-2-2362-0212</div>
							<a href="http://www.iams.sinica.edu.tw" target="_blank" class="website">www.iams.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.iams.sinica.edu.tw" target="_blank">Institute of Atomic and Molecular Sciences</a></h3>
							<p class="content" lang="en">CCentering on ground-breaking basic research in atomic and molecular sciences, researchers at IAMS aim to delve into the physical and chemical processes at the atomic and molecular levels. At present there are four research groups: Chemical Dynamics and Spectroscopy, Advanced Materials and Surface Science, Biophysics and Bio-analytical Technology, Atomic Physics and Optical Science. The Institute currently comprises 26 research fellows and 10 adjunct research fellows.</p>
							<div class="phone">886-2-2362-0212</div>
							<a href="http://www.iams.sinica.edu.tw" target="_blank" class="website">www.iams.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math08">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.asiaa.sinica.edu.tw" target="_blank">天文及天文物理研究所</a></h3>
							<p class="content" lang="zh-Hant">研究主題涵蓋太陽系、行星與恆星形成、星系與宇宙學等領域。大型計畫含：阿塔卡瑪大型毫米及次毫米波陣列、次毫米波陣列、李遠哲陣列、海王星外自動掩星普查、可見光與紅外線儀器研發、理論與計算天文物理、格陵蘭望遠鏡與特長基線干涉儀、東亞天文臺。現有研究人員27名。</p>
							<div class="phone">886-2-3365-2200</div>
							<a href="http://www.asiaa.sinica.edu.tw" target="_blank" class="website">www.asiaa.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.asiaa.sinica.edu.tw" target="_blank">Institute of Astronomy and Astrophysics</a></h3>
							<p class="content" lang="en">Research topics pursued at the ASIAA include solar system studies, star and planet formation, galaxies and cosmology.
								Significant research projects include Atacama Large Millimeter/submillimeter Array (ALMA), The Submillimeter Array
								(SMA), Yuan Tseh Lee Array (YTLA), Transneptunian Automated Occultation Survey (TAOS-2), Optical and Infrared (OIR)
								Instrumentation Program, Theoretical Institute for Advanced Research in Astrophysics (TIARA), Greenland Telescope
								and Submillimeter Very Long Baseline Interferometer (GLT/VLBI), and East Asian Observatory (EAO). There are currently
								27 research fellows at this Institute.</p>
							<div class="phone">886-2-3365-2200</div>
							<a href="http://www.asiaa.sinica.edu.tw" target="_blank" class="website">www.asiaa.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math09">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.rcas.sinica.edu.tw" target="_blank">應用科學研究中心</a></h3>
							<p class="content" lang="zh-Hant">中心任務為進行院內及院外跨領域應用科學研究，旨在運用最尖端、新穎的科學技術，進行跨領域的基礎科學與應用研究。包含三大研究中心，分別為：力學及工程科學專題中心、生醫科學應用專題中心、綠色科技專題中心。現有研究人員25名。</p>
							<div class="phone">886-2-2787-3100</div>
							<a href="http://www.rcas.sinica.edu.tw" target="_blank" class="website">www.rcas.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.rcas.sinica.edu.tw" target="_blank">Research Center for Applied Sciences</a></h3>
							<p class="content" lang="en">The mission of our center is to conduct interdisciplinary applied science research with strong cooperation inside
								and outside the Academia Sinica. We apply the most cutting-edge technology to conduct interdisciplinary research
								in the basic and applied sciences. Currently, there are three thematic centers: Engineering & Mechanics, Bio & Medical
								Application and Green Technology. There are currently 25 research fellows at our center. </p>
							<div class="phone">886-2-2787-3100</div>
							<a href="http://www.rcas.sinica.edu.tw" target="_blank" class="website">www.rcas.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math10">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.rcec.sinica.edu.tw" target="_blank">環境變遷研究中心</a></h3>
							<p class="content" lang="zh-Hant">設立宗旨在了解人類生活環境過去及現在之情況及未來的可能變遷，並尋求最佳調適之途徑。目前研究重點為：大氣物理及化學過程、全球氣候過程及氣候模擬、東亞氣候變遷、大氣懸浮微粒、空氣品質對人類健康之衝擊、海氣交互作用、海洋生物及地球化學循環。現有研究人員約16位。</p>
							<div class="phone">886-2-2653-9885</div>
							<a href="http://www.rcec.sinica.edu.tw" target="_blank" class="website">www.rcec.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.rcec.sinica.edu.tw" target="_blank">Research Center for Environmental Changes</a></h3>
							<p class="content" lang="en">This research center was established to study environmental conditions both past and present, assess possible future
								environmental changes, and seek for optimal adaptation strategies. The research teams in the RCEC focus on studies
								of atmospheric physico-chemical processes, global climate processes and climate model simulation, climate change
								in East Asia, study of atmospheric particulate matters, impact of air quality on human health, air-sea interactions,
								and biogeochemical cycles in the ocean. There are currently 16 research fellows at this Center.</p>
							<div class="phone">886-2-2653-9885</div>
							<a href="http://www.rcec.sinica.edu.tw" target="_blank" class="website">www.rcec.sinica.edu.tw</a>
						</div>
					</div>
					<div class="tab math11">
						<div class="cht">
							<h3 class="title" lang="zh-Hant"><a href="http://www.citi.sinica.edu.tw" target="_blank">資訊科技創新研究中心</a></h3>
							<p class="content" lang="zh-Hant">主要進行以資訊技術為核心的跨領域研究，致力於資訊科學技術在相關領域以及新興議題上之發展與應用，特別著重於跨領域科技之研發與整合，以求對現今知識經濟體系的發展與進步，有提昇之作用。</p>
							<div class="phone">886-2-2787-2300</div>
							<a href="http://www.citi.sinica.edu.tw" target="_blank" class="website">www.citi.sinica.edu.tw</a>
						</div>
						<div class="eng">
							<h3 class="title" lang="en"><a href="http://www.citi.sinica.edu.tw" target="_blank">Research Center for Information Technology Innovation</a></h3>
							<p class="content" lang="en">The CITI pursues multi-disciplinary research in the development of information technology and its applications to emerging fields of study. It aims to realize the development and integration of IT applications into broader interdisciplinary fields, thereby also advancing Taiwan’s knowledge-based economy.</p>
							<div class="phone">886-2-2787-2300</div>
							<a href="http://www.citi.sinica.edu.tw" target="_blank" class="website">www.citi.sinica.edu.tw</a>
						</div>
					</div>
				</div>
			</section>

		 <div class="footer">
				
					<?php get_footer();  ?>
				
			</div> 
		</div>
	</div>




	<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/home/js/jquery-3.2.1.min.js"></script> -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/home/js/jquery.mobile-events.min.js"></script>
	<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/home/js/jquery-migrate-3.0.0.js"></script> -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/home/js/main.js"></script>
</body>

</html>