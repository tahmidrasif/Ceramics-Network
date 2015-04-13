<?php 
	if($_FILES['file']['size']>0)
	{
		if($_FILES['file']['size'] <= 1536000000)
		{
			if(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']["name"]))
			{
				?>
                <script type="text/javascript">
                	parent.document.getElementById("message").innerHTML ="";
					parent.document.getElementById("file").value ="";
					windows.parent.updatepicture("<?php echo 'images/'.$_FILES['file']["name"];?>");
                </script>
                
                <?php 
			}
			else
			{
				?>
                <script type="text/javascript">
                	parent.document.getElementById("message").innerHTML = "<font color='#ff0000'>Error in uploading</font>";
                
                </script>
                
                
                <?php
			} 
		}
		else
		{
			?>
            <script type="text/javascript">
            	parent.document.getElementById("message").innerHTML = "<font color='#ff0000'>Your file is larger than 150kb</font>";
            </script>
            
            <?php
		}
	}
?>