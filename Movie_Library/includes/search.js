// jquery ajax on key up
$(document).ready(function () {
    $("#search").keyup(function () {
        
        $.ajax({
            type: "post",
            url: "includes/search.php",
            data: {
                name:$("#search").val()
            },
            success: function (data) {
                $("#data-search").html(data)
            }
        })
        
    })
})

/* Escape from the planet Earth
   Carl Brunker
   Cartoon,Comedy
   14 February 2013
   Brendan Fraser, Sarah Jessica Parker, Jessica Alba, James Gandolfini
   Astronaut Scorch Supernova finds himself caught in a trap when he responds to an Sos from a notoriously dangerous alien planet
*/