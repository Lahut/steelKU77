# SteelKU77
__จัดทำโดย__
 - นาย ณุมิณร์ งามเงินวรรณ 6010451078
 - นาย ฬะหัฐ ศรีหะรัญ 6010451248
 - นาย อิทธิฤทธิ์ งามสอาด 6010451256
 
 ## ขั้นตอนการติดตั้งระบบ
 1. ทำการ clone project ผ่านคำสั่ง `git clone  https://github.com/Lahut/steelKU77`
 2. จากนั้นดาวน์โหลด laragon  >>>  https://laragon.org/download/ แล้วทำการติดตั้ง
 3. เมื่อติดตั้ง laragon ขึ้นมาแล้วทำการเปิด laragon กดไปที่ terminal
 4. copy ข้อมูลในไฟล์ .env.example จากนั้นลบไฟล์ .env.example
 5. สร้างไฟล์ .env จากนั้น paste ข้อมูลลงใน file .env
 6. เปิด laragon จากนั้น กด Start All จากนั้นกด Database
 7. ทางด้านซ้ายกดคลิกขวาที่ laragon จากนั้นเลือก createnew -> database
 8. ตั้งชื่อ database เป็น : mynews200 จากนั้นเลือก collation เป็น utf8_unicode_ci จากนั้นกด ok
 9. จากนั้นกดไปที่ Manager user authentication and privilegs (รูปคน2คน)
 10. จากนั้น กด Add แก้ username : mynews200user และ password : 1234 จากนั้นกด Add object -> เลือก database ที่สร้าง -> กดติ๊กที่ database: mynews200
 11. จากนั้นกด save
 12. กลับไปที่หน้า laragon เลือก terminal แล้ว redirection ไปที่ folder ของ project
 13. พิมพ์คำสั่ง composer install
 14. พิมพ์คำสั่ง php artisan key:generate
 15. พิมพ์คำสั่ง composer dumpautoload
 16. พิมพ์คำสั่ง php artisan migrate:refresh --seed
 17. พิมพ์คำสั่ง php artisan serve
 
## การเข้าใช้ระบบ

###  ADMIN 
 * username : admin@gmail.com
 * password : adminadmin
 
###  USER
 * สมัครสมาชิกผ่านหน้าเว็บไซต์
 
###  CREATOR
 * ถูกเพิ่มได้ด้วย admin


