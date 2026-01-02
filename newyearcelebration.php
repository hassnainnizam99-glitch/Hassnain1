<?php
$year = date("Y") + 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Happy New Year <?php echo $year; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    height:100vh;
    overflow:hidden;
    background: linear-gradient(120deg,#ff416c,#ff4b2b,#1c92d2,#f2fcfe);
    background-size:400% 400%;
    animation:bgMove 12s ease infinite alternate;
}

@keyframes bgMove{
    0%{background-position:0% 50%}
    100%{background-position:100% 50%}
}

.center{
    position:absolute;
    inset:0;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    z-index:2;
}

h1{
    font-size:65px;
    animation:float 3s ease-in-out infinite;
    text-shadow:0 0 25px rgba(255,255,255,0.8);
}

@keyframes float{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-20px);}
}

.year{
    font-size:90px;
    font-weight:800;
    background:linear-gradient(90deg,#fff,#ffd700,#ffeb3b,#fff);
    -webkit-background-clip:text;
    color:transparent;
    margin:10px 0;
    animation:shine 2s infinite;
}

@keyframes shine{
    from{text-shadow:0 0 10px gold;}
    to{text-shadow:0 0 35px white;}
}

.msg{
    font-size:22px;
    margin:10px 0;
    opacity:0;
    animation:fadeIn 2s forwards 1.5s;
}

@keyframes fadeIn{
    to{opacity:1;}
}

/* TPE Message */
.tpe{
    font-size:20px;
    margin-top:20px;
    color:#fff;
    text-align:center;
    line-height:1.6;
    opacity:0;
    animation:fadeIn 2s forwards 2.5s;
    text-shadow:0 0 8px #00eaff,0 0 15px #fff;
}

/* Footer */
.footer{
    margin-top:30px;
    font-size:16px;
    color:#f1f1f1;           /* soft white */
    opacity:0.8;
    font-style:italic;
    letter-spacing:1px;
    text-align:center;
    transition: color 0.3s;
}

.footer:hover{
    color:#ffd700;           /* hover highlight */
    cursor:default;
}

/* Fireworks */
.firework{
    position:absolute;
    width:6px;
    height:6px;
    border-radius:50%;
    animation:blast 1.8s infinite;
}

@keyframes blast{
    0%{transform:scale(0);opacity:1;}
    100%{transform:scale(18);opacity:0;}
}

/* Confetti */
.confetti{
    position:absolute;
    width:8px;
    height:12px;
    animation:fall linear infinite;
}

@keyframes fall{
    from{transform:translateY(-10vh) rotate(0deg);}
    to{transform:translateY(110vh) rotate(360deg);}
}
</style>
</head>

<body>

<div class="center">
    <h1>🎉 Happy New Year 🎉</h1>
    <div class="year"><?php echo $year; ?></div>
    <div class="msg">May this year bring new hopes, success, and a bright future ✨</div>

    <div class="tpe">
        🌟 Our best wishes for <strong>YOU</strong> — may this New Year bring  
        <strong>success, growth, and excellence</strong>, and ensure  
        <strong>outstanding performance</strong> in every project.<br>🚀 Ameen
    </div>

    <div class="footer">Created by Muzammil</div>
</div>

<script>
// Fireworks
for(let i=0;i<25;i++){
    let f=document.createElement("div");
    f.className="firework";
    f.style.left=Math.random()*100+"vw";
    f.style.top=Math.random()*100+"vh";
    f.style.background=`hsl(${Math.random()*360},100%,60%)`;
    document.body.appendChild(f);
}

// Confetti
for(let i=0;i<80;i++){
    let c=document.createElement("div");
    c.className="confetti";
    c.style.left=Math.random()*100+"vw";
    c.style.background=`hsl(${Math.random()*360},100%,50%)`;
    c.style.animationDuration=(Math.random()*3+3)+"s";
    document.body.appendChild(c);
}
</script>

</body>
</html>
