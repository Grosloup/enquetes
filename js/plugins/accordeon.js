/**
 * Created by Nicolas on 27/03/2014.
 */

(function($){

    var Accordeon = function(el, idx, questions, bodies){
        this.$el = $(el);
        this.idx = idx;
        this.$body = $(".body", this.$el);
        this.$head = $(".head", this.$el);
        this.$questions = questions;
        this.$bodies = bodies;
        this.init();
    };

    Accordeon.prototype.init = function(){
        var self = this;
        if(this.idx !== 0){
            this.$el.addClass("closed");
            this.$body.slideUp(200);
        } else {
            this.$body.addClass("opened");
        }
        this.$head.on("click", function(e){
            e.preventDefault();
            if(self.$el.hasClass("opened")){
                self.$el.removeClass("opened").addClass("closed");
                self.$body.slideUp(200);
            } else {
                self.$questions.removeClass("opened").addClass("closed");
                self.$bodies.slideUp(200);
                self.$el.removeClass("closed").addClass("opened");
                self.$body.slideDown(200);
            }
        });
    };

    $.fn.accordeon = function(){
        return this.each(function(){
            var $el = $(this);


            var $questions = $(".question", $el);
            var $bodies = $(".body", $questions);

            $questions.each(function(idx){
                var $this = $(this);

                var data = $this.data("accordeon");

                if(!data){
                    $this.data("accordeon", new Accordeon(this, idx, $questions, $bodies));
                }

            });

        });
    }
})(jQuery);
