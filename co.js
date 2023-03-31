function SendMail(){
    var params={
        from_name : document.getElementById("fullName").value,
        email_id : document.getElementById("email_id").value,
        message : document.getElementById("Message").value


    }
    emailjs.send("service_r2fma2d","template_d7agwxl",params).then(function (res) {
        alert("Success!" + res.status);
    })
}