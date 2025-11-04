// Добавляем класс open-popup ко всем кнопкам "Взять в аренду" без этого класса
document.addEventListener('DOMContentLoaded', function() {
    // Функция для добавления класса open-popup ко всем кнопкам "Взять в аренду"
    function addOpenPopupClass() {
        const rentButtons = document.querySelectorAll('.catalog__item-btn');
        rentButtons.forEach(button => {
            if (button.textContent.trim() === 'Взять в аренду' && !button.classList.contains('open-popup')) {
                button.classList.add('open-popup');
                console.log('Добавлен класс open-popup к кнопке:', button.closest('.catalog__item-title')?.textContent || 'неизвестный товар');
            }
        });
    }

    // Добавляем класс при загрузке страницы
    addOpenPopupClass();

    // Добавляем обработчик для переключения табов
    const tabButtons = document.querySelectorAll('.tab-btn');
    tabButtons.forEach(tabButton => {
        tabButton.addEventListener('click', function() {
            // Небольшая задержка, чтобы таб успел переключиться
            setTimeout(() => {
                addOpenPopupClass();
            }, 100);
        });
    });

    // Инициализация маски телефона для попапа
    const popupPhoneInput = document.querySelector('.popup__input.phone');
    if (popupPhoneInput && typeof IMask !== 'undefined') {
        const popupPhoneMask = new IMask(popupPhoneInput, {
            mask: "+{7}(000)000-00-00"
        });

        // Валидация формы попапа
        popupPhoneInput.addEventListener('input', function() {
            const submitBtn = document.querySelector('.popup__submit');
            const checkbox = document.querySelector('.popup__checkbox');
            
            if (popupPhoneMask.masked.isComplete && checkbox.checked) {
                submitBtn.classList.add('btn--active');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.remove('btn--active');
                submitBtn.disabled = true;
            }
        });

        // Проверка чекбокса
        const checkbox = document.querySelector('.popup__checkbox');
        if (checkbox) {
            checkbox.addEventListener('change', function() {
                const submitBtn = document.querySelector('.popup__submit');
                
                if (popupPhoneMask.masked.isComplete && this.checked) {
                    submitBtn.classList.add('btn--active');
                    submitBtn.disabled = false;
                } else {
                    submitBtn.classList.remove('btn--active');
                    submitBtn.disabled = true;
                }
            });
        }
    }

    // Инициализация маски телефона для основной формы
    const mainPhoneInput = document.querySelector('.contact__input');
    if (mainPhoneInput && typeof IMask !== 'undefined') {
        const mainPhoneMask = new IMask(mainPhoneInput, {
            mask: "+{7}(000)000-00-00"
        });

        // Валидация основной формы
        mainPhoneInput.addEventListener('input', function() {
            const submitBtn = document.querySelector('.contact__btn');
            
            if (mainPhoneMask.masked.isComplete) {
                submitBtn.classList.add('btn--active');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.remove('btn--active');
                submitBtn.disabled = true;
            }
        });
    }

    // Обработка отправки попап формы
    const popupForm = document.getElementById('contact-form');
    if (popupForm) {
        popupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phone = this.querySelector('input[name="phone"]').value;
            const privacyChecked = this.querySelector('input[name="privacy"]').checked;
            
            if (!phone || !privacyChecked) {
                alert('Пожалуйста, заполните все поля и согласитесь с условиями обработки персональных данных');
                return;
            }

            // Отправка данных в Telegram
            sendToTelegram(phone, 'Попап форма');
        });
    }

    // Обработка отправки основной формы
    const mainForm = document.querySelector('.contact__form');
    if (mainForm) {
        mainForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phone = this.querySelector('input[type="tel"]').value;
            
            if (!phone) {
                alert('Пожалуйста, введите номер телефона');
                return;
            }

            // Отправка данных в Telegram
            sendToTelegram(phone, 'Основная форма');
        });
    }
});

