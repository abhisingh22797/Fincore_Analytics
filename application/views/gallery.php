<div class="container-fluid gall">
	<div class="row">
    	<img src="<?php echo base_url() ?>assets/frontend/image/gallery-bannner.png" class="img-responsive"/>
    </div>
</div>

<div class="container-fluid gallery">
	<div class="row">
<div class="container">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Gallery</h1>
        </div>
 <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
			<?php foreach( $allCat as $cat ): ?>
            <button class="btn btn-default filter-button" data-filter="<?= 'gal'.$cat->id ?>"><?= $cat->name ?></button>
			<?php endforeach; ?>
            
        </div>      
         <?php foreach( $allItem as $item ): ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?= 'gal'.$item->id;?>">
                <img src="<?php echo base_url('uploads/gallery/').$item->image; ?>" class="img-responsive">
            </div>
         <?php endforeach; ?>
           
            
        </div>    
   </div>
</div>
<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>