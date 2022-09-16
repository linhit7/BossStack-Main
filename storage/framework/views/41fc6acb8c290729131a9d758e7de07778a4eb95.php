<script>
function selectOnlyThis(id){
  var myCheckbox = document.getElementsByName("assetid");
  Array.prototype.forEach.call(myCheckbox,function(el){
    el.checked = false;
  });
  id.checked = true;
}
</script>
<script>
    $(function() {
        $('.btn-delete').click(function(){
            var id = $(this).data('id');
            swal({
                title: "Bạn có chắc không?",
                text: "Nội dung xóa sẽ được đưa vào thùng rác",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((value) => {
                console.log(value);
                if(value) {
                    document.forms['form-delete-'+id].submit();
                }
            });
        });
        
        $('.btn-save').click(function() {
            $('#frm').submit();
        });

    });
</script>
<script type="text/javascript">
        $(function () {
            param = {   format: "dd/mm/yyyy",
                        autoclose: true,
                        daysOfWeekHighlighted: "0,6",
                        todayHighlight: true,
                        todayBtn: "linked",
                        language: "vi",
                    };
            $('#assetdate').datepicker(param);
        });
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