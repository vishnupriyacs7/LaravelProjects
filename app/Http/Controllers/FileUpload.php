<?php

namespace App\Http\Controllers;

use App\Models\FileUploadModel;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function formView(){
       	return view('fileupload');
    }

    public function fileupload(Request $request){
        // validation for image file
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalFilename = $file->getClientOriginalName();
            //adding file to public folder
            $file->move(public_path('uploads'), $originalFilename); //public/uploads/

            // Save file information to the database
            $fileModel = new FileUploadModel();//model
            $fileModel->image = $originalFilename;
            $fileModel->save();
            
            // Redirect or return a response
            return redirect()->back()->with('success', 'File uploaded successfully!');
        }
    }

    public function displayFile($id){
        $fileModel = FileUploadModel::find($id);
        return view('displayfile', compact('fileModel'));
    }


}
