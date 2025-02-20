document.getElementById("manageAlumniDropdown").addEventListener("click", function(event) {
    event.preventDefault();
    this.parentElement.classList.toggle("show");
});

    function createDonutChart(chartId, employed, unemployed, title, colors) {
    const ctx = document.getElementById(chartId).getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Employed', 'Unemployed'  ],
            datasets: [{
                data: [employed, unemployed],
                backgroundColor: colors,
            }]
        },
        options: {
            responsive: true,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: title
                }
            }
        }
    });
}

// Call the function with unique color schemes for each chart
createDonutChart('employmentChartBSIT', 70, 30, 'BSIT Employment Statistics', ['#4CAF50', '#FFB74D']);
createDonutChart('employmentChartBSCS', 65, 35, 'BSCS Employment Statistics', ['#42A5F5', '#EF5350']);
createDonutChart('employmentChartBSBA', 60, 40, 'BSBA Employment Statistics', ['#66BB6A', '#FFA726']);  