<?php
$id="20";
include '../header.php';?>
<div class="container clearfix">
  <div class="row row-xs">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
      <div class="page-header">
        <h3 class="text-center h3-xs"><?php echo $title;?><small class="text-capitalize"><?php echo $subtitle;?></small></h3>
      </div>
      <h5 class="text-right"><small><?php echo $explains;?></small></h5>
			<div class="form-group" id="input-wrap">
				<label class="control-label control-msg" for="inputContent" copy="Youngxj|杨小杰，admin@youngxj.com"></label>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="请填写手机号" onKeyUp="value=value.replace(/\D/g,'')" onafterpaste="value=value.replace(/\D/g,'')">
					<div class="input-group-btn">
						<button class="btn btn-default" type="button" id="btn_state">启动</button>
					</div><!-- /btn-group -->
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			<div class="form-controlss text-left">
				<div id="content"></div>
				<div id="msg"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="phone.php?rand=<?php echo md5(md5((int)(time()/10)).encryption(1));?>&_=<?php echo randomFloat(1, 99999999);?>"></script>
<?php include '../footer.php';?>