
<div id="view-team-form-section">
    <div class="heading">
        <h6>View Team:</h6>
        <p class="btn-close" onclick="closePopUp();"></p>
    </div>
    <div id="message">

    </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Team Name</label>
            <div class="col-sm-10">
                <p><?=$team['name']?></p>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lead-name" class="col-sm-2 col-form-label">Lead Name</label>
            <div class="col-sm-10">
                <p><?=$team['lead_name']?></p>
            </div>
        </div>

        <div id="member-name">
            <label for="member-name" class="col-sm-2 col-form-label">Member Name</label>
            <div class="mb-3 row">
                <?php foreach ($team['team_members'] as $member):?>
                <div class="col-sm-10">
                    <p><?=$member?></p>
                </div>
                <?php endforeach;?>
            </div>
        </div>

</div>

