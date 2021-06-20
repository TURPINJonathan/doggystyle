const dogs = {

    apiBaseURL : "https://api.thedogapi.com/v1/",

    init: function()
    {
      dogs.loadFromAPI();
      console.log("Dogs.js Chargé")
    },

    loadFromAPI: function() {

        const config = {

            method: 'GET',
            mode: 'cors',
            cache: 'default'

        };

        let promise = fetch( dogs.apiBaseURL + 'breeds', config );

        promise.then( dogs.ajaxChuckResponse );


        console.log("Request sent !");

    },

    ajaxChuckResponse: function( response )
    {

      let jsonPromise = response.json();


      jsonPromise.then(
        function( jsonResponse )
        {
          console.log(jsonResponse)
            for(let index = 0; index < 172; index++){
                let newElement = document.getElementById('templateRaces').content.cloneNode(true);
                newElement.querySelector('a').href = "races/" + index;
                newElement.querySelector('img').src = jsonResponse[index].image.url;
                newElement.getElementById('nameRace').textContent = jsonResponse[index].name;
                document.querySelector('.item').appendChild(newElement);
            }


        }
      );
    }
}
document.addEventListener('DOMContentLoaded', dogs.init);
