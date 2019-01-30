<?php

namespace HTL3R\MegaHamster\Rooms;

abstract class RealEstate implements Room
{
    protected $length = 0, $width = 0, $height = 0, $price = 0;
    protected $imageLocation;

    public function __construct(float $length, float $width, float $height, float $price)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
    }

    public function calculateArea(): float
    {
        return $this->width*$this->length;
    }


    public function basicOutputInfo(): string
    {
        $out = 'It features a length of '.$this->length.', a width of '.$this->width.' and a height of '.$this->height.'. It is available for the low price of EUR '.$this->price.'$';
//        if ($this->getImageLocation() != null) {
//            $image = imagecreatefromjpeg($this->getImageLocation());
//            $imageSize = getimagesize($this->getImageLocation());
//
//            // $stamp = imagecreatefrompng("Images/wasserzeichen.png");
//            $stamp = imagecreatefromjpeg($this->getImageLocation());
//
//            $marge_right = 100;
//            $marge_bottom = 100;
//            $sx = 50;
//            $sy = 50;
//
//
//            imagecopymerge($image, $stamp, imagesx($image) - $sx - $marge_right, imagesy($image) - $sy - $marge_bottom, 0, 0, 50, 50, 500);
//
//
////            imagepng($image, 'Images/test.png');
//            imagedestroy($image);
//
//            // $out .= '<img src="' . $this->getImageLocation() . '"></img><br>';
//            // $out .= '<img src="' . "Images/test.png" . '"></img><br>';
//            // $out .= 'width: ' . $imageSize[0] . '    height: ' . $imageSize[1];
//        }
        return $out;
    }

    public function outputGeneralInfo(): string
    {
        $out = '';
        return $out;
    }

    public function getImageLocation() 
    {
        return $this->imageLocation;
    }

    public function setImageLocation(string $imageLocation): void 
    {
        $this->imageLocation = $imageLocation;
    }

    public function getLength(): float
    {
        return $this->length;
    }


    public function setLength(float $length)
    {
        $this->length = $length;
    }


    public function getWidth(): float
    {
        return $this->width;
    }


    public function setWidth(float $width)
    {
        $this->width = $width;
    }


    public function getHeight(): float
    {
        return $this->height;
    }


    public function setHeight(float $height)
    {
        $this->height = $height;
    }


    public function getPrice(): float
    {
        return $this->price;
    }


    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}