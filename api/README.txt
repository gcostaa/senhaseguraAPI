Author: Gustavo Costa de Oliveira Arruda
Date: 2021/05/11

Description: Integration with the senhasegura API for credentials password 
query (version 1.0)

How to use:

Use the shell script /app/configure.sh to configure API keys:

bash configure.sh init
bash configure.sh reset

- GET

php exec.php module method id/web_service

php exex.php pam get 6

- POST

php exec.php module method id/web_service password type (if have space, use -> "") hostname ip

php exec.php pam post 1 senhasegura senha@123 "Local User" Debian11 192.168.0.132