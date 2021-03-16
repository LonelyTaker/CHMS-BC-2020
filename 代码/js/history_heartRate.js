var hhdate=new Array();
var hheartRate=new Array();
$.ajax({
    url: 'php/history.php',
    type: 'POST',
    contentType: false,
    processData: false,
    success: function(json){
        var data=JSON.parse(json);
        $.each(data,function(){
            if(typeof(this.date)!="undefined"){
                hhdate.push(this.date);
                hheartRate.push(this.heartRate);
            }
        });
        var dom = document.getElementById("history_heartRate");
        var myChart = echarts.init(dom);
        option = {
            title: {
                text: '历史心率'
            },
            tooltip: {
                trigger: 'axis',
            },
            legend: {
                data: ['心率']
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                data: hhdate
            },
            yAxis: {
                type: 'value',
                min: 40,
                max: 140,
                interval: 10,
            },
            series: [{
                name: '心率',
                type: 'line',
                data: hheartRate,
                markPoint: {
                    data: [{type: 'max', name: '最大值'},{type: 'min', name: '最小值'}]
                },
                markLine: {
                    data: [{type: 'average', name: '平均值'}]
                }
            }]
        };
        if (option && typeof option == "object") {
            myChart.setOption(option, true);
        }
    },
    error: function(){
      alert("error");
    }
});