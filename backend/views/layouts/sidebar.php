<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use common\models\Contact;
    $contact = Contact::find()->count();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::to(['site/index']) ?>" class="brand-link">
        <?= Html::img('@web/dist/img/AdminLTELogo.png', ['alt' => 'AdminLTE logo','class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
        <span class="brand-text font-weight-light">DacoteIT.com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= Html::img('@web/dist/img/user2-160x160.jpg', ['alt' => 'User Image','class' => 'img-circle elevation-2']) ?>
            </div>
            <div class="info">
                <a href="#" class="d-block">Админ</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <?php $pathInfo = Yii::$app->request->pathInfo ?>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= Url::to(['site/index']) ?>" class="nav-link <?=($pathInfo == 'site/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DACOREIT.COM
                            <span class="right badge badge-danger">NEW</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['contact/index']) ?>" class="nav-link <?=($pathInfo == 'contact/index' ? 'active' : '')?>">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Online Message
                            <span class="right badge badge-danger"><?=$contact?></span>
                        </p>
                    </a>
                </li>
                <?php if (Yii::$app->user->identity->role_id ==1 ||Yii::$app->user->identity->role_id ==3):?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['post-cat/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::to(['post/index']) ?>" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif;?>
                <?php if (Yii::$app->user->identity->role_id ==1 ||Yii::$app->user->identity->role_id ==2):?>
                <li class="nav-item">
                    <a href="<?= Url::to(['menu/index']) ?>" class="nav-link <?=($pathInfo == 'menu/index' ? 'active' : '')?>">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['page/index']) ?>" class="nav-link <?=($pathInfo == 'page/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Pages
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Portfolio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['pro-cat/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::to(['project/index']) ?>" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['cat-ser/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::to(['ser/index']) ?>" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['team/index']) ?>" class="nav-link <?=($pathInfo == 'team/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-theater-masks"></i>
                        <p>
                            Team
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['job/index']) ?>" class="nav-link <?=($pathInfo == 'job/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-theater-masks"></i>
                        <p>
                            Job
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['banner/index']) ?>" class="nav-link <?=($pathInfo == 'banner/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-bus-alt"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['logo/index']) ?>" class="nav-link <?=($pathInfo == 'logo/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-train"></i>
                        <p>
                            Logo
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['client/index']) ?>" class="nav-link <?=($pathInfo == 'client/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-address-card text-danger"></i>
                        <p>
                            Client
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['partner/index']) ?>" class="nav-link <?=($pathInfo == 'partner/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-mug-hot"></i>
                        <p>
                            Partnior
                        </p>
                    </a>
                </li>
                    

                <?php endif; ?>


                <?php if (Yii::$app->user->identity->role_id ==1 ):?>
              
                 <li class="nav-item">
                    <a href="<?= Url::to(['users/index']) ?>" class="nav-link <?=($pathInfo == 'user/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-user text-warning"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['setting/index']) ?>" class="nav-link <?=($pathInfo == 'setting/index' ? 'active' : '')?>">
                            <i class="nav-icon fa fa-satellite text-danger"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['about/index']) ?>" class="nav-link <?=($pathInfo == 'about/index' ? 'active' : '')?>">
                            <i class="nav-icon fa fa-book text-default"></i>
                            <p>
                                About
                            </p>
                        </a>
                    </li>
                <?php endif; ?>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>