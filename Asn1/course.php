<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
</head>
<style>
    @import "./homeStyle.css";
    *,*::after,*::before{
        margin:0;padding:0;box-sizing:border-box;color:var(--acent-color-dark_alpha);
    }
    h3,ul{
        margin:0.5rem;
    }
    .addmission span{
        color:var(--acent-color-light);
    }
    .cover-section{
        width:100svw;height:50svh;position: relative;
    }
    .cover-section img{
        position: absolute;width:100%;height:100%;
    }
    .wrapper{
        position: relative;width:100svw;font-size:1.1rem;display: flex;flex-wrap:wrap;justify-content: space-around;margin:2rem 0;
    }
    .wrapper h2{
        color:var(--primary-color-dark);font-weight: 400;
    }
    .info-wrapper{
        width: 60%;
    }
    .addmission{
        width:25rem;padding: 0.5rem;height: fit-content;background: var(--primary-color-dark);
    }
    footer ,p{
    background-color: #333;padding: 10px;color:#fff;
}
    @media (width<900px){
        .wrapper .flex_item{
            width:100svw;margin: 0.5rem;padding: 0.5rem;
        }
}
</style>
<body>
    <?php
        include 'json_data.php';
        $json=json_decode($info,true);

    ?>
    <div class="cover-section" style="background:url('<?php echo $json[$_GET["index"]]["img"]; ?>');background-position: center;
        background-size: cover;"></div>
    <div class="wrapper">
        <div class="info-wrapper flex_item">
            <h2><?php echo $json[$_GET["index"]]["name"]; ?>
            </h2>
            <span><?php echo $json[$_GET["index"]]["description"]; ?></span>
            <h3>Our faculty</h3>
            <ul>
                <?php
                    for($x=0;$x<3;$x++){
                        echo "<li>".$json[$_GET["index"]]["teachers"][$x]."</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="addmission flex_item">
        <span><b>Course Eligibility</b>
            If the candidate has not studied <?php echo $json[$_GET["index"]]["name"]; ?> in class XII, he / she needs to achieve the <b>50%</b> marks in relevent subjects to apply for <?php echo $json[$_GET["index"]]["name"]; ?> (H).
            Candidate passed in Business Mathematics is not eligible for Admission.
            Please also read General Eligibility Criteria, Under Admissions.
            <b>Course Duration</b>
            3 Years
            <b>Course Hours</b>
            10:15 am to 4:30 pm (Day Session, Co-Ed)
            <b>Course Fees</b>
            ₹ 35,540/- (First Semester)

</span>
        </div>
        
    </div>
      <footer>
    <div class="contact-info">
      <p>Address: 123 College Street, City, Country</p>
      <p>Phone: +1 123-456-7890</p>
      <p>Email: info@example.com</p>
    </div>
  </footer>
</body>
</html>