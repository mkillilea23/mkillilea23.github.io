<!DOCTYPE html>
<html lang="en">

<!--
Name: Molly Killilea
Date: 3/14/2026
Course: ISLT 7355 - Web Dev
Description: index.html
-->

<head>
   <meta charset="utf-8"> <!-- character encoding -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile-friendly layout -->

   <title>Home</title> <!-- webapge title in browser tab -->

   <link rel="stylesheet" href="style.css"> <!-- link to external CSS for styling -->
   <link rel="stylesheet" href="nav.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- links for fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Custom font -->

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

</head>

<body>
  <?php include 'header.php'; ?>

    <main id="contact">  
        <section id="herosection">
            <div class="hero">
                <h1>Hi, I'm Molly!</h1> <!-- Custom font used here -->
                <p>Welcome to my portfolio. Here you'll find examples of human-centered instructional design work rooted in evidence based learning theory.</p> <!-- Custom font used here -->
                <a href="contact.html">Let's Connect</a> <!-- Custom font used here -->
            </div>
        </section>
        
        <div class="intro">
            <h2>My Purpose and Goals</h2> <!-- Custom font used here -->
            <p>I believe learning should make people feel capable, not confused. </p>
            <p>My goal as an instructional designer is to create engaging and purposeful learning experiences 
                that help make complex information more accessible. My academic and professional background has 
                shaped how I think about learning as an active, lifelong process that is shaped by one’s individuality. 
                Lived experiences, motivation, adaptability, previous knowledge – there are so many factors that impact learning. 
                Through my instructional design coursework, I am developing the skills to create solutions 
                that address these real and varying learning influences.</p>
            <p>I am particularly interested in designing instruction that empowers learners in higher education environments, 
                where having access to well-designed information can directly impact student success. 
                Ultimately, I aim to create learning experiences that are not only effective, 
                but also respectful of learners’ time and needs.</p>
        </div>

        <div class="quote"> <!-- Custom font used here -->
            <blockquote>"Change is the end result of all true learning."</blockquote>
            <p>- Leo Buscaglia</p>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>