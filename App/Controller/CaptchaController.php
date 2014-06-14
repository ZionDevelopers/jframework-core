<?php
/**
 * jFramework
 *
 * @version 2.0.0
 * @link https://github.com/ZionDevelopers/jframework/ The jFramework GitHub Project
 * @copyright 2010-2014, Júlio César de Oliveira
 * @author Júlio César de Oliveira <talk@juliocesar.me>
 * @license http://www.apache.org/licenses/LICENSE-2.0.html Apache 2.0 License
 */


namespace App\Controller;

use jFramework\MVC\Controller\AbstractActionController;
use jFramework\Image\Captcha;


class CaptchaController extends AbstractActionController
{
    public function indexAction()
    {
        $captcha = new Captcha();
        $captcha->generate('main');
        
        return '';
    }
    
    public function layout($view)
    {
        return '';
    }
}
