var indicator_count = 1;
var activity_count = 1;
var objective_count = 1;
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});


$("#add_indicator_btn").click(function(){
    indicator_count = indicator_count + 1;
    let html = "<div class=\"col-md-6\"><div class=\"form-group\"><textarea name=\"indicator[]\" class=\"form-control\" placeholder=\"What would be an indicator  of success for objective #"+indicator_count+" \"></textarea>       </div></div>";
    $("#added_area").append(html);
});


$("#add_objective_btn").click(function(){
    objective_count = objective_count + 1;
    let html = "<div class=\"col-md-12\"><div class=\"form-group\"><input type=\"text\" name=\"objective[]\" class=\"form-control\"  placeholder=\"Objective #"+objective_count+"\"></div></div>";
    $("#added_area").append(html);
});

$("#add_activity_btn").click(function(){
    activity_count = activity_count + 1;
    let html = "<div class=\"col-md-6\"><div class=\"form-group\"><textarea name=\"activity[]\" class=\"form-control\" placeholder=\"1st Activity to accomplish objective #"+activity_count+" \"></textarea>       </div></div>";
    $("#added_area").append(html);
});