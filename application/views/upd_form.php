<form method="post" action="<?php echo base_url().$this->config->config['index_page']."/test/update"; ?>">
	
	<input name="fname" value="<?php echo $data[0]->fname; ?>"><br>
	<input name="lname" value="<?php echo $data[0]->lname; ?>"><br>
	<input name="id" type="hidden" value="<?php echo $data[0]->id; ?>">
	<input name="save_btn" type="submit" value="Save">
	
</form>