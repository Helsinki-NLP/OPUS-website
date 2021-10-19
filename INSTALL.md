

# Apache

```
sudo apt-get update
sudo apt-get install apache2 libapache2-mod-php php-db php7.4-dba
# sudo apt-get install libapache2-mod-wsgi
sudo apt-get install libapache2-mod-wsgi-py3
sudo apt-get install libapache2-mod-perl2
sudo apt-get install awstats
sudo apt-get install python3-pip
```

## Setting up TSL


```
sudo a2enmod ssl
sudo systemctl restart apache2
```

Issue a new certificate from Let's Encrypt: Follow instructions at https://certbot.eff.org/lets-encrypt/ubuntufocal-apache (more information is here: https://letsencrypt.org/getting-started/)

```
sudo snap install core
sudo snap refresh core
sudo snap install --classic certbot
sudo ln -s /snap/bin/certbot /usr/bin/certbot
sudo certbot certonly --apache
```

Edit apache website configuration

```
<VirtualHost *:80>
    ServerName opus.nlpl.eu
    Redirect / https://opus.nlpl.eu/
</VirtualHost>

<VirtualHost *:443>

   SSLEngine on
   SSLCertificateFile /etc/letsencrypt/live/opus.nlpl.eu/fullchain.pem
   SSLCertificateKeyFile /etc/letsencrypt/live/opus.nlpl.eu/privkey.pem

   ServerName opus.nlpl.eu
   DocumentRoot /home/opus/public_html
...
```



# Installing CWB

```
sudo apt-get install bison flex pkgconf libncurses-dev libglib2.0-dev libpcre2-dev libreadline-dev subversion
wget -O cwb-3.4.22-source.tar.gz https://sourceforge.net/projects/cwb/files/cwb/cwb-3.4-beta/cwb-3.4.22-source.tar.gz/download
tar -xzf cwb-3.4.22-source.tar.gz
cd cwb-3.4.22
sudo install-scripts/install-linux
sudo ln -s /usr/local/cwb-3.4.22/bin/* /usr/local/bin/
sudo ln -s /usr/local/cwb-3.4.22/lib/* /usr/local/lib/
sudo ln -s /usr/local/cwb-3.4.22/include/* /usr/local/include/
sudo cp -R /usr/local/cwb-3.4.22/share/man /usr/local/share/

svn co http://svn.code.sf.net/p/cwb/code/perl/trunk cwb-perl
cd cwb-perl
for d in CWB  CWB-CL  CWB-CQI  CWB-Web; do \
  cd $d; \
  perl Makefile.PL; \
  make; \
  sudo make insall; \
  cd ..; \
done
sudo apache2ctl restart
```


# OPUS-API

```
sudo apt-get install python3-flask python3-flask-sqlalchemy
cd /var/www
git clone https://github.com/Helsinki-NLP/OPUS-API.git
```

## TODO

* environment variables are not recognized in wsgi script (even when putting into /etc/envvars)





# mySQL

* install: `sudo apt-get install mysql-server php-mysql phpmyadmin`
* config: add the following lines to `/etc/mysql/my.cnf`

```
[mysqld]

sql_mode = STRICT_TRANS_TABLES
datadir = /media/OPUS/mysql
log-bin = /media/OPUS/mysql/bin-log
log-bin-index = /media/OPUS/mysql/bin-log.index
```

* config: add to `/etc/apparmor.d/usr.sbin.mysqld`

```
/media/OPUS/mysql/ r,
/media/OPUS/mysql/** rwk,
/media/OPUS/mysql-files/ r,
/media/OPUS/mysql-files/** rwk,
```

and run `sudo service apparmor restart`


* create user `opus`

```
sudo mysql

mysql> CREATE USER 'opus'@'localhost' IDENTIFIED BY 'yourPassword';
mysql> GRANT ALL ON *.* TO 'opus'@'localhost';
mysql> flush privileges;
mysql> select user from MySQL.user;
```


* migrate databases using mysqldump

```
## on old server
nohup mysqldump --single-transaction -u opus -p -h localhost opus | gzip -c > opus.sql.gz
nohup mysqldump --single-transaction -u opus -p -h localhost lexicon | gzip -c > lexicon.sql.gz

## on new server (run in screen - nohup does not work!)
zcat opus.sql.gz | mysql --user=opus -v -p opus
zcat lexicon.sql.gz | mysql --user=opus -v -p lexicon
```

* check tables if the mysqldump fails, for example checking all tabels in `lexicon`:

```
sudo service mysql stop
find /media/OPUS/mysql/lexicon -name '*.MYD' | sed 's/.MYD$//' | xargs sudo myisamchk -r -v
sudo service mysql start
```


## TODO

* migrate to MariaDB, simply run:

```
sudo service mysql stop
apt install mariadb-server
```




# Deprecated

* TRAC (better forget about it)

```
mkdir install
cd install/
wget https://download.edgewall.org/trac/Trac-1.4.2.tar.gz
tar -xzf Trac-1.4.2.tar.gz 
cd Trac-1.4.2/
sudo apt-get install python-setuptools
sudo apt-get install python-jinja2
sudo python2.7 setup.py install
sudo apt-get install libapache2-mod-fcgid
```
