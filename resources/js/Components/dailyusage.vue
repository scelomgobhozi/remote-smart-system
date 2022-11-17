<template>
    <div class="includes-h5">
        <h5>avarage current consumption</h5>
        <div class="daily-cost-container">
            <div class="price-div">
                <h6>Daily usage</h6>
                <p>12W</p>
            </div>
            <div class="prev-cost">
                <h6>Avarage usage</h6>
                <p>13.2W</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "dailyusage",
};
</script>

<style scoped>
.includes-h5 {
    max-width: 400px;
    margin: auto;
}
h5 {
    margin-top: 80px;
    color: #fff;
}
.daily-cost-container {
    height: 150px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    color: white;
    background-color: rgba(17, 172, 132, 0.5);
    padding: 20px;
    border-radius: 10px;
}

.daily-cost-container p {
    font-weight: lighter;
    text-align: center;
}

/* 
@media (max-width: 800px) {
    .daily-cost-container{
       display: block;
    }
} */
</style>
