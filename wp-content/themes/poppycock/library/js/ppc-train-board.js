(function($) {
	// as the page loads, call these scripts
	$(document).ready(function($) {

		// constructor function
		var BoardController = function(options) {
			// Set el
			this.el = options.el;
			this.$el = $(this.el);

			// The h1 element
			this.$title = this.$el.find('.train-board-title').first();
			// The section element
			this.$section = this.$el.find('.post-content').first();

			// Listeners
			this.$el.bind('mouseenter', $.proxy(this.over, this));
			this.$el.bind('mouseleave', $.proxy(this.out, this));

			// Unbind all listeners when on touch devices.
			if (Modernizr.touch) {
				this.$el.unbind();
			}

			// Listener for window resize.
			$(window).resize($.proxy(this.setHeight, this));

			this.setHeight();
		};
		
		// boardcontroller methods
		BoardController.prototype = {
			setHeight: function() {
				// What is the proper height?
				var boardheight = this.$title.outerHeight(true);
				this.boardheight = boardheight;

				// Set things to their proper height.
				this.$el.height(boardheight);
				this.$section.height(boardheight);
			},
			over: function() {
				// stop animations
				this.$title.stop().animate({
					top: -this.boardheight,
				},
				200);
				this.$section.stop().animate({
					top: -this.boardheight,
				},
				200);
			},
			out: function() {
				// stop animations
				this.$title.stop().animate({
					top: 0,
				},
				200);
				this.$section.stop().animate({
					top: 0,
				},
				200);

			}
		};	

		// init
		var $boards = $('.train-board');

		$.each($boards, function(index, board) {
			new BoardController({el: board});
		});

	});
})(jQuery);
