Steps to get this project running.
1) Create the Database.
	- Open Xammp
	- Start Apache and MySql services
	- Open Admin for MySql
	- Login as root and no password
	- Create a database with the name specified in the file createDb.txt
	- Go to the SQL tab in the top bar
	- Execute all the queries mentioned in the createDb.txt
	- Verify that all the four tables are created
	- The default database has around 88 different account numbers you can add more in the same format via queries

2) Configure php.ini file.
	- Go to the folder where you have installed Xammp
	- Go to php folder
	- Open the php.ini file
	- Press Ctrl+F and select Direction down and search for "mail function"
	- Comment all the lines in under the mail function subhead using the ";" symbol
	- Now uncomment the sendmail_path parameter
	- Add the path to your sendmail.exe file e.g : sendmail_path = C:\xampp\sendmail\sendmail.exe
	- Save the file

3) Configure the sendmail.ini file.
	- Go to the folder where you have installed Xammp
	- Go to sendmail folder'
	- Open the sendmail.ini file
	- Uncomment the following and configure as follows
		* smtp_server = smtp.gmail.com
		* smtp_port = 587
		* smtp_ssl = tls
		* error_logfile = error.log
		* debug_logfile = debug.log
		* auth_username = your gmail id
		* auth_password = your app password as generated from adding a new app from security tab in your gmail account
						  (follow this : https://support.google.com/mail/answer/185833?hl=en)
		* force_sender = your gmail id
		* hostname = localhost
	- Save the file

4) Using the application
	- Go to Xammp
	- If Apache and MySQL are started then stop them
	- Now start Apache and MySQL again
	- Make sure you have copied the bankX folder under the htdocs folder of Xammp
	- Open your browser
	- Type localhost/bankX/index.php
	- Create your account using the signup option and enjoy using the application