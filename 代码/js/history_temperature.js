var htdate=new Array();
var htemperature=new Array();
$.ajax({
    url: 'php/history.php',
    type: 'POST',
    contentType: false,
    processData: false,
    success: function(json){
        var data=JSON.parse(json);
        $.each(data,function(){
            if(typeof(this.date)!="undefined"){
                htdate.push(this.date);
                htemperature.push(this.temperature);
            }
        });
        var dom = document.getElementById("history_temperature");
        var myChart = echarts.init(dom);
        option = {
            title: {
                text: '历史体温'
            },
            tooltip: {
                trigger: 'axis',
            },
            legend: {
                data: ['历史体温']
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                data: htdate
            },
            yAxis: {
                type: 'value',
                min: 33,
                max: 44,
                interval: 1,
            },
            series: [{
                name: '历史体温',
                type: 'line',
                data: htemperature,
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



