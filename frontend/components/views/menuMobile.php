<?php

use yii\helpers\Html;
use yii\helpers\Url;

function menuTreeMobile($menu)
{

//    prd($menu);
    //agar items element bo'lmasa menuTreeMobile ga $menus keldi degani
    if (!isset($menu['items'])) {
        $tmenu = $menu;
        $menu = ['id' => 0];
        $menu['items'] = $tmenu;
        unset($tmenu);
    }

    if (!empty($menu['items'])) {

        $result = '';
        foreach ($menu['items'] as $item) {

            if ($item['page_id']) {
                $url = Url::to(['/page/view', 'id' => $item['page_id']], true);
            } elseif ($item['link']) {
                $url = Yii::$app->linkCreatorMobile->create($item['link']);
            } else {
                $url = null;
            }

            if (isItemActiveMobile($item)) {
                if (!empty($item['items'])) {

                    if ($item['parent_id'] == 0) {
                        $result .= "";
                    } else {
                        $result .= "";
                    }


                } else {
                    if ($item['parent_id'] != 0) {
                        $result .= "";
                    } else {
                        $result .= "";
                    }
                }
            } else {
                if (!empty($item['items'])) {
                    if ($item['parent_id'] != 0) {
                        if (!empty($item['items'])) {
                            if ($item['deep'] == 0) {
                                $result .= "";
                            } else {
                                $result .= "";
                            }
                        }
                    } else {
                        $result .= "";
                    }


                } else {
                    if ($item['parent_id'] != 0) {
                        if (!empty($item['id']['items'])) {
                            $result .= "";
                        } else {
                            $result .= "";
                        }

                    } else {
                        $result .= "";
                    }

                }
            }

            $child = menuTreeMobile($item);
            $result .= _viewMobile($item, $menu['id'], !empty($child));
            if ($child) {
                // @TODO
                if (!empty($item['items'])) {
                    if ($item['deep'] == 0) {
                        $result .= "<ul>";//parent_id = 0
                    } else {
                        $result .= "<ul class='pl-3 py-0 pr-2'>";
                    }
                    $result .= $child;
                    $result .= "</ul>";
                }

            }
            $result .= "";
        }
        return $result;
    } else {
        return '';
    }
}

function _viewMobile($item, $parentId, $hasChild = null)
{
    // @TODO
    $result = '';
    $options = [];

    if ($item['page_id']) {
        $url = Url::to(['/page/view', 'id' => $item['page_id']]);
    } elseif ($item['link']) {
        if($item['link'] == '/'){
            $url = Url::to(['/']);
        }elseif ($item['link'][0] != '/'){ // media->foto or media->video
            $url = Yii::$app->linkCreator->create($item['link']);
        }else{
            $tmp = '';
            $language = \Yii::$app->language;
            if($language == 'ru-Ru' || $language == 'ru'){
                $tmp = $item['slug_ru'];
            }
            elseif($language == 'en-US' || $language == 'en'){
                $tmp = $item['slug_en'];
            }
            elseif($language == 'cyrl'){
                $tmp = $item['slug_cyrl'];
            }
            elseif($language == 'uz'){
                $tmp = $item['slug_uz'];
            }
            $url = Url::to(['site/blog', 'slug' => $tmp]);
        }
    } else {
        $url = '#';
    }

    $class = '';
    if ($url === '#') {
        $class .= '';
    }

    if (isset($item['name_' . Yii::$app->language])) {
        $content = $item['name_' . Yii::$app->language];
    } else {
        $content = $item['name_uz'];
    }

    if (!empty($item['items'])) {
        if ($item['parent_id'] == 0) {
            $class .= '';
            $options['data-toggle'] = '';
            $options['aria-haspopup'] = '';
//            $content .= ' <i class="fa fa-angle-down"></i>';
            $content .= '<i class="fa fa-angle-down mt-1 mr-2"></i>';
            $options['role'] = '';
        } else {
            $options['tabindex'] = '-1';
        }

    }
    if ($item['target_blank']) {
        $target_blank = TRUE;
    } else {
        $target_blank = FALSE;
    }

    $options['class'] = $class;
    if ($target_blank) {
        $options['target'] = 'blank';
    }

    if ($item['parent_id'] == 0) {

        if ($hasChild) {

            $result .= Html::a($content, $url, $options);

        } else {

            $result .= '<div>' . Html::a($content, $url, $options) . '</div>';

        }


    } else {

        if ($hasChild) {

            $result .= Html::a($content, $url, $options);

        } else {

            $result .= '<li>' . Html::a($content, $url, $options) . '</li>';

        }


    }

    return $result;
}

function isItemActiveMobile($item)
{
//    page_id, link
    if ($item['page_id']) {
        $url = Url::to(['/page/view', 'id' => $item['page_id']]);

        if (strpos($_SERVER['REQUEST_URI'], $url) !== false && $item['page_id'] == $_REQUEST['id']) {
            return true;
//        }elseif(strpos($url, $_SERVER['REQUEST_URI']) !== false){
//            return true;
        } else {
            return false;
        }

    } elseif (isset($item['link'])) {
        $item['link'] = Yii::$app->linkCreatorMobile->createArr($item['link']);

        if (is_array($item['link'])) {

            if (isset($item['link'][0])) {

                $groute = null;
                if (Yii::$app->controller !== null) {
                    $groute = Yii::$app->controller->getRoute();
                }
                $gparams = Yii::$app->request->getQueryParams();

                $route = Yii::getAlias($item['link'][0]);

                if ($route[0] !== '/' && Yii::$app->controller) {
                    $route = Yii::$app->controller->module->getUniqueId() . '/' . $route;
                }

                $defaultRoute = Yii::$app->defaultRoute;
                if ($defaultRoute == 'site') {
                    $defaultRoute = 'site/index';
                }
                if ($route == '/' and $defaultRoute == $groute) {
                    return true;
                }

                if (ltrim($route, '/') !== $groute) {
                    return false;
                }
                unset($item['link']['#']);

                if (count($item['link']) > 1) {
                    $params = $item['link'];
                    unset($params[0]);
                    foreach ($params as $name => $value) {
                        if ($value !== null && (!isset($gparams[$name]) || $gparams[$name] != $value)) {
                            return false;
                        }
                    }
                }

                return true;
            } else {
                return false;
            }
        } elseif (
            strpos($item['link'], 'http://') === 0
            ||
            strpos($item['link'], 'https://') === 0
            ||
            strpos($item['link'], 'ftp://') === 0
        ) {
            if (strpos($_SERVER['REQUEST_URI'], $item['link']) !== false) {

                return true;
            } else {
                return false;
            }
        }
    }

    return false;
}

?>

<div class="ul text-uppercase">
    <?= menuTreeMobile($menus); ?>
</div>
