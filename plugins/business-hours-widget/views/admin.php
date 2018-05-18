<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('Monday to Friday'); ?>">Monday to Friday:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('Monday to Friday'); ?>" name="<?php echo $this->get_field_name('Monday to Friday'); ?>" type="text" value="<?php echo $weekdays; ?>">    
   </p>
   <p><label for="<?php echo $this->get_field_id('Saturday'); ?>">Saturday:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('Saturday'); ?>" name="<?php echo $this->get_field_name('Saturday'); ?>" type="text" value="<?php echo $saturday; ?>">    
   </p>
   <p><label for="<?php echo $this->get_field_id('Sunday'); ?>">Sunday:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('Sunday'); ?>" name="<?php echo $this->get_field_name('Sunday'); ?>" type="text" value="<?php echo $sunday; ?>">    
   </p>

</div>
