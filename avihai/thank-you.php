<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>הוזלת תיק הביטוחים שלכם</title>
	<link rel="apple-touch-icon" sizes="120x120" href="icons/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icons/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icons/fav/favicon-16x16.png">
	<link rel="manifest" href="icons/fav/site.webmanifest">
	<link rel="mask-icon" href="icons/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				
			</div>
		</div>	
	</header>
	<!-- <div class="testlink">TEST LINK</div> -->

	
	<main class="content">
		<div class="container">
			<h1 class="content__title">
				הוזלת תיק הביטוחים שלכם
			</h1>
			<div class="content__img">
			</div>
			<div class="content__form">
<!-- PROGRESS BAR -->
				<div class="form__progressbar">
					<div class="progress-bar">
						<div class="progress-bar__fill-gradient">
							 <div class="progress-bar__text">
								  <span></span>&nbsp;
							 </div>
							 <div class="progress-bar__fill"> </div>
						</div>
				  </div>
				</div>
<!-- FORM SLIDES -->
				<div class="form__content">
	<!-- FORM SLIDE -- 1 -->
					<div class="form__change-item form__change-item_1" id="1">
						<h3 class="form__heading">
							היי! אני אביחי,<br>
	אשמח לבדוק את זכאותך להוזלת<br>
	תיק הביטוחים. מוכנים?
						</h3>
						<input class="form__input" id="user_name" name="user_name" type="text" placeholder="שם מלא" required>
						<button class="form__btn-submit">צא לדרך!</button>
					</div>
	<!-- FORM SLIDE -- 2 -->
					<div class="form__change-item form__change-item_2 form__change-item_hidden" id="2">
						<h3 class="form__heading">
							נעים להכיר, *שם*. מה גילך?
						</h3>
						<div class="form__radio">
							<div class="form__radio-wrapper">
								<input type="radio" id="user_age1"
							 name="user_age" value="">
							<label for="user_age1">מתחת ל-24</label>
							</div>
							<div class="form__radio-wrapper">
								<input type="radio" id="user_age2"
							 name="user_age" value="">
							<label for="user_age2">24 עד 39</label>
							</div>
							<div class="form__radio-wrapper">
								<input type="radio" id="user_age3"
								name="user_age" value="">
								<label for="user_age3">
									40 עד 70</label>
							</div>	
							<div class="form__radio-wrapper">
								<input type="radio" id="user_age4"
							 name="user_age" value="">
							<label for="user_age4">
								71</label>
							</div>
							
							
						 </div>
						<button class="form__btn-submit">צא לדרך!</button>
					</div>
	<!-- FORM SLIDE -- 3 -->				
					<div class="form__change-item form__change-item_3 form__change-item_hidden" id="3">
						<h3 class="form__heading">
							האם יש לך ביטוחים פרטיים כיום?
						</h3>
						<!-- <div class="form__radio horizontal"> -->
							
							<input type="radio" id="user_insurance1"
							name="user_insurance" value="yes" class="form__radio_insurance form__radio_insurance1 form__btn-submit">
							<label for="user_insurance1"></label>
							
							<input type="radio" id="user_insurance2"
							name="user_insurance" value="no" class="form__radio_insurance form__radio_insurance2 form__btn-submit">
							<label for="user_insurance2"></label>
							
						<!-- </div> -->
					</div>

	<!-- FORM SLIDE -- 4 -->
				<div class="form__change-item form__change-item_4 form__change-item_hidden" id="4">
					<h3 class="form__heading">
						מה התשלום החודשי שלך על
ביטוחים כיום?
					</h3>
					<div class="form__radio">
						<div class="form__radio-wrapper">
							<input type="radio" id="user_insurance-payment1"
						name="user_insurance-payment" value="">
						<label for="user_insurance-payment1">בין 0  -  100 ש”ח</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_insurance-payment2"
						name="user_insurance-payment" value="">
						<label for="user_insurance-payment2">בין 100  -  300 ש”ח</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_insurance-payment3"
							name="user_insurance-payment" value="">
							<label for="user_insurance-payment3">
								בין 300  -  500 ש”ח</label>
						</div>	
						<div class="form__radio-wrapper">
							<input type="radio" id="user_insurance-payment4"
						name="user_insurance-payment" value="">
						<label for="user_insurance-payment4">
							מעל 500 ש”ח</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_insurance-payment5"
						name="user_insurance-payment" value="">
						<label for="user_insurance-payment5">
							לא יודע</label>
						</div>
						
						
					</div>
					<button class="form__btn-submit">המשך</button>
				</div>

	<!-- FORM SLIDE -- 5 -->
				<div class="form__change-item form__change-item_5 form__change-item_hidden" id="5">
					<h3 class="form__heading">
						מה התשלום החודשי שלך על
			ביטוחים כיום?
					</h3>
					<div class="form__radio">
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence1"
						name="user_residence" value="">
						<label for="user_residence1">המרכז והשרון
						</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence2"
						name="user_residence" value="">
						<label for="user_residence2">חיפה והקריות</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence3"
							name="user_residence" value="">
							<label for="user_residence3">
								ירושלים והסביבה</label>
						</div>	
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence4"
						name="user_residence" value="">
						<label for="user_residence4">
							מודיעין והסביבה</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence5"
						name="user_residence" value="">
						<label for="user_residence5">
							הגליל והגולן</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence6"
						name="user_residence" value="">
						<label for="user_residence5">
							אריאל והשומרון</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence7"
						name="user_residence" value="">
						<label for="user_residence5">
							אשקלון, אשדוד
<br>והסביבה
</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence8"
						name="user_residence" value="">
						<label for="user_residence5">
							באר שבע והסביבה</label>
						</div>
						<div class="form__radio-wrapper">
							<input type="radio" id="user_residence9"
						name="user_residence" value="">
						<label for="user_residence5">
							המשך</label>
						</div>
						
						
					</div>
					<button class="form__btn-submit">המשך</button>
				</div>

	<!-- FORM SLIDE -- 6 -->
				<div class="form__change-item form__change-item_6 form__change-item_hidden" id="6">
					<h3 class="form__heading">אוקיי, *שם*, אני מוכן להריץ
						את בדיקת הזכאות שלך
					</h3>
					<div class="form__input-wrapper">
						<input class="form__input form__input_mid" id="user_phone" name="user_phone" type="text" placeholder="טלפון*" required>
						<input class="form__input form__input_short" id="user_phone-prefix" name="user_phone-prefix" type="text" placeholder="-05" required>
					</div>
					
					
					<div class="form__subtext">
						אנא וודא שהטלפון נכון - לא ניתן לבצע בדיקה למספר שגוי
					</div>
					<button class="form__btn-submit">בדוק את זכאותי</button>
				</div>

	<!-- FORM SLIDE -- 7 -->
				<div class="form__change-item form__change-item_7  form__change-item_hidden form_thanks" id="7">
					<h3 class="form__heading">תודה!
					</h3>
					<p>
						אנו משקללים כעת את זכאותך
ונציגינו יחזרו אליך במידה ותמצא זכאי
					</p>
					
				</div>
			</div>

				<div class="form__footer">
					<div class="form__footer-wrapper">
						
						<div class="form__footer-link form__footer-link_text-hidden">
							<a href="#" class="form__footer-link_text">
								חזור
							</חזור>
						</div>
						<div class="form__footer-note">
							טופס מאובטח ופרטי
							</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</main>
	
	<footer class="footer">
		<img src="icons/made-by.png" alt="Made by CONVERTIX">
	</footer>

	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
	<!-- <script>
		$('.testlink').click(function () {
    		location.href = "report.php";
		});
	</script> -->
</body>
</html>