const dogs = {

    loadFromAPI: function() {

        const config = {

            method: 'GET',
            mode: 'cors',
            cache: 'no-cache'

        };

        fetch('/* XXXXXXX ADRESSE DE API XXXXXXX */', config)
        .then(

            function(response) {

                return response.json();

            }
        ) .then(

            function(dogsDataFromAPI) {

                //! VOIR CE DONT ON VEUT EN FAIRE
            }
        )
    }
}