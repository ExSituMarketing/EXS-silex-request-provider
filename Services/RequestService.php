<?php

namespace EXS\RequestProvider\Services;

use Symfony\Component\HttpFoundation\Request;
use EXS\TrafficFalcon\Services\Interfaces\RequestServiceInterface;

/**
 * Description of RequestService
 *
 * Created 1-May-2015
 * @author Damien Demessence <damiend@ex-situ.com>
 * @copyright   Copyright 2015 ExSitu Marketing.
 */
class RequestService implements RequestServiceInterface
{
    /**
     * The Request
     * @var string
     */
    private $request;

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function __construct(Request $request)
    {
       $this->request = $request;
    }

    /**
     * @return Symfony\Component\HttpFoundation\Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
