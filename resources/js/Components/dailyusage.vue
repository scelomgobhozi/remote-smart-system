<template>
    <h5> 30 Days avarage consumption</h5>
    <div class="daily-cost-container">
        <div class="price-div">

            <h6> Daily usage</h6>
            <p>95 kw</p>

        </div>
        <div class="prev-cost">
            <h6>Avarage daily usage </h6>
            <p>76 kw</p>

        </div>
    </div>
</template>

<script>
export default {
    name: "dailyusage"
}
</script>

<style scoped>
h5{
    margin-top: 80px;
    color: #fff;
}
.daily-cost-container{
    width:400px;
    height: 150px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    color:white;
    background-color: rgba(17, 172, 132, 0.50);
    padding:20px;
    border-radius:10px;
}

.daily-cost-container p{
    font-weight: lighter;
    text-align: center
}
</style>
