<!-- Team Modal -->
<?php   
    include('arrays.php'); 
    $teamId = $_POST['team-id'];
?>
<article class="lab-container">
    <section class="lab-row">
        <article class="team-modal" data-id=""> 
            <button id="close">close</button>
            
            <figure class="team-dp" >
                <img src="img/<?php echo $team[$teamId]['dp']; ?>.jpg" alt="">

                <figcaption>
                    <h3><?php echo $team[$teamId]['name']; ?></h3>
                    <h5><?php echo $team[$teamId]['position']; ?></h5>
                    <p><?php echo $team[$teamId]['about-staff']; ?></p>
                </figcaption>

            </figure>
        </article>
    </section>
</article>
<!-- /Team Modal -->