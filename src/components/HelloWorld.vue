<template>
<div class="hello">
    <!-- <h1>{{ msg }}</h1> -->

    <div class="accordion" id="accordionExample">
        <div v-for="(item, index) in msg" :key="item.Long" class="card">
            <div class="" :id="'heading' + index">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" style="text-transform: none;" type="button" data-toggle="collapse" :data-target="'#collapse' + index" aria-expanded="false" :aria-controls="'collapse' + index">
                        <vue-markdown>
                            {{item["'Short"]}}
                        </vue-markdown>
                        <span class="read-more" style="position: absolute; right: 0; bottom: 0; line-height: 1; font-size: 2em;">+</span>
                    </button>
                </h2>
            </div>
            <div :id="'collapse'+ index" class="collapse p-5 text-left" aria-labelledby="'heading' + index" data-parent="#accordionExample">
                <div class="">
                    <vue-markdown>
                        {{item.Long}}
                    </vue-markdown>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import VueMarkdown from 'vue-markdown';
export default {
    name: "HelloWorld",
    components: {
        VueMarkdown
    },
    data: function () {
        return {
            counter: 0
        }
    },
    mounted() {
        this.openFirstAccordeonItem();
    },
    methods: {
        incrementCounter() {
            this.counter++;
            return this.counter;
        },
        openFirstAccordeonItem() {
            setTimeout(() => {
                document.querySelector('#collapse0').classList.add('show');
            }, 1000);
        }
    },
    props: {
        msg: Array
    }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style lang="scss" scoped>


h3 {
    margin: 40px 0 0;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    display: inline-block;
    margin: 0 10px;
}

a {
    color: #42b983;
}

button[aria-expanded="true"] span {
    display: none;
}
</style>
