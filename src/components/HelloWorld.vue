<template>
<div class="hello">
    <!-- <h1>{{ msg }}</h1> -->

    <div v-for="(item, index) in msg" :key="item.Long" class="card">
        <div class="card-header" id="heading12">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" :data-target="'#collapse' + index" aria-expanded="true" :aria-controls="'collapse' + index">
                    {{item["'Short"]}}
                </button>
            </h2>
        </div>
        <div :id="'collapse'+ index" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
            <div class="card-body">
              {{item.Long}}
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    name: "HelloWorld",
    data: function() {
      return {
        counter: 0
      }
    },
    methods: {
      incrementCounter() {
        this.counter++;
        return this.counter;
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
</style>
