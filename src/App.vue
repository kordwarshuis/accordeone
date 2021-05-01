<template>
<div id="app">
    <HelloWorld :msg="text" />
</div>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import axios from "axios";
import * as d3 from "d3-dsv";

export default {
    name: "App",
    data: function () {
        return {
            text: []
        }
    },
    components: {
        HelloWorld
    },
    mounted() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            // LIVE
            let one = window.location.protocol + "//" + window.location.host + window.location.pathname + "data/content.php";

            // TESTING
            // let one = "https://blockchainbird.org/a/keri/data/content.php";

            const requestOne = axios.get(one);

            // https://www.storyblok.com/tp/how-to-send-multiple-requests-using-axios
            return axios.all([requestOne]).then(axios.spread((...responses) => {
                const responseOne = responses[0]
                var responseData = d3.csvParse(responseOne.data);

                // cleaning
                for (let i = 0; i < responseData.length; i++) {
                    for (var k in responseData[i]) {
                        // if (responseData[i].hasOwnProperty(k)) {
                        // console.log("Key is " + k + ", value is: " + dataLayer1[i][k]);
                        // the csv source from google introduces \' so we remove the backslash:
                        // responseData[i][k] = responseData[i][k].replace(/\\'/g, "‘");
                        //experimental:
                        // responseData[i][k] = responseData[i][k].replace(/'/g, "‘");
                        // responseData[i][k] = responseData[i][k].replace(/(\n\n)/gm, "</p><p>");
                        responseData[i][k] = responseData[i][k].trim();
                        // console.log('responseData[i][k]: ', responseData[i][k]);
                        // }
                    }
                }

                this.text = responseData
            })).catch(errors => {
                // react on errors.
                console.log('errors: ', errors);
                console.log("something goes wrong fetching the data");
            })
            // }
        },
    }
};
</script>

<style lang="scss">
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}

p {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    font-size: 1.05em;
    color: #111;
}

button p {
    -webkit-user-select: all;
    -moz-user-select: text;
    -ms-user-select: text;
    user-select: text;
}

// button p {
    // font-weight: bold;
// }

a {
    font-weight: bold;
    color: rgb(18, 109, 245) !important;
    text-decoration: underline;
}

strong {
    font-weight: bolder !important;
}
</style>
