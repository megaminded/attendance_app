<?php
class UserController{
    public function signup($userDetails,$imageFile)
    {
        $signUp = new SignUpController();
        if($signUp->signup($userDetails,$imageFile)){
            $upload = new UserModel();
            if($upload->signupUpload($userDetails)){
                echo json_encode([
                        "status" => true,
                        "message" => "successfully sign up"
                    ]
                );
                
            }
        }
    }

    public function profile()
    {
        $display = new display();
        echo $display->view("view",'profile');
    }

    public function profileSettings()
    {
        $display = new display();

        echo $display->view("edit",'profile');
    }
}