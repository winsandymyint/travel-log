/**
 * jQueryMXNotice v1.0
 *
 * Copyright 2014 Milax
 * http://www.milax.com/
 *
 * Author
 * Maksim Gusakov
 */


/** 
 * Ð¡Ñ‚Ð°Ñ€Ñ‚Ð¾Ð²Ñ‹Ð¹-Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒÑÐºÐ¸Ð¹ Ð¼ÐµÑ‚Ð¾Ð´ Ð´Ð»Ñ Ð²Ñ‹Ð·Ð¾Ð²Ð° ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ.
 * 
 * @param	object	data			ÐžÐ±ÑŠÐµÐºÑ‚-Ð¼Ð°ÑÐ¸Ð² ÑÐ¾ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸ÑÐ¼Ð¸ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ.
 */
MXNotice = function ( data ) {
	
	if ( typeof data == "undefined" ) {
		/** Ð¡Ñ‚Ð°Ñ€Ñ‚Ð¾Ð²Ñ‹Ð¹ Ð¼ÐµÑ‚Ð¾Ð´ Ð²Ñ‹Ð·Ð¾Ð²Ð° â€” ÑÐ¾Ð±Ð¸Ñ€Ð°ÐµÑ‚ Ð¾Ñ‡ÐµÑ€ÐµÐ´ÑŒ Ð¸Ð· meta */
		
		var $meta = $("meta[name ^= 'mxnotice']");
		var data = {};
		var name, param;

		for (var i = 0; i < $meta.length; i++) {
			name 			= $meta.eq(i).attr("name").substr(9);
			content 		= $meta.eq(i).attr("content");
			data[ name ] = content;
		}

		MXNotice._addQueue( data );

	} else {
		/** Ð¡Ñ‚Ð°Ð½Ð´Ð°Ñ€Ñ‚Ð½Ñ‹Ð¹ Ð¼ÐµÑ‚Ð¾Ð´ Ð²Ñ‹Ð·Ð¾Ð²Ð° â€” Ð´Ð¾Ð±Ð°Ð²Ð»ÑÐµÑ‚ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð² Ð¾Ñ‡ÐµÑ€ÐµÐ´ÑŒ */

		MXNotice._addQueue( data );

	}
	
	/** Ð’Ñ‹Ð²Ð¾Ð´Ð¸Ð¼ Ð¿ÐµÑ€Ð²Ð¾Ðµ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð¸Ð· Ð¾Ñ‡ÐµÑ€ÐµÐ´Ð¸ */
	MXNotice._exec();

};

/** Ð¡Ñ‚Ð¸Ð»ÑŒ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ð¹ Ð¿Ð¾-ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ */
MXNotice._defaultType = "default";
/** ÐœÐ°ÑÐ¸Ð², ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‰Ð¸Ð¹ ÑÐ¿Ð¸ÑÐ¾Ðº ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ð¹ Ð² Ð²Ð¸Ð´Ðµ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¾Ð². */
MXNotice._queue = [];
/** ÐžÐ±ÑŠÐµÐºÑ‚ Ð´Ð»Ñ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ð½Ð¸Ñ Ñ‚Ð°Ð¹Ð¼Ð°ÑƒÑ‚Ð¾Ð² Ð·Ð°ÐºÑ€Ñ‹Ñ‚Ð¸Ñ. */
MXNotice._timeout = 0;

