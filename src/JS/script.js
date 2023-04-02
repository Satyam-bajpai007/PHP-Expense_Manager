function display(){
    $.ajax({
        type: "POST",
        url: "/display.php",
        dataType: "text",
      }).done(function (result){
        $("#table_body").html(result)
        // console.log(result)
      });
}

display()

$("section").hide() 

$(document).ready(function(){
    $(document).on("click","#nav_salary",function(){
        $("section").hide()
        $("header").show()
    })
    $(document).on("click","#nav_expenses",function(){
        $("section").show()
        $("header").hide()
    })
})

$(document).ready(function(){
    $("#add_cart").click(function () {
        // var id = $("#new-task").val();
        $.ajax({
          type: "POST",
          url: "/add_product.php",
          data: "Input=" + id,
          dataType: "text",
        }).done(function (result){
          // display();
          console.log(result);
        });
    });
})

