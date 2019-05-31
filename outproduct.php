 <?php include'header.php';?>
    <?php include'nav.php'; ?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
        	<?php include'sidemenu.php'; ?>		
		  </div>
		  <div class="col-md-10">
  			<div class="content-box-large">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Product</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sales Report</li>
            </ol>
          </nav>
  				<div class="panel-heading">
  					<div class="panel-title">Sales Report</div>

            <div class="pull-right">
              <label class="mr-1">Product type</label>
              <select class="custom-select ml-1">
                <option value="1">Frames</option>
                <option value="2">Contact Lens</option>
                <option value="3">Reading Glass</option>
                <option value="4">Sun Glass</option>
              </select>
              <label class="mr-1">Date</label>
              <select class="custom-select ml-1">
                <option value="1">Daily</option>
                <option value="2">Weekly</option>
                <option value="3">Monthly</option>
                <option value="4">Sun Glass</option>
              </select>
              <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-calendar"></span> Print</button>
            </div>
  				</div>
                             
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table- table-striped table-hover">
						<thead>
              <tr>
                <th>Code</th>
                <th>Supplier</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Eye Size</th>
                <th>Shape</th>
                <th>Power</th>
                <th>Color</th>
                <th>Lense Color</th>
                <th>Value</th>
                <th>Date Out</th>
                <th>Quantity</th>
                <th>Total Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12345</td>
                <td>Nho</td>
                <td>Frame</td>
                <td>Musk</td>
                <td>87015</td>
                <td>53-16</td>
                <td>Square</td>
                <td>n/a</td>
                <td>Blacl/Red</td>
                <td>n/a</td>
                <td>P10.00</td>
                <td>00/00/0000</td>
                <td>100</td>
                <td>P1,000.00</td>
              </tr>
              <tr>
                <td>Fl- D31</td>
                <td>Nho</td>
                <td>Contact Lens</td>
                <td>Geolica Ciline</td>
                <td>n/a</td>
                <td>n/a</td>
                <td>n/a</td>
                <td>Plano</td>
                <td>Violet</td>
                <td>n/a</td>
                <td>P10.00</td>
                <td>00/00/0000</td>
                <td>100</td>
                <td>P1,000.00</td>
              </tr>
              <tr>
                <td>RG 0001</td>
                <td>Nho</td>
                <td>Reading Glass</td>
                <td>Geolica Ciline</td>
                <td>Plastic</td>
                <td>n/a</td>
                <td>n/a</td>
                <td>+1</td>
                <td>Violet</td>
                <td>n/a</td>
                <td>P10.00</td>
                <td>00/00/0000</td>
                <td>100</td>
                <td>P1,000.00</td>
              </tr>
              <tr>
                <td>RG 0001</td>
                <td>Nho</td>
                <td>Sun Glass</td>
                <td>Gucci</td>
                <td>WJ 273</td>
                <td>n/a</td>
                <td>n/a</td>
                <td>+1</td>
                <td>Dark Gray</td>
                <td>Smoke</td>
                <td>P10.00</td>
                <td>00/00/0000</td>
                <td>100</td>
                <td>P1,000.00</td>
              </tr>
              <tr>
                <th colspan="10" class="text-right">TOTAL:</th>
                <th>P40.00</th>
                <th></th>
                <th>400</th>
                <th>P4,000.00</th>
              </tr>
            </tbody>
					</table>
  				</div>
  			</div>



		  </div>
		</div>
    </div>

<?php include'footer.php';?>