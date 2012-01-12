$(document).ready(function() {
	 $.backstretch("/templates/KDE4Classic/images/background.jpg", {speed: 10});
 //ACCORDION BUTTON ACTION
 $('.menu-expand').mouseover(function(e) {
	 e.preventDefault();
	 $(this).find('ul').stop(true, true).slideDown('normal');
 });
 $('.menu-expand').mouseout(function(e) {
	 $(this).find('ul').stop(true, true).slideUp('normal');
 });
 $('.header-').cssAnimate({'top':'0px'},2500);

$.getJSON("http://twitter.com/statuses/user_timeline.json?screen_name=mte90net&count=2&callback=?",
	function(data){
		$("#tweet").hide();
		$.each(data, function(i,item){
			ct = ' '+item.text.replace(/http:\/\/\S+/g,'<a href="$&" target="_blank">$&</a>');
			ct = ct.replace(/\s(@)(\w+)/g,' @<a href="http://twitter.com/$2" target="_blank">$2</a>');
			ct = ct.replace(/\s(#)(\w+)/g,' #<a href="http://search.twitter.com/search?q=%23$2" target="_blank">$2</a>');
			$("#tweet").append(ct+'<br/><br/>');
		});
		$("#tweet").fadeIn('slow');
	});
});
