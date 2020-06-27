<?php
if(!defined('ABSPATH'))
{
    exit;
}

    global $variable1;
    global $variable2;
    global $variable3;
    global $variable4;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $text1 = $_POST['footertextname'];
        $text2 = $_POST['footerlinkname'];
        $text3 = $_POST['footertextarea'];
        $text4 = $_POST['footeradresse'];
        $phone = $_POST['footerphone'];
        // global $variable1;
        if( get_option('footer_text') != trim($text1)){
            $variable1= update_option( 'footer_text', trim($text1));
        }
        if( get_option('footer_link') != trim($text2)){
          $variable2 = update_option( 'footer_link', trim($text2));
      }
      if( get_option('footer_textarea') != trim($text3)){
        $variable3 = update_option( 'footer_textarea', trim($text3));
      }
      if( get_option('footer_adresse') != trim($text4)){
        $variable1= update_option( 'footer_adresse', trim($text4));
      }
      if( get_option('footer_number') != trim($phone)){
        $variable4 = update_option( 'footer_number', trim($phone));
      }
    }
?>
<div class="wrap">
  <div >
  <span class="dashicons dashicons-layout"></span> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if(isset($_POST['wphw_submit']) && ($variable1 || $variable2)):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer link and click on save button.</strong></h3>
      <form method="post" action="">
        <table class="form-table">
          <tr>
            <th scope="row">Add About Us</th>
            <td><textarea name="footertextarea" style="width:350px;" 
value="<?php echo get_option('footer_textarea');?>">
            </textarea>
          </td>
          </tr>
          <tr>
            <th scope="row">Add Adresse</th>
            <td><input type="text" name="footeradresse" 
value="<?php echo get_option('footer_adresse');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Add Phone</th>
            <td><input type="tel" name="footerphone" 
value="<?php echo get_option('footer_number');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Add Name</th>
            <td><input type="text" name="footertextname" 
value="<?php echo get_option('footer_text');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Add Link</th>
            <td><input type="text" name="footerlinkname" 
value="<?php echo get_option('footer_link');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
          </td>
        </table>
      </form>
    </div>
  </div>
</div>
