<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
        ->add(Url::create('http://192.168.1.106/siteWeb/expertbi/')->setPriority(1.0))
        ->add(Url::create('http://192.168.1.106/siteWeb/expertbi/service')->setPriority(0.8))
        ->add(Url::create('http://192.168.1.106/siteWeb/expertbi/equipe')->setPriority(0.7))
        ->add(Url::create('http://192.168.1.106/siteWeb/expertbi/contact')->setPriority(0.7))
        ->add(Url::create('http://192.168.1.106/siteWeb/expertbi/apropos')->setPriority(0.7));


        // Save the sitemap to the root directory of the project
        $sitemap->writeToFile(base_path('sitemap.xml'), 'http://192.168.1.106/siteWeb/expertbi/sitemap.xsl');

        $this->info('Sitemap generated successfully.');
    }
}
