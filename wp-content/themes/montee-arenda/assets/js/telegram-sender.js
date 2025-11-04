// Надежная отправка сообщений в Telegram
class TelegramSender {
    constructor(botToken, chatId) {
        this.botToken = botToken;
        this.chatId = chatId;
        this.apiUrl = `https://api.telegram.org/bot${botToken}/sendMessage`;
    }

    async sendMessage(text) {
        const methods = [
            () => this.sendViaFetch(text),
            () => this.sendViaXHR(text),
            () => this.sendViaImage(text)
        ];

        for (let i = 0; i < methods.length; i++) {
            try {
                console.log(`Попытка ${i + 1}: отправка сообщения`);
                await methods[i]();
                console.log('Сообщение успешно отправлено');
                return true;
            } catch (error) {
                console.error(`Попытка ${i + 1} неудачна:`, error);
                if (i === methods.length - 1) {
                    throw error;
                }
            }
        }
        return false;
    }

    async sendViaFetch(text) {
        const response = await fetch(this.apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                chat_id: this.chatId,
                text: text,
                parse_mode: 'HTML'
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP ${response.status}: ${response.statusText}`);
        }

        return await response.json();
    }

    async sendViaXHR(text) {
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', this.apiUrl, true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        resolve(JSON.parse(xhr.responseText));
                    } else {
                        reject(new Error(`XHR ${xhr.status}: ${xhr.statusText}`));
                    }
                }
            };
            
            xhr.onerror = () => reject(new Error('XHR request failed'));
            
            xhr.send(JSON.stringify({
                chat_id: this.chatId,
                text: text,
                parse_mode: 'HTML'
            }));
        });
    }

    async sendViaImage(text) {
        // Метод через создание изображения (работает в no-cors режиме)
        const params = new URLSearchParams({
            chat_id: this.chatId,
            text: text
        });
        
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.onload = () => resolve(true);
            img.onerror = () => reject(new Error('Image method failed'));
            img.src = `${this.apiUrl}?${params.toString()}`;
        });
    }
}

// Экспортируем для использования
window.TelegramSender = TelegramSender; 