<?php

class Crud extends DbConnection{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->DbConnect();
    }

    public function createDb()      //Creates a database
    {
        $statement = 'CREATE DATABASE attendance';

        if($this->conn->query($statement) === TRUE){
            return "Database created successfully";
        } else{
            throw new Exception("unable to create database");
        }
    }

    public function createTable()
    {
        $statement = 'CREATE TABLE users(
                user_id VARCHAR(255) PRIMARY KEY,
                firstname VARCHAR(255),
                lastname VARCHAR(255),
                department VARCHAR(255),
                matric_number VARCHAR(255),
                student_level VARCHAR(255),
                email VARCHAR(255),
                user_password VARCHAR(255),
                user_image VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ';

        if($this->conn->query($statement) === TRUE){
            return "Created user table successfully";
        } else{
            throw new Exception("Unable to create user table");
        }
    }
}
