<?php
/*
echo "<pre>";
print_r($puurid);
echo "</pre>";
die();
*/
?>
<br/>
<?php foreach($puurid as $id=>$puur){ ?>
<div> 
<h3>Puur <?php echo $id; ?></h3>
<?php foreach($puur as $ids=>$loom){ ?>
<img src="pildid/<?php echo $loom['liik']?>">
<?php } ?>
<?php// print_r($puur);?>
</div>	
<?php } ?>