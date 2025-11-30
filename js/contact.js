function sendmail(){
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value
    }
    emailjs.send("service_90ncndf","template_sv1uivr", parms).then(alert("Email send "))
}