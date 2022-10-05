  <h2>Listeler</h2>
  <?php if(count($picture_list)){?>
	  <table class="table table-bordered">
		<thead>
		  <tr>
			<th>Başlık</th>
			<th>Açıklama</th>
			<th>Resim</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach ($picture_list as $pic): ?>
		  <tr>
			<td><?=$pic->pic_title;?></td>
			<td><?=$pic->pic_desc;?></td>
			<td><a href="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" target="_blank"><img src="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" width="100"></a></td>
		  </tr>
		<?php endforeach ?>
		</tbody>
	  </table>
	  <br />
	  <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">YÜKLE</a>
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>