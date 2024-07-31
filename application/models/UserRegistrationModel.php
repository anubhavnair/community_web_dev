<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserRegistrationModel extends CI_Model
{

    public function registeruser($formArray)
    {

        $fdata = [
            'user_name' => $formArray['user_name'],
            'user_mobile' => $formArray['user_mobile'],
            'user_email' => $formArray['user_email'],
            'user_address' => $formArray['user_address'],
            'user_city' => $formArray['user_city'],
            'user_pincode' => $formArray['user_pincode'],
            'user_profile_pic' => $formArray['user_profile_pic'],
            'user_created_on' => time()
            
            
        ];
        // echo "<pre>";
        // print_r($fdata);
        $q = $this->db->insert('user_registration',$fdata);
        if($q){
            return true;
        }else{
            return false;
        }


    }

}
