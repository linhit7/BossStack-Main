<script type="text/javascript">
        $(function () {
            param = {   format: "dd/mm/yyyy",
                        autoclose: true,
                        daysOfWeekHighlighted: "0,6",
                        todayHighlight: true,
                        todayBtn: "linked",
                        language: "vi",
                    };
            $('#fromDate').datepicker(param);
            $('#toDate').datepicker(param);                        
        });
</script>
<script>

  var listmonth = [];  
  var i = 1;
  listmonth[0] = ['x'];
  listmonth[1] = ['Thu'];
  listmonth[2] = ['Chi'];
  <?php $__currentLoopData = $listmonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    listmonth[0][i] = '<?php echo e("$key", false); ?>';
    listmonth[1][i] = <?php echo e($item['income_amount'], false); ?>;
    listmonth[2][i] = <?php echo e($item['expense_amount'], false); ?>;
    i++;
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  var width_chart5 = $('#chart5').width();

  c3.generate({
    bindto: '#chart5',
    data: {
      type: 'line',
      x: 'x',
      y: 'y',
      columns: listmonth,
      names: {
        sample: 'Thu',
        sample1: 'Chi',
      },
    },
    axis: {
      x: {
        type: 'timeseries',
        tick: {
          format: "%d/%m"
        },
        label:{
          text: 'Thời gian',
          position: 'outer-right'
        } 
      },
      y : {
        tick: {
            format: d3.format(",")
        },
        label:{
          text: 'ĐVT: VND',
          position: 'inner-top'
        } 
      }
    },
    size: {
        height: 500,
        width: width_chart5
    },
    padding: {
      left: 80,
      right: 80,
      top: 50,
      bottom: 0
    }       
  });

  // var width_chart5_mb = $('#chart5_mb').width();

  // var listmonth_mb = [];  
  // console.log(listmonth_mb);
  // var i = 1;
  // listmonth_mb[0] = ['x'];
  // listmonth_mb[1] = ['Thu'];
  // listmonth_mb[2] = ['Chi'];
  // <?php $__currentLoopData = $listmonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  //   listmonth_mb[0][i] = '<?php echo e("$key", false); ?>';
  //   listmonth_mb[1][i] = <?php echo e($item['income_amount'], false); ?>;
  //   listmonth_mb[2][i] = <?php echo e($item['expense_amount'], false); ?>;
  //   i++;
  // <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

  // c3.generate({
  //   bindto: '#chart5_mb',
  //   data: {
  //     type: 'line',
  //     x: 'x',
  //     y: 'y',
  //     columns: listmonth_mb,
  //     names: {
  //       sample: 'Thu',
  //       sample1: 'Chi',
  //     },
  //   },
  //   axis: {
  //     x: {
  //       type: 'timeseries',
  //       tick: {
  //         format: "%d/%m"
  //       },
  //       label:{
  //         text: 'Thời gian',
  //         position: 'outer-right'
  //       } 
  //     },
  //     y : {
  //       tick: {
  //           format: d3.format(",")
  //       },
  //       label:{
  //         text: 'ĐVT: VND',
  //         position: 'inner-top'
  //       } 
  //     }
  //   },
  //   size: {
  //       height: 300,
  //       width: width_chart5
  //   },
  //   padding: {
  //     left: 60,
  //     right: 10,
  //     top: 30,
  //     bottom: 0
  //   }       
  // });


  // var width_browser = $(document).width();

  // if (width_browser < 576) {
  //   $('#chart5').hide();
  //   $('#chart5_mb').show();
  // }else{
  //   $('#chart5').show();
  //   $('#chart5_mb').hide();
  // }

</script>
<script>

<?php if(isset($collections) and isset($asset_0) and isset($asset_1)): ?>

  var listasset = [];
  var i = 0;
  var total_asset_0 = 0;        
  var total_asset_1 = 0;
  <?php $__currentLoopData = $asset_0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      listasset[i++] = ['<?php echo e($item['assettypename'], false); ?>', <?php echo e($item['amount'], false); ?>];
      total_asset_0 += <?php echo e($item['amount'], false); ?>;
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  var width_chart2 = $('#rptasset1').width();

  c3.generate({
    bindto: '#rptasset1',
    data: {
      type : 'pie',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset
    },
    axis: {
      x: {
        label: 'Sepal.Width'
      },
      y: {
        label: 'Petal.Width'
      }
    },
    size: {
        height: 220,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });

  var listasset = [];
  var i = 0;        
  <?php $__currentLoopData = $asset_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      listasset[i++] = ['<?php echo e($item['assettypename'], false); ?>', <?php echo e($item['amount'], false); ?>];
      total_asset_1 += <?php echo e($item['amount'], false); ?>;
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  var total_account = 0;
  <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashasset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      total_account += <?php echo e($cashasset->amount, false); ?>;
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  listasset[i++] = ['Ví mục tiêu', total_account];
  total_asset_1 += total_account;

  var width_chart2 = $('#rptasset2').width();

  c3.generate({
    bindto: '#rptasset2',
    data: {
      type : 'pie',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset
    },
    axis: {
      x: {
        label: 'Sepal.Width'
      },
      y: {
        label: 'Petal.Width'
      }
    },
    size: {
        height: 220,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });

  var listasset = [
    ["Nợ", total_asset_0],
    ["Tài sản", total_asset_1],
  ];

  var width_chart2 = $('#rptasset3').width();

  c3.generate({
    bindto: '#rptasset3',
    data: {
      type: 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset
    },
    donut: {
        title: "Tổng tài sản thực",
        label: {
          show: false 
        },
        width: 25
    },
    size: {
        height: 220,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset3 .c3-chart-arcs-title").append("tspan").attr("dy", 25).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal(total_asset_0-total_asset_1, 0));

<?php endif; ?>

</script>