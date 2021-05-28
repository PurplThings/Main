function login(){
    var email = $("#lemail").val();
    var pass = $("#lpass").val();
    var e_msg = document.getElementById("e_msg");
    $.ajax({
        url:"action.php",
        method:"POST",
        data:{login:1,lemail:email,lpass:pass},
        success: function(data){
            $("#e_msg").html(data);
        }
    })
}
