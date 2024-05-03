<?php
namespace TM\App;
require_once "./Controller/Teams.php";
require_once "./Model/TeamsModal.php";
class Route
{
    public function __construct()
    {
        $post = $_POST;
        if (!empty($post) && !empty($post['action'])) {
            $team_controller = new \TM\App\Controller\Teams();
            switch ($post['action']) {
                case 'add':
                    $team_controller->addTeam($post);
                    break;
                case 'get':
                    $team_controller->getTeam($post);
                    break;
            }
        }
    }

}
new Route();