@echo off

rem -------------------------------------------------------------
rem  Yii command line init script for Windows.
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0


if "%PHP_COMMAND%" == "" set PHP_COMMAND=E:\phpstudy\PHPTutorial\php\php-5.5.38\php.exe

"%PHP_COMMAND%" "%YII_PATH%init" %*

@endlocal