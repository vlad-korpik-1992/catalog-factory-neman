$(document).ready(function() {    
    $('.stores__body__link').click(function (e) {
        e.preventDefault();
        let elem = e.target;
        console.log(elem);
		let id = '1' + elem.getAttribute('id');
		$('.stores__body__info').removeClass('stores__body__info--active');
		jQuery("#"+id).addClass('stores__body__info--active');
	});
    $('.partners__items__title').click(function (e) {
        e.preventDefault();
        let elem = e.target;
        console.log(elem);
		let id = '1' + elem.getAttribute('id');
        console.log(id);
		$('.partners__items__content').removeClass('partners__items__content--active');
		jQuery("#"+id).addClass('partners__items__content--active');
	});
    $('.email__box__head__btn').click(function (e) {
        e.preventDefault();
        let elem = e.target;
        console.log(elem);
		let id = '1' + elem.getAttribute('id');
        console.log(id);
		$('.email__box__body').removeClass('email__box__body--active');
		jQuery("#"+id).addClass('email__box__body--active');
	});
    $('.stores__head__link--ourstore').click(function (e) {
        e.preventDefault();
        $('.stores__head__link--ourstore').addClass('stores__head__link--active');
        $('.stores__head__link--partners').removeClass('stores__head__link--active');
        $('.stores__body--ourstore').addClass('stores__body--active');
        $('.stores__body--partners').removeClass('stores__body--active');
	});
    $('.stores__head__link--partners').click(function (e) {
        e.preventDefault();
        $('.stores__head__link--partners').addClass('stores__head__link--active');
        $('.stores__head__link--ourstore').removeClass('stores__head__link--active');
        $('.stores__body--partners').addClass('stores__body--active');
        $('.stores__body--ourstore').removeClass('stores__body--active');
	});
    $('.email__box__head__btn--individuals').click(function (e) {
        e.preventDefault();
        $('.email__box__head__btn--individuals').addClass('email__box__head__btn--active');
        $('.email__box__head__btn--legal').removeClass('email__box__head__btn--active');
	});
    $('.email__box__head__btn--legal').click(function (e) {
        e.preventDefault();
        $('.email__box__head__btn--legal').addClass('email__box__head__btn--active');
        $('.email__box__head__btn--individuals').removeClass('email__box__head__btn--active');
	});
    $('.scrollto a').on('click', function scroll(e) {
		e.preventDefault();
		let href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, {
			duration: 370,
			easing: "linear"
		});
		return false;
	});
    $('.menu__btn').on('click', function (e) {
        e.preventDefault();
        $('.menu__btn').toggleClass('menu__btn--close');
        $('.menu__list').toggleClass('menu__list--active');
        $('.menu__btn-element').toggleClass('menu__btn-element_close');
    });
    $('.cart__info__link').on('click', function (e) {
        e.preventDefault();
        $('.cart__info__feature').toggleClass('cart__info__feature--active');
    });
    $('.cart__info__circle').on('click', function (e) {
        e.preventDefault();
        $('.cart__info__feature').toggleClass('cart__info__feature--active');
    });
    $('.cart__btn').on('click', function (e) {
        e.preventDefault();
        $( ".popup--check" ).addClass('open');
    });
    $('.popup__header_close').on('click', function (e) {
        e.preventDefault();
        $( ".popup--check" ).removeClass('open');
    });
    $('.header__slider__box__items--vertical').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        speed: 4000,
    });
    $('.header__slider__box__items--horisontal').slick({
        slidesToShow: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        speed: 2500,
    });

    /* Edit breadcrumbs link*/
    $("a[href*='shop']")
    .each(function()
    { 
        this.href = this.href.replace(/shop/, 
            "product-category");
    });

    $("span[itemprop='name']")
    .each(function()
    { 
        this.innerHTML = this.innerHTML.replace('Товары', 'Коллекции');
    });

      /* Ajax Check Product*/
    $('#check-send').click(function(e){
        e.preventDefault();
        x = document.getElementById('modalname').value;
        if (x === "") {
            document.getElementById('status__error').textContent = "Укажите Ваше имя";
            return false;
        }
        x = document.getElementById('modalphone').value;
        if (x === "") {
            document.getElementById('status__error').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
                let re = /^\+375[0-9]{9}$/g;
                if(!re.test(x)){
                    document.getElementById('status__error').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
                return false;
            }
        }
        x =  document.getElementById('messages').value;
        if (x === "") {
            document.getElementById('status__error').textContent = "Вы не указали свой город";
            return false;
        }
        $('#status__error').removeClass("error");
        document.getElementById('status__error').textContent = "Отправка...";
        const CheckData = {
            'productsku': $('input[name=productsku]').val(),
            'firstname': $('input[name=modalname]').val(),
            'phone': $('input[name=modalphone]').val(),
            'messages': $('textarea[name=letter]').val(),
        };

    $.ajax({
      url: '/wp-content/themes/factory-neman/check-send.php',
      type: "POST",
      data: CheckData,
      success: function() {
          $('#ajax__form').trigger('reset');
          $('#status__error').text("Ваше сообщение отправлено!");
          setTimeout(function () {
            $('#status__error').text("").addClass("error");
          }, 2000);
      },
      error: function (jqXHR) {
          $('#status__error').text(jqXHR);
      }
    });
  });

    $('#formRepair').click(function(e){
        e.preventDefault();
        if($("#personaldata").is(":checked")) {}
        else{
            document.getElementById('form-status').textContent = "Дайте свое согласие на обработку данных";
            return false;
        }
        x = document.getElementById('firstname').value;
        if (x === "") {
          document.getElementById('form-status').textContent = "Укажите Ваше имя";
          return false;
        }
        x =  document.getElementById('phone').value;
        if (x === "") {
            document.getElementById('form-status').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
            let re = /^\+375[0-9]{9}$/g;
            if(!re.test(x)){
                document.getElementById('form-status').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
                return false;
            }
        }
        x = document.getElementById('messages').value;
        if (x === "") {
          document.getElementById('form-status').textContent = "Вы не написали сообщение";
          return false;
        }
        $('#form-status').removeClass("error");
        document.getElementById('form-status').textContent = "Отправка...";
    
        data = new FormData();
        data.append( 'firstname', $('input[name=firstname]').val());
        data.append( 'phone', $('input[name=phone]').val());
        data.append( 'messages', $('textarea[name=messages]').val());
        const uploadField = document.getElementById("file");
        if(uploadField.files.length >= 6){
            document.getElementById('form-status').textContent = "Запрещено загружать больше 5 файлов";
            return false;
        }
        if(uploadField.files.length >=1){
            for (let i = 0; i < uploadField.files.length; i++){ 
                if(uploadField.files[i].size > 1048576){
                    document.getElementById('form-status').textContent = "Размер файла не должен превышать 1MB";
                    return false;
                }
                if ( /\.(jpe?g|png|PNG|gif|tif|doc|docx|xls|xlsx|csv|pdf|txt|zip|rar)$/i.test(uploadField.files[i].name) === false ){
                    document.getElementById('form-status').textContent = "Не допустимый формат файла"; 
                    return false;
                }
                data.append('file[]', document.getElementById('file').files[i] );
            }
        }
        $.ajax({
          url: '/wp-content/themes/factory-neman/order-custom-tailoring.php',
          type: "POST",
          data: data,
          processData: false,
          contentType: false,
          success: function() {
              $('#form-repair').trigger('reset');
              $("#file").val(null);
              $('#form-status').text("Ваше сообщение отправлено!");
              setTimeout(function () {
                $('#form-status').text("").addClass("error");
              }, 2000);
          },
          error: function (jqXHR) {
              $('#form-status').text(jqXHR);
          }
        });
    });

    $('#emailEntities').click(function(e){
        e.preventDefault();
        if($("#personaldata-entities").is(":checked")) {}
        else{
            document.getElementById('form-status-entities').textContent = "Дайте свое согласие на обработку данных";
            return false;
        }
        x = document.getElementById('firstname-entities').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Укажите ФИО кому Вы хотите обратиться";
          return false;
        }
        x = document.getElementById('entity').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Укажите полное наименование юридического лица";
          return false;
        }
        x =  document.getElementById('phone-entities').value;
        if (x === "") {
            document.getElementById('form-status-entities').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
            let re = /^\+375[0-9]{9}$/g;
            if(!re.test(x)){
                document.getElementById('form-status-entities').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
                return false;
            }
        }
        x = document.getElementById('entity').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Укажите полное наименование юридического лица";
          return false;
        }
        x = document.getElementById('address-entities').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Укажите адрес юридического лица";
          return false;
        }
        x = document.getElementById('surname-entities').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Укажите фамилию, собственное имя, отчество (если таковое имеется) либо инициалы руководителя или лица, уполномоченного в установленном порядке подписывать обращения";
          return false;
        }
        x =  document.getElementById('email-entities').value;
        if (x === "") {
            document.getElementById('form-status-entities').textContent = "Укажите Ваш E-mail";
            return false;
        } else {
            let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(x)){
                document.getElementById('form-status-entities').textContent = "Некорректный E-mail";
                return false;
            }
        }
        x = document.getElementById('messages-entities').value;
        if (x === "") {
          document.getElementById('form-status-entities').textContent = "Вы не написали сообщение";
          return false;
        }
        $('#form-status-entities').removeClass("error");
        document.getElementById('form-status-entities').textContent = "Отправка...";
    
        data = new FormData();
        data.append( 'firstname-entities', $('input[name=firstname-entities]').val());
        data.append( 'entity', $('input[name=entity]').val());
        data.append( 'phone-entities', $('input[name=phone-entities]').val());
        data.append( 'address-entities', $('input[name=address-entities]').val());
        data.append( 'surname-entities', $('input[name=surname-entities]').val());
        data.append( 'email-entities', $('input[name=email-entities]').val());
        data.append( 'messages-entities', $('textarea[name=messages-entities]').val());
        const uploadField = document.getElementById("file-entities");
        if(uploadField.files.length >= 6){
            document.getElementById('form-status-entities').textContent = "Запрещено загружать больше 5 файлов";
            return false;
        }
        if(uploadField.files.length >=1){
            for (let i = 0; i < uploadField.files.length; i++){ 
                if(uploadField.files[i].size > 1048576){
                    document.getElementById('form-status-entities').textContent = "Размер файла не должен превышать 1MB";
                    return false;
                }
                if ( /\.(jpe?g|png|PNG|gif|tif|doc|docx|xls|xlsx|csv|pdf|txt|zip|rar)$/i.test(uploadField.files[i].name) === false ){
                    document.getElementById('form-status-entities').textContent = "Не допустимый формат файла"; 
                    return false;
                }
                data.append('file-entities[]', document.getElementById('file-entities').files[i] );
            }
        }
        $.ajax({
          url: '/wp-content/themes/factory-neman/order-email-entities.php',
          type: "POST",
          data: data,
          processData: false,
          contentType: false,
          success: function() {
              $('#1email2').trigger('reset');
              $("#file-entities").val(null);
              $('#form-status-entities').text("Ваше сообщение отправлено!");
              setTimeout(function () {
                $('#form-status-entities').text("").addClass("error");
              }, 2000);
          },
          error: function (jqXHR) {
              $('#form-status-entities').text(jqXHR);
          }
        });
    });

    $('#emailIndividuals').click(function(e){
        e.preventDefault();
        if($("#personaldata-individuals").is(":checked")) {}
        else{
            document.getElementById('form-status-individuals').textContent = "Дайте свое согласие на обработку данных";
            return false;
        }
        x = document.getElementById('firstname-individuals').value;
        if (x === "") {
          document.getElementById('form-status-individuals').textContent = "Укажите ФИО кому Вы хотите обратиться";
          return false;
        }
        x = document.getElementById('lastname-individuals').value;
        if (x === "") {
          document.getElementById('form-status-individuals').textContent = "Укажите фамилию, собственное имя, отчество (если таковое имеется)";
          return false;
        }
        x =  document.getElementById('phone-individuals').value;
        if (x === "") {
            document.getElementById('form-status-individuals').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
            let re = /^\+375[0-9]{9}$/g;
            if(!re.test(x)){
                document.getElementById('form-status-individuals').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
                return false;
            }
        }
        x = document.getElementById('address-individuals').value;
        if (x === "") {
          document.getElementById('form-status-individuals').textContent = "Укажите адрес места жительства (место пребывания)";
          return false;
        }
        x =  document.getElementById('email-individuals').value;
        if (x === "") {
            document.getElementById('form-status-individuals').textContent = "Укажите Ваш E-mail";
            return false;
        } else {
            let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(x)){
                document.getElementById('form-status-individuals').textContent = "Некорректный E-mail";
                return false;
            }
        }
        x = document.getElementById('messages-individuals').value;
        if (x === "") {
          document.getElementById('form-status-individuals').textContent = "Вы не написали сообщение";
          return false;
        }
        $('#form-status-individuals').removeClass("error");
        document.getElementById('form-status-individuals').textContent = "Отправка...";
    
        data = new FormData();
        data.append( 'firstname-individuals', $('input[name=firstname-individuals]').val());
        data.append( 'lastname-individuals', $('input[name=lastname-individuals]').val());
        data.append( 'phone-individuals', $('input[name=phone-individuals]').val());
        data.append( 'address-individuals', $('input[name=address-individuals]').val());
        data.append( 'email-individuals', $('input[name=email-individuals]').val());
        data.append( 'messages-individuals', $('textarea[name=messages-individuals]').val());
        const uploadField = document.getElementById("file-individuals");
        if(uploadField.files.length >= 6){
            document.getElementById('form-status-individuals').textContent = "Запрещено загружать больше 5 файлов";
            return false;
        }
        if(uploadField.files.length >=1){
            for (let i = 0; i < uploadField.files.length; i++){ 
                if(uploadField.files[i].size > 1048576){
                    document.getElementById('form-status-individuals').textContent = "Размер файла не должен превышать 1MB";
                    return false;
                }
                if ( /\.(jpe?g|png|PNG|gif|tif|doc|docx|xls|xlsx|csv|pdf|txt|zip|rar)$/i.test(uploadField.files[i].name) === false ){
                    document.getElementById('form-status-individuals').textContent = "Не допустимый формат файла"; 
                    return false;
                }
                data.append('file-individuals[]', document.getElementById('file-individuals').files[i] );
            }
        }
        $.ajax({
          url: '/wp-content/themes/factory-neman/order-email-individuals.php',
          type: "POST",
          data: data,
          processData: false,
          contentType: false,
          success: function() {
              $('#1email1').trigger('reset');
              $("#file-individuals").val(null);
              $('#form-status-individuals').text("Ваше сообщение отправлено!");
              setTimeout(function () {
                $('#form-status-individuals').text("").addClass("error");
              }, 2000);
          },
          error: function (jqXHR) {
              $('#form-status-individuals').text(jqXHR);
          }
        });
    });
    $('#filterbtn').click(function(e){
        e.preventDefault();
		let filter = $('#filterform');
		$.ajax({
			url:'/wp-admin/admin-ajax.php',
			data:filter.serialize(),
			type:"POST",
            action: 'myfilter',
			beforeSend:function(xhr){
				filter.find('button').text('Обработка...');
                $(".archive-product").empty().removeClass('similar__box--top');
			},
			success:function(data){
				filter.find('button').text('Подобрать товар');
                if(Boolean(data)){
                    $('.response').html(data); 
                }
				else{
                    data = '<div class="box__full"><p class="message">Поиск не дал результата</p></div>';
                    $('.response').html(data);
                }
			}
		});
		return false;
	});
});
(function(){
    init();

    var g_containerInViewport;
    function init(){
        setStickyContainersSize();
        bindEvents();
    }

    function bindEvents(){
        window.addEventListener("wheel", wheelHandler);        
    }

    function setStickyContainersSize(){
        document.querySelectorAll('.fullpage').forEach(function(container){
            const stikyContainerHeight = container.querySelector('main').scrollWidth;
            container.setAttribute('style', 'height: ' + stikyContainerHeight + 'px');
        });
    }

    function isElementInViewport (el) {
        const rect = el.getBoundingClientRect();
        return rect.top <= 0 && rect.bottom > document.documentElement.clientHeight;
    }

    function wheelHandler(evt){
        
        const containerInViewPort = Array.from(document.querySelectorAll('.fullpage')).filter(function(container){
            return isElementInViewport(container);
        })[0];

        if(!containerInViewPort){
            return;
        }

        var isPlaceHolderBelowTop = containerInViewPort.offsetTop < document.documentElement.scrollTop;
        var isPlaceHolderBelowBottom = containerInViewPort.offsetTop + containerInViewPort.offsetHeight > document.documentElement.scrollTop;
        let g_canScrollHorizontally = isPlaceHolderBelowTop && isPlaceHolderBelowBottom;

        if(g_canScrollHorizontally){
            containerInViewPort.querySelector('main').scrollLeft += evt.deltaY;
        }
    }
})();
const rangeInput = document.querySelectorAll(".range-input input");
const priceInput = document.querySelectorAll(".price-input__items input");

