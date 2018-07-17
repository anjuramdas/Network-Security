# Network-Security
Attack #1: Cross-site request forgery
Create a malicious HTML page that should work as follows. Suppose the victim has logged
into the UT Payroll server, and, while still logged in, visits your HTML page. Your page
should overwrite the victim’s account number and routing number stored on the UT Payroll
server with your own values: 3133731337 and 1000000001 respectively.

Attack #2: Cookie theft 
A user named victim has logged into the UT Payroll server. Create a URL that looks like
this (with EVILMAGIC replaced by your exploit):
http://payroll.utexas.edu/account.php?eid=EVILMAGIC
When the logged in victim visits this URL, the victim’s UT Payroll cookie should get
sent by email to user.
The user should notice no difference in the behavior or appearance of the web page
compared to simply typing a username into the text box on http://payroll.utexas.edu/
account.php and hitting Enter. The source of the page can be arbitrarily different, but it
should look and feel exactly the same.

Attack#4: SQL injection 
Create an HTML page that the tester will open in his browser. The tester will not be logged
in. The HTML page should have a form with a single text field and a submit button (note:
the form should not ask the tester for a password). The tester will type a username into the
text field and submit the form. You can assume the username submitted by the tester is
already associated with a registered account.
As a result, the tester should be logged in as the user whose username he submitted.
The browser’s location bar should be http://payroll.utexas.edu/account.php, and the
page should function exactly as if the correct username and password were entered on the
real site.
