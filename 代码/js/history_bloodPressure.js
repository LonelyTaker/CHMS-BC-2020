var hbdate=new Array();
var hspressure=new Array();
var hdpressure=new Array();
$.ajax({
    url: 'php/history.php',
    type: 'POST',
    contentType: false,
    processData: false,
    success: function(json){
        var data=JSON.parse(json);
        $.each(data,function(){
            if(typeof(this.date)!="undefined"){
                hbdate.push(this.date);
                hspressure.push(this.spressure);
                hdpressure.push(this.dpressure);
            }
        });
        var dom = document.getElementById("history_bloodPressure");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            title: {
                text: '历史血压',
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['收缩压', '舒张压']
            },
            toolbox: {
                show: true,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    dataView: {readOnly: false},
                    magicType: {type: ['line', 'bar']},
                    restore: {},
                    saveAsImage: {}
                }
            },
            xAxis: {
                // type: 'category',
                // boundaryGap: false,
                data: hbdate
            },
            yAxis: {
                type: 'value',
                min: 40,
                max: 180,
                interval: 20,
                axisLabel: {
                    formatter: '{value} mmhg'
                }
            },
            series: [{
                name: '收缩压',
                type: 'line',
                data: hspressure,
                markPoint: {
                    data: [{type: 'max', name: '最大值'},{type: 'min', name: '最小值'}]
                },
                markLine: {
                    data: [{type: 'average', name: '平均值'}]
                }
            },
            {
                name: '舒张压',
                type: 'line',
                data: hdpressure,
                markLine: {
                    data: 
                    [{type: 'average', name: '平均值'}]
                }
            }
            ]
        };
        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }
    },
    error: function(){
      alert("error");
    }
});