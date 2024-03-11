<?php

declare(strict_types=1);

namespace App\Listeners;

use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    protected $exclude = [
        '/assets/*',
        '*/favicon.ico',
        '*/404',
    ];

    public function handle(Jigsaw $jigsaw): void
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');

        if (! $baseUrl) {
            echo "\nTo generate a sitemap.xml file, please specify a 'baseUrl' in config.php.\n\n";

            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath().'/sitemap.xml');

        collect($jigsaw->getOutputPaths())
            ->reject(
                function ($path) {
                    return $this->isExcluded($path);
                }
            )->each(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                static function ($path) use ($baseUrl, $sitemap): void {
=======
                function ($path) use ($baseUrl, $sitemap) {
>>>>>>> cd0d628 (up)
=======
                static function ($path) use ($baseUrl, $sitemap): void {
>>>>>>> 5ca6ed5 (Inline constructor default to property, Add return type declarations, and Redirect route to toRoute helper)
=======
                static function ($path) use ($baseUrl, $sitemap): void {
>>>>>>> master
                    $sitemap->addItem(rtrim($baseUrl, '/').$path, time(), Sitemap::DAILY);
                }
            );

        $sitemap->write();
    }

    public function isExcluded($path)
    {
        return Str::is($this->exclude, $path);
    }
}
