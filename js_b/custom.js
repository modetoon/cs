/* edge V 4.0.2 */


function createSocialbar() {
	var url = window.location.href;
	var title = document.title;
	var recommendText = "E-mail";
	var btntxt = "Share";
	if (lang == 'th') {
		recommendText = "อีเมล";
		btntxt = "แบ่งปัน";
	}	

	var sites = [];
	sites[0] = new Shareitem("facebook","Facebook","http://www.facebook.com/sharer.php?u={u}&amp;t={t}");
	sites[1] = new Shareitem("twitter","Twitter","https://twitter.com/intent/tweet?url={u}&amp;text={t}");
	sites[2] = new Shareitem("googleplus","Google+","https://plus.google.com/share?url={u}");
	sites[3] = new Shareitem("xing","Xing","https://www.xing.com/spi/shares/new?url={u}");
	sites[4]= new Shareitem("linkedin","LinkedIn","http://www.linkedin.com/shareArticle?mini=true&amp;url={u}&amp;title={t}&amp;ro=false&amp;summary=&amp;source=");
	sites[5] = new Shareitem("recommend",recommendText ,"#send");
	sites[6] = new Shareitem("share","Share" ,"#share");
	for (var i = 0; i < sites.length; i++) {
		sites[i].linkInList = createListItem(sites[i], url, title, lang);
	}
	var list = sites[0].linkInList + sites[1].linkInList + sites[2].linkInList;
		if (lang == 'th') {
		    list += sites[3].linkInList;
		}
		list += sites[4].linkInList + sites[5].linkInList + sites[6].linkInList;

	if($('#socialbar').length == 0){
		$(".wrapper").append('<div id="socialbar"></div>');
	}
	$("#socialbar").html('<a class="sharebtn">'+btntxt+'</a><ul class="nobulls">'+list+'</ul>');
	initSocialbar();
}
function fillsharemodal() {
	var target = $("#shareModal .smedia");
	var url = window.location.href;
	var title = document.title;
	var recommendText = "Recommend this page via e-mail";
	if (lang == 'th') {
		recommendText = "แนะนำหน้าเว็บไซต์นี้ผ่านอีเมล";
	}
	var sites = [];
	sites[0] = new Site("facebook","Facebook","http://www.facebook.com/sharer.php?u={u}&amp;t={t}");
	sites[1]= new Site("linkedin","LinkedIn","http://www.linkedin.com/shareArticle?mini=true&amp;url={u}&amp;title={t}&amp;ro=false&amp;summary=&amp;source=");
	sites[2] = new Site("xing","Xing","https://www.xing.com/app/user?op=share;url=h{u};title={t}");
	sites[3] = new Site("googleplus","Google+","https://plus.google.com/share?url={u}");
	sites[4] = new Site("pinterest","Pinterest","http://pinterest.com/pin/create/button/?url={u}&amp;title={t}");
	
	sites[5] = new Site("twitter","Twitter","http://twitter.com/home?status={t}++{u}");
	sites[6] = new Site("blogger","Blogger","http://www.blogger.com/blog_this.pyra?t&amp;u={u}&amp;n={t}&amp;pli=1");
	
	sites[7] = new Site("newsvine","Newsvine","http://www.newsvine.com/_tools/seed?popoff=0&u={u}");
	sites[8] = new Site("digg","Digg","http://digg.com/submit?phase=2&amp;url={u}&amp;title={t}");
	sites[9] = new Site("reddit","Reddit","http://reddit.com/submit?url={u}&title={t}");
	sites[10] = new Site("webnews","Webnews","http://www.webnews.de/einstellen?url={u}");
	
	sites[11] = new Site("delicious","Delicious","http://del.icio.us/post?url={u}&amp;title={t}");
	sites[12] = new Site("googleshare","Google","http://www.google.com/bookmarks/mark?op=edit&amp;bkmk={u}&amp;title={t}");
	sites[13] = new Site("misterwong","Mr. Wong","http://www.mister-wong.com/index.php?action=addurl&amp;bm_url={u}&amp;bm_description={t}");
	sites[14] = new Site("stumbleupon","StumbleUpon","http://www.stumbleupon.com/submit?url={u}&title={t}");
	sites[15] = new Site("oneview","Oneview","http://oneview.com/link/quickadd/?URL=&title={u}{t}");
	sites[16] = new Site("yigg","Yigg","http://yigg.de/neu?exturl={u}&title={t}");
	sites[17] = new Site("recommend",recommendText ,"#send");
		
	for (var i = 0; i < sites.length; i++) {
		sites[i].linkInList = buildLink(sites[i], url, title, lang);
	}
	var schließenText = "";
	if (lang == 'th') {
		schließenText = "ปิด";
	} else {
		schließenText = "close";
	}
	var list1 = sites[0].linkInList + sites[1].linkInList + sites[2].linkInList + sites[3].linkInList + sites[4].linkInList;
	var list2 = sites[5].linkInList + sites[6].linkInList;
	var list3 = sites[7].linkInList + sites[8].linkInList + sites[9].linkInList + sites[10].linkInList;
	var list4 = sites[11].linkInList + sites[12].linkInList + sites[13].linkInList + sites[14].linkInList + sites[15].linkInList + sites[16].linkInList;

	var grouphead1 = "Communities";
	var grouphead2 = "Blogs and Microblogs";
	var grouphead3 = "News";
	var grouphead4 = "Bookmark Services";
	if (lang == 'th') {
		grouphead1 = "สังคมออนไลน์";
		grouphead2 = "บล็อกและไมโครบล็อก";
		grouphead3 = "ข่าว";
		grouphead4 = "บริการ Bookmark";
	} 
	target.html('<div class="line"><div class="size1of4 unit"><div class="greybg"><h3>'+grouphead1+'</h3><ul class="nobulls">'+list1+'</ul></div></div><div class="size1of4 unit"><div class="greybg"><h3>'+grouphead2+'</h3><ul class="nobulls">'+list2+'</ul></div></div><div class="size1of4 unit"><div class="greybg"><h3>'+grouphead3+'</h3><ul class="nobulls">'+list3+'</ul></div></div><div class="size1of4 unit lastUnit"><div class="greybg"><h3>'+grouphead4+'</h3><ul class="nobulls">'+list4+'</ul></div></div></div><div class="spacer-fivteen"></div><div class="line"><div class="greybg"><ul class="nobulls">'+sites[17].linkInList+'</ul></div></div>');
};

