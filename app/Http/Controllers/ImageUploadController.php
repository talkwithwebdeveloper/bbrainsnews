<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        \Log::info('Upload Request:', $request->all()); // Log request data
    
        // Validate the image
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store the image
        if ($request->hasFile('upload')) {
            $imagePath = $request->file('upload')->store('images', 'public');
    
            \Log::info('Image Path:', [$imagePath]); // Log the path of the uploaded image
    
            return response()->json([
                'url' => Storage::url($imagePath),
            ]);
        }
    
        \Log::error('Image upload failed.'); // Log upload failure
        return response()->json(['error' => 'Image upload failed'], 400);
    }
    
    
    
}
