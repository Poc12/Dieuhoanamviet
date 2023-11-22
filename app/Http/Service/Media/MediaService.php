<?php

namespace App\Http\Service\Media;

use Intervention\Image\ImageManagerStatic;

abstract class MediaService
{
    static function getImageSrc($src, $fullurl = true, $sizeName = false)
    {
        if (!$src) {
            return url('assets/images/no-img.jpeg');
        }
        if (isLink($src)) {
            return $src;
        }
        if (!$sizeName) {
            return self::buildImageLink($src, $fullurl);
        }
        $link_image_admin = self::buildImageLink($src, $fullurl);
        return self::thumb($link_image_admin, $src, $sizeName);
    }


    static function buildImageLink($src, $fullurl = true, $no_image = '')
    {
        if (!$src) {
            if (!$no_image) {
                return url('assets/images/no-img.jpeg');
            } else {
                return $no_image;
            }
        }
        if (isLink($src) || !$fullurl) {
            return $src;
        }
        return config('filesystems.media_domain'). $src . '?ver=1309';
    }


    static function thumb($link_image_admin, $filename, $sizeName) {
        $_src = explode('/', $filename);
        $_src[0] = 'thumbs/' . $sizeName;//replace thư mục images gốc thành thư mục thumbs/size
        $src = implode('/', $_src);

        $src = 'data/'.$src;
        $dir = public_path(dirname($src));

        if (! \File::exists($dir)) {
            \File::makeDirectory($dir, 0755, true);
        }else {
            if(\File::exists(public_path($src))) {
                return public_link($src);
            }
        }
        switch ($sizeName) {
            case 'big':
                $width = 688;
                $height = 268;
                break;
            case 'medium':
                $width = 400;
                $height = 400;
                break;
            case 'small':
                $width = 72;
                $height = 72;
                break;
            case 'new':
                $width = 250;
                $height = 110;
                break;
            default:
                $width = 720;
                $height = 400;
                break;
        }
        try {
            ImageManagerStatic::make($link_image_admin)
                ->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($src, 90);
        }catch (\Exception $e) {
            return $link_image_admin;
        }
        return public_link($src);
    }

    public function getFileLink($link): string
    {
        if (isLink($link)) {
            return $link;
        }
        $url = $link['src'] ?? $link;
        return config('filesystems.media_domain').$url;
    }
}