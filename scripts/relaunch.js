function openNewWindow(url, width, height, iDefaultPosTop, iDefaultPosLeft, Userparam) {
	var iPosLeft;
	var iPosTop;
	if (screen.width) {
		iPosLeft = (screen.width / 2) - width / 2;
		iPosTop = (screen.height / 2) - height / 2;
	} else {
		iPosLeft = iDefaultPosLeft;
		iPosTop = iDefaultPosTop;
	}
	param = Userparam + ",top=" + String(iPosTop) + ",left=" + String(iPosLeft);
	window.open(dbPath + "/id/" + url, "", "width=" + width + ",height=" + height + "," + param);
}

function openContact(url) {
	openNewWindow(url, '670', '300', '0,', '0', 'scrollbars=no,resizable=yes,statusbar=no');
}

/* Opens the Picture PopUp for the Current PI*/
function showPIPictures(cusurl, iAnchorIndex, piNo) {

	var url = ( typeof cusurl == "string") ? cusurl : ("http://" + location.host + dbPath + "/ID_Image/" + pageUniqueID + (( typeof iAnchorIndex !== "undefined") ? "?open#anchor" + iAnchorIndex : ""));
	var width = "504";
	var height = "570";
	var Userparam = "scrollbars=yes,resizable=yes,statusbar=no";
	var iPosLeft;
	var iPosTop;
	if (screen.width) {
		iPosLeft = (screen.width / 2) - width / 2;
		iPosTop = (screen.height / 2) - height / 2;
	} else {
		iPosLeft = 0;
		iPosTop = 0;
	}
	var param = Userparam + ",top=" + String(iPosTop) + ",left=" + String(iPosLeft);
	dcsMultiTrack('DCS.dcsuri', url, 'WT.ti', piNo + ': Grafik Download, JS-PopUp Aufruf aus Content: ' + pageUniqueID);
	window.open(url, "", "width=" + width + ",height=" + height + "," + param);
}

/*!!Do not delete this function!!.
 You need this function to use the validation of the formulargenerator.*/

function getFieldValue(theField, vType) {
	//this function will return the field value (or value list) based on the element type
	theValue = "";
	sep = ";";
	hits = 0;
	vType = vType.toLowerCase();
	//text is the user-entered value as a string
	if (vType == "text")
		return (theField.value);
	//textarea is the user-entered value as a string array of one element
	if (vType == "textarea")
		return (theField.value);
	//select is an array of selection pointers to an array of strings representing the choices
	if (vType == "select") {
		for ( i = 0; i < theField.options.length; i++) {
			if (theField.options[i].selected) {
				hits++;
				if (theField.options[i].value == "") {
					e = theField.options[i].text;
				} else {
					e = theField.options[i].value;
				}
				if (hits == 1) {
					theValue = e;
				} else {
					theValue += sep + e;
				}
			}
		}
		return (theValue);
	}
	if (vType == "dropdown") {
		if (theField.options[0].selected) {
			return ("");
		}
		return ("True");
	}
	// check Emailaddress
	if (vType == "mail") {
		var mail = theField.value;
		if (mail == "") {
			return ("");
		} else {
			var erg = mail.search(/.+@..+\...+/);
			if (erg == -1) {
				return ("");
			}
			var erg = mail.search(/\s/);
			if (erg != -1) {
				return ("");
			}
		}
		return (mail);
	}
	//checkboxes & radio buttons
	if (vType == "checkbox" || vType == "radiobutton") {
		if (theField.value == null) {
			//if we're here, we are validating a radio button or a nn multi-element checkbox
			for ( i = 0; i < theField.length; i++) {
				if (theField[i].checked) {
					hits++;
					if (hits == 1) {
						theValue = theField[i].value;
					} else {
						theValue += sep + theField[i].value;
					}
				}
			}
		}
		return (theValue);
	} else {
		return (theField.value);
	}
}

/* Use this function to open a link. Use any htmltag with parameter "value (URL [|"_self"])"  to open the url. */

function openElementLink(objField, sType) {
	var sFieldValue = getFieldValue(objField, sType);

	if (sFieldValue != "") {
		var aValue = sFieldValue.split("|");
		if (aValue[1] == "_self") {
			location.href = aValue[0];
		} else {
			window.open(aValue[0]);
		}
	}
}

