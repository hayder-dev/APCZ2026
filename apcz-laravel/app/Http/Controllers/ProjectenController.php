<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ProjectenController extends Controller
{
    public function album(string $album)
    {
        // Whitelist (alleen deze 6 zijn geldig)
        $allowed = ['interieur','exterieur','polijsten','showroom','zakelijk','coatings'];
        abort_unless(in_array($album, $allowed, true), 404);

        $dir = public_path("assets/projects/{$album}");
        $images = [];

        if (File::isDirectory($dir)) {
            $files = File::files($dir);

            foreach ($files as $file) {
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['jpg','jpeg','png','webp'], true)) {
                    $images[] = asset("assets/projects/{$album}/".$file->getFilename());
                }
            }
        }

        // Sorteer zodat 01.jpg, 02.jpg etc netjes op volgorde staan
        sort($images);

        return view('pages.projecten-album', [
            'album' => $album,
            'images' => $images,
        ]);
    }
}