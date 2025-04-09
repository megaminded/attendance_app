const baseUrl = "backend_url";

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
    const fileType = ["jpg", "jpeg", "png"]

    const firstname = formData.get("firstname")
    const lastname = formData.get("lastname")
    const email = formData.get("email")
    const department = formData.get("department")
    const level = formData.get("level")
    const matric = formData.get("matric")
    const password = formData.get("password")
    const confirmPass = formData.get("confirmPass")
    const profile = formData.get("profile")


    console.log(profile.name)

    if(firstname.trim() === "" || lastname.trim() === "" || email.trim() === "" || department.trim() === ""|| level.trim() === "" || matric.trim() === ""|| password.trim() === "" || confirmPass.trim() === ""){
        console.log("ensure the filed is filled")
    }else if(password !== confirmPass){
        console.log("password and comfrim password must match")
    }else if(profile.name === ""){
        console.log("ensure you choose your profile picture")
    }else if(!validateProfile(profile, fileType)){
        console.log("file type not supported")
    }
    else{
        const data = {
            firstname : firstname,
            lastname: lastname,
            email:email,
            department: department,
            level: level,
            matric: matric,
            password: password,
            profile: profile
        }
        console.log(data)
        // submitRegistrationForm(data, event)
    }

    
}


const handleLogin = (event) =>{
    event.preventDefault()
    const formData = new FormData(event.target)
    clearWarning()
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
            warning.classList.add("d-none");
        }
    )
}





// communicate with backend api

const submitRegistrationForm = async (payload, event) =>{
    try{
        const fetchData = await fetch(`${baseUrl}/registration`,post)
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
        const fetchData = await fetch(`${baseUrl}/login`,)
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