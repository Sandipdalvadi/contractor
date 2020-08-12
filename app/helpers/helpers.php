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
    function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80)
    {
        $filename = $source_file;
        $percent = 0.5;
        // Get new sizes
        list($width, $height) = getimagesize($filename);
        $imgsize = getimagesize($source_file);
        $mime = $imgsize['mime'];

        switch($mime){
            case 'image/gif':
                $image_create = "imagecreatefromgif";
                $image = "imagegif";
                break;

            case 'image/png':
                $image_create = "imagecreatefrompng";
                $image = "imagepng";
                $quality = 7;
                break;

            case 'image/jpeg':
                $image_create = "imagecreatefromjpeg";
                $image = "imagejpeg";
                $quality = 80;
                break;

            default:
                return false;
                break;
        }

        $newwidth = $width * $percent;
        $newheight = $height * $percent;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($filename);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        // Output
        //imagejpeg($thumb);
        $image($thumb, $dst_dir, $quality);
        return;
        //  // exit;
        // $imgsize = getimagesize($source_file);
        // $width = $imgsize[0];
        // $height = $imgsize[1];
        // $mime = $imgsize['mime'];
        // switch($mime){
        //     case 'image/gif':
        //         $image_create = "imagecreatefromgif";
        //         $image = "imagegif";
        //         break;

        //     case 'image/png':
        //         $image_create = "imagecreatefrompng";
        //         $image = "imagepng";
        //         $quality = 7;
        //         break;

        //     case 'image/jpeg':
        //         $image_create = "imagecreatefromjpeg";
        //         $image = "imagejpeg";
        //         $quality = 80;
        //         break;

        //     default:
        //         return false;
        //         break;
        // }

        // $dst_img = imagecreatetruecolor($max_width, $max_height);
        // $src_img = $image_create($source_file);

        // $width_new = $height * $max_width / $max_height;
        // $height_new = $width * $max_height / $max_width;
        // //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
        // if($width_new > $width){
        //     //cut point by height
        //     $h_point = (($height - $height_new) / 2);
        //     //copy image
        //     imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
        // }else{
        //     //cut point by width
        //     $w_point = (($width - $width_new) / 2);
        //     //$w_point = (($width - $width_new) / 1);
        //     imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $max_width, $max_height, $width_new, $height);
        // }

        // $image($dst_img, $dst_dir, $quality);

        // if($dst_img)imagedestroy($dst_img);
        // if($src_img)imagedestroy($src_img);
    }

    