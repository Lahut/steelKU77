# SteelKU77
__จัดทำโดย__
 - นาย ณุมิณร์ งามเงินวรรณ 6010451078
 - นาย ฬะหัฐ ศรีหะรัญ 6010451248
 - นาย อิทธิฤทธิ์ งามสอาด 6010451256
 
 ## ขั้นตอนการติดตั้งระบบ
 1. ทำการ clone project ผ่านคำสั่ง `git clone  https://github.com/Lahut/steelKU77`
 2. จากนั้นดาวน์โหลด laragon  >>>  https://laragon.org/download/ แล้วทำการติดตั้ง
 3. เมื่อติดตั้ง laragon ขึ้นมาแล้วทำการเปิด laragon กดไปที่ terminal
   * เมื่อเข้ามาที่ terminal พิมคำสั่ง `composer global require laravel/installer` เพื่อทำการติดตั้ง laravel
   * จากนั้นพิมคำสั่ง `laravel new __nameproject__`
  4. จะได้ floder ชื่อ __nameproject__ จากนั้นทำการลากไฟล์ที่clone จาก projectนี้ทับใส่ใน floder __nameproject__
  5. ทำการสร้างdatabaseในlaragon โดยตั้งค่าตามนี้ <br />
  `DB_DATABASE=mynews200`<br />
  `DB_USERNAME=mynews200user`<br />
  `DB_PASSWORD=1234`<br />
  6. ทำการแก้ไขไฟล์ .env ดังนี้ <br />
  
`APP_NAME="Pathfinder 200"`<br />
`APP_ENV=local`<br />
`APP_KEY=base64:wGJeotmQPcEJnNRchZoOg38Ecv1xJq54HypfVvlCJEg=`<br />
`APP_DEBUG=true`<br />
`APP_URL=http://localhost`<br />
<br />
`LOG_CHANNEL=stack`<br />
<br />
`DB_CONNECTION=mysql`<br />
`DB_HOST=127.0.0.1`<br />
`DB_PORT=3306`<br />
`DB_DATABASE=mynews200`<br />
`DB_USERNAME=mynews200user`<br />
`DB_PASSWORD=1234`<br />
<br />
`BROADCAST_DRIVER=log`<br />
`CACHE_DRIVER=file`<br />
`QUEUE_CONNECTION=sync`<br />
`SESSION_DRIVER=file`<br />
`SESSION_LIFETIME=120`<br />
<br />
`REDIS_HOST=127.0.0.1`<br />
`REDIS_PASSWORD=null`<br />
`REDIS_PORT=6379`<br />
<br />
`MAIL_DRIVER=smtp`<br />
`MAIL_HOST=smtp.mailtrap.io`<br />
`MAIL_PORT=2525`<br />
`MAIL_USERNAME=null`<br />
`MAIL_PASSWORD=null`<br />
`MAIL_ENCRYPTION=null`<br />
<br />
`AWS_ACCESS_KEY_ID=`<br />
`AWS_SECRET_ACCESS_KEY=`<br />
`AWS_DEFAULT_REGION=us-east-1`<br />
`AWS_BUCKET=`<br />
<br />
`PUSHER_APP_ID=`<br />
`PUSHER_APP_KEY=`<br />
`PUSHER_APP_SECRET=`<br />
`PUSHER_APP_CLUSTER=mt1`<br />
<br />
`MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"`<br />
`MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"`<br />

7.จากนั้นไปที่ directory nameproject พิมคำสั่ง `composer dumpautoload` <br />
8.จากนั้นพิมคำสั่ง `php artisan migrate:refresh --seed` <br />
9.จากนั้นพิมคำสั่ง `php artisan serve` <br />
10.เข้าเว็บไซต์โดยพิมพ์ที่ช่อง url ดังนี้ `localhost:8000` <br />
 
## การเข้าใช้ระบบ

###  ADMIN 
 * username : admin@gmail.com
 * password : adminadmin
 
###  USER
 * สมัครสมาชิกผ่านหน้าเว็บไซต์
 
###  CREATOR


