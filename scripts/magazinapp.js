/**
 * Bayer Javascript Version 1.1
 */
var showapp = querySt("showapp"),
		checked = 'false',
		forapplang = 'en',
		appurl_de = "http://www.magazin.app.bayer.de/magazin/2014-01/de/index.html",
		appurl_en = "http://www.magazine.app.bayer.com/magazin/2014-01/en/index.html";


var BayerRules = (function() {

	var compatibleAgents = {
		firefox : { major :  3, minor : 6 },
		msie    : { major :  8, minor : 0 },
		chrome  : { major :  9, minor : 0 },
		safari  : { major :  4, minor : 0 },
		opera   : { major : 10, minor : 0 }
	};

	var rVersion = /(\d+)\.(\d+)/;
	
	// Erstmal die PC-Browser (Firefox, Opera, IE, Safari und Chrome)
	var rFirefox = /(firefox)/;
	var rOpera   = /(opera)/;
	var rIE      = /(msie)/;
	var rSafari  = /(safari)\//;
	var rChrome  = /(chrome)\//;
	
	// Render-/Layoutmaschinen:
	var rWebKit = /(webkit)/;
	var rGecko  = /(rv:).*(gecko\/)/;
	var rPresto = /(presto)\//;
	
	// Dann die Plattform: Android (Pad), iPad, sonstige
	var rAndroid = /(android)/;
	var rIPad    = /(ipad)/;
	var rIPhone    = /(iphone)/;
	
	var rFile = /^file:\/\//;	// Variante: Innerhalb der iApp auf "device"
	
	// Die Tests für Browser-Versionen:
	var rChromeVersion	= /chrome\/([\d\.]+)/;
	var rFirefoxVersion = /firefox\/([\d\.]+)/;
	var rIEVersion			= /msie\s([\d\.]+)/;
	var rOperaVersion		= /version\/([\d\.]+)/;
	var rSafariVersion	= /version\/([\d\.]+)/;
	
	var rAndroidVersion	= /android ([\d\.]+)/;
	
	// IE compat mode
	var rIE8compat	= /(trident\/4)/;
	var rIE9compat	= /(trident\/5)/;
	var rIEcompat		= /(trident)/;
    // Mac
    var rMac =/(mac)/;
	
	var userAgent = window.navigator.userAgent.toLowerCase();
	
	/**
	 * @deprecated
	 */
	var rawBrowser = function() {
			return /(\w+)\/(\d+\.\d+)$/.exec(userAgent);
	};
	
	var firefoxTest = function() { return rFirefox.test(userAgent); };
	var operaTest   = function() { return rOpera.test(userAgent); };
	var ieTest      = function() { return rIE.test(userAgent); };
	var safariTest  = function() { return rSafari.test(userAgent); };
	var chromeTest  = function() { return rChrome.test(userAgent); };
	var webkitTest  = function() { return rWebKit.test(userAgent); };
	var geckoTest   = function() { return rGecko.test(userAgent); };
	var prestoTest  = function() { return rPresto.test(userAgent); };
	var androidTest = function() { return rAndroid.test(userAgent); };
	var iPadTest    = function() { return rIPad.test(userAgent); };
	var iPhoneTest    = function() { return rIPhone.test(userAgent); };
	var onlineTest  = function() { return window.navigator.onLine; };
	var isLocalTest = function() { return rFile.test(document.baseURI); };
	var isMobileClientTest = function() { return isMobileClient(userAgent); };
	var isNotSupportedAndroidTest = function() { return isNotSupportedAndroid(userAgent); };
	
	var IE8compatTest = function() { return rIE8compat.test(userAgent); };
	var IE9compatTest = function() { return rIE9compat.test(userAgent); };
	var IEcompatTest = function() { return rIEcompat.test(userAgent); };

    var macTest = function() { return rMac.test(userAgent); };
	
	
	var orientationTest = function() {
		var w = $(window);
		
		return (w.width() > w.height()) ? "landscape" : "portrait";
	};
	
	/**
	 * This depends very detailed on the current UserAgent!
	 */
	var uaVersionTest = function() {
		if (firefoxTest()) {
			return rFirefoxVersion.exec(userAgent)[1];
		} else if (ieTest()) {
			return rIEVersion.exec(userAgent)[1];
		} else if (chromeTest()) {
			// before safari because is based on webkit
			return rChromeVersion.exec(userAgent)[1];
		} else if (operaTest()) {
			return rOperaVersion.exec(userAgent)[1];
		} else if (safariTest()) {
			return rSafariVersion.exec(userAgent)[1];
		} else {
			return false;
		}
	};
	
	var uaOSVersionTest = function() {
		if (androidTest()) {
			return rAndroidVersion.exec(userAgent)[1];
		} else {
			return false;
		}
	};

	var isCompatibleTest = function() {
		// nimm die Version, wenn vorhanden, dann schau im Compat-Objekt für den
		// richtigen Browser nach:
		var uaVersion = uaVersionTest();
		if (uaVersion) {
			var majorVersion = rVersion.exec(uaVersion)[1];
			var minorVersion = rVersion.exec(uaVersion)[2];
			var browserType = "na";
			
			// Vorsicht mit der Reihenfolge hier!
			if (firefoxTest()) {
				browserType = "firefox";
			} else if (ieTest()) {
				browserType = "msie";
			} else if (chromeTest()) {
				browserType = "chrome";
			} else if (operaTest()) {
				browserType = "opera";
			} else if (safariTest()) {
				browserType = "safari";
			} else {
				return false;	// early Exit!
			}
			
			return (compatibleAgents[browserType].major < majorVersion) ||
			(
					(compatibleAgents[browserType].major == majorVersion) &&
					(compatibleAgents[browserType].minor <= minorVersion)
			)
		}
	};
	var isCompatibleAndroidTest = function() {
		var uaOSVersion = uaOSVersionTest();
		if (uaOSVersion) {
			var majorVersion = rVersion.exec(uaOSVersion)[1];
			var minorVersion = rVersion.exec(uaOSVersion)[2];
			return (majorVersion > 2);
		}
	}
    
	var isScreensizeOkTest = function() {
		if(eval(screen.width) > 640 || eval(screen.height) > 580 ){
			return (eval(screen.width) > 640 || eval(screen.height) > 580);
		} else {
			return (eval(screen.width) > 640 || eval(screen.height) > 580);
		}
	};
	var isScreensizeOkTest2 = function() {
		if(eval(screen.width) >= 800){
			return (eval(screen.width) >= 800);
		} else {
			return (eval(screen.width) >= 800);
		}
	};
	var isResolutionOkTest = function() {
		var w = $(window);
		if (orientationTest() == "landscape") {
			return (w.width() > 975 && w.height() > 731);
		} else {
			return (w.width() > 731) && (w.height() > 975);
		}
	};
	var isMobileClient = function(userAgent) {
		var mobileClients=["midp","240x320","blackberry","netfront","nokia","panasonic","portalmmm", "sharp","sie-","sonyericsson","symbian","windows ce","benq","mda","mot-","opera mini","philips", "pocket pc","sagem","samsung","sda","sgh-","vodafone","xda","iphone","ipod","wap","windows ce","wm5 pie","iemobil","symbian","series60","series70","series80","series90","blackberry","midp","wml","brew","palm","xiino","blazer","pda","nitro","netfront","sonyericsson","ericsson","sec-sgh","docomo","kddi","vodafone"]; 
		try {
			var found = false;
			userAgent=userAgent.toLowerCase(); 
			for (var i=0; i < mobileClients.length; i++) {
				if (userAgent.indexOf(mobileClients[i]) != -1) {
					found = true;
					return true;
				} else {
					found = false;
				}
			}
			return found;
		} catch (e) {
			return false;
		} 
	};
	var isNotSupportedAndroid = function(userAgent) {
		var notSupportedAndroid=["Kindle Fire","Silk"]; 
		try {
			var found = false;
			userAgent=userAgent.toLowerCase(); 
			for (var i=0; i < notSupportedAndroid.length; i++) {
				if (userAgent.indexOf(notSupportedAndroid[i]) != -1) {
					found = true;
					return true;
				} else {
					found = false;
				}
			}
			return found;
		} catch (e) {
			return false;
		} 
	};
	var isIEcompatTest = function() {
		if($.browser.msie){
			$('body').addClass('browserIE' + $.browser.version.substring(0,1));
			if($.browser.version.substring(0,1) == 7){
				return IEcompatTest();
			}
		}
	};
    var isMacTest = function() {
                return macTest();
    };

	return {
		userAgent : function() { return userAgent; },
		isFirefox : function() { return firefoxTest(); },
		isOpera   : function() { return operaTest(); },
		isIE      : function() { return ieTest(); },
		isSafari  : function() { return safariTest(); },
		isChrome  : function() { return chromeTest(); },
		isWebKit  : function() { return webkitTest(); },
		isGecko   : function() { return geckoTest(); },
		isPresto  : function() { return prestoTest(); },
		isAndroid : function() { return androidTest(); },
		isIPad    : function() { return iPadTest(); },
		isIPhone    : function() { return iPhoneTest(); },
		isMobile  : function() { return (androidTest() || iPadTest() || iPhoneTest()) },
		hasOrientation : function() { return (("orientation" in window) && ("onorientationchange" in window)) },
		isLandscape    : function() { return orientationTest() == "landscape"; },
		isPortrait     : function() { return orientationTest() == "portrait"; },
		isOnline  : function() { return onlineTest(); },
		uaVersion : function() { return uaVersionTest(); },
		uaOSVersion : function() { return uaOSVersionTest(); },
		isLocal   : function() { return isLocalTest(); },
		isCompatible : function() { return isCompatibleTest(); },
		isCompatibleAndroid : function() { return isCompatibleAndroidTest(); },
		isResolutionOk : function() { return isResolutionOkTest(); },
		isScreensizeOk : function() { return isScreensizeOkTest(); },
		isScreensizeOk2 : function() { return isScreensizeOkTest2(); },
		isMobileClient : function() { return isMobileClientTest(); },
		isNotSupportedAndroid : function() { return isNotSupportedAndroidTest(); },
		isIEcompat : function() { return isIEcompatTest(); },
        isMac : function() { return isMacTest(); }
	};
})();

