# Installation

Installer les paquets:

    sudo apt install php mariadb-client mariadb-server php-mysql

Télécharger db.sql sur le drive et le mettre dans /var/www/html.

Lancer mysql. Dans le prompt:

    CREATE USER 'php'@'localhost' IDENTIFIED BY 'jesuistresencolere';
    GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';
    CREATE DATABASE anticipation;

Dans le terminal, importer db.sql:

    mysql -u root -p anticipation < /home/xy/db.sql 

Cloner le projet dans /var/www/html/ ( le point est important ) :

    git clone https://gitlab.com/xy2_/projet-arp .

C'est bon! ^_^
