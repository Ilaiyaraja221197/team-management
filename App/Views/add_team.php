<div id="add-team-form-section">
    <div class="heading">
        <h6>Add Team:</h6>
        <p class="btn-close" onclick="closePopUp();"></p>
    </div>
    <div id="message">

    </div>
     <form action="" method="post" id="add-team-form">
         <input type="hidden" name="action" value="add">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Team Name</label>
            <div class="col-sm-10">
                <input type="text"  name="name" class="form-control" id="name">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lead-name" class="col-sm-2 col-form-label">Lead Name</label>
            <div class="col-sm-10">
                <input type="text"  name="lead_name" class="form-control" id="lead-name">
            </div>
        </div>

        <div id="member-name">
            <label for="member-name" class="col-sm-2 col-form-label">Member Name</label>
            <div class="mb-3 row">
                
                <div class="col-sm-10">
                    <input type="text"  name="member_name[]" class="form-control" >
                </div>
            </div>
        </div>
        <div id="add-more">
            <button type="button" class="btn btn-primary" onclick="addMoreMember()">Add More Member</button>
            <button type="button" class="btn btn-primary" onclick="saveTeam()">Save Team</button>
        </div>

     </form>
</div>

