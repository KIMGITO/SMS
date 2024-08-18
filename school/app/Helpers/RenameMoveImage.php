<?php 

if(!function_exists('renameMoveImage')){

    function renameMoveImage($file, $path){
            // Delete the old image if it exists
            $folder = strrchr($path, '/').'/';

            
            $imageName = time() . '.' . $file->extension();
            if (!$file->move(public_path($path), $imageName)) {
                return false;
            }else{
                return $folder.$imageName;
            }
        
        
    }
}



