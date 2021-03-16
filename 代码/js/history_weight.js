var hwdate=new Array();
var hweight=new Array();
var hwaist=new Array();
$.ajax({
    url: 'php/history.php',
    type: 'POST',
    contentType: false,
    processData: false,
    success: function(json){
        var data=JSON.parse(json);
        $.each(data,function(){
            if(typeof(this.date)!="undefined"){
                hwdate.push(this.date);
                hweight.push(this.weight);
                hwaist.push(this.waist);
            }
        });
        var dom = document.getElementById("history_weight");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            title: {
               text: '历史体重、腰围'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    crossStyle: {
                        color: '#999'
                    }
                }
            },
            toolbox: {
                feature: {
                    dataView: {show: true, readOnly: false},
                    magicType: {show: true, type: ['line', 'bar']},
                    restore: {show: true},
                    saveAsImage: {show: true}
                }
            },
            legend: {
                data: ['体重', '腰围']
            },
            xAxis: [
                {
                    type: 'category',
                    data: hwdate,
                    axisPointer: {
                        type: 'shadow'
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '体重',
                    min: 30,
                    max: 100, 
                    interval: 10,
                    axisLabel: {
                        formatter: '{value} kg'
                    }
                },
                {
                    type: 'value',
                    name: '腰围',
                    min: 40,
                    max: 100,
                    interval: 10,
                    axisLabel: {
                        formatter: '{value} cm'
                    }
                }
            ],
            series: [
                {
                    name: '体重',
                    type: 'bar',
                    data: hweight
                },
                {
                    name: '腰围',
                    type: 'line',
                    yAxisIndex: 1,
                    data: hwaist
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