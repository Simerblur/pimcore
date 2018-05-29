<?php

namespace AppBundle\Captcha;

interface Captcha
{
    public function isValid($request);
    public function getKey();
}