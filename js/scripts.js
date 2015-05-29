// create a namespace for animations
var hsdA1 = {};

////////////////////////////////////////////
// 		HOME PAGE
////////////////////////////////////////////

hsdA1.bodyFadeInAnim1 = function () {
	TweenMax.from($("body"),5,{opacity:0, overwrite: "all"});
}

hsdA1.roomTypeAnim1 = function () {
	// location:  home page
	this.tmRTA1 = new TimelineMax();

	// make the posts disappear
	$.each($("ul.roomTypes li"), function(index, liItem) {
		TweenMax.set(liItem,{opacity:0, overwrite: "all"});
	});

	// delay the animation so that the page loading animation runs first
	this.tmRTA1.delay(2.5);

	// make each post appear
	// 1st post
	this.tmRTA1.staggerTo($("ul.roomTypes li:nth-child(1)"),3,{opacity:1, overwrite: "all"},3);
	// 2nd post
	this.tmRTA1.staggerTo($("ul.roomTypes li:nth-child(2)"),3,{opacity:1, overwrite: "all"},3);
	// 3rd post
	this.tmRTA1.staggerTo($("ul.roomTypes li:nth-child(3)"),3,{opacity:1, overwrite: "all"},3);
}

hsdA1.suitesAnim1 = function () {
	this.suiteAM1 = new TimelineMax();

	// make the posts disappear
	$.each($("section.suites .promobox"), function(index, liItem) {
		TweenMax.set(liItem,{opacity:0, overwrite: "all"});
	});

	// delay the animation so that the page loading animation runs first
	this.suiteAM1.delay(2.5);

	// make each post appear
	// 1st post
	this.suiteAM1.staggerTo($("section.suites .promobox:nth-child(1)"),3,{opacity:1, overwrite: "all"},3);
	// 2nd post
	this.suiteAM1.staggerTo($("section.suites .promobox:nth-child(2)"),3,{opacity:1, overwrite: "all"},3);
	// 3rd post
	this.suiteAM1.staggerTo($("section.suites .promobox:nth-child(3)"),3,{opacity:1, overwrite: "all"},3);

}

hsdA1.newsAnim1 = function () {
	this.newsAM1 = new TimelineMax();

	// make the posts disappear
	$.each($("#main.site-main article"), function(index, liItem) {
		TweenMax.set(liItem,{opacity:0, overwrite: "all"});
	});

	// delay the animation so that the page loading animation runs first
	this.newsAM1.delay(1.5);

	// make each post appear
	// 1st post
	this.newsAM1.staggerTo($("#main.site-main article:nth-child(1)"),3,{opacity:1, overwrite: "all"},3);
	// 2nd post
	this.newsAM1.staggerTo($("#main.site-main article:nth-child(2)"),3,{opacity:1, overwrite: "all"},3);
	// 3rd post
	this.newsAM1.staggerTo($("#main.site-main article:nth-child(3)"),3,{opacity:1, overwrite: "all"},3);
	// 4th post
	this.newsAM1.staggerTo($("#main.site-main article:nth-child(4)"),3,{opacity:1, overwrite: "all"},3);
	// 5th post
	this.newsAM1.staggerTo($("#main.site-main article:nth-child(5)"),3,{opacity:1, overwrite: "all"},3);
}

hsdA1.aboutAnimSet1 = function () {
	this.aboutAMS1 = new TimelineMax();

	// make the posts disappear
	$.each($("section.about .promobox"), function(index, itemObj) {
		TweenMax.set(itemObj,{opacity:0, overwrite: "all"});
	});

	// delay the animation so that the page loading animation runs first
	this.aboutAMS1.delay(2.5);

	// appears to be additional animation sequences occurring from the news animations
	// you have to add a 3rd to the sequence to get the 2nd div

	// make each post appear
	// 1st post
	this.aboutAMS1.staggerTo($("section.about .promobox:nth-child(1)"),3,{opacity:1, overwrite: "all"},3);
	// 2nd post
	this.aboutAMS1.staggerTo($("section.about .promobox:nth-child(2)"),3,{opacity:1, overwrite: "all"},3);
	// 2nd post
	this.aboutAMS1.staggerTo($("section.about .promobox:nth-child(3)"),3,{opacity:1, overwrite: "all"},3);
}

////////////////////////////////////////////
// 		END HOME PAGE
////////////////////////////////////////////

hsdA1.init = function () {
	// the init function for animations in the animation namespace hsdA1

	// on page load animations
	window.onload = function () {
		// hsdA1.bodyFadeInAnim1();
	}
	

	// home page animations
	hsdA1.roomTypeAnim1();

	// suites page animations
	hsdA1.suitesAnim1();

	// news page animations
	hsdA1.newsAnim1();

	// about page animations
	hsdA1.aboutAnimSet1();
}

// Doc ready function
$(function() {
  // Load your custom js in here

  hsdA1.init();

  // Load pickadate
  $('.datepicker').pickadate();

  // Load selectric
  $('select').selectric();

});