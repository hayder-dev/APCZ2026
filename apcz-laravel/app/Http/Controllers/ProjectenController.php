<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ProjectenController extends Controller
{
    public function index()
    {
        return view('pages.projecten');
    }

    public function album(string $album)
    {
        $albums = [
            'interieur' => [
                'title' => 'Interieur detail',
                'description' => 'Voorbeelden van dieptereiniging, detailwerk, bekleding, contactpunten en nette afwerking van interieurs.',
                'fallback_cover' => asset('assets/img/hero-1.jfif'),
            ],
            'exterieur' => [
                'title' => 'Exterieur detail',
                'description' => 'Projecten gericht op handwas, decontaminatie, velgenreiniging, finishing en een strakke buitenzijde.',
                'fallback_cover' => asset('assets/img/hero-2.jfif'),
            ],
            'polijsten' => [
                'title' => 'Polijsten & lakcorrectie',
                'description' => 'Voorbeelden van glansherstel, swirls verminderen en lakcorrectie waar veilig mogelijk.',
                'fallback_cover' => asset('assets/img/hero-3.jfif'),
            ],
            'showroom' => [
                'title' => 'Verkoopklaar / showroomstaat',
                'description' => 'Totaalprojecten waarbij presentatie, afwerking en verkoopklare uitstraling centraal staan.',
                'fallback_cover' => asset('assets/img/hero-4.jfif'),
            ],
            'zakelijk' => [
                'title' => 'Zakelijk & wagenpark',
                'description' => 'Projecten voor bedrijfswagens, leaseauto’s en wagenparken met focus op representativiteit en consistentie.',
                'fallback_cover' => asset('assets/img/hero-5.jfif'),
            ],
            'coatings' => [
                'title' => 'Coatings & bescherming',
                'description' => 'Beelden van beschermlagen, coatings en behandelingen voor langdurige glans en makkelijker onderhoud.',
                'fallback_cover' => asset('assets/img/hero-1.jfif'),
            ],
        ];

        abort_unless(array_key_exists($album, $albums), 404);

        $dir = public_path("assets/projects/{$album}");
        $images = [];

        if (File::isDirectory($dir)) {
            $files = File::files($dir);

            foreach ($files as $file) {
                $ext = strtolower($file->getExtension());

                if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'], true)) {
                    $images[] = asset("assets/projects/{$album}/" . $file->getFilename());
                }
            }
        }

        sort($images);

        $albumCover = !empty($images)
            ? $images[0]
            : $albums[$album]['fallback_cover'];

        return view('pages.projecten-album', [
            'album' => $album,
            'albumTitle' => $albums[$album]['title'],
            'albumDescription' => $albums[$album]['description'],
            'albumCover' => $albumCover,
            'images' => $images,
        ]);
    }
}