
$(document).ready(function(){
                    var parts = window.location.search.substr(1).split("&");
                    console.log(parts);
                    if(parts[0]!==""){
                    var $_GET = {};
                    for (var i = 0; i < parts.length; i++) {
                      var temp = parts[i].split("=");
                      $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
                    }
                    
                    console.log($_GET['sub']);
                    $("#sub_dropdown").val($_GET['sub']).change();
                    console.log($("#sub_dropdown").val()); }
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
          $("#subject").html($("#sub_dropdown").find(":selected").val());
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
  

      

    