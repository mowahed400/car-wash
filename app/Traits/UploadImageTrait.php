<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadImageTrait
{
   public  function uploadImage(Request $request,$folderName){
    $image= $request->file('image')->getClientOriginalName();
    $path= $request->file('image')->storeAs($folderName,$image,'team');
    return $path;
  }
}
