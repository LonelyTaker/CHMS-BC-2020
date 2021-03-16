var pageIndex = 1;    //页面索引初始值   
var pageSize = 5;     //每页显示条数初始化，修改显示条数，修改这里即可   
var pageCount = 30;   //总的记录数，随便赋个初值好了，后面会重新赋值的 
$(document).ready(function () {
	// 得到要显示的总的记录数
	$.ajax({
		url: '',
		async: false,  // 取消异步，因为只有先得到总记录数，才能计算实际需要多少页
		type: 'POST',
		dataType: 'json',
		data: {index: '0', size: pageSize}, // 提交数据
		success: function(data){
			 pageCount = data.total;
		},
		error: function() {
			alert("error");
		}
	});
	
    InitPager();
});

function InitPager() {
    //分页，PageCount是总条目数，这是必选参数，其它参数都是可选
    $("#pager").pagination(pageCount, {
        callback: pageCallback,  //PageCallback() 为翻页调用次函数。
        prev_text: "上一页",
        next_text: "下一页",
        items_per_page: pageSize,
        num_edge_entries: 2,       //两侧首尾分页条目数
        num_display_entries: 3,    //连续分页主体部分分页条目数
        current_page: pageIndex - 1,   //当前页索引
    });
}
//翻页调用   
function pageCallback(index, jq) {
    
}

