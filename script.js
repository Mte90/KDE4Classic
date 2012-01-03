$(document).ready(function() {
	 $.backstretch("/lepton/templates/KDE4Classic/images/background.jpg", {speed: 10});
 //ACCORDION BUTTON ACTION
 $('.menu-expand').hover(function(e) {
	 e.preventDefault();
	 $(this).find('ul').stop().slideDown('normal');
 },function(e) {
	 $(this).find('ul').stop().slideUp('normal');
 });
 $('.header-').cssAnimate({'top':'0px'},2500);

$.getJSON("http://twitter.com/statuses/user_timeline.json?screen_name=mte90net&count=4&callback=?",
	function(data){
	$.each(data, function(i,item){
		ct = ' '+item.text.replace(/http:\/\/\S+/g,'<a href="$&" target="_blank">$&</a>');
		ct = ct.replace(/\s(@)(\w+)/g,' @<a href="http://twitter.com/$2" target="_blank">$2</a>');
		ct = ct.replace(/\s(#)(\w+)/g,' #<a href="http://search.twitter.com/search?q=%23$2" target="_blank">$2</a>');
		$("#tweet").append(ct+'<br/><br/>');
	});
	});
});