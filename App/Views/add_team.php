<div id="add-team-form-section">
    <div class="heading">
        <h4>Add Team:</h4>
        <p class="btn-close" onclick="closePopUp();"></p>
    </div>
    <div id="message">

    </div>
     <form action="" method="post" id="add-team-form">
         <input type="hidden" name="action" value="add">
        <div class="mb-3 row">
            <label for="name" class="col-sm-4 col-form-label">Team Name</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Team Name"  name="name" class="form-control" id="name" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lead-name" class="col-sm-4 col-form-label">Lead Name</label>
            <div class="col-sm-8">
                <input type="text"  placeholder="Lead Name" name="lead_name" class="form-control" id="lead-name" required>
            </div>
        </div>

        <div id="member-name">
            <label for="member-name" class="col-sm-4 col-form-label">Member Name</label>
            <div class="mb-3 row">
                
                <div class="col-sm-8">
                    <input type="text" placeholder="Member Name"  name="member_name[]" class="form-control" required>
                </div>
            </div>
        </div>
        <div id="add-more">
            <button type="button" class="btn btn-primary" onclick="addMoreMember()">Add More Member</button>
            <button type="button" class="btn btn-primary" onclick="saveTeam()">Save Team</button>
        </div>

     </form>
</div>

