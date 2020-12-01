<?php
$url = Yii::getAlias("@fronted_domain");
use yii\helpers\Url;
?>
<div>
    <section class="services_head" style="background:#050A33;">
    <div class="container_fluid">
        <h2 class="text-center about_new">Services</h2>
        <div class="row mx-0 my-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row pdtop">
                    <!--<div class="col-lg-1 bg-dark"></div>-->
                    <div class="col-lg-6 order-2 order-md-1 d-flex justify-content-center align-items-center">
                        <img src="/img/servise1-01.png" alt="" style="width:534px"  class="pr-4">
                    </div>
                    <div class="col-lg-6 order-1 order-md-2">
                        <h1 class="text-level-1 mb-2">Software development</h1>
                        <p class="description-text mt-4">
                            Development of software will allow your company to reduce the cost of information technology and software development for the internal needs of the company. It will take your business to the next level of integration
                        </p>
                        <p class="description-text">
                            Software development process <br>
                            Individual orders include following steps:

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="services_steps" style="background:#050A33">
    <div class="container_fluid" style="width: 90%; margin: 0 auto; display: flex; justify-content: center">
        <div class="row mx-0">
            <div class="row mx-0 px-5">
                <div class="step col-lg-4 p-0">
                    <span class="front-text">1</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title">Initiation </h3>
                        <p class="description-text pr-3">
                            initiation process starts from contacting, so get in touch with us by filling out our contact form and let us know requirements of your project
                        </p>
                    </div>
                </div>
                <div class="step col-lg-4 p-0">
                    <span class="front-text">2</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title h3-responsive">Designing Requirements </h3>
                        <p class="description-text pr-3">
                            Creating documents with functional requirements
                        </p>
                    </div>
                </div>
                <div class="step col-lg-4 p-0">
                    <span class="front-text">3</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title">Technical Analysis </h3>
                        <p class="description-text pr-3">
                            Preparation of detailed technical requirements and technical specification for system development
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mx-0 px-5 mt-5">
                <div class="step col-lg-4 p-0">
                    <span class="front-text">4</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title">Preparing source code </h3>
                        <p class="description-text pr-3">
                           Preparing source code of a product, executable modules
                        </p>
                    </div>
                </div>
                <div class="step col-lg-4 p-0">
                    <span class="front-text">5</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title h3-responsive">Preparing product testing plan</h3>
                        <p class="description-text pr-3">
                            Preparing product testing plan, certification, reports and information on current system bugs
                        </p>
                    </div>
                </div>
                <div class="step col-lg-4 p-0">
                    <span class="front-text">6</span>
                    <span class="back-text">Step</span>
                    <div class="details">
                        <h3 class="block-title">Support and Implementation </h3>
                        <p class="description-text pr-3">
                            Support and Implementation – Deployment, archiving and software product support
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services_buttons" style="background: #08052F;">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center"  style="background: #08052F;">
            <div class="center">
                <a href="<?=Url::to(['site/partfolio/'])?>"> <button class="btn btn-blue blue-button">Order app</button></a>
                <a href="<?=Url::to(['site/partfolio/'])?>"><button class="btn black-button">Portfolio</button></a>
            </div>
        </div>
    </div>
