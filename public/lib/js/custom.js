/**
 * Table of contents
 * -----------------------------------
 * 1.HEADER STICKY
 * 2.HEADER ACTIVE ADD CLASS
 * 3.HEADER COLLAPSE
 * 4.FIXED HEADER
 * 5.GLIGHTBOX VIDEO HERO
 * 6.AJAX MAILCHIMP SUBSCRIBE
 * 7.LOCAL SUBSCRIPTION
 * 8.TESTIMONIAL SLIDER
 * 9.CHAPTER SLIDER
 * 10.CONTACT FORM
 * 11.ODOMETER JS
 * 12.CHAPTER PREVIEW
 * 13.CHAPTER PREVIEW - 02
 * 14.AOS JS
 * 15.SMOOTH SCROLL ON BUTTON CLICK
 */

(function ($) {
    "use strict";
    var PATH = {};

    /******************** 1.HEADER STICKY ********************/
    PATH.HeaderSticky = function () {
        $(".navbar-toggler").on("click", function (a) {
            a.preventDefault(), $(".navbar").addClass("navbar_fixed");
        });
    };

    /******************** 2.HEADER ACTIVE ADD CLASS ********************/
    PATH.HeaderOnePageNav = function () {
        $(".scroll").onePgaeNav({
            activeClass: "active",
            wrapper: "#onepage-nav",
            navStop: 60,
            navStart: 200,
        });
    };

    /******************** 3.HEADER COLLAPSE ********************/
    PATH.MenuClose = function () {
        $(".navbar-nav a").on("click", function () {
            var toggle = $(".navbar-toggler").is(":visible");
            if (toggle) {
                $(".navbar-collapse").collapse("hide");
            }
        });
    };

    /******************** 4.FIXED HEADER ********************/
    PATH.HeaderFixed = function () {
        var varHeaderFix = $(window).scrollTop() >= 60,
            $navbar = $(".header");
        if (varHeaderFix) {
            $navbar.addClass("navbar_fixed");
        } else {
            $navbar.removeClass("navbar_fixed");
        }
    };

    /******************** 5.GLIGHTBOX VIDEO HERO ********************/
    PATH.videoModal = function () {
        var lightboxVideo = GLightbox({
            selector: ".glightbox3",
        });
    };
    /******************** 6.AJAX MAILCHIMP SUBSCRIBE ********************/
    PATH.ajaxChimp = function () {
        $("#subscribe-mailchimp").ajaxChimp({
            callback: mailchimpCallback,
            url: "http:////unitetheme.us12.list-manage.com/subscribe/post?u=5e0141c017272ff01c6c3a091&amp;id=335f7c3601", // Replace your mailchimp post url inside double quote "".
        });

        function mailchimpCallback(resp) {
            var error_msg = $("#subscribe-mailchimp").find(".error-msg");
            var success_msg = $("#subscribe-mailchimp").find(".success-msg");

            if (resp.result === "success") {
                error_msg.fadeOut(200);
                success_msg.html(resp.msg).fadeIn(200);
            } else if (resp.result === "error") {
                success_msg.fadeOut(200);
                error_msg.html(resp.msg).fadeIn(200);
            }
        }
    };

    /******************** 7.LOCAL SUBSCRIPTION ********************/
    PATH.localSubs = function () {
        $("#subscribe").submit(function (e) {
            e.preventDefault();
            var email = $("#subscriber-email").val();
            var dataString = "email=" + email;

            function isValidEmail(emailAddress) {
                var pattern = new RegExp(
                    /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
                );
                return pattern.test(emailAddress);
            }

            if (isValidEmail(email)) {
                $.ajax({
                    type: "POST",
                    url: "assets/subscribe/subscribe.php",
                    data: dataString,
                    success: function () {
                        $(".success-msg").fadeIn(1000);
                        $(".error-msg").fadeOut(500);
                        $(".hide-after").fadeOut(500);
                    },
                });
            } else {
                $(".error-msg").fadeIn(1000);
            }

            return false;
        });
    };

    /******************** 8.TESTIMONIAL SLIDER  ********************/
    PATH.TestimonialSlide = function () {
        var testimonialSlider = new Swiper(".clients-slider", {
            slidesPerView: 3,
            spaceBetween: 18,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    };
    /******************** 9.CHAPTER SLIDER  ********************/
    PATH.chapterSlide = function () {
        var chapterSlider = new Swiper(".chapter-slider", {
            slidesPerView: 4,
            spaceBetween: 18,
            loop: false,
            autoplay: false,
            allowTouchMove: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    };

    /******************** 10.CONTACT FORM ********************/
    PATH.contactForm = function () {
        function isValidEmail(emailAddress) {
            var pattern = new RegExp(
                /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
            );
            return pattern.test(emailAddress);
        }
        var $contact = $("#contact-form");
        if ($contact.length) {
            $contact.on("submit", function (e) {
                e.preventDefault();
                var success = $(this).find(".email-success"),
                    failed = $(this).find(".email-failed"),
                    loader = $(this).find(".email-loading"),
                    postUrl = $(this).attr("action");
                var data = {
                    name: $(this).find(".contact-name").val(),
                    email: $(this).find(".contact-email").val(),
                    subject: $(this).find(".contact-subject").val(),
                    message: $(this).find(".contact-message").val(),
                };
                if (
                    isValidEmail(data["email"]) &&
                    data["message"].length > 1 &&
                    data["name"].length > 1
                ) {
                    $.ajax({
                        type: "POST",
                        url: postUrl,
                        data: data,
                        beforeSend: function () {
                            loader.fadeIn(1000);
                        },
                        success: function (data) {
                            loader.fadeOut(1000);
                            success.delay(500).fadeIn(1000);
                            failed.fadeOut(500);
                        },
                        error: function (xhr) {
                            // if error occured
                            loader.fadeOut(1000);
                            failed.delay(500).fadeIn(1000);
                            success.fadeOut(500);
                        },
                        complete: function () {
                            loader.fadeOut(1000);
                        },
                    });
                } else {
                    loader.fadeOut(1000);
                    failed.delay(500).fadeIn(1000);
                    success.fadeOut(500);
                }
                return false;
            });
        }
    };

    /******************** 11.ODOMETER JS  ********************/
    PATH.OdoMeter = function () {
        $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    };

    /******************** 12.CHAPTER PREVIEW  ********************/
    PATH.chapterPreview = function () {
        var lightboxDescription = GLightbox({
            selector: ".glightbox2",
            slideEffect: "zoom",
        });
    };

    /******************** 13.CHAPTER PREVIEW - 02  ********************/
    PATH.chapterPreview2 = function () {
        const panels = document.querySelectorAll(".panel");

        panels.forEach((panel) => {
            panel.addEventListener("click", () => {
                removeActiveClasses();
                panel.classList.add("active");
            });
        });

        function removeActiveClasses() {
            panels.forEach((panel) => {
                panel.classList.remove("active");
            });
        }
    };

    /******************** 14.AOS JS  ********************/
    PATH.AOS = function () {
        AOS.init();
    };

    /******************** 15.SMOOTH SCROLL ON BUTTON CLICK  ********************/
    $(document).on("click", "a.smooth", function (event) {
        event.preventDefault();
        $("html, body").animate(
            { scrollTop: $($.attr(this, "href")).offset().top },
            1000
        );
    });

    /******************** DOCUMENT READY FUNCTION ********************/
    $(function () {
        PATH.HeaderSticky();
        PATH.HeaderOnePageNav();
        PATH.MenuClose();
        PATH.videoModal();
        /* PATH.ajaxChimp(); */
        PATH.localSubs();
        PATH.TestimonialSlide();
        PATH.chapterSlide();
        PATH.contactForm();
        PATH.OdoMeter();
        PATH.chapterPreview();
        PATH.chapterPreview2();
        PATH.AOS();
    });

    /******************** WINDOW ON SCROLL FUNCTION ********************/
    $(window).on("scroll", function () {
        PATH.HeaderFixed();
    });

    /******************** WINDOW ON LOAD FUNCTION ********************/
    $(window).on("load", function () {});
})(jQuery);

jQuery(document).ready(function($){
	var timelines = $('.cd-horizontal-timeline'),
		eventsMinDistance = 60;

	(timelines.length > 0) && initTimeline(timelines);

	function initTimeline(timelines) {
		timelines.each(function(){
			var timeline = $(this),
				timelineComponents = {};
			//cache timeline components 
			timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
			timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
			timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
			timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
			timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
			timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
			timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
			timelineComponents['eventsContent'] = timeline.children('.events-content');

			//assign a left postion to the single events along the timeline
			setDatePosition(timelineComponents, eventsMinDistance);
			//assign a width to the timeline
			var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
			//the timeline has been initialize - show it
			timeline.addClass('loaded');

			//detect click on the next arrow
			timelineComponents['timelineNavigation'].on('click', '.next', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'next');
			});
			//detect click on the prev arrow
			timelineComponents['timelineNavigation'].on('click', '.prev', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'prev');
			});
			//detect click on the a single event - show new event content
			timelineComponents['eventsWrapper'].on('click', 'a', function(event){
				event.preventDefault();
				timelineComponents['timelineEvents'].removeClass('selected');
				$(this).addClass('selected');
				updateOlderEvents($(this));
				updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
				updateVisibleContent($(this), timelineComponents['eventsContent']);
			});

			//on swipe, show next/prev event content
			timelineComponents['eventsContent'].on('swipeleft', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'next');
			});
			timelineComponents['eventsContent'].on('swiperight', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'prev');
			});

			//keyboard navigation
			$(document).keyup(function(event){
				if(event.which=='37' && elementInViewport(timeline.get(0)) ) {
					showNewContent(timelineComponents, timelineTotWidth, 'prev');
				} else if( event.which=='39' && elementInViewport(timeline.get(0))) {
					showNewContent(timelineComponents, timelineTotWidth, 'next');
				}
			});
		});
	}

	function updateSlide(timelineComponents, timelineTotWidth, string) {
		//retrieve translateX value of timelineComponents['eventsWrapper']
		var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
			wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
		//translate the timeline to the left('next')/right('prev') 
		(string == 'next') 
			? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth)
			: translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
	}

	function showNewContent(timelineComponents, timelineTotWidth, string) {
		//go from one event to the next/previous one
		var visibleContent =  timelineComponents['eventsContent'].find('.selected'),
			newContent = ( string == 'next' ) ? visibleContent.next() : visibleContent.prev();

		if ( newContent.length > 0 ) { //if there's a next/prev event - show it
			var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
				newEvent = ( string == 'next' ) ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
			
			updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
			updateVisibleContent(newEvent, timelineComponents['eventsContent']);
			newEvent.addClass('selected');
			selectedDate.removeClass('selected');
			updateOlderEvents(newEvent);
			updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
		}
	}

	function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
		//translate timeline to the left/right according to the position of the selected event
		var eventStyle = window.getComputedStyle(event.get(0), null),
			eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
			timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
			timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
		var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        if( (string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate) ) {
        	translateTimeline(timelineComponents, - eventLeft + timelineWidth/2, timelineWidth - timelineTotWidth);
        }
	}

	function translateTimeline(timelineComponents, value, totWidth) {
		var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
		value = (value > 0) ? 0 : value; //only negative translate value
		value = ( !(typeof totWidth === 'undefined') &&  value < totWidth ) ? totWidth : value; //do not translate more than timeline width
		setTransformValue(eventsWrapper, 'translateX', value+'px');
		//update navigation arrows visibility
		(value == 0 ) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
		(value == totWidth ) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
	}

	function updateFilling(selectedEvent, filling, totWidth) {
		//change .filling-line length according to the selected event
		var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
			eventLeft = eventStyle.getPropertyValue("left"),
			eventWidth = eventStyle.getPropertyValue("width");
		eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', ''))/2;
		var scaleValue = eventLeft/totWidth;
		setTransformValue(filling.get(0), 'scaleX', scaleValue);
	}

	function setDatePosition(timelineComponents, min) {
		for (i = 0; i < timelineComponents['timelineDates'].length; i++) { 
		    var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
		    	distanceNorm = Math.round(distance/timelineComponents['eventsMinLapse']) + 2;
		    timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm*min+'px');
		}
	}

	function setTimelineWidth(timelineComponents, width) {
		var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length-1]),
			timeSpanNorm = timeSpan/timelineComponents['eventsMinLapse'],
			timeSpanNorm = Math.round(timeSpanNorm) + 4,
			totalWidth = timeSpanNorm*width;
		timelineComponents['eventsWrapper'].css('width', totalWidth+'px');
		updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);
	
		return totalWidth;
	}

	function updateVisibleContent(event, eventsContent) {
		var eventDate = event.data('date'),
			visibleContent = eventsContent.find('.selected'),
			selectedContent = eventsContent.find('[data-date="'+ eventDate +'"]'),
			selectedContentHeight = selectedContent.height();

		if (selectedContent.index() > visibleContent.index()) {
			var classEnetering = 'selected enter-right',
				classLeaving = 'leave-left';
		} else {
			var classEnetering = 'selected enter-left',
				classLeaving = 'leave-right';
		}

		selectedContent.attr('class', classEnetering);
		visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			visibleContent.removeClass('leave-right leave-left');
			selectedContent.removeClass('enter-left enter-right');
		});
		eventsContent.css('height', selectedContentHeight+'px');
	}

	function updateOlderEvents(event) {
		event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
	}

	function getTranslateValue(timeline) {
		var timelineStyle = window.getComputedStyle(timeline.get(0), null),
			timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
         		timelineStyle.getPropertyValue("-moz-transform") ||
         		timelineStyle.getPropertyValue("-ms-transform") ||
         		timelineStyle.getPropertyValue("-o-transform") ||
         		timelineStyle.getPropertyValue("transform");

        if( timelineTranslate.indexOf('(') >=0 ) {
        	var timelineTranslate = timelineTranslate.split('(')[1];
    		timelineTranslate = timelineTranslate.split(')')[0];
    		timelineTranslate = timelineTranslate.split(',');
    		var translateValue = timelineTranslate[4];
        } else {
        	var translateValue = 0;
        }

        return Number(translateValue);
	}

	function setTransformValue(element, property, value) {
		element.style["-webkit-transform"] = property+"("+value+")";
		element.style["-moz-transform"] = property+"("+value+")";
		element.style["-ms-transform"] = property+"("+value+")";
		element.style["-o-transform"] = property+"("+value+")";
		element.style["transform"] = property+"("+value+")";
	}

	//based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
	function parseDate(events) {
		var dateArrays = [];
		events.each(function(){
			var dateComp = $(this).data('date').split('/'),
				newDate = new Date(dateComp[2], dateComp[1]-1, dateComp[0]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function parseDate2(events) {
		var dateArrays = [];
		events.each(function(){
			var singleDate = $(this),
				dateComp = singleDate.data('date').split('T');
			if( dateComp.length > 1 ) { //both DD/MM/YEAR and time are provided
				var dayComp = dateComp[0].split('/'),
					timeComp = dateComp[1].split(':');
			} else if( dateComp[0].indexOf(':') >=0 ) { //only time is provide
				var dayComp = ["2000", "0", "0"],
					timeComp = dateComp[0].split(':');
			} else { //only DD/MM/YEAR
				var dayComp = dateComp[0].split('/'),
					timeComp = ["0", "0"];
			}
			var	newDate = new Date(dayComp[2], dayComp[1]-1, dayComp[0], timeComp[0], timeComp[1]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function daydiff(first, second) {
	    return Math.round((second-first));
	}

	function minLapse(dates) {
		//determine the minimum distance among events
		var dateDistances = [];
		for (i = 1; i < dates.length; i++) { 
		    var distance = daydiff(dates[i-1], dates[i]);
		    dateDistances.push(distance);
		}
		return Math.min.apply(null, dateDistances);
	}

	/*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/
	function elementInViewport(el) {
		var top = el.offsetTop;
		var left = el.offsetLeft;
		var width = el.offsetWidth;
		var height = el.offsetHeight;

		while(el.offsetParent) {
		    el = el.offsetParent;
		    top += el.offsetTop;
		    left += el.offsetLeft;
		}

		return (
		    top < (window.pageYOffset + window.innerHeight) &&
		    left < (window.pageXOffset + window.innerWidth) &&
		    (top + height) > window.pageYOffset &&
		    (left + width) > window.pageXOffset
		);
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});