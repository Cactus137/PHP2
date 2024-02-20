<?php
// Kế thừa

class GrandParents
{
    public $hand;
    public $leg;
    public $head;
    public $mouth;

    public function walk()
    {
        echo "walk by leg";
    }

    public function eat()
    {
        echo "eat by hand";
    }

    public function think()
    {
        echo "think by head";
    }

    public function talk()
    {
        echo "talk by mouth";
    }
}

class Parents extends GrandParents
{
    public $nose;
    public function smell()
    {
        echo "smell by nose";
    }
}

class Childrent extends Parents
{
    public $ear;
    public function listen()
    {
        echo "listen by ear";
    }
}

$grandparents1 = new GrandParents();
$parents1 = new Parents();
$childrent1 = new Childrent(); 

