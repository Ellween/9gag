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
         };
       });

        $('.next').click(function(){
          $('.second-step').removeClass('active');
          $('.third-step').addClass('active');
        });
}
};

var tagInputGenerator = {
  construct: function() {
    this.bindUiAction();
  },

  bindUiAction: function() {
    var that = this;

    $('.upload_tags').on('keydown', function(e) {
      if(e.keyCode == 13){
        that.appendInput($('.upload_tags').val());
        $('upload_tags').val(' ');
        return false;
      }
    })
  },

  appendInput: function(value) {
    $('.tag_container').prepend(`
        <span class="tag">

          <input class = "uploaded_tag" type="text" name="tags[]" value="`+ value + `" multiple ="multiple" readonly>
        </span>
      `);
  }
}


$(document).ready(function(){
   login_form.construct();
   tagInputGenerator.construct();
});
