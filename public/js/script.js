$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    (function getData() {
        $.ajax({
            type:'POST',
            dataType: 'JSON',
            url: '/orders',
            data: ''
        }).done((res)=>{
            const dataSource = {
                chart: {
                    caption: "Closed orders",
                    numberprefix: "$",
                    pyaxisname: "Price (USD)",
                    theme: "fusion",
                    showvolumechart: "1",
                    vnumberprefix: "$",
                    vyaxisname: "Volume traded"
                },
                dataset: [
                    {
                        data: res.data
                    }
                ],
                trendlines: [
                    {
                        line: [
                            {
                                startvalue: "3000",
                                thickness: "1",
                                color: "#5D62B5",
                                displayvalue: "Quarterly<br>Average"
                            }
                        ]
                    }
                ]
            };

            FusionCharts.ready(function() {
                var myChart = new FusionCharts({
                    type: "candlestick",
                    renderAt: "chart-container",
                    width: "100%",
                    height: "100%",
                    dataFormat: "json",
                    dataSource
                }).render();
            });
        });
    })();

});
