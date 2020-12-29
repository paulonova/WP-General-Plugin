<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<section class="jumbotron">

  <div class="text-center">
    <div class="container">
      <h1 class="jumbotron-heading">This is my plugin with Bootstrap 4.0</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. 
      Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      
    </div>
  </div>

  <!-- options.php is a function from wp that get the ingo and save in database-->
  <form class="container" method="post" action="options.php">

    <?php 
      settings_fields( 'wpcustomfields' );
      do_settings_sections( 'wpcustomfields' );
    ?>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="theemail" value="<?php echo get_option('theemail');?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
    <?php $selected = get_option('thedays');?>
    <?php $multi_selected = get_option('themultiselect');?>
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" name="thedays" id="exampleFormControlSelect1">
        <option <?php if ($selected == '1') { echo 'selected';}?>>1</option>
        <option <?php if ($selected == '2') { echo 'selected';}?>> 2</option>
        <option <?php if ($selected == '3') { echo 'selected';}?>> 3</option>
        <option <?php if ($selected == '4') { echo 'selected';}?>> 4</option>
        <option <?php if ($selected == '5') { echo 'selected';}?>> 5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple name="themultiselect" class="form-control" id="exampleFormControlSelect2">
        <option <?php if ($multi_selected == '1') { echo 'selected';}?>>1</option>
        <option <?php if ($multi_selected == '2') { echo 'selected';}?>>2</option>
        <option <?php if ($multi_selected == '3') { echo 'selected';}?>>3</option>
        <option <?php if ($multi_selected == '4') { echo 'selected';}?>>4</option>
        <option <?php if ($multi_selected == '5') { echo 'selected';}?>>5</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-danger mb-2">Submit settings</button>
  </form>
</section>

