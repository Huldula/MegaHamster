<?php

namespace HTL3R\MegaHamster\Rooms;

interface Room {
    public function setLength(float $length);
    public function setWidth(float $width);
    public function setHeight(float $height);
    public function getHeight(): float;
    public function getWidth(): float;
    public function getLength(): float;
    public function basicOutputInfo(): string;
    public function outputGeneralInfo(): string;
    public function calculateArea(): float;
}