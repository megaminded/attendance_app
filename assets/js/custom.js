const validateProfile = (file) =>{
    const fileType = ["jpg", "jpeg", "png"]
   return fileType.includes(file.name.split(".")[0])
}


const handleRegistration = (event) =>{
    event.preventDefault()
    const formObject = {};
    const formData = new FormData(event.target)

    clearWarning();
    formData.forEach(
        (value, key)=>{
            if(value instanceof File){
                formObject[key] = value.name
            }else{
                if(value.trim() == ""){
                    document.writeln(
                        `<div class="alert alert-warning" role="alert">
                        ${key} filed must not be empty
                        </div>`
                    )
                }else{
                    formObject[key] = value
                }
            }
        }
    )
    console.log(formObject)
    

}


const clearWarning = () =>{
    const warningContainer = document.querySelectorAll(".warning-message")
    warningContainer.forEach(
        (warning)=>{
            warning.style.display = "none"
        }
    )
}