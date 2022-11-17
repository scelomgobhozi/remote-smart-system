<template>
    <div class="chart-container ">
        <h5> Consumption of Electricity For  Average South African </h5>
        <div class="chart-select">
        <canvas id="myChart" width="400" height="400"></canvas>
        </div>

    </div>



</template>

<script>
import Chart from 'chart.js/auto';
import axios from "axios";

export default {
    // eslint-disable-next-line vue/multi-word-component-names
    name: "chart",


    mounted()
    {
        console.log('component mounted')
        const ctx = document.getElementById('myChart');
        const labels = ['2000','2001','2002','2003','2004','2005','2006']
        const data = {
            labels: labels,
            datasets: [{
                label: 'Avarage South Africa Electricity Consumption',
                data: [65, 85, 80, 100, 83, 75, 70],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.2
            }]
        };
        const myChart = new Chart(ctx,{
            type:'line',
            data: data,
        });
        myChart;
    },
    methods:{
        currentPower(){
            axios.get('http://localhost/api.php')
                .then((response)

            );
        }
    }
}

</script>

<style scoped>
h5{
    margin-top: 80px;
    color: #fff;
}
.chart-container{
    margin-top: 50px;
    max-width: 400px;
    margin: auto;

   
    
   

}
.chart-select{
    margin: auto;
    background-color: white; 
    padding: 0 20px 20px 20px;
    border-radius: 10px;
}
</style>
