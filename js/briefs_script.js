
$(document).ready(function(){
                    
        $.ajax({
            url : "sub_subtopics.php",
            type:"GET",
            async:true,
            data : { topic:$("#sub_dropdown").find(":selected").val()},
            dataType: "html",
            success : function(data){
                     
                    $("#sub_sub_dropdown").html(data);

                    $.ajax({
                      url:"sub_sub_subtopics.php",
                      type:"GET",
                      async:true,
                      data : { subtopic:$("#sub_sub_dropdown").find(":selected").val()},
                      dataType:"html",
                      success: function(newdata){
                         $("#sub_sub_sub_dropdown").html(newdata);
                         console.log("asd");
                      }
                    });
                  }

            
        });
        setTimeout(function(){
        $("#sub2").html($("#sub_sub_dropdown").find(":selected").val());
        $("#sub3").html($("#sub_sub_sub_dropdown").find(":selected").val());
      },2500);

        console.log($("#sub_sub_dropdown").find(":selected").val());

        $(document).on('change','#sub_dropdown',function(){
      console.log("1st changed");
        $.ajax({
            url : "sub_subtopics.php",
            type:"GET",
            async:true,
            data : { topic:$("#sub_dropdown").find(":selected").val()},
            dataType: "html",
            success : function(data){
                     
                    $("#sub_sub_dropdown").html(data);

                    $.ajax({
                      url:"sub_sub_subtopics.php",
                      type:"GET",
                      async:true,
                      data : { subtopic:$("#sub_sub_dropdown").find(":selected").val()},
                      dataType:"html",
                      success: function(newdata){
                         $("#sub_sub_sub_dropdown").html(newdata);
                      }
                    });
                  }

            
        });

        setTimeout(function(){
          $("#sub").html($("#sub_dropdown").find(":selected").val());
        $("#sub2").html($("#sub_sub_dropdown").find(":selected").val());
        $("#sub3").html($("#sub_sub_sub_dropdown").find(":selected").val());
      },2500);

    });

    $(document).on('change','#sub_sub_dropdown',function(){
      console.log("2nd changed");
             $.ajax({
                      url:"sub_sub_subtopics.php",
                      type:"GET",
                      async:true,
                      data : { subtopic:$("#sub_sub_dropdown").find(":selected").val()},
                      dataType:"html",
                      success: function(newdata){
                         $("#sub_sub_sub_dropdown").html(newdata);
                      }
                    });

             setTimeout(function(){
          
        $("#sub2").html($("#sub_sub_dropdown").find(":selected").val());
        $("#sub3").html($("#sub_sub_sub_dropdown").find(":selected").val());
      },1500);
    });

    $(document).on('change','#sub_sub_sub_dropdown',function(){
      $("#sub3").html($("#sub_sub_sub_dropdown").find(":selected").val());
    });

    });
  

      

    