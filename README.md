# survey-system


 ************سیستم نظرسنجی بر خط آنلاین*********


 
نیاز به نصب wamp  در ویندوز یا  lamp  در اوبونتو و ساختن table  ها و دیتابیس به این صورت :



php "manage.php":



DB_NAme:"YOur Own Database Name ";
IN the panel of your phpmyadmin taskbar>Sql:


CREATE TABLE survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT
);



Type this command , and click "Go" Button:






حال میتوانید در:localhost/survey-system/manage.html پروژه را اجرا کنید داخل پرانتز بگم (حتما داخل درایو C:\wamp64\www) پروژه را قرار دهید تا سرور مجازی شما ساخته شود 
