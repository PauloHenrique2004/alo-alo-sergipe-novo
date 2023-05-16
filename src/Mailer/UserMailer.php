<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * User mailer.
 */
class UserMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'User';

    public function recovery($user){

        $this->setTo($user[0]['email'])
            ->returnPath('naoresponda-golden-seller@fabtech.com.br')
            ->setFrom(['naoresponda-icon@fabtech.com.br' => 'Contato Golden Seller'])
            ->setProfile('default')
            ->setEmailFormat('html')
            ->setTemplate('recovery_email_template')
            ->setViewVars(['nome' => $user[0]['username'], 'email' => $user[0]['email'],'hash' => substr($user[0]['password'],0,25)])
            ->setSubject('Recuperação de senha - Golden Seller');
    }

}
