$(function () {
    scrollNav();
    $().UItoTop({ easingType: 'easeOutQuart' });
    navToggle();
    $(window).resize(function() { 
        navToggle();
    });
    $('#navtoggle').click(function () {
        $('.navsecond').toggle();
    });
});
function navToggle () {
    if ($('.container-fluid').width() - $('.navbar-header').width() - 90 - $('#menu').width() <= 0 ) {
        $('#menu').hide();
        $('.scrollHover').hide();
        $('#navtoggle').show();
    } else {
        $('#menu').show();
        $('.scrollHover').show();
        $('#navtoggle').hide();
        $('.navsecond').hide();
    }
}
function scrollNav() {
    function i(e) {
        t.removeClass("hover"),
        t.eq(e).addClass("hover"),
        n.stop(!0, !1).animate({
            left: e * 100 + t.eq(0).position().left
        },
        {
            easing: "easeOutElastic",
            duration: 600,
            complete: function() {}
        })
    }
    var e = $("#menu"),
    t = e.children("li"),
    n = $(".scrollHover"),
    r = e.children(".current");
    r.text() == "" && (r = e.children("li").eq(0)),
    r.addClass("hover"),
    n.css({
        left: r.index() * 100 + t.eq(0).position().left
    }),
    t.hover(function() {
        var e = $(this).index(),
        t = $(this).children("ul").children("li");
        $(this).children("ul").stop().animate({
            height: t.length * t.height() + t.length * 1
        },
        200),
        r.index() != e && i(e)
    },
    function() {
        $(this).children("ul").stop().animate({
            height: 0
        },
        200),
        r.index() != $(this).index() && i(r.index())
    })
}
$.fn.floatTop = function(top,col,otop){
    var $this=$(this);
    top= typeof top == "undefined"?0:top;
    var navH = $this.offset().top-top;
    navH= typeof otop == "undefined"?navH:otop;
    var $clone;
    $(window).scroll(function() {
        var scroH = $(this).scrollTop();
        if (scroH >= navH) {
            if(!$this.data('clone')){
                $clone=$("<div></div>")
                $clone.width($this.width()).height($this.height());
                $this.after($clone);
            }
            $this.data('clone',true);

            if($(".navbar").css("display")=="block"){
                $this.css({
                    "position": "fixed",
                    "top": top
                });
            }else{
                $this.css({
                    "position": "static"
                });
            }
            
            if(col){
                $this.width($this.parent().width());
            }
        } else if (scroH < navH) {
            if($this.data('clone')){
                if($clone){
                    $clone.remove();
                }
                $this.data('clone',false);
            }
            $this.css({
                "position": "static"
            });
        }
    })
}