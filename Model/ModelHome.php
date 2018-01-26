<?php


namespace Domisep\Model;


use Domisep\Config\Config;
use Domisep\Persistance\DAL\HomeGateway;

class ModelHome
{

    public static function createHome($inputArray){
        $gw = new HomeGateway(Config::createConnection());
        return $gw->createHome($inputArray);
    }

    public static function getHomes()
    {
        $gw = new HomeGateway(Config::createConnection());
        return $gw->getHomes();
    }

}