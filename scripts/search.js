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
			alert("Please change the 'search as you type' list (availableTags)")
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
			$(".searchbtn").trigger('click');
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

var searchpage = "your-searchpage.html";

function submitSearch(){
	alert("Please implement the search");
}

activateSearch();
