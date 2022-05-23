<?php $item = get_item_by_id($_GET['id']);?>
<div class="single-video-content">
					<h3><?php echo $item["title"];?></h3>
					<div class="single-meta pull-left"><span><?php echo $item["created"];?></span> | <span><?php echo $item["creator"];?></span> | <span><span><?php echo $item['date'];?></span></div>
					<div class="sharing pull-right"><img src="images/icon/sharing.png" alt=""/></div>
					<div class="clearfix"></div>
					<div class="single-thumb space30">
						<img src="<?php echo $item["image"];?>" class="img-responsive" alt=""/>
					</div>
					<p><br><?php echo $item["news"];?></p>
</div>