<template>
    <div class="chart-container ">
        <h5>30 Days average</h5>
        <div class="chart-select">
        <canvas id="myChart" width="400" height="400"></canvas>
        </div>

    </div>



</template>

<script>
import Chart from 'chart.js/auto';

export default {
    // eslint-disable-next-line vue/multi-word-component-names
    name: "chart",


    mounted()
    {
        console.log('component mounted')
        const ctx = document.getElementById('myChart');
        const labels = ['Jan','Feb','Apri','May','Jun','Jul','Aug']
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
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
    margin-left: auto;

}
.chart-select{
    margin: auto;
}
</style>
