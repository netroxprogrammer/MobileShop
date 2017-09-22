<form action="<?php echo base_url(); ?>index.php/Stud_controller/update_student/" method="post">
<input  type="hidden" name="id" value="<?php echo $id ?>" />
<input name="name"  type="text" value="<?php  echo $record[0]->name; ?>" />
<input name="age"  type="text"  value="<?php echo $record[0]->age; ?>"/>
<input name="submit"  type="submit" />

</form>