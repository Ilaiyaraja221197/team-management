function addTeamPopUp(){
    $.ajax({
        url: 'http://localhost/team-management/App/Views/add_team.php',
        type: 'GET',
        success: function(response) {
            $("#overlay-section").addClass('active');
            $(".overlay").html(response);
            $(".overlay #name").focus();
        }
    });
}

function addMoreMember(){
    var dom = '<div class="mb-3 row"><div class="col-sm-8"><input type="text" name="member_name[]" placeholder="Member Name" class="form-control" ></div>' +
        '<div class="col-sm-2"><button type="button" class="remove-btn btn btn-danger" onclick="$(this).closest(\'.mb-3.row\').remove()">Remove</button></div></div>';

    $(".overlay #add-team-form-section #member-name").append(dom);
}

function closePopUp(){
    $("#overlay-section").removeClass('active');
}

function saveTeam(){
    var form = $("#add-team-form").serialize();
    $.ajax({
        url: 'http://localhost/team-management/App/Route.php',
        type: 'POST',
        data: form,
        success: function(response) {
            $(".overlay #add-team-form-section #message").html(response);
            setTimeout(function () {
                location.reload();
            },1000)
        }
    });
}
function getTeamPopUp(id){
    $.ajax({
        url: 'http://localhost/team-management/App/Route.php',
        type: 'POST',
        data: {
            id:id,
            action:'get'
        },
        success: function(response) {
            $("#overlay-section").addClass('active');
            $(".overlay").html(response);
        }
    });
}
function deleteTeam(id){

    $.ajax({
        url: 'http://localhost/team-management/App/Route.php',
        type: 'POST',
        data: {
            id:id,
            action:'remove'
        },
        success: function(response) {
            alert('Team deleted successfully');
            setTimeout(function () {
                location.reload();
            },1000)

        }
    });
}