  	<div class='container' style="margin-top: -40px">
  	    <div class="row">
  	        <div class="col-lg-14">
  	            <h1 class="page-header">Galería de imágenes</h1>
  	            <?php
                    $nums = 1;
                    $sql_banner_top = mysqli_query($con, "select * from banner where estado=1 order by orden ");
                    while ($rw_banner_top = mysqli_fetch_array($sql_banner_top)) {
                    ?>

  	                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
  	                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo']; ?>" data-caption="<?php echo $rw_banner_top['descripcion'];    ?>" data-image="admin/galeria/img/banner/<?php echo $rw_banner_top['url_image']; ?>" data-target="#image-gallery">
  	                        <img  style="width: 100%; height: 280px" class="img-responsive" src="admin/galeria/img/banner/<?php echo $rw_banner_top['url_image']; ?>" alt="Another alt text">
  	                    </a>
  	                </div>
  	            <?php

                        if ($nums % 4 == 0) {
                            echo '<div class="clearfix"></div>';
                        }
                        $nums++;
                    }
                    ?>
  	        </div>
  	    </div>
  	    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	        <div class="modal-dialog">
  	            <div class="modal-content">
  	                <div class="modal-header">
  	                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  	                    <h4 class="modal-title" id="image-gallery-title"></h4>
  	                </div>
  	                <div class="modal-body">
  	                    <center>
  	                        <img id="image-gallery-image" class="img-responsive" src="" style="width:100%; height: 400px;">
  	                    </center>
  	                </div>
  	                <div class="modal-footer">
  	                    <div class="col-md-2">
  	                        <button type="button" class="btn btn-info" id="show-previous-image">Anterior</button>
  	                    </div>

  	                    <div class="col-md-8 text-justify" id="image-gallery-caption">
  	                        This text will be overwritten by jQuery
  	                    </div>

  	                    <div class="col-md-2">
  	                        <button type="button" id="show-next-image" class="btn btn-info">Siguiente</button>
  	                    </div>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>

  	<script>
  	    $(document).ready(function() {
  	        loadGallery(true, 'a.thumbnail');
  	        //This function disables buttons when needed
  	        function disableButtons(counter_max, counter_current) {
  	            $('#show-previous-image, #show-next-image').show();
  	            if (counter_max == counter_current) {
  	                $('#show-next-image').hide();
  	            } else if (counter_current == 1) {
  	                $('#show-previous-image').hide();
  	            }
  	        }
  	        /**
  	         *
  	         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
  	         * @param setClickAttr  Sets the attribute for the click handler.
  	         */

  	        function loadGallery(setIDs, setClickAttr) {
  	            var current_image,
  	                selector,
  	                counter = 0;

  	            $('#show-next-image, #show-previous-image').click(function() {
  	                if ($(this).attr('id') == 'show-previous-image') {
  	                    current_image--;
  	                } else {
  	                    current_image++;
  	                }

  	                selector = $('[data-image-id="' + current_image + '"]');
  	                updateGallery(selector);
  	            });

  	            function updateGallery(selector) {
  	                var $sel = selector;
  	                current_image = $sel.data('image-id');
  	                $('#image-gallery-caption').text($sel.data('caption'));
  	                $('#image-gallery-title').text($sel.data('title'));
  	                $('#image-gallery-image').attr('src', $sel.data('image'));
  	                disableButtons(counter, $sel.data('image-id'));
  	            }

  	            if (setIDs == true) {
  	                $('[data-image-id]').each(function() {
  	                    counter++;
  	                    $(this).attr('data-image-id', counter);
  	                });
  	            }
  	            $(setClickAttr).on('click', function() {
  	                updateGallery($(this));
  	            });
  	        }
  	    });
  	</script>