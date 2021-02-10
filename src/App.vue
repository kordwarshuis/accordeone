<template>
<div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <HelloWorld :msg="text" />
</div>
</template>

<script>
import {faq} from "../config.js"
import HelloWorld from "./components/HelloWorld.vue";
import axios from "axios";
import * as d3 from "d3-dsv";

export default {
    name: "App",
    data: function() {
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
</style>
