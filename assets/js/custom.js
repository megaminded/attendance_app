const handleRegistration = (event) =>{
    event.preventDefault()
    
    const formData = new FormData(event.target)
    const firstname = formData.get("firstname")
    console.log(firstname)
}