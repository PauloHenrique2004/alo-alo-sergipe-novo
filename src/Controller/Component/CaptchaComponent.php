<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class CaptchaComponent extends Component{
    public function captchaIsValid(){
        $recaptcha = new \ReCaptcha\ReCaptcha('6Lf3HqQUAAAAAO7MhZB6LOk4QeKV4rZ_1l4f1k2Q');
        $resp = $recaptcha->setExpectedHostname('www.consultenos.net')
            ->setScoreThreshold(0.1)
            ->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        return $resp->isSuccess();
    }

}