/* Language Switcher: opens agent and returns the document in an other language if available */
function switchLanguage(UniqueID, language, ccmsn) {
	newurl = "../CUSLangSwitch?OpenAgent&ID=" + UniqueID + "&L=" + language + "&CCM=" + ccmsn + "";
	location.href = newurl;
}

function email(sName, sDomain, sTLD, sClass) {
	/************************************************************************************************************/
	/* !!! ALL CHANGES MADE IN THIS FUNCTION MUST ALSO BE CONSIDERED IN THE JS GLOBALS-BAYNEWS-EXPORT !!!                    */
	/************************************************************************************************************/
	var email = sName + "@" + sDomain + "." + sTLD;
	if ( typeof sClass === "undefined") {
		document.write(email);
	} else {
		sClass = ' class="' + sClass + '"';
		document.write('<a href="mailto:' + email + '"' + sClass + '>' + email + '</a>');
	}
}

function submitSearchForm() {
	var bolSubmit = validateSearchForm();
	if (bolSubmit == true) {
		document.searchform.submit()
	}
}

function getBNDCCookie() {
	var cookieValue = getCookie(BNDCCookieName);
	if (cookieValue == null || typeof cookieValue == "object") {
		cookieValue = "";
	}
	return cookieValue;
}

function openPodcast(podcasturl) {
	var podcast = window.open(podcasturl, 'podcast', 'location=no,menubar=no,resizable=no,scrollbars=yes,status=no,toolbar=no,width=735,height=730');
	podcast.focus();
}

function addToDownloadCenter(fileName, sRemoteUNID) {

	function changeLink(sStatus) {

		var links = document.getElementsByTagName("a");
		var attr = "";

		if (sStatus === "add") {
			var sText = ((language === "DE") ? "erfolgreich hinzugefgt!" : "added successfully!");
		} else {
			var sText = ((language === "DE") ? "bereits im Download Center" : "already in the download center");
		}

		for (var i = 0; i < links.length; i++) {
			attr = links[i].getAttribute("onclick");
			if ( typeof attr !== "undefined" && attr !== null) {
				attr = attr.toString();
				if (attr.indexOf("addToDownloadCenter") > -1 && attr.indexOf(fileName) > -1) {
					links[i].innerHTML = "<span style=\"cursor:text\">" + sText + "</span>";
					links[i].onclick = function() {
						return false
					};
				}
			}
		}

	}

	var sPageUniqueID = ( typeof sRemoteUNID !== "undefined") ? sRemoteUNID : pageUniqueID;
	if (navigator.cookieEnabled == false) {
		alert(BNDCNoCookieErrorMsg);
	}
	var cookieValue = getBNDCCookie();
	if (cookieValue != "") {
		var entryList = new Array();
		if (cookieValue.indexOf(":") == -1)
			entryList[0] = cookieValue
		else
			entryList = cookieValue.split(":");
		var found = false;
		var imgCnt = 0;
		var txtCnt = 0;

		for (var i = 0; i < entryList.length; i += 1) {
			if (entryList[i] == (sPageUniqueID + "|" + fileName))
				found = true;
			if (entryList[i].indexOf("|images") >= 0)
				imgCnt++
			else
				txtCnt++;
		}
		if (found == true) {
			alert(BNDCExistsErrorMsg);
			changeLink();
			return false;
		}
		if (txtCnt >= BNDCMaxTextFiles && fileName.indexOf("images") == -1) {
			alert(BNDCMaxTextErrorMsg);
			return false;
		}
		if (imgCnt >= BNDCMaxImageFiles && fileName.indexOf("images") != -1) {
			alert(BNDCMaxImageErrorMsg);
			return false;
		}
	}

	if (cookieValue != "") {
		cookieValue += ":";
	}
	cookieValue += sPageUniqueID + "|" + fileName;
	var cookieCode = BNDCCookieName + "=" + cookieValue + "; path=/";
	document.cookie = cookieCode;
	changeLink("add");
	refreshDownloadCenterInfo();
	//		 alert(cookieCode);
}

function getDownloadCenterFiles() {
	var cookieValue = getBNDCCookie();
	if (cookieValue != "") {
		var list = cookieValue.split(":");
	}
	return cookieValue;
}

