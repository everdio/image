<?php
namespace Modules\Image {
    class Jpeg extends \Modules\Image {
        const IMAGE_TYPE = 2;
        const IMAGE_EXTENSION = ["jpg","jpeg"];
        
        protected function create($path) {
            return imagecreatefromjpeg($path);
        }

        public function export(\Modules\Image $image, \SplFileObject $file, $compression = 75) : bool {
            return (bool) imagejpeg($image->image, $file->getRealPath(), $compression);
        }

        public function display($compression = 75) {
            echo imagejpeg($this->image, false, $compression);
        }
    }
}