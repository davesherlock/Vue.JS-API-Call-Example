/**
 * Get your Key here https://rapidapi.com/KegenGuyll/api/dad-jokes/endpoints
 * @type {string}
 */
const API_KEY = '';


const app = new Vue({
    el: '#main',
    data: {
        setup: "",
        punchline: "",
        error: false,
        errormessage: "",
        responseAvailable: false,
        apiKey: API_KEY,
    },
    methods: {
        fetchAPIData() {

            this.responseAvailable = false;

            fetch("https://dad-jokes.p.rapidapi.com/random/jokes", {
                "method": "GET",
                "headers": {
                    "x-rapidapi-host": "dad-jokes.p.rapidapi.com",
                    "x-rapidapi-key": this.apiKey
                }
            })
                .then(response => {
                    if (response.ok) {
                        return response.json()
                    } else {
                        this.error = true;
                        this.errormessage = "Server returned " + response.status + " : " + response.statusText;
                    }
                })
                .then(response => {
                    if (!this.error) {
                        this.setup = response.setup;
                        this.punchline = response.punchline;
                        this.responseAvailable = true;
                    }
                })
                .catch(err => {
                    this.error = true;
                    this.errormessage = "Server returned " + err;
                });
        }
    }
})

