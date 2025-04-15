from pydantic import BaseModel

class RegisterStudent(BaseModel):
    firstname: str
    lastname: str
    department: str
    matric: str
    level: str
    email: str
    password: str



class LoginUser(BaseModel):
    matric: str
    password: str
    
