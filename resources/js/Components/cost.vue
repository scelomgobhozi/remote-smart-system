<template>
    <h5>Cost Estimation</h5>
    <div class="cost-container">
        <div class="price-div">
            <h5> R2500 </h5>

        </div>
        <div class="prev-cost">
            <p>Last Month costs : R1500</p>
            <p>Change in costs : +500</p>

        </div>
    </div>
</template>

<script>
export default {
    name: "cost"
}
</script>

<style scoped>
h5{
    margin-top: 80px;
    color: #fff;
}
.cost-container {
    color: white;
    background-color: rgba(17, 172, 132, 28%);

    max-width: 400px;
    height: 150px;
    border-radius: 10px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;

}

.price-div {
    width:200px;
    height: 150px;
    background-color: rgba(17, 172, 132, 0.99);
    border-radius: 10px;
}

.price-div h5{
    text-align: center;
    margin-top: 60px;

}

.cost-container p{
    font-size: 11px;
}

.prev-cost{
    padding-left: 20px;
}

</style>
