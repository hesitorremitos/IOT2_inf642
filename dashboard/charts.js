function graficar_chart(data = [
    [1633959000000, 142.81],
    [1634045400000, 141.51],
    [1634131800000, 140.91],
    [1634218200000, 143.76],]) {
    const chart = Highcharts.chart('container1', {
        chart: {
            type: 'line'
        },
        colors: ['#337ab7', '#ff0000'],
        title: {
            text: 'Fruitxx Consumption'
        },
        xAxis: {
            //categories: ['Apples', 'Bananas', 'Oranges']
            type: 'datetime',
            tickInterval: 60*1000,
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
            name: 'H O R A',
            data: data
        },
        ],
    });
};