function showDownloadCenterFiles() {
	var cookieValue = getBNDCCookie();
	var downloadCenterCode = "";
	if (cookieValue != "") {
		var list = cookieValue.split(":");
		for (var i = 0; i < list.length(); i += 1) {
			downloadCenterCode = "";
		}
	}
	document.write(downloadCenterCode);
}

function refreshDownloadCenterInfo(additionalInfoText) {
	//		 if(typeof additionalInfoText == "undefined") additionalInfoText = ""
	//		 else additionalInfoText = additionalInfoText+"\n";
	var cookieValue = getBNDCCookie();
	if ( typeof window.opener !== "undefined" && !(window.opener == null)) {
		var dcobj = window.opener.document.getElementById(BNDCInfoId);
	} else {
		var dcobj = document.getElementById(BNDCInfoId);
	}
	if (cookieValue != "") {
		var entryList = new Array();
		if (cookieValue.indexOf(":") == -1)
			entryList[0] = cookieValue
		else
			entryList = cookieValue.split(":");
		if (dcobj) {
			dcobj.innerHTML = entryList.length;
		}
	} else {
		if (dcobj) {
			dcobj.innerHTML = "0";
		}
	}
	//		 alert(additionalInfoText+"Downloadcenter enthรยคlt " + entryList.length + " Downloads");
	return false;
}

function removeFromDownloadCenter(entryID, tagID) {
	var cookieValue = getBNDCCookie();
	if (cookieValue == "") {
		return false;
	}
	var entryList = new Array();
	if (cookieValue.indexOf(":") == -1)
		entryList[0] = cookieValue
	else
		entryList = cookieValue.split(":");

	var change = false;
	var newValue = new Array();
	var n = 0;
	for (var i = 0; i < entryList.length; i += 1) {
		if (entryList[i] == entryID) {
			change = true;
		} else {
			newValue[n] = entryList[i];
			n++;
		}
	}
	if (change == true) {
		cookieValue = newValue.join(":");
		var cookieCode = BNDCCookieName + "=" + cookieValue + "; path=/";
		document.cookie = cookieCode;
		document.getElementById(tagID).style.visibility = "hidden";
		document.getElementById(tagID).style.display = "none";
		if (newValue.length == 0) {
			var linkobj = document.getElementById("downloadZIPLink");
			if (linkobj)
				linkobj.style.display = "none";
			var emptyobj = document.getElementById("emptyDownloadCenter");
			if (emptyobj)
				emptyobj.style.display = "block";
		}
		refreshDownloadCenterInfo();
	}
	//		 alert(cookieCode);
}

function showElementWithId(boxId) {
	var obj = document.getElementById(boxId);
	var displayValue = ( typeof showElementWithId.arguments[1] == "string") ? showElementWithId.arguments[1] : "block";
	if (obj)
		obj.style.display = displayValue;
}

function hideElementWithId(boxId) {
	var obj = document.getElementById(boxId);
	if (obj)
		obj.style.display = "none";
}

//use to open media popups for videos, background informations and podcasts
function openMediaPopUp(sUnid, sType, iAnchorIndex) {
	var sPageName = "MediaPopUp";

	var url = "http://" + location.host + dbPath + "/id/" + sPageName + "?open&unid=" + sUnid + "&type=" + sType + (( typeof iAnchorIndex !== "undefined") ? "#anchor" + iAnchorIndex : "");
	var width = "504";
	var height = "570";
	var Userparam = "scrollbars=yes,resizable=yes,statusbar=no";
	var iPosLeft;
	var iPosTop;
	if (screen.width) {
		iPosLeft = (screen.width / 2) - width / 2;
		iPosTop = (screen.height / 2) - height / 2;
	} else {
		iPosLeft = 0;
		iPosTop = 0;
	}
	var param = Userparam + ",top=" + String(iPosTop) + ",left=" + String(iPosLeft) + "," + "width=" + width + ",height=" + height;
	//                dcsMultiTrack('DCS.dcsuri', url, 'WT.ti', 'Media PopUp Aufruf fr Typ: ' + sType + ", UNID: " + sUnid);
	var MediaPopUp = window.open(url, "MediaPopUp", param);
	MediaPopUp.focus();

}

