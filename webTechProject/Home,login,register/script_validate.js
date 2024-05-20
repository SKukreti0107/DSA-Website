function loginFormSubmit(e){
    e.preventDefault()
    
    var Username = document.getElementById("Username").value
    var pass = document.getElementById("pass").value


    if(Username.trim().length==0){
        alert("Username cannot be empty !")
        return false
    }
    else if(pass.trim().length==0){
        alert("Please enter password !")
        return false
    }

    else{
        document.getElementById("loginForm").submit();
        return true;  
    }
    
}

function registerFormSubmit(e){
    e.preventDefault()
 
    var Username = document.getElementById("Username").value
    var pass = document.getElementById("pass").value
    var repass = document.getElementById("rePass").value
 

    if(Username.trim().length == 0){
        alert("Username cannot be empty !")
        return false; 
    }

    if(pass.trim().length === 0){
        alert("Please enter password !")
        return false; 
    }
    
    let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&^])[A-Za-z\d@.#$!%*?&]{8,15}$/

    if(!regex.test(pass)){
        let message = "At least one lowercase alphabet\nAt least one uppercase alphabet\nAt least one Numeric digit\nAt least one special character\nmust be in the range 8-15" 
        alert("Password not strong enough. Please match the following conditions:\n" + message)
        return false 
     }

    if(pass != repass){
        alert("Passwords don't match. Please recheck.")
        return false 
    }

    else{
        document.getElementById("registerForm").submit();
        return true;  
    }
    
   
}
