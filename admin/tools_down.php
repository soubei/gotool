<?php include 'header.php';?>
<?php include 'module.php';?>

<div id="content">
	<div id="content-header">
		<h1>ToolsDown</h1>
	</div>
	<div id="breadcrumb">
		<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
		<a href="#" class="current">ToolsDown</a>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="fa fa-th"></i>
					</span>
					<h5>ToolsDown</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered table-striped table-hover data-table" id="ToolsList">
						<?php echo ToolsDown();?>
					</table>  
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div id="footer" class="col-xs-12">
		<a href="#">杨小杰</a>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.icheck.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/unicorn.js"></script>
<script src="js/unicorn.tables.js"></script>

</body>
</html>