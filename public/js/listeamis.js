function listeAmis() {
    $.ajax({
        url: 'https://randomuser.me/api/?nat=fr',
        type: 'GET',
        timeout: 4000,

        success: function (data) { // success est toujours en place, bien sûr !
            $(data.results).each(function () {
                var prenom = this.name.first;
                var nom = this.name.last.toUpperCase();
                var sexe = this.gender;
                var charTable = prenom.split('');
                charTable[0] = charTable[0].toUpperCase();
                prenom = charTable.join('');
                $('<span></span>').appendTo('#listeamis').html(prenom + ' ' + nom).addClass(sexe).toggleClass("toto col-xs-6");
                $('<img>').appendTo('#listeamis').attr('src', this.picture.large).addClass("tof col-xs-6");
                $('<br>').appendTo('#listeamis');
            });
        },

        error: function () {
            console.log("ça marche pas !")
        }

    });
}

for (i = 0; i < 6; i++) {
    listeAmis();
}