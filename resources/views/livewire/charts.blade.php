<div style="width:100%;">
    <div>
        <h1>Simple Chart Integration</h1>
        <canvas id="assembyChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="/js/charts.js" type="javascript"></script>

    <script>
        const ctx = document.getElementById('assembyChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Lowes', 'HomeDepot', 'Target', 'Ace', 'John Deere', 'Walmart'],
                datasets: [{
                    label: '# assembled this week',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</div>
