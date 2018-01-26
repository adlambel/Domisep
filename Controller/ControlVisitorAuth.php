<?php

namespace Domisep\Controller;

use Domisep\Auth\Authentication;
use Domisep\Config\Config;
use Domisep\Model\ModelProblem;
use Domisep\Model\ModelRoom;

class ControlVisitorAuth
{
    public static function stats() {
        require(Config::getVues()['stats']);
    }

    public static function account() {
        require(Config::getVues()['account']);
    }


    public static function assistance() {
        require(Config::getVues()['assistance']);
    }

    public static function problemContact() {
        ModelProblem::createProblem($_POST);
        require(Config::getVues()['assistance']);
        echo("<script src='Vues/problem_send.js'></script>");
    }

    public static function checkSession() {
        require(Config::getVues()['clientAuth']);
    }

    public static function getRooms()
    {
        return ModelRoom::getRooms();
    }

    public static function logout()
{
    Authentication::disconnection();
    //Changement de l'action
    require(Config::getVues()['default']);
}
}