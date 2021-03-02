<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class DocsController extends Controller
{

    public function __invoke($docFile)
    {
        $docView = 'docs.' . str_replace('/', '.', $docFile);
        if (view()->exists($docView) === false) {
            dd($docView);
            abort(404);
        }

        return view('docs.view', [
            'docView' => $docView,
            'menu' => $this->buildMenu(),
            'metaTitle' => __('docs.menu.' . $docFile),
        ]);
    }

    private function buildMenu(): Collection
    {
        $views = Storage::disk('docs')->files('', true);

        return collect($views)
            ->filter(function ($fileName) {
                return $fileName !== 'view.blade.php';
            })
            ->map(function ($fileName) {
                $filePath = explode('.', $fileName);

                $fileName = head($filePath);
                $fileNameSlug = str_replace('/', '.', $fileName);

                $group = head(explode('.', $fileNameSlug));

                $route = route('docs', ['docFile' => $fileName], false);

                return [
                    'name' => $fileName,
                    'group' => $group != $fileName ? $group : 'others',
                    'translation' => __('docs.menu.'.$fileNameSlug),
                    'route' => $route,
                    'active' => request()->is(trim($route, '/')),
                ];
            })
            ->sortBy('translation')
            ->sort(function($value){
                $sort = ['install', 'others', 'bot'];
                return array_search($value['group'], $sort);
            })
            ->groupBy('group');
    }

}
