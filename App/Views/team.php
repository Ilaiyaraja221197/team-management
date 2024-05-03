
<div id="view-team-form-section">
    <div class="heading">
        <h4>View Team:</h4>
        <p class="btn-close" onclick="closePopUp();"></p>
    </div>
    <div id="message">

    </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-4 col-form-label fw-bold">Team Name</label>
            <div class="col-sm-8">
                <p><?=$team['name']?></p>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lead-name" class="col-sm-4 col-form-label fw-bold">Lead Name</label>
            <div class="col-sm-8">
                <p><?=$team['lead_name']?></p>
            </div>
        </div>

        <div id="member-name">
            <label for="member-name" class="col-sm-4 col-form-label fw-bold">Member Name</label>
            <div class="mb-3 row">
                <?php $i =1;foreach ($team['team_members'] as $member):?>
                <div class="col-sm-8">
                    <p><?=$i.". ".$member?></p>
                </div>
                <?php $i++; endforeach;?>
            </div>
        </div>

</div>

