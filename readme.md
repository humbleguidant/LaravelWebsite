# Laravel Website
This is a counselling website created in Laravel, with a MySQL database. There are 8 pages included which are Home, About, Services, Pricing, Psychotherapy, Teletherapy, Login, and Request Appointment. To request an appointment, the user must create an account and be verified. An email will be sent to the user before their account is fully created. Once the user is verified they can request an appointment with the counselor. When requesting an appointment, an email will be sent to the counselor along with the clients details. The counselor can then make a call or email the client to make an appointment.  

# Source Code
The web pages of this website is in the resources/views/. The back end logic is in the app/Http/Controllers/. The email functionality is in app/Mail/. The routes are in routes/web.php.

# Functional Requirements
1. User should be able to create account and wait for an email <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/Register.PNG?raw=true) <br />
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/Verify.PNG?raw=true)  <br /> <br />
2. User should see an email on their personal account <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/VerifyEmail.PNG?raw=true)  <br /> <br />
3. User should be able to login.<br/><br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/Login.PNG?raw=true) <br /> <br />
4. Home page is accessible after successfully logging in. <br/><br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/Home.PNG?raw=true) <br /> <br />
5. After requesting an appointment, an email is sent to the counselor with the patients details. <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/AppointmentRequest.PNG?raw=true) <br /> <br />
6. The user should be able to reset their password by entering their email. <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/Reset.PNG?raw=true) <br /> <br />
7. An email will be sent to reset the password <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/ResetPasswordEmail.PNG?raw=true) <br /> <br />
8. Reset the password <br/> <br/>
![alt text](https://github.com/humbleguidant/LaravelWebsite/blob/main/Screenshots/ResetPassword.PNG?raw=true) <br /> <br />

# Non Functional Requirements
1. Quickly send email <br /> <br />
2. Request appointment form easily submitted <br /> <br />
3. Sign-in as client <br /> <br />
4. run on Nginx web server <br /> <br />
