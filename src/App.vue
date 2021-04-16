<template>
<div id="app">
    <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
    <HelloWorld :msg="text" />
</div>
</template>

<script>
import {
    faq
} from "../config.js"
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
            // var that = this;

            // only fetch data
            // if (this.$store.state.dataFetched === false) {

            console.log('faq.source: ', faq.source);
            let one = faq.source;

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
                        responseData[i][k] = responseData[i][k].replace(/\\'/g, "‘");
                        //experimental:
                        responseData[i][k] = responseData[i][k].replace(/'/g, "‘");
                        // responseData[i][k] = responseData[i][k].replace(/(\n\n)/gm, "</p><p>");
                        responseData[i][k] = responseData[i][k].trim();
                        // console.log('responseData[i][k]: ', responseData[i][k]);
                        // }
                    }
                }

                this.text = responseData
                console.log('this.text: ', this.text);

                // console.log('tst: ', this.text[2]);

                // console.log('this.text: ', this.text.data);
                // use/access the results 

                // 1: the scores data
                // var tweetedCards = [];
                // var tweetedCardsFlat = [];

                // 2: the cards data
                // var responseData = d3.csvParse(responseOne.data);
                // var responseDataTemp = [];

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
    font-weight: bold;
}

a {
    font-weight: bold;
    color: rgb(18, 109, 245) !important;
    text-decoration: underline;
}

</style>