</section>
<section class="services_mobile py-5" style="background:#050A33">
    <div class="container_fluid">
        <div class="row mx-0 my-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-level-1 mb-2">Mobile application development </h1>
                        <p class="description-text mt-4">
                            Relible development of mobile application for IOS and ANDROID <BR>
                            Development of mobile application for IOS <BR>
                            Our experienced developers with deep knowledge of technology will complete tasks of any complexity

                        </p>
                        <div class="icons-mobile d-flex justify-content-center">
                            <div class="icon-mobile h-100 d-flex flex-column justify-content-between">
                                <img src="/img/svg/android.svg" alt="">
                                <h6 class="h6-responsive">Android</h6>
                            </div>
                            <div class="icon-mobile ml-5 h-100 d-flex flex-column justify-content-between">
                                <img src="/img/svg/ios.svg" alt="" class="mt-3">
                                <h6 class="h6-responsive">iOS</h6>
                            </div>
                        </div>
                        <p class="description-text mt-2">
                            DEVELOPMENT OF MOBILE APPS FOR ANDROID <BR>
                            We create multifunctional Android applications for smartphones, tablets, pc and other mobile devices
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img src="/img/service2-01.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="services_websites pt-5 pb-1" style="background:#050A33">
    <div class="container_fluid">
        <div class="row my-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6 order-2 order-md-1 d-flex justify-content-center align-items-center" style="padding-right:7rem">
                        <img src="/img/service3-01.png" alt="" width="90%" class="pr-5">
                    </div>
                    <!--<div class="col-lg-1"></div>-->
                    <div class="col-lg-6 order-1 order-md-2 z-index-2 pl-5">
                        <h1 class="text-level-1 mb-5">DEVELOPMENT OF WEBSITES </h1>
                        <p class="description-text mt-4">
                            DACOREIT - PROFESSIONAL WEBSITE DEVELOPMENT STUDIO
                            We offer a full range of services for web projects development – from the scratch and on a turnkey basis. We carry out all stages of development - you get a fully working resource. Extensive experience and knowledge of the specifics of web development to allow us to find individual solutions for any web project.

                        </p>
                        <p class="description-text">
                            We know how to create a website that will favourably distinguish itself against the background of competitors, satisfy individual requests, including cost, and making a profit.
                            We design a user-friendly interface with an attractive, modern design, create a responsive layout using Bootstrap or Uikit, use flexible and universal CMS program high-quality functionality for individual tasks
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="services_features py-2">
    <div class="container_fluid" id="web_ser">
        <div class="row mx-0 my-5">
            <div class="row">
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_6.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">ADAPTABILITY</h3>
                        <p class="description-text">
                            Taking into accountability we create site design and layout so that the project is displayed correctly and beautifully on all devices and displays of different resolutions. These resources are convenient for everyone to use, and you do not lose potential customers.
                        </p>
                    </div>
                </div>
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_5.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">USABILITY</h3>
                        <p class="description-text">
                            We analyze the requests of the target audience, develop a page script, make the interface convenient and understandable. Searching for information, buying a product - regardless of the purpose, we help your customers reach it quickly and with pleasure.
                        </p>
                    </div>
                </div>
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_4.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">SPEED</h3>
                        <p class="description-text">
                            We optimize the speed of loading web pages for the speed of the resource on desktops and mobiles. Potential clients will not leave the site, as search engines  will not work slowly.
                        </p>
                    </div>
                </div>
                <div class="w-100 my-4"></div>
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_3.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">CONTROL MANAGEMENT</h3>
                        <p class="description-text">
                            Administration of the project after launch can be entrusted to us or you can conduct it by yourself. We advise the customer's representative on working with the site's admin panel. You will be able to manage the project by yourself.
                        </p>
                    </div>
                </div>
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_2.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">OPTIMIZATION</h3>
                        <p class="description-text">
                            We carry out technical and internal website optimization. Analytics systems are installed, headers, metadata, images are optimized. The project is completely ready for promotion.
                        </p>
                    </div>
                </div>
                <div class="feature col-lg-4 to-center">
                    <img src="/img/s_1.png" alt="" class="icon" class="mb-3">
                    <div class="details">
                        <h3 class="block-title mt-4 mb-2">FUNCTIONALITY</h3>
                        <p class="description-text">
                            We introduce functionality that increases customer confidence in the resource, motivates them to take the target action - buying, making a call, making an application, or subscribing. We develop individual interactive elements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services_crm py-5" style="background:#050A33; width:90% margin:0 auto">
    <div class="container_fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6 z-index-2">
                        <h1 class="text-level-1 mb-2">Developing CRM - ERP</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="ac-head-text">INCREASE SALES </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text pr-5">
                                        The CRM system will increase efficiency of sales department thanks to “smart” transaction reminders. From now on, your managers will not forget about the important sales action.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="ac-head-text">OPTIMIZATION OF WORK FOR BUSINESS PROCESSES </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text">
                                        CRM-system will allow you to control the process of working with the client. Make adjustments or create reminders to employees at every step.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="ac-head-text">COMPANY MANAGEMENT AUTOMATION </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text">
                                        According to statistics, up to 75% of a manager's time is taken up by operational management. With the help of a CRM system, you automate these processes.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <h4 class="ac-head-text">MAINTENANCE OF LEADERS, CLIENTS AND TRANSACTIONS </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text">
                                        You will have visual information about all clients and transactions. Based on it, you can make unique offers at the right time.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <h4 class="ac-head-text">ANALYSIS AND FORECAST OF SALES </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text">
                                        You will be able to connect third-party analytic services and keep records of clients and transactions.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 ac-item" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <h4 class="ac-head-text">DELEGATE AND ADJUST EMPLOYEE ROLES </h4>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body ac-content description-text">
                                        You will be able to distribute any tasks between employees and control the speed and quality of their implementation.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 margin-top-4 px-5 d-flex justify-content-center align-items-center">
                        <div class="wrap" style="width:90%;margin:0 auto">
                            <img src="/img/services_crm.png" class="w-100"  alt="">
                            <p class="description-text mt-4">
                                <h4 class="ac-head-text">
                                    IN WHAT CASES DO YOUR BUSINESS NEED A CRM SYSTEM?
                                </h4>
                            You have a large number of clients and you do not have time to manage them manually
                            You want to improve the efficiency of your sales department
                            You want to get statistics and analytics of the process of working with clients

                            </p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="services_chatbots pt-5 pb-1">-->
