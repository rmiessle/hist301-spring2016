<?php queue_js_file('featherlight', 'javascripts/vendor'); queue_css_file('featherlight'); ?>
<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>
<style>
	img {width:67%; }
</style>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php if (metadata('item', 'has files')): ?>
			<div id="itemfiles" class="element">
	    		<p style ="font-size: 1.2em;">Click on an image to open up a larger version.</p>
		    		<div class="item-file image-jpeg">
			    		<?php foreach($item->Files as $file) {
						echo '<a class="download-file" data-featherlight="image" href="';
						echo metadata($file, 'uri');
						echo '">';
						echo file_image('fullsize', array('class' => 'full'), $file);
						echo '</a><br><a href="';
						echo metadata($file, 'fullsize_uri');
						echo '" download><strong>Download Original</strong></a><br>';
			    		} ?>
			    	</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h1>Metadata</h1>
			<?php echo all_element_texts('item'); ?>
		</div>
	</div>
</div>
<?php echo foot(); ?>