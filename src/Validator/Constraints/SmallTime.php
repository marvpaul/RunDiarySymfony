<?php
/**
 * Created by IntelliJ IDEA.
 * User: marvinkruger
 * Date: 14.12.17
 * Time: 17:55
 */
namespace App\Validator\Constraints;

/**
 * @Annotation
 */
class SmallTime extends \Symfony\Component\Validator\Constraint
{
    public $message = "Time can't be negative or 0";
}