function openPodcastPopUp(sUrl, sParameters) {
	sParameters = ( typeof sParameters === "undefined") ? "location=no,menubar=no,resizable=no,scrollbars=yes,status=no,toolbar=no,width=1024,height=800" : sParameters;
	var sPodcastPopup = window.open(sUrl, "PodcastPopup", sParameters);
	sPodcastPopup.focus();
}


$(".TextBubble").tooltip();

$(document).ready(function() {

	clickOn = function() {
		if ($(this).hasClass("span_unsel")) {

			//span_sel --> span_unsel
			$(".span_sel").addClass("span_unsel").removeClass("span_sel");
			//span_unsel (this) --> span_sel
			$(this).addClass("span_sel").removeClass("span_unsel");

			//li_sel --> li_unsel
			$(".li_sel").addClass("li_unsel").removeClass("li_sel");
			//li_unsel --> li_sel
			$(this).parent().parent().addClass("li_sel").removeClass("li_unsel");

			// cont_sel --> cont_unsel --> hide
			$(".cont_sel").addClass("cont_unsel").removeClass("contSel").hide();
			// cont_unsel --> cont_sel --> show
			$(".li_sel > .cont_unsel").addClass("cont_sel").removeClass("cont_unsel").show();

                window.location= "#"+$(this).attr('id');

		} else {
			$(".cont_sel").removeClass("cont_sel").addClass("cont_unsel").hide();
			$(".span_sel").removeClass("span_sel").addClass("span_unsel");

			$(".li_sel").removeClass("li_sel").addClass("li_unsel");
		}
	};

	$(".cont_unsel").hide();

	$(".span_sel").click(clickOn);
	$(".span_unsel").click(clickOn);

	$(".pressContent_register .l1:first-child").addClass("l1first");
	$(".pressContent_register .l1:last-child").addClass("l1last");
});

function enablePressSearch() {

	$(document).ready(function() {

		function addOrReplaceURLParameter(sUrl, sName, sVal) {
			var newUrl = sUrl;
			
			if (newUrl.indexOf('&' + sName + '=') > -1) {
				console.log('parameter "' + sName + '"found');
				var a = newUrl.split("&");
				console.log('split paramter');
				var reg;
				for(var i = 0; i<a.length;i++) {
					e = a[i];
					console.log('search in '+ e +' for "' + ('^' + sName + '=(.*)$') + '"');
					reg = new RegExp('^' + sName + '=(.*)$','i');
					console.log('regExp Match? ->' + RegExp.$1 + '\nNew value: ' + sVal);
					console.log('e before replace: ' + e);
					e = e.replace(reg, sName + '=' + sVal);
					console.log('e after replace: ' + e);
					a[i] = e;
				};
				newUrl = a.join('&');
			} else {
				newUrl = newUrl + ((newUrl.indexOf('?')>-1)?'':'?open') + '&'+sName+'='+sVal;
			}

			return newUrl;
		};

		var clearSearchField = function() {
			if($(this).val() === $(this).attr('default')){
				$(this).val('');
			}
		};

		var executePressSearch = function(bEnableValidation) {
			var b = true;
			var p = "";
			var v = "";
			var newUrl = location.pathname + "?open";

			$(".submitval").each(function() {
				$(this).removeClass('validationError');
				if(bEnableValidation === true && $(this).attr('validate') === "true" && ($(this).attr('default') === $(this).val() || $(this).val() === '')) {
					b = false;
					$(this).addClass('validationError');
				}
				p = $(this).attr("name");
				v = $(this).val();
					console.log($(this).attr('default'));
				 
				if ($(this).val() === $(this).attr('default')) {
					newUrl += "&" + p; 
				} else if($(this).val() === "") {
					newUrl += "&" + p; 
				} else {
					console.log('add parameter');
					newUrl += "&" + p + "=" + v; 
				}
			});
			if(b) {
				location.href = newUrl;
			}

		};

		$(".submitonchange").change(executePressSearch);
		$(".submit").submit(function(){executePressSearch(true)});
		$(".submitbtn").click(function(){executePressSearch(true)});
		
		$(".search .submitval").focus(clearSearchField);

	});

};


