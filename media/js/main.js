$("document").ready(function () {

    /*****Image Gallery ****/

  
        $(".gallery-img").click(function(){
          var t = $(this).attr("src");
          console.log(t);
          $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
          $("#myModal").modal();
        });
     




});
 