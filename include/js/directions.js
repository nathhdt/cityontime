function directions(inp, arr) {

    //inp = arrêt sélectionné
    //arr = liste des arrêts/directions (tableau à 2 dimensions)

    alert("I am an alert box!");



    inp.addEventListener("input", function (e) {


        alert("I am an alert box!");

        //Variable contenant les directions correspondantes
        $options_direction = [];

        for (i = 0; i < arr.length; i++) {


            if (arr[0][i].substr(0, val.length).toUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") == val.toUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "")) {

                $options_direction.push(arr[1][i]);


            }




        }

        //On vide la liste
        $('selectDirectionList').empty();

        //On rajoute les nouvelles valeurs
        $each(options_direction, function (value) {
            new Element('option')
                .set('text', value)
                .inject($('selectDirectionList'));
        });

    });
    inp.addEventListener("keydown", function (e) {
        alert("I am an alert box!");
    });
}