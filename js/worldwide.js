/* Bayer worldwide v1.0 */
/* for use with bayer onpublix-templates*/






/* jQuery JSONP Core Plugin 2.4.0 (2012-08-21)
 * https://github.com/jaubourg/jquery-jsonp
 * Copyright (c) 2012 Julian Aubourg - MIT License */
(function(f){function d(){}function v(F){c=[F]}function o(H,F,G){return H&&H.apply(F.context||F,G)}function n(F){return/\?/.test(F)?"&":"?"}var p="async",t="charset",r="",D="error",u="insertBefore",s="_jqjsp",A="on",g=A+"click",k=A+D,q=A+"load",y=A+"readystatechange",b="readyState",C="removeChild",j="<script>",z="success",B="timeout",e=window,a=f.Deferred,h=f("head")[0]||document.documentElement,x={},m=0,c,l={callback:s,url:location.href},w=e.opera,i=!!f("<div>").html("<!--[if IE]><i><![endif]-->").find("i").length;function E(K){K=f.extend({},l,K);var I=K.success,P=K.error,H=K.complete,Y=K.dataFilter,aa=K.callbackParameter,Q=K.callback,Z=K.cache,G=K.pageCache,J=K.charset,L=K.url,ac=K.data,S=K.timeout,O,W=0,U=d,R,N,F,ab,M,V;a&&a(function(ad){ad.done(I).fail(P);I=ad.resolve;P=ad.reject}).promise(K);K.abort=function(){!(W++)&&U()};if(o(K.beforeSend,K,[K])===!1||W){return K}L=L||r;ac=ac?((typeof ac)=="string"?ac:f.param(ac,K.traditional)):r;L+=ac?(n(L)+ac):r;aa&&(L+=n(L)+encodeURIComponent(aa)+"=?");!Z&&!G&&(L+=n(L)+"_"+(new Date()).getTime()+"=");L=L.replace(/=\?(&|$)/,"="+Q+"$1");function X(ad){if(!(W++)){U();G&&(x[L]={s:[ad]});Y&&(ad=Y.apply(K,[ad]));o(I,K,[ad,z,K]);o(H,K,[K,z])}}function T(ad){if(!(W++)){U();G&&ad!=B&&(x[L]=ad);o(P,K,[K,ad]);o(H,K,[K,ad])}}if(G&&(O=x[L])){O.s?X(O.s[0]):T(O)}else{e[Q]=v;ab=f(j)[0];ab.id=s+m++;if(J){ab[t]=J}w&&w.version()<11.6?((M=f(j)[0]).text="document.getElementById('"+ab.id+"')."+k+"()"):(ab[p]=p);if(i){ab.htmlFor=ab.id;ab.event=g}ab[q]=ab[k]=ab[y]=function(ad){if(!ab[b]||!/i/.test(ab[b])){try{ab[g]&&ab[g]()}catch(ae){}ad=c;c=0;ad?X(ad[0]):T(D)}};ab.src=L;U=function(ad){V&&clearTimeout(V);ab[y]=ab[q]=ab[k]=null;h[C](ab);M&&h[C](M)};h[u](ab,(F=h.firstChild));M&&h[u](M,F);V=S>0&&setTimeout(function(){T(B)},S)}return K}E.setup=function(F){f.extend(l,F)};f.jsonp=E})(jQuery);

