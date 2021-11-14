<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active">Products</li>
	</ol>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
			Add Product
			</div>
			<div class="panel-body">
				<form class="form-horizontal" name="" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
				    <div class="col-sm-5">
				      <input type="text" name='name' class="form-control" id="inputEmail3" placeholder="" value="<?php echo set_value('name'); ?>">
				    </div>
				    <div class="col-sm-4">
				    	<?php echo form_error('name'); ?>
					</div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
				    <div class="col-sm-5">
				      <input type="file" id="image" name="image" <?php echo set_value('image') ?>>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Big Images</label>
				    <div class="col-sm-5">
				      <input type="file" id="list_image" name="list_image[]" multiple>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
				    <div class="col-sm-5">
				        <select class="form-control" name="catalog_id">
						  <option>--- Choose ---</option>
						  <?php foreach ($catalog as $value) { 
						  	if (count($value->sub)>1) { ?>
						  		<option value="<?php echo $value->id; ?>" <?php if(set_value('catalog_id')== $value->id) echo 'selected'; ?>><?php echo $value->name; ?></option>
						  		<?php 
						  		foreach ($value->sub as $val) { ?>
						  			<option value="<?php echo $val->id; ?>" <?php if(set_value('catalog_id')== $val->id) echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val->name; ?></option>
						  		<?php }
						  		?>
						  		
						  	<?php }else{?>
						  	<option value="<?php echo $value->id; ?>" <?php if(set_value('catalog_id')== $value->id) echo 'selected'; ?>><?php echo $value->name; ?></option>
						  <?php } } ?>
						</select>
						<div class="col-sm-4">
				    	<?php echo form_error('catalog_id'); ?>
					</div>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Prices</label>
				    <div class="col-sm-5">
				      <input type="text" name='price' class="form-control" id="inputEmail3" placeholder="" value="<?php echo set_value('price'); ?>">
				    </div>
				    <div class="col-sm-4">
				    	<?php echo form_error('price'); ?>
					</div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
				    <div class="col-sm-5">
				      <input type="text" name='discount' class="form-control" id="inputEmail3" placeholder="" value="<?php echo set_value('discount'); ?>">
				    </div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Details</label>
					<div class="col-sm-8">
				      <textarea class="form-control" rows="3" name="content" id='content'><?php echo set_value('content'); ?></textarea>
				    </div>
				  </div>
      				<script>CKEDITOR.replace('content');</script>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-5">
				      <button type="submit" class="btn btn-primary">Add new</button>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div><!--/.row-->
