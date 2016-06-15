"use strict";
(function() {
      
    $(document).ready(function() {

      // VOTING APPARATUS
      $(function(){
        
        $(".increment").click(function(){
          var count = parseInt($("~ .count", this).text());
          var question_id = $(this).data("question-id");
          var answer_id = $(this).data("answer-id");
          var user_id = $(this).data("user-id");
          var question_voted = $(this).data("question-voted");
          var answer_voted = $(this).data("answer-voted");
          var question_vote_id = $(this).data("question-vote-id");
          var answer_vote_id = $(this).data("answer-vote-id");
          var id = $(this).attr("id");

          if ($(this).hasClass("disabled")){
            return;
          } else if($(this).hasClass("up")) {
            if ($(this).hasClass("double")){
              console.log(this);
              var vote = 1;
              var count = count + (vote*2);
              $(this).removeClass("double");
              $(this).removeClass("enabled");
              $(this).closest(".disabled").addClass("enabled");
              $(this).closest(".enabled").removeClass("disabled");
              $(this).closest(".enabled").addClass("double");
              $(this).addClass("disabled");
            } else {
              var vote = 1;
              var count = count + vote;
              $(this).data("voted", "true")
              $(this).removeClass("enabled");
              $(".enabled").addClass("double");
              $(this).addClass("disabled");
            }

          } else if ($(this).hasClass("down")) {
            if ($(this).hasClass("double")){
              console.log(this);
              var vote = -1;
              var count = count + (vote*2);
              $(this).removeClass("double");
              $(this).removeClass("enabled");
              $(this).closest(".disabled").addClass("enabled");
              $(this).closest(".enabled").removeClass("disabled");
              $(this).closest(".enabled").addClass("double");
              $(this).addClass("disabled");
            } else {
              var vote = -1;
              var count = count + vote;
              $(this).data("voted", "true")
              $(this).removeClass("enabled");
              $(this).closest(".enabled").addClass("double");
              $(this).addClass("disabled");
            }
          }
          $("~ .count", this).text(count);     
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({        
              type: "POST", 
              url: "/votes", // Location of the service      
              data: {"count" : vote,
                     "user_id" : user_id,
                     "question_id" : question_id,
                     "answer_id" : answer_id,
                     "answer_voted" : answer_voted,
                     "question_voted" : question_voted,
                     "question_vote_id" : question_vote_id,
                     "answer_vote_id" : answer_vote_id},
              success: function (msg) {//On Successfull service call   
                  console.log('success');
                  location.reload();
                  // CREATE AN AJAX REQUEST IF YOU WANT TO IN WEEK 2
              },
              error: function (xhr) { console.log(xhr); } // When Service call fails             
          });
          $(this).parent().addClass("bump");
          
          setTimeout(function(){
            $(this).parent().removeClass("bump");    
          }, 400);
        });
      });
      //END VOTING APPARATUS
    })
})();