function initNewsletterFeatures() {
	if ($('.newsletter-form').length > 0) {
		$('.newsletter-form input[type=checkbox].all').click(function(){
			var oCheckbox = $(this);
			var bChecked = oCheckbox.attr('checked') ? true : false;
			oCheckbox.parent().parent().find('input[type=checkbox]').attr('checked', bChecked);
		});
		
		$('.newsletter-form input[type=checkbox]').click(function(){
			var oCheckbox = $(this);
			var bChecked = oCheckbox.attr('checked') ? true : false;
			if (bChecked === false) {
				oCheckbox.parent().parent().find('input[type=checkbox].all').attr('checked', bChecked);
			}
		});
		
		
		$('.newsletter-form .journalist-only').hide();
		$('.newsletter-form .journalist-switch').change(function(){
			if ($(this).val() === 'journalist') {
				$('.newsletter-form .journalist-only').show(300);
			}
			else {
				$('.newsletter-form .journalist-only').hide(300);
			}
		});
	}
}

function highlightNavigation(){
	if($('.lfthnd a').length > 0){
		var s = location.search;
		var p = "&parent=";
		var posParent = s.indexOf(p);
		var posNext = s.indexOf("&",posParent+p.length);
		posNext = (posNext<0)?undefined:posNext;
		if (posParent >= 0) {
			var parentID = s.substring(posParent + p.length, posNext);
			sMatch = "/id/" + parentID;
		} else {
			sMatch = location.pathname;
			sMatch = sMatch.substr(sMatch.indexOf('.nsf')+4);
		}
		
		if($('.lfthnd a[href*="' + sMatch + '"]').length <= 0) {
			sMatch = "/id/" + pageId;
		}
		if($('.lfthnd a[href*="' + sMatch + '"]').length <= 0) {
			sMatch = (language=="DE")?"/id/news-overview-category-search-de":"/id/news-overview-category-search-en";
		}
		
		
		
		
		$('.lfthnd a').removeClass('selected');
		$('.lfthnd a[href*="' + sMatch + '"]').parentsUntil('.lfthnd', 'li').find('a:first').addClass('selected');
		$('.lfthnd a[href*="' + sMatch + '"]').parentsUntil('.lfthnd', 'li').find('a:first').parent().addClass('selected');
		
		var breadcrumb = "";
		$('.lfthnd a.selected').each(
		    function(){
		        breadcrumb += '<li><a href="' + $(this).attr('href') + '">' + $(this).html() + '</a></li>';
		    }
		);
		$('.breadcrumb .last').removeClass('last');
		$('.breadcrumb').append(breadcrumb);
		$('.breadcrumb li:last').addClass('last');
		
	}
}

$(document).ready(function(){
	
$.fn.values = function(data) {
   var inps = $(this).find(":input").get();

    if(typeof data != "object") {
       // return all data
        data = {};

        $.each(inps, function() {
            if (this.name && (this.checked
                        || /select|textarea/i.test(this.nodeName)
                        || /text|hidden/i.test(this.type))) {

                if(data[this.name] == undefined){
                    data[this.name] = [];
                }
                data[this.name].push($(this).val());
            }
        });
        return data;
    } else {
        $.each(inps, function() {
            var $this = $(this);
            if (this.name && data[this.name]) {

				var names = data[this.name];
                if(Object.prototype.toString.call(names) !== '[object Array]'){
                    names = [names]; //backwards compat to old version of this code
                }
                if(this.type == 'checkbox' || this.type == 'radio') { 
                    var val = $this.val();
                    var found = false;
                    for(var i = 0; i < names.length; i++){
                        if(names[i] == val){
                            found = true;
                            break;
                        }
                    }
                    $this.attr("checked", found);
                } else {
                    $this.val(names[0]);
                }
            } else {
                if(this.type == 'checkbox' || this.type == 'radio') { 
                    $this.attr("checked", false);
                } else if(this.type == 'text' || this.type == 'password') {
                    $this.val('');
                }
			}
       });
       return $(this);
    }
};

	
	highlightNavigation();
	enablePressSearch();
	initNewsletterFeatures();
});


