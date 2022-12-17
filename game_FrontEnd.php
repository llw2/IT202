// THIS IS AN INCOMPLETE SNIPPET OF CODE. DO NOT CREATE THIS FILE!!!!!!


//the following javascript postData function should be added in the frontend (client side) code. 
//In my testing, I used Matt's pong, I added the following function after the variables and init() function definition

//PLEASE MAKE SURE YOU UNDERSTAND THE CODE BEFORE USING IT


// async function postData()  
//     coordinate with backend without having to initiate via a key or mouse stroke. Note, 
//     the relative path that is hardcoded into the url variable. Make sure it matches your path

    async function postData(data = {}, url = "/Project/api/game_backend.php") {
        console.log(Object.keys(data).map(function(key) {
          return "" + key + "=" + data[key]; // line break for wrapping only
        }).join("&"));

        // Default options are marked with * and are included to modify any future
        // modifications that may be made to the fetch() function.
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, 
                                           // same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: Object.keys(data).map(function(key) {
                return "" + key + "=" + data[key]; // line break for wrapping only
            }).join("&") //JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response.json(); // parses JSON response into native JavaScript objects
     } 



// ************************************************************************************************************************
// ***  the above code MUST BE added before the following code which MUST be added into the function that calculates and 
// ***  displays the score on the Canvas object. This should only called at the end of the game
// ************************************************************************************************************************



     // in the code for checking the score the following call to postData() is added 
     // this should be done before resetting the game that resets scores
     // the variable userXscore is a placeholder variable name and should match the
     // variable name you are using...
     
                    postData({
                        score: userXscore                               // read note just before this snippet
                    }, "/Project/api/save_score.php").then(data => {    // note the relative path you should have (or change)
                        console.log(data);
                        //quick, brief example (you wouldn't want to use alert)
                        if (data.status === 200) {
                            //saved successfully
                            alert(data.message);                        // probably you don't want to use alerts()
                        } else {
                            //some error occurred, maybe want to handle it before resetting
                            alert(data.message);
                        }
                    })
