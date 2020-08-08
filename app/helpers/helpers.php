<?php
    function app_url(){
        return URL::To('');
    }
    function public_url($fileUrl = ""){
        return $fileUrl == "" ? asset('/public') : asset('/public'.$fileUrl);
    }
    function file_exists_in_folder($directory,$fileName){
        if(file_exists(public_path($directory.'/'.$fileName)))
        {
            return public_url().'/'.$directory.'/'.$fileName;
        }
        else{
            if($directory == "profile"){
                return public_url().'/default_images/default_user.jpg';
            }
        }
    }

    