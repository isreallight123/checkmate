const ctx = document.querySelector('canvas#myChart').getContext('2d');

const chart = new chart(ctx, {
    // the type of chart we want to create
    type: 'line',

    // the data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My first dataset',
            backgroundColor: 'rgba(255, 99, 132)',
            borderColor: 'rgba(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // configuration options go here
    options: {}
});