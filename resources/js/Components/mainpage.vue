<template>
    <div class="main-main">
        <navigation></navigation>

        <accounttype></accounttype>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <cost></cost>
            </div>

            <div class="col-lg-6 col-md-6">
                <chart></chart>
            </div>

            <div class="col-lg-6 col-md-6">
              <dailyusage></dailyusage>

            </div>

            <div class="col-lg-6 col-md-6">
               <mainswitch></mainswitch>
            </div>
        </div>

    </div>

</template>

<script>
import navigation from "./navigation.vue";
import accounttype from "./accounttype.vue";
import cost from "./cost.vue";
import chart from "./chart.vue"
import mainswitch from "./mainswitch.vue";
import dailyusage from "./dailyusage.vue";


export default {
    components: {
        dailyusage,
        navigation ,
        accounttype,
        cost,
        chart,
        mainswitch,
        dailyusage,

    },

    name: "mainpage",


}
</script>

<style scoped>
.main-main {
    background-color:#282639;
    max-width:1360px;
    margin:auto;
}
</style>
