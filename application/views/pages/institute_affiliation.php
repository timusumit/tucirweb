<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Gallery</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Exchange Program</h3>
					<p class="text-justify">
						CIR coordinates the student/faculty exchange with the partner universities of TU. Furthermore, it also provides guidance and counsel to incoming as well as to outgoing students/faculties under the exchange programme. (See more)
					</p>		
				</article>
			</div>
				
		</div>
		<div class="row">
			

			
			<div class="col-lg-12 col-md-12">
			<h3>New Bilaterial Agreement List</h3>
			<h5>List of Universities and Institutions having bilateral relationship with TU:</h5>
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th>S.N</th><th>Country</th><th>University</th><th>Valid</th><th>Type</th></tr></thead>
	<tbody>
		<?php foreach ($institute_affiliation as $key=>$data): ?>
			<?php if($data['ia_cat']=='new_bilaterial'){ ?>
		<tr><td><?php echo $key+1 ?></td>
			<td>	<?php echo $data['ia_country'] ?></td><td><?php echo $data['ia_university'] ?></td><td><?php echo $data['ia_validity'] ?></td><td><?php echo $data['ia_type'] ?></td>
			</tr>
		<?php } ?>
				<?php endforeach; ?>
			</tbody>	
		</table>
		<p class="text-left">
			Note:
<ul>
<li>CERID = Research Center for Education Innovation and Development </li>
<li>CEDA = Center for Economic Development and Administration</li>
<li>CNAS = Center for Nepal and Asian Studies </li>
<li>CNS = Cornell Nepal Study </li>
<li>CSA = College Semester Abroad </li>
<li>KSA = Kathmandu Semester Abroad </li>
<li>PCN = Pitzer College in Nepal </li>
<li>IoST = Institute of Science and Technology</li> 
<li>IAAS = Institute of Agricultural and Animal Science</li>
<li>IoF = Institute of Forestry </li>
<li>FoHS = Faculty of Humanities and Social Sciences</li>
<li>FoM = Faculty of Management </li>
<li>IoM = Institute of Medicine</li>
<li>IoEngg = Institute of Engineering</li>
</ul>
		</p>	
			</div>
	<!-- cat 1 end -->
	<hr>
<div class="col-lg-12 col-md-12">
			<h3>List of Home Institutions having Bilateral Relations:</h3>
			
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th>S.N</th><th>University</th><th>Valid</th></tr></thead>
	<tbody>
		<?php foreach ($institute_affiliation as $key=>$data): ?>
			<?php if($data['ia_cat']=='home_institution'){ ?>
		<tr><td><?php echo $key+1 ?></td>
			<td><?php echo $data['ia_university'] ?></td><td><?php echo $data['ia_validity'] ?></td>
			</tr>
		<?php } ?>
				<?php endforeach; ?>
			</tbody>	
		</table>	
			</div>
			<!-- cat 1 end -->
<hr>
<div class="col-lg-12 col-md-12">
			<h3>Institution Afilation:</h3>
			<p class="text-justify">
				 CIR is responsible for managing agreements between Tribhuvan Universitiy and partner universities and academic institutions at home and abroad. It has established mutual relationship with over 128 different universities and academic institutions in over 30 different countries.

List of Universities and Institutions having bilateral relationship, 2013. 
			</p>
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th>S.N</th><th>University</th><th>Valid</th></tr></thead>
	<tbody>
		<?php foreach ($institute_affiliation as $key=>$data): ?>
			<?php if($data['ia_cat']=='institution_affiliation'){ ?>
		<tr><td><?php echo $key+1 ?></td>
			<td><?php echo $data['ia_university'] ?></td><td><?php echo $data['ia_validity'] ?></td>
			</tr>
		<?php } ?>
				<?php endforeach; ?>
			</tbody>	
		</table>	
			</div>

		</div>
	</div>
	</div>
</section>

 <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>

  <script>
    $(document).ready(function() {

     $('.dtable').DataTable();


    });
  </script>