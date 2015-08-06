<script language="javascript">
	function testing(formed)
	{
		alert(formed);
		return false;
	}
	
	function myFunction(oForm)
	{
		alert(oForm.id);	
	}
</script>
 <form method="post" action="#" id="test_form" name="test_form">
<table width="100%" border="1">

  <tr>
   
    <td><input type="submit" value="Submit" onClick="myFunction(this.form);return false;"></td>
   
  </tr>
   
</table>
</form>

<?php foreach($testing as $bd) { ?>
<form method="post" action="#" id="test_form_<?php echo $bd->id;?>" name="test_form_<?php echo $bd->id;?>">
<input type="submit" value="Submit" onClick="testing(this.form);return false;">
</form>
<?php } ?>