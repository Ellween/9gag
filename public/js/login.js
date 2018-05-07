var login_form = {
  construct: function() {
    this.bindUiAction();
  },

  bindUiAction: function() {
    $('.login-main').click(function(){
       $(".log").addClass('active');
     });

     $('.btn-close').click(function(){
       $('.log').removeClass('active');
     });

     $('.sign-up').click(function(){
        $(".register").addClass('active');
      });

      $('.btn-close').click(function(){
        $('.register').removeClass('active');
      });

      $('.upload-btn').click(function(){
         $(".upload").addClass('active');

       });

       $('.btn-close  ').click(function(){
         $('.upload').removeClass('active');
       });

       $('.search-icon').click(function(){
         $('.search-box-panel').toggleClass('show');
       });

       $('.log-out').click(function(){
         $('.drop-down-section').toggleClass('action');
       });

       $('.picture-upload').click(function(){
         $('.default-upload-button').trigger('click');
       });

       $('.default-upload-button').change(function(){
         var filename = $(this).val();
         if(filename){
           $('.first-step').removeClass('active');
           $('.second-step').addClass('active');
         }
       });


  }
}


$(document).ready(function(){
   login_form.construct();
});
