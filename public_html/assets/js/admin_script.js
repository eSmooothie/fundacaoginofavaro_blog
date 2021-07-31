// $.ajax({
//   type: 'post',
//   url: url+'',
//   data: data,
//   success: function(response, textStatus, xhr){
//
//   },
//   error: function(xhr, textStatus, errorMessage){
//
//   }
// });
let url = "http://test.blog:9092/";

$(document).ready(function(){
    $("#adminLogin").submit(function(e){
      var data = $("#adminLogin").serialize();
      e.preventDefault();

      $.ajax({
        type: 'post',
        url: url+'admin/login/submit',
        data: data,
        success: function(response, textStatus, xhr){ // success callback
          // redirect
          window.location.replace(url+'admin/');
          $("#password").removeClass('is-invalid');
        },
        error: function(xhr, textStatus, errorMessage){ // error callback
          $("#password").removeClass('is-valid');
          $("#password").addClass('is-invalid');
        }
      });

    });


    $("#addNewLocation").submit(function(e){
      e.preventDefault();

      var formData = new FormData();
      var eleFile = document.getElementById('addImg1');
      var ins = eleFile.files.length;

      formData.append("name",$("input[name=name]").val());
      formData.append("latitude",$("input[name=latitude]").val());
      formData.append("longitude",$("input[name=longitude]").val());
      formData.append("description",$("textarea[name=description]").val());
      formData.append("address", $("input[name=address]").val());
      
      for(var x = 0; x < ins; x++){
        formData.append("imgs[]", eleFile.files[x]);
      }

      $.ajax({
        type: 'post',
        url: url+'add/site',
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){

          var myModal = new bootstrap.Modal(document.getElementById("responseModal"), {});
          // info here
          $("#responseBody").html("Success!");
          myModal.show();
        },
        error: function(xhr, textStatus, errorMessage){
          var myModal = new bootstrap.Modal(document.getElementById("responseModal"), {});
          // info here
          $("#responseBody").html("Error "+ xhr.status +": "+ errorMessage);
          myModal.show();
        }
      });

    });

    $.ajax({
      type: 'get',
      url: url+'get/site',
      success: function(data){
        var selectSite = document.getElementById('selectSite');
        data.forEach((item, i) => {
          var opt = document.createElement("option");
          opt.value = item['ID'];
          opt.innerHTML = item['NAME'];
          selectSite.appendChild(opt);
        });
      },
      error: function(data){

      }
    });

    $("#uploadImage").submit(function(e){
      e.preventDefault();

      var formData = new FormData();
      var eleFile = document.getElementById('addImg2');
      var ins = eleFile.files.length;
      var siteID = $('select#selectSite').children("option:selected").val();
      for(var x = 0; x < ins; x++){
        formData.append("imgs[]", eleFile.files[x]);
      }
      formData.append("SITEID", siteID);

      $.ajax({
        type: 'post',
        url: url+'add/image/site',
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
          var myModal = new bootstrap.Modal(document.getElementById("responseModal"), {});
          // info here
          $("#responseBody").html("Success!");
          myModal.show();
        },
        error: function(xhr, textStatus, errorMessage){
          var myModal = new bootstrap.Modal(document.getElementById("responseModal"), {});
          // info here
          $("#responseBody").html("Error "+ xhr.status +": "+ errorMessage);
          myModal.show();
        }
      });

    });
});
