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
    
})

