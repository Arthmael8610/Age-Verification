<?php
/**
 * Created by JetBrains PhpStorm.
 * User: student
 * Date: 11/28/12
 * Time: 1:42 PM
 * To change this template use File | Settings | File Templates.
 */

class AgeVerification
{
    protected $today;
    protected $age;
    protected $authorized;
    protected $notOfAgeRedirectLocation = 'index.php';
    protected $ofAgeRedirectLocation = '';

    function getAge($month, $day, $year)
    {
        $notOfAgeHTMLRedirect = '<html><head><META http-equiv="refresh" content="5;URL=' . $this -> notOfAgeRedirectLocation . '" /></head><body>';
        $ofAgeHTMLRedirect = '<html><head><META http-equiv="refresh" content="5;URL=' . $this -> ofAgeRedirectLocation . '" /></head><body>';

        if (!isset($month) OR !isset($day) OR !isset($year))
        {
            echo $notOfAgeHTMLRedirect;
            echo 'You are not old enough, You will be redirected shortly...</body></html>';

        }
        else
        {
            $today = date('m-d-o');
            $dateArray = preg_split('/-/', $today);
            print_r($this -> today = $dateArray);
        }

        $this -> age = $this -> today[2] - $year;
        if ($this -> authorized = self::checkAge($this -> age, $month, $day) == true)
        {
            echo 'you are old enough, you may be redirected shortly.</body></html>';
        }
        else
        {
            echo $notOfAgeHTMLRedirect;
            echo 'You are not old enough, You will be redirected shortly...</body></html>';
        }
    }

    function checkAge($age, $month, $day)
    {
        if($age == 18)
        {
            if($this -> today[0] == $month && $this -> today[1] == $day)
            {
                return true;
            }
        }
        elseif($age > 18)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}