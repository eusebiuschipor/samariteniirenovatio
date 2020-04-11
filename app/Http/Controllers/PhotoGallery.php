<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoGallery extends Controller
{
  public function make_thumb($src, $dest, $desired_width) 
  {
    // ini_set ('gd.jpeg_ignore_warning', 1);
    // @ini_set('default_charset', 'UTF-8'); 

    //try {
      /* read the source image */
      $source_image = @imagecreatefromjpeg($src);

      if ($source_image) {
        $width = imagesx($source_image);
        $height = imagesy($source_image);

        /* find the "desired height" of this thumbnail, relative to the desired width  */
        $desired_height = floor($height * ($desired_width / $width));

        /* create a new, "virtual" image */
        $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

        /* copy source image at a resized size */
        imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

        /* create the physical thumbnail image to its destination */
        imagejpeg($virtual_image, $dest);
      }
    // } catch (Exception $e) {

    // }
  }

  /**
   * Show the photo gallery by name
   *
   * @param  int  $id
   * @return View
   */
  public function show($galleryName, $numberOfPhotos = 0)
  {
    $images = [];
    $directories = [];
    //$path = public_path() . '/img/projects-gallery/' . $galleryName . '/8';
    $path = public_path() . '/img/projects-gallery/' . $galleryName;
    $results = scandir($path);

    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_dir($path . '/' . $result)) {
            array_push($directories, $result);
        }
    }

    // Live
    if ($numberOfPhotos == 0) {
      if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != ".." && !is_dir($path . '/' . $entry)) {
                array_push($images, $entry);
            }
        }
        closedir($handle);
      }
    }

    //create thumb
    // foreach($images as $image) {
    //   $src = public_path() . '/img/projects-gallery/' . $galleryName . '/' . $image;
    //   $dest = public_path() . '/img/projects-gallery/' . $galleryName . '/thumbs/thumb_' . $image;
    //   $width = '300';
    //   $this->make_thumb($src, $dest, $width);
    // }

    // SERVER
    // if ($numberOfPhotos == 0) {
    //   if ($handle = opendir(getcwd() . '/img/projects-gallery/' . $galleryName)) {
    //     while (false !== ($entry = readdir($handle))) {
    //         if ($entry != "." && $entry != "..") {
    //             array_push($images, $entry);
    //         }
    //     }
    //     closedir($handle);
    //   }
    // }

    $view = [
      'galleryName'    => $galleryName,
      'numberOfPhotos' => $numberOfPhotos,
      'images'         => $images,
      'directories'    => $directories
    ];

    return view('photo-gallery', $view);
  }
}