var debug = false;
/**
 * Definiere: var debug = true;
 * um dieses Debug zu aktivieren! (danach muss #debugmsgs gestylt/positioniert werden!)
 */
if (window.debug) {
	$(document).ready( function() {
		var logList = $('<ul id="debugmsgs"></ul>');
		$("body").append(logList);
	
		for (var ruleIndex in BayerRules) {
			var logMsg = $("<li>Rule #" +ruleIndex+ " ==> " +BayerRules[ruleIndex]()+ "</li>");
			logList.append(logMsg);
		}
	});
}

/* 
//already included in global script
function querySt(ji) {
	hu = window.location.search.substring(1);
	gy = hu.split("&");
	for (i=0;i<gy.length;i++) {
		ft = gy[i].split("=");
		if (ft[0] == ji) {
			return ft[1];
		}
	}
}
*/


function callApp(appurl) {
	if (BayerRules.isIPad() || BayerRules.isIPhone()) {
		//showAppMessage("ipad");
		if(forapplang == 'de') {
				window.location.href = "http://itunes.apple.com/de/app/id480186733?mt=8&uo=4";
		} else {
				window.location.href = "http://itunes.apple.com/us/app/id480186733?mt=8&uo=4";
		}
	} else if(BayerRules.isAndroid()) {
		if(BayerRules.isNotSupportedAndroid() == false && BayerRules.isCompatibleAndroid() ){
			if(forapplang == 'de') {
				window.location.href = "https://market.android.com/details?id=de.bayer.magazinApp&hl=de";
			} else {
				window.location.href = "https://market.android.com/details?id=de.bayer.magazinApp&hl=en";
			}
		} else {
			if(BayerRules.isCompatibleAndroid() == false){
				showAppMessage("nosmartphones");
			} else {
				showAppMessage("incompatibletablet");
			}
		}
	} else {
		if (BayerRules.isScreensizeOk() && BayerRules.isScreensizeOk2() && BayerRules.isMobileClient() == false) {
				if (BayerRules.isCompatible()) {
					if (BayerRules.isResolutionOk()) {
						showApp(appurl);
					} else {
						if (BayerRules.isMac()) {
							showApp(appurl);
						} else {
							showApp(appurl);
							showAppMessage("webappF11");
						}
					}
				} else if (BayerRules.isCompatible() == false) {
					if (BayerRules.isIE() && BayerRules.isIEcompat()) {
						showAppMessage("compatmode");
					} else {
						showAppMessage("updatebrowser");
					}
				} else if (BayerRules.uaVersion() == false) {
						showApp(appurl);
						showAppMessage("incompatible");
				}
		} else if (BayerRules.isScreensizeOk2() == false && BayerRules.isMobileClient() == false) {
			if (BayerRules.uaVersion() == false) {
				showApp(appurl);
				showAppMessage("incompatibletoosmall");
			} else if (BayerRules.isAndroid()) {
			showAppMessage("nosmartphones");
			} else {
				showApp(appurl);
				showAppMessage("toosmall");
			}
		} else {
			showAppMessage("nosmartphones");
		}
	}
}


			
function showApp(appurl) {
if($("#appcontainer").length == 0){
	var docHeight = $(document).height();
	jQuery('body').append('<div id="divfixed"></div><div id="appcontainer"></div>');
	jQuery('#divfixed').css({"height":docHeight});
	jQuery('#appcontainer').css("top", 0);
	jQuery('#appcontainer').append('<div id="closeframe">x</div><iframe src="'+appurl+'" name="Appframe" id="app" scrolling="no" frameborder="0" height="731"></iframe>');


	//$('#modal .modalbody').html('<iframe src="'+appurl+'" name="Appframe" id="app" scrolling="no" frameborder="0" height="731" width="975"></iframe>');
	//$('#modal .modalbody').css({ "margin-top": "-58px", "margin-left": "-20px", "margin-bottom": "-20px" });

	//$('#modal').reveal({
	//	closed: function(){$(".modalbody").empty();}
	//});
	
	jQuery(document).bind("keyup", function(e){
		if (e.which==27){
			$("#closeframe").trigger('click');
			jQuery(document).unbind("keyup");
		} else if (e.which==122){
			jQuery('#appmsgclose').trigger('click');
		}
	});

	jQuery('#closeframe, #divfixed').click(function() {
		jQuery('#appcontainer, #divfixed, #appmessage').remove();
	});
}
}

