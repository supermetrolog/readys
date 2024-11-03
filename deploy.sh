#!/bin/bash

set -e # Выход из скрипта, если команда завершается с ненулевым статусом (кроме команд в условных операторах и операторах управления).
set -u # Рассматривать неустановленные переменные и параметры как ошибку при подстановке.
set -x # Выводить команды и их аргументы во время выполнения.
set -o pipefail #Возвращать статус последней команды в пайплайне, которая завершилась с ошибкой.

# Путь к папке, где должен быть клонирован репозиторий
REPO_PATH=/home/user/web/industry.realtor.test.ru/public_html

# URL вашего репозитория
REPO_URL=git@github.com:supermetrolog/readys.git

echo "Change workdir..."
cd $REPO_PATH

# Проверяем, существует ли папка репозитория
if [ -d "$REPO_PATH/.git" ]; then
  # Переходим в папку репозитория и выполняем git pull
  echo "Pull repository..."
  git pull
else
  # Клонируем репозиторий, если папка не существует
  echo "Clone repository..."
  git clone "$REPO_URL" "."
fi


echo "Install dependencies..."
composer install

echo "Change owner..."
chown user:www-data -R $REPO_PATH

echo "Change mod..."
chmod 775 -R $REPO_PATH
