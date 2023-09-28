<style>

</style>
<div class="dataCharts">
    <div class="data bg-white p-3">
        <div class="bookings">
            <h4 class="fs-primary">Bookings</h4>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
        </div>
        <div class="revenue">
            <h4 class="fs-primary">Revenue</h4>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
            <div class="time">
                <p class="fs-secondary">This month</p>
                <p class="fw-bold">320</p>
            </div>
            
            
        </div>
    </div>
    <div class="chart">
        <canvas id="chart">

        </canvas>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const chart = document.getElementById('chart').getContext('2d');

    const labels = [
        '2010',
        '2011',
        '2012',
        '2013',
        '2014',
        '2015',
        '2016',
        '2017',
        '2018',
        '2019',
        '2020'
    ];
    const data = {
        labels,
        datasets: [{
            data: [112, 100, 200, 300, 330, 410, 460, 80, 140, 400],
            label: "This week"
        }]
    };
    const config = {
        type: 'line',
        data,
        options: {
            responsive: true,
        }
    };
    const myChart = new Chart(chart, config)
</script>