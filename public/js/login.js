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

        $('.image-picture-upload').click(function(){
          $('.original-picture-input').trigger('click');
        });



}
};

var addingcomment = {
  construct: function() {
    this.bindUiAction();
  },

  bindUiAction: function() {

      $('.add-comment').click(function(){
        var comment_data = $('.comments-form').serialize();
        var post_id = $('.comments-form').data('id');
        // // console.log(formData);
        // var data = [];
        // data[0] = comment_data;
        // data[1] = formData;
        // console.log(data);

        $.ajax({
          headers: {
              'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },

            method: 'POST',
            url: '/upload/comments/' + post_id,
            data: comment_data,
            success: function(data)
            {
              // console.log(data);
              // var formData = new FormData('.comments-form');
              // // formData.append("image", $('#myFile')[0].files[0], $('#myFile')[0].files[0].name);
              // var comment_id  = data.id
              // // console.log(formData);
              // // debugger;
              //
              // $.ajax({
              //   headers: {
              //       'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
              //     },
              //
              //     method: 'POST',
              //     url: '/upload/commentPic/' + comment_id,
              //     data: formData,
              //     processData: false,
              //     cache: false,
              //     contentType: false,
              //
              //     success: function(data)
              //     {
              //       console.log('in image upload');
              //       console.log(data);
              //       $('.all-comments').append(data);
              //     },
              //
              //     error: function(data)
              //     {
              //
              //       console.log(data);
              //     }
              //
              // });
              $('.all-comments').append(data);
              console.log(data);
            },

            error: function(data)
            {
              console.log('error');
              console.log(data);
            }
        });


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
   addingcomment.construct();
});
