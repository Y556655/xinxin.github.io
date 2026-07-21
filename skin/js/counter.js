(function($) {
	"use strict";
	$.fn.countTo = function(options) {
		options = $.extend({}, $.fn.countTo.defaults, options || {});
		var loops = Math.ceil(options.speed / options.refreshInterval),
			increment = (options.to - options.from) / loops;

		return $(this).each(function() {
			var _this = this,
				loopCount = 0,
				value = options.from,
				interval = setInterval(updateTimer, options.refreshInterval);

			function updateTimer() {
				value += increment;
				loopCount++;
				$(_this).html(value.toFixed(options.decimals));
				if (typeof(options.onUpdate) == 'function') {
					options.onUpdate.call(_this, value);
				}

				if (loopCount >= loops) {
					clearInterval(interval);
					value = options.to;

					if (typeof(options.onComplete) == 'function') {
						options.onComplete.call(_this, value);
					}
				}
			}
		});
	};
	$(window).on('scroll', function() {
		$('.counter').each(function() {
			if ($(this).hasClass("element-visible")) {
			} else {
				var dataoffset = '80%';
				var parsePercent = parseFloat(dataoffset);
				var decimal = parsePercent / 100;
				var triggerpoint = $(window).height() * decimal + $(window).scrollTop();
				var counterElement = $(this).offset().top;
				if (counterElement < triggerpoint) {
					$(this).addClass("element-visible");
					var dataEndCount = $(this).data('end-count');
					var dataSpeed = $(this).data('speed');
					var startCount = $(this).data('start');
					$(this).countTo({
						from: startCount,//初始值
						to: dataEndCount,//最终值
						speed: dataSpeed,//动画时长
						refreshInterval: 100,//动画步长
						decimals:0
					});
				}
			}
		});
	});
})(jQuery);