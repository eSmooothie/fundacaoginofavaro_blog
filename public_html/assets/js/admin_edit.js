import url from './url.js';

$(
    function(){
        $("form").submit(function(e){
            e.preventDefault();
            var formData = new FormData();
            var eleFile = document.getElementById('addImg1');
            var ins = eleFile.files.length;

            formData.append("id",$("input[name=id]").val());
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
                url: url+'edit/site',
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
    }
);