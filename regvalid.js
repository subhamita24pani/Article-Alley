function validate(e){
    console.log("conncted");
    let email= document.querySelector("#email").value
    let password = document.querySelector("#password").value
    let error = false
    let emailPatern = /^[a-zA-Z0-9_.]{3,}@[a-zA-Z.]{3,12}.[a-zA-Z]{2,5}$/;
    if(email === ""){
        document.querySelector("#emailError").innerHTML = "Email is required"
        error = true
    } else if(!email.match(emailPatern)){
        document.querySelector("#emailError").innerHTML = "Please Enter a valid email"
        error = true
    }else {
        document.querySelector("#emailError").innerHTML = ""
    }

    let passError = "";
    if(password === ""){
        passError += "Password is required<br>"
        error = true
    } 
    if(!password.match(/[a-z]/)){
        passError  += "Password should have atleast one lower case character<br>"
        error = true
    }
    if(!password.match(/[A-Z]/)){
        passError  += "Password should have atleast one upper case character<br>"
        error = true
    }
    if(!password.match(/[0-9]/)){
        passError  += "Password should have atleast one number<br>"
        error = true
    }
    if(!password.match(/[!@#$%^&*]/)){
        passError  += "Password should have atleast onespecial character<br>"
        error = true
    }
    if(password.length < 6 || password.length>15){
        passError  += "Password should be 6 to 15 character long<br>"
        error = true
    }
    document.querySelector("#passwordError").innerHTML =  passError
    if(error){
        e.preventDefault()
    }
}