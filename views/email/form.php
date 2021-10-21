<form method="post">
    <input type="email" name="email">
    <input type="submit">
</form>

<?php
if(Yii::$app->session->hasFlash('successful')){
    echo Yii::$app->session->getFlash('successful');
}else{
    echo Yii::$app->session->getFlash('noSuccessful');
}
?>