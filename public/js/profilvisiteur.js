$(document).ready(function () {
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
                $('<h3></h3>').prependTo('#test').html(prenom + ' ' + nom+' ').addClass(sexe).toggleClass("toto").attr('id', 'visitortof');
                $('<img>').prependTo('#test').attr('src', this.picture.large).addClass("tof");
                $("<i class='fa fa-user-plus' aria-hidden='true'></i>").appendTo($('#visitortof')).addClass('addFriend');
            });
        },

        error: function () {
            console.log("ça marche pas !")
        }

    });
});
