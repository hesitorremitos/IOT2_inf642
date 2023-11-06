////////////////7777 graficsa en tiempo real 
        // ********* TEMPERATURA ******//
        Highcharts.stockChart('tempe_treal', {
            chart: {
                events: {
                    load: function() {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function() {
                            var x = (new Date()).getTime(), // current time
                            
                                y = temperaturas;
                            series.addPoint([x, y]);
                        }, 1000);
                    }
                }
            },

            rangeSelector: {
                buttons: [{
                    count: 1,
                    type: 'minute',
                    text: '1M'
                }, {
                    count: 5,
                    type: 'minute',
                    text: '5M'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: false,
                selected: 0
            },

            title: {
                text: 'Temperatura ºCc'
            },

            exporting: {
                enabled: true
            },

            series: [{
                name: 'ºC',
                data: (function() {
                    // generate an array of random data
                    var data = [],time = (new Date()).getTime(),i;
                    for (i = -300; i <= 0; i += 1) {
                        data.push([
                            time + i * 1000, -1
                        ]);
                    }
                    return data;
                }())
            }]
        });

//////////////////////////////777777 fin en tiempo real