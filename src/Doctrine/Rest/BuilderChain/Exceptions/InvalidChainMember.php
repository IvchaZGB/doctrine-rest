<?php namespace Pz\Doctrine\Rest\BuilderChain\Exceptions;

class InvalidChainMember extends \RuntimeException
{
    protected $message = 'Chain member should be or `MemberInterface` or `Closure`';
}
