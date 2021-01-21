<?php

namespace denis909\yii;

trait HasJoinTrait
{

    public function hasJoin(string $name) : bool
    {
        if (is_array($this->joinWith))
        {
            foreach($this->joinWith as $config)
            {
                list($with, $eagerLoading, $joinType) = $config;

                if (array_key_exists($name, $with))
                {
                    return true;
                }
            }
        }

        return false;
    }

}