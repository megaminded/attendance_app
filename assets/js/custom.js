const validateProfile = (file, supported) =>{
    if(file.name){
        return supported.includes(file && (file.name.split(".")[1]).toLowerCase())
    }else{
        return "empty"
    }
}



const post = (payload) =>{
    return {
            method:"POST",
            headers:{
                "Content-type": "application/json",
            },
            body:JSON.stringify(payload)
    }
}


const handleRegistration = (event) =>{
    event.preventDefault()
    const regFormObject = {};
    const formData = new FormData(event.target)
    let formValid = true
    const fileType = ["jpg", "jpeg", "png"]

    clearWarning();

    formData.forEach(
        (value, key)=>{
            if(value instanceof File){
                if(validateProfile(value, fileType) === "empty"){
                    ShowWarning(key, `${key} field must not be empty`)
                }else if(!validateProfile(value)){
                        ShowWarning(key, "invalid file type")
                        formValid = false
                }else{
                        regFormObject[key] = value
                    }
                
            }else{
                if(value.trim() == ""){
                    ShowWarning(key, `${key} field must not be empty`)
                    formValid = false
                }else{
                    regFormObject[key] = value
                }
            }
        }
    )
    if(!validatePasswordMatch(regFormObject.password, regFormObject.confirmpass)){
        formValid = false
        ShowWarning("password", `password input must match with confirm password`)
        ShowWarning("confirmpass", `password input must match with confirm password`)
    }
    formValid && console.log(regFormObject)
    formValid && submitRegistrationForm(regFormObject, event)
    
}


const handleLogin = (event) =>{
    event.preventDefault()
    const loginFormObject = {};
    const formData = new FormData(event.target)
    let formValid = true

    clearWarning()

    
    formData.forEach(
        (value, key) =>{
            if(value.trim() === ""){
                formValid = false;
                ShowWarning(key, `${key} field must not be empty`)
            }else{
                loginFormObject[key] = value
            }
        }
    )
    formValid && console.log(loginFormObject)
    formValid && submitLoinForm(loginFormObject, event)

}



const ShowWarning = (key, message) =>{
    const warning = document.querySelector(`#${key}Warning`)
    if(warning){
        warning.innerHTML = message;
        warning.style.display = "block";
    }
}


const clearWarning = () =>{
    const warningContainer = document.querySelectorAll(".warning-message")
    warningContainer.forEach(
        (warning)=>{
            warning.style.display = "none";
        }
    )
}





// communicate with backend api

const submitRegistrationForm = async (payload, event) =>{
    try{
        const fetchData = await fetch("backend_url",post)
        if(fetchData.ok){
            const data = await fetchData.json()
            event.target.reset()
            // navigate to login page
        }
        else{
            throw new Error("error submitting form")
        }

    }catch(error){
        console.log("error due to ", error)
    }
}


const submitLoinForm = async (payload, event) =>{
    try{
        const fetchData = await fetch("backend_url",)
        if(fetchData.ok){
            const data = await fetchData.json()
            event.target.reset()
            //naivgate to dashboard
        }
        else{
            throw new Error("error submitting form")
        }

    }catch(error){
        console.log("error due to ", error)

    }
}