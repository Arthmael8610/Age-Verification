<?php
/**
 * Created by JetBrains PhpStorm.
 * User: student
 * Date: 11/28/12
 * Time: 4:30 PM
 * To change this template use File | Settings | File Templates.
 */
require_once 'ageVerification.php';
$age = new AgeVerification();

$age -> getAge(11,29,1986);
