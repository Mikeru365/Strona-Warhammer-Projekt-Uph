$(document).ready(function() {
    $(".fav").on("click", function() {
    const akapit = $(this);
    $.post("changeFav.php", { idDzbana: "'" + akapit.data("artykul") + "'"}, function(data) {
    if (data == "sukces") {
    akapit.text((akapit.text() == "Dodaj do ulubionych") ? "Usuń z ulubionych" : "Dodaj do ulubionych");;
    }
    });
    });
   });