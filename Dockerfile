FROM php:8.1-cli

# کپی کدهای شما به داخل کانتینر
COPY . /app
WORKDIR /app

# پورت پیش‌فرض برای PHP سرور
EXPOSE 80

# اجرای PHP built-in server روی پورت 80
CMD ["php", "-S", "0.0.0.0:80"]
