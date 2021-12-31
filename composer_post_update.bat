@REM Bootstrap
if exist "assets/bootstrap" rmdir /S/Q "assets/bootstrap"
mkdir "assets/bootstrap"
Xcopy "packages/vendor/twbs/bootstrap/dist" "assets/bootstrap" /E/H/C/I

@REM JQuery
if exist "assets/jquery" rmdir /S/Q "assets/jquery"
mkdir "assets/jquery"
Xcopy "packages/vendor/components/jquery" "assets/jquery" /E/H/C/I