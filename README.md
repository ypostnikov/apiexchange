**<h2>Exchange currency</h2>**

**<h2>Requirements</h2>**
- docker
- composer 
- php >=7.4

**<h3>Comments</h3>**
Установка базы данных - ./sh/db.sh {mysql docker ContainerUid}. Предварительно проверить переменную `DATABASE_FILE`

В примере отключены CSRF для post и put запросов и не используется классическая авторизация для пользователя.

Пакет 1
Example data.json
<code>
{"MTIwODIwMTg=":[{"id":"R01010","value":"48,8090","charCode":"AUD"},{"id":"R01020A","value":"39,3227","charCode":"AZN"},{"id":"R01035","value":"85,3472","charCode":"GBP"},{"id":"R01060","value":"13,8812","charCode":"AMD"},{"id":"R01090B","value":"32,6092","charCode":"BYN"},{"id":"R01100","value":"39,1501","charCode":"BGN"},{"id":"R01115","value":"17,6012","charCode":"BRL"},{"id":"R01135","value":"23,6975","charCode":"HUF"},{"id":"R01200","value":"85,2336","charCode":"HKD"},{"id":"R01215","value":"10,2732","charCode":"DKK"},{"id":"R01235","value":"66,9075","charCode":"USD"},{"id":"R01239","value":"76,6760","charCode":"EUR"},{"id":"R01270","value":"97,0272","charCode":"INR"},{"id":"R01335","value":"18,7277","charCode":"KZT"},{"id":"R01350","value":"50,9966","charCode":"CAD"},{"id":"R01370","value":"97,6395","charCode":"KGS"},{"id":"R01375","value":"97,5598","charCode":"CNY"},{"id":"R01500","value":"40,5869","charCode":"MDL"},{"id":"R01535","value":"80,0272","charCode":"NOK"},{"id":"R01565","value":"17,8334","charCode":"PLN"},{"id":"R01585F","value":"16,4404","charCode":"RON"},{"id":"R01589","value":"93,5240","charCode":"XDR"},{"id":"R01625","value":"48,7557","charCode":"SGD"},{"id":"R01670","value":"71,0195","charCode":"TJS"},{"id":"R01700J","value":"11,1895","charCode":"TRY"},{"id":"R01710A","value":"19,1438","charCode":"TMT"},{"id":"R01717","value":"85,9660","charCode":"UZS"},{"id":"R01720","value":"24,5532","charCode":"UAH"},{"id":"R01760","value":"29,8828","charCode":"CZK"},{"id":"R01770","value":"73,4505","charCode":"SEK"},{"id":"R01775","value":"67,2437","charCode":"CHF"},{"id":"R01810","value":"48,0385","charCode":"ZAR"},{"id":"R01815","value":"59,2209","charCode":"KRW"},{"id":"R01820","value":"60,3559","charCode":"JPY"}]}
</code>

TODO - Добавлен CurrencyExchangeResources. Поменять пакет формата 1 на формат пакета 2(функция save)
Пакет 2
<code>
{"uid":"MjkwNTIwMjE=","date":"2021-05-29","codes":[{"id":"R01010","value":"56,8828","charCode":"AUD"},{"id":"R01020A","value":"43,3119","charCode":"AZN"},{"id":"R01035","value":"104,4567","charCode":"GBP"},{"id":"R01060","value":"14,1302","charCode":"AMD"},{"id":"R01090B","value":"29,0594","charCode":"BYN"},{"id":"R01100","value":"45,8886","charCode":"BGN"},{"id":"R01115","value":"14,0447","charCode":"BRL"},{"id":"R01135","value":"25,7965","charCode":"HUF"},{"id":"R01200","value":"94,8115","charCode":"HKD"},{"id":"R01215","value":"12,0698","charCode":"DKK"},{"id":"R01235","value":"73,5870","charCode":"USD"},{"id":"R01239","value":"89,6731","charCode":"EUR"},{"id":"R01270","value":"10,1599","charCode":"INR"},{"id":"R01335","value":"17,1670","charCode":"KZT"},{"id":"R01350","value":"60,9416","charCode":"CAD"},{"id":"R01370","value":"88,2232","charCode":"KGS"},{"id":"R01375","value":"11,5594","charCode":"CNY"},{"id":"R01500","value":"41,8227","charCode":"MDL"},{"id":"R01535","value":"88,2412","charCode":"NOK"},{"id":"R01565","value":"19,9992","charCode":"PLN"},{"id":"R01585F","value":"18,2440","charCode":"RON"},{"id":"R01589","value":"106,3089","charCode":"XDR"},{"id":"R01625","value":"55,6129","charCode":"SGD"},{"id":"R01670","value":"64,5217","charCode":"TJS"},{"id":"R01700J","value":"85,9591","charCode":"TRY"},{"id":"R01710A","value":"21,0549","charCode":"TMT"},{"id":"R01717","value":"69,4936","charCode":"UZS"},{"id":"R01720","value":"26,7711","charCode":"UAH"},{"id":"R01760","value":"35,2715","charCode":"CZK"},{"id":"R01770","value":"88,7928","charCode":"SEK"},{"id":"R01775","value":"81,9911","charCode":"CHF"},{"id":"R01810","value":"53,2275","charCode":"ZAR"},{"id":"R01815","value":"66,0474","charCode":"KRW"},{"id":"R01820","value":"66,9917","charCode":"JPY"}],"comment":"some"}
</code>
