<?php

namespace AppBundle\Captcha;

use AppBundle\Captcha\Captcha;
use ReCaptcha\ReCaptcha;

class GoogleCaptcha implements Captcha
{
    const PRIVATE_KEY = '6LeICR0UAAAAAOdsCWuBvvOr4AnHHnzqIn56fVEo';
    const SITE_KEY = '6LeICR0UAAAAAPbnTtBmwTzmWPREU8vtIWw2NRh0';

    public function isValid($request)
    {
        $recaptcha = new ReCaptcha(self::PRIVATE_KEY);
        $resp = $recaptcha->verify($request->get('g-recaptcha-response'), $request->getClientIp());

        if($resp->isSuccess()) {
            $response = true;
        } else {
            $response = false;
        }

        return $response;
    }

    public function getKey()
    {
        return self::SITE_KEY;
    }

}