const ctx = document.getElementById('linechart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['jan', 'feb', 'Mar', 'April', 'May', 'jun','jul','aug','sep','oct','nov','dec'],
        datasets: [{
            label: '# of Votes',
            data: [2050,2055,2035,2556,2121,5656,5465,6565,5415,5454,9895,2133],
            backgroundColor: [
                'rgba(85, 85, 85, 1)',
                
            ],
            borderColor: [
                'rgba(41, 155, 99)',
               
            ],
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