/*!
 * jQuery Cookie Plugin v1.3.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(e,t,n){function i(e){return e}function s(e){return o(decodeURIComponent(e.replace(r," ")))}function o(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}return e}function u(e){return a.json?JSON.parse(e):e}var r=/\+/g;var a=e.cookie=function(r,o,f){if(o!==n){f=e.extend({},a.defaults,f);if(o===null){f.expires=-1}if(typeof f.expires==="number"){var l=f.expires,c=f.expires=new Date;c.setDate(c.getDate()+l)}o=a.json?JSON.stringify(o):String(o);return t.cookie=[encodeURIComponent(r),"=",a.raw?o:encodeURIComponent(o),f.expires?"; expires="+f.expires.toUTCString():"",f.path?"; path="+f.path:"",f.domain?"; domain="+f.domain:"",f.secure?"; secure":""].join("")}var h=a.raw?i:s;var p=t.cookie.split("; ");var d=r?null:{};for(var v=0,m=p.length;v<m;v++){var g=p[v].split("=");var y=h(g.shift());var b=h(g.join("="));if(r&&r===y){d=u(b);break}if(!r){d[y]=u(b)}}return d};a.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)!==null){e.cookie(t,null,n);return true}return false}})(jQuery,document);

/*
    json2.js
    2013-05-26
    Public Domain.
*/
if(typeof JSON!=="object"){JSON={}}(function(){"use strict";function f(e){return e<10?"0"+e:e}function quote(e){escapable.lastIndex=0;return escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t==="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];if(a&&typeof a==="object"&&typeof a.toJSON==="function"){a=a.toJSON(e)}if(typeof rep==="function"){a=rep.call(t,e,a)}switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a){return"null"}gap+=indent;u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1){u[n]=str(n,a)||"null"}i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]";gap=o;return i}if(rep&&typeof rep==="object"){s=rep.length;for(n=0;n<s;n+=1){if(typeof rep[n]==="string"){r=rep[n];i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}else{for(r in a){if(Object.prototype.hasOwnProperty.call(a,r)){i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}";gap=o;return i}}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;if(typeof JSON.stringify!=="function"){JSON.stringify=function(e,t,n){var r;gap="";indent="";if(typeof n==="number"){for(r=0;r<n;r+=1){indent+=" "}}else if(typeof n==="string"){indent=n}rep=t;if(t&&typeof t!=="function"&&(typeof t!=="object"||typeof t.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":e})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i==="object"){for(n in i){if(Object.prototype.hasOwnProperty.call(i,n)){r=walk(i,n);if(r!==undefined){i[n]=r}else{delete i[n]}}}}return reviver.call(e,t,i)}var j;text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}})();


function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
} 	

function NewsletterValidateEmailOnSumbmit(sErrMsg) {
	var email = $("#email").val();
	var valid = (email !== "" && IsEmail(email));
	if(!valid) {
		alert(sErrMsg);
	}
	return valid;
}




function switchCB(id){if(document.getElementById){
	var cb=document.getElementById(id);
	cb?cb.checked=(!cb.checked):null}
}

