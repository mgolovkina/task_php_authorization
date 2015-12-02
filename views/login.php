<p id="error"><?=$msg?></p>
<form method="post">
    <div class="elem">
        Логин
        <input type="text" name="login" required>
    </div>
    <div class="elem">
        Пароль
        <input type="password" name="password" required>
    </div>
    <div class="elem">
        <input type="checkbox" name="remember">
        Запомнить меня
    </div>
    <div class="elem">
        <input type="submit" value="Войти">
    </div>
</form>