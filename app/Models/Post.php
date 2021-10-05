<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
    {
        public static function all()
        {
            $files = File::files(resource_path("posts/"));

            array_map(fn($file) => $file->getContents(), $files);
        }


        public static function find ($slug)
        {
            if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
                throw new ModelNotFoundException();
                // If the side (URL) doesn't exist, redirect the user to the homepage.
            }
            return cache()->remember("posts.{$slug}", 1200, fn()=>file_get_contents($path));
        }
    }
