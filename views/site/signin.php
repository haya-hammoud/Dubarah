<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 include('include/header.php'); ?>

    <!-- signin-page -->
    <section id="main" class="clearfix user-page">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->         
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="user-account">
                        <h2>User Login</h2>
                        <!-- form -->
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" >
                            </div>
                            <button type="submit" href="#" class="btn">Login</button>
                        </form><!-- form -->
                    
                        <!-- forgot-password -->
                        <div class="user-option">
                            <div class="checkbox pull-left">
                                <label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
                            </div>
                            <div class="pull-right forgot-password">
                                <a href="#">Forgot password</a>
                            </div>
                        </div><!-- forgot-password -->
                    </div>
                    <a href="#" class="btn-primary">Create a New Account</a>
                </div><!-- user-login -->           
            </div><!-- row -->  
        </div><!-- container -->
    </section><!-- signin-page -->
    
    
    
<?php include('include/footer.php'); ?>