$(function(){
		$(document).on("click", "a[href='#send']", function(e){
		e.preventDefault();

		var url = window.location.href;
		var title = document.title;
		
		
		if (lang == 'th') {
			window.location.href = 'mailto:?subject=หน้าที่ต้องการแนะนำ „'+title+'“&body=สวัสดี, %0A %0Aฉันได้พบหน้าที่น่าสนใจที่ฉันอยากจะแนะนำให้คุณได้ดู: %0A'+url+' %0A %0Aด้วยความเคารพ  %0A';
		} else {
			window.location.href = 'mailto:?subject=Page Recommendation “'+title+'”&body=Hi, %0A %0AI’ve found an interesting page which I’d like to recommend to you: %0A'+url+' %0A %0ABest regards %0A';
		}
	});
});


var availableTags = [
	"add", "your", "search terms", "here"
];

function activateSearch(){

	if (!Modernizr.input.placeholder) {
		$('input, textarea').placeholder();
	}

	var saytArray = "availableTags";

	$("#searchfield").autocomplete({
		source: function(req, responseFn) {
			//alert("Please change the 'search as you type' list (availableTags)")
			var re = $.ui.autocomplete.escapeRegex(req.term);
			var matcher = new RegExp( "^" + re, "i" );
			var a = $.grep(eval(saytArray), function(item,index){
					return matcher.test(item);
			});
			responseFn( a );
		},
		open: function( event, ui ) {
			$(this).autocomplete('widget').css('z-index', 100);
			$("body").addClass("acstandard");
			$("body").removeClass("acblue");
			$("body").removeClass("acwhite");
		},
		select: function( event, ui ) {
			$(this).attr("value",ui.item.value);
			setTimeout(function(){$(".searchbtn").trigger("click")},200);
			}

		/*,
		minLength: 2*/
	});
	$("#searchfield, #searchfield2").keypress(function (e) {
		if (e.which == 13){
			$(".searchbtn").trigger('click');
		}
	});
	$(".searchbtn").click(function(e) {
    e.preventDefault();
if($('#suchfeld').length > 0) {
  if($('#suchfeld').val()) {
$('#suchfeld').val( $('#searchfield').val() );
  }
}

	if($('#searchfield').closest("form").length == 0) {
			$('.fastsearch').wrap('<form class="fl" id="form" action="'+searchpage+'" method="post"/>');
	}
		submitSearch();
	});

}

var searchpage = "search_content.php";

function submitSearch(){
	//alert("Please implement the search");
}

activateSearch();