<!--    <div class="container_fluid">-->
<!--        <div class="row mx-0 my-5">-->
<!--            <div class="col-lg-1"></div>-->
<!--            <div class="col-lg-10">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-5 d-flex justify-content-center align-items-center">-->
<!--                        <img src="/img/services-chatbots.png" alt="" class="m-4">-->
<!--                    </div>-->
<!--                    <div class="col-lg-1"></div>-->
<!--                    <div class="col-lg-6 z-index-2">-->
<!--                        <h1 class="text-level-1 mb-5">Developing Chatbots</h1>-->
<!--                        <p class="description-text mt-4">-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam cursus morbi eleifend at purus vitae vel nulla ullamcorper. Sed consequat, id dui, tempus quis. Sapien,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam cursus morbi eleifend at purus vitae vel nulla ullamcorper. Sed consequat, id dui, tempus quis. Sapien,-->
<!--                        </p>-->
<!--                        <div class="icons-mobile d-flex justify-content-start mt-5">-->
<!--                            <div class="icon-mobile h-100 d-flex flex-column justify-content-between">-->
<!--                                <img src="/img/facebook-bots.png" alt="">-->
<!--                                <h6 class="h6-responsive">Facebook bots</h4>-->
<!--                            </div>-->
<!--                            <div class="icon-mobile ml-5 h-100 d-flex flex-column justify-content-between">-->
<!--                                <img src="/img/whatsup-bots.png" alt="" class="mt-2">-->
<!--                                <h6 class="h6-responsive">What's up bots</h4>-->
<!--                            </div>-->
<!--                            <div class="icon-mobile ml-5 h-100 d-flex flex-column justify-content-between">-->
<!--                                <img src="/img/telegram-bots.png" alt="" class="mt-2">-->
<!--                                <h6 class="h6-responsive">Telegram bots</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-1"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="services_tele-features py-2">-->
<!--    <div class="container_fluid">-->
<!--        <h1 class="text-level-2 mb-5 text-center">Преимущества Telegram-ботов</h1>-->
<!--        <div class="row mx-0 my-5">-->
<!--            <div class="row mx-0 px-5">-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Доступ с любых устройств.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Вы экономите, так как нет необходимости разрабатывать отдельные приложения для Android, IPhone и компьютера - диалоги автоматически синхронизируются со всеми устройствами.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Мгновенные ответы.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Клиенты быстро получают ответы на вопросы в сообщениях от бота, это снижает время ответа на заявку, в результате конверсия увеличивается. Вы легко можете изменить ответы клиентам.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Каналы и чаты.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Боты работают как независимо, так и внутри чатов, и позволяют получить мгновенный ответ, например, для уточнения цен на услуги и наличия товаров.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="w-100 my-4"></div>-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Интеграция.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Боты без проблем интегрируются с бизнес-приложениями, такими так 1С, CRM, CMS.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Быстрый доступ к контактам.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Боты позволяют быстро получить от клиентов контактные данные, такие как телефон и местонахождение, для передачи их менеджерам. Воронка продаж сокращается!-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="feature col-lg-4 to-center">-->
<!--                    <div class="details">-->
<!--                        <h3 class="block-title-purple mt-4 mb-2">Прием оплаты.</h3>-->
<!--                        <p class="description-text">-->
<!--                            Благодаря интеграции с платежными системами бот может принимать безопасные платежи от клиентов.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="services_buttons">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row d-flex justify-content-center align-items-center">-->
<!--            <div class="center">-->
<!--                <button class="btn btn-blue blue-button">Order app</button>-->
<!--                <button class="btn black-button">Portfolio</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

</div>
