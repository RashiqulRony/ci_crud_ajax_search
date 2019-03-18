<div class="container" xmlns="http://www.w3.org/1999/html">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Customer
				</div>
				<div class="panel-body">
					<div class="row">
						<?php if (isset($customer_data)){
							foreach ($customer_data->result() as $row):
						?>
						<div class="col-md-6 border-right">
							<h3 class="border-bottom">Update Customer</h3>
							<form method="post" action="<?php echo base_url()?>customer/add_customer" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" class="form-control" value="<?php echo $row->name ?>" name="name"  placeholder="Enter Name">
									<span class="text-danger"><?php echo form_error("name"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" value="<?php echo $row->email ?>" name="email"  placeholder="Enter email">
									<span class="text-danger"><?php echo form_error("email"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Phone</label>
									<input type="number" class="form-control" value="<?php echo $row->phone ?>" name="phone" placeholder="Phone">
									<span class="text-danger"><?php echo form_error("phone"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Image</label>
									<input type="file" class="form-control" name="image" accept="image/*">
									<span class="text-danger"><?php echo form_error("image"); ?></span>
								</div>

								<input type="hidden" value="<?php echo $row->id ?>" name="customer_id">
								<input type="submit" value="Update" name="update" class="btn btn-primary">
							</form>
						</div>
						<?php endforeach;  }else{ ?>
						<div class="col-md-6 border-right">
							<h3 class="border-bottom">Insert Customer</h3>
							<form method="post" action="<?php echo base_url()?>customer/add_customer" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" class="form-control" value="<?php if (isset($name)) echo $name ?>" name="name"  placeholder="Enter Name">
									<span class="text-danger"><?php echo form_error("name"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" value="<?php if (isset($email)) echo $email ?>" name="email"  placeholder="Enter email">
									<span class="text-danger"><?php echo form_error("email"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Phone</label>
									<input type="number" class="form-control" value="<?php if (isset($phone)) echo $phone ?>" name="phone" placeholder="Phone">
									<span class="text-danger"><?php echo form_error("phone"); ?></span>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Image</label>
									<input type="file" class="form-control" name="image" accept="image/*">
									<span class="text-danger"><?php echo form_error("image"); ?></span>
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
						<?php }?>
						<div class="col-md-6">
							<h3 class="border-bottom">Customer Info</h3>
							<table class="table table-bordered table-hover">
								<tr class="table-info">
									<th>Sl.No</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Action</th>
								</tr>
								<?php foreach ($customers->result() as $key => $customer): ?>
								<tr>
									<td><?php echo ++$key ?></td>
									<td><?php echo $customer->name ?></td>
									<td><?php echo $customer->email ?></td>
									<td><?php echo $customer->phone ?></td>
									<td>
										<a href="<?php echo base_url();?>customer/update_data/<?php echo $customer->id; ?>"><i class="fa fa-edit"></i></a> |
										<a href="<?php echo base_url();?>customer/delete_data/<?php echo $customer->id; ?>" onclick="return confirm('Are you sure delete this row...?')"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



