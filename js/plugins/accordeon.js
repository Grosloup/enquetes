/**
 * Created by Nicolas on 27/03/2014.
 */

(function($){
    $.fn.accordeon = function(){
        return this.each(function(){
            var $el = $(this);
            var $questions = $(".question", $el);
            var $heads = $(".head", $questions);
            var $bodies = $(".body", $questions);
            $heads.each(function(idx, el){
                var $this = $(this);
                var $target = $this.next(".body");
                var $parent = $this.parent();
                if(idx !== 0){
                    $parent.addClass("closed");
                    $target.slideUp(200);
                } else {
                    $parent.addClass("opened");
                }
                $this.on("click", function(e){
                    e.preventDefault(200);
                    if($parent.hasClass("opened")){
                        $parent.removeClass("opened").addClass("closed");
                        $target.slideUp(200);
                    } else {
                        $questions.removeClass("opened").addClass("closed");
                        $bodies.slideUp(200);
                        $parent.removeClass("closed").addClass("opened");
                        $target.slideDown(200);
                    }
                });
            })
        });
    }
})(jQuery);
