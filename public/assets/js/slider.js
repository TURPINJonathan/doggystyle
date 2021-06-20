const slider = {

    apiBaseURL : "https://api.thedogapi.com/v1/",

    init: function()
    {
        slider.loadFromAPI();
      console.log("slider.js Chargé")
    },

    loadFromAPI: function() {

        const config = {

            method: 'GET',
            mode: 'cors',
            cache: 'default'

        };

        let promise = fetch( slider.apiBaseURL + 'images/search', config );

        promise.then( slider.ajaxChuckResponse );


        console.log("Request sent !");

    },

    ajaxChuckResponse: function( response )
    {

      let jsonPromise = response.json();


      jsonPromise.then(
        function( jsonResponse )
        {
            console.log(jsonResponse)

        }
      );
    }
}
document.addEventListener('DOMContentLoaded', slider.init);
