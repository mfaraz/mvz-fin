<script type="text/javascript">

	$(function() { //graph pie
		
		// piechart : data
		var data1 = [
		<?php 
			$i = 0;
			if(isset($data_in)){
			foreach($data_in as $cat)
			{
				if($i>0){ echo ",";}
				//echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal']." }";
				echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal'].", color: '".$cat['Color']."' }";
				$i++;
			}}else{echo "{ label: '', data: 0 }";}
		?>
        ];
		
		var data2 = [
		<?php 
			$i = 0;
			if(isset($data_bu)){
			foreach($data_bu as $cat)
			{
				if($i>0){ echo ",";}
				//echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal']." }";
				echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal'].", color: '".$cat['Color']."' }";
				$i++;
			}}else{echo "{ label: '', data: 0 }";}
		?>
        ];
		
		var data3 = [
		<?php 
			$i = 0;
			if(isset($data_ex)){
			foreach($data_ex as $cat)
			{
				if($i>0){ echo ",";}
				//echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal']." }";
				echo "{ label: '".$cat['Name']."', data: ".$cat['Nominal'].", color: '".$cat['Color']."' }";
				$i++;
			}}else{echo "{ label: '', data: 0 }";}
		?>
        ];
		
		// piechart : id income
		var placeholder1 = $('#income-placeholder').css({'width':'90%' , 'min-height':'200px'});
		var placeholder2 = $('#budget-placeholder').css({'width':'90%' , 'min-height':'200px'});
		var placeholder3 = $('#expense-placeholder').css({'width':'90%' , 'min-height':'200px'});
        
		// piechart : plot income
		$.plot(placeholder1, data1, {
			series: {
				pie: {
					show: true,
					highlight: {
					  opacity: 0.25
					},
					label: {
						show: true,
						radius: 0.5,
						formatter: labelFormatter,
						background: {
							opacity: 0.5
						},
						
					}
				}
			},
			legend: {
				show: true,
				position: "ne", 
				//labelBoxBorderColor: null,
				margin:[-30,15]
				
			}
		});
		
		$.plot(placeholder2, data2, {
			series: {
				pie: {
					show: true,
					highlight: {
					  opacity: 0.25
					},
					label: {
						show: true,
						radius: 0.5,
						formatter: labelFormatter,
						background: {
							opacity: 0.5
						},
						
					}
				}
			},
			legend: {
				show: true,
				position: "ne", 
				//labelBoxBorderColor: null,
				margin:[-30,15]
				
			}
		});
		
		$.plot(placeholder3, data3, {
			series: {
				pie: {
					show: true,
					highlight: {
					  opacity: 0.25
					},
					label: {
						show: true,
						radius: 0.5,
						formatter: labelFormatter,
						background: {
							opacity: 0.5
						},
						
					}
				}
			},
			legend: {
				show: true,
				position: "ne", 
				//labelBoxBorderColor: null,
				margin:[-30,15]
				
			}
		});
		
	});
	
	$(function() { //graph bar

		// var d1 = [];
        // for (var i = 0; i < Math.PI * 2; i += 0.5) {
          // d1.push([i, Math.sin(i)]);
        // }
      
        // var d2 = [];
        // for (var i = 0; i < Math.PI * 2; i += 0.5) {
          // d2.push([i, Math.cos(i)]);
        // }
      
        // var d3 = [];
        // for (var i = 0; i < Math.PI * 2; i += 0.2) {
          // d3.push([i, Math.tan(i)]);
        // }
		
		// var d1 = [[0, 9], [4, 8], [8, 5], [9, 13]];
		// var d2 = [[0, 3], [3, 4], [5, 8], [8, 7]];
		// var d3 = [[0, 12], [7, 12], [7, 2.5], [12, 2.5]];
		
		var d1 = [ ["Jan", 10000], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 9], ["Aug", 9], ["Sep", 9], ["Oct", 9], ["Nov", 9], ["Dec", 9] ];
		var d2 = [ ["Jan", 8348], ["Feb", 34], ["Mar", 3], ["Apr", 23], ["May", 45], ["Jun", 19], ["Jul", 9], ["Aug", 9], ["Sep", 9], ["Oct", 9], ["Nov", 9], ["Dec", 9] ];
		var d3 = [ ["Jan", 3582], ["Feb", 12], ["Mar", 9], ["Apr", 33], ["May", 38], ["Jun", 15], ["Jul", 9], ["Aug", 9], ["Sep", 9], ["Oct", 9], ["Nov", 9], ["Dec", 9] ];
        
        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
			{ label: "Green", data: d1, color: '#0F0', bars: { align: "right" } },
			{ label: "Blue", data: d2, color: '#00F', bars: { align: "center" } },
			{ label: "Red", data: d3, color: '#F00', bars: { align: "left" } }
			// { label: "Green", data: d1, color: '#0F0' },
			// { label: "Blue", data: d2, color: '#00F' },
			// { label: "Red", data: d3, color: '#F00' }

        ], {
          series: {
            bars: {
					show: true,
					barWidth: 0.3,
					align: "center",
					//mode: 1
				}
          },
          xaxis: {
				mode: "categories",
				//tickLength: 0
          },
          yaxis: {
			
          },
          grid: {
            backgroundColor: { colors: [ "#fff", "#fff" ] },
            borderWidth: 1,
            borderColor:'#555'
          }
        });
		
		
	});
	
	$(function() { //table sticky header
		var $demo1 = $('table.table-striped');
        $demo1.floatThead({
            scrollContainer: function($table){
                return $table.closest('.wrapper');
				
            }
        });
        $('#change-dom').click(function(){
            $(this).parent().hide();
            $demo1.floatThead('reflow');
        });
		
	});
	
	function labelFormatter(label, series) {
		return "<div style='font-size:8pt; text-align:center; padding:2px; color:#EEE;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}
	
</script>
<h1 class="page-header">Dashboard</h1>
	<div class="row placeholder">
		<div class="col-xs-12 col-sm-4 placeholder">
			<div style="border:1px solid #ddd; border-radius:8px; padding:10px;">
				
									<h4 class="sub-header"><span class="glyphicon glyphicon-import"></span> Income</h4>
									<div id="income-placeholder"></div>
								
			</div>
		</div>
		<div class="col-xs-12 col-sm-4 placeholder">
			<div style="border:1px solid #ddd; border-radius:8px; padding:10px;">
				
									<h4 class="sub-header"><span class="glyphicon glyphicon-saved"></span> Budget</h4>
									<div id="budget-placeholder"></div>
								
			</div>
		</div>
		<div class="col-xs-12 col-sm-4 placeholder">
			<div style="border:1px solid #ddd; border-radius:8px; padding:10px;">
				
									<h4 class="sub-header"><span class="glyphicon glyphicon-export"></span> Expense</h4>
									<div id="expense-placeholder"></div>
								
			</div>
		</div>
	</div>
	
	<div style="border:1px solid #ddd; border-radius:8px; padding:10px;">
		<div class="span6">
			<div class="box-wrap">
				<div class="box-inner">
					<h4>Chart</h4>
					<div id="sales-charts"></div>
				</div>
			</div>
		</div>
	</div>

  <!--<div class="row placeholders">
	<div class="col-xs-6 col-sm-3 placeholder">
	  <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
	  <h4>Label</h4>
	  <span class="text-muted">Something else</span>
	</div>
	<div class="col-xs-6 col-sm-3 placeholder">
	  <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
	  <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
	  <h4>Label</h4>
	  <span class="text-muted">Something else</span>
	</div>
	<div class="col-xs-6 col-sm-3 placeholder">
	  <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
	  <h4>Label</h4>
	  <span class="text-muted">Something else</span>
	</div>
	<div class="col-xs-6 col-sm-3 placeholder">
	  <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
	  <h4>Label</h4>
	  <span class="text-muted">Something else</span>
	</div>
  </div>-->

  <h3 class="sub-header">Table</h3>
  <div style="border:1px solid #ddd;">
	  <!--<div class="wrapper" style="overflow:auto; height:400px;">-->
	  <div class="table-responsive wrapper" style="overflow:auto; height:400px;">
	  <!--<div class="table-responsive">-->
	  
		<table class="table table-striped">
		<!--<table class="table demo1" >-->
		  <thead>
			<tr style="background-color:white;">
			  <th>#</th>
			  <th>Header</th>
			  <th>Header</th>
			  <th>Header</th>
			  <th>Header</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>1,001</td>
			  <td>Lorem</td>
			  <td>ipsum</td>
			  <td>dolor</td>
			  <td>sit</td>
			</tr>
			<tr>
			  <td>1,002</td>
			  <td>amet</td>
			  <td>consectetur</td>
			  <td>adipiscing</td>
			  <td>elit</td>
			</tr>
			<tr>
			  <td>1,003</td>
			  <td>Integer</td>
			  <td>nec</td>
			  <td>odio</td>
			  <td>Praesent</td>
			</tr>
			<tr>
			  <td>1,003</td>
			  <td>libero</td>
			  <td>Sed</td>
			  <td>cursus</td>
			  <td>ante</td>
			</tr>
			<tr>
			  <td>1,004</td>
			  <td>dapibus</td>
			  <td>diam</td>
			  <td>Sed</td>
			  <td>nisi</td>
			</tr>
			<tr>
			  <td>1,005</td>
			  <td>Nulla</td>
			  <td>quis</td>
			  <td>sem</td>
			  <td>at</td>
			</tr>
			<tr>
			  <td>1,006</td>
			  <td>nibh</td>
			  <td>elementum</td>
			  <td>imperdiet</td>
			  <td>Duis</td>
			</tr>
			<tr>
			  <td>1,007</td>
			  <td>sagittis</td>
			  <td>ipsum</td>
			  <td>Praesent</td>
			  <td>mauris</td>
			</tr>
			<tr>
			  <td>1,008</td>
			  <td>Fusce</td>
			  <td>nec</td>
			  <td>tellus</td>
			  <td>sed</td>
			</tr>
			<tr>
			  <td>1,009</td>
			  <td>augue</td>
			  <td>semper</td>
			  <td>porta</td>
			  <td>Mauris</td>
			</tr>
			<tr>
			  <td>1,010</td>
			  <td>massa</td>
			  <td>Vestibulum</td>
			  <td>lacinia</td>
			  <td>arcu</td>
			</tr>
			<tr>
			  <td>1,011</td>
			  <td>eget</td>
			  <td>nulla</td>
			  <td>Class</td>
			  <td>aptent</td>
			</tr>
			<tr>
			  <td>1,012</td>
			  <td>taciti</td>
			  <td>sociosqu</td>
			  <td>ad</td>
			  <td>litora</td>
			</tr>
			<tr>
			  <td>1,013</td>
			  <td>torquent</td>
			  <td>per</td>
			  <td>conubia</td>
			  <td>nostra</td>
			</tr>
			<tr>
			  <td>1,014</td>
			  <td>per</td>
			  <td>inceptos</td>
			  <td>himenaeos</td>
			  <td>Curabitur</td>
			</tr>
			<tr>
			  <td>1,015</td>
			  <td>sodales</td>
			  <td>ligula</td>
			  <td>in</td>
			  <td>libero</td>
			</tr>
		  </tbody>
		</table>
	  </div>
  </div>
