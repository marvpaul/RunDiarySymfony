<?php
/**
 * Created by IntelliJ IDEA.
 * User: marvinkruger
 * Date: 14.12.17
 * Time: 17:55
 */

class InvalidTime extends \Symfony\Component\Validator\Constraint
{
    public $message = "This seems not to be a valid time";
}