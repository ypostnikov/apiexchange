**<h2>Exchange currency</h2>**

**<h2>Requirements</h2>**
- docker
- composer 
- php >=7.4

**<h3>Comments</h3>**
Установка базы данных - ./sh/db.sh {containeruid}. Предварительно проверить пременную `DATABASE_FILE`

Выполнение:
<code>
php artisan command:getСurrencyExchange
{data : data dd/mm/yyyy}
{currency : currency `USD`}
{--debug : Enable debug mode}'
</code>
