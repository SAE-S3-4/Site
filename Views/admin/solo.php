<section class="tab">
    <h2>Gestion des questions du jeu solo</h2>
</section>
<h2>Partie Entrainement</h2>
<?php echo($A_view['trainning']);?>
<h3>Ajouter une question</h3>
<form class="questionForm" method="post" action="admin/addQuestion">
    <input type='hidden' name='room_id' value='A1B2C3'>
    <label>Titre de la question : </label>
    <input type="text"  placeholder="Titre" name="title" required="required"><br/>
    <label>Consigne :</label><br/>
    <textarea name="assignement" rows="5" cols="30"  placeholder="Consigne" aria-required="true"></textarea><br/>
    <label>Réponse : </label>
    <input type="text"  placeholder="Réponse" name="answer" required="required"><br/>
    <label>Indice : </label><br/>
    <textarea name="suggestion" rows="5" cols="30"  placeholder="Indice" aria-required="true"></textarea><br/>
    <label>Numéro de la question (pas obligatoire) : </label>
    <input type="number" name="order_question"><br/>
    <input type="submit" value="Valider">
</form>
<br/>
<h2>Partie Jeu</h2>
<?php
echo($A_view['play']);
?>
<h3>Ajouter une question</h3>
<form class="questionForm" method="post" action="admin/addQuestion">
    <input type='hidden' name='room_id' value='D4E5F6'>
    <label>Titre de la question : </label>
    <input type="text"  placeholder="Titre" name="title" required="required"><br/>
    <label>Consigne :</label><br/>
    <textarea name="assignement" rows="5" cols="30"  placeholder="Consigne" aria-required="true"></textarea><br/>
    <label>Réponse : </label>
    <input type="text"  placeholder="Réponse" name="answer" required="required"><br/>
    <label>Indice : </label><br/>
    <textarea name="suggestion" rows="5" cols="30"  placeholder="Indice" aria-required="true"></textarea><br/>
    <label>Numéro de la question (pas obligatoire) : </label>
    <input type="number" name="order_question"><br/>
    <input type="submit" value="Valider">
</form>