function validateNewsletterFormular(ob)
    {
	var chkE = 1;
	var fieldvalue="";
var v, v2;
//     var l =document.Person.NewsKurierOrderIssuesRessorts.length;
//     var l =ob.NewsKurierOrderIssuesRessorts.length;

	var v = $('#FullName').val();
	if (v == "") {
		alert((lang=="de")?"Bitte geben Sie einen Benutzernamen ein.":"Please enter a unsername.");
		$('#FullName').focus();
		return false;
	} else {
                        var erg  = v.search(/[ไ๖ฤึ!"ง$%&()?]/);
                        if (erg != -1) {
			alert((lang=="de")?"Bitte geben Sie einen Benutzernamen ohne Umlaute und Sonderzeichen ein.":"Please enter a username without any special characters. ([ไ๖ฤึ!\"ง$%&()?])")
			return false;
                        }
	} 
	
	v = $('#HTTPPasswordEdit').val();
		if (v == "") {
		alert((lang=="de")?"Bitte geben Sie ein Passwort ein. Ihr Passwort darf keine Umlaute, Sonderzeichen oder Leerzeichen enthalten.":"Pleaser enter a password.");
		$('#HTTPPasswordEdit').focus();
		return false;
		}

	v2 = $('#PasswordConfirm').val();
		if (v2 == "") {
		alert((lang=="de")?"Bitte wiederholen Sie das Passwort.":"Pleaser repeat your password.");
		$('#PasswordConfirm').focus();
		return false;
		}

		if (v2 !== v) {
		alert((lang=="de")?"Das wiederholte Passwort stimmt nicht berein, bitte geben Sie in beiden Passwort Feldern das gleiche Passwort ein":"The passwords don't match, please enter the same password in both fields.");
		$('#PasswordConfirm').focus();
		return false;
		}


	v = $('#MailAddress').val();
		if (v == "") {
			alert((lang=="de")?"Bitte geben Sie eine E-Mail-Adresse ein, an die der Newsletter verschickt werden soll.":"Please enter an email address.");
			$('#MailAddress').focus();
			return false;
		} else {
			var erg  = v.search(/.+@..+\...+/);
	                        if (erg==-1) {
	            	            alert((lang=="de")?"Bitte geben Sie eine gltige E-Mail-Adresse ein.":"Please enter a valid email address.");
				$('#MailAddress').focus();
				return false;
                        	}
	                        var erg = v.search(/\s/);
            	            if(erg!=-1) {
				alert((lang=="de")?"Bitte geben Sie eine gltige E-Mail-Adresse ein.":"Please enter a valid email address");
				$('#MailAddress').focus();
				return false;
                        
                        	}
                	} 		

	if ( (lang == "de" & $('input[name="NewsKurierOrderIssuesRessorts"]').filter('[checked="checked"]').length <= 0 && $('input[name="NewsKurierOrderDivisions"]').filter('[checked="checked"]').length <= 0 && $('input[name="NewsKurierOrderLocations"]').filter('[checked="checked"]').length <= 0) |  (lang == "en" & $('input[name="MailServiceENOrderSegments"]').filter('[checked="checked"]').length <= 0 && $('input[name="MailServiceENOrderBusiness"]').filter('[checked="checked"]').length <= 0 && $('input[name="MailServiceENOrderLocations"]').filter('[checked="checked"]').length <= 0) )
    	{
		alert((lang=="de")?"Bitte wไhlen sie mindestens einen Themenbereich aus ber den Sie gerne informiert werden wollen.":"Please select your subjects.");
		return false;
	}



$.cookie.json = true;
oStore = $("form.form").values();
$.cookie("newsletterstorage",oStore);

 }

function convertNamedArrayToString(a,lvl) {
  var sResult = "";
  var d1 = ":";
  var d2 = ",";
  lvl=lvl||0;
  var r="ฐ"+lvl+"ฐ";
  lvl++;
  var bFirst=true;

  for (var e in a) {
    v=a[e];
    if(typeof v === "string") {
    console.log(e + " = " + v);
      v = v+'';
      v.replace("'","\'");
v = "'"+v+"'";
    } else {
      v=convertNamedArrayToString(v,lvl)
    }
    sResult = sResult + ((bFirst?"":d2)+"{'"+e+"'"+d1+"["+v+"]}");
    bFirst=false;
  }
  return sResult;
}





function loeschen(ob) {

	var reg = document.Person.AutorizedApplications.value;
	Ergebnis = reg.match(/NewsInt/);
		
	if ( document.Person.BAYERRedakteur.value != "1"  && document.Person.BAYERVIPRight.value != "1" && Ergebnis != "NewsInt") {
		document.Person.DokumentDeletionFlag.value = "1";
	}
	if ( Ergebnis == "NewsInt" ) 
	{
	           	document.Person.AutorizedApplications.value= "NewsInt";
     	}
	else
	{
	           	document.Person.AutorizedApplications.value= "";
	}

	for(i=0;i< document.Person.NewsKurierOrderIssuesRessorts.length ;i++)
     	{
		if ( document.Person.NewsKurierOrderIssuesRessorts[i].checked == true ) 
            		document.Person.NewsKurierOrderIssuesRessorts[i].value="";
     	}
	for(i=0;i< document.Person.NewsKurierOrderDivisions.length ;i++)
	{
	       	if ( document.Person.NewsKurierOrderDivisions[i].checked == true ) 
            		document.Person.NewsKurierOrderDivisions[i].value="";
     	}
	for(i=0;i< document.Person.NewsKurierOrderLocations.length ;i++)
     	{
		if ( document.Person.NewsKurierOrderLocations[i].checked == true ) 
            		document.Person.NewsKurierOrderLocations[i].value="";
     	}
	document.Person.submit();
}
