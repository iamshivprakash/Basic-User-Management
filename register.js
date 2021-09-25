// is pass and cpass matching or not

function matchPasswd(ps1_id,ps2_id,div_id) {
    var passwd1 = document.getElementById(ps1_id);
    var passwd2 = document.getElementById(ps2_id);
    if(passwd1.value == passwd2.value){
        passwd1.classList.remove("border-danger")
        passwd2.classList.remove("border-danger")
        document.getElementById(div_id).innerHTML = "<p id='err-msg' class='p-1 alert alert-success' style='float:right;'> password match </p>";
        passwd1.classList.add("border-success");
        passwd2.classList.add("border-success");
    }else
    {
        passwd1.classList.remove("border-success")
        passwd2.classList.remove("border-success")
        document.getElementById(div_id).innerHTML = "<p id='err-msg' class='p-1 alert alert-danger' style='float:right;'> password do not match </p>"; 
        passwd1.classList.add("border-danger");
        passwd2.classList.add("border-danger"); 
   
    }
    
}

// email validation

function isEmailExist(user_type,div) {
    var email = document.getElementById(user_type).value;
    $.ajax({
        url:"isEmailExist",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        data: {email: email,user_type:user_type},
        success: function (res){
            if(res.err != '')
            {
                document.getElementById(div).innerHTML = res.err;
                document.getElementById(user_type).classList.add('border-danger');
          
            }else{
                document.getElementById(div).innerHTML = res.err;
                document.getElementById(user_type).classList.remove('border-danger');
            }
    
        }
        
    });
}
