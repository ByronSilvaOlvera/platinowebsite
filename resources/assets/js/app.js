document.addEventListener("DOMContentLoaded", function() {
	let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
	let active = false;
  
	const lazyLoad = function() {
	  if (active === false) {
		active = true;
  
		setTimeout(function() {
		  lazyImages.forEach(function(lazyImage) {
			if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
			  lazyImage.src = lazyImage.dataset.src;
			  lazyImage.srcset = lazyImage.dataset.srcset;
			  lazyImage.classList.remove("lazy");
  
			  lazyImages = lazyImages.filter(function(image) {
				return image !== lazyImage;
			  });
  
			  if (lazyImages.length === 0) {
				document.removeEventListener("scroll", lazyLoad);
				window.removeEventListener("resize", lazyLoad);
				window.removeEventListener("orientationchange", lazyLoad);
			  }
			}
		  });
  
		  active = false;
		}, 200);
	  }
	};
  
	document.addEventListener("scroll", lazyLoad);
	window.addEventListener("resize", lazyLoad);
	window.addEventListener("orientationchange", lazyLoad);
  });  
$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	var toggleService;
	$('.btn-service').on( 'click' , function( event ) {
		event.preventDefault()
		$('.btn-service').removeClass('active')
		$('.service-tab').fadeOut(125).removeClass('active').delay(0)
		var btn = $(this).attr('tab');
		if ( toggleService == btn ) {
			toggleService = null
		} else {
			toggleService = btn
			$(this).addClass('active')
		}
		if ( toggleService ) {
			$('.service-' + toggleService ).addClass('active').fadeIn(125);
		}
		
	})
	$('a.btn-profiles').on( 'click', function(event) {
		event.preventDefault()
		console.log( 'LISTO' )
		var $that = $(this)
		$that.parent().siblings().removeClass('active')
		$that.parent().addClass('active')
	} )
	$('#modalVideo').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var video = button.data('video') 
		var modal = $(this)
		var html = '<video width="100%" autoplay controls>'+
			'<source src="/video/'+video+'.mp4" type="video/mp4">'+
		'</video>'
		modal.find('.modal-body').html(html)
	  })
	$('#modalVideo').on('hidden.bs.modal', function (e) {
	var modal = $(this)
	modal.find('.modal-body').html('')
	})
	$('#modalVideoSchool').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var video = button.data('video') 
		var modal = $(this)
		var html = '<video width="100%" autoplay controls>'+
			'<source src="/video/'+video+'.mp4" type="video/mp4">'+
		'</video>'
		modal.find('.modal-body').html(html)
	  })
	$('#modalVideoSchool').on('hidden.bs.modal', function (e) {
	var modal = $(this)
	modal.find('.modal-body').html('')
	})
	$(document).on('click', 'a.moveService', function (event) {
		
		$('html, body').delay(250).animate({
			scrollTop: $('#service_' ).offset().top
		}, 500);
	});
	
	$('.btn-menu').on('click', function() {
		$('menu.menu').toggleClass('open')
	})

	$('.btnCalendar').click( function() {
		$('body').addClass('open-schedule');
		$('.sidenav-schedule').fadeIn();
		
		setTimeout( function(){
			$(".chosen-select").chosen({disable_search_threshold: 10});
		} , 0 )
	})
	$('.closeCalendar').click( function() {
		$('body').removeClass('open-schedule');
		$('.sidenav-schedule').fadeOut();
	})
	$('.btnQuotation').click( function() {
		$('body').addClass('open-quotation');
		$('.sidenav-quotation').fadeIn();
		
		setTimeout( function(){
			$(".chosen-select").chosen({disable_search_threshold: 10});
		} , 0 )
	})
	$('.closeQuotation').click( function() {
		$('body').removeClass('open-quotation');
		$('.sidenav-quotation').fadeOut();
	})
	var moveVideo = 0
	$('#btnPrevVideo').click( function() {
		if ( moveVideo ) {
			moveVideo--;

			var pos = moveVideo * -25
			
			$('.video-box .list-video').css({
				transform : 'translateX( ' +pos + 'vw )'
			})
		}
	})
	$('#btnNextVideo').click( function() {
		if ( moveVideo < 4 ) {
			moveVideo++;
			var pos = moveVideo * -25
			
			$('.video-box .list-video').css({
				transform : 'translateX( ' +pos + 'vw )'
			})
		}
	})
    $('form.form-contact').submit(function(e) {
        e.preventDefault();

        var $form = $(this);
        //show some response on the button
        
		$form.find('button.submit').each(function() {
			$btn = $(this);
			$btn.prop('type','button' );
			$btn.prop('orig_label',$btn.text());
			$btn.text('Enviando...');
		});

        $.ajax({
            type: "POST",
            url: $form.attr('action'),
            data: $form.serialize(),
            dataType: 'json',
            success: function( data ) {
				
				if (data.status == true) {
					$form.trigger("reset")
					$form.find('.submit').hide();
					$form.find('.alert-success').fadeIn().delay(3000).fadeOut( function(){
						$form.find('button.submit').each(function() {
							$btn = $(this);
							label = $btn.prop('orig_label');
							if( label )  {
								$btn.prop('type','submit' );
								$btn.text(label);
								$btn.prop('orig_label','');
							}
							$btn.show();
						});
					})
				} else {
					$form.find('button.submit').each(function() {
						$btn = $(this);
						label = $btn.prop('orig_label');
						if(label) {
							$btn.prop('type','submit' );
							$btn.text(label);
							$btn.prop('orig_label','');
						}
					});
				}
			}
        });
    });
    // function schedule_submit(data) {
    //     $form = $('form.form-contact');
    //     if (data.status == true) {
    //         $form.get(0).reset()
    //         $form.find('.submit').hide();
	// 		$form.find('.alert-success').fadeIn().delay(3000).fadeOut( function(){
	// 			$form.find('button.submit').each(function() {
	// 				$btn = $(this);
	// 				label = $btn.prop('orig_label');
	// 				if( label )  {
	// 					$btn.prop('type','submit' );
	// 					$btn.text(label);
	// 					$btn.prop('orig_label','');
	// 				}
	// 				$btn.show();
	// 			});
	// 		})
    //     } else {
    //         $form.find('button.submit').each(function() {
	// 			$btn = $(this);
	// 			label = $btn.prop('orig_label');
	// 			if(label) {
	// 				$btn.prop('type','submit' );
	// 				$btn.text(label);
	// 				$btn.prop('orig_label','');
	// 			}
	// 		});
	// 	}
		
	// }
	$('#date_schedule').datepicker({
		language: 'es',
		autoClose : true,
		dateFormat: 'yyyy/mm/dd',
		minDate: new Date() ,
		onRenderCell: function (date, cellType) {
			console.log( cellType )
		}
	});
});
