<?php
$rand = mt_rand();
?>
var chart<?php echo $rand; ?> = new FusionCharts("<?php echo base_url(); ?>flash/charts/Pie3D.swf", "ChartId", "<?php echo $height; ?>", "<?php echo $width; ?>", "0", "0");
chart<?php echo $rand; ?>.setDataXML("<chart caption='<?php echo lang('All Uploads'); ?>' showPercentageValues='0'><set label='<?php echo lang('Anonymous'); ?>' value='<?php echo $this->db->get_where('refrence', array('user' => '0'))->num_rows(); ?>' /><set label='<?php echo lang('Registered'); ?>' value='<?php echo $this->db->get_where('refrence', array('user !=' => '0'))->num_rows(); ?>' /></chart>");
chart<?php echo $rand; ?>.render("chart_data");
