<script>
//  var data_chart1 = [
//    ['x', '2014-01-01', '2014-01-02', '2014-01-03', '2014-01-04', '2014-01-05', '2014-01-6', '2014-01-7', '2014-01-8', '2014-01-9', '2014-01-10'],
//    ['sample', 6, 14, 12, 25, 37, 40, 5, 28, 9, 30],
//  ];

  var listcustomer = [];  
  var i = 1;
  listcustomer[0] = ['x'];
  listcustomer[1] = ['Khách hàng'];
  <?php $__currentLoopData = $listCustomerByMonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    listcustomer[0][i] = '<?php echo e("$key", false); ?>';
    listcustomer[1][i] = <?php echo e($item, false); ?>;
    i++
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  var width_chart1 = $('#rptcustomer').width();


  c3.generate({
    bindto: '#rptcustomer',
    data: {
      type: 'bar',
      x: 'x',
      y: 'y',
      columns: listcustomer
    },
    axis: {
      x: {
        type: 'timeseries',
        tick: {
          format: "<?php echo e($formatchart_x, false); ?>"
        }
      },
      y: {
        max: 50,
        min: 5,
      }
    },
    bar: {
      width: {
        ratio: 0.3,
        max: 25
      },
    },
    size: {
        height: 360,
        width: width_chart1
    },
    padding: {
      right: 50
    }       
  });



  var listproduct = [
    ["QL dòng tiền", <?php echo e($listContractByMonth['cashflow'], false); ?>],
    ["Đầu tư", <?php echo e($listContractByMonth['invest'], false); ?>],
    ["Tiết kiệm", <?php echo e($listContractByMonth['saving'], false); ?>],
  ];

  var width_chart2 = $('#rptproduct').width();

  c3.generate({
    bindto: '#rptproduct',
    data: {
      type : 'pie',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listproduct
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
        height: 360,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });




  var data_chart3 = [
        ['Đầu tư', 30, 40, 50, 60, 70, 80],
  ];


  var width_chart3 = $('#chart3').width();


  c3.generate({
    bindto: '#chart3',
    data: {
      type: 'bar',
      columns: data_chart3
    },
    axis: {
      rotated: true
    },
    size: {
        height: 360,
        width: width_chart3
    },
    padding: {
      right: 50
    }        
  });


</script>