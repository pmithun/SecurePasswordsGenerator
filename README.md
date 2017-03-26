# SecurePasswordsGenerator [SPG]

## Summary

The project helps in creating multiple secure passwords that are hard to crack. The algorithm uses multiple character combinations to create a secure password. Usually people use character passwords such as lowercase only or numerical passwords such as "goodboy" or 1234567. Apparently these passwords are easily guessable by dictionary based password cracking algorithms or pseudo random password feeding algorithms.

- - - -

## DEMO

Please do visit the <a href="http://www.spg-serve.byethost10.com">following URL</a> to access the project. For security professionals who disabled scripts in your browser should enable javascript to access the full functionality of the webpage.

- - - -

![picture alt](https://s9.postimg.org/3jstz1h3z/header.png)


However SPG uses combinations of lowercase, uppercase, mixed case, numerical, special character symbols to strengthen the password. By using multiple combinations it lowers the speed to guess the password being cracked by passowrd guessing algorithms or dictionary based password cracking algorithms. But one must not forget that passwords are still guessable in this modern times, no matter how much complex secure password algorithms we create. By using high computing devices coupled with tera flops of computing capacity one can create powerful algorithms to guess a password, but still it requires certain amount of time to crack a password. 

Our method solves one problem through another. We create randomised multi character combinations of characters, numerical as well as special characters to create complex random password with desired length.

## Project Goal

1) Should have lower case characters of range a-z.
2) Should have upper case characters of range A-Z.
3) Should have numbers of range 0-9.
4) Should have special characters.
5) The final password should have atleast one of the character types.
6) Non readable format.
7) Repetition of characters in passwords.
8) A minimum of 4 characters supportable.
9) Able to create multiple passwords or bulk passwords for research purposes.

## Application Technology

The project application was created based in corePHP where the backend logic on which algorithm was created. HTML, CSS, JavaScript, Ajax for front end logic. We seemlessly used AJAX for pulling passsword data from the PHP page which reduces the page load time for the end user. 

## Algorithm Logic

Assuming we want secure password of 20 Characters comprising of lower case characters[a-z], upper case characters[A-Z], numbers[0-9], symbols```[~!@#$%^&*()_+[]\;\',./~{}|:\"<>?]```. To achieve this we need to follow the following procedure.

* **Step-1:** Create a set of lower case characters in the range of (a-z)
* **Step-2:** Create a set of upper case characters in the range of (A-Z)
* **Step-3:** Create a set of numbers in the range of (0-9)
* **Step-4:** Create a set of special characters in the range of ```[~!@#$%^&*()_+[]\;\',./~{}|:\"<>?]```
* **Step-5:** Now store all combinations into a variable.
* **Step-6:** Get required passwords structure i.e; if we need lower case, upper case or mixed case, numbers, symbols in our resulting password.
* **Step-7:** Randomly select a lower case character from range (a-z)
* **Step-8:** Randomly select an upper case character from the range (A-Z)
* **Step-9:** Randomly select a number from the range (0-9)
* **Step-10:** Randomly select a special character from the range ```[~!@#$%^&*()_+[]\;\',./~{}|:\"<>?]```
* **Step-11:** Once we got atleast one character of all the combinations. We can select randomly a character from the stored variable.
* **Step-12:** Loop step-11 until we have our desired password length.

The output of the password will be a combination of all our character types.

- - - -

## Example Usage

**Input:-**

* **passwords:** 5
* **password length:** 20
* **Should have:**
	* Mixed case characters
 	* Numbers
 	* Symbols
		
**O/P:-**
```
bO1>JLD,i6Fk{06[eeqY
gL4+!YJ?l&SL*/#uCAVY
zU8?Y)B2qf@?3?0zcL,d
fR0_D2p'jY24)HDsfJ\^
eL0:\|1Ww8wQn:Z#&~U,
```

**Input:-**

* **passwords:** 5
* **password length:** 20
* **Should have:**
	* lower case characters
		
**O/P:-**
```
uenalhquljggbfjaygld
igmgzpxkbdsgiejvzpuu
ssneujnpxyfdigpkrqdn
gyuatobajgwdwkslkxnn
uavndppygbgzietdahpp
```
**Input:-**
	
* **passwords:** 5
* **password length:** 20
* **Should have:**
	* upper case characters
		
**O/P:-**
```
QHUWWNTCXULWNLJGWILW
SVFVGTPRFLBNUSPZTZQD
HBFODGTJLLFEAZBABSHO
GYJVVNGLNVLNOSWQPLZW
YYVVGNUPTAWUEVONTSVH
```
**Input:-**

* **passwods:** 5
* **password length:** 20
* **Should have:**
	* mixed case characters
		
**O/P:-**
```
eBfpILteYagMoPpTqwtD
hTrwYdHDBnmBJHHxIfOU
fYgZzcIpnLSVMQJxHJEZ
eEChdGcYCTcfpoaFEIVe
cJkGcoURjKuPKyMgrYrT
```
**Input:-**
	
* **passwords:** 5
* **password length:** 20
* **Should have:**
	* Mixed Case Characters
	* Numbers
		
**O/P:-**
```
tL0hxEkhT71cFnN74eDD
rX8QbGTlPsIdZdu4njF0
bK0AdnCVBxPC7piKWP2U
rZ3dXcCf4lT5opjlDKj6
wB7Yf7t1zl3RFd7ANzBM
```
**Input:-**
	
* **passwords:** 5
* **password length:** 20
* **Should have:**
	* Mixed Case Characters
	* Numbers
	* Symbols
		
**O/P:-**
```
mP8+BQkD(G%Umj7YjfGV
xC7~wTQqGnCY:J[vvd:\
yM1[AWP7?XxYzG0%'C;B
yG0:yX~Pd?8$>>T&DEll
tJ0>W?t+FUj_M^~URgKd
```
