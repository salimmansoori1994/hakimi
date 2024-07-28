<div class='col-sm-12'>
    <div class="row">

        <!-- --------------------------------------------------------------------------------------------- -->
        <div class='col-sm-3'>
            <div class='box_sahd' align='center'>
                <div class='round'>
                    <?php echo $salesman_master ?    count($salesman_master) : '0'; ?>
                </div>
                <b> Total Salesman </b>
            </div>

        </div>

        <!-- --------------------------------------------------------------------------------------------- -->
        <div class='col-sm-3'>
            <div class='box_sahd' align='center'>
                <div class='round'>
                    <?php echo   $Shops_master ? count($Shops_master)  : '0'; ?>
                </div>
                <b> Total Shops </b>
            </div>

        </div>

        <!-- --------------------------------------------------------------------------------------------- -->
        <div class='col-sm-3'>
            <div class='box_sahd' align='center'>
                <div class='round'>
                    <?php echo $categories_master ?   count($categories_master)  : '0'; ?>
                </div>
                <b> Total Categories </b>
            </div>

        </div>
        <!-- --------------------------------------------------------------------------------------------- -->
        <div class='col-sm-3'>
            <div class='box_sahd' align='center'>
                <div class='round'>
                    <?php echo  $billing_data[0]->total; ?>
                </div>
                <b> Total Billings </b>
            </div>

        </div>

        <!-- --------------------------------------------------------------------------------------------- -->
        <div class='col-sm-12' style='margin-top: 12px;'>

            <div class='col-sm-3' style='background: #3389cc;'>
                <form action="" method='post' class='col-sm-12 row '>
                    <div class='col-sm-12 '>
                        <label for=""> <small>Start date</small> </label>
                        <input type="date" class='form-control no_padding' name='start_date'
                            value='<?php echo $start_date; ?>' required />
                    </div>

                    <div class='col-sm-12 '>
                        <label for=""> <small>End date</small> </label>
                        <input type="date" class='form-control no_padding' name='end_data'
                            value='<?php echo $end_data; ?>' required />
                    </div>

                    <div class='col-sm-12 ' align='center'>

                        <button class='btn btn-sm btn-info' style='margin-top: 5px;'> Search by Dates </button>
                    </div>
                </form>

            </div>

            <div class='col-sm-9'>

            <?php
            $char_1_sales_men = '';
            $char_1_sales_amount = '';
            $char_1_sales_color = '';
            if($salesman_master){
                foreach ($salesman_master as $key => $value) {

                    $color = sprintf("#%06x",rand(0,967772));

                    $details_amount = details('sum(total_amount) as total','billings',array('salesmen_id'=>$value->id,'create_date >='=> $start_date, 'create_date <='=> $end_data ));
                    $char_1_sales_men .= ' "'.$value->name.'", ';
                    $char_1_sales_amount .= ' "'.$details_amount[0]->total.'", ';
                    $char_1_sales_color .= ' "'.$color.'", ';
                }
            } ?>

                    <canvas id="sales_men_wise_selling" height="250" width="500" ></canvas>

            </div>

            <div class='col-sm-4'>


            </div>


        </div>

    </div>

</div>


<style>
.box_sahd {
    background: #6596be;
    font-size: 21px;
    padding: 15px;
    border-radius: 6px;
    color: black;
}

.round {
    height: 50px;
    width: 100px;
    border: 2px solid #0f0e0e;
    padding: 7px;
    border-radius: 24px;
}

.dropdown-menu.dropdown-menu-right.show {
    top: 10px !important;
    height: 200px;
    min-width: 250px !important;
    left: 13px !important;
    overflow-x: scroll;
}

th {
    padding: 5px 2px !important;
}

td {
    padding: 5px 2px !important;
}

.set_div_dues_box {

    overflow-y: scroll;

}

.table {
    border: 1px solid #757171;
    background: #6797bf;
}

td {
    padding: 4px 10px !important;
    border: 1px solid #606060;

    font-size: 12px;


}

th {
    padding: 4px 10px !important;
    border: 1px solid #606060;

    font-size: 12px;

}

.set_div_dues_box_heaer {
    background: #ff6f1d;
    color: white;
    border-radius: 10px;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>
var xValues = [<?php echo $char_1_sales_men; ?>];
var yValues = [<?php echo $char_1_sales_amount; ?>]; 
var barColors = [<?php echo $char_1_sales_color; ?>];

new Chart("sales_men_wise_selling", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
    }]
  },
  options: {
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 15,
        bottom: 0
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    },
    legend: {display: false},
    title: {
      display: true,
      text: "Selsmen Selling in Rupees of Selected Date."
    },
    animation: {
      duration: 1,
      onComplete: function() {
        var chartInstance = this.chart,
          ctx = chartInstance.ctx;
          Chart.defaults.global.defaultFontColor= 'red';
        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';

        this.data.datasets.forEach(function(dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function(bar, index) {
            if (dataset.data[index] > 0) {
              var data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y);
            }
          });
        });
      }
    }
  }
    
});
</script>