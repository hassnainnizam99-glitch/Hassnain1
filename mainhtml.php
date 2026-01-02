<!DOCTYPE html>
<html>
<head>
    <title>MediPulse OPD Web</title> 
    <link rel="stylesheet" href="website.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
<!-- Happy New Year Animation -->
<div id="newYear">🎉 Happy New Year! 🎉</div>

<script>
// Auto hide after 5 seconds
setTimeout(()=>{
    document.getElementById('newYear').style.display='none';
},3000);
</script>

<div class="navbar">
    <div class="OPD">Medipulse Clinic</div>

    <div class="menu">
        <a href="mainhtml.php">Home</a>
        <a href="about.php">About us</a>
        <a href="patient.php">Patients</a>
        <a href="Appointment.php">Appointment</a>
        <a href="docsec.php">Doctors</a>
    </div>
</div>

<div class="Slider"></div>

   <div class="doctor-div">

    <a href="Appointment.php" class="doctor-info-link">
        <div class="doctor-info">
            <img src="4.jpg" alt="Dr. Muzammil Khan">
            <div class="name">Dr. Muzammil Khan<br><small>Child Specialist</small></div>
        </div>
    </a>

    <a href="Appointment.php" class="doctor-info-link">
        <div class="doctor-info">
            <img src="4.jpg" alt="Dr. Hassnain Nizam">
            <div class="name">Dr. Hassnain Nizam<br><small>Physiologist</small></div>
        </div>
    </a>

    <a href="Appointment.php" class="doctor-info-link">
        <div class="doctor-info">
            <img src="4.jpg" alt="Dr. Ahmed Noor">
            <div class="name">Dr. Ahmed Noor<br><small>Surgeon</small></div>
        </div>
    </a>

    <a href="Appointment.php" class="doctor-info-link">
        <div class="doctor-info">
            <img src="4.jpg" alt="Dr. Waqas Ahmed">
            <div class="name">Dr. Waqas Ahmed<br><small>Cardiologist</small></div>
        </div>
    </a>

    <a href="Appointment.php" class="doctor-info-link">
        <div class="doctor-info">
            <img src="4.jpg" alt="Dr. Tanveer Manzoor">
            <div class="name">Dr. Tanveer Manzoor<br><small>Neurologist</small></div>
        </div>
    </a>

</div>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-box">
            <h3>MediPulse OPD</h3>
            <p>Complete OPD Management System<br>Fast • Secure • Reliable</p>
        </div>

        <div class="footer-box">
            <h4>Quick Links</h4>
            <a href="mainhtml.php">Home</a>
            <a href="About.php">About us</a>
            <a href="patient.php">Patients</a>
            <a href="Appointment.php">Appointment</a>
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
