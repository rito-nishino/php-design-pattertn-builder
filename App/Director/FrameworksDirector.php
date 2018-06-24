<?php

namespace App\Director;

use App\Builder\FrameworksBuilder;

/**
 * Director Class
 */
class FrameworksDirector
{
    private $builder;
    private $json;

    public function __construct(FrameworksBuilder $builder, $json)
    {
        $this->builder = $builder;
        $this->json = $json;
    }

    public function getFrameworks()
    {
        $list = $this->builder->parse($this->json);
        return $list;
    }
}