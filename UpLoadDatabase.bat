if not exist _backups mkdir _backups
set filename="_backups/base_%Date:~6,4%.%Date:~3,2%.%Date:~0,2%_%time:~-11,2%.%time:~-8,2%.%time:~-5,2%.sql"
set filename=%filename: =%
echo %filename%
C:\OSPanel\modules\database\MySQL-5.6-x64\bin\mysqldump.exe -uidoctor -pidoctor idoctor > %filename%
C:\OSPanel\modules\database\MySQL-5.6-x64\bin\mysql.exe -uidoctor -pidoctor -e "drop database idoctor"
C:\OSPanel\modules\database\MySQL-5.6-x64\bin\mysql.exe -uidoctor -pidoctor -e "create database idoctor"
C:\OSPanel\modules\database\MySQL-5.6-x64\bin\mysql.exe -uidoctor -pidoctor idoctor < idoctor.sql
