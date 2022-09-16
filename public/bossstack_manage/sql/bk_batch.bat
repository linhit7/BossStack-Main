For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set mydate=%%c-%%a-%%b)
c:\xampp\mysql\bin\mysqldump -u fund --password="STboui@745@!&149" --opt fund --port="9575" > c:\xampp\www\funds\sql\fund_%mydate%.sql
