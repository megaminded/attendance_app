from .database import Base
from sqlalchemy import Column, String, Integer, DateTime
from datetime import datetime


class Students(Base):
    __tablename__ = "students"
    id = Column(Integer, primary_key=True, autoincrement=True, index=True)
    firstname = Column(String(100), nullable=False, index=True)
    lastname = Column(String(100), nullable=False, index=True)
    department = Column(String(100), nullable=False, index=True)
    matric = Column(String(100), nullable=False, index=True, unique=True)
    level = Column(String(100), nullable=False, index=True)
    email = Column(String(200), nullable=False, index=True)
    profile_pic = Column(String(100), nullable=False, index=True)
    password = Column(String(500))
    create_at = Column(DateTime, default=datetime.now())

class Admin(Base):
    __tablename__ = "admin"
    id = Column(Integer, primary_key=True, autoincrement=True, index=True)
    name = Column(String(100), index=True)
    email = Column(String(200), nullable=False, index=True, unique=True)
    password = Column(String(500))
    create_at = Column(DateTime, default=datetime.now())
    