$(document).ready( function() {
//	$('body').prepend('<div id="bayerworldwide"></div>');
	// if bayerworldwide styles do not exist load stylesheet
	//if($('#bayerworldwide').css("z-index") != 1000){
//		$('head').append('<link rel="stylesheet" type="text/css" href="http://www.bayer.com/styles/4/bayerworldwide.css"/>');
	//} else {
	//	bayerworldwide();
	//}
//});
//$(window).bind("load", function() {
		bayerworldwide();
    if(window.location.hash) {
			var hash = window.location.hash.substring(1);
			if(hash.indexOf("webworlwide") != -1){
				$(".sp03").trigger('click');
			}
    }
});
function bayerworldwide() {
  var lang = jQuery("html").attr("lang"),
		gm_lang = (lang === 'th')?0:1, //language [0=tha,1=eng]
		gm_label = {},
		gm_html_content = {},
		gm_url = {},
		gm_onlythiswebsite = '<input type="hidden" name="r2" value="only this website">',
		gm_panelheight1 = '420px',
		gm_panelheight2 = '380px',
		gm_panelheight3 = '470px',
		gm_marginheight = '322px',
		gm_withsearchfield = true,
		gm_withservicecompanies = true;
  
	gm_label[0] = new Object;
	gm_label[1] = new Object;
	gm_html_content[0] = new Object;
	gm_html_content[1] = new Object;
	gm_url[0] = new Object;
	gm_url[1] = new Object;

	/*Lang <> Labels*/
	gm_label[0].all = 'ภูมิภาค: ทั้งหมด'; 
	gm_label[1].all = 'Region: All';
	gm_label[0].all_country = 'ประเทศ: ทั้งหมด'; 
	gm_label[1].all_country = 'Country: All';
	gm_label[0].all_org = 'องค์กร: ทั้งหมด'; 
	gm_label[1].all_org = 'Organization: All';
	gm_label[0].all_topic = 'หัวข้อ: ทั้งหมด'; 
	gm_label[1].all_topic = 'Topic: All';
	gm_label[0].all_prod = 'สินค้า: ทั้งหมด'; 
	gm_label[1].all_prod = 'Product: All';
	
	/*Lang <> Url*/
	gm_url[0].org = '//shared.bayer.com/json/contacts_en.json';
	gm_url[1].org = '//shared.bayer.com/json/contacts_en.json';
	gm_url[0].wsearch = '//shared.bayer.com/module/websitesearchform/rest/lang_en/';
	gm_url[1].wsearch = '//shared.bayer.com/module/websitesearchform/rest/lang_en/'; 
	gm_url[0].wresult = '//shared.bayer.com/module/websitesearchresult/rest/lang_en/';
	gm_url[1].wresult = '//shared.bayer.com/module/websitesearchresult/rest/lang_en/';
	gm_url[0].images =  '//shared.bayer.com/img/meta/';
	gm_url[1].images =  '//shared.bayer.com/img/meta/';
	
	/* Bayer worldwide - ROOT*/
	gm_html_content[0].worldwide = '<div id="worldwide" class="loadedhtml"><ul class="nobulls"><li><strong>ไบเออร์ ทั่วโลก:</strong></li><li><a class="showpanel sp01" href="#">องค์กร</a></li><li><a class="showpanel sp02" href="#">สถานที่ตั้ง</a></li><li><a class="showpanel sp03" href="#">เว็บไซต์</a></li>';
if(gm_withsearchfield === true){
	gm_html_content[0].worldwide += '<li class="last fastsearch input-append"><label for="searchfield">ค้นหา</label><input type="hidden" name="chkGerman" value="Deutsch" id="chkGermanHidden2"><input type="hidden" value="" name="m2">';
	gm_html_content[0].worldwide += (typeof searchallwebsites === "undefined")? gm_onlythiswebsite:'';
	gm_html_content[0].worldwide += '<input type="search" placeholder="ป้อนคำค้นหาของคุณ" name="suchfeld2" id="searchfield" autocomplete="off" /><button type="button" class="btn searchbtn">Go</button></li>';
}
	gm_html_content[0].worldwide += '</ul></div>';


	gm_html_content[1].worldwide = '<div id="worldwide" class="loadedhtml"><ul class="nobulls"><li><strong>Bayer worldwide:</strong></li><li><a class="showpanel sp01" href="#">Organization</a></li><li><a class="showpanel sp02" href="#">Locations</a></li><li><a class="showpanel sp03" href="#">Websites</a></li>';
if(gm_withsearchfield === true){
	gm_html_content[1].worldwide += '<li class="last fastsearch input-append"><label for="searchfield">Search</label><input type="hidden" name="chkGerman" value="Deutsch" id="chkGermanHidden2"><input type="hidden" value="" name="m2">';
	gm_html_content[1].worldwide += (typeof searchallwebsites === "undefined")? gm_onlythiswebsite:'';
	gm_html_content[1].worldwide += '<input type="search" placeholder="Enter your search term" name="suchfeld2" id="searchfield" autocomplete="off" /><button type="button" class="btn searchbtn">Go</button></li>';
}
	gm_html_content[1].worldwide += '</ul></div>';

	/* Bayer worldwide -PANEL 1*/
	gm_html_content[0].panel1 = '<div class="line"><div class="unit size3metarows"><div class="line"><div class="unit size1of3"><h2>ไบเออร์ เฮลธ์แคร์</h2><div class="img"><a href="http://www.bayer.co.th/th/contentpage.php?ID=18"><img src="'+gm_url[0].images+'ph.png" width="235" height="80" data-original="'+gm_url[0].images+'bhc.jpg" alt="" class="lazy" /></a></div><p>ไบเออร์ เฮลธ์แคร์ เป็นหนึ่งในบริษัทชั้นนำระดับโลกที่มีนวัตกรรมด้านการดูแลสุขภาพและเวชภัณฑ์</p><p class="lnk pht"><a href="http://www.bayer.co.th/th/contentpage.php?ID=18">เว็บไซต์ไบเออร์ เฮลธ์แคร์</a></p></div><div class="unit size1of3"><h2>ไบเออร์ ครอปซายน์</h2><div class="img"><a href="http://www.bayercropscience.co.th/web/home/"><img src="'+gm_url[0].images+'ph.png" width="235" height="80" data-original="'+gm_url[0].images+'bcs.jpg" alt="" class="lazy" /></a></div><p>ไบเออร์ ครอปซายน์ เป็นหนึ่งในบริษัทชั้นนำระดับโลกด้านนวัตกรรมเพื่อการอารักขาพืช เมล็ดพันธุ์ เทคโนโลยีชีวภาพ และการควบคุมแมลงและสัตว์ที่ไม่เกี่ยวกับการเกษตร</p><p class="lnk pht"><a href="http://www.bayercropscience.co.th/web/home/">เว็บไซต์ไบเออร์ ครอปซายน์</a></p></div></div>';
	/*gm_html_content[0].panel1 += (gm_withservicecompanies === true)? '<hr class="seperator"><div class="line"><div class="unit size1of3 lastUnit"><h2>ไบเออร์ แมททีเรียลซายน์</h2><div class="img"><a href="http://www.bayer.co.th/th/contentpage.php?ID=29"><img src="'+gm_url[0].images+'ph.png" width="235" height="80" data-original="'+gm_url[0].images+'bms.jpg" alt="" class="lazy" /></a></div><p>ไบเออร์ แมททีเรียลซายน์ เป็นผู้ผลิตชั้นนำด้านนวัตกรรม และผลิตภัณฑ์ที่มีคุณสมบัติสูง เพื่อนำไปใช้ในการผลิตผลิตภัณฑ์ต่างๆ ที่ใช้ในชีวิตประจำวัน</p><p class="lnk pht"><a href="http://www.bayer.co.th/th/contentpage.php?ID=29">เว็บไซต์ไบเออร์ แมททีเรียลซายน์ </a></p></div><div class="unit size1of3"><h2>ธุรกิจตัวแทนจำหน่าย</h2><p>ธุรกิจตัวแทนจำหน่ายเป็นตัวแทนจัดจำหน่ายภายในประเทศไทยของสินค้าเคมีภัณฑ์สำหรับอุตสาหกรรมหลากหลายประเภทจาก บริษัท แลนเซส ดอยซ์แลนด์ จีเอ็มบีเฮ็ช ประเทศเยอรมนี, บริษัท ทานาเท็กซ์ เคมีคอล บี.วี. ประเทศเนเธอร์แลนด์ และ ซิดิแอค ประเทศฝรั่งเศส </p><p class="lnk pht"><a href="http://www.bayer.co.th/th/contentpage.php?ID=33">เว็บไซต์ธุรกิจตัวแทนจำหน่าย</a></p></div>         </div>':'';*/
	gm_html_content[0].panel1 += '</div><div class="unit size-vl"><div style="height:'+gm_marginheight+'; border-left:1px solid #dcdcdc; margin:0 10px 0 9px;"></div></div><div class="unit size-col-a panelmargi lastUnit"><h1 class="h5">ลิ้งค์</h1><p class="lnk pht"><a href="http://www.bayer.co.th/th/contentpage.php?ID=4">ประวัติบริษัท</a><br /><a href="โครงสร้างองค์กร">โครงสร้างองค์กร</a></p></div></div>';
  
	gm_html_content[1].panel1 = '<div class="line"><div class="unit size3metarows"><div class="line"><div class="unit size1of3"><h2>Bayer HealthCare</h2><div class="img"><a href="http://healthcare.bayer.com"><img src="'+gm_url[1].images+'ph.png" width="235" height="80" data-original="'+gm_url[1].images+'bhc.jpg" alt="" class="lazy" /></a></div><p>Bayer HealthCare is among the world\'s foremost innovators in the field of medical care with pharmaceutical and medical products.</p><p class="lnk pht"><a href="http://www.healthcare.bayer.com">Bayer HealthCare Website</a></p></div><div class="unit size1of3"><h2>Bayer CropScience</h2><div class="img"><a href="http://www.cropscience.bayer.com"><img src="'+gm_url[1].images+'ph.png" width="235" height="80" data-original="'+gm_url[1].images+'bcs.jpg" alt="" class="lazy" /></a></div><p>Bayer CropScience holds global leadership positions in the areas of seeds, crop protection and non-agricultural pest control.</p><p class="lnk pht"><a href="http://www.cropscience.bayer.com">Bayer CropScience Website</a></p></div></div>';
	/*gm_html_content[1].panel1 += (gm_withservicecompanies === true)? '<hr class="seperator"><div class="line"><div class="unit size1of3 lastUnit"><h2>Bayer MaterialScience</h2><div class="img"><a href="http://www.materialscience.bayer.com/en.aspx"><img src="'+gm_url[1].images+'ph.png" width="235" height="80" data-original="'+gm_url[1].images+'bms.jpg" alt="" class="lazy" /></a></div><p>Bayer MaterialScience is a renowned supplier of high-performance materials such as polycarbonates, polyurethanes and coatings, adhesives and specialties.</p><p class="lnk pht"><a href="http://www.materialscience.bayer.com/en.aspx">Bayer MaterialScience Website</a></p></div><div class="unit size1of3"><h2>Bayer Business Services</h2><p>Bayer Business Services is the Bayer Group\'s global competence center for IT and business services.</p><p class="lnk pht"><a href="http://business-services.bayer.com">Bayer Business Services Website</a></p></div><!-- Not use <div class="unit size1of3"><h2>Bayer Technology Services</h2><p>Bayer Technology Services is the global technological backbone and a major innovation driver of the Bayer Group.</p><p class="lnk pht"><a href="http://www.bayertechnology.com">Bayer Technology Services Website</a></p></div><div class="unit size1of3 lastUnit"><h2>Currenta</h2><p>The service company Currenta, in which Bayer AG owns a majority stake, is the manager and operator of Chempark.</p><p class="lnk pht"><a href="http://www.currenta.com">Currenta Website</a></p></div>--></div>':'';*/
	gm_html_content[1].panel1 += '</div><div class="unit size-vl"><div style="height:'+gm_marginheight+'; border-left:1px solid #dcdcdc; margin:0 10px 0 9px;"></div></div><div class="unit size-col-a panelmargi lastUnit"><h1 class="h5">Links</h1><p class="lnk pht"><a href="http://www.bayer.com/bayer-organizational-structure" target="_blank">Organization chart (PDF, 180&nbsp;KB)</a><br /><a href="http://www.bayer.com/en/board-of-management.aspx">Board of Management</a><br /><a href="http://www.bayer.com/en/members.aspx">Supervisory Board</a><br /><a href="http://www.bayer.com/en/profile-and-organization.aspx">Profile and Organization</a></p></div></div>';

	gm_html_content[0].panel2 = '<div style="position: absolute; z-index: 2; width: 966px; height: 330px;" class="preloader"></div><div class="unit size-col-a"><h2>เลือกประเทศที่ต้องการ:</h2><hr><div class="media"><div class="scrollbox scroll-pane" ><!-- LIST START--><ul class="nobulls lnk" data-bind="foreach: countrys"><li><a data-bind="text: country, attr:{ rel: $index, href: \'#\'}, click: $root.viewit"></a><ul data-bind="foreach:subs"><li><a href="#"data-bind="text:title , click: $root.viewit2" ></a></li></ul></li></ul><!-- LIST STOP --></div></div></div><!-- MAP START --><div class="unit size575 world"><div class="scrollbox2 scroll-pane" data-bind="template: {name: \'jsonCountrys\', foreach: $root.subsDetails  }" ></div> </div><!-- MAP STOP --><!-- RIGHT START --><div class="unit size-vl"><div style="height:322px; border-left:1px solid #dcdcdc; margin:0 10px 0 9px;"></div></div><div class="unit size-col-a panelmargi lastUnit"><h1 class="h5" >ที่อยู่ติดต่อไบเออร์ทั่วโลก</h1><p><strong class="tel" >+49 214 30-1</span></strong><br><span data-bind="text: $root.globalContact().name"></span><br><span data-bind="text: $root.globalContact().address1"></span>,<span data-bind="text: $root.globalContact().country"></span><br><a data-bind="attr: {href:$root.globalContact().email}">E-mail</a></p><div class="spacer"></div><h1 class="h5" data-bind="text: $root.investorContact()"></h1><ul class="nobulls pht lnk" data-bind="foreach: $root.investorContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul><ul class="nobulls pht lnk" data-bind="foreach: $root.pressContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul><!-- <select data-bind="options:$root.investorContacts,optionsText:\'label\',optionsCaption:\'Please select\'"></select><div class="spacer"></div><h1 class="h5" data-bind="text: $root.pressContact()"></h1><ul class="nobulls pht lnk" data-bind="foreach: $root.pressContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul>--><!-- <select data-bind="options:$root.pressContacts,optionsText:\'label\',optionsCaption:\'Please select\'"></select> --><div class="spacer"></div></div><!-- RIGHT STOP -->';
	gm_html_content[1].panel2 = '<div style="position: absolute; z-index: 2; width: 966px; height: 330px;" class="preloader"></div><div class="unit size-col-a"><h2>Select a country:</h2><hr><div class="media"><div class="scrollbox scroll-pane" ><!-- LIST START--><ul class="nobulls lnk" data-bind="foreach: countrys"><li><a data-bind="text: country, attr:{ rel: $index, href: \'#\'}, click: $root.viewit"></a><ul data-bind="foreach:subs"><li><a href="#"data-bind="text:title , click: $root.viewit2" ></a></li></ul></li></ul><!-- LIST STOP --></div></div></div><!-- MAP START --><div class="unit size575 world"><div class="scrollbox2 scroll-pane" data-bind="template: {name: \'jsonCountrys\', foreach: $root.subsDetails  }" ></div> </div><!-- MAP STOP --><!-- RIGHT START --><div class="unit size-vl"><div style="height:322px; border-left:1px solid #dcdcdc; margin:0 10px 0 9px;"></div></div><div class="unit size-col-a panelmargi lastUnit"><h1 class="h5" data-bind="text: $root.globalContact().headline"></h1><p><strong class="tel" >+49 214 30-1</span></strong><br><span data-bind="text: $root.globalContact().name"></span><br><span data-bind="text: $root.globalContact().address1"></span>,<span data-bind="text: $root.globalContact().country"></span><br><a data-bind="attr: {href:$root.globalContact().email}">E-mail</a></p><div class="spacer"></div><h1 class="h5" data-bind="text: $root.investorContact()"></h1><ul class="nobulls pht lnk" data-bind="foreach: $root.investorContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul><ul class="nobulls pht lnk" data-bind="foreach: $root.pressContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul><!-- <select data-bind="options:$root.investorContacts,optionsText:\'label\',optionsCaption:\'Please select\'"></select><div class="spacer"></div><h1 class="h5" data-bind="text: $root.pressContact()"></h1><ul class="nobulls pht lnk" data-bind="foreach: $root.pressContacts"><li><a data-bind="text: label, attr:{ rel: $index, href: value}"></a></li></ul>--><!-- <select data-bind="options:$root.pressContacts,optionsText:\'label\',optionsCaption:\'Please select\'"></select> --><div class="spacer"></div></div><!-- RIGHT STOP -->';
	gm_html_content[0].panel3 = '<div style="position: absolute; z-index: 2; width: 966px; height: 410px;" class="preloader"></div><h2>ค้นหาในไบเออร์ ทั่วโลก</h2><hr><div class="line"><div class="unit size-col-a"><label>Region</label><select data-bind="event: { change: changed }, options: availableRegions, optionsText:\'name\', value: selectedRegion, optionsValue:\'id\', optionsCaption:regionsCount()"></select><div class="spacer-ten"></div><label>Country</label><select data-bind="event: { change: changed },options: availableCountrysFiltered, optionsText:\'name\', value: selectedCountry, optionsValue:\'id\', optionsCaption:countrysCount()"></select><div class="spacer-ten"></div></div><div class="unit size-col-a"><label>Organization</label><select data-bind="event: { change: changed },options: availableOrganizations, optionsText:\'name\', value: selectedOrganization, optionsValue:\'id\', optionsCaption:organizationsCount()"></select><div class="spacer-ten"></div><label class="right">Product websites</label><select data-bind="event: { change: changed },options: availableProductsFiltered, optionsText:\'name\', value: selectedProduct, optionsValue:\'id\', optionsCaption:productsCount()"></select><div class="spacer-ten"></div></div><div class="unit size-col-a"><label class="right">Topic &amp; field of activity</label><select data-bind="event: { change: changed },options: availableTopicsFiltered, optionsText:\'name\', value: selectedTopic, optionsValue:\'id\', optionsCaption:topicsCount()"></select><div class="spacer-ten"></div><label>Search</label><form data-bind="submit: siteSearch"><input class="nocomplete" data-bind="value: searchText, watermark: \'ป้อนคำค้นหาของคุณ\', valueUpdate: \'afterkeydown\'" /><!-- button class="btn submit" type="submit">Search</button --></form><div class="spacer-ten"></div></div><div style="width:108px;" class="unit"><button class="btn submit" data-bind="click: siteSearch">ค้นหา</button></div><div class="unit size1of5 lastUnit"><div class="p">หมายเหตุ: ตัวเลือกทุกประเภทจะเชื่อมโยงถึงกันหมด ดังนั้นคุณจะพบสิ่งที่เข้าข่ายการค้นหาอย่างน้อย 1 รายการไม่ว่าคุณจะค้นหาในประเภทใดก็ตาม แต่กรณีนี้ไม่สามารถใช้ได้กับฟังก์ชันการค้นหาแบบพิมพ์คำค้นหาด้วยตัวเอง</div></div></div><div class="spacer"></div><div class="spacer"></div><!-- Results Start --><div class="line"><h2>ผลการค้นหา: <span class="green">รายการค้นหาที่พบ&nbsp;</span><span class="green" data-bind="text: websiteCount"></span><span class="green">&nbsp;เว็บไซต์</span><!-- indicator Start--><span class="loading counter">&nbsp;</span><span class="loading resultcounter">&nbsp;</span><!-- indicator Stop --></h2><hr><!-- Results Stop --><div class="media"><div class="loading results">&nbsp;</div><div class="scroll-pane" style="height:215px;" data-bind="template: {name: \'searchResultsItem\', foreach: searchResults}"></div><!-- Results Stop --><div class="spacer-ten"></div><hr></div></div>';
	gm_html_content[1].panel3 = '<div style="position: absolute; z-index: 2; width: 966px; height: 410px;" class="preloader"></div><h2>Search for Bayer Websites worldwide</h2><hr><div class="line"><div class="unit size-col-a"><label>Region</label><select data-bind="event: { change: changed }, options: availableRegions, optionsText:\'name\', value: selectedRegion, optionsValue:\'id\', optionsCaption:regionsCount()"></select><div class="spacer-ten"></div><label>Country</label><select data-bind="event: { change: changed },options: availableCountrysFiltered, optionsText:\'name\', value: selectedCountry, optionsValue:\'id\', optionsCaption:countrysCount()"></select><div class="spacer-ten"></div></div><div class="unit size-col-a"><label>Organization</label><select data-bind="event: { change: changed },options: availableOrganizations, optionsText:\'name\', value: selectedOrganization, optionsValue:\'id\', optionsCaption:organizationsCount()"></select><div class="spacer-ten"></div><label class="right">Product websites</label><select data-bind="event: { change: changed },options: availableProductsFiltered, optionsText:\'name\', value: selectedProduct, optionsValue:\'id\', optionsCaption:productsCount()"></select><div class="spacer-ten"></div></div><div class="unit size-col-a"><label class="right">Topic &amp; field of activity</label><select data-bind="event: { change: changed },options: availableTopicsFiltered, optionsText:\'name\', value: selectedTopic, optionsValue:\'id\', optionsCaption:topicsCount()"></select><div class="spacer-ten"></div><label>Search</label><form data-bind="submit: siteSearch"><input class="nocomplete" data-bind="value: searchText, watermark: \'Enter your search term\', valueUpdate: \'afterkeydown\'" /><!-- button class="btn submit" type="submit">Search</button --></form><div class="spacer-ten"></div></div><div style="width:108px;" class="unit"><button class="btn submit" data-bind="click: siteSearch">Search</button></div><div class="unit size1of5 lastUnit"><div class="p">Note: all the categories are linked so you will get at least one hit for any query. This does not apply to the free-text search function.</div></div></div><div class="spacer"></div><div class="spacer"></div><!-- Results Start --><div class="line"><h2>Search result: <span class="green" data-bind="text: websiteCount"></span><span class="green">&nbsp;website(s) found</span><!-- indicator Start--><span class="loading counter">&nbsp;</span><span class="loading resultcounter">&nbsp;</span><!-- indicator Stop --></h2><hr><!-- Results Stop --><div class="media"><div class="loading results">&nbsp;</div><div class="scroll-pane" style="height:215px;" data-bind="template: {name: \'searchResultsItem\', foreach: searchResults}"></div><!-- Results Stop --><div class="spacer-ten"></div><hr></div></div>';
	gm_html_content[0].panel = '<div class="panel" style="display:none;"><a class="closepaneltop" href="#" style="background-position:60px -1648px">ปิด</a><a class="closepanel" href="#">schlieรen</a><span class="panelbottom"></span></div>';
	gm_html_content[1].panel = '<div class="panel" style="display:none;"><a class="closepaneltop" href="#">close</a><a class="closepanel" href="#">close</a><span class="panelbottom"></span></div>';

	/*Knockout*/
	var viewTemplates = {
		templates: {
			jsonCountrys: '<div class="line" data-bind="visible: $index() == 0"><div class="unit size1of1" ><h2 data-bind="text: $root.currentCountry.countryname"></h2></div><hr></div><div class="line" data-bind="foreach: $data"><div class="unit size1of2"><h3 data-bind="text: company"></h3><p><span data-bind="html: company2 +\'<br>\', visible: company2"></span><span data-bind="html: address1 +\'<br>\', visible: address1.length>0"></span><span data-bind="html: address2 +\'<br>\', visible: address2.length>0"></span><span data-bind="html: address3 +\'<br>\', visible: address3.length>0"></span><span data-bind="html: address4 +\'<br>\', visible: address4.length>0"></span><span data-bind="html: country +\'<br>\', visible: country.length>0"></span><span data-bind="html: phone +\'<br>\', visible: phone.length>0"></span><span data-bind="html: fax +\'<br>\', visible: fax.length>0"></span><a data-bind="text: link, visible: link.length>0, attr:{href:link}"></a></p></div></div><div class="spacer"></div>',
			searchResultsItem:'<div class="article"><div class="lnk line"><span class="unit size1of4"><a data-bind="attr: {href: url}"><strong data-bind="text: name+\'&nbsp;\'"></strong></a></span><span class="unit size1of4" data-bind="text: organization"></span><span class="unit size1of2 lastUnit" data-bind="template: {name: \'languagesList\', foreach: languages}"></span></div><div style="width:765px; padding:5px 0 5px 7px;" data-bind="text: description"></div></div>',
			languagesList:'<span data-bind="visible: $index() > 0, text:\', \'"></span><span data-bind="text: $data"></span>'
		}
	};

  	/*remove existing dom node*/
	$('#worldwide').remove();
	/*add new dom node*/
	$('[role="navigation"]').after(gm_html_content[gm_lang].worldwide);
	var gm_panelheight = gm_panelheight2,
		gm_lastActivePanel='';
		
        activateSearch();
	
	/*Show Global Navigation - Start*/
	$('.showpanel').click(function() {

		/*avoid clicks during animation*/
		//if ( $(this).hasClass('disabled')) {return '';}
		/*$(this).addClass('disabled');*/

		/*add dom node if not exist*/
		if ($('.panel').length<1) {
			$('div.page, #videochannel_2515 > #wrapper, #videochannel_2371 > #wrapper').append(gm_html_content[gm_lang].panel);
			ko.setTemplateEngine(createStringTemplateEngine(new ko.nativeTemplateEngine(), viewTemplates.templates));
		}

		$('#worldwide ul li').each(function(){$(this).removeClass('hover')});
		$(this).parent('li').addClass('hover');

		var clicked = $(this).attr('class').split(' ')[1]

		/*show panel*/
		if ($("div.panel").is(":hidden")){
			$("div.panel").css({height: 0, display:"block"});
			//.animate({height: gm_panelheight}, 'slow',function(){/*$(this).removeClass('disabled');*/} );
		}	
		/*Panel 1-3*/
		switch(clicked) {
		  case 'sp01': 
						/*add dom node if not exist*/
						if ($('.p01').length<1) {$('.panel').append('<div class="p01" style="display:block;">'+gm_html_content[gm_lang].panel1+'</div>');}
						gm_panelheight = gm_panelheight1;
						$('.p01').css({'display':'block'});
						$('.p02,.p03').css({'display':'none'});
						$(".panel img.lazy").each(function (i) {
							$(this).attr("src", $(this).data("original"));
						});
						$("div.panel").animate({height: gm_panelheight}, "slow" );
			break;
		  case 'sp02':
						/*add dom node if not exist*/
						if ($('.p02').length<1) {
							$('.panel').append('<div class="p02" style="display:none;">'+gm_html_content[gm_lang].panel2+'</div>');
							ko.applyBindings(new LocationListViewModel(),$('.p02').get(0));
						}
						gm_panelheight = gm_panelheight2;
						$('.p02').css({'display':'block'});
						$('.p01,.p03').css({'display':'none'});
						$("div.panel").animate({height: gm_panelheight}, "slow" );
			break;
		  case 'sp03': 
						/*add dom node if not exist*/
						if ($('.p03').length<1) {
							$('.panel').append('<div class="p03" style="display:none;">'+gm_html_content[gm_lang].panel3+'</div>');
							ko.applyBindings(SitesListModel(),$('.p03').get(0));
						}
						gm_panelheight = gm_panelheight3;
						$('.p03').css({'display':'block'});
						$('.p01,.p02').css({'display':'none'});
						$('.loading.counter, .loading.resultcounter').css({'display':'none','height':'16px','margin-left':'10px','position':'absolute','width':'16px'});
						$('.loading.results').css({'display':'none','height':'215px','position':'absolute', 'width':'100%'});
						$("div.panel").animate({height: gm_panelheight}, "slow" );
			break;
		  default:  
						gm_panelheight = "380px";			
		}

		/*hide panel*/
		if (clicked === gm_lastActivePanel) {
			//$("div.panel").animate({height: gm_panelheight}, "slow" );
			$("div.panel").slideUp("slow", function(){$(".panel > div").hide(); });
			$(".showpanel").parent("li").removeClass("hover");
			gm_lastActivePanel = '';
		} else {
			/*status*/
			gm_lastActivePanel=clicked;	
		}

		/*enable clicks*/
		//$(this).removeClass('disabled');	

		/*close panel*/
		$("a.closepanel, a.closepaneltop").click(function(e) {
			e.preventDefault();
			$("div.panel").slideUp("slow");
			$(".showpanel").parent("li").removeClass("hover");
			gm_lastActivePanel = '';
		});
 $('html').click(function() {
    $("a.closepanel").trigger("click");
    if($("div.panel").is(':visible')){
      $('.panel, #worldwide, html').off('click');
    }
 });

 $('.panel, #worldwide').click(function(event){
     event.stopPropagation();
 });

	});
	/*Show Global Navigation - Stop*/
  
	/*Knockout -> Locations*/
	function LocationListViewModel() {
		var self = this;
		self.selected = ko.observable(0);
		self.countrys = ko.observableArray([]);
		self.detailLength = ko.observable(0);
		self.currentCountry = ko.observable({countryname:''});
		self.currentLocationDetails = ko.observableArray([]);
		self.subsDetails = ko.observableArray([]);
		self.template = ko.observable('jsonCountryS');
		self.globalContact = ko.observable({});
		self.investorContact = ko.observable('');
		self.investorContacts =	ko.observableArray([]);
		self.pressContact = ko.observable('');
		self.pressContacts = ko.observableArray([]);

		self.viewit = function(item) {
			self.currentCountry = { countryname: this.country()};
			self.subsDetails(buildSubsArray(this.details()));
			self.selected(this);
			$('.locplaceholder').remove();
		}
		
		self.viewit2 = function(item) {
			ko.toJSON(this);
			if (typeof(this.details) === 'function') {
				if (typeof(this.details()) != 'undefined') {
					self.detailLength = this.details().length;
				} 
			}else {
				if (typeof(this.subdetails.length) != 'undefined') {
					self.detailLength = this.subdetails.length;
				}
			}
			
			if (typeof(this.country) === 'function') {
				self.currentCountry = { countryname: this.country()};
			} else {
				self.currentCountry = { countryname: this.country +' - '+ this.title};
				self.currentLocationDetails([]);
				self.subsDetails(this.subsdetails);
			}

			self.selected(this);
			$('.locplaceholder').remove();
		}	

		self.setItem = function(item) { }

		self.getData = function() {

                        var _url = gm_url[gm_lang].org;

			$.jsonp({
				url:_url,//gm_url[gm_lang].org+'/callback_cb.aspx',		
				dataType: 'jsonp',
				callback: 'cb',
				cache:true,
				success:function(json) {
					var mappedCountrys = $.map(json.countrys, function(item) { return new Location(item,item.subs) });
					self.countrys(mappedCountrys);
					self.globalContact(json.globalcontact);
					self.investorContact(json.investorcontact.headline)
					self.investorContacts(json.investorcontact.contacts)
					self.pressContact(json.presscontact.headline)
					self.pressContacts(json.presscontact.contacts)
			$('.preloader').remove();
				}
			}); 	
		}

		self.getData();
		self.selected(this);
	}
  
	/*Knockout -> Websitesearch*/
	var RegionModel = function(item) {
		this.regionid = item.id.toString();
		this.regionname = item.name.toString();
	}

	var SitesListModel = function() {
		var self = this,
			queryParams='',
			reqUrl,
			reqUrlSite,
			lastSelRegion=[];		
		
		//selected	
		self.regions  = [];
		self.searchText = ko.observable();
		self.websiteCount = ko.observable();
		self.websiteCountSiteSearch = ko.observable();
		self.selectedRegion = ko.observable();
		if(window.location.hash.substring(1).indexOf("|") != -1){
			var countryID = window.location.hash.substring(1).split("|")[1];
			self.selectedCountry = ko.observable(countryID);
		} else {
			self.selectedCountry = ko.observable();
		}
		self.selectedOrganization = ko.observable();
		self.selectedTopic = ko.observable();
		self.selectedProduct = ko.observable();	
		self.searchResults = ko.observableArray([]);
		self.searchText("");
		
		//functions	
		self.throttledValue = ko.computed(self.searchText).extend({ throttle: 400 });
		// Keep a log of the throttled values
		//self.loggedValues = ko.observableArray([]);
		self.throttledValue.subscribe(function (val) {
			//if (val !== '')
				getData(false);
				//this.loggedValues.push(val);
		}, self);

		self.buildQueryString = function(e,type) {
			if (e && typeof(e.id) != 'undefined') {
				return type+'_'+e.id+'/';
			}
			if (typeof(e) != 'undefined') {
				return type+'_'+escape(e)+'/';
			} else {
				return '';
			}
		}
		
		self.updateQueryString = ko.computed(function(){
			queryParams = self.buildQueryString(self.selectedRegion(),'intRegion');
			queryParams += self.buildQueryString(self.selectedCountry(),'intCountry');
			queryParams += self.buildQueryString(self.selectedOrganization(),'intOrganization');
			queryParams += self.buildQueryString(self.selectedTopic(),'intTopic');
			queryParams += self.buildQueryString(self.selectedProduct(),'intProduct');
			if (self.searchText().length > 0) {
				queryParams += self.buildQueryString(self.searchText(),'stringSearch');
			}
		});
		
		self.filterIt = function(item,filter) {
			if (item == 'countryasdf' && (typeof(filter) != 'undefined')) {
				self.availableRegions([{'id':1,'name':'test'}]);
			} else {
				self.availableRegions(self.regions);
			}
		}
		
		/*regions*/
		self.availableRegions = ko.observableArray([]);
		self.regionsCount = ko.computed(function() {
			if (typeof(self.availableRegions) != 'undefined') {
				return gm_label[gm_lang].all+' ('+ self.availableRegions().length+')';
			} else {
				return gm_label[gm_lang].all+' ('+ self.availableRegions().length+')';
			}
		});
		
		/*countrys*/
		self.availableCountrys = ko.observableArray([]);
		self.countrysCount = ko.computed(function() {
			if (typeof(self.availableCountrysFiltered) != 'undefined') {
				return gm_label[gm_lang].all_country +' ('+self.availableCountrysFiltered().length+')';
			} else {
				return gm_label[gm_lang].all_country+' ('+self.availableCountrys().length +')';
			}
		});
		self.availableCountrysFiltered = ko.computed(function() {
			return self.availableCountrys();
		});
		/*organizations*/
		self.availableOrganizations = ko.observableArray([]);
		self.organizationsCount = ko.computed(function() {
			if (typeof(self.availableOrganizationsFiltered) != 'undefined') {
				return gm_label[gm_lang].all_org+' ('+ self.availableOrganizationsFiltered().length+')';
			} else {
				return gm_label[gm_lang].all_org+' ('+ self.availableOrganizations().length+')';
			}
		});
		self.availableOrganizationsFiltered = ko.computed(function() {
			return self.availableOrganizations();
		});
		
		/*topics*/
		self.availableTopics = ko.observableArray([]);
		self.topicsCount = ko.computed(function() {
			if (typeof(self.availableTopicsFiltered) != 'undefined') {
				return gm_label[gm_lang].all_topic+' ('+ self.availableTopicsFiltered().length+')';
			} else {
				return gm_label[gm_lang].all_topic+' ('+ self.availableTopics().length+')';
			}
		});	
		self.availableTopicsFiltered = ko.computed(function() {
			return self.availableTopics();
		});	
		
		/*products*/
		self.availableProducts = ko.observableArray([]);
		self.productsCount = ko.computed(function() {
			if (typeof(self.availableProductsFiltered) != 'undefined') {
				return gm_label[gm_lang].all_prod+' ('+ self.availableProductsFiltered().length+')';
			} else {
				return gm_label[gm_lang].all_prod+' ('+ self.availableProducts().length+')';
			}
		});	
		self.availableProductsFiltered = ko.computed(function() {
			return self.availableProducts();
		});	
		
		/*filtered Items*/
		self.wasTrigger = true;
		self.changed = function(data,event){
			if (event.isTrigger) {
				self.wasTrigger = true;
			} else {
				self.wasTrigger = false;
			}
			if (typeof(event.isTrigger) == 'undefined') {
				self.wasTrigger = false;
			} else {
				self.wasTrigger = true;
			}
		};	
		
		/*Search Results*/		
		self.siteSearch = function() {
reqUrlSite= gm_url[gm_lang].wresult+queryParams+'callback_cb.aspx';
                        var _url = (window.location.host == 'secure.bayer.com') ? 'getSource.aspx?url='+encodeURIComponent(reqUrlSite) : reqUrlSite;

			/*loading indicator*/
			$('.loading.resultcounter, .loading.results').css({'display':'inline-block'});
			$.jsonp({
				url:_url,//reqUrlSite+'callback_cb.aspx', 		
				callback:'cb',
				cache:true,
				error: function(json) {
					b=[];
					self.websiteCountSiteSearch(0);
					self.searchResults(b);
					self.wasTrigger = true;
					$('.loading.resultcounter, .loading.results').css({'display':'none'});
				},
				success: function(json) {
					self.websiteCountSiteSearch(json.count);
					self.searchResults(json.results);
					self.wasTrigger = true;
					$('.loading.resultcounter, .loading.results').css({'display':'none'});
				}
			}); 	
		}
		
		/*Options Data*/ 
		self.getData = function(trigger) {
			if (trigger){
			  return '';		  
			}
			
			if (queryParams.length >0){ 
				reqUrl= gm_url[gm_lang].wsearch+queryParams+'callback_cb.aspx';
			} else {
				reqUrl = gm_url[gm_lang].wsearch+'callback_cb.aspx';
			}
			
                        var _url = (window.location.host == 'secure.bayer.com') ? 'getSource.aspx?url='+encodeURIComponent(reqUrl) : reqUrl;
			$('.loading.counter').css({'display':'inline-block'});
			self.wasTrigger = true;

			$.jsonp({
				url:_url,//reqUrl+'callback_cb.aspx', 		
				callback:'cb',
				cache:true,
				error: function() {
					b = [];
					self.availableRegions(b);
					self.regions = b;
					self.availableCountrys(b);
					self.availableOrganizations(b);
					self.availableTopics(b);
					self.availableProducts(b);
					self.selectedRegion(lastSelRegion);
					self.websiteCount(0);
					$('.loading.counter').css({'display':'none'});
                			$('.preloader').remove();
				},
				success: function(json) {
					self.availableRegions(json.region);
					self.regions = json.region;
					self.availableCountrys(json.country);
					self.availableOrganizations(json.organization);
					self.availableTopics(json.topic);
					self.availableProducts(json.product);
					self.selectedRegion(lastSelRegion);
					self.websiteCount(json.count);
					$('.loading.counter').css({'display':'none'});
                			$('.preloader').remove();
				}
			}); 		
		}

		/*change manually? fetch data (true:false)*/
		self.selectedRegion.subscribe(function(val){ 
			if (self.wasTrigger == false) {self.getData(false); self.siteSearch(); }
		});
		self.selectedCountry.subscribe(function(val){ 
			if (self.wasTrigger == false) {self.getData(false); self.siteSearch(); }
		});
		self.selectedOrganization.subscribe(function(val){ 
			if (self.wasTrigger == false) {self.getData(false); self.siteSearch(); }
		});
		self.selectedTopic.subscribe(function(val){ 
			if (self.wasTrigger == false) {self.getData(false); self.siteSearch(); }
		});
		self.selectedProduct.subscribe(function(val){ 
			if (self.wasTrigger == false) {self.getData(false); self.siteSearch(); }
		});
		
		self.getData(false);
		
		if(window.location.hash.substring(1).indexOf("|") != -1){
			window.setTimeout("setCountry();", 1000);
		}

	}  
  
}
/*Helper*/
function Location(data,subs) {
	this.country = ko.observable(data.country);
if (data.details[0].company =='Bayer Middle East Ltd.'){
  data.details[0].country = '';
}
	this.details = ko.observableArray(data.details);
	
	if (subs) {
		for (var i=0,j=subs.length; i<j;i++) {
			subs[i].country = data.country;
			subs[i].subsdetails = buildSubsArray(subs[i].subdetails)
		}
	}
	this.subs = ko.observableArray(subs);
}

