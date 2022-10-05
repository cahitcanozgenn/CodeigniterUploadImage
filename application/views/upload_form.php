<h3>Upload a picture!</h3>
<hr />

<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>

  <div class="form-group">
    <label for="pic_title">Resim Başlığı:</label>
    <input type="text" class="form-control" name="pic_title" value="<?= set_value('pic_title'); ?>" id="pic_title">
  </div>
  <div class="form-group">
    <label for="pic_desc">Resim Açıklaması:</label>
    <textarea name="pic_desc" class="form-control" id="pic_desc"><?= set_value('pic_desc'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="pic_file">Resim:</label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file">
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Geri</a>
  <button type="submit" class="btn btn-success">Ekle</button>
</form>