**<h2>Exchange currency</h2>**

**<h2>Requirements</h2>**
- docker
- composer 
- php >=7.4

**<h3>Comments</h3>**
Установка базы данных - ./sh/db.sh {containeruid}. Предварительно проверить переменную `DATABASE_FILE`

В примере отключены CSRF для post и put запросов и не используется классическая авторизация для пользователя.

Example data.json
<code>
{"MTIwODIwMTg=":[{"id":"R01010","value":"48,8090","charCode":"AUD"},{"id":"R01020A","value":"39,3227","charCode":"AZN"},{"id":"R01035","value":"85,3472","charCode":"GBP"},{"id":"R01060","value":"13,8812","charCode":"AMD"},{"id":"R01090B","value":"32,6092","charCode":"BYN"},{"id":"R01100","value":"39,1501","charCode":"BGN"},{"id":"R01115","value":"17,6012","charCode":"BRL"},{"id":"R01135","value":"23,6975","charCode":"HUF"},{"id":"R01200","value":"85,2336","charCode":"HKD"},{"id":"R01215","value":"10,2732","charCode":"DKK"},{"id":"R01235","value":"66,9075","charCode":"USD"},{"id":"R01239","value":"76,6760","charCode":"EUR"},{"id":"R01270","value":"97,0272","charCode":"INR"},{"id":"R01335","value":"18,7277","charCode":"KZT"},{"id":"R01350","value":"50,9966","charCode":"CAD"},{"id":"R01370","value":"97,6395","charCode":"KGS"},{"id":"R01375","value":"97,5598","charCode":"CNY"},{"id":"R01500","value":"40,5869","charCode":"MDL"},{"id":"R01535","value":"80,0272","charCode":"NOK"},{"id":"R01565","value":"17,8334","charCode":"PLN"},{"id":"R01585F","value":"16,4404","charCode":"RON"},{"id":"R01589","value":"93,5240","charCode":"XDR"},{"id":"R01625","value":"48,7557","charCode":"SGD"},{"id":"R01670","value":"71,0195","charCode":"TJS"},{"id":"R01700J","value":"11,1895","charCode":"TRY"},{"id":"R01710A","value":"19,1438","charCode":"TMT"},{"id":"R01717","value":"85,9660","charCode":"UZS"},{"id":"R01720","value":"24,5532","charCode":"UAH"},{"id":"R01760","value":"29,8828","charCode":"CZK"},{"id":"R01770","value":"73,4505","charCode":"SEK"},{"id":"R01775","value":"67,2437","charCode":"CHF"},{"id":"R01810","value":"48,0385","charCode":"ZAR"},{"id":"R01815","value":"59,2209","charCode":"KRW"},{"id":"R01820","value":"60,3559","charCode":"JPY"}]}
</code>
