const validateProfile = (file) =>{
    const fileType = ["jpg", "jpeg", "png"]
   return fileType.includes(file && file.name.split(".")[1].toLowerCase())
}


const handleRegistration = (event) =>{
    event.preventDefault()
    const formObject = {};
    const formData = new FormData(event.target)
    let formValid = true

    clearWarning();

    formData.forEach(
        (value, key)=>{
            if(value instanceof File){
                if(!validateProfile(value)){
                        ShowWarning(key, "invalid file type")
                        formValid = false
                    }else{
                        formObject[key] = value
                    }
                
                
            }else{
                if(value.trim() == ""){
                    ShowWarning(key, `${key} field must not be empty`)
                    formValid = false
                }else{
                    formObject[key] = value
                }
            }
        }
    )
    formValid && submitRegistrationForm(formObject)
    
}


const handleLogin = (event) =>{
    
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

const submitRegistrationForm = async (payload) =>{
    try{
        const fetchData = await fetch("backend_url",{
            method:"POST",
            headers:{
                "Content-type": "application/json",
            },
            body:JSON.stringify(payload)
        })
        if(fetchData.ok){
            const data = await fetchData.json()
        }
        else{
            throw new Error("error submitting form")
        }

    }catch(error){
        console.log("error due to ", error)
    }
}