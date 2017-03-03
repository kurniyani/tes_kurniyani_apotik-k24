
	<div class="row">
          <div class="col-lg-12">
            <h3><?php echo $ket ?><?php if($keyword){echo "<span style='color:#666;font-size:20px;font-style:italic;'> ".$keyword."</span>";} ?></h3>
            <hr />
          </div>
    </div><!-- /.row -->

    <div class="row" style="margin:0px 0px 15px 0px;padding-left:0px;">
		<form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/member/search" method="get" id="cari1">
		<div class="col-lg-4" style="padding-left:0px;">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search" name="keyword">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="submit" id="btn-cari1">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			  </span>
			</div><!-- /input-group -->
		</div>
		</form>

	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Member </h3>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/member/addmember" class="btn btn-info pull-right">Add New Member</a>
					</div>
					
				<div class="box-body" style="display: block;">
					<div class="table-responsive">
						<table class="table table-hover table-bordered no-margin">
						<tr>
						<th style="text-align:center;width:10%">ID</th>
						<th style="text-align:center;width:10%">Nama</th>
						<th style="width:12%">Alamat</th>
						<th style="width:10%">Tanggal Lahir</th>
						<th style="width:10%">Email</th>
						<th style="width:10%">No Telepon</th>
						<th style="width:10%">Aksi</th>
						</tr>
						<?php
							if(count($rows) == 0){
								echo "<tr><td colspan='9'>No Member available.</td></tr>";
							}
						?>
						<?php 
							$i = 1;
						foreach ($rows as $data){ ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data->nama; ?></td>
							<td><?php echo $data->alamat; ?></td>
							<td><?php echo $data->tanggal_lahir; ?></td>
							<td><?php echo $data->email; ?></td>
							<td><?php echo $data->no_telp; ?></td>
										
							
							<td style="text-align:center;">
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/member/deletemember/<?php echo $data->id; ?>" onclick="return confirm('Are you sure?');">
									<span class="glyphicon glyphicon-remove-sign" style="color:red"></span>
								</a>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/member/editmember/<?php echo $data->id; ?>"><span class="glyphicon glyphicon-edit" style="color:#009933"></span></a>
							</td>
						</tr> 
						<?php
							$i++;
						} ?>
						</table>
						<br />
						<div class="row" style="text-align:center !important;">
						<?php
							$this->widget('CLinkPager', array('pages'=>$pages,
								'header'=>'',
								'nextPageLabel'=>'next &raquo;',
								'prevPageLabel'=>'&laquo; prev',
							 ));

						?>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>