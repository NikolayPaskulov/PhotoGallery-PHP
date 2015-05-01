<div id="control-panel">
	<ul>
		<li><a href="/photos/add">Add Photo</a></li>
	</ul>
</div>


<div id="photos" class="photo-holder">
	<h1 class="photos-header">Photos</h1>
	<ul>
	    <?php foreach ($this->viewBag['albumPhotos'] as $photo) : ?>
	    	<li title="Click to see comments!"><a href="/photos/id/<?= $photo['id'] ?>">
	    		<h1><?= $photo['name'] ?></h1>
	    		<img src="/<?= $photo['path']?>"/>
	    	</a>
	    	</li>
	    <?php endforeach ?>
	</ul>
</div>

