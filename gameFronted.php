//the following javascript postData function should be added in the frontend (client side) code. 
//In testing using pong, I added after the variables and init() function definition


// async function to coordinate with backend without having to 
// initiate via a key or mouse stroke
    async function postData(data = {}, url = "/Project/api/game_backend.php") {
        console.log(Object.keys(data).map(function(key) {
          return "" + key + "=" + data[key]; // line break for wrapping only
        }).join("&"));

        // Default options are marked with *
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: Object.keys(data).map(function(key) {
                return "" + key + "=" + data[key]; // line break for wrapping only
            }).join("&") //JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response.json(); // parses JSON response into native JavaScript objects
     } 





     // in the code for checking the score the following call to postData() is added 
     // this should be done before resetting the game that resets scores
                    postData({
                        score: userXscore
                    }, "/Project/api/save_score.php").then(data => {
                        console.log(data);
                        //quick, brief example (you wouldn't want to use alert)
                        if (data.status === 200) {
                            //saved successfully
                            alert(data.message);
                        } else {
                            //some error occurred, maybe want to handle it before resetting
                            alert(data.message);
                        }
                    })
