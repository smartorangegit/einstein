<?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<div class="callback-form-pupop-wrap" id="contactForm">
			<div class="callback-form-pupop">
				<div class="form-corner">
					<div class="form-corner__top form-corner__left"></div>
					<div class="form-corner__top form-corner__right"></div>
					<div class="form-corner__bottom form-corner__right"></div>
					<div class="form-corner__bottom form-corner__left"></div>
					<div>
						<div class="form-caption">Зв'язатися з нами</div>
						<button class="form-btn" id="callback-form-btn-close">X</button>
						<form  id="form999">
							<input class="callback-form-input" name="name" onkeyup="javascript:countme();" type="text" placeholder="Ваше ім’я:" required="required">
							<input class="callback-form-input" name="email" type="email" placeholder="Ваш e-mail:" required="required">
							<input 
								class="callback-form-input" 
								name="tel" 
								type="tel" 
								placeholder="Ваш телефон" 
								required="required">
    <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
    <input  name="metka" class="metka" type="hidden" value="Einstein callback"/>
    <input  name="inn" class="userInn" type="hidden" value="Einstein callback"/>
<button class="callback-form-btn" id="callback-form-btn-close">Відправити</button>
						</form>
					</div>
				</div>
			</div>
			<!-- /end callback__form-pupop -->
		</div>
		<div class="promotions_btn">
			<a href="/news/ustignit-kupiti-kvartiru-za-rozumnoyu-cinoyu/" class="promotions_btn__link">Акційні пропозиції</a>
		</div>
