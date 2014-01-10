$(function(){
var slideHeight = 80;
$(".newsPost").each(function() {
    var $this = $(this);
    var $wrap = $this.children(".wrap");
    var defHeight = $wrap.height();
    if (defHeight >= slideHeight) {
    	$wrap.children(".gradient").css("background", "url(bg/bg-gradient-wide.png) no-repeat");
        var $readMore = $this.find(".read-more");
        $wrap.css("height", slideHeight + "px");
        $readMore.append("<a href='#'>Read more...</a>");
        $readMore.css("background", "url(bg/bg-gradient-wide_rev.png) no-repeat");
        $readMore.children("a").bind("click", function(event) {
            var curHeight = $wrap.height();
            if (curHeight == slideHeight) {
                $wrap.animate({
                    height: defHeight
                }, "normal");
                $(this).text("Close");
                $wrap.children(".gradient").fadeOut();
                $readMore.css("background", "none");
            } else {
                $wrap.animate({
                    height: slideHeight
                }, "normal");
                $(this).text("Read more...");
                $wrap.children(".gradient").fadeIn();
                $readMore.css("background", "url(bg/bg-gradient-wide_rev.png) no-repeat");
            }
            return false;
        });
    }
});
});