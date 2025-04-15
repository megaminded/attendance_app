from passlib.context import CryptContext
from dotenv import load_dotenv
from pydantic import BaseModel, Field, EmailStr
import os
import json
import sqlite3


load_dotenv()

class ValidateAdminDetails(BaseModel):
    name: str = Field(min_length=3, max_length=20)
    email: EmailStr
    password: str = Field(min_length=5, max_length=12)

admin_pwd_context = CryptContext(schemes="bcrypt", deprecated='auto')
db_url = os.getenv("DATABASE_URL")
 

def generate_admin_hash_password(pasword):
    return admin_pwd_context.hash(pasword)



def read_txt_file():
    try:
        with open("details.txt", mode="r") as f:
            content = f.readlines()
            return {
                "name": content[0].replace("\n", ""),
                "email": content[1].replace("\n", ""),
                "password": content[2].replace("\n", "")
            }
    except FileNotFoundError as e:
        return "no file found"
    except Exception as e:
        return f"error due to: {e}"
    


# validate admin details  
content = read_txt_file()
def refine_detials():
    try:
        detail = ValidateAdminDetails(**content)
        return (detail.name, detail.email, generate_admin_hash_password(detail.password))
    except Exception as e:
        return f"error refining data due to: {e}"
    
r = refine_detials()

    

    
# create admin in admin table  
def sqlite_db():
    details = refine_detials()
    conn = sqlite3.connect(f"../{db_url.split(":")[1].replace("///", "")}")
    cursor = conn.cursor()
    try:
        result = cursor.execute(f"SELECT * FROM Admin WHERE email = '{details[1]}'").fetchmany()
        if not result:
            cursor.execute(
             "INSERT INTO Admin(name, email, password) VALUES(?, ?, ?)", refine_detials()
                )
            conn.commit()
            conn.close()
            return "successfully registered admin"
        raise BaseException("admin with this email already exist")
    except Exception as e:
        return f"error creating admin due to: {e}"
    
    
    
#show loggs to terminal 
print(sqlite_db())