<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class DocsController extends Controller
{

    public function __invoke($docFile)
    {
        $docView = 'docs.' . $docFile;
        if (view()->exists($docView) === false) {
            abort(404);
        }

        $menu = $this->buildMenu();

        return view('docs.view', [
            'docView' => $docView,
            'menu' => $menu,
        ]);
    }

    private function buildMenu(): Collection
    {
        $views = Storage::disk('docs')->files('');
        return collect($views)
            ->filter(function ($fileName) {
                return $fileName !== 'view.blade.php';
            })
            ->map(function ($fileName) {
                $fileName = explode('.', $fileName);
                $route = route('docs', ['docFile' => head($fileName)], false);

                return [
                    'name' => head($fileName),
                    'route' => $route,
                    'active' => request()->is(trim($route, '/')),
                ];
            })
            ->sortBy('name');
    }

}
