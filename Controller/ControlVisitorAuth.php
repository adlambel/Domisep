<?php

namespace Domisep\Controller;

use Domisep\Auth\Authentication;
use Domisep\Auth\ModelUser;
use Domisep\Config\Config;
use Domisep\Model\ModelHome;
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

    public static function getClient()
    {
        return ModelUser::getClient($_SESSION["user"]["id"]);
    }

    public static function addHome()
    {
        ModelHome::createHome($_POST);
        require(Config::getVues()["account"]);
        echo("<script src='Vues/add_modal.js'></script>");

    }

    public static function getHomes()
    {
        return ModelHome::getHomes();
    }

    public static function logout()
{
    Authentication::disconnection();
    //Changement de l'action
    require(Config::getVues()['default']);
}
}