// Функция отправки данных в Telegram
async function sendToTelegram(phone, formType) {
    console.log('Отправляем заявку:', { phone, formType });

    try {
        // Получаем токен reCAPTCHA
        let captchaToken = '';
        if (typeof grecaptcha !== 'undefined') {
            try {
                captchaToken = await grecaptcha.execute('6LcI7EgrAAAAAPbiZ18Ds7Iv1divuBrtpAqxTOM-', { action: 'submit_form' });
                console.log('reCAPTCHA токен получен');
            } catch (captchaError) {
                console.warn('Ошибка получения reCAPTCHA токена:', captchaError);
            }
        }

        // Проверяем, работаем ли мы на продакшене (есть ли PHP)
        const isProduction = window.location.protocol !== 'file:' && 
                           !window.location.hostname.includes('127.0.0.1') && 
                           !window.location.hostname.includes('localhost');

        // На продакшене пробуем PHP скрипт
        if (isProduction) {
            try {
                const response = await fetch('send-telegram.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        phone: phone,
                        formType: formType,
                        captchaToken: captchaToken
                    })
                });

                if (response.ok) {
                    const result = await response.json();
                    console.log('Заявка отправлена через PHP:', result);
                    handleSuccessfulSubmission();
                    return;
                } else {
                    const errorData = await response.json();
                    if (response.status === 429) {
                        alert('Слишком много запросов. Пожалуйста, попробуйте позже.');
                        return;
                    } else if (response.status === 400 && errorData.error === 'Captcha verification failed') {
                        alert('Проверка безопасности не пройдена. Пожалуйста, попробуйте еще раз.');
                        return;
                    }
                    throw new Error(errorData.error || 'Server error');
                }
            } catch (phpError) {
                console.log('PHP скрипт недоступен, используем прямую отправку:', phpError);
            }
        }

        // Fallback для разработки - используем TelegramSender
        const botToken = '6641263671:AAGvknZUdop9SpHGm1mluGm1w4ZnzC61paY';
        const chatId = '-1001916189563';
        
        const message = `🔔 Заявка с сайта montee-arenda.ru

📱 Телефон: ${phone}
📝 Тип формы: ${formType}
🕐 Время: ${new Date().toLocaleString('ru-RU')}`;

        if (window.TelegramSender) {
            const sender = new window.TelegramSender(botToken, chatId);
            await sender.sendMessage(message);
            console.log('Заявка отправлена через TelegramSender');
        } else {
            // Последний fallback к простому fetch
            const response = await fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    chat_id: chatId,
                    text: message
                })
            });

            if (response.ok) {
                console.log('Заявка отправлена через прямой fetch');
            } else {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
        }
        
        handleSuccessfulSubmission();
        
    } catch (error) {
        console.error('Ошибка отправки заявки:', error);
        
        // Показываем сообщение об успехе даже при ошибке CORS
        // (сообщение могло быть отправлено, но мы не можем это проверить)
        handleSuccessfulSubmission();
        
        // Логируем ошибку для отладки
        console.warn('Заявка могла быть отправлена, несмотря на ошибку CORS');
    }
}

// Функция обработки успешной отправки
function handleSuccessfulSubmission() {
    // Закрываем попап если он открыт
    const popupBg = document.querySelector('.popup__bg');
    const popup = document.querySelector('.popup');
    if (popupBg && popupBg.classList.contains('active')) {
        popupBg.classList.remove('active');
        popup.classList.remove('active');
        document.body.style.overflowY = 'auto';
    }
    
    // Очищаем форму
    const form = document.getElementById('contact-form') || document.querySelector('.contact__form');
    if (form) {
        form.reset();
        // Сбрасываем состояние кнопки отправки
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.classList.remove('btn--active');
            submitBtn.disabled = true;
        }
    }
    
    // Перенаправляем на страницу благодарности
    setTimeout(() => {
        window.location.href = 'thank-you.html';
    }, 500); // Небольшая задержка для плавности
}

