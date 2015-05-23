<table border=1 >
	<?php foreach($data as $i => $row) { ?>
		<tr>
			
			<td><?php echo $row->fname; ?></td>
			<td><?php echo $row->lname; ?></td>
			<td>
				<form method="post" action="<?php echo base_url().$this->config->config['index_page']."/test/delete"; ?>">
					<input type="hidden" name="id" value="<?php echo $row->id; ?>">
					<input type="submit" name="del_btn" value="Delete">
					<input type="submit" name="upd_btn" value="Update">
				</form>
			</td>
		</tr>
	<?php } ?>
</table>