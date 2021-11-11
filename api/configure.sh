#!/bin/bash


function init(){

echo -e "ENTER VAULT IP OR DNS:..."
read VAULT

echo -e "ENTER THE CONSUMER KEY:..."
read CONSUMER_KEY

echo -e "ENTER THE TOKEN:..."
read TOKEN

sed -i "s/var1/$CONSUMER_KEY/" app/config.json
sed -i "s/var2/$TOKEN/" app/config.json
sed -i "s/var3/$VAULT/" app/config.json
}


if [ $@ == 'init' ]
then

echo "Configurando arquivo config.json...."

configure

elif [ $@ == 'reset' ]
then

$(echo "ewogICAgImtleXMiOnsKICAgICAgICAib2F1dGhfY29uc3VtZXJfa2V5IjoidmFyMSIsCiAgICAg
ICAgIm9hdXRoX3NpZ25hdHVyZSI6Ii0iLAogICAgICAgICJvYXV0aF90b2tlbiI6InZhcjIiLAog
ICAgICAgICJ2YXVsdCI6InZhcjMiCiAgICB9Cn0K" | base64 -d > teste.json )

else

echo "Invalid parameter!"
exit

fi
