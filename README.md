# 🟢 Telegram Online

Автоматический скрипт для отображения статуса "онлайн" в Telegram в определенные "красивые" моменты времени.

**Репозиторий:** [https://github.com/mr-Abdrahimov/tg-online](https://github.com/mr-Abdrahimov/tg-online)

## 📖 Описание

Этот проект позволяет автоматически показывать ваш статус "онлайн" в Telegram только в определенные моменты времени:
- **Одинаковые цифры**: `00:00`, `11:11`, `22:22`
- **Круглые времена**: `00:00`, `01:00`, `02:00`, `03:00`, `04:00`, `05:00`, `06:00`, `07:00`, `08:00`, `09:00`, `10:00`, `11:00`, `12:00`, `13:00`, `14:00`, `15:00`, `16:00`, `17:00`, `18:00`, `19:00`, `20:00`, `21:00`, `22:00`, `23:00`

Скрипт автоматически проверяет текущее время каждую секунду и обновляет статус на "онлайн" примерно на 15-й секунде после наступления "красивого" времени.

## 🚀 Как запустить

### Требования

- Docker
- Аккаунт Telegram

### Установка и запуск

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/mr-Abdrahimov/tg-online.git
   cd tg-online
   ```
   Или скачайте файлы проекта с [GitHub](https://github.com/mr-Abdrahimov/tg-online)

2. Запустите скрипт:

   **Для Linux/macOS:**
   ```bash
   ./run_docker.sh
   ```

   **Для Windows:**
   ```cmd
   run_docker.bat
   ```
   Или просто дважды кликните на файл `run_docker.bat`

3. **При первом запуске:**
   - Вам будет предложено ввести данные вашего Telegram аккаунта (номер телефона и код подтверждения)
   - После успешной авторизации сессия будет сохранена в папке `session.madeline`

4. **При последующих запусках:**
   - Скрипт автоматически запустится в фоновом режиме в Docker контейнере
   - Контейнер будет работать постоянно и проверять время каждую секунду

### Остановка

**Для Linux/macOS:**
```bash
docker stop telegram_online
docker rm telegram_online
```

**Для Windows:**
```cmd
docker stop telegram_online
docker rm telegram_online
```

## 🔧 Как это работает

Скрипт использует библиотеку [MadelineProto](https://github.com/danog/MadelineProto) для работы с Telegram API. 

Алгоритм работы:
1. Скрипт запускается и подключается к вашему Telegram аккаунту
2. Каждую секунду проверяет текущее время
3. Если время является "красивым" (одинаковые цифры или круглое время) и секунда находится в диапазоне 15-20, обновляет статус на "онлайн"
4. В остальное время статус не обновляется

## 📝 Файлы проекта

- `online.php` - основной скрипт, который проверяет время и обновляет статус
- `run_docker.sh` - скрипт для запуска в Docker контейнере (Linux/macOS)
- `run_docker.bat` - скрипт для запуска в Docker контейнере (Windows)
- `session.madeline/` - папка с сохраненной сессией (создается автоматически)

## ⚠️ Важно

- Не удаляйте папку `session.madeline` - в ней хранится ваша авторизованная сессия
- При первом запуске потребуется ввод номера телефона и кода подтверждения из Telegram
- Скрипт работает только когда Docker контейнер запущен

## 📚 Основано на

- [esin/telegram_online](https://github.com/esin/telegram_online) - исходный проект, на основе которого создан этот форк
- [danog/MadelineProto](https://github.com/danog/MadelineProto) - PHP библиотека для работы с Telegram API

---

# 🟢 Telegram Online

Automatic script to display "online" status in Telegram at specific "beautiful" time moments.

**Repository:** [https://github.com/mr-Abdrahimov/tg-online](https://github.com/mr-Abdrahimov/tg-online)

## 📖 Description

This project allows you to automatically show your "online" status in Telegram only at specific time moments:
- **Same digits**: `00:00`, `11:11`, `22:22`
- **Round times**: `00:00`, `01:00`, `02:00`, `03:00`, `04:00`, `05:00`, `06:00`, `07:00`, `08:00`, `09:00`, `10:00`, `11:00`, `12:00`, `13:00`, `14:00`, `15:00`, `16:00`, `17:00`, `18:00`, `19:00`, `20:00`, `21:00`, `22:00`, `23:00`

The script automatically checks the current time every second and updates the status to "online" approximately at the 15th second after a "beautiful" time occurs.

## 🚀 How to Run

### Requirements

- Docker
- Telegram account

### Installation and Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/mr-Abdrahimov/tg-online.git
   cd tg-online
   ```
   Or download project files from [GitHub](https://github.com/mr-Abdrahimov/tg-online)

2. Run the script:

   **For Linux/macOS:**
   ```bash
   ./run_docker.sh
   ```

   **For Windows:**
   ```cmd
   run_docker.bat
   ```
   Or simply double-click the `run_docker.bat` file

3. **On first run:**
   - You will be prompted to enter your Telegram account details (phone number and confirmation code)
   - After successful authorization, the session will be saved in the `session.madeline` folder

4. **On subsequent runs:**
   - The script will automatically start in the background in a Docker container
   - The container will run continuously and check the time every second

### Stopping

**For Linux/macOS:**
```bash
docker stop telegram_online
docker rm telegram_online
```

**For Windows:**
```cmd
docker stop telegram_online
docker rm telegram_online
```

## 🔧 How It Works

The script uses the [MadelineProto](https://github.com/danog/MadelineProto) library to work with the Telegram API.

Algorithm:
1. The script starts and connects to your Telegram account
2. Checks the current time every second
3. If the time is "beautiful" (same digits or round time) and the second is in the range of 15-20, updates the status to "online"
4. At other times, the status is not updated

## 📝 Project Files

- `online.php` - main script that checks time and updates status
- `run_docker.sh` - script to run in Docker container (Linux/macOS)
- `run_docker.bat` - script to run in Docker container (Windows)
- `session.madeline/` - folder with saved session (created automatically)

## ⚠️ Important

- Do not delete the `session.madeline` folder - it stores your authorized session
- On first run, you will need to enter your phone number and confirmation code from Telegram
- The script only works when the Docker container is running

## 📚 Based on

- [esin/telegram_online](https://github.com/esin/telegram_online) - original project this fork is based on
- [danog/MadelineProto](https://github.com/danog/MadelineProto) - PHP library for working with Telegram API
