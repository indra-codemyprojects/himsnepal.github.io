<!DOTYPE html>
<html lang="en">
<head>
<?php include('head2.php'); ?>
</head>
<script type="text/javascript" >
		 	jQuery(document).ready(function() {
				oTable = jQuery('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			}); 
		</script>
<style>
	body{
	background:#f4f2f2;
	}
</style>

<body>
<?php include ('navbartop.php'); ?>
	
<div class="container-fluid">
 <div class="row-fluid">
		<div class="span2">
			<div class="sidenavfixed">
				<ul class="nav nav-list" style="margin-top:40px;">
<!--<li><img class="img-polaroid" src="images/avatar3.png"> </li> -->
					
                    <li><a href="home.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
					<li><a href="hims_managepages.php"><i class="icon-dashboard icon-2x"></i> Manage Pages </a></li> 										
                    <li><a href="research.php"><i class="icon-book icon-2x"></i> News Contents</a>    </li>
					<li><a href="author.php"><i class="icon-group icon-2x"></i> Photo Gallery</a>     </li>
                    <li><a href="hims_managegallery.php"><i class="icon-group icon-2x"></i> Gallery</a>  </li>
								<!--		<li><a href="archive.php"><i class="icon-list-alt icon-2x"></i> Archive</a>                                    </li>-->

					<li class="active"><a href="announcement.php"><i class="icon-bullhorn icon-2x"></i> Announcements</a>                                    </li>
					 <li><a href="hims_manageinquiry.php"><i class="icon-group icon-2x"></i> Manage Inquiry </a>                                    </li>
                    <li><a href="admin.php"><i class="icon-user icon-2x"></i> Admin</a>                                    </li>
					<li></li>
                    
					<br><br><br><br><br><br><br><br><br><br>		
					
				
				</ul>  
			</div>
		</div>
		

	<div class="span10">
	<div class="header24">
					<!--	<img src="../images/chmsc3d.png"> -->
					<div class="subhead">
						<h1>HIMS NEPAL</h1>
						<p><strong><font style="font-size:23px;;">Online Public Access Catalog</font></strong><font style="color:#818181;"> for News and Events</font></p>
					</div>
			</div>
	<div class="rightcontainer">
	<div class="pagination " style="margin-top:1px;">
  <ul>

    <li> <a href="author.php"><i class="icon icon-arrow-left"></i> List of Staff Profiles </a></li>
    <li class="disabled"><a href="#"><i class="icon-plus-sign icon-large"></i> Add Picture</a></li>
  </ul>
</div>

<div class="above_table">
  
     	  <div class="control-group">
         <label class="control-label" for="input01">Image:</label>
         <div class="controls">
             <input type="file" name="image" class="font" required> 
         </div>
     </div>
   <div class="control-group">
    <label class="control-label" for="inputEmail">About the Picture:</label><br><br>
    <div class="controls">
		<textarea name="about" id="ckeditor_full">
										
		</textarea>
    </div>
  </div>
   <button name="add_author" type="submit" class="btn-large btn-success"><i class="icon-save icon-large"></i> Save</button>
    <button type="reset" class="btn"><i class="icon-remove icon-large"></i> Reset</button>
			</form>
		</div>
		</div>
	
			
		</div>	


	  </div>

	
	</div><!--centerpage -->
</div>
</div>

</body>
<?php include('scripts.php');?>

</html>