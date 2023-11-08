<?php

namespace App\Models;

use \Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function find($slug)
{
    return static::all()->firstWhere('slug',$slug);
}
    
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    public $info;

    public function __construct($title, $excerpt, $date, $body, $slug, $info)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
        $this->info = $info;
    }
    public static function all()
    {
        return collect(File::files(resource_path("posts/")))
            ->map(function ($file){
                $document = YamlFrontMatter::parseFile($file);

                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
                    $document->info
                );
            })
						->sortByDesc('date');
    }
    
}
