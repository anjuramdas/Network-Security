# Network-Security

Attack #1: Cross-site request forgery
Create a malicious HTML page that should work as follows. Suppose the victim has logged
into the UT Payroll server, and, while still logged in, visits your HTML page. Your page
should overwrite the victim’s account number and routing number stored on the UT Payroll
server with your own values: 3133731337 and 1000000001 respectively.
Programs: Csrf.php, index2.php

Attack#2: Password theft
Create a malicious HTML page that should work as follows. Assume your victim is not
logged in. Upon visiting your page, the victim should be redirected to http://payroll.
utexas.edu/. When the victim enters a username and password and hits “Log in”, an email
should be sent to user containing the username and password entered by the victim.
Program: index1.php

Attack#3: SQL injection 
Create an HTML page that the tester will open in his browser. The tester will not be logged
in. The HTML page should have a form with a single text field and a submit button (note:
the form should not ask the tester for a password). The tester will type a username into the
text field and submit the form. You can assume the username submitted by the tester is
already associated with a registered account.
As a result, the tester should be logged in as the user whose username he submitted.
The browser’s location bar should be http://payroll.utexas.edu/account.php, and the
page should function exactly as if the correct username and password were entered on the
real site.
Program: sql.html
