<?php
namespace Codeception\Lib\Driver;

class Informix extends Db
{

    public function getQuotedName($name)
    {
        return $name;
    }
}
