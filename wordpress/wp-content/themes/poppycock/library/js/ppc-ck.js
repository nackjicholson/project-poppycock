// as the page loads, call these scripts
jQuery(document).ready(function(e){var t=function(t){this.el=t.el;this.$el=e(this.el);this.$title=this.$el.find(".train-board-title").first();this.$section=this.$el.find(".post-content").first();this.setHeight();this.$el.bind("mouseenter",e.proxy(this.over,this));this.$el.bind("mouseleave",e.proxy(this.out,this))};t.prototype={setHeight:function(){var e=this.$title.outerHeight(!0);this.boardheight=e;this.$el.height(e);this.$section.height(e)},over:function(){this.$title.stop().animate({top:-this.boardheight},200);this.$section.stop().animate({top:-this.boardheight},200)},out:function(){this.$title.stop().animate({top:0},200);this.$section.stop().animate({top:0},200)}};var n=e(".train-board");e.each(n,function(e,n){var r=new t({el:n})})});