function showCloseBtn() {
  jQuery('#closeframe').show();
}
function hideCloseBtn(){
  jQuery('#closeframe').hide();
}

function showAppMessage(msg) {
	var appmsg;
	var appmsgclass = "appstandard";
if(forapplang == 'de') {
	switch (msg) {
		case "webappF11":
			appmsg = "Drücken Sie F11, um das Bayer-Magazin im Vollbild&shy;modus zu erleben.</p><p class='txtsmll'>Über ein erneutes Drücken von F11 können Sie den Vollbildmodus wieder deaktivieren.";
			appmsgclass = "appf11"
			break;
		case "nosmartphones":
			appmsg = "Das Bayer magazin ist ein innovatives multimediales Format, das leider von Ihrem Smartphone nicht unterstützt wird.</p><p class='txtsmll'>Sie können das Bayer magazin von Ihrem Desktop PC oder Laptop aus nutzen oder als App für Tablet-PCs oder Smartphones ab Version iOS 5+ und Android OS 4+ herunterladen. Sie finden das Bayer magazin unter <a href='http://www.magazin.bayer.de'>www.magazin.bayer.de</a>. ";
			appmsgclass = "appstandard"
			break;
		case "incompatible":
			appmsg = "Das Bayer magazin ist ein innovatives multimediales Format, das in Ihrem Browser ggf. nur eingeschränkt dargestellt wird.</p><p>Um das Bayer magazin ohne Einschränkungen nutzen zu können, laden Sie sich bitte die aktuellste Version eines der folgenden Browser herunter. Sie finden das Bayer magazin unter <a href='http://www.magazin.bayer.de'>www.magazin.bayer.de</a>.";
			appmsgclass = "appincompatible"
			break;
		case "incompatibletablet":
			appmsg = "Das Bayer magazin ist ein innovatives multimediales Format, das leider von Ihrem Tablet nicht unterstützt wird.</p><p>Sie können das Bayer magazin von Ihrem Desktop PC oder Laptop aus nutzen oder es als iPad-App herunterladen. <a href='http://www.magazin.bayer.de'>www.magazin.bayer.de</a>.";
			appmsgclass = "appincompatible"
			break;
		case "incompatibletoosmall":
			appmsg = "Das Bayer magazin hat eine größere Auflösung als Ihr Monitor, daher wird das Format bei Ihnen nur eingeschränkt dargestellt.</p><p class='txtsmll'>Zudem konnte Ihr Browser nicht identifiziert werden. Um die bestmögliche Darstellungsqualität zu erzielen, laden Sie sich bitte die aktuellste Version eines der folgenden Browser herunter. Sie finden das Bayer magazin unter <a href='http://www.magazin.bayer.de'>www.magazin.bayer.de</a>.";
			appmsgclass = "appincompatible itoosmall"
			break;
		case "updatebrowser":
			appmsg = "Das Bayer magazin ist ein innovatives multimediales Format, das leider nicht von Ihrem Browser unterstützt wird. </p><p class='txtsmll'>Bitte laden Sie sich die aktuellste Version Ihres Browsers herunter. Sie finden das Bayer magazin unter <a href='http://www.magazin.bayer.de'>www.magazin.bayer.de</a>.";
			appmsgclass = "appupdatebrowser"
			break;
		case "toosmall":
			appmsg = "Das Bayer magazin hat eine größere Auflösung als Ihr Monitor, daher wird das Format bei Ihnen nur eingeschränkt dargestellt.";
			appmsgclass = "appstandard"
			break;
		case "compatmode":
			appmsg = "Bitte schalten Sie den Kompatibilitätsmodus Ihres Browsers aus, um das Bayer magazin erleben zu können.";
			appmsgclass = "appstandard"
			break;
		default:
			appmsg = "";
			break;
	}
	jQuery('body').append('<div id="appmessage" class="'+appmsgclass+'"><a href="#" class="appmsgclose">x</a><div class="appmsgtext"><h2>Hinweis</h2><p>'+appmsg+'</p></div><div class="appbrowser"><a href="http://www.mozilla-europe.org/de/" target="_blank"></a><a href="http://www.microsoft.com/downloads/de-de/default.aspx" target="_blank"></a><a href="http://www.google.de/chrome/" target="_blank"></a><a href="http://www.apple.com/de/safari/" target="_blank"></a><a href="http://www.opera.com/download/" target="_blank"></a></div></div>');
} else {
	//englisch messages
	switch (msg) {
		case "webappF11":
			appmsg = "Press F11 to experience the Bayer magazine in full screen mode. </p><p class='txtsmll'>Press F11 again to deactivate.";
			appmsgclass = "appf11"
			break;
		case "nosmartphones":
			appmsg = "Unfortunately, the Bayer magazine's innovative, multimedia format is not supported by your smartphone. </p><p class='txtsmll'>You can explore the Bayer magazine from your PC or laptop, or download it as an app for tablet PCs. You can find the Bayer magazine here: <a href='http://www.magazine.bayer.com'>www.magazine.bayer.com</a>. ";
			appmsgclass = "appstandard"
			break;
		case "incompatible":
			appmsg = "The browser you are currently using may restrict presentation of the Bayer magazine's innovative, multimedia format. </p><p>To avoid this, please download the latest version of one of the following browsers. You can find the Bayer magazine here: <a href='http://www.magazine.bayer.com'>www.magazine.bayer.com</a>.";
			appmsgclass = "appincompatible"
			break;
		case "incompatibletablet":
			appmsg = "Unfortunately, the Bayer magazine's innovative, multimedia format is not supported by your tablet.</p><p>You can explore the Bayer magazine from your PC or laptop, or download it as an app for smartphones. You can find the Bayer magazine here: <a href='http://www.magazine.bayer.com'>www.magazine.bayer.com</a>.";
			appmsgclass = "appincompatible"
			break;
		case "incompatibletoosmall":
			appmsg = "The Bayer magazine has a higher resolution than your monitor supports. Format presentation will therefore be limited. </p><p class='txtsmll'>In addition, it has not been possible to identify your browser. To achieve the best possible display quality, please download the most recent version of one of the following browsers. You can find the Bayer magazine here: <a href='http://www.magazine.bayer.com'>www.magazine.bayer.com</a>.";
			appmsgclass = "appincompatible itoosmall"
			break;
		case "updatebrowser":
			appmsg = "Unfortunately, the Bayer magazine's innovative, multimedia format is not supported by your browser. </p><p class='txtsmll'>Please download the latest version of your browser. You can find the Bayer magazine here: <a href='http://www.magazine.bayer.com'>www.magazine.bayer.com</a>.";
			appmsgclass = "appupdatebrowser"
			break;
		case "toosmall":
			appmsg = "The Bayer magazine has a higher resolution than your monitor supports. Format presentation will therefore be limited.";
			appmsgclass = "appstandard"
			break;
		case "compatmode":
			appmsg = "To experience the Bayer magazine, please turn off compatibility mode in your browser.";
			appmsgclass = "appstandard"
			break;
		default:
			appmsg = "";
			break;
	}
	jQuery('body').append('<div id="appmessage" class="'+appmsgclass+'"><a href="#" class="appmsgclose">x</a><div class="appmsgtext"><h2>Information</h2><p>'+appmsg+'</p></div><div class="appbrowser"><a href="http://www.mozilla.org/" target="_blank"></a><a href="http://www.microsoft.com/download/en/default.aspx" target="_blank"></a><a href="https://www.google.com/chrome/?hl=en" target="_blank"></a><a href="http://www.apple.com/safari/" target="_blank"></a><a href="http://www.opera.com/download/" target="_blank"></a></div></div>');
}

	jQuery('#divfixed').css({'z-index': '3001'});
	jQuery('.appmsgclose').click(function(e) {
		e.preventDefault();
		jQuery("#appmessage").remove();
		jQuery('#divfixed').css({'z-index': '2999'});
	});
}



