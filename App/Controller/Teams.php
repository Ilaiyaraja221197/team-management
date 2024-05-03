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
        $status =  $model->insertTeam($post);
        if ($status){
            echo "Team added successfully";
        }
    }

    public function getTeam($post){
        $model = new TeamsModal();
        $team = $model->getTeamById($post['id']);
        include_once(__DIR__."/../Views/team.php");
    }

    public function removeTeam($post){
        $model = new TeamsModal();
        $team = $model->removeTeamById($post['id']);

    }

}