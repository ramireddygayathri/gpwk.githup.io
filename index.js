function sendMail()
{

var params={ 
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        meassage : document.getElementById("meassage").value,
    };



const serviceID ="service_r2fma2d";
const templateID="template_d7agwxl";

emailjs.send(serviceID,templateID,params)
.then(
    res=>{
    document.getElementById("name").value="";
    document.getElementById("email").value="";
    document.getElementById("subject").value="";
    document.getElementById("message").value="";
    console.log(res);
    alert("your message sent suceessfully");
})
.catch((err)=>console.log(err));

}
