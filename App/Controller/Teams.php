<?php

namespace TM\App\Controller;
use TM\App\Model\TeamsModal;

class Teams
{

    public function getTeams(){
        $model = new TeamsModal();
        return $model->getTeams();
    }

    public function addTeam($post){
        $model = new TeamsModal();
        return $model->insertTeam($post);
    }

    public function getTeam($post){
        $model = new TeamsModal();
        $team = $model->getTeamById($post['id']);
        include_once(__DIR__."/../Views/team.php");
    }

}