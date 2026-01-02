<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments</title> 
    <link rel="stylesheet" href="appointments.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="navbar">
    <div class="OPD">Medipulse Clinic</div>
    <div class="menu">
        <a href="mainhtml.php">Home</a>
        <a href="about.php">About us</a>
        <a href="patient.php">Patients</a>
        <a href="#">Appointment</a>
        <a href="docsec.php">Doctors</a>
    </div>
</div>

<form action="submit_appointment.php" method="post" class="appointment-form">

    <h2>Book Appointment</h2>

    <label>Full Name</label>
    <input type="text" name="name" required>

    <label>Age</label>
    <input type="number" name="age" min="0" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Phone</label>
    <input type="tel" name="phone" required>

    <label>Preferred Date</label>
    <input type="date" name="date" required>

    <label>Preferred Time</label>
    <input type="time" name="time" required>

    <label>Select Doctor</label>
    <select name="doctor" required>
        <option value="">Choose Doctor</option>
        <option>Dr. Muzammil Khan - Child Specialist</option>
        <option>Dr. Hassnain Nizam - Physiologist</option>
        <option>Dr. Ahmed Noor - Surgeon</option>
        <option>Dr. Waqas Ahmed - Cardiologist</option>
        <option>Dr. Tanveer Manzoor - Neurologist</option>
    </select>

    <button type="submit">Book Appointment</button>

</form>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">
            <h3>MediPulse OPD</h3>
            <p>Complete OPD Management System<br>Fast • Secure • Reliable</p>
        </div>

        <div class="footer-box">
            <h4>Quick Links</h4>
            <a href="mainhtml.php">Home</a>
            <a href="about.php">About us</a>
            <a href="patient.php">Patients</a>
            <a href="#">Appointment</a>
            <a href="docsec.php">Doctors</a>
        </div>

        <div class="footer-box">
            <h4>Contact</h4>
            <p>📞 0313-0250870</p>
            <p>📧 info@medipulse.com</p>
            <p>📍 Pakistan</p>

            <div class="social-icons">
                <a href="#" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="x"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 MediPulse OPD | All Rights Reserved
    </div>

</footer>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/923130250870?text=Hello%20I%20want%20to%20change information of appointment" 
   class="whatsapp-float" 
   target="_blank"
   title="Get info on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>
</body>
</html>
