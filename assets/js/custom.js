const baseUrl = "http://127.0.0.1:9000";

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
            // headers:{
            //     "Content-type": "application/json",
            // },
            body:JSON.stringify(payload)
    }
}


const notifyUser = (message, type) =>{
    const warningContainer = document.querySelector(".alert")
    if(message){
        if(type === "warning"){
            warningContainer.classList.remove("d-none")
            warningContainer.classList.add("alert-warning")
            warningContainer.classList.add("d-block")
            warningContainer.textContent = message
        }else if(type === "success"){
            warningContainer.classList.remove("d-none")
            warningContainer.classList.add("alert-success")
            warningContainer.classList.add("d-block")
            warningContainer.textContent = message
        }

    }

}

const handleRegistration = (event) =>{
    event.preventDefault()
    const formData = new FormData(event.target)
    const fileType = ["jpg", "jpeg", "png"]

    clearWarning()
    const firstname = formData.get("firstname")
    const lastname = formData.get("lastname")
    const email = formData.get("email")
    const department = formData.get("department")
    const level = formData.get("level")
    const matric = formData.get("matric")
    const password = formData.get("password")
    const confirmPass = formData.get("confirmPass")
    const profile = formData.get("profile")


    

    if(firstname.trim() === "" || lastname.trim() === "" || email.trim() === "" || department.trim() === ""|| level.trim() === "" || matric.trim() === ""|| password.trim() === "" || confirmPass.trim() === ""){
        notifyUser("ensure all the fields are filled", "warning")
    }else if(password !== confirmPass){
        notifyUser("password and comfrim password must match", "warning")
    }else if(profile.name === ""){
        notifyUser("ensure you choose your profile picture", "warning")
    }else if(!validateProfile(profile, fileType)){
        notifyUser("file type not supported", "warning")
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
        }
        formData.append("student_details", JSON.stringify(data))
        formData.append("profile", profile)
        submitRegistrationForm(formData, event)
    }

    
}


const handleLogin = (event) =>{
    event.preventDefault()
    const formData = new FormData(event.target)
    clearWarning()

    const matric = formData.get("matric")
    const password = formData.get("password")

    if(matric.trim() === ""|| password.trim() ===""){
        notifyUser("ensure the filed is filled", "warning")
    }else{
        const data = {
            matric:matric,
            password:password
        }
        console.log(data)
        // submitLoinForm(data, event)
    }
}






const clearWarning = () =>{
    document.querySelector(".alert").classList.add("d-none")
}





// communicate with backend api

const submitRegistrationForm = async (payload, event) =>{
    try{
        const fetchData = await fetch(`${baseUrl}/registration`,post(payload))
        if(fetchData.ok){
            const data = await fetchData.json()
            event.target.reset()
            notifyUser("student registered successfully", "success")
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
        const fetchData = await fetch(`${baseUrl}/login`, post(payload))
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