$(document).ready(function(){
	forapplang = jQuery("html").attr("lang");													 
	if (BayerRules.isCompatible() == false && BayerRules.isIE() && BayerRules.isIEcompat() == false) {
		$("body").append('<script type="text/javascript" src="http://www.bayer.com/module/app-service.aspx"></script>');
	}
													 
	jQuery("a[href*='p-magazine.app.bayer.com']").click(function() {
		callApp(jQuery(this).attr("href"));
		return false;
	});

	jQuery("a[href*='www.magazin.app.bayer.de'], a[href*='www.magazine.app.bayer.com']").click(function() {
		callApp(jQuery(this).attr("href"));
		return false;
	});

//tracking
	jQuery("a[href*='www.magazin.bayer.de']").click(function() {
		callApp(appurl_de);
		if($(this).hasClass("trackmagkv")){
			$("body").append('<img src="/img/track/clickkvhpmagazin.gif" style="display:none;" />');
		}
		return false;
	});
	
	jQuery("a[href*='www.magazine.bayer.com']").click(function() {
		callApp(appurl_en);
		if($(this).hasClass("trackmagkv")){
			$("body").append('<img src="/img/track/clickkvhpmagazin.gif" style="display:none;" />');
		}
		return false;
	});
	
  jQuery("a.ituneslnk").click(function() {
    $("body").append('<img src="/img/track/clickkvhpmagazinapp.gif" style="display:none;" />');
  });
});

$(document).ready( function() {
	if(showapp){
		if(deeplink == 'http://www.magazin.app.bayer.detrue'){
			deeplink = appurl_de;
		} else if (deeplink == 'http://www.magazine.app.bayer.comtrue'){
			deeplink = appurl_en;
		}
    callApp(deeplink);
	}
	if(	document.location.href.indexOf('timetoact.de')<0 && 
			document.location.href.indexOf('ssl.bayer.com')<0 && 
			document.location.href.indexOf('/vorschau/')<0 && 
			document.location.href.indexOf('.tv-footage')<0 && 
			document.location.href.indexOf('secure.bayer.com')<0 && 
			document.location.href.indexOf('bayer2012')<0 && 
			document.location.href.indexOf('p-bayer')<0 && 
			document.location.href.indexOf('.video-center.')<0 ){
		if(forapplang == 'de') {
			document.domain = "bayer.de";
		} else {
			document.domain = "bayer.com";
		}
	}
});


