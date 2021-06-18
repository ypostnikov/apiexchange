**<h2>Exchange currency</h2>**

Current project makes some api for request `http://www.cbr.ru`

**<h2>Requirements</h2>**
- docker, docker-compose
- composer 
- php >=7.4

**<h3>Install</h3>**
Install database
1. configure `DATABASE_FILE` variable inside `db.sh` script
2. ./sh/db.sh {containerUid}. {containerUid} - docker mysql container uid

**<h3>Comments</h3>**
Disabled CSRF token for post and put request

**<h3>Example api</h3>**
- /api/external/get/{data}/{currency?} - get some data(json) at the day('Y-m-d'). Optional params - currency ('JPY')
- /api/collection/save - save any collection into database
- /api/collection/get - get a collection from database
- /api/collection/comment/save - save/update a comment for defined uid collection 

Example data.json

<code>
{"uid":"MjkwNTIwMjE=","date":"2021-05-29","codes":[{"id":"R01010","value":"56,8828","charCode":"AUD"},{"id":"R01020A","value":"43,3119","charCode":"AZN"},{"id":"R01035","value":"104,4567","charCode":"GBP"},{"id":"R01060","value":"14,1302","charCode":"AMD"},{"id":"R01090B","value":"29,0594","charCode":"BYN"},{"id":"R01100","value":"45,8886","charCode":"BGN"},{"id":"R01115","value":"14,0447","charCode":"BRL"},{"id":"R01135","value":"25,7965","charCode":"HUF"},{"id":"R01200","value":"94,8115","charCode":"HKD"},{"id":"R01215","value":"12,0698","charCode":"DKK"},{"id":"R01235","value":"73,5870","charCode":"USD"},{"id":"R01239","value":"89,6731","charCode":"EUR"},{"id":"R01270","value":"10,1599","charCode":"INR"},{"id":"R01335","value":"17,1670","charCode":"KZT"},{"id":"R01350","value":"60,9416","charCode":"CAD"},{"id":"R01370","value":"88,2232","charCode":"KGS"},{"id":"R01375","value":"11,5594","charCode":"CNY"},{"id":"R01500","value":"41,8227","charCode":"MDL"},{"id":"R01535","value":"88,2412","charCode":"NOK"},{"id":"R01565","value":"19,9992","charCode":"PLN"},{"id":"R01585F","value":"18,2440","charCode":"RON"},{"id":"R01589","value":"106,3089","charCode":"XDR"},{"id":"R01625","value":"55,6129","charCode":"SGD"},{"id":"R01670","value":"64,5217","charCode":"TJS"},{"id":"R01700J","value":"85,9591","charCode":"TRY"},{"id":"R01710A","value":"21,0549","charCode":"TMT"},{"id":"R01717","value":"69,4936","charCode":"UZS"},{"id":"R01720","value":"26,7711","charCode":"UAH"},{"id":"R01760","value":"35,2715","charCode":"CZK"},{"id":"R01770","value":"88,7928","charCode":"SEK"},{"id":"R01775","value":"81,9911","charCode":"CHF"},{"id":"R01810","value":"53,2275","charCode":"ZAR"},{"id":"R01815","value":"66,0474","charCode":"KRW"},{"id":"R01820","value":"66,9917","charCode":"JPY"}],"comment":"some"}
</code>
