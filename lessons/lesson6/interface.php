<?php

interface Move
{
    /**
     * Interface khong phai la mot class, vay nen khong co phg thuc hay thuoc tinh
     * - Nhung no van giu lai phuong thuc truu tuong
     * - Interface hay Abstract deu la ban thiet ke cua du an phan mem
     * - Interface la ban thiet ke cho cac class co chung hanh dong nhung khong ban chat
     * - Abstract la ban thiet ke cho cac class co chung ban chat muc do mo rong du an cua interface lon hon
     * - 
     */

    public function go();
}

class People implements Move
{
    public function go()
    {
        return "Go by head";
    }
}

class Auto implements Move
{
    public function go()
    {
        return "Go by tired";
    }
}

$people = new People();
echo $people->go();