<?php

namespace Nhanguyen\SayHi;

class SayHi
{
    public function index()
    {
        return "Hi " . rand(1, 1000);
    }
}