/** Ð¨Ð°Ð±Ð»Ð¾Ð½Ñ‹ Ð½Ð¾Ñ‚Ð¸ÑÐ¾Ð² */
MXNotice._types = {

	"default" : {
		"tmpl"				: '<div class="mx-notice"><span class="mx-notice-close"><img class="mx-notice-close-image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAAbElEQVR4AYWP0Q2AMAgFO492nnYc2EAGNkFJ8+LFn8KPjzsDbavyyMZWXsHzzgE43uzCnlVLEKzywr0ChIHcy54YXPie2v0JSSgMgbCwOoBD093f+928PP6Xdw4o690G2CCYdpsgBOPlJyDyA4JTSSwL8/JhAAAAAElFTkSuQmCC"></span><span class="mx-notice-caption"></span></div>',
		"timeout"			: 6000,
		"css"				: {
			"notice"			: {
				"width"					: "348px",
				"position"				: "fixed",
				"left"					: "50%",
				"margin-left"			: "-212px",
				"top"					: 0,
				"font-size"				: "14px",
				"padding"				: "28px 38px",
				"background-color"		: "#fff",
				"border-radius"			: "6px",
				"-webkit-box-shadow"	: "0px 6px 35px 0px rgba(0,0,0,0.6)",
				"-moz-box-shadow"		: "0px 6px 35px 0px rgba(0,0,0,0.6)",
				"box-shadow"			: "0px 6px 35px 0px rgba(0,0,0,0.6)",
				"text-align"			: "left",
				"color"					: "#666",
				"z-index"				: 9999999999
			},
			"caption"			: {
				"font-size"				: "22px",
				"color"					: "#666",
				"display"				: "block",
				"margin-bottom"			: "16px",
				"font-weight"			: "bold"
			},
			"close"				: {
				"display"				: "block",
				"position"				: "absolute",
				"top"					: "7px",
				"left"					: "auto",
				"right"					: "7px",
				"width"					: "13px",
				"height"				: "13px",
				"background-color"		: "#666",
				"border-radius"			: "50%",
				"cursor"				: "pointer",
				"opacity"				: "0.5"
			},
			"closeImage"				: {
				"display"				: "block",
				"position"				: "absolute",
				"top"					: "3px",
				"right"					: "3px",
				"width"					: "7px",
				"height"				: "7px"
			},
			"info"				: {
				"color"					: "#666"
			},
			"success"			: {
				"color"					: "#69ab54"
			},
			"error"				: {
				"color"					: "#dd5256"
			}
		},
		"build"				: function ( data ) {

			var $body = $( "body" );

			var $element = $( data.type.tmpl );
			var $caption = $(".mx-notice-caption", $element);
			var $close = $(".mx-notice-close", $element);

			/** Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° Ð·Ð°Ð³Ð¾Ð»Ð¾Ð²ÐºÐ° */
			if ( typeof data.caption == "undefined" )

				$caption.remove();

			else {

				$caption
					.css( data.type.css.caption )
					.text( data.caption );

				if ( typeof data.type.css[ data.status ] != "undefined" )
					$caption.css( data.type.css[ data.status ] );

			}

			/** Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ */
			if ( typeof data.message != "undefined" )
				$element.append( data.message );
			
			/** Ð‘Ñ€Ð¾ÑÐ°ÐµÐ¼ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð² DOM */
			$element
				.css( data.type.css.notice )
				.data("data", data)
				.prependTo( $body );
			
			/** ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ð¾Ð½Ð¸Ñ€ÑƒÐµÐ¼ Ð¾ÐºÐ½Ð¾ Ð¿Ð¾ Ð²ÐµÑ€Ñ‚Ð¸ÐºÐ°Ð»Ð¸ */
			var height = $element.outerHeight();
			var cHeight = $body.height();
			var top = (cHeight / 2) - (height / 2);

			/** ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ð¾Ð½Ð¸Ñ€ÑƒÐµÐ¼ Ð¾ÐºÐ½Ð¾, Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÐ¼ Ð¸ Ð²ÐµÑˆÐ°ÐµÐ¼ Ð¸Ð²ÐµÐ½Ñ‚Ñ‹ Ð½Ð° ÑÐºÑ€Ñ‹Ñ‚Ð¸Ðµ */
			$element
				.css( "top", top )
				.each( data.type.ie6fix )
				.each( data.type.onshow )
				.each( data.type.closeEvent );

			/** Ð’ÐµÑˆÐ°ÐµÐ¼ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸Ðº Ð½Ð° ÐºÐ½Ð¾Ð¿ÐºÑƒ Ð·Ð°ÐºÑ€Ñ‹Ñ‚Ð¸Ñ */
			$close
				.css ( data.type.css.close )
					.find ( ".mx-notice-close-image" )
					.css( data.type.css.closeImage );

		},
		"ie6fix"			: function () {

			/** Ð¤Ð¸ÐºÑ Ð´Ð»Ñ Ð¸Ðµ Ð´Ð¾ÑÑ‚ÑƒÐ¿ÐµÐ½, Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÐµÑÐ»Ð¸ ÐµÑÑ‚ÑŒ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶ÐºÐ° $.browser */
			if ( (typeof $.browser != "undefined") && ($.browser.version == "6.0") && ($.browser.msie) ) {
				
				$( this ).css({
					"position"			: "absolute",
					"top"				: "100px"
				});

			}

		},
		"closeEvent"		: function () {
			
			var $element = $( this );
			var data = $element.data( "data" );

			MXNotice._timeout = setTimeout(function () {
				$element.each( data.type.onhide );
			}, data.type.timeout);

			if ( !$element.hasClass("mx-notice-setevents") ) {

				$element.addClass("mx-notice-setevents");

				$element.on("mouseenter.mxnotice", function () {
					clearTimeout( MXNotice._timeout );
					$( this )
						.addClass("mxnotice-hover");
				}).on("mouseleave.mxnotice", function () {
					var newData = $( this ).data("data");
					$( this )
						.removeClass("mxnotice-hover")
						.each( newData.type.closeEvent );
				});

				$(document).on("click.mxnotice", function () {
					var newData = $element.data("data");
					if ( !$element.hasClass( "mxnotice-hover" ) ) {
						$element.each( newData.type.onhide );
					}
				});

				/** ÐžÐ±Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸Ðº ÐºÐ½Ð¾Ð¿ÐºÐ¸ Ð·Ð°ÐºÑ€Ñ‹Ñ‚Ð¸Ñ */

				var $close = $( ".mx-notice-close", $element );

				var opacity = data.type.css.close.opacity;
				
				$close
					.data( "opacity", opacity )
					.on("mouseenter.mxnotice", function () {
						$( this ).animate( { "opacity" : 1 }, 100 );
					})
					.on("mouseleave.mxnotice", function () {
						$( this ).animate( { "opacity" : $( this ).data( "opacity" ) }, 100 );
					})
					.on("click.mxnotice", function () {
						var $parent = $( this ).parent();
						var newData = $parent.data("data");
						$parent.each( newData.type.onhide );
					});
			}

		},
		"onshow"			: function () {
			
			/** ÐŸÐ¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÐ¼ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ */
			$(this)
				.css({
					"top"				: "-=20px",
					"opacity"			: 0
				}).animate({
					"top"				: "+=20px",
					"opacity"			: 1
				}, 400, "linear");

		},
		"onhide"			: function () {
			
			/** ÐŸÑ€Ð¾Ð²ÐµÑ€ÑÐµÐ¼ Ð²Ð¸Ð´ÐµÐ½ Ð»Ð¸ Ð±Ð»Ð¾Ðº Ð¿Ñ€ÐµÐ¶Ð´Ðµ Ñ‡ÐµÐ¼ ÐµÐ³Ð¾ ÑÐºÑ€Ñ‹Ð²Ð°Ñ‚ÑŒ */
			if ( !$(this).filter(":visible").length ) return false;

			var data = $(this).data("data");
			
			$(this)
				.animate({
					"top"				: "+=20px",
					"opacity"			: 0
				}, 200, "linear", function () {
					/** Ð§Ð¸ÑÑ‚Ð¸Ð¼ ÑÐ¾Ð±Ñ‹Ñ‚Ð¸Ðµ Ð½Ð° Ð´Ð¾ÐºÑƒÐ¼ÐµÐ½Ñ‚Ðµ */
					$(document).off("click.mxnotice");
					
					$(this).remove();
					data.next();
				});

		}
	},

	"topshot" : {
		"tmpl"				: '<div class="mx-notice"><div class="mx-message"></div></div>',
		"timeout"			: 6000,
		"css"				: {
			"notice"			: {
				"width"					: "100%",
				"position"				: "fixed",
				"left"					: 0,
				"top"					: 0,
				"text-align"			: "left",
				"z-index"				: 9999999999
			},
			"message"			: {
				"padding"				: "28px 38px",
				"font-size"				: "22px",
				"color"					: "#fff",
				"font-weight"			: "bold",
				"text-align"			: "center",
				"text-shadow"			: "0px 1px 1px rgba(0, 0, 0, 0.3)"
			},
			"info"				: {
				"background-color"		: "#5fa6ce",
				"background-color"		: "rgba(95,166,206,0.8)"
			},
			"success"			: {
				"background-color"		: "#69ab54",
				"background-color"		: "rgba(105,171,84,0.8)"
			},
			"error"				: {
				"background-color"		: "#dd5256",
				"background-color"		: "rgba(221,82,86,0.8)"
			},
			"fixstatus"			: {
				"info"				: {
					"background-color"		: "#5fa6ce"
				},
				"success"			: {
					"background-color"		: "#69ab54"
				},
				"error"				: {
					"background-color"		: "#dd5256"
				}
			}
		},
		"build"				: function ( data ) {

			var $body = $( "body" );

			var $element = $( data.type.tmpl );
			var $message = $( ".mx-message", $element );

			/** Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ */
			if ( typeof data.message != "undefined" )
				$message
					.css( data.type.css.message )
					.append( data.message );

			/** Ð‘Ñ€Ð¾ÑÐ°ÐµÐ¼ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð² DOM */
			$element
				.css( data.type.css.notice )
				.data("data", data)
				.prependTo( $body );
			
			/** ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ð¾Ð½Ð¸Ñ€ÑƒÐµÐ¼ Ð¾ÐºÐ½Ð¾ Ð·Ð° Ð²ÐµÑ€Ñ…Ð½ÑŽÑŽ Ð³Ñ€Ð°Ð½Ð¸Ñ†Ñƒ */
			var height = $element.outerHeight();
			var top = (-1) * (height + 20);

			/** ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ð¾Ð½Ð¸Ñ€ÑƒÐµÐ¼ Ð¾ÐºÐ½Ð¾, Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÐ¼ Ð¸ Ð²ÐµÑˆÐ°ÐµÐ¼ Ð¸Ð²ÐµÐ½Ñ‚Ñ‹ Ð½Ð° ÑÐºÑ€Ñ‹Ñ‚Ð¸Ðµ */
			$element
				.css( "top", top )
				.each( data.type.ie6fix )
				.each( data.type.onshow )
				.each( data.type.closeEvent );

			
			/** Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° ÑÑ‚Ð°Ñ‚ÑƒÑÐ° */
			if ( typeof data.type.css[ data.status ] != "undefined" ) {

				if ($.support.opacity) 
					$element.css( data.type.css[ data.status ] );
				else 
					$element.css( data.type.css.fixstatus[ data.status ] );

			}

		},
		"ie6fix"			: function () {

			/** Ð¤Ð¸ÐºÑ Ð´Ð»Ñ Ð¸Ðµ Ð´Ð¾ÑÑ‚ÑƒÐ¿ÐµÐ½, Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÐµÑÐ»Ð¸ ÐµÑÑ‚ÑŒ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶ÐºÐ° $.browser */
			if ( (typeof $.browser != "undefined") && ($.browser.version == "6.0") && ($.browser.msie) ) {
				
				$( this ).css({
					"position"			: "absolute"
				});

			}

		},
		"closeEvent"		: function () {
			
			var $element = $( this );
			var data = $element.data( "data" );

			MXNotice._timeout = setTimeout(function () {
				$element.each( data.type.onhide );
			}, data.type.timeout);

			if ( !$element.hasClass("mx-notice-setevents") ) {

				$element.addClass("mx-notice-setevents");

				$element.on("mouseenter.mxnotice", function () {
					clearTimeout( MXNotice._timeout );
					$( this )
						.addClass("mxnotice-hover");
				}).on("mouseleave.mxnotice", function () {
					var newData = $( this ).data("data");
					$( this )
						.removeClass("mxnotice-hover")
						.each( newData.type.closeEvent );
				});

				$(document).on("click.mxnotice", function () {
					var newData = $element.data("data");
					if ( !$element.hasClass( "mxnotice-hover" ) ) {
						$element.each( newData.type.onhide );
					}
				});

			}

		},
		"onshow"			: function () {
			
			/** ÐŸÐ¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÐ¼ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ */
			$(this)
				.animate({
					"top"				: 0
				}, 400, "linear");

		},
		"onhide"			: function () {
			
			/** ÐŸÑ€Ð¾Ð²ÐµÑ€ÑÐµÐ¼ Ð²Ð¸Ð´ÐµÐ½ Ð»Ð¸ Ð±Ð»Ð¾Ðº Ð¿Ñ€ÐµÐ¶Ð´Ðµ Ñ‡ÐµÐ¼ ÐµÐ³Ð¾ ÑÐºÑ€Ñ‹Ð²Ð°Ñ‚ÑŒ */
			if ( !$(this).filter(":visible").length ) return false;

			var data = $(this).data("data");

			var height = $(this).outerHeight();
			var top = (-1) * (height + 20);

			$(this)
				.animate({
					"top"				: top
				}, 200, "linear", function () {
					/** Ð§Ð¸ÑÑ‚Ð¸Ð¼ ÑÐ¾Ð±Ñ‹Ñ‚Ð¸Ðµ Ð½Ð° Ð´Ð¾ÐºÑƒÐ¼ÐµÐ½Ñ‚Ðµ */
					$(document).off("click.mxnotice");

					$(this).remove();
					data.next();
				});

		}
	}

};

