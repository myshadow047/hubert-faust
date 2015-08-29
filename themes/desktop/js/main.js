$(function() {

	$(".topbar .down").click(function(){
		$(this).toggleClass("clicked").siblings(".subMenu").slideToggle(128);
	});

	$(".toggleDown").click(function(){
		$(this).toggleClass("toggleDrawer").parent().parent().parent().siblings(".toggleMenu").slideToggle(128);
	});

	$("#portfolio").easyResponsiveTabs();
	$("#news").easyResponsiveTabs();

	$(".heroBanner").owlCarousel({
		itemsCustom : [
			[0, 1],
			[480, 1],
			[768, 1],
			[1024, 1],
			[1400, 1],
			[1600, 1],
		],
		autoPlay : true,
		pagination: true,
		navigation: true,
		navigationText: [
			"<i class='arrow left'></i>",
			"<i class='arrow right'></i>"
		],
	});

	$(".promo").owlCarousel({
		itemsCustom : [
			[0, 1],
			[480, 1],
			[768, 1],
			[1024, 1],
			[1400, 1],
			[1600, 1],
		],
		autoPlay : false,
		pagination: true,
		navigation: false
	});


	var sync1 = $("#sync1");
	var sync2 = $("#sync2");

	sync1.owlCarousel({
		singleItem : true,
		navigation: false,
		pagination:false,
		afterAction : syncPosition,
		responsiveRefreshRate : 200,
		touchDrag: false
	});

	sync2.owlCarousel({
		itemsCustom : [
			[0, 3],
			[480, 3],
			[768, 3],
			[1024, 4],
			[1400, 4],
			[1600, 4],
		],
		pagination:false,
		responsiveRefreshRate : 100,
		afterInit : function(el){
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});

	function syncPosition(el){
		var current = this.currentItem;
		$("#sync2")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if($("#sync2").data("owlCarousel") !== undefined){
			center(current)
		}
	}

	$("#sync2").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("owl.goTo",number);
	});

	function center(number){
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in sync2visible){
			if(num === sync2visible[i]){
				var found = true;
			}
		}

		if(found===false){
			if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			}else{
				if(num - 1 === -1){
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if(num === sync2visible[sync2visible.length-1]){
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if(num === sync2visible[0]){
			sync2.trigger("owl.goTo", num-1)
		}
	}




	// ==================



	var syncPromo = $("#syncPromo");
	var syncPromo2 = $("#syncPromo2");

	syncPromo.owlCarousel({
		singleItem : true,
		navigation: false,
		pagination:false,
		afterAction : syncPosition2,
		responsiveRefreshRate : 200,
		autoHeight: true,
		touchDrag: false
	});

	syncPromo2.owlCarousel({
		itemsCustom : [
			[0, 3],
			[480, 3],
			[768, 3],
			[1024, 4],
			[1400, 4],
			[1600, 4],
		],
		pagination:false,
		responsiveRefreshRate : 100,
		afterInit : function(el){
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});

	function syncPosition2(el){
		var current = this.currentItem;
		$("#syncPromo2")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if($("#syncPromo2").data("owlCarousel") !== undefined){
			center2(current)
		}
	}

	$("#syncPromo2").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		syncPromo.trigger("owl.goTo",number);
	});

	function center2(number){
		var syncPromo2visible = syncPromo2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in syncPromo2visible){
			if(num === syncPromo2visible[i]){
				var found = true;
			}
		}

		if(found===false){
			if(num>syncPromo2visible[syncPromo2visible.length-1]){
				syncPromo2.trigger("owl.goTo", num - syncPromo2visible.length+2)
			}else{
				if(num - 1 === -1){
					num = 0;
				}
				syncPromo2.trigger("owl.goTo", num);
			}
		} else if(num === syncPromo2visible[syncPromo2visible.length-1]){
			syncPromo2.trigger("owl.goTo", syncPromo2visible[1])
		} else if(num === syncPromo2visible[0]){
			syncPromo2.trigger("owl.goTo", num-1)
		}
	}

})