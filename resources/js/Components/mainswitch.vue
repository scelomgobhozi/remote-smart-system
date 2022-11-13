<template>
    <div class="includes-h5">
        <h5> Main Switch </h5>
        <div class="main-switch-container">


            <div class="ind-switch">
                <label> Main switch</label>
                <Toggle v-model="mainSwitch" />
            </div>

            <div class="ind-switch">
                <label> Geyser</label>
                <Toggle v-model="geyser" />
            </div>


            <div class="ind-switch">
                <label> Plugs </label>
                <Toggle v-model="plugs" />
            </div>

            <div class="ind-switch">
                <label> Stove</label>
                <Toggle v-model="stove" />
            </div>

        </div>
    </div>
</template>

<script>
import Toggle from '@vueform/toggle'

export default {
    name: "mainswitch",
    components: {
        Toggle,

    },
    data() {
        return {
            mainSwitch: true,
            geyser:true,
            plugs:true,
            stove:true

        }
    }
}
</script>

<style scoped>

.includes-h5{
    max-width:400px;
    margin-left: auto;

}
h5{
    margin-top: 80px;
    color: #fff;
    max-width:400px;
}
.ind-switch{
    width: 200px;
    display: flex;
    justify-content: space-between;
    margin: 10px;
}

.main-switch-container{


    background-color:white;

    border-radius: 10px;
    padding: 30px;
}
</style>

<style src="@vueform/toggle/themes/default.css"></style>
