<div id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-title justify">
                    <h2>Intéressés par l'évènement ?
                        <br><br>Prêt à relever le défi ?</h2>
                    <p>Contactez nous en utilisant le formulaire ci-contre
                        <br>ou en téléphonant directement </p>
                    <div>
                        <a href="tel:+33632096792" class="contact-phone">Appeler</a>
                    </div>
                </div>
            </div>
            <div class="contact col-md-6 wow fadeIn delay-08s">
                <div class="col-md-10 col-md-offset-1">
                    <div id="note"></div>
                    <?php 
                    if (isset($error)) {
                        echo '<div id="errormessage">'.$error.'</div>';
                    }
                    if (isset($success)) {
                        echo '<div id="sendmessage">'.$success.'</div>';
                    }
                    ?>
                    <form action="#contact-info" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" value="<?php  if(isset($_POST['name'])) echo $_POST['name'];  ?>" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" value="<?php  if(isset($_POST['email'])) echo $_POST['email'];  ?>" class="form-control" name="email" id="email" placeholder="Entrez votre email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="subject" id="subject">
                                <option value="team" <?php  if(isset($_POST['subject']) && $_POST['subject'] == 'team') echo 'selected="selected"';  ?>>Inscrire son équipe</option>
                                <option value="team-join" <?php  if(isset($_POST['subject']) && $_POST['subject'] == 'team-join') echo 'selected="selected"';  ?>>Rejoindre une équipe</option>
                                <option value="stand" <?php  if(isset($_POST['subject']) && $_POST['subject'] == 'stand') echo 'selected="selected"';  ?>>Réserver un stand</option>
                                <option value="infos" <?php  if(isset($_POST['subject']) && $_POST['subject'] == 'infos') echo 'selected="selected"';  ?>>Information</option>
                                <option value="autre" <?php  if(isset($_POST['subject']) && $_POST['subject'] == 'autre') echo 'selected="selected"';  ?>>Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php  if(isset($_POST['message'])) echo $_POST['message'];  ?></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="contact-submit"><i class="fa fa-envelope" aria-hidden="true"></i> Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 