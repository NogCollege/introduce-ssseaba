<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.cdnfonts.com/css/playfair-display" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pt-sans-narrow" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php
        $bio = array("name"=>"Света", "surname"=>"Володина", "profession"=>"программист");
    ?>
    <?php
        $skillset = array('Visual Design', 'Illustration', 'UX / Prototyping', 'Video / Motion Graphics', 'Marketing', 'Front-End Development');
    ?>
    <?php
        $awards = array(
            array(
                'number' => 'Award 1',
                'date' => 'Mar. 2019'
            ),
            array(
                'number' => 'Award 2',
                'date' => 'Sept. 2015'
            ),
            array(
                'number' => 'Award 3',
                'date' => 'Feb. 2013'
            ),
            array(
                'number' => 'Award 4',
                'date' => 'Dec. 2011'
            ),
            array(
                'number' => 'Award 5',
                'date' => 'Jan. 2005'
            ),
        );
    ?>
    <?php 
        $Experience = array(
            ['position' => 'Front-End Developer', 'workplace' => 'Dropbox', 'start' => 'Mar. 2020', 'end' => 'Present', 'description' => 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.'],
            ['position' => 'Visual Designer', 'workplace' => 'OutboundEngine', 'start' => 'Sept. 2017', 'end' => 'Mar. 2020', 'description' => 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.'],
            ['position' => 'Lead Designer', 'workplace' => 'Scrypt, Inc.', 'start' => 'Jun. 2014', 'end' => 'Sept. 2017', 'description' => 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.'],
            ['position' => 'UI Designer', 'workplace' => 'Pinger Inc.', 'start' => 'Jun. 2014', 'end' => 'Sept. 2017', 'description' => 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.'],
            ['position' => 'BFA in Graphic Design', 'workplace' => 'James Madison University', 'start' => 'Graduated 2014']
        )
    ?>

    <div class="fon">
        <header class="container" >
            <div class="head">
                <div class="fr-bl">
                    <img class="img-1" src="Rectangle.png" alt="">
                    <img class="img-2" src="meet.png" alt="">
                </div>
                <div class="sec-bl">
                    <p><?php echo $bio["profession"]?></p>
                    <h1><?php echo $bio["name"]?><br><?php echo $bio["surname"]?></h1>
                    <a href="">CONTACT ME</a>
                </div>
            </div>
        </header>
    </div>

    <main class="container">
        <div class="mainer">
            <div class="about">
                <h2>About Me</h2>
                <p>Use this area to say something about yourself or describe your goals.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid.</p>
                
                <div class="blue-block"></div>
    
                <h2 class="ex">Experience</h2>
    
                <div class="times-fr">
                    <p class="yel-text"><?php echo $Experience[0]['position'] . ' — ' . $Experience[0]['workplace']; ?></p>
                    <p class="month-text"><?php echo $Experience[0]['start'] . ' — ' . $Experience[0]['end']; ?></p>
                </div>
                <p><?php echo $Experience[0]['description']; ?></p>
                
                <div class="times">
                    <p class="yel-text"><?php echo $Experience[1]['position'] . ' — ' . $Experience[1]['workplace']; ?></p>
                    <p class="month-text"><?php echo $Experience[1]['start'] . ' — ' . $Experience[1]['end']; ?></p>
                </div>
                <p><?php echo $Experience[1]['description']; ?></p>

                <div class="times">
                    <p class="yel-text"><?php echo $Experience[2]['position'] . ' — ' . $Experience[2]['workplace']; ?></p>
                    <p class="month-text"><?php echo $Experience[2]['start'] . ' — ' . $Experience[2]['end']; ?></p>
                </div>
                <p><?php echo $Experience[2]['description']; ?></p>

                <div class="times">
                    <p class="yel-text"><?php echo $Experience[3]['position'] . ' — ' . $Experience[3]['workplace']; ?></p>
                    <p class="month-text"><?php echo $Experience[3]['start'] . ' — ' . $Experience[3]['end']; ?></p>
                </div>
                <p><?php echo $Experience[3]['description']; ?></p>

                <div class="blue-block"></div>
    
                <h2>Education</h2>
                <div class="times2">
                    <p class="yel-text-2"><?php echo $Experience[4]['position'] . ' — ' . $Experience[4]['workplace']; ?></p>
                    <p class="month-text"><?php echo $Experience[4]['start']; ?></p>
                </div>
               
    
                <div class="blue-block2"></div> <!-- #display: none; -->
            </div>
            <div class="features">
                <div class="bl1">
                    <h3>Skillset</h3>
                    <?php echo $skillset[0]?> <br>
                    <?php echo $skillset[1]?> <br>
                    <?php echo $skillset[2]?>  <br>                             
                    <?php echo $skillset[3]?>  <br>                     
                    <?php echo $skillset[4]?>   <br>
                    <?php echo $skillset[5]?>   <br>
                </div>
                
                <div class="bl2">
                    <h3>Awards</h3>
                    <?php echo $awards[0]['number'] . ' — ' . $awards[0]['date'] ?> <br>
                    <?php echo $awards[1]['number'] . ' — ' . $awards[1]['date'] ?> <br>
                    <?php echo $awards[2]['number'] . ' — ' . $awards[2]['date'] ?> <br>
                    <?php echo $awards[3]['number'] . ' — ' . $awards[3]['date'] ?> <br>
                    <?php echo $awards[4]['number'] . ' — ' . $awards[4]['date'] ?> <br>
                </div>
    
                <div class="bl2">
                    <h3>Career Traits</h3>
                    <p><b>Holistic Designer</b> - Design should be treated as a living organism, guided by the environment it lives in as a whole.</p>
                    <p><b>User-Focused</b> - I pay close attention to the user’s needs and pain points. I design with empathy. Launch, learn & iterate.</p>
                    <p><b>Proactive Evolution</b> - Curiosity and a desire to learn constantly broadens my skill set, enabling me to wear many hats at once.</p>
                    <p><b>Bold, yet practical</b> - I know when to push the boundaries vs. when to embrace simplicity to meet multiple deadlines.</p>
                </div>
    
                <div class="bl2">
                    <h3>Recent Works</h3>
                    <a href="">thedonut.co →</a><br>
                    <a href="">outboundengine.com →</a><br>
                    <a href="">rswalsh.com →</a><br>
                    <a href="">frondaustin.com →</a><br>
                    <a href="">tipyo.net →</a><br>
                    <a href="">codefresh.io →</a> <br>
                    <a href="">carsoncreekranch.com →</a>
                </div>
            </div>
        </div>
    </main>

    <div class="fon2">
        <footer class="container2">
            <p class="get">Get in touch!</p>
            <p class="mail">
                <?php echo $email='nandne@mail.ru'; ?><br>
                512.273.1838</p>
            <p class="mail2"><?php echo $email='nandne@mail.ru'; ?> | 512.273.1838</p>
            <div>
                <img src="facebook.png" alt="">
                <img src="instagram.png" alt="">
                <img src="linkedin.png" alt="">
                <img src="twitter.png" alt="">
            </div>
        </footer>
    </div>
</body>
</html>