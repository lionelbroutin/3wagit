<?php

require'header.php'
?>

    <main>
        <h1>Nous contacter</h2>
            <p><i class="fas fa-envelope"></i>Beach Hôtel & Spa</p>
            <p>Pointe de la Verdure</p>
            <p>Gosier, GUADELOUPE</p>
            <p><a href=""><i class="fas fa-phone"></i>590 590 90 46 46</a></p>
            <p><a href=""><i class="fas fa-map-marker-alt"></i>reservation@beachhotelguadeloupe.com</a></p>
            <h3>Formulaire de contact</h3>
            <p><span class="obligatoire">(*)</span><span> Champs obligatoires</span></p>
            <form action="" class="column">


                <div class="row">
                    <fieldset>
                        <legend>Vos coordonnées</legend>
                        <label for="nom">Nom<span class="obligatoire">(*)</span></label>
                        <input type="text" name="nom" placeholder="Votre nom">
                        <label for="prenom">Prénom<span class="obligatoire">(*)</span></label>
                        <input type="text" name="prenom" placeholder="Votre prénom">
                        <label for="email">Email<span class="obligatoire">(*)</span></label>
                        <input type="email" name="email" placeholder="Votre email">
                        <label for="telephone">Téléphone<span class="obligatoire">(*)</span></label>
                        <input type="telephone" name="telephone" placeholder="Votre numéro de téléphone">

                    </fieldset>
                    <fieldset>
                        <legend>Vos souhaits</legend>
                        <label for="chambre">La chambre<span class="obligatoire">(*)</span></label>
                        <select name="chambre" id="" aria-placeholder="--choisissez votre chambre --">
                            <option value=""></option>
                        </select>
                        <label for="date">Vos dates<span class="obligatoire">(*)</span></label>
                        <input type="date" placeholder="jj/mm/aaaa"><span>-</span> <input type="date"
                            placeholder="jj/mm/aaaa">
                        <label for="messsage">Nom<span class="obligatoire">(*)</span></label>
                        <textarea name="messsage"></textarea>


                    </fieldset>
                </div>
                <button type="submit">Envoyer</button>
            </form>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.2700930825927!2d-61.50744248513959!3d16.20654848879633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48013fb559d391e9%3A0xf11a19de1d5fc1b1!2sHotel%20Salako!5e0!3m2!1sfr!2sfr!4v1583835866323!5m2!1sfr!2sfr"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </main>
    <?php

require'footer.php'
?>