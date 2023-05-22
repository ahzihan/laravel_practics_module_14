<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipartFormData extends Controller
{
    public function FileUpload(Request $request):array{
        $img=$request->file('image_file');
        $fileSize=filesize($img);
        $fileType=filetype($img);
        $originalName=$img->getClientOriginalName();
        $tempFileName=$img->getFilename();
        $fileExtension=$img->extension();

        $img->storeAS('uploads',$originalName);
        $img->move(public_path('uploads'),$originalName);

        return array(
            'fileType'=>$fileType,
            'fileSize'=>$fileSize,
            'originalName'=>$originalName,
            'tempFileName'=>$tempFileName,
            'fileExtension'=>$fileExtension

        );

    }
}
