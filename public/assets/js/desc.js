const desc = {

    apiBaseURL : "https://api.thedogapi.com/v1/",

    init: function()
    {

      console.log("desc.js Chargé")


      desc.loadFromAPI();

    },

    loadFromAPI: function() {

        const config = {

            method: 'GET',
            mode: 'cors',
            cache: 'cache'

        };

        let promise = fetch( desc.apiBaseURL + 'breeds', config );

        promise.then( desc.ajaxChuckResponse );


        console.log("Request sent !");

    },

    ajaxChuckResponse: function( response )
    {

      let jsonPromise = response.json();


      jsonPromise.then(
        function( jsonResponse )
        {

            let pathname = window.location.pathname;
            let split = pathname.split('/');
            let reversesplit = split.reverse();
            let id = parseInt(reversesplit[0]);
            console.log(jsonResponse[id])
            document.querySelector('img').src = jsonResponse[id].image.url;
            document.getElementById('name').textContent = " " + jsonResponse[id].name;
            document.getElementById('height').textContent = " " + jsonResponse[id].height.metric + " cm";
            document.getElementById('weight').textContent = " " + jsonResponse[id].weight.metric + " kg";
            document.getElementById('temperament').textContent = " " + jsonResponse[id].temperament;
            document.getElementById('lifespan').textContent = " " + jsonResponse[id].life_span;

        }
      );
    }


}
document.addEventListener('DOMContentLoaded', desc.init);