/**
 * ÐœÐµÑ‚Ð¾Ð´ Ð´Ð¾Ð±Ð°Ð²Ð»ÑÐµÑ‚ Ð´Ð°Ð½Ð½Ñ‹Ðµ Ð² Ð¼Ð°ÑÐ¸Ð² ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ð¹ / Ð¾Ñ‡ÐµÑ€ÐµÐ´Ð¸. 
 * 
 * @param	object	data	ÐžÐ±ÑŠÐµÐºÑ‚ Ñ Ð´Ð°Ð½Ð½Ñ‹Ð¼Ð¸.
 */
MXNotice._addQueue = function ( data ) {

	MXNotice._queue.push( data );

};

/** ÐœÐµÑ‚Ð¾Ð´ Ð¾Ñ‚Ð²ÐµÑ‡Ð°ÐµÑ‚ Ð·Ð° Ð½ÐµÐ¿Ð¾ÑÑ€ÐµÐ´ÑÑ‚Ð²ÐµÐ½Ð½Ñ‹Ð¹ Ð¿Ñ€Ð¾Ñ†ÐµÑÑ Ð²Ñ‹Ð²Ð¾Ð´Ð° ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ Ð¸Ð· Ð¾Ñ‡ÐµÑ€ÐµÐ´Ð¸. */
MXNotice._exec = function () {

	/** Ð£ÑÐ»Ð¾Ð²Ð¸Ñ Ð¿Ñ€Ð¸ ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ñ… Ð½Ðµ Ð±ÑƒÐ´ÐµÑ‚ ÑÑ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°Ñ‚ÑŒ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸Ðº */
	if ( !MXNotice._queue.length ) return false;
	if ( $( ".mx-notice" ).length ) return false;
	
	/** Ð’Ñ‹Ð±Ð¸Ñ€Ð°ÐµÐ¼ Ð¿ÐµÑ€Ð²Ð¾Ðµ ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð¸Ð· Ð¾Ñ‡ÐµÑ€ÐµÐ´Ð¸ + Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ð¹ Ð¿Ð¾-ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ */
	var data = $.extend({
		"status" 			: "info",
		"type"				: MXNotice._defaultType,
		"next"				: MXNotice._exec
	}, MXNotice._queue.shift() );
	
	/** Ð Ð°Ð±Ð¾Ñ‚Ð°ÐµÐ¼ ÑÐ¾ ÑÑ‚Ð¸Ð»ÐµÐ¼ Ð¿Ð¾-ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ, ÐµÑÐ»Ð¸ Ð½ÐµÑ‚ ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ð¾Ð³Ð¾ */
	if ( typeof MXNotice._types[ data.type ] == "undefined" )
		data.type = MXNotice._defaultType;
	
	var typeName = data.type;

	/** Ð¡ÑÑ‹Ð»ÐºÐ° Ð½Ð° Ð¾Ð±ÑŠÐµÐºÑ‚ ÑÑ‚Ð¸Ð»Ñ â€” Ð´Ð»Ñ ÑƒÐ´Ð¾Ð±ÑÑ‚Ð²Ð° */
	data.type = MXNotice._types[ data.type ];
	
	if ( typeof data.type.build == "undefined" ) {
		console.error("Required parameter is missing: method build() in type " + typeName);
		return false;
	}

	/** Ð’Ñ‹Ð·Ð¾Ð² ÑÑ‚Ñ€Ð¾Ð¸Ñ‚ÐµÐ»Ñ */
	data.type.build( data );

};

/** Ð¡Ñ‚Ð°Ñ€Ñ‚ÑƒÐµÐ¼ Ð¿Ð»Ð°Ð³Ð¸Ð½ Ð½Ð° DOM-Ready */
$(function () {
	MXNotice();
});


/** END */