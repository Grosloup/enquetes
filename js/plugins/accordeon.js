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
        this.$nextBtn = $(".nextBtn", this.$el);
        this.$prevBtn = $(".prevBtn", this.$el);
        if(this.idx != this.$questions.length){
            this.$nextQuestion = $(this.$questions[this.idx+1]);
        } else {
            this.$nextQuestion = null;
        }
        if(this.idx != 0){
            this.$prevQuestion = $(this.$questions[this.idx-1]);
        } else {
            this.$prevQuestion = null;
            this.$prevBtn.addClass("disabled").attr("disabled", "disabled");
        }
        console.log(this.$nextQuestion,this.$nextBtn);
        this.init();
    };

    Accordeon.prototype.init = function(){
        var self = this;
        if(this.idx !== 0){
            this.$el.addClass("closed");
            this.$body.slideUp(200);
        } else {
            this.$el.addClass("opened");
        }
        this.$head.on("click", function(e){
            e.preventDefault();
            if(self.$el.hasClass("opened")){
                /*self.$el.removeClass("opened").addClass("closed");
                self.$body.slideUp(200);*/
                self.close();
            } else {
                /*self.$questions.removeClass("opened").addClass("closed");
                self.$bodies.slideUp(200);
                self.$el.removeClass("closed").addClass("opened");
                self.$body.slideDown(200);*/
                self.open();
            }
        });

        this.$nextBtn.on("click", function(e){
            e.preventDefault();
            self.close();
            if(self.$nextQuestion){
                self.$nextQuestion.data("accordeon").$head.click();
            }
        });
        this.$prevBtn.on("click", function(e){
            e.preventDefault();
            self.close();
            if(self.$prevQuestion){
                self.$prevQuestion.data("accordeon").$head.click();
            }
        });
    };

    Accordeon.prototype.close = function(){
        this.$el.removeClass("opened").addClass("closed");
        this.$body.slideUp(200);
    };

    Accordeon.prototype.open = function(){
        if(this.$el.hasClass("closed")){
            this.$questions.removeClass("opened").addClass("closed");
            this.$el.removeClass("closed").addClass("opened");
            this.$bodies.slideUp(200);

            this.$body.slideDown(200);
        }

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
