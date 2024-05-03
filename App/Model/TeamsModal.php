<?php

namespace TM\App\Model;

class TeamsModal
{
    private $db = "management";
    private $host = "localhost";
    private $user = "admin";
    private $pass = "admin";
    private $table = "teams";
    public static $conn;

    private function connectDatabase()
    {
        if (!empty(self::$conn)) {
            return self::$conn;
        }
        return self::$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function getTeams()
    {
        $conn = $this->connectDatabase();
        $sql = "SELECT * FROM $this->table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getTeamById($id)
    {
        $conn = $this->connectDatabase();
        $sql =  "SELECT * FROM $this->table WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $team =  $result->fetch_assoc();
        $team['team_members'] = json_decode($team['team_members']);
        return $team;
    }

    public function removeTeamById($id)
    {
        $conn = $this->connectDatabase();
        $sql =  "DELETE FROM $this->table WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }


    public function insertTeam($post)
    {
        $conn = $this->connectDatabase();
        $team_members = json_encode($post['member_name']);
        $team_count = count($post['member_name']);
        $sql = $conn->prepare("INSERT INTO $this->table (name, lead_name, team_count,team_members) VALUES ('{$post['name']}', '{$post['lead_name']}', {$team_count},'{$team_members}')");
        return $sql->execute();
    }

}