let priceGap = 50;

priceInput.forEach(input=>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(priceInput[0].value),
        maxVal = parseInt(priceInput[1].value);
        
        if((maxVal - minVal >= priceGap) && maxVal <= 1000 ){
            if(e.target.className === "input-min price__number price__number--left"){
                rangeInput[0].value = minVal;
                console.log(minVal);
                $('.filter__progress').css({"left": (minVal / rangeInput[0].max) * 100 + "%"});
            }else{
                rangeInput[1].value = maxVal;
                $('.filter__progress').css({"right": 100 - (maxVal / rangeInput[1].max) * 100 + "%"});
            }
        }
    });
})

rangeInput.forEach(input=>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);
        
        if(maxVal - minVal < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap;
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            $('.filter__progress').css({"left": (minVal / rangeInput[0].max) * 100 + "%"});
            $('.filter__progress').css({"right": 100 - (maxVal / rangeInput[1].max) * 100 + "%"});
        }
    });
})

let fields = document.querySelectorAll('.email__box__file');
    Array.prototype.forEach.call(fields, function (input) {
      let label = input.nextElementSibling,
        labelVal = label.querySelector('.field__file-fake').innerText;
  
      input.addEventListener('change', function (e) {
        let countFiles = '';
        if (this.files && this.files.length >= 1)
          countFiles = this.files.length;
  
        if (countFiles)
          label.querySelector('.field__file-fake').innerText = 'Выбрано файлов: ' + countFiles;
        else
          label.querySelector('.field__file-fake').innerText = labelVal;
      });
    });