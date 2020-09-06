<?php

include_once 'Point2D.php';

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        $this->z = $z;
        parent::__construct($x, $y);
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function __toString()
    {
        return $this->x . $this->y . $this->z;
    }
}