<?php

namespace App\Builder;

use App\Frameworks\Frameworks;
use App\Builder\Interfaces\FrameworksBuilderInterface;

/**
 * ConcreteBuilder Class
 */
class FrameworksBuilder implements FrameworksBuilderInterface
{
    public function parse($json_path)
    {
        if (empty($json_path) || !file_exists($json_path)) {
           throw new Exception('ファイルがありませんでした');
        }

        $data = $this->convert($json_path);

        $list = array();
        foreach ($data as $d) {
            $list[] = new Frameworks(
                $d->id,
                $d->name,
                $d->category
            );
        }

        return $list;
    }

    private function convert($json_path)
    {
        return json_decode(file_get_contents($json_path));
    }
}