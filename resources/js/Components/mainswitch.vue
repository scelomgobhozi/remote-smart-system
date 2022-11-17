<template>
    <div class="includes-h5">
        <h5> Main Switch </h5>
        <div class="main-switch-container">


            <div class="ind-switch" >
                <label> Main switch</label>
                <Toggle v-model="mainSwitch" @change='this.switch' />
            </div>


            <div class="ind-switch">
                <label> Geyser</label>
                <Toggle v-model="mainSwitch" />
            </div>


            <div class="ind-switch">
                <label> Plugs </label>
                <Toggle v-model="mainSwitch" />
            </div>

            <div class="ind-switch">
                <label> Stove</label>
                <Toggle v-model="mainSwitch" />
            </div>

        </div>
    </div>
</template>

<script>
import Toggle from '@vueform/toggle';
import axios from "axios";

export default {
    name: "mainswitch",
    components: {
        Toggle,

    },
    data() {
        return {
            mainSwitch:true,
            geyser:true,
            plugs:true,
            stove:true

        }
    },
    methods:{
        switch(){

            if(this.mainSwitch){
                axios.get('http://localhost/esp-outputs-action.php?action=output_update&id=3&state=1')
            }else {
                axios.get('http://localhost/esp-outputs-action.php?action=output_update&id=3&state=0')
            }

        }

    },
    mounted() {
        this.switch();



    }
}
</script>

<style scoped>

.includes-h5{
    max-width:400px;
    margin: auto;

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
