<form class="signForm" method="post" action="/signup/register">
    <label for="id">Pseudo :</label>
    <input type="text" placeholder="Rentrez votre pseudo" name="id" class="input" required>
    <label for="id">eMail :</label>
    <input type="text" placeholder="Rentrez votre eMail" name="email" class="input" required>
    <label for="password">Mot de passe :</label>
    <input type="password" placeholder="Rentrez votre mot de passe" class="input" name="password" title="Au moins 12 caractères, un chiffre, une lettre majuscule, une minuscule et un caractère spécial" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{12,}$" >
    <input id="submit" type="submit">
</form>