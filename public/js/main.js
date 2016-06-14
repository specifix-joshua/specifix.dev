"use strict";
(function() {
      
    $(document).ready(function() {

      // VOTING APPARATUS
      $(function(){
        $(".increment").click(function(){
          var count = parseInt($("~ .count", this).text());
          var question_id = $(".increment").data("question-id")
          var user_id = $(".increment").data("user-id")
          
          if($(this).hasClass("up")) {
            var count = count + 1;
            $("~ .count", this).text(count);
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            console.log(question_id);  
            $.ajax({        
                type: "POST", 
                url: "/votes", // Location of the service      
                data: {"count" : "1",
                       "user_id" : user_id,
                       "question_id" : question_id},
                success: function (msg) {//On Successfull service call   
                    console.log('success');
                },
                error: function (xhr) { console.log(xhr); } // When Service call fails             
            });
          } else {
            var count = count - 1;
             $("~ .count", this).text(count);     
          }
          
          $(this).parent().addClass("bump");
          
          setTimeout(function(){
            $(this).parent().removeClass("bump");    
          }, 400);
        });
      });
      //END VOTING APPARATUS
    })
})();


