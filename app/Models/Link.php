<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['original_url', 'short_url'];
 
    public static function shortenUrl($originalUrl)
    {
        $data = ['original_url' => $originalUrl];
        $link = self::create($data);
        $link->short_url = Hashids::encode($link->id);
        $link->save();
        return $link;
    }
 
    public static function getOriginalUrl($shortUrl)
    {
        $linkId = Hashids::decode($shortUrl);
        $link = self::find($linkId)->first();
        return $link ? $link->original_url : null;
    }
}
