$(document).ready(function() {
    $("h2").click(function() {
        $("h2").hide(1000);
    });

    $("h1").click(function() {
        $("h2").show(1000);
    });
});

$(document).ready(function(){});


$("#myInput").on("keyup", function() {var value = $(this).val().toLowerCase();});

$("#myTable tr").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)});