<section>
    <div class="container">
        <h1>Hello World!</h1>
        <div class="row">
            <div class="col-sm-5 col-md-5 col-lg-5" style="background-color:yellow;">
                <?php echo form_open_multipart('upload/do_upload');?> 
		<form action = "" method = "">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" />
                        <input type="text" class="form-control" placeholder="Last Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Street" />
                        <input type="text" class="form-control" placeholder="ZIP Code" />
                        <input type="text" class="form-control" placeholder="City" />
                        <input type="text" class="form-control" placeholder="Country" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Number of Bedrooms" />
                        <p>
                            <label>Room Type</label>
                            <select>
                                <option value="Single">Single</option>
                            </select>       
                            <div class="rooms"></div>
                        </p>
                    </div>
		    <div class="form-group">
                        <textarea class="form-control" placeholder="Description"></textarea>
                    </div>

		    <div class="checkbox">
		        <label><input type="checkbox" value="">Option 1</label>
		        <label><input type="checkbox" value="">Option 1</label>
		        <label><input type="checkbox" value="">Option 1</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Option 2</label>
		        <label><input type="checkbox" value="">Option 2</label>
		        <label><input type="checkbox" value="">Option 2</label>
                    </div>
                    <?php $this->load->view('common/upload_form', array('error' => ' ' )); ?>
		</form>
	    </div>
            <div class="col-sm-7 col-md-7 col-lg-7" style="background-color:pink;">
                <?php $mapData = array('address' => 'Dusseldorf'); ?>
                <?php $this->load->view('common/googleMap', $mapData); ?>
	    </div>
        </div>
    </div>	
</section>
