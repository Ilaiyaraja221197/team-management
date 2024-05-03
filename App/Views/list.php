<?php
    $list = (new \TM\App\Controller\Teams())->getTeams();
?>
<div id="list">
    <div id="add-team">
        <p>List of teams</p>
        <button type="button" class="btn btn-primary" onclick="addTeamPopUp()">Add Team</button>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Team Name</td>
                <td>Lead Name</td>
                <td>Team Members</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if(empty($list)):
                    ?>
                    <tr>
                        <td colspan="5"  >No teams found.Create one with above add team field.</td>
                    </tr>
                    <?php
                else:
                    $no = 1;
                foreach ($list as $item) :
                ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$item["name"]?></td>
                        <td><?=$item["lead_name"]?></td>
                        <td><?=$item["team_count"]?></td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="getTeamPopUp('<?=$item['id']?>')">View</button>
                            <button type="button" class="btn btn-danger" onclick="deleteTeam('<?=$item['id']?>')">Delete</button>
                        </td>
                    </tr>
                <?php
                $no++;
                endforeach;
                endif;
            ?>
        </tbody>
    </table>
    </div>
</div>