function buildSubsArray(details) {
	var tempArray = [],
		itemsPerLine=2, 
		detailsCount = details.length
		oj = ((parseInt(detailsCount/itemsPerLine)) + (detailsCount%itemsPerLine)),
		mod = ((detailsCount%itemsPerLine) > 0) ? true:false,
		currentPosition = 0;

	for (var oi = 0; oi < oj; oi++) {
		var every2nd=[];
		for (var ii = 0; ii < itemsPerLine; ii++) {
			every2nd.push(details[currentPosition]);
			if ((oi+1) == oj && mod) {
				ii++;
			}
			currentPosition++; 
		}
		tempArray.push(every2nd)
	}

	return tempArray;
}

ko.bindingHandlers.watermark = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        var value = valueAccessor(), allBindings = allBindingsAccessor();
        var defaultWatermark = ko.utils.unwrapObservable(value);
        var $element = $(element);
        
        setTimeout(function() {
            $element.val(defaultWatermark);
		}, 0);
        $element.focus(
            function () {
                if ($element.val() === defaultWatermark) {
                    $element.val("");
                }
            }).blur(function () {
                if ($element.val() === '') {
                    $element.val(defaultWatermark)
                }
            });
    }
};

/*Knockout Template Engine*/
ko.templateSources.stringTemplate = function(template, templates) {
	this.templateName = template;
	this.templates = templates;
}
ko.utils.extend(ko.templateSources.stringTemplate.prototype, {
	data: function(key, value) {
		this.templates._data = this.templates._data || {};
		this.templates._data[this.templateName] = this.templates._data[this.templateName] || {};
		
		if (arguments.length === 1) {
			return this.templates._data[this.templateName][key];
		}
		
		this.templates._data[this.templateName][key] = value;
	},
	text: function(value) {
		if (arguments.length === 0) {
		   return this.templates[this.templateName];
		} 
		this.templates[this.templateName] = value;   
	}
});

