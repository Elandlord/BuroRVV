(function ($, root, undefined) {
	
	$(function () {
		'use strict';
		
		var validated = false;
		$('form.validate').on('submit', function(e){
			if( validated === false ){
				e.preventDefault();
				
				var success = true;
				// Required fields
				$(this).find('select[required],input[required],textarea[required]').each(function(){
					if( !$(this).val() ){
						success = false;
						if( !$(this).hasClass('validation-failed') ){
							$(this)
								.after('<div class="validation-note">Oeps! Deze moet je ook nog invullen.</div>')
								.addClass('validation-failed')
								.one(
									'change keyup',
									function(){
										$(this).removeClass('validation-failed').find(' + .validation-note').remove();
									}
								);
						}
					}
				});
				
				if( success === true ){
					validated = true;
					$(this).submit();
				}else{
					$('html, body').animate({
						scrollTop: ($('.validation-failed').first().offset().top - 20)
					}, 400);
				}
			}
		});
		
		$('a, button').on('mouseup', function( e ){
			this.blur();
		});
		
		$('.header__navigation__menu__list ul li a[href=""]').on('click', function( e ){
			e.preventDefault();
		});
		
		$('input:checkbox').keypress(function(e){
			if((e.keyCode ? e.keyCode : e.which) == 13){
				$(this).trigger('click');
			}
		});
		
		$('.header__navigation__menu').addClass('header__navigation__menu--js');
		
		$('.header__navigation__toggle-input').on('change', function(e){
			var checkbox = this;
			if( $(checkbox).attr('checked') ){
				
				$('.header__navigation__menu')
					.removeClass('header__navigation__menu--hidden');
			}else{
				$('.header__navigation__menu')
					.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						if( !$(checkbox).attr('checked') ){
							$(this).addClass('header__navigation__menu--hidden');
						}
					});
			}
		});
		
		$('.header__navigation__menu__list ul li ul').each(function(){
			var removeShowClass = null,
				opened = false,
				that = $(this);
				
			that.on('mouseleave', function(){
				
				
				that.addClass('show');
				opened = true;
				
				if( removeShowClass !== null ){
					clearTimeout(removeShowClass);
				}
				
				removeShowClass = setTimeout(function(){
					that.removeClass('show');
					opened = false;
				}, 500);
			});
			
			that.on('mouseenter', function(){
				that.addClass('show');
				opened = true;
				
				if( removeShowClass !== null ){
					clearTimeout(removeShowClass);
				}
			});
		});
		
	});
	
})(jQuery, this);
