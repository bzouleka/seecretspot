$.ajax({
    url: 'https://restcountries.eu/rest/v2/',
    type: 'GET',
    timeout: 4000,

    success: function (data) { // success est toujours en place, bien sûr !
        $(data).each(function () {
            var pays = this.name;
            $('<option></option>').appendTo('#listpays').html(pays).attr('value', this.alpha2Code).addClass(this.alpha2Code);
        });
        $('.FR').attr('selected', 'selected');

    },

    error: function () {
        console.log("ça marche pas !")
    }

});