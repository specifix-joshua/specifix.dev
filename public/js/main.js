"use strict";
(function() {
      
    $(document).ready(function() {

      // MARK NOTIFICATION AS READ
      $(function(){
        $(".view-message").click(function(){
          var notif_id = $(this).data("notif-id");
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({        
              type: "POST", 
              url: "/notifications", // Location of the service      
              data: {"notif_id" : notif_id,
                     "is_read" : '1'},
              success: function (msg) {//On Successfull service call   
                  // if (msg.status == "OK") {
                  // msg.data
                  // }
                  console.log('success');
                  // CREATE AN AJAX REQUEST IF YOU WANT TO IN WEEK 2
              },
              error: function (xhr) { console.log(xhr); } // When Service call fails             
          });
        });
      });

      // VOTING APPARATUS
      $(function(){
        
        $(".increment").on('click', function(){
          var self = this;
          var count = parseInt($("~ .count", this).text());
          var type = $(this).data("type");
          var object_id = $(this).data("object-id");
          var user_id = $(this).data("user-id");
          var voted = $(this).attr("data-voted");
          var vote_id = $(this).attr("data-vote-id");
          var id = $(this).attr("id");

          if ($(this).hasClass("disabled")){
            return;
          } else if($(this).hasClass("up")) {
            var vote = 1;
          } else {
            var vote = -1
          }
          if ($(this).hasClass("double")){
            var count = count + (vote*2)
            $(this).removeClass("double");
            $(this).removeClass("enabled");
            $(this).siblings(".disabled").addClass("enabled").addClass("double").removeClass("disabled").attr("data-voted", "1");
            $(this).addClass("disabled");
          } else {
            var count = count + vote;
            $(this).attr("data-voted", "1")
            $(this).siblings(".enabled").attr("data-voted", "1").addClass("double");
            $(this).removeClass("enabled");
            $(this).addClass("disabled");
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
                     "type" : type,
                     "user_id" : user_id,
                     "object_id" : object_id,
                     "voted" : voted,
                     "vote_id" : vote_id},
              success: function (msg) {//On Successfull service call   
                  if (msg.status == "OK") {
                    var newId = msg.data['id'];
                    updateThing(newId);
                  }

              },
              error: function (xhr) { console.log(xhr); console.log(voted); } // When Service call fails             
          });
          function updateThing(newId){
            // console.log(newId);
            // console.log(self);
            $(self).attr('data-vote-id', newId);
            // console.log(self);
            $(self).siblings('.increment').attr('data-vote-id', newId);
          }
          $(this).parent().addClass("bump");
          
          setTimeout(function(){
            $(this).parent().removeClass("bump");    
          }, 400);
        });
      });
      //END VOTING APPARATUS

      // LOGIN FOR VOTING

      $('.loginNow').on('click', function () {
        $('.loginTitle').html('Login to Vote');
          $('.login-modal').modal('show');
      })
      $("#login-modal-button").on('click', function () {
        $('.loginTitle').html('Welcome Back');
      })
      // TINYMCE FADE
      $(".form-group").on('click', function() {
        $(".mce-tinymce").animate({
          opacity: "1"
        }, 500)
      });

      //MODAL FOCUS
      $('.modal').on('shown.bs.modal', function () {
        $('#email').focus();
        $('#username').focus();
      })
    })
})();


