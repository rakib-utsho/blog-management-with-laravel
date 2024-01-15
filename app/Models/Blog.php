<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $loc, $newName, $imgUrl;

    public static function create($request)
    {
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->author_name = $request->author_name;
        self::$blog->category_id = $request->category_id;
        self::$blog->description = $request->description;
        if ($request->file('image'))
        {
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$loc = 'assests/images/';
        self::$newName = $request->title.'-'.rand().'.'.self::$image->extension();
        self::$imgUrl = self::$loc.self::$newName;
        self::$image->move(self::$loc, self::$newName);
        return self::$imgUrl;
    }

    public static function change($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$blog->title = $request->title;
        self::$blog->author_name = $request->author_name;
        self::$blog->category_id = $request->category_id;
        self::$blog->description = $request->description;
        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

