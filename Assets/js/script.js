
function addTeamPopUp(){
    
    $.ajax({
        url: 'http://localhost/team-management/App/Views/add_team.php',
        type: 'GET',
        success: function(response) {
            $("#overlay-section").addClass('active');
            $(".overlay").html(response);
        }
    });

}

function addMoreMember(){
    var dom = '<div class="mb-3 row"><div class="col-sm-10"><input type="text"  name="member_name[]" class="form-control" ></div></div>';
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
            console.log(response)
        }
    });
}
function getTeamPopUp(id){
    console.log(id);
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