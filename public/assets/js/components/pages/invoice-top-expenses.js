$(window).on("load",function(){require.config({paths:{echarts:"robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/pie","echarts/chart/funnel"],function(a){var b=a.init(document.getElementById("your-top-expenses"));chartOptions={legend:{orient:"vertical",x:"left",data:["Internet","Infrastructure","Party","Assets","Electricity"]},color:["#FECEA8","#FF847C","#E84A5F","#2A363B","#99B898"],toolbox:{show:!0,orient:"vertical"},calculable:!0,series:[{name:"Browsers",type:"pie",radius:["50%","70%"],center:["50%","57.5%"],itemStyle:{normal:{label:{show:!0},labelLine:{show:!0}},emphasis:{label:{show:!0,formatter:"{b}\n\n{c} ({d}%)",position:"center",textStyle:{fontSize:"17",fontWeight:"500"}}}},data:[{value:335,name:"Internet"},{value:1548,name:"Infrastructure"},{value:135,name:"Party"},{value:234,name:"Assets"},{value:650,name:"Electricity"}]}]},b.setOption(chartOptions),$(function(){function a(){setTimeout(function(){b.resize()},200)}$(window).on("resize",a),$(".menu-toggle").on("click",a)})})});