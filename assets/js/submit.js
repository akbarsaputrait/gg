function SubmitCommend() {
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var schools = $("#schools").val();
    var grades = $("#grades").val();
    var majors = $("#majors").val();
    var commend = $("#commend").val();
    $.post("submit.php", { firstname: firstname, lastname: lastname, schools: schools, grades: grades, majors: majors, commend: commend },
    function(data) {
	 $('#see-commend').html(data);
	 $('#form-commend')[0].reset();
    });
}