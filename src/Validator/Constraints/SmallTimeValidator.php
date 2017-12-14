<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class SmallTimeValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value->getTimestamp() <= 0) {
            $value = $value->getTimestamp();
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}