<?php
namespace frontend\controllers;

use common\models\Gallery;
use common\models\Head;
use common\models\Service;
use common\models\Team;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Symfony\Component\CssSelector\Exception\ExpressionErrorException;
use Yii;
use yii\helpers\Html;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use common\models\Contact;
use common\models\Banner;
use common\models\About;
use common\models\Setting;
use common\models\Ser;
use common\models\Partner;
use common\models\ProCat;
use common\models\Project;
use common\models\Post;
use common\models\PostCat;
use common\models\Client;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['deny'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        if ($action->id == 'deny') {
            $this->layout = 'error';
        }

        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'error',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionDeny()
    {
        return $this->render('error');
    }
    public function actionSearch()
    {
        $q = Html::encode(trim(Yii::$app->request->get('q')));
        if(!$q){
            return $this->render('search');
        }
        $query = Post::find()
            ->where('status=1  and  (title_uz like "%'.$q.'%" or title_ru like "%'.$q.'%" or title_en like "%'.$q.'%" or description_uz like "%'.$q.'%" or  description_en like "%'.$q.'%" or description_ru like "%'.$q.'%" or body_ru like "%'.$q.'%" or body_uz like "%'.$q.'%")');

        $pagination = new \yii\data\Pagination([
            'totalCount'=>$query->count(),
            'pageSize'=>5,
            'forcePageParam'=>false,
            'pageSizeParam'=>false
        ]);
        $query = $query->offset($pagination->offset)->limit($pagination->limit)->orderBy(['created'=>SORT_DESC])->all();
        return $this->render('search',compact('query','q','pagination'));
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function  actionMail(){

        return $this->render('mail');
    }
    public function actionIndex()
    {
        $email = Yii::$app->request->post('email');
        if($email) {
            Yii::$app->mailer->compose()
                ->setFrom('abdulloh.shuxrat@dacoreit.com')
                ->setTo($email)
                ->setSubject('Message subject')
                ->setTextBody('Plain text content')
                ->setHtmlBody('<b>HTML content asdadsasdasd</b>')
                ->send();
        }
        $team = Team::find()->all();

        $fikr = Client::find()->all();
        $banner = Banner::find()->where(array('status'=>1))->orderBy(array('id'=>SORT_DESC))->all();
        $bannerLogo = Banner::find()->where(array('status'=>1))->orderBy(array('id'=>SORT_DESC))->one();
        $who = Setting::find()->where(['key' =>'who'])->one();
        $project_set= Setting::find()->where(['key' =>'project'])->one();
        $employes = Setting::find()->where(['key' =>'employes'])->one();
        $client = Setting::find()->where(['key' =>'client'])->one();
        $controctors = Setting::find()->where(['key' =>'controctors'])->one();
        $address = Setting::find()->where(['key'=>'address'])->one();
        $tell = Setting::find()->where(['key'=>'tell'])->one();
        $email = Setting::find()->where(['key'=>'email'])->one();
        $telegram = Setting::find()->where(['key'=>'telegram'])->one();
        $other_projects = Setting::find()->where(['key' =>'other_projects'])->one();
        $about_one = About::find()->limit(3)->orderBy(['id'=>SORT_ASC])->all();
        $ser = Ser::find()->where(['status'=>1])->andWhere(['ban'=>0])->orderBy(['id'=>SORT_ASC])->all();
//      prd($ser);
        $ser_one = Ser::find()->where(['status'=>1])->andWhere(['ban'=>0])->limit(6)->orderBy(['id'=>SORT_ASC])->all();
        $innovative_one = Ser::find()->where(['cat_id'=>2])->andWhere(['ban'=>1])->limit(2)->orderBy(['id'=>SORT_ASC])->all();
        $partnior = Partner::find()->all();
        $post = Post::find()->orderBy(['id'=>SORT_DESC])->limit(3)->all(); 
        $procat = ProCat::find()->all(); 
        $client_car = Client::find()->all();
        $project_left = Project::find()->where(['status'=>1,'place'=>1])->orderBy(['id'=>SORT_DESC])->limit(2)->all();
        $project_right = Project::find()->where(['status'=>1,'place'=>0])->orderBy(['id'=>SORT_DESC])->one();
        $project_btn = Project::find()->where(['status'=>1,'place'=>-1])->orderBy(['id'=>SORT_DESC])->limit(2)->all();
        return $this->render('index',compact('banner','team','client_car','partnior','who','project_set','employes','ser','ser_one','innovative','innovative_one','controctors','client','client_one','procat','project_right','project_left','project_btn','other_projects','address','tell','email','telegram','post','fikr'));
    }
    public function actionTeam()
    {
        $team = Team::find()->where(['job_id' => 1])->limit(4)->all();
        $team_dev = Team::find()->where(['job_id' => 2])->limit(4)->all();
        $team_soft = Team::find()->where(['job_id' => 3])->limit(3)->all();
        $team_disgin = Team::find()->where(['job_id' => 4])->limit(3)->all();
//        prd($team);
        return $this->render('team',compact('team','team_dev','team_soft','team_disgin'));
    }

    /**
     * Register CSS file or files
     *
     * @param [type] $file
     * @return void
     */
    public function registerCss($file)
    {
        if ($file) {
            $bundle = \frontend\assets\AppAsset::register(\Yii::$app->view);

            if (is_array($file)) {
                foreach ($file as $fi) {
                    $bundle->css[] = $fi;
                }
            } else {
                $bundle->css[] = $file;
            }
        }
    }
    public function actionPartfolio()
    {
        $procat = ProCat::find()->all(); 
        $project = Project::find()->where(['status'=>1])->all();
        $works = Setting::find()->where(['key' =>'works'])->one();
        $this->registerCss(array(
            '/front_assets/css/styles.css',
        )); 
      
        return $this->render('partfolio',compact('project','procat','works',''));
    }
    

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new Contact();
        $img = Setting::find()->where(['key'=>'img'])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh('contact');
        }

        return $this->render('contact', [
            'model' => $model,
            'img'=>$img,
        ]);
    }
    public function actionServices(){
        $head_id = Head::find()->one();
        $head = Service::find()->where(['head_id'=>$head_id])->all();
        return $this->render('services',compact('head','head_id'));
    }
    public function actionTelegram()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $token = "1337966809:AAHbPzNJesYEHw2Vk6t6sOMVoXMfghCfXxA";
        // $chat_id = "-1001419336480";
        $chat_id_one = "-415870619";
        $arr = array(
            'User name:' =>'🙎‍♂️'.$name,
            'Email Pochta:' =>'📭'.$email,
            'Massage Client:' =>'📲'.$message,
        );

        foreach ($arr as $key => $value) {
            $txt .="<b> ".$key." </b> ".$value."%0A";
        };
        // $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt} ","r");

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id_one}&parse_mode=html&text={$txt} ","r");
        if($sendToTelegram)
        {
            echo "<pre>";
            print_r("ok");
            echo "</pre>";
        }else{
            return "not"; 
        }
    }


    public function actionInner($id){
        $model = Post::find()->where(['id'=>$id])->one();
        if(!isset($model)){
            throw new \yii\web\NotFoundHttpException();
        }else{
          $model->view ++;
          $model->save();
        }
        return $this->render('inner',[
                'model'=>$model
            ]);
    }

    public function actionBlog(){
        $blog = Post::find()->orderBy(['id'=>SORT_DESC])->all();
        $blog_tag = PostCat::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC])->all();
        $cat = Post::find()->select(['*','COUNT(*) AS count'])->groupBy('post_cat_id')->all();
        return $this->render('blog',compact('blog','blog_tag','cat'));
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $we_work_experts = About::find()->where(['key'=>'we_are_experts'])->one();
        $we_work_global = About::find()->where(['key'=>'we_work_global'])->one();
        $how_we_work = About::find()->where(['key'=>'how_we_work'])->one();
        $project_set= Setting::find()->where(['key' =>'project'])->one();
        $employes = Setting::find()->where(['key' =>'employes'])->one();
        $client = Setting::find()->where(['key' =>'client'])->one();
        $controctors = Setting::find()->where(['key' =>'controctors'])->one();
        $partnior = Partner::find()->all();
        return $this->render('about',[
            'we_work_experts'=>$we_work_experts,
            'we_work_global'=>$we_work_global,
            'how_we_work'=>$how_we_work,
            'project_set'=>$project_set,
            'employes'=>$employes,
            'client'=>$client,
            'partnior'=>$partnior,
            'controctors'=>$controctors,

            ]
        );
    }
    public function actionProject($id){
        $project = Project::find()->where(['id'=>$id])->one();
        $gallery =Gallery::find()->where(['project_id' => $project->id])->asArray()->all();
//        prd($gallery);
        return $this->render('project',compact('project','gallery'));
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
