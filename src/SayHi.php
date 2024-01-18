<?php

namespace Nhanguyen\SayHi;

class SayHi
{
    public function talk($name = null)
    {
        $name = $name ?? 'Anonymous ' . rand(1, 1000);
        return "Hi, " . $name;
    }
}
