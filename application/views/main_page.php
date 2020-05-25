<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('application/views/header.php');
?>
<div class="wrapper">
			<div style="width: 37%;justify-content: space-around;margin-top: -7745px;margin-left: 27px;">
				<div>
				<div style="color: #EE5C12;">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					Update Itinarary
				</div>
				<div style="display: flex;justify-content: space-around;color: #EE5C12;">
					<div style="margin-left: -72px;margin-top: 5px;">
						<i class="fa fa-sliders" aria-hidden="true"></i> 
	    				Filters
					</div>
					<div style="margin-left: 157px;">
						Clear All
					</div>
				</div>
				<div style="display: flex;justify-content: space-around;">
					<div style="margin-left: -78px;">
	    				Include Outside Policy
					</div>
					<div>
						<i class="fa fa-toggle-on" aria-hidden="true"  style="color: #EE5C12;margin-left: 101px"></i>
					</div>
				</div>
				<div style="margin-top: 5px;">
					Maximum Stops
				</div>
				<div class="btn-group">
					<button>Non Stop</button>
					  <button>Upto 1 Stop</button>
					  <button>Upto 2+ Stops</button>
			        </div>
				<div>
					Departure Time
				</div>
				<div>
					<div id = "slider-3" style="width: 83%;left: 9px;"></div>
					<p>
			         <input type = "text" id = "price"  style = "border:0; color:#b9cd6d; font-weight:bold;color: #c1c3b6;">
			      	</p>
				</div>
				<div>
					Duration
				</div>
				<div>
					<div id = "slider-2" style="width: 83%;left: 9px;"></div>
					<p>
			         <input type = "text" id = "time" readonly style = "border:0; color:#b9cd6d; font-weight:bold;color: #c1c3b6;">
			      	</p>
				</div>
			</div>
			</div>
			 

			<div style="width: 60%;justify-content: space-around;align-items: center;">
				<?php foreach($flights as $key=>$value){?>
				<div style="display: flex;box-shadow: 0px 2px 3px 1px #bdb7b7;margin-bottom: 10px;">
				<div style="margin-left: 11px;">
					<input type="radio" />
				</div>
				<div style="margin-left: 21px;">
					<p><strong><?=$value['flights'][0]['carrier_name']?></strong></p>
					<p><?=$value['class']?></p>
					<p><?=$value['refund_status']?></p>
				</div>
				<div style="margin-left: 21px;">
					<p><strong><?=date('H:i',strtotime($value['flights'][0]['departure_date_time']))?></strong></p>
					<p><?=$value['flights'][0]['from']?></p>
					<p><?=date('d F',strtotime($value['flights'][0]['departure_date_time']))?></p>
					<p>Early Departure</p>
				</div>
				<div class="duration" style="margin-left: 21px;">
					<p style="margin: 0px;text-align: center;"><strong><?=number_format((float)($value['flights'][0]['flight_duration'] / 60), 2, '.', '');  ?> Hrs</strong></p>
					<hr />
					<p style="margin-top: -16px;;text-align: center;"><?=count($value['flights'][0]['via']) . " Stop"?></p>
					<span class="round"></span>
					<p style="color:#f37638"><?='Cabin:- ' .$value['flights'][0]['baggage']['cabin'].','.'Check in:- '.$value['flights'][0]['baggage']['check_in']?></p>
				</div>
				<div style="margin-left: 21px;">
					<p><strong><?=date('H:i',strtotime($value['flights'][0]['arrival_date_time']))?></strong></p>
					<p><?=$value['flights'][0]['to']?></p>
					<p><?=date('d F',strtotime($value['flights'][0]['arrival_date_time']))?></p>
				</div>
				<div style="margin-left: 21px;">
					<p><strong><?=$value['sale_price'] . " INR"?></strong></p>
					<p style="color:#f37638">Outside Policy</p>
					<p style="color:#2276e3">Flight Details</p>
				</div>
			</div>
			<?php } ?>
		</div>
<?php require_once('application/views/footer.php') ?>