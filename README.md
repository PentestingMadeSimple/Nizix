# STEP BY STEP GUIDE

1. Registrati gratis su DigitalOcean:

	https://m.do.co/c/2345374c412c

*COPIATI L INDIRIZZO IP*

2. Crea un droplet e loggati col terminale via ssh:

	``` $ssh root@tuoip ``` 
	
	``` $inserisci la pass ```

3. Fare update del nuovo sistema:

	``` $apt update ```
	 
Ora prima di installare NGINX, controlliamo APACHE che è il server montato di default su Ubuntu.
	 
Poi:

	$apt install nginx -y
	
	$apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip,cli,fpm}
 
4. Abilita i servizi, del server e del PHP:

	``` $systemctl enable nginx.service ```
	
	``` $systemctl enable php7.4-fpm.service ```
 
5. Apri il file di conf di NGINX:

	``` $/etc/nginx/sites-available/default ```

e modifica così:


aggiungi index.php 

	
	location ~ \.php$ {
    		try_files $uri =404;
    		include /etc/nginx/fastcgi_params;
    		fastcgi_pass unix:/run/php/php7.4-fpm.sock;
    		fastcgi_index index.php;
    		fastcgi_param SCRIPT_FILENAME /var/www/html/$fastcgi_script_name;
	}
	

Per sapere se il file di configurazione funzionerà digita:

	$nginx -t
 
Poi riavvio:

	$service php7.4-fpm reload

Restart NGINX:

	$service nginx restart
 
 
 ##################################################################################
 
 
  
 
 
 
