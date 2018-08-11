$(document).ready(function() {
    $("#ajaxButton").click(function() {
        $.ajax({
              type: "Post",
              url: "loaddata.php",
              success: function(data) {
                    var obj = $.parseJSON(data);      
                    var result = "<ul>"
                    $.each(obj, function() {
                        result = result + "<li>First Name : " + this['firstname'] + " , Last Name : " + this['lastname'] + "</li>";
                    });
                    result = result + "</ul>"
                    $("#result").html(result);
              }
        }); 
    });
});