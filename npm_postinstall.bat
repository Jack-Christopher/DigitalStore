@REM Alertify
if exist "assets/alertifyjs" rmdir /S/Q "assets/alertifyjs"
mkdir "assets/alertifyjs"
Xcopy "node_modules/alertifyjs" "assets/alertifyjs" /E/H/C/I

@REM vue.js
if exist "assets/vue" rmdir /S/Q "assets/vue"
mkdir "assets/vue"
Xcopy "node_modules/vue" "assets/vue" /E/H/C/I
