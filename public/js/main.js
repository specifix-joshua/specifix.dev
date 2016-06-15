"use strict";
(function() {
      
    $(document).ready(function() {

      // VOTING APPARATUS
      $(function(){
        
        $(".increment").click(function(){
          var count = parseInt($("~ .count", this).text());
          var question_id = $(".increment").data("question-id")
          var user_id = $(".increment").data("user-id")
          var voted = $(".increment").data("voted")
          var vote_id = $(".increment").data("vote-id")

          if ($(this).hasClass("disabled")){
            return;
          } else if($(this).hasClass("up")) {
            if ($(this).hasClass("double")){
              var vote = 1;
              var count = count + (vote*2);
              $(this).removeClass("double");
              $(this).removeClass("enabled");
              $(".disabled").addClass("enabled");
              $(".enabled").removeClass("disabled");
              $(".enabled").addClass("double");
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
              var vote = -1;
              var count = count + (vote*2);
              $(this).removeClass("double");
              $(this).removeClass("enabled");
              $(".disabled").addClass("enabled");
              $(".enabled").removeClass("disabled");
              $(".enabled").addClass("double");
              $(this).addClass("disabled");
            } else {
              var vote = -1;
              var count = count + vote;
              $(this).data("voted", "true")
              $(this).removeClass("enabled");
              $(".enabled").addClass("double");
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
                     "voted" : voted,
                     "vote_id" : vote_id},
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