function createStringTemplateEngine(templateEngine, templates) {
	templateEngine.makeTemplateSource = function(template) {
		return new ko.templateSources.stringTemplate(template, templates);
	}   
	return templateEngine;
}

/* Standard Helper*/
/* https://github.com/douglascrockford/JSON-js/blob/master/json2.js*/
if (typeof JSON !== 'object') {
    JSON = {};
}

(function(){function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(key){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(key){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];if(value&&typeof value==="object"&&typeof value.toJSON==="function"){value=value.toJSON(key)}if(typeof rep==="function"){value=rep.call(holder,key,value)}switch(typeof value){case"string":return quote(value);case"number":return isFinite(value)?String(value):"null";case"boolean":case"null":return String(value);case"object":if(!value){return"null"}gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||"null"}v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1){if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}else{for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function"){JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number"){for(i=0;i<space;i+=1){indent+=" "}}else{if(typeof space==="string"){indent=space}}rep=replacer;if(replacer&&typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":value})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object"){for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined){value[k]=v}else{delete value[k]}}}}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}}());

function Google_ExtSearch(){
	document.forms[0].action="";
	document.forms[0].m2.value='ext';
	document.forms[0].__VIEWSTATE.value='';
	document.forms[0].submit();
} 
function setCountry(){
	var countryID = window.location.hash.substring(1).split("|")[1];
	console.log(countryID);
	window.selectedCountry(countryID);
	//window.setTimeout("window.updateQueryString();", 1000);
	//window.setTimeout("window.siteSearch();", 2000);
	window.siteSearch()
}