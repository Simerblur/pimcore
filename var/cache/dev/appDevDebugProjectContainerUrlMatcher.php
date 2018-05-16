<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // _pimcore_service_robots_txt
        if ('/robots.txt' === $pathinfo) {
            return array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::robotsTxtAction',  '_route' => '_pimcore_service_robots_txt',);
        }

        // _pimcore_service_common_files
        if (preg_match('#^/(?P<filename>(robots\\.txt|crossdomain\\.xml|favicon\\.ico|browserconfig\\.xml|wpad\\.dat|\\.crl))$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pimcore_service_common_files')), array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::commonFilesAction',));
        }

        // _pimcore_service_common_files_apple_touch_icon
        if (preg_match('#^/(?P<filename>apple\\-touch\\-icon.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pimcore_service_common_files_apple_touch_icon')), array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::commonFilesAction',));
        }

        // _pimcore_service_hybridauth
        if (0 === strpos($pathinfo, '/hybridauth') && preg_match('#^/hybridauth/(?P<placeholder>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pimcore_service_hybridauth')), array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::hybridauthAction',));
        }

        // _pimcore_service_qrcode
        if (0 === strpos($pathinfo, '/qr~-~code') && preg_match('#^/qr~\\-~code/(?P<key>[a-zA-Z0-9_\\-]+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pimcore_service_qrcode')), array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::qrcodeAction',));
        }

        // _pimcore_service_thumbnail
        if (preg_match('#^/(?P<prefix>.*)image\\-thumb__(?P<assetId>\\d+)__(?P<thumbnailName>[a-zA-Z0-9_\\-]+)/(?P<filename>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pimcore_service_thumbnail')), array (  '_controller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController::thumbnailAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/asset')) {
                if (0 === strpos($pathinfo, '/admin/asset/get-')) {
                    // pimcore_admin_asset_getdatabyid
                    if ('/admin/asset/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getDataByIdAction',  '_route' => 'pimcore_admin_asset_getdatabyid',);
                    }

                    // pimcore_admin_asset_getdocumentthumbnail
                    if ('/admin/asset/get-document-thumbnail' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getDocumentThumbnailAction',  '_route' => 'pimcore_admin_asset_getdocumentthumbnail',);
                    }

                    // pimcore_admin_asset_getimagethumbnail
                    if ('/admin/asset/get-image-thumbnail' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getImageThumbnailAction',  '_route' => 'pimcore_admin_asset_getimagethumbnail',);
                    }

                    // pimcore_admin_asset_getvideothumbnail
                    if ('/admin/asset/get-video-thumbnail' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getVideoThumbnailAction',  '_route' => 'pimcore_admin_asset_getvideothumbnail',);
                    }

                    // pimcore_admin_asset_getpreviewdocument
                    if ('/admin/asset/get-preview-document' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getPreviewDocumentAction',  '_route' => 'pimcore_admin_asset_getpreviewdocument',);
                    }

                    // pimcore_admin_asset_getpreviewvideo
                    if ('/admin/asset/get-preview-video' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getPreviewVideoAction',  '_route' => 'pimcore_admin_asset_getpreviewvideo',);
                    }

                    // pimcore_admin_asset_getfoldercontentpreview
                    if ('/admin/asset/get-folder-content-preview' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getFolderContentPreviewAction',  '_route' => 'pimcore_admin_asset_getfoldercontentpreview',);
                    }

                    // pimcore_admin_asset_gettext
                    if ('/admin/asset/get-text' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::getTextAction',  '_route' => 'pimcore_admin_asset_gettext',);
                    }

                }

                // pimcore_admin_asset_gridproxy
                if ('/admin/asset/grid-proxy' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::gridProxyAction',  '_route' => 'pimcore_admin_asset_gridproxy',);
                }

                // pimcore_admin_asset_treegetchildsbyid
                if ('/admin/asset/tree-get-childs-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::treeGetChildsByIdAction',  '_route' => 'pimcore_admin_asset_treegetchildsbyid',);
                }

                // pimcore_admin_asset_treegetroot
                if ('/admin/asset/tree-get-root' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::treeGetRootAction',  '_route' => 'pimcore_admin_asset_treegetroot',);
                }

                if (0 === strpos($pathinfo, '/admin/asset/add-asset')) {
                    // pimcore_admin_asset_addasset
                    if ('/admin/asset/add-asset' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::addAssetAction',  '_route' => 'pimcore_admin_asset_addasset',);
                    }

                    // pimcore_admin_asset_addassetcompatibility
                    if ('/admin/asset/add-asset-compatibility' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::addAssetCompatibilityAction',  '_route' => 'pimcore_admin_asset_addassetcompatibility',);
                    }

                }

                // pimcore_admin_asset_addfolder
                if ('/admin/asset/add-folder' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::addFolderAction',  '_route' => 'pimcore_admin_asset_addfolder',);
                }

                // pimcore_admin_asset_replaceasset
                if ('/admin/asset/replace-asset' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::replaceAssetAction',  '_route' => 'pimcore_admin_asset_replaceasset',);
                }

                if (0 === strpos($pathinfo, '/admin/asset/delete')) {
                    // pimcore_admin_asset_delete
                    if ('/admin/asset/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::deleteAction',  '_route' => 'pimcore_admin_asset_delete',);
                    }

                    // pimcore_admin_asset_deleteinfo
                    if ('/admin/asset/delete-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::deleteInfoAction',  '_route' => 'pimcore_admin_asset_deleteinfo',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/asset/download')) {
                    // pimcore_admin_asset_download
                    if ('/admin/asset/download' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::downloadAction',  '_route' => 'pimcore_admin_asset_download',);
                    }

                    // pimcore_admin_asset_downloadimagethumbnail
                    if ('/admin/asset/download-image-thumbnail' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::downloadImageThumbnailAction',  '_route' => 'pimcore_admin_asset_downloadimagethumbnail',);
                    }

                    if (0 === strpos($pathinfo, '/admin/asset/download-as-zip')) {
                        // pimcore_admin_asset_downloadaszipjobs
                        if ('/admin/asset/download-as-zip-jobs' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::downloadAsZipJobsAction',  '_route' => 'pimcore_admin_asset_downloadaszipjobs',);
                        }

                        // pimcore_admin_asset_downloadaszipaddfiles
                        if ('/admin/asset/download-as-zip-add-files' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::downloadAsZipAddFilesAction',  '_route' => 'pimcore_admin_asset_downloadaszipaddfiles',);
                        }

                        // pimcore_admin_asset_downloadaszip
                        if ('/admin/asset/download-as-zip' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::downloadAsZipAction',  '_route' => 'pimcore_admin_asset_downloadaszip',);
                        }

                    }

                }

                // pimcore_admin_asset_update
                if ('/admin/asset/update' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::updateAction',  '_route' => 'pimcore_admin_asset_update',);
                }

                // pimcore_admin_webdav
                if (0 === strpos($pathinfo, '/admin/asset/webdav') && preg_match('#^/admin/asset/webdav(?P<path>.*)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_webdav')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::webdavAction',));
                }

                // pimcore_admin_asset_save
                if ('/admin/asset/save' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::saveAction',  '_route' => 'pimcore_admin_asset_save',);
                }

                // pimcore_admin_asset_showversion
                if ('/admin/asset/show-version' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::showVersionAction',  '_route' => 'pimcore_admin_asset_showversion',);
                }

                // pimcore_admin_asset_publishversion
                if ('/admin/asset/publish-version' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::publishVersionAction',  '_route' => 'pimcore_admin_asset_publishversion',);
                }

                if (0 === strpos($pathinfo, '/admin/asset/image-editor')) {
                    // pimcore_admin_asset_imageeditor
                    if ('/admin/asset/image-editor' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::imageEditorAction',  '_route' => 'pimcore_admin_asset_imageeditor',);
                    }

                    // pimcore_admin_asset_imageeditorsave
                    if ('/admin/asset/image-editor-save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::imageEditorSaveAction',  '_route' => 'pimcore_admin_asset_imageeditorsave',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/asset/import-')) {
                    if (0 === strpos($pathinfo, '/admin/asset/import-zip')) {
                        // pimcore_admin_asset_importzip
                        if ('/admin/asset/import-zip' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::importZipAction',  '_route' => 'pimcore_admin_asset_importzip',);
                        }

                        // pimcore_admin_asset_importzipfiles
                        if ('/admin/asset/import-zip-files' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::importZipFilesAction',  '_route' => 'pimcore_admin_asset_importzipfiles',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/asset/import-server')) {
                        // pimcore_admin_asset_importserver
                        if ('/admin/asset/import-server' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::importServerAction',  '_route' => 'pimcore_admin_asset_importserver',);
                        }

                        // pimcore_admin_asset_importserverfiles
                        if ('/admin/asset/import-server-files' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::importServerFilesAction',  '_route' => 'pimcore_admin_asset_importserverfiles',);
                        }

                    }

                    // pimcore_admin_asset_importurl
                    if ('/admin/asset/import-url' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::importUrlAction',  '_route' => 'pimcore_admin_asset_importurl',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/asset/copy')) {
                    // pimcore_admin_asset_copyinfo
                    if ('/admin/asset/copy-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::copyInfoAction',  '_route' => 'pimcore_admin_asset_copyinfo',);
                    }

                    // pimcore_admin_asset_copy
                    if ('/admin/asset/copy' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::copyAction',  '_route' => 'pimcore_admin_asset_copy',);
                    }

                }

                // pimcore_admin_asset_clearthumbnail
                if ('/admin/asset/clear-thumbnail' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController::clearThumbnailAction',  '_route' => 'pimcore_admin_asset_clearthumbnail',);
                }

            }

            // pimcore_admin_external_adminer_proxy_1
            if (0 === strpos($pathinfo, '/admin/adminer') && preg_match('#^/admin/adminer/(?P<path>.*)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_external_adminer_proxy_1')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController::proxyAction',));
            }

            if (0 === strpos($pathinfo, '/admin/class')) {
                if (0 === strpos($pathinfo, '/admin/class/get')) {
                    if (0 === strpos($pathinfo, '/admin/class/get-')) {
                        // pimcore_admin_class_getdocumenttypes
                        if ('/admin/class/get-document-types' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getDocumentTypesAction',  '_route' => 'pimcore_admin_class_getdocumenttypes',);
                        }

                        // pimcore_admin_class_getassettypes
                        if ('/admin/class/get-asset-types' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getAssetTypesAction',  '_route' => 'pimcore_admin_class_getassettypes',);
                        }

                        // pimcore_admin_class_gettree
                        if ('/admin/class/get-tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getTreeAction',  '_route' => 'pimcore_admin_class_gettree',);
                        }

                    }

                    // pimcore_admin_class_get
                    if ('/admin/class/get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getAction',  '_route' => 'pimcore_admin_class_get',);
                    }

                    if (0 === strpos($pathinfo, '/admin/class/get-')) {
                        if (0 === strpos($pathinfo, '/admin/class/get-custom-layout')) {
                            // pimcore_admin_class_getcustomlayout
                            if ('/admin/class/get-custom-layout' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getCustomLayoutAction',  '_route' => 'pimcore_admin_class_getcustomlayout',);
                            }

                            // pimcore_admin_class_getcustomlayoutdefinitions
                            if ('/admin/class/get-custom-layout-definitions' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getCustomLayoutDefinitionsAction',  '_route' => 'pimcore_admin_class_getcustomlayoutdefinitions',);
                            }

                        }

                        // pimcore_admin_class_getclassdefinitionforcolumnconfig
                        if ('/admin/class/get-class-definition-for-column-config' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getClassDefinitionForColumnConfigAction',  '_route' => 'pimcore_admin_class_getclassdefinitionforcolumnconfig',);
                        }

                        // pimcore_admin_class_getalllayouts
                        if ('/admin/class/get-all-layouts' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getAllLayoutsAction',  '_route' => 'pimcore_admin_class_getalllayouts',);
                        }

                        // pimcore_admin_class_getfieldcollectionusages
                        if ('/admin/class/get-fieldcollection-usages' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getFieldcollectionUsagesAction',  '_route' => 'pimcore_admin_class_getfieldcollectionusages',);
                        }

                        // pimcore_admin_class_getbrickusages
                        if ('/admin/class/get-bricks-usages' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::getBrickUsagesAction',  '_route' => 'pimcore_admin_class_getbrickusages',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/add')) {
                    // pimcore_admin_class_add
                    if ('/admin/class/add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::addAction',  '_route' => 'pimcore_admin_class_add',);
                    }

                    // pimcore_admin_class_addcustomlayout
                    if ('/admin/class/add-custom-layout' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::addCustomLayoutAction',  '_route' => 'pimcore_admin_class_addcustomlayout',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/delete')) {
                    // pimcore_admin_class_delete
                    if ('/admin/class/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::deleteAction',  '_route' => 'pimcore_admin_class_delete',);
                    }

                    // pimcore_admin_class_deletecustomlayout
                    if ('/admin/class/delete-custom-layout' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::deleteCustomLayoutAction',  '_route' => 'pimcore_admin_class_deletecustomlayout',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/save')) {
                    // pimcore_admin_class_savecustomlayout
                    if ('/admin/class/save-custom-layout' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::saveCustomLayoutAction',  '_route' => 'pimcore_admin_class_savecustomlayout',);
                    }

                    // pimcore_admin_class_save
                    if ('/admin/class/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::saveAction',  '_route' => 'pimcore_admin_class_save',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/import-')) {
                    // pimcore_admin_class_importclass
                    if ('/admin/class/import-class' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::importClassAction',  '_route' => 'pimcore_admin_class_importclass',);
                    }

                    // pimcore_admin_class_importcustomlayoutdefinition
                    if ('/admin/class/import-custom-layout-definition' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::importCustomLayoutDefinitionAction',  '_route' => 'pimcore_admin_class_importcustomlayoutdefinition',);
                    }

                    // pimcore_admin_class_importfieldcollection
                    if ('/admin/class/import-fieldcollection' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::importFieldcollectionAction',  '_route' => 'pimcore_admin_class_importfieldcollection',);
                    }

                    // pimcore_admin_class_importobjectbrick
                    if ('/admin/class/import-objectbrick' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::importObjectbrickAction',  '_route' => 'pimcore_admin_class_importobjectbrick',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/export-')) {
                    // pimcore_admin_class_exportclass
                    if ('/admin/class/export-class' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::exportClassAction',  '_route' => 'pimcore_admin_class_exportclass',);
                    }

                    // pimcore_admin_class_exportcustomlayoutdefinition
                    if ('/admin/class/export-custom-layout-definition' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::exportCustomLayoutDefinitionAction',  '_route' => 'pimcore_admin_class_exportcustomlayoutdefinition',);
                    }

                    // pimcore_admin_class_exportfieldcollection
                    if ('/admin/class/export-fieldcollection' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::exportFieldcollectionAction',  '_route' => 'pimcore_admin_class_exportfieldcollection',);
                    }

                    // pimcore_admin_class_exportobjectbrick
                    if ('/admin/class/export-objectbrick' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::exportObjectbrickAction',  '_route' => 'pimcore_admin_class_exportobjectbrick',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/fieldcollection-')) {
                    // pimcore_admin_class_fieldcollectionget
                    if ('/admin/class/fieldcollection-get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::fieldcollectionGetAction',  '_route' => 'pimcore_admin_class_fieldcollectionget',);
                    }

                    // pimcore_admin_class_fieldcollectionupdate
                    if ('/admin/class/fieldcollection-update' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::fieldcollectionUpdateAction',  '_route' => 'pimcore_admin_class_fieldcollectionupdate',);
                    }

                    // pimcore_admin_class_fieldcollectiondelete
                    if ('/admin/class/fieldcollection-delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::fieldcollectionDeleteAction',  '_route' => 'pimcore_admin_class_fieldcollectiondelete',);
                    }

                    // pimcore_admin_class_fieldcollectiontree
                    if ('/admin/class/fieldcollection-tree' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::fieldcollectionTreeAction',  '_route' => 'pimcore_admin_class_fieldcollectiontree',);
                    }

                    // pimcore_admin_class_fieldcollectionlist
                    if ('/admin/class/fieldcollection-list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::fieldcollectionListAction',  '_route' => 'pimcore_admin_class_fieldcollectionlist',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/objectbrick-')) {
                    // pimcore_admin_class_objectbrickget
                    if ('/admin/class/objectbrick-get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::objectbrickGetAction',  '_route' => 'pimcore_admin_class_objectbrickget',);
                    }

                    // pimcore_admin_class_objectbrickupdate
                    if ('/admin/class/objectbrick-update' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::objectbrickUpdateAction',  '_route' => 'pimcore_admin_class_objectbrickupdate',);
                    }

                    // pimcore_admin_class_objectbrickdelete
                    if ('/admin/class/objectbrick-delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::objectbrickDeleteAction',  '_route' => 'pimcore_admin_class_objectbrickdelete',);
                    }

                    // pimcore_admin_class_objectbricktree
                    if ('/admin/class/objectbrick-tree' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::objectbrickTreeAction',  '_route' => 'pimcore_admin_class_objectbricktree',);
                    }

                    // pimcore_admin_class_objectbricklist
                    if ('/admin/class/objectbrick-list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::objectbrickListAction',  '_route' => 'pimcore_admin_class_objectbricklist',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/class/bulk-')) {
                    // pimcore_admin_class_bulkimport
                    if ('/admin/class/bulk-import' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::bulkImportAction',  '_route' => 'pimcore_admin_class_bulkimport',);
                    }

                    // pimcore_admin_class_bulkcommit
                    if ('/admin/class/bulk-commit' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::bulkCommitAction',  '_route' => 'pimcore_admin_class_bulkcommit',);
                    }

                    // pimcore_admin_class_bulkexport
                    if ('/admin/class/bulk-export' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController::bulkExportAction',  '_route' => 'pimcore_admin_class_bulkexport',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/classificationstore')) {
                    if (0 === strpos($pathinfo, '/admin/classificationstore/delete-')) {
                        if (0 === strpos($pathinfo, '/admin/classificationstore/delete-collection')) {
                            // pimcore_admin_classificationstore_deletecollection
                            if ('/admin/classificationstore/delete-collection' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::deleteCollectionAction',  '_route' => 'pimcore_admin_classificationstore_deletecollection',);
                            }

                            // pimcore_admin_classificationstore_deletecollectionrelation
                            if ('/admin/classificationstore/delete-collection-relation' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::deleteCollectionRelationAction',  '_route' => 'pimcore_admin_classificationstore_deletecollectionrelation',);
                            }

                        }

                        // pimcore_admin_classificationstore_deleterelation
                        if ('/admin/classificationstore/delete-relation' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::deleteRelationAction',  '_route' => 'pimcore_admin_classificationstore_deleterelation',);
                        }

                        // pimcore_admin_classificationstore_deletegroup
                        if ('/admin/classificationstore/delete-group' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::deleteGroupAction',  '_route' => 'pimcore_admin_classificationstore_deletegroup',);
                        }

                        // pimcore_admin_classificationstore_deleteproperty
                        if ('/admin/classificationstore/delete-property' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::deletePropertyAction',  '_route' => 'pimcore_admin_classificationstore_deleteproperty',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/classificationstore/c')) {
                        if (0 === strpos($pathinfo, '/admin/classificationstore/create-')) {
                            // pimcore_admin_classificationstore_creategroup
                            if ('/admin/classificationstore/create-group' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::createGroupAction',  '_route' => 'pimcore_admin_classificationstore_creategroup',);
                            }

                            // pimcore_admin_classificationstore_createstore
                            if ('/admin/classificationstore/create-store' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::createStoreAction',  '_route' => 'pimcore_admin_classificationstore_createstore',);
                            }

                            // pimcore_admin_classificationstore_createcollection
                            if ('/admin/classificationstore/create-collection' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::createCollectionAction',  '_route' => 'pimcore_admin_classificationstore_createcollection',);
                            }

                        }

                        // pimcore_admin_classificationstore_collections
                        if ('/admin/classificationstore/collections' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::collectionsAction',  '_route' => 'pimcore_admin_classificationstore_collections',);
                        }

                        // pimcore_admin_classificationstore_collectionrelations
                        if ('/admin/classificationstore/collection-relations' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::collectionRelationsAction',  '_route' => 'pimcore_admin_classificationstore_collectionrelations',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/classificationstore/g')) {
                        // pimcore_admin_classificationstore_grouptreegetchildsbyid
                        if ('/admin/classificationstore/grouptree-get-childs-by-id' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::grouptreeGetChildsByIdAction',  '_route' => 'pimcore_admin_classificationstore_grouptreegetchildsbyid',);
                        }

                        // pimcore_admin_classificationstore_groups
                        if ('/admin/classificationstore/groups' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::groupsAction',  '_route' => 'pimcore_admin_classificationstore_groups',);
                        }

                        // pimcore_admin_classificationstore_getgroup
                        if ('/admin/classificationstore/getgroup' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::getgroupAction',  '_route' => 'pimcore_admin_classificationstore_getgroup',);
                        }

                        // pimcore_admin_classificationstore_getpage
                        if ('/admin/classificationstore/get-page' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::getPageAction',  '_route' => 'pimcore_admin_classificationstore_getpage',);
                        }

                    }

                    // pimcore_admin_classificationstore_liststores
                    if ('/admin/classificationstore/list-stores' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::listStoresAction',  '_route' => 'pimcore_admin_classificationstore_liststores',);
                    }

                    // pimcore_admin_classificationstore_searchrelations
                    if ('/admin/classificationstore/search-relations' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::searchRelationsAction',  '_route' => 'pimcore_admin_classificationstore_searchrelations',);
                    }

                    // pimcore_admin_classificationstore_storetree
                    if ('/admin/classificationstore/storetree' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::storetreeAction',  '_route' => 'pimcore_admin_classificationstore_storetree',);
                    }

                    // pimcore_admin_classificationstore_relations
                    if ('/admin/classificationstore/relations' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::relationsAction',  '_route' => 'pimcore_admin_classificationstore_relations',);
                    }

                    if (0 === strpos($pathinfo, '/admin/classificationstore/add-')) {
                        // pimcore_admin_classificationstore_addcollections
                        if ('/admin/classificationstore/add-collections' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::addCollectionsAction',  '_route' => 'pimcore_admin_classificationstore_addcollections',);
                        }

                        // pimcore_admin_classificationstore_addgroups
                        if ('/admin/classificationstore/add-groups' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::addGroupsAction',  '_route' => 'pimcore_admin_classificationstore_addgroups',);
                        }

                        // pimcore_admin_classificationstore_addproperty
                        if ('/admin/classificationstore/add-property' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::addPropertyAction',  '_route' => 'pimcore_admin_classificationstore_addproperty',);
                        }

                    }

                    // pimcore_admin_classificationstore_properties
                    if ('/admin/classificationstore/properties' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::propertiesAction',  '_route' => 'pimcore_admin_classificationstore_properties',);
                    }

                    // pimcore_admin_classificationstore_editstore
                    if ('/admin/classificationstore/edit-store' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController::editStoreAction',  '_route' => 'pimcore_admin_classificationstore_editstore',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/object')) {
                // pimcore_admin_dataobject_treegetchildsbyid
                if ('/admin/object/tree-get-childs-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::treeGetChildsByIdAction',  '_route' => 'pimcore_admin_dataobject_treegetchildsbyid',);
                }

                // pimcore_admin_dataobject_treegetroot
                if ('/admin/object/tree-get-root' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::treeGetRootAction',  '_route' => 'pimcore_admin_dataobject_treegetroot',);
                }

                if (0 === strpos($pathinfo, '/admin/object/get')) {
                    // pimcore_admin_dataobject_getidpathpaginginfo
                    if ('/admin/object/get-id-path-paging-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::getIdPathPagingInfoAction',  '_route' => 'pimcore_admin_dataobject_getidpathpaginginfo',);
                    }

                    // pimcore_admin_dataobject_get
                    if ('/admin/object/get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::getAction',  '_route' => 'pimcore_admin_dataobject_get',);
                    }

                    // pimcore_admin_dataobject_getfolder
                    if ('/admin/object/get-folder' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::getFolderAction',  '_route' => 'pimcore_admin_dataobject_getfolder',);
                    }

                }

                // pimcore_admin_dataobject_gridproxy
                if ('/admin/object/grid-proxy' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::gridProxyAction',  '_route' => 'pimcore_admin_dataobject_gridproxy',);
                }

                // pimcore_admin_dataobject_lock
                if ('/admin/object/lock' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::lockAction',  '_route' => 'pimcore_admin_dataobject_lock',);
                }

                if (0 === strpos($pathinfo, '/admin/object/add')) {
                    // pimcore_admin_dataobject_add
                    if ('/admin/object/add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::addAction',  '_route' => 'pimcore_admin_dataobject_add',);
                    }

                    // pimcore_admin_dataobject_addfolder
                    if ('/admin/object/add-folder' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::addFolderAction',  '_route' => 'pimcore_admin_dataobject_addfolder',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/object/delete')) {
                    // pimcore_admin_dataobject_delete
                    if ('/admin/object/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::deleteAction',  '_route' => 'pimcore_admin_dataobject_delete',);
                    }

                    // pimcore_admin_dataobject_deleteinfo
                    if ('/admin/object/delete-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::deleteInfoAction',  '_route' => 'pimcore_admin_dataobject_deleteinfo',);
                    }

                }

                // pimcore_admin_dataobject_diffversions
                if (0 === strpos($pathinfo, '/admin/object/diff-versions/from') && preg_match('#^/admin/object/diff\\-versions/from/(?P<from>[^/]++)/to/(?P<to>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_dataobject_diffversions')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::diffVersionsAction',));
                }

                // pimcore_admin_dataobject_changechildrensortby
                if ('/admin/object/change-children-sort-by' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::changeChildrenSortByAction',  '_route' => 'pimcore_admin_dataobject_changechildrensortby',);
                }

                if (0 === strpos($pathinfo, '/admin/object/copy')) {
                    // pimcore_admin_dataobject_copyinfo
                    if ('/admin/object/copy-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::copyInfoAction',  '_route' => 'pimcore_admin_dataobject_copyinfo',);
                    }

                    // pimcore_admin_dataobject_copyrewriteids
                    if ('/admin/object/copy-rewrite-ids' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::copyRewriteIdsAction',  '_route' => 'pimcore_admin_dataobject_copyrewriteids',);
                    }

                    // pimcore_admin_dataobject_copy
                    if ('/admin/object/copy' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::copyAction',  '_route' => 'pimcore_admin_dataobject_copy',);
                    }

                }

                // pimcore_admin_dataobject_update
                if ('/admin/object/update' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::updateAction',  '_route' => 'pimcore_admin_dataobject_update',);
                }

                if (0 === strpos($pathinfo, '/admin/object/save')) {
                    // pimcore_admin_dataobject_save
                    if ('/admin/object/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::saveAction',  '_route' => 'pimcore_admin_dataobject_save',);
                    }

                    // pimcore_admin_dataobject_savefolder
                    if ('/admin/object/save-folder' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::saveFolderAction',  '_route' => 'pimcore_admin_dataobject_savefolder',);
                    }

                }

                // pimcore_admin_dataobject_publishversion
                if ('/admin/object/publish-version' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::publishVersionAction',  '_route' => 'pimcore_admin_dataobject_publishversion',);
                }

                if (0 === strpos($pathinfo, '/admin/object/preview')) {
                    // pimcore_admin_dataobject_previewversion
                    if ('/admin/object/preview-version' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::previewVersionAction',  '_route' => 'pimcore_admin_dataobject_previewversion',);
                    }

                    // pimcore_admin_dataobject_preview
                    if ('/admin/object/preview' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::previewAction',  '_route' => 'pimcore_admin_dataobject_preview',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/object-helper')) {
                    // pimcore_admin_dataobjecthelper_loadobjectdata
                    if ('/admin/object-helper/load-object-data' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::loadObjectDataAction',  '_route' => 'pimcore_admin_dataobjecthelper_loadobjectdata',);
                    }

                    if (0 === strpos($pathinfo, '/admin/object-helper/import-')) {
                        // pimcore_admin_dataobjecthelper_importexportconfig
                        if ('/admin/object-helper/import-export-config' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importExportConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_importexportconfig',);
                        }

                        // pimcore_admin_dataobjecthelper_importsaveconfig
                        if ('/admin/object-helper/import-save-config' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importSaveConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_importsaveconfig',);
                        }

                        // pimcore_admin_dataobjecthelper_importpreview
                        if ('/admin/object-helper/import-preview' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importPreviewAction',  '_route' => 'pimcore_admin_dataobjecthelper_importpreview',);
                        }

                        // pimcore_admin_dataobjecthelper_importprocess
                        if ('/admin/object-helper/import-process' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importProcessAction',  '_route' => 'pimcore_admin_dataobjecthelper_importprocess',);
                        }

                        // pimcore_admin_dataobjecthelper_importupload
                        if ('/admin/object-helper/import-upload' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importUploadAction',  '_route' => 'pimcore_admin_dataobjecthelper_importupload',);
                        }

                        // pimcore_admin_dataobjecthelper_importgetfileinfo
                        if ('/admin/object-helper/import-get-file-info' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::importGetFileInfoAction',  '_route' => 'pimcore_admin_dataobjecthelper_importgetfileinfo',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/object-helper/g')) {
                        if (0 === strpos($pathinfo, '/admin/object-helper/get-')) {
                            // pimcore_admin_dataobjecthelper_getexportconfigs
                            if ('/admin/object-helper/get-export-configs' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::getExportConfigsAction',  '_route' => 'pimcore_admin_dataobjecthelper_getexportconfigs',);
                            }

                            // pimcore_admin_dataobjecthelper_getexportjobs
                            if ('/admin/object-helper/get-export-jobs' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::getExportJobsAction',  '_route' => 'pimcore_admin_dataobjecthelper_getexportjobs',);
                            }

                            // pimcore_admin_dataobjecthelper_getbatchjobs
                            if ('/admin/object-helper/get-batch-jobs' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::getBatchJobsAction',  '_route' => 'pimcore_admin_dataobjecthelper_getbatchjobs',);
                            }

                        }

                        // pimcore_admin_dataobjecthelper_generatelink
                        if ('/admin/object-helper/generate-link' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::generateLink',  '_route' => 'pimcore_admin_dataobjecthelper_generatelink',);
                        }

                        if (0 === strpos($pathinfo, '/admin/object-helper/grid-')) {
                            // pimcore_admin_dataobjecthelper_griddeletecolumnconfig
                            if ('/admin/object-helper/grid-delete-column-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::gridDeleteColumnConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_griddeletecolumnconfig',);
                            }

                            // pimcore_admin_dataobjecthelper_gridgetcolumnconfig
                            if ('/admin/object-helper/grid-get-column-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::gridGetColumnConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_gridgetcolumnconfig',);
                            }

                            // pimcore_admin_dataobjecthelper_gridconfigapplytoall
                            if ('/admin/object-helper/grid-config-apply-to-all' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::gridConfigApplyToAllAction',  '_route' => 'pimcore_admin_dataobjecthelper_gridconfigapplytoall',);
                            }

                            // pimcore_admin_dataobjecthelper_gridmarkfavouritecolumnconfig
                            if ('/admin/object-helper/grid-mark-favourite-column-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::gridMarkFavouriteColumnConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_gridmarkfavouritecolumnconfig',);
                            }

                            // pimcore_admin_dataobjecthelper_gridsavecolumnconfig
                            if ('/admin/object-helper/grid-save-column-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::gridSaveColumnConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_gridsavecolumnconfig',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/object-helper/d')) {
                        // pimcore_admin_dataobjecthelper_deleteimportconfig
                        if ('/admin/object-helper/delete-import-config' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::deleteImportConfigAction',  '_route' => 'pimcore_admin_dataobjecthelper_deleteimportconfig',);
                        }

                        // pimcore_admin_dataobjecthelper_doexport
                        if ('/admin/object-helper/do-export' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::doExportAction',  '_route' => 'pimcore_admin_dataobjecthelper_doexport',);
                        }

                        // pimcore_admin_dataobjecthelper_downloadcsvfile
                        if ('/admin/object-helper/download-csv-file' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::downloadCsvFileAction',  '_route' => 'pimcore_admin_dataobjecthelper_downloadcsvfile',);
                        }

                    }

                    // pimcore_admin_dataobjecthelper_preparehelpercolumnconfigs
                    if ('/admin/object-helper/prepare-helper-column-configs' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::prepareHelperColumnConfigs',  '_route' => 'pimcore_admin_dataobjecthelper_preparehelpercolumnconfigs',);
                    }

                    // pimcore_admin_dataobjecthelper_prepareimportpreview
                    if ('/admin/object-helper/prepare-import-preview' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::prepareImportPreviewAction',  '_route' => 'pimcore_admin_dataobjecthelper_prepareimportpreview',);
                    }

                    // pimcore_admin_dataobjecthelper_batch
                    if ('/admin/object-helper/batch' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController::batchAction',  '_route' => 'pimcore_admin_dataobjecthelper_batch',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/document')) {
                if (0 === strpos($pathinfo, '/admin/document/get-')) {
                    // pimcore_admin_document_getdatabyid
                    if ('/admin/document/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::getDataByIdAction',  '_route' => 'pimcore_admin_document_getdatabyid',);
                    }

                    // pimcore_admin_document_getdoctypes
                    if ('/admin/document/get-doc-types' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::getDocTypesAction',  '_route' => 'pimcore_admin_document_getdoctypes',);
                    }

                    // pimcore_admin_document_getidforpath
                    if ('/admin/document/get-id-for-path' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::getIdForPathAction',  '_route' => 'pimcore_admin_document_getidforpath',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/document/tr')) {
                    // pimcore_admin_document_treegetchildsbyid
                    if ('/admin/document/tree-get-childs-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::treeGetChildsByIdAction',  '_route' => 'pimcore_admin_document_treegetchildsbyid',);
                    }

                    // pimcore_admin_document_treegetroot
                    if ('/admin/document/tree-get-root' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::treeGetRootAction',  '_route' => 'pimcore_admin_document_treegetroot',);
                    }

                    if (0 === strpos($pathinfo, '/admin/document/translation-')) {
                        // pimcore_admin_document_translationdetermineparent
                        if ('/admin/document/translation-determine-parent' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::translationDetermineParentAction',  '_route' => 'pimcore_admin_document_translationdetermineparent',);
                        }

                        // pimcore_admin_document_translationadd
                        if ('/admin/document/translation-add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::translationAddAction',  '_route' => 'pimcore_admin_document_translationadd',);
                        }

                        // pimcore_admin_document_translationremove
                        if ('/admin/document/translation-remove' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::translationRemoveAction',  '_route' => 'pimcore_admin_document_translationremove',);
                        }

                        // pimcore_admin_document_translationchecklanguage
                        if ('/admin/document/translation-check-language' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::translationCheckLanguageAction',  '_route' => 'pimcore_admin_document_translationchecklanguage',);
                        }

                    }

                }

                // pimcore_admin_document_add
                if ('/admin/document/add' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::addAction',  '_route' => 'pimcore_admin_document_add',);
                }

                if (0 === strpos($pathinfo, '/admin/document/d')) {
                    if (0 === strpos($pathinfo, '/admin/document/delete')) {
                        // pimcore_admin_document_delete
                        if ('/admin/document/delete' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::deleteAction',  '_route' => 'pimcore_admin_document_delete',);
                        }

                        // pimcore_admin_document_deleteinfo
                        if ('/admin/document/delete-info' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::deleteInfoAction',  '_route' => 'pimcore_admin_document_deleteinfo',);
                        }

                    }

                    // pimcore_admin_document_doctypes
                    if ('/admin/document/doc-types' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::docTypesAction',  '_route' => 'pimcore_admin_document_doctypes',);
                    }

                    // pimcore_admin_document_diffversions
                    if (0 === strpos($pathinfo, '/admin/document/diff-versions/from') && preg_match('#^/admin/document/diff\\-versions/from/(?P<from>\\d+)/to/(?P<to>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_document_diffversions')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::diffVersionsAction',));
                    }

                    // pimcore_admin_document_diffversionsimage
                    if ('/admin/document/diff-versions-image' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::diffVersionsImageAction',  '_route' => 'pimcore_admin_document_diffversionsimage',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/document/update')) {
                    // pimcore_admin_document_update
                    if ('/admin/document/update' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::updateAction',  '_route' => 'pimcore_admin_document_update',);
                    }

                    // pimcore_admin_document_updatesite
                    if ('/admin/document/update-site' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::updateSiteAction',  '_route' => 'pimcore_admin_document_updatesite',);
                    }

                }

                // pimcore_admin_document_versiontosession
                if ('/admin/document/version-to-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::versionToSessionAction',  '_route' => 'pimcore_admin_document_versiontosession',);
                }

                // pimcore_admin_document_publishversion
                if ('/admin/document/publish-version' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::publishVersionAction',  '_route' => 'pimcore_admin_document_publishversion',);
                }

                // pimcore_admin_document_removesite
                if ('/admin/document/remove-site' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::removeSiteAction',  '_route' => 'pimcore_admin_document_removesite',);
                }

                if (0 === strpos($pathinfo, '/admin/document/copy')) {
                    // pimcore_admin_document_copyinfo
                    if ('/admin/document/copy-info' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::copyInfoAction',  '_route' => 'pimcore_admin_document_copyinfo',);
                    }

                    // pimcore_admin_document_copyrewriteids
                    if ('/admin/document/copy-rewrite-ids' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::copyRewriteIdsAction',  '_route' => 'pimcore_admin_document_copyrewriteids',);
                    }

                    // pimcore_admin_document_copy
                    if ('/admin/document/copy' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::copyAction',  '_route' => 'pimcore_admin_document_copy',);
                    }

                }

                // pimcore_admin_document_convert
                if ('/admin/document/convert' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::convertAction',  '_route' => 'pimcore_admin_document_convert',);
                }

                if (0 === strpos($pathinfo, '/admin/document/seopanel-tree')) {
                    // pimcore_admin_document_seopaneltreeroot
                    if ('/admin/document/seopanel-tree-root' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::seopanelTreeRootAction',  '_route' => 'pimcore_admin_document_seopaneltreeroot',);
                    }

                    // pimcore_admin_document_seopaneltree
                    if ('/admin/document/seopanel-tree' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController::seopanelTreeAction',  '_route' => 'pimcore_admin_document_seopaneltree',);
                    }

                }

                // pimcore_admin_documenttag_renderlet_renderlet
                if ('/admin/document_tag/renderlet' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController::renderletAction',  '_route' => 'pimcore_admin_documenttag_renderlet_renderlet',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/e')) {
                if (0 === strpos($pathinfo, '/admin/element')) {
                    // pimcore_admin_element_lockelement
                    if ('/admin/element/lock-element' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::lockElementAction',  '_route' => 'pimcore_admin_element_lockelement',);
                    }

                    // pimcore_admin_element_unlockelement
                    if ('/admin/element/unlock-element' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::unlockElementAction',  '_route' => 'pimcore_admin_element_unlockelement',);
                    }

                    // pimcore_admin_element_unlockpropagate
                    if ('/admin/element/unlock-propagate' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::unlockPropagateAction',  '_route' => 'pimcore_admin_element_unlockpropagate',);
                    }

                    if (0 === strpos($pathinfo, '/admin/element/get-')) {
                        // pimcore_admin_element_getidpath
                        if ('/admin/element/get-id-path' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getIdPathAction',  '_route' => 'pimcore_admin_element_getidpath',);
                        }

                        // pimcore_admin_element_getsubtype
                        if ('/admin/element/get-subtype' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getSubtypeAction',  '_route' => 'pimcore_admin_element_getsubtype',);
                        }

                        // pimcore_admin_element_getnicepath
                        if ('/admin/element/get-nice-path' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getNicePathAction',  '_route' => 'pimcore_admin_element_getnicepath',);
                        }

                        // pimcore_admin_element_getversions
                        if ('/admin/element/get-versions' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getVersionsAction',  '_route' => 'pimcore_admin_element_getversions',);
                        }

                        // pimcore_admin_element_getrequiresdependencies
                        if ('/admin/element/get-requires-dependencies' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getRequiresDependenciesAction',  '_route' => 'pimcore_admin_element_getrequiresdependencies',);
                        }

                        // pimcore_admin_element_getrequiredbydependencies
                        if ('/admin/element/get-required-by-dependencies' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getRequiredByDependenciesAction',  '_route' => 'pimcore_admin_element_getrequiredbydependencies',);
                        }

                        // pimcore_admin_element_getpredefinedproperties
                        if ('/admin/element/get-predefined-properties' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::getPredefinedPropertiesAction',  '_route' => 'pimcore_admin_element_getpredefinedproperties',);
                        }

                    }

                    // pimcore_admin_element_notelist
                    if ('/admin/element/note-list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::noteListAction',  '_route' => 'pimcore_admin_element_notelist',);
                    }

                    // pimcore_admin_element_noteadd
                    if ('/admin/element/note-add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::noteAddAction',  '_route' => 'pimcore_admin_element_noteadd',);
                    }

                    // pimcore_admin_element_findusages
                    if ('/admin/element/find-usages' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::findUsagesAction',  '_route' => 'pimcore_admin_element_findusages',);
                    }

                    // pimcore_admin_element_replaceassignments
                    if ('/admin/element/replace-assignments' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::replaceAssignmentsAction',  '_route' => 'pimcore_admin_element_replaceassignments',);
                    }

                    // pimcore_admin_element_typepath
                    if ('/admin/element/type-path' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::typePathAction',  '_route' => 'pimcore_admin_element_typepath',);
                    }

                    // pimcore_admin_element_versionupdate
                    if ('/admin/element/version-update' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::versionUpdateAction',  '_route' => 'pimcore_admin_element_versionupdate',);
                    }

                    // pimcore_admin_element_deleteversion
                    if ('/admin/element/delete-version' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::deleteVersionAction',  '_route' => 'pimcore_admin_element_deleteversion',);
                    }

                    // pimcore_admin_element_deleteallversion
                    if ('/admin/element/delete-all-versions' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::deleteAllVersionAction',  '_route' => 'pimcore_admin_element_deleteallversion',);
                    }

                    // pimcore_admin_element_analyzepermissions
                    if ('/admin/element/analyze-permissions' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController::analyzePermissionsAction',  '_route' => 'pimcore_admin_element_analyzepermissions',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/email')) {
                    // pimcore_admin_email_getdatabyid
                    if ('/admin/email/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::getDataByIdAction',  '_route' => 'pimcore_admin_email_getdatabyid',);
                    }

                    if (0 === strpos($pathinfo, '/admin/email/s')) {
                        if (0 === strpos($pathinfo, '/admin/email/save')) {
                            // pimcore_admin_email_save
                            if ('/admin/email/save' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::saveAction',  '_route' => 'pimcore_admin_email_save',);
                            }

                            // pimcore_admin_email_savetosession
                            if ('/admin/email/save-to-session' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::saveToSessionAction',  '_route' => 'pimcore_admin_email_savetosession',);
                            }

                        }

                        // pimcore_admin_email_showemaillog
                        if ('/admin/email/show-email-log' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::showEmailLogAction',  '_route' => 'pimcore_admin_email_showemaillog',);
                        }

                        // pimcore_admin_email_sendtestemail
                        if ('/admin/email/send-test-email' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::sendTestEmailAction',  '_route' => 'pimcore_admin_email_sendtestemail',);
                        }

                    }

                    // pimcore_admin_email_emaillogs
                    if ('/admin/email/email-logs' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::emailLogsAction',  '_route' => 'pimcore_admin_email_emaillogs',);
                    }

                    // pimcore_admin_email_deleteemaillog
                    if ('/admin/email/delete-email-log' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::deleteEmailLogAction',  '_route' => 'pimcore_admin_email_deleteemaillog',);
                    }

                    // pimcore_admin_email_resendemail
                    if ('/admin/email/resend-email' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::resendEmailAction',  '_route' => 'pimcore_admin_email_resendemail',);
                    }

                    // pimcore_admin_email_removefromsession
                    if ('/admin/email/remove-from-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::removeFromSessionAction',  '_route' => 'pimcore_admin_email_removefromsession',);
                    }

                    // pimcore_admin_email_blacklist
                    if ('/admin/email/blacklist' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::blacklistAction',  '_route' => 'pimcore_admin_email_blacklist',);
                    }

                    // pimcore_admin_email_changemasterdocument
                    if ('/admin/email/change-master-document' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_email_changemasterdocument',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/external_')) {
                    if (0 === strpos($pathinfo, '/admin/external_adminer')) {
                        // pimcore_admin_external_adminer_adminer
                        if ('/admin/external_adminer/adminer' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController::adminerAction',  '_route' => 'pimcore_admin_external_adminer_adminer',);
                        }

                        // pimcore_admin_external_adminer_proxy
                        if (preg_match('#^/admin/external_adminer/(?P<path>.*)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_external_adminer_proxy')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController::proxyAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/external_linfo')) {
                        // pimcore_admin_external_linfo_index
                        if ('/admin/external_linfo' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController::indexAction',  '_route' => 'pimcore_admin_external_linfo_index',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_pimcore_admin_external_linfo_index;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pimcore_admin_external_linfo_index'));
                            }

                            return $ret;
                        }
                        not_pimcore_admin_external_linfo_index:

                        // pimcore_admin_external_linfo_layout
                        if (0 === strpos($pathinfo, '/admin/external_linfo/layout') && preg_match('#^/admin/external_linfo/layout(?:/(?P<anything>.+))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_external_linfo_layout')), array (  'anything' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController::layoutAction',));
                        }

                    }

                    // pimcore_admin_external_opcache_index
                    if ('/admin/external_opcache' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController::indexAction',  '_route' => 'pimcore_admin_external_opcache_index',);
                    }

                }

                // pimcore_admin_external_adminer_proxy_2
                if (0 === strpos($pathinfo, '/admin/externals') && preg_match('#^/admin/externals/(?P<path>.*)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_external_adminer_proxy_2')), array (  'type' => 'external',  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController::proxyAction',));
                }

            }

            // pimcore_admin_elementcontrollerbase_treegetroot
            if ('/admin/tree-get-root' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase::treeGetRootAction',  '_route' => 'pimcore_admin_elementcontrollerbase_treegetroot',);
            }

            if (0 === strpos($pathinfo, '/admin/folder')) {
                // pimcore_admin_folder_getdatabyid
                if ('/admin/folder/get-data-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController::getDataByIdAction',  '_route' => 'pimcore_admin_folder_getdatabyid',);
                }

                if (0 === strpos($pathinfo, '/admin/folder/save')) {
                    // pimcore_admin_folder_save
                    if ('/admin/folder/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController::saveAction',  '_route' => 'pimcore_admin_folder_save',);
                    }

                    // pimcore_admin_folder_savetosession
                    if ('/admin/folder/save-to-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController::saveToSessionAction',  '_route' => 'pimcore_admin_folder_savetosession',);
                    }

                }

                // pimcore_admin_folder_removefromsession
                if ('/admin/folder/remove-from-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController::removeFromSessionAction',  '_route' => 'pimcore_admin_folder_removefromsession',);
                }

                // pimcore_admin_folder_changemasterdocument
                if ('/admin/folder/change-master-document' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_folder_changemasterdocument',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/hardlink')) {
                // pimcore_admin_hardlink_getdatabyid
                if ('/admin/hardlink/get-data-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController::getDataByIdAction',  '_route' => 'pimcore_admin_hardlink_getdatabyid',);
                }

                if (0 === strpos($pathinfo, '/admin/hardlink/save')) {
                    // pimcore_admin_hardlink_save
                    if ('/admin/hardlink/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController::saveAction',  '_route' => 'pimcore_admin_hardlink_save',);
                    }

                    // pimcore_admin_hardlink_savetosession
                    if ('/admin/hardlink/save-to-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController::saveToSessionAction',  '_route' => 'pimcore_admin_hardlink_savetosession',);
                    }

                }

                // pimcore_admin_hardlink_removefromsession
                if ('/admin/hardlink/remove-from-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController::removeFromSessionAction',  '_route' => 'pimcore_admin_hardlink_removefromsession',);
                }

                // pimcore_admin_hardlink_changemasterdocument
                if ('/admin/hardlink/change-master-document' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_hardlink_changemasterdocument',);
                }

            }

            // pimcore_admin_index
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController::indexAction',  '_route' => 'pimcore_admin_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_pimcore_admin_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pimcore_admin_index'));
                }

                return $ret;
            }
            not_pimcore_admin_index:

            // pimcore_admin_install_check
            if ('/admin/install/check' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController::checkAction',  '_route' => 'pimcore_admin_install_check',);
            }

            if (0 === strpos($pathinfo, '/admin/link')) {
                // pimcore_admin_link_getdatabyid
                if ('/admin/link/get-data-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController::getDataByIdAction',  '_route' => 'pimcore_admin_link_getdatabyid',);
                }

                if (0 === strpos($pathinfo, '/admin/link/save')) {
                    // pimcore_admin_link_save
                    if ('/admin/link/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController::saveAction',  '_route' => 'pimcore_admin_link_save',);
                    }

                    // pimcore_admin_link_savetosession
                    if ('/admin/link/save-to-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController::saveToSessionAction',  '_route' => 'pimcore_admin_link_savetosession',);
                    }

                }

                // pimcore_admin_link_removefromsession
                if ('/admin/link/remove-from-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController::removeFromSessionAction',  '_route' => 'pimcore_admin_link_removefromsession',);
                }

                // pimcore_admin_link_changemasterdocument
                if ('/admin/link/change-master-document' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_link_changemasterdocument',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/log/show')) {
                    // pimcore_admin_log_show
                    if ('/admin/log/show' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController::showAction',  '_route' => 'pimcore_admin_log_show',);
                    }

                    // pimcore_admin_log_showfileobject
                    if ('/admin/log/show-file-object' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController::showFileObjectAction',  '_route' => 'pimcore_admin_log_showfileobject',);
                    }

                }

                // pimcore_admin_log_priorityjson
                if ('/admin/log/priority-json' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController::priorityJsonAction',  '_route' => 'pimcore_admin_log_priorityjson',);
                }

                // pimcore_admin_log_componentjson
                if ('/admin/log/component-json' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController::componentJsonAction',  '_route' => 'pimcore_admin_log_componentjson',);
                }

                if (0 === strpos($pathinfo, '/admin/login')) {
                    // pimcore_admin_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::loginAction',  '_route' => 'pimcore_admin_login',);
                    }

                    // pimcore_admin_login_fallback
                    if ('/admin/login' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::loginAction',  '_route' => 'pimcore_admin_login_fallback',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_pimcore_admin_login_fallback;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pimcore_admin_login_fallback'));
                        }

                        return $ret;
                    }
                    not_pimcore_admin_login_fallback:

                    // pimcore_admin_login_check
                    if ('/admin/login/login' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::loginCheckAction',  '_route' => 'pimcore_admin_login_check',);
                    }

                    // pimcore_admin_login_lostpassword
                    if ('/admin/login/lostpassword' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::lostpasswordAction',  '_route' => 'pimcore_admin_login_lostpassword',);
                    }

                    // pimcore_admin_login_deeplink
                    if ('/admin/login/deeplink' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::deeplinkAction',  '_route' => 'pimcore_admin_login_deeplink',);
                    }

                }

                // pimcore_admin_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController::logoutAction',  '_route' => 'pimcore_admin_logout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/misc')) {
                if (0 === strpos($pathinfo, '/admin/misc/get-')) {
                    if (0 === strpos($pathinfo, '/admin/misc/get-available-')) {
                        // pimcore_admin_misc_getavailablemodules
                        if ('/admin/misc/get-available-modules' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableModulesAction',  '_route' => 'pimcore_admin_misc_getavailablemodules',);
                        }

                        // pimcore_admin_misc_getavailablecontrollers
                        if ('/admin/misc/get-available-controllers' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableControllersAction',  '_route' => 'pimcore_admin_misc_getavailablecontrollers',);
                        }

                        // pimcore_admin_misc_getavailableactions
                        if ('/admin/misc/get-available-actions' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableActionsAction',  '_route' => 'pimcore_admin_misc_getavailableactions',);
                        }

                        // pimcore_admin_misc_getavailabletemplates
                        if ('/admin/misc/get-available-templates' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableTemplatesAction',  '_route' => 'pimcore_admin_misc_getavailabletemplates',);
                        }

                    }

                    // pimcore_admin_misc_getvalidfilename
                    if ('/admin/misc/get-valid-filename' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getValidFilenameAction',  '_route' => 'pimcore_admin_misc_getvalidfilename',);
                    }

                    // pimcore_admin_misc_getlanguageflag
                    if ('/admin/misc/get-language-flag' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getLanguageFlagAction',  '_route' => 'pimcore_admin_misc_getlanguageflag',);
                    }

                }

                // pimcore_admin_misc_jsontranslationssystem
                if ('/admin/misc/json-translations-system' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::jsonTranslationsSystemAction',  '_route' => 'pimcore_admin_misc_jsontranslationssystem',);
                }

                // pimcore_admin_misc_scriptproxy
                if ('/admin/misc/script-proxy' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::scriptProxyAction',  '_route' => 'pimcore_admin_misc_scriptproxy',);
                }

                // pimcore_admin_misc_admincss
                if ('/admin/misc/admin-css' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::adminCssAction',  '_route' => 'pimcore_admin_misc_admincss',);
                }

                // pimcore_admin_misc_availablelanguages
                if ('/admin/misc/available-languages' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::availableLanguagesAction',  '_route' => 'pimcore_admin_misc_availablelanguages',);
                }

                // pimcore_admin_misc_ping
                if ('/admin/misc/ping' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::pingAction',  '_route' => 'pimcore_admin_misc_ping',);
                }

                // pimcore_admin_misc_phpinfo
                if ('/admin/misc/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::phpinfoAction',  '_route' => 'pimcore_admin_misc_phpinfo',);
                }

                if (0 === strpos($pathinfo, '/admin/misc/fileexplorer-')) {
                    // pimcore_admin_misc_fileexplorertree
                    if ('/admin/misc/fileexplorer-tree' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerTreeAction',  '_route' => 'pimcore_admin_misc_fileexplorertree',);
                    }

                    if (0 === strpos($pathinfo, '/admin/misc/fileexplorer-content')) {
                        // pimcore_admin_misc_fileexplorercontent
                        if ('/admin/misc/fileexplorer-content' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerContentAction',  '_route' => 'pimcore_admin_misc_fileexplorercontent',);
                        }

                        // pimcore_admin_misc_fileexplorercontentsave
                        if ('/admin/misc/fileexplorer-content-save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerContentSaveAction',  '_route' => 'pimcore_admin_misc_fileexplorercontentsave',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/misc/fileexplorer-add')) {
                        // pimcore_admin_misc_fileexploreradd
                        if ('/admin/misc/fileexplorer-add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerAddAction',  '_route' => 'pimcore_admin_misc_fileexploreradd',);
                        }

                        // pimcore_admin_misc_fileexploreraddfolder
                        if ('/admin/misc/fileexplorer-add-folder' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerAddFolderAction',  '_route' => 'pimcore_admin_misc_fileexploreraddfolder',);
                        }

                    }

                    // pimcore_admin_misc_fileexplorerdelete
                    if ('/admin/misc/fileexplorer-delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerDeleteAction',  '_route' => 'pimcore_admin_misc_fileexplorerdelete',);
                    }

                    // pimcore_admin_misc_fileexplorerrename
                    if ('/admin/misc/fileexplorer-rename' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::fileexplorerRenameAction',  '_route' => 'pimcore_admin_misc_fileexplorerrename',);
                    }

                }

                // pimcore_admin_misc_maintenance
                if ('/admin/misc/maintenance' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::maintenanceAction',  '_route' => 'pimcore_admin_misc_maintenance',);
                }

                if (0 === strpos($pathinfo, '/admin/misc/http-error-log')) {
                    // pimcore_admin_misc_httperrorlog
                    if ('/admin/misc/http-error-log' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::httpErrorLogAction',  '_route' => 'pimcore_admin_misc_httperrorlog',);
                    }

                    // pimcore_admin_misc_httperrorlogflush
                    if ('/admin/misc/http-error-log-flush' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::httpErrorLogFlushAction',  '_route' => 'pimcore_admin_misc_httperrorlogflush',);
                    }

                    // pimcore_admin_misc_httperrorlogdetail
                    if ('/admin/misc/http-error-log-detail' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::httpErrorLogDetailAction',  '_route' => 'pimcore_admin_misc_httperrorlogdetail',);
                    }

                }

                // pimcore_admin_misc_countrylist
                if ('/admin/misc/country-list' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::countryListAction',  '_route' => 'pimcore_admin_misc_countrylist',);
                }

                // pimcore_admin_misc_languagelist
                if ('/admin/misc/language-list' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::languageListAction',  '_route' => 'pimcore_admin_misc_languagelist',);
                }

                // pimcore_admin_misc_test
                if ('/admin/misc/test' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::testAction',  '_route' => 'pimcore_admin_misc_test',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/newsletter')) {
                if (0 === strpos($pathinfo, '/admin/newsletter/get-')) {
                    // pimcore_admin_newsletter_getdatabyid
                    if ('/admin/newsletter/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::getDataByIdAction',  '_route' => 'pimcore_admin_newsletter_getdatabyid',);
                    }

                    // pimcore_admin_newsletter_getavailableclasses
                    if ('/admin/newsletter/get-available-classes' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::getAvailableClassesAction',  '_route' => 'pimcore_admin_newsletter_getavailableclasses',);
                    }

                    // pimcore_admin_newsletter_getavailablereports
                    if ('/admin/newsletter/get-available-reports' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::getAvailableReportsAction',  '_route' => 'pimcore_admin_newsletter_getavailablereports',);
                    }

                    // pimcore_admin_newsletter_getsendstatus
                    if ('/admin/newsletter/get-send-status' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::getSendStatusAction',  '_route' => 'pimcore_admin_newsletter_getsendstatus',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/newsletter/s')) {
                    if (0 === strpos($pathinfo, '/admin/newsletter/save')) {
                        // pimcore_admin_newsletter_save
                        if ('/admin/newsletter/save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::saveAction',  '_route' => 'pimcore_admin_newsletter_save',);
                        }

                        // pimcore_admin_newsletter_savetosession
                        if ('/admin/newsletter/save-to-session' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::saveToSessionAction',  '_route' => 'pimcore_admin_newsletter_savetosession',);
                        }

                    }

                    // pimcore_admin_newsletter_stopsend
                    if ('/admin/newsletter/stop-send' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::stopSendAction',  '_route' => 'pimcore_admin_newsletter_stopsend',);
                    }

                    if (0 === strpos($pathinfo, '/admin/newsletter/send')) {
                        // pimcore_admin_newsletter_send
                        if ('/admin/newsletter/send' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::sendAction',  '_route' => 'pimcore_admin_newsletter_send',);
                        }

                        // pimcore_admin_newsletter_sendtest
                        if ('/admin/newsletter/send-test' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::sendTestAction',  '_route' => 'pimcore_admin_newsletter_sendtest',);
                        }

                    }

                }

                // pimcore_admin_newsletter_checksql
                if ('/admin/newsletter/checksql' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::checksqlAction',  '_route' => 'pimcore_admin_newsletter_checksql',);
                }

                // pimcore_admin_newsletter_changemasterdocument
                if ('/admin/newsletter/change-master-document' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_newsletter_changemasterdocument',);
                }

                // pimcore_admin_newsletter_removefromsession
                if ('/admin/newsletter/remove-from-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController::removeFromSessionAction',  '_route' => 'pimcore_admin_newsletter_removefromsession',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/page')) {
                    if (0 === strpos($pathinfo, '/admin/page/ge')) {
                        // pimcore_admin_page_getdatabyid
                        if ('/admin/page/get-data-by-id' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::getDataByIdAction',  '_route' => 'pimcore_admin_page_getdatabyid',);
                        }

                        // pimcore_admin_page_getlist
                        if ('/admin/page/get-list' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::getListAction',  '_route' => 'pimcore_admin_page_getlist',);
                        }

                        // pimcore_admin_page_generatescreenshot
                        if ('/admin/page/generate-screenshot' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::generateScreenshotAction',  '_route' => 'pimcore_admin_page_generatescreenshot',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/page/save')) {
                        // pimcore_admin_page_save
                        if ('/admin/page/save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::saveAction',  '_route' => 'pimcore_admin_page_save',);
                        }

                        // pimcore_admin_page_savetosession
                        if ('/admin/page/save-to-session' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::saveToSessionAction',  '_route' => 'pimcore_admin_page_savetosession',);
                        }

                    }

                    // pimcore_admin_page_uploadscreenshot
                    if ('/admin/page/upload-screenshot' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::uploadScreenshotAction',  '_route' => 'pimcore_admin_page_uploadscreenshot',);
                    }

                    if (0 === strpos($pathinfo, '/admin/page/c')) {
                        // pimcore_admin_page_checkprettyurl
                        if ('/admin/page/check-pretty-url' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::checkPrettyUrlAction',  '_route' => 'pimcore_admin_page_checkprettyurl',);
                        }

                        // pimcore_admin_page_changemasterdocument
                        if ('/admin/page/change-master-document' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_page_changemasterdocument',);
                        }

                        // pimcore_admin_page_cleareditabledata
                        if ('/admin/page/clear-editable-data' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::clearEditableDataAction',  '_route' => 'pimcore_admin_page_cleareditabledata',);
                        }

                    }

                    // pimcore_admin_page_removefromsession
                    if ('/admin/page/remove-from-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController::removeFromSessionAction',  '_route' => 'pimcore_admin_page_removefromsession',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/portal')) {
                    // pimcore_admin_portal_dashboardlist
                    if ('/admin/portal/dashboard-list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::dashboardListAction',  '_route' => 'pimcore_admin_portal_dashboardlist',);
                    }

                    // pimcore_admin_portal_deletedashboard
                    if ('/admin/portal/delete-dashboard' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::deleteDashboardAction',  '_route' => 'pimcore_admin_portal_deletedashboard',);
                    }

                    // pimcore_admin_portal_createdashboard
                    if ('/admin/portal/create-dashboard' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::createDashboardAction',  '_route' => 'pimcore_admin_portal_createdashboard',);
                    }

                    // pimcore_admin_portal_getconfiguration
                    if ('/admin/portal/get-configuration' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::getConfigurationAction',  '_route' => 'pimcore_admin_portal_getconfiguration',);
                    }

                    // pimcore_admin_portal_removewidget
                    if ('/admin/portal/remove-widget' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::removeWidgetAction',  '_route' => 'pimcore_admin_portal_removewidget',);
                    }

                    // pimcore_admin_portal_reorderwidget
                    if ('/admin/portal/reorder-widget' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::reorderWidgetAction',  '_route' => 'pimcore_admin_portal_reorderwidget',);
                    }

                    // pimcore_admin_portal_addwidget
                    if ('/admin/portal/add-widget' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::addWidgetAction',  '_route' => 'pimcore_admin_portal_addwidget',);
                    }

                    // pimcore_admin_portal_updateportletconfig
                    if ('/admin/portal/update-portlet-config' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::updatePortletConfigAction',  '_route' => 'pimcore_admin_portal_updateportletconfig',);
                    }

                    if (0 === strpos($pathinfo, '/admin/portal/portlet-')) {
                        // pimcore_admin_portal_portletfeed
                        if ('/admin/portal/portlet-feed' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletFeedAction',  '_route' => 'pimcore_admin_portal_portletfeed',);
                        }

                        if (0 === strpos($pathinfo, '/admin/portal/portlet-modified-')) {
                            // pimcore_admin_portal_portletmodifieddocuments
                            if ('/admin/portal/portlet-modified-documents' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletModifiedDocumentsAction',  '_route' => 'pimcore_admin_portal_portletmodifieddocuments',);
                            }

                            // pimcore_admin_portal_portletmodifiedassets
                            if ('/admin/portal/portlet-modified-assets' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletModifiedAssetsAction',  '_route' => 'pimcore_admin_portal_portletmodifiedassets',);
                            }

                            // pimcore_admin_portal_portletmodifiedobjects
                            if ('/admin/portal/portlet-modified-objects' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletModifiedObjectsAction',  '_route' => 'pimcore_admin_portal_portletmodifiedobjects',);
                            }

                        }

                        // pimcore_admin_portal_portletmodificationstatistics
                        if ('/admin/portal/portlet-modification-statistics' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletModificationStatisticsAction',  '_route' => 'pimcore_admin_portal_portletmodificationstatistics',);
                        }

                        // pimcore_admin_portal_portletanalyticssites
                        if ('/admin/portal/portlet-analytics-sites' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController::portletAnalyticsSitesAction',  '_route' => 'pimcore_admin_portal_portletanalyticssites',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/printcontainer')) {
                    // pimcore_admin_printcontainer_getdatabyid
                    if ('/admin/printcontainer/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::getDataByIdAction',  '_route' => 'pimcore_admin_printcontainer_getdatabyid',);
                    }

                    // pimcore_admin_printcontainer_getprocessingoptions
                    if ('/admin/printcontainer/get-processing-options' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::getProcessingOptionsAction',  '_route' => 'pimcore_admin_printcontainer_getprocessingoptions',);
                    }

                    if (0 === strpos($pathinfo, '/admin/printcontainer/save')) {
                        // pimcore_admin_printcontainer_save
                        if ('/admin/printcontainer/save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::saveAction',  '_route' => 'pimcore_admin_printcontainer_save',);
                        }

                        // pimcore_admin_printcontainer_savetosession
                        if ('/admin/printcontainer/save-to-session' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::saveToSessionAction',  '_route' => 'pimcore_admin_printcontainer_savetosession',);
                        }

                    }

                    // pimcore_admin_printcontainer_startpdfgeneration
                    if ('/admin/printcontainer/start-pdf-generation' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::startPdfGenerationAction',  '_route' => 'pimcore_admin_printcontainer_startpdfgeneration',);
                    }

                    // pimcore_admin_printcontainer_activegenerateprocess
                    if ('/admin/printcontainer/active-generate-process' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::activeGenerateProcessAction',  '_route' => 'pimcore_admin_printcontainer_activegenerateprocess',);
                    }

                    // pimcore_admin_printcontainer_pdfdownload
                    if ('/admin/printcontainer/pdf-download' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::pdfDownloadAction',  '_route' => 'pimcore_admin_printcontainer_pdfdownload',);
                    }

                    if (0 === strpos($pathinfo, '/admin/printcontainer/c')) {
                        // pimcore_admin_printcontainer_checkpdfdirty
                        if ('/admin/printcontainer/check-pdf-dirty' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::checkPdfDirtyAction',  '_route' => 'pimcore_admin_printcontainer_checkpdfdirty',);
                        }

                        // pimcore_admin_printcontainer_changemasterdocument
                        if ('/admin/printcontainer/change-master-document' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_printcontainer_changemasterdocument',);
                        }

                        // pimcore_admin_printcontainer_cancelgeneration
                        if ('/admin/printcontainer/cancel-generation' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::cancelGenerationAction',  '_route' => 'pimcore_admin_printcontainer_cancelgeneration',);
                        }

                    }

                    // pimcore_admin_printcontainer_removefromsession
                    if ('/admin/printcontainer/remove-from-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController::removeFromSessionAction',  '_route' => 'pimcore_admin_printcontainer_removefromsession',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/printpage')) {
                    // pimcore_admin_printpage_getdatabyid
                    if ('/admin/printpage/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::getDataByIdAction',  '_route' => 'pimcore_admin_printpage_getdatabyid',);
                    }

                    // pimcore_admin_printpage_getprocessingoptions
                    if ('/admin/printpage/get-processing-options' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::getProcessingOptionsAction',  '_route' => 'pimcore_admin_printpage_getprocessingoptions',);
                    }

                    if (0 === strpos($pathinfo, '/admin/printpage/save')) {
                        // pimcore_admin_printpage_save
                        if ('/admin/printpage/save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::saveAction',  '_route' => 'pimcore_admin_printpage_save',);
                        }

                        // pimcore_admin_printpage_savetosession
                        if ('/admin/printpage/save-to-session' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::saveToSessionAction',  '_route' => 'pimcore_admin_printpage_savetosession',);
                        }

                    }

                    // pimcore_admin_printpage_startpdfgeneration
                    if ('/admin/printpage/start-pdf-generation' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::startPdfGenerationAction',  '_route' => 'pimcore_admin_printpage_startpdfgeneration',);
                    }

                    // pimcore_admin_printpage_activegenerateprocess
                    if ('/admin/printpage/active-generate-process' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::activeGenerateProcessAction',  '_route' => 'pimcore_admin_printpage_activegenerateprocess',);
                    }

                    // pimcore_admin_printpage_pdfdownload
                    if ('/admin/printpage/pdf-download' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::pdfDownloadAction',  '_route' => 'pimcore_admin_printpage_pdfdownload',);
                    }

                    if (0 === strpos($pathinfo, '/admin/printpage/c')) {
                        // pimcore_admin_printpage_checkpdfdirty
                        if ('/admin/printpage/check-pdf-dirty' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::checkPdfDirtyAction',  '_route' => 'pimcore_admin_printpage_checkpdfdirty',);
                        }

                        // pimcore_admin_printpage_changemasterdocument
                        if ('/admin/printpage/change-master-document' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_printpage_changemasterdocument',);
                        }

                        // pimcore_admin_printpage_cancelgeneration
                        if ('/admin/printpage/cancel-generation' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::cancelGenerationAction',  '_route' => 'pimcore_admin_printpage_cancelgeneration',);
                        }

                    }

                    // pimcore_admin_printpage_removefromsession
                    if ('/admin/printpage/remove-from-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController::removeFromSessionAction',  '_route' => 'pimcore_admin_printpage_removefromsession',);
                    }

                }

                // pimcore_admin_printpagecontrollerbase_pdfdownload
                if ('/admin/pdf-download' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::pdfDownloadAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_pdfdownload',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/g')) {
                // pimcore_admin_printpagecontrollerbase_getdatabyid
                if ('/admin/get-data-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::getDataByIdAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_getdatabyid',);
                }

                // pimcore_admin_printpagecontrollerbase_getprocessingoptions
                if ('/admin/get-processing-options' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::getProcessingOptionsAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_getprocessingoptions',);
                }

                if (0 === strpos($pathinfo, '/admin/gdpr')) {
                    // pimcore_admin_gdpr_admin_getdataproviders
                    if ('/admin/gdpr/get-data-providers' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AdminController::getDataProvidersAction',  '_route' => 'pimcore_admin_gdpr_admin_getdataproviders',);
                    }

                    // pimcore_admin_gdpr_asset_searchasset
                    if ('/admin/gdpr/asset/search-assets' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController::searchAssetAction',  '_route' => 'pimcore_admin_gdpr_asset_searchasset',);
                    }

                    // pimcore_admin_gdpr_asset_exportassets
                    if ('/admin/gdpr/asset/export' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController::exportAssetsAction',  '_route' => 'pimcore_admin_gdpr_asset_exportassets',);
                    }

                    // pimcore_admin_gdpr_dataobject_searchdataobjects
                    if ('/admin/gdpr/data-object/search-data-objects' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController::searchDataObjectsAction',  '_route' => 'pimcore_admin_gdpr_dataobject_searchdataobjects',);
                    }

                    // pimcore_admin_gdpr_dataobject_exportdataobject
                    if ('/admin/gdpr/data-object/export' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController::exportDataObjectAction',  '_route' => 'pimcore_admin_gdpr_dataobject_exportdataobject',);
                    }

                    // pimcore_admin_gdpr_pimcoreusers_searchusers
                    if ('/admin/gdpr/pimcore-users/search-users' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController::searchUsersAction',  '_route' => 'pimcore_admin_gdpr_pimcoreusers_searchusers',);
                    }

                    // pimcore_admin_gdpr_pimcoreusers_exportuserdata
                    if ('/admin/gdpr/pimcore-users/export-user-data' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController::exportUserDataAction',  '_route' => 'pimcore_admin_gdpr_pimcoreusers_exportuserdata',);
                    }

                    // pimcore_admin_gdpr_sentmail_exportdataobject
                    if ('/admin/gdpr/sent-mail/export' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\SentMailController::exportDataObjectAction',  '_route' => 'pimcore_admin_gdpr_sentmail_exportdataobject',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/save')) {
                    // pimcore_admin_printpagecontrollerbase_save
                    if ('/admin/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::saveAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_save',);
                    }

                    // pimcore_admin_printpagecontrollerbase_savetosession
                    if ('/admin/save-to-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::saveToSessionAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_savetosession',);
                    }

                }

                // pimcore_admin_printpagecontrollerbase_startpdfgeneration
                if ('/admin/start-pdf-generation' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::startPdfGenerationAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_startpdfgeneration',);
                }

                if (0 === strpos($pathinfo, '/admin/settings')) {
                    // pimcore_settings_display_custom_logo
                    if ('/admin/settings/display-custom-logo' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::displayCustomLogoAction',  '_route' => 'pimcore_settings_display_custom_logo',);
                    }

                    // pimcore_admin_settings_deletecustomlogo
                    if ('/admin/settings/delete-custom-logo' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::deleteCustomLogoAction',  '_route' => 'pimcore_admin_settings_deletecustomlogo',);
                    }

                    // pimcore_admin_settings_uploadcustomlogo
                    if ('/admin/settings/upload-custom-logo' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::uploadCustomLogoAction',  '_route' => 'pimcore_admin_settings_uploadcustomlogo',);
                    }

                    // pimcore_admin_settings_metadata
                    if ('/admin/settings/metadata' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::metadataAction',  '_route' => 'pimcore_admin_settings_metadata',);
                    }

                    if (0 === strpos($pathinfo, '/admin/settings/get-')) {
                        // pimcore_admin_settings_getpredefinedmetadata
                        if ('/admin/settings/get-predefined-metadata' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getPredefinedMetadataAction',  '_route' => 'pimcore_admin_settings_getpredefinedmetadata',);
                        }

                        // pimcore_admin_settings_getsystem
                        if ('/admin/settings/get-system' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getSystemAction',  '_route' => 'pimcore_admin_settings_getsystem',);
                        }

                        // pimcore_admin_settings_getweb2print
                        if ('/admin/settings/get-web2print' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getWeb2printAction',  '_route' => 'pimcore_admin_settings_getweb2print',);
                        }

                        if (0 === strpos($pathinfo, '/admin/settings/get-available-')) {
                            // pimcore_admin_settings_getavailablelanguages
                            if ('/admin/settings/get-available-languages' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getAvailableLanguagesAction',  '_route' => 'pimcore_admin_settings_getavailablelanguages',);
                            }

                            // pimcore_admin_settings_getavailableadminlanguages
                            if ('/admin/settings/get-available-admin-languages' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getAvailableAdminLanguagesAction',  '_route' => 'pimcore_admin_settings_getavailableadminlanguages',);
                            }

                            // pimcore_admin_settings_getavailablealgorithms
                            if ('/admin/settings/get-available-algorithms' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getAvailableAlgorithmsAction',  '_route' => 'pimcore_admin_settings_getavailablealgorithms',);
                            }

                            // pimcore_admin_settings_getavailablesites
                            if ('/admin/settings/get-available-sites' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getAvailableSitesAction',  '_route' => 'pimcore_admin_settings_getavailablesites',);
                            }

                            // pimcore_admin_settings_getavailablecountries
                            if ('/admin/settings/get-available-countries' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::getAvailableCountriesAction',  '_route' => 'pimcore_admin_settings_getavailablecountries',);
                            }

                        }

                    }

                    // pimcore_admin_settings_glossary
                    if ('/admin/settings/glossary' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::glossaryAction',  '_route' => 'pimcore_admin_settings_glossary',);
                    }

                    // pimcore_admin_settings_properties
                    if ('/admin/settings/properties' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::propertiesAction',  '_route' => 'pimcore_admin_settings_properties',);
                    }

                    if (0 === strpos($pathinfo, '/admin/settings/s')) {
                        // pimcore_admin_settings_setsystem
                        if ('/admin/settings/set-system' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::setSystemAction',  '_route' => 'pimcore_admin_settings_setsystem',);
                        }

                        // pimcore_admin_settings_setweb2print
                        if ('/admin/settings/set-web2print' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::setWeb2printAction',  '_route' => 'pimcore_admin_settings_setweb2print',);
                        }

                        // pimcore_admin_settings_staticroutes
                        if ('/admin/settings/staticroutes' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::staticroutesAction',  '_route' => 'pimcore_admin_settings_staticroutes',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/settings/clear-')) {
                        // pimcore_admin_settings_clearcache
                        if ('/admin/settings/clear-cache' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::clearCacheAction',  '_route' => 'pimcore_admin_settings_clearcache',);
                        }

                        // pimcore_admin_settings_clearoutputcache
                        if ('/admin/settings/clear-output-cache' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::clearOutputCacheAction',  '_route' => 'pimcore_admin_settings_clearoutputcache',);
                        }

                        // pimcore_admin_settings_cleartemporaryfiles
                        if ('/admin/settings/clear-temporary-files' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::clearTemporaryFilesAction',  '_route' => 'pimcore_admin_settings_cleartemporaryfiles',);
                        }

                    }

                    // pimcore_admin_settings_redirects
                    if ('/admin/settings/redirects' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::redirectsAction',  '_route' => 'pimcore_admin_settings_redirects',);
                    }

                    // pimcore_admin_settings_robotstxt
                    if ('/admin/settings/robots-txt' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::robotsTxtAction',  '_route' => 'pimcore_admin_settings_robotstxt',);
                    }

                    if (0 === strpos($pathinfo, '/admin/settings/thumbnail-')) {
                        // pimcore_admin_settings_thumbnailadaptercheck
                        if ('/admin/settings/thumbnail-adapter-check' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailAdapterCheckAction',  '_route' => 'pimcore_admin_settings_thumbnailadaptercheck',);
                        }

                        // pimcore_admin_settings_thumbnailadd
                        if ('/admin/settings/thumbnail-add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailAddAction',  '_route' => 'pimcore_admin_settings_thumbnailadd',);
                        }

                        // pimcore_admin_settings_thumbnailtree
                        if ('/admin/settings/thumbnail-tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailTreeAction',  '_route' => 'pimcore_admin_settings_thumbnailtree',);
                        }

                        // pimcore_admin_settings_thumbnaildelete
                        if ('/admin/settings/thumbnail-delete' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailDeleteAction',  '_route' => 'pimcore_admin_settings_thumbnaildelete',);
                        }

                        // pimcore_admin_settings_thumbnailget
                        if ('/admin/settings/thumbnail-get' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailGetAction',  '_route' => 'pimcore_admin_settings_thumbnailget',);
                        }

                        // pimcore_admin_settings_thumbnailupdate
                        if ('/admin/settings/thumbnail-update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::thumbnailUpdateAction',  '_route' => 'pimcore_admin_settings_thumbnailupdate',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/settings/tag-management-')) {
                        // pimcore_admin_settings_tagmanagementtree
                        if ('/admin/settings/tag-management-tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::tagManagementTreeAction',  '_route' => 'pimcore_admin_settings_tagmanagementtree',);
                        }

                        // pimcore_admin_settings_tagmanagementadd
                        if ('/admin/settings/tag-management-add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::tagManagementAddAction',  '_route' => 'pimcore_admin_settings_tagmanagementadd',);
                        }

                        // pimcore_admin_settings_tagmanagementdelete
                        if ('/admin/settings/tag-management-delete' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::tagManagementDeleteAction',  '_route' => 'pimcore_admin_settings_tagmanagementdelete',);
                        }

                        // pimcore_admin_settings_tagmanagementget
                        if ('/admin/settings/tag-management-get' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::tagManagementGetAction',  '_route' => 'pimcore_admin_settings_tagmanagementget',);
                        }

                        // pimcore_admin_settings_tagmanagementupdate
                        if ('/admin/settings/tag-management-update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::tagManagementUpdateAction',  '_route' => 'pimcore_admin_settings_tagmanagementupdate',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/settings/video-thumbnail-')) {
                        // pimcore_admin_settings_videothumbnailadaptercheck
                        if ('/admin/settings/video-thumbnail-adapter-check' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailAdapterCheckAction',  '_route' => 'pimcore_admin_settings_videothumbnailadaptercheck',);
                        }

                        // pimcore_admin_settings_videothumbnailadd
                        if ('/admin/settings/video-thumbnail-add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailAddAction',  '_route' => 'pimcore_admin_settings_videothumbnailadd',);
                        }

                        // pimcore_admin_settings_videothumbnailtree
                        if ('/admin/settings/video-thumbnail-tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailTreeAction',  '_route' => 'pimcore_admin_settings_videothumbnailtree',);
                        }

                        // pimcore_admin_settings_videothumbnaildelete
                        if ('/admin/settings/video-thumbnail-delete' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailDeleteAction',  '_route' => 'pimcore_admin_settings_videothumbnaildelete',);
                        }

                        // pimcore_admin_settings_videothumbnailget
                        if ('/admin/settings/video-thumbnail-get' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailGetAction',  '_route' => 'pimcore_admin_settings_videothumbnailget',);
                        }

                        // pimcore_admin_settings_videothumbnailupdate
                        if ('/admin/settings/video-thumbnail-update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::videoThumbnailUpdateAction',  '_route' => 'pimcore_admin_settings_videothumbnailupdate',);
                        }

                    }

                    // pimcore_admin_settings_websitesettings
                    if ('/admin/settings/website-settings' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController::websiteSettingsAction',  '_route' => 'pimcore_admin_settings_websitesettings',);
                    }

                }

                // pimcore_admin_searchadmin_search_find
                if ('/admin/search/search/find' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController::findAction',  '_route' => 'pimcore_admin_searchadmin_search_find',);
                }

                if (0 === strpos($pathinfo, '/admin/snippet')) {
                    // pimcore_admin_snippet_getdatabyid
                    if ('/admin/snippet/get-data-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController::getDataByIdAction',  '_route' => 'pimcore_admin_snippet_getdatabyid',);
                    }

                    if (0 === strpos($pathinfo, '/admin/snippet/save')) {
                        // pimcore_admin_snippet_save
                        if ('/admin/snippet/save' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController::saveAction',  '_route' => 'pimcore_admin_snippet_save',);
                        }

                        // pimcore_admin_snippet_savetosession
                        if ('/admin/snippet/save-to-session' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController::saveToSessionAction',  '_route' => 'pimcore_admin_snippet_savetosession',);
                        }

                    }

                    // pimcore_admin_snippet_removefromsession
                    if ('/admin/snippet/remove-from-session' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController::removeFromSessionAction',  '_route' => 'pimcore_admin_snippet_removefromsession',);
                    }

                    // pimcore_admin_snippet_changemasterdocument
                    if ('/admin/snippet/change-master-document' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController::changeMasterDocumentAction',  '_route' => 'pimcore_admin_snippet_changemasterdocument',);
                    }

                }

            }

            // pimcore_admin_printpagecontrollerbase_activegenerateprocess
            if ('/admin/active-generate-process' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::activeGenerateProcessAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_activegenerateprocess',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                // pimcore_admin_printpagecontrollerbase_checkpdfdirty
                if ('/admin/check-pdf-dirty' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::checkPdfDirtyAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_checkpdfdirty',);
                }

                // pimcore_admin_printpagecontrollerbase_changemasterdocument
                if ('/admin/change-master-document' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::changeMasterDocumentAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_changemasterdocument',);
                }

                // pimcore_admin_printpagecontrollerbase_cancelgeneration
                if ('/admin/cancel-generation' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::cancelGenerationAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_cancelgeneration',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/re')) {
                // pimcore_admin_printpagecontrollerbase_removefromsession
                if ('/admin/remove-from-session' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase::removeFromSessionAction',  '_route' => 'pimcore_admin_printpagecontrollerbase_removefromsession',);
                }

                if (0 === strpos($pathinfo, '/admin/recyclebin')) {
                    // pimcore_admin_recyclebin_list
                    if ('/admin/recyclebin/list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController::listAction',  '_route' => 'pimcore_admin_recyclebin_list',);
                    }

                    // pimcore_admin_recyclebin_restore
                    if ('/admin/recyclebin/restore' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController::restoreAction',  '_route' => 'pimcore_admin_recyclebin_restore',);
                    }

                    // pimcore_admin_recyclebin_flush
                    if ('/admin/recyclebin/flush' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController::flushAction',  '_route' => 'pimcore_admin_recyclebin_flush',);
                    }

                    // pimcore_admin_recyclebin_add
                    if ('/admin/recyclebin/add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController::addAction',  '_route' => 'pimcore_admin_recyclebin_add',);
                    }

                }

                // pimcore_admin_redirects_csvexport
                if ('/admin/redirects/csv-export' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController::csvExportAction',  '_route' => 'pimcore_admin_redirects_csvexport',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_admin_redirects_csvexport;
                    }

                    return $ret;
                }
                not_pimcore_admin_redirects_csvexport:

                // pimcore_admin_redirects_csvimport
                if ('/admin/redirects/csv-import' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController::csvImportAction',  '_route' => 'pimcore_admin_redirects_csvimport',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_pimcore_admin_redirects_csvimport;
                    }

                    return $ret;
                }
                not_pimcore_admin_redirects_csvimport:

                if (0 === strpos($pathinfo, '/admin/reports')) {
                    if (0 === strpos($pathinfo, '/admin/reports/analytics')) {
                        // pimcore_admin_reports_analytics_deeplink
                        if ('/admin/reports/analytics/deeplink' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::deeplinkAction',  '_route' => 'pimcore_admin_reports_analytics_deeplink',);
                        }

                        // pimcore_admin_reports_analytics_dataexplorer
                        if ('/admin/reports/analytics/data-explorer' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::dataExplorerAction',  '_route' => 'pimcore_admin_reports_analytics_dataexplorer',);
                        }

                        if (0 === strpos($pathinfo, '/admin/reports/analytics/get-')) {
                            // pimcore_admin_reports_analytics_getprofiles
                            if ('/admin/reports/analytics/get-profiles' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::getProfilesAction',  '_route' => 'pimcore_admin_reports_analytics_getprofiles',);
                            }

                            // pimcore_admin_reports_analytics_getdimensions
                            if ('/admin/reports/analytics/get-dimensions' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::getDimensionsAction',  '_route' => 'pimcore_admin_reports_analytics_getdimensions',);
                            }

                            // pimcore_admin_reports_analytics_getmetrics
                            if ('/admin/reports/analytics/get-metrics' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::getMetricsAction',  '_route' => 'pimcore_admin_reports_analytics_getmetrics',);
                            }

                            // pimcore_admin_reports_analytics_getsegments
                            if ('/admin/reports/analytics/get-segments' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::getSegmentsAction',  '_route' => 'pimcore_admin_reports_analytics_getsegments',);
                            }

                        }

                        // pimcore_admin_reports_analytics_chartmetricdata
                        if ('/admin/reports/analytics/chartmetricdata' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::chartmetricdataAction',  '_route' => 'pimcore_admin_reports_analytics_chartmetricdata',);
                        }

                        // pimcore_admin_reports_analytics_summary
                        if ('/admin/reports/analytics/summary' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::summaryAction',  '_route' => 'pimcore_admin_reports_analytics_summary',);
                        }

                        // pimcore_admin_reports_analytics_source
                        if ('/admin/reports/analytics/source' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController::sourceAction',  '_route' => 'pimcore_admin_reports_analytics_source',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/reports/custom-report')) {
                        // pimcore_admin_reports_customreport_tree
                        if ('/admin/reports/custom-report/tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::treeAction',  '_route' => 'pimcore_admin_reports_customreport_tree',);
                        }

                        // pimcore_admin_reports_customreport_add
                        if ('/admin/reports/custom-report/add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::addAction',  '_route' => 'pimcore_admin_reports_customreport_add',);
                        }

                        if (0 === strpos($pathinfo, '/admin/reports/custom-report/d')) {
                            // pimcore_admin_reports_customreport_delete
                            if ('/admin/reports/custom-report/delete' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::deleteAction',  '_route' => 'pimcore_admin_reports_customreport_delete',);
                            }

                            // pimcore_admin_reports_customreport_data
                            if ('/admin/reports/custom-report/data' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::dataAction',  '_route' => 'pimcore_admin_reports_customreport_data',);
                            }

                            // pimcore_admin_reports_customreport_drilldownoptions
                            if ('/admin/reports/custom-report/drill-down-options' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::drillDownOptionsAction',  '_route' => 'pimcore_admin_reports_customreport_drilldownoptions',);
                            }

                            // pimcore_admin_reports_customreport_downloadcsv
                            if ('/admin/reports/custom-report/download-csv' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::downloadCsvAction',  '_route' => 'pimcore_admin_reports_customreport_downloadcsv',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/reports/custom-report/c')) {
                            // pimcore_admin_reports_customreport_clone
                            if ('/admin/reports/custom-report/clone' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::cloneAction',  '_route' => 'pimcore_admin_reports_customreport_clone',);
                            }

                            // pimcore_admin_reports_customreport_columnconfig
                            if ('/admin/reports/custom-report/column-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::columnConfigAction',  '_route' => 'pimcore_admin_reports_customreport_columnconfig',);
                            }

                            // pimcore_admin_reports_customreport_chart
                            if ('/admin/reports/custom-report/chart' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::chartAction',  '_route' => 'pimcore_admin_reports_customreport_chart',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/reports/custom-report/get')) {
                            // pimcore_admin_reports_customreport_get
                            if ('/admin/reports/custom-report/get' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::getAction',  '_route' => 'pimcore_admin_reports_customreport_get',);
                            }

                            // pimcore_admin_reports_customreport_getreportconfig
                            if ('/admin/reports/custom-report/get-report-config' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::getReportConfigAction',  '_route' => 'pimcore_admin_reports_customreport_getreportconfig',);
                            }

                        }

                        // pimcore_admin_reports_customreport_update
                        if ('/admin/reports/custom-report/update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController::updateAction',  '_route' => 'pimcore_admin_reports_customreport_update',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/reports/piwik')) {
                        if (0 === strpos($pathinfo, '/admin/reports/piwik/reports')) {
                            // pimcore_admin_reports_piwik_reports
                            if ('/admin/reports/piwik/reports' === $pathinfo) {
                                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::reportsAction',  '_route' => 'pimcore_admin_reports_piwik_reports',);
                            }

                            // pimcore_admin_reports_piwik_report
                            if (preg_match('#^/admin/reports/piwik/reports/(?P<report>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_reports_piwik_report')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::reportAction',));
                            }

                        }

                        // pimcore_admin_reports_piwik_iframeintegration
                        if ('/admin/reports/piwik/iframe-integration' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::iframeIntegrationAction',  '_route' => 'pimcore_admin_reports_piwik_iframeintegration',);
                        }

                        // pimcore_admin_reports_piwik_sites
                        if ('/admin/reports/piwik/config/configured-sites' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::sitesAction',  '_route' => 'pimcore_admin_reports_piwik_sites',);
                        }

                        if (0 === strpos($pathinfo, '/admin/reports/piwik/portal-widgets')) {
                            // pimcore_admin_reports_piwik_portalwidgets
                            if (preg_match('#^/admin/reports/piwik/portal\\-widgets/(?P<configKey>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_reports_piwik_portalwidgets')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::portalWidgetsAction',));
                            }

                            // pimcore_admin_reports_piwik_portalwidget
                            if (preg_match('#^/admin/reports/piwik/portal\\-widgets/(?P<configKey>[^/]++)/(?P<widgetId>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_reports_piwik_portalwidget')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::portalWidgetAction',));
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/reports/piwik/api/site')) {
                            // pimcore_admin_reports_piwik_apisitecreate
                            if (preg_match('#^/admin/reports/piwik/api/site/(?P<configKey>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_reports_piwik_apisitecreate')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::apiSiteCreateAction',));
                                if (!in_array($requestMethod, array('POST'))) {
                                    $allow = array_merge($allow, array('POST'));
                                    goto not_pimcore_admin_reports_piwik_apisitecreate;
                                }

                                return $ret;
                            }
                            not_pimcore_admin_reports_piwik_apisitecreate:

                            // pimcore_admin_reports_piwik_apisiteupdate
                            if (preg_match('#^/admin/reports/piwik/api/site/(?P<configKey>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_admin_reports_piwik_apisiteupdate')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController::apiSiteUpdateAction',));
                                if (!in_array($requestMethod, array('PUT'))) {
                                    $allow = array_merge($allow, array('PUT'));
                                    goto not_pimcore_admin_reports_piwik_apisiteupdate;
                                }

                                return $ret;
                            }
                            not_pimcore_admin_reports_piwik_apisiteupdate:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/reports/qrcode')) {
                        // pimcore_admin_reports_qrcode_tree
                        if ('/admin/reports/qrcode/tree' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::treeAction',  '_route' => 'pimcore_admin_reports_qrcode_tree',);
                        }

                        // pimcore_admin_reports_qrcode_add
                        if ('/admin/reports/qrcode/add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::addAction',  '_route' => 'pimcore_admin_reports_qrcode_add',);
                        }

                        // pimcore_admin_reports_qrcode_delete
                        if ('/admin/reports/qrcode/delete' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::deleteAction',  '_route' => 'pimcore_admin_reports_qrcode_delete',);
                        }

                        // pimcore_admin_reports_qrcode_get
                        if ('/admin/reports/qrcode/get' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::getAction',  '_route' => 'pimcore_admin_reports_qrcode_get',);
                        }

                        // pimcore_admin_reports_qrcode_update
                        if ('/admin/reports/qrcode/update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::updateAction',  '_route' => 'pimcore_admin_reports_qrcode_update',);
                        }

                        // pimcore_admin_reports_qrcode_code
                        if ('/admin/reports/qrcode/code' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController::codeAction',  '_route' => 'pimcore_admin_reports_qrcode_code',);
                        }

                    }

                    // pimcore_admin_reports_settings_get
                    if ('/admin/reports/settings/get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController::getAction',  '_route' => 'pimcore_admin_reports_settings_get',);
                    }

                    // pimcore_admin_reports_settings_save
                    if ('/admin/reports/settings/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController::saveAction',  '_route' => 'pimcore_admin_reports_settings_save',);
                    }

                }

            }

            // pimcore_admin_quantityvalue_unitproxy
            if ('/admin/quantity-value/unit-proxy' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController::unitProxyAction',  '_route' => 'pimcore_admin_quantityvalue_unitproxy',);
            }

            // pimcore_admin_quantityvalue_unitlist
            if ('/admin/quantity-value/unit-list' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController::unitListAction',  '_route' => 'pimcore_admin_quantityvalue_unitlist',);
            }

            if (0 === strpos($pathinfo, '/admin/ta')) {
                if (0 === strpos($pathinfo, '/admin/tags')) {
                    if (0 === strpos($pathinfo, '/admin/tags/add')) {
                        // pimcore_admin_tags_add
                        if ('/admin/tags/add' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::addAction',  '_route' => 'pimcore_admin_tags_add',);
                        }

                        // pimcore_admin_tags_addtagtoelement
                        if ('/admin/tags/add-tag-to-element' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::addTagToElementAction',  '_route' => 'pimcore_admin_tags_addtagtoelement',);
                        }

                    }

                    // pimcore_admin_tags_delete
                    if ('/admin/tags/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::deleteAction',  '_route' => 'pimcore_admin_tags_delete',);
                    }

                    // pimcore_admin_tags_dobatchassignment
                    if ('/admin/tags/do-batch-assignment' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::doBatchAssignmentAction',  '_route' => 'pimcore_admin_tags_dobatchassignment',);
                    }

                    // pimcore_admin_tags_update
                    if ('/admin/tags/update' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::updateAction',  '_route' => 'pimcore_admin_tags_update',);
                    }

                    // pimcore_admin_tags_treegetchildrenbyid
                    if ('/admin/tags/tree-get-children-by-id' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::treeGetChildrenByIdAction',  '_route' => 'pimcore_admin_tags_treegetchildrenbyid',);
                    }

                    // pimcore_admin_tags_loadtagsforelement
                    if ('/admin/tags/load-tags-for-element' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::loadTagsForElementAction',  '_route' => 'pimcore_admin_tags_loadtagsforelement',);
                    }

                    // pimcore_admin_tags_removetagfromelement
                    if ('/admin/tags/remove-tag-from-element' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::removeTagFromElementAction',  '_route' => 'pimcore_admin_tags_removetagfromelement',);
                    }

                    // pimcore_admin_tags_getbatchassignmentjobs
                    if ('/admin/tags/get-batch-assignment-jobs' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController::getBatchAssignmentJobsAction',  '_route' => 'pimcore_admin_tags_getbatchassignmentjobs',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/targeting/rule')) {
                    // pimcore_admin_targeting_rulelist
                    if ('/admin/targeting/rule/list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleListAction',  '_route' => 'pimcore_admin_targeting_rulelist',);
                    }

                    // pimcore_admin_targeting_ruleadd
                    if ('/admin/targeting/rule/add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleAddAction',  '_route' => 'pimcore_admin_targeting_ruleadd',);
                    }

                    // pimcore_admin_targeting_ruledelete
                    if ('/admin/targeting/rule/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleDeleteAction',  '_route' => 'pimcore_admin_targeting_ruledelete',);
                    }

                    // pimcore_admin_targeting_ruleget
                    if ('/admin/targeting/rule/get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleGetAction',  '_route' => 'pimcore_admin_targeting_ruleget',);
                    }

                    // pimcore_admin_targeting_rulesave
                    if ('/admin/targeting/rule/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleSaveAction',  '_route' => 'pimcore_admin_targeting_rulesave',);
                    }

                    // pimcore_admin_targeting_ruleorder
                    if ('/admin/targeting/rule/order' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::ruleOrderAction',  '_route' => 'pimcore_admin_targeting_ruleorder',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_pimcore_admin_targeting_ruleorder;
                        }

                        return $ret;
                    }
                    not_pimcore_admin_targeting_ruleorder:

                }

                elseif (0 === strpos($pathinfo, '/admin/targeting/target-group')) {
                    // pimcore_admin_targeting_targetgrouplist
                    if ('/admin/targeting/target-group/list' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::targetGroupListAction',  '_route' => 'pimcore_admin_targeting_targetgrouplist',);
                    }

                    // pimcore_admin_targeting_targetgroupadd
                    if ('/admin/targeting/target-group/add' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::targetGroupAddAction',  '_route' => 'pimcore_admin_targeting_targetgroupadd',);
                    }

                    // pimcore_admin_targeting_targetgroupdelete
                    if ('/admin/targeting/target-group/delete' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::targetGroupDeleteAction',  '_route' => 'pimcore_admin_targeting_targetgroupdelete',);
                    }

                    // pimcore_admin_targeting_targetgroupget
                    if ('/admin/targeting/target-group/get' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::targetGroupGetAction',  '_route' => 'pimcore_admin_targeting_targetgroupget',);
                    }

                    // pimcore_admin_targeting_targetgroupsave
                    if ('/admin/targeting/target-group/save' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController::targetGroupSaveAction',  '_route' => 'pimcore_admin_targeting_targetgroupsave',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/translation')) {
                // pimcore_admin_translation_import
                if ('/admin/translation/import' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::importAction',  '_route' => 'pimcore_admin_translation_import',);
                }

                // pimcore_admin_translation_export
                if ('/admin/translation/export' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::exportAction',  '_route' => 'pimcore_admin_translation_export',);
                }

                // pimcore_admin_translation_addadmintranslationkeys
                if ('/admin/translation/add-admin-translation-keys' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::addAdminTranslationKeysAction',  '_route' => 'pimcore_admin_translation_addadmintranslationkeys',);
                }

                // pimcore_admin_translation_translations
                if ('/admin/translation/translations' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::translationsAction',  '_route' => 'pimcore_admin_translation_translations',);
                }

                // pimcore_admin_translation_cleanup
                if ('/admin/translation/cleanup' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::cleanupAction',  '_route' => 'pimcore_admin_translation_cleanup',);
                }

                // pimcore_admin_translation_contentexportjobs
                if ('/admin/translation/content-export-jobs' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::contentExportJobsAction',  '_route' => 'pimcore_admin_translation_contentexportjobs',);
                }

                if (0 === strpos($pathinfo, '/admin/translation/xliff-')) {
                    if (0 === strpos($pathinfo, '/admin/translation/xliff-export')) {
                        // pimcore_admin_translation_xliffexport
                        if ('/admin/translation/xliff-export' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::xliffExportAction',  '_route' => 'pimcore_admin_translation_xliffexport',);
                        }

                        // pimcore_admin_translation_xliffexportdownload
                        if ('/admin/translation/xliff-export-download' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::xliffExportDownloadAction',  '_route' => 'pimcore_admin_translation_xliffexportdownload',);
                        }

                    }

                    // pimcore_admin_translation_xliffimportupload
                    if ('/admin/translation/xliff-import-upload' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::xliffImportUploadAction',  '_route' => 'pimcore_admin_translation_xliffimportupload',);
                    }

                    // pimcore_admin_translation_xliffimportelement
                    if ('/admin/translation/xliff-import-element' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::xliffImportElementAction',  '_route' => 'pimcore_admin_translation_xliffimportelement',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/translation/word-export')) {
                    // pimcore_admin_translation_wordexport
                    if ('/admin/translation/word-export' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::wordExportAction',  '_route' => 'pimcore_admin_translation_wordexport',);
                    }

                    // pimcore_admin_translation_wordexportdownload
                    if ('/admin/translation/word-export-download' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::wordExportDownloadAction',  '_route' => 'pimcore_admin_translation_wordexportdownload',);
                    }

                }

                // pimcore_admin_translation_mergeitem
                if ('/admin/translation/merge-item' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::mergeItemAction',  '_route' => 'pimcore_admin_translation_mergeitem',);
                }

                // pimcore_admin_translation_getwebsitetranslationlanguages
                if ('/admin/translation/get-website-translation-languages' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController::getWebsiteTranslationLanguagesAction',  '_route' => 'pimcore_admin_translation_getwebsitetranslationlanguages',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                // pimcore_admin_user_treegetchildsbyid
                if ('/admin/user/tree-get-childs-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::treeGetChildsByIdAction',  '_route' => 'pimcore_admin_user_treegetchildsbyid',);
                }

                // pimcore_admin_user_add
                if ('/admin/user/add' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::addAction',  '_route' => 'pimcore_admin_user_add',);
                }

                // pimcore_admin_user_delete
                if ('/admin/user/delete' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::deleteAction',  '_route' => 'pimcore_admin_user_delete',);
                }

                if (0 === strpos($pathinfo, '/admin/user/up')) {
                    if (0 === strpos($pathinfo, '/admin/user/update')) {
                        // pimcore_admin_user_update
                        if ('/admin/user/update' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::updateAction',  '_route' => 'pimcore_admin_user_update',);
                        }

                        // pimcore_admin_user_updatecurrentuser
                        if ('/admin/user/update-current-user' === $pathinfo) {
                            return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::updateCurrentUserAction',  '_route' => 'pimcore_admin_user_updatecurrentuser',);
                        }

                    }

                    // pimcore_admin_user_uploadcurrentuserimage
                    if ('/admin/user/upload-current-user-image' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::uploadCurrentUserImageAction',  '_route' => 'pimcore_admin_user_uploadcurrentuserimage',);
                    }

                    // pimcore_admin_user_uploadimage
                    if ('/admin/user/upload-image' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::uploadImageAction',  '_route' => 'pimcore_admin_user_uploadimage',);
                    }

                }

                // pimcore_admin_user_get
                if ('/admin/user/get' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getAction',  '_route' => 'pimcore_admin_user_get',);
                }

                if (0 === strpos($pathinfo, '/admin/user/get-')) {
                    // pimcore_admin_user_getminimal
                    if ('/admin/user/get-minimal' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getMinimalAction',  '_route' => 'pimcore_admin_user_getminimal',);
                    }

                    // pimcore_admin_user_getcurrentuser
                    if ('/admin/user/get-current-user' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getCurrentUserAction',  '_route' => 'pimcore_admin_user_getcurrentuser',);
                    }

                    // pimcore_admin_user_getimage
                    if ('/admin/user/get-image' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getImageAction',  '_route' => 'pimcore_admin_user_getimage',);
                    }

                    // pimcore_admin_user_gettokenloginlink
                    if ('/admin/user/get-token-login-link' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getTokenLoginLinkAction',  '_route' => 'pimcore_admin_user_gettokenloginlink',);
                    }

                    // pimcore_admin_user_getusers
                    if ('/admin/user/get-users' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getUsersAction',  '_route' => 'pimcore_admin_user_getusers',);
                    }

                    // pimcore_admin_user_getroles
                    if ('/admin/user/get-roles' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::getRolesAction',  '_route' => 'pimcore_admin_user_getroles',);
                    }

                }

                // pimcore_admin_user_roletreegetchildsbyid
                if ('/admin/user/role-tree-get-childs-by-id' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::roleTreeGetChildsByIdAction',  '_route' => 'pimcore_admin_user_roletreegetchildsbyid',);
                }

                // pimcore_admin_user_roleget
                if ('/admin/user/role-get' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::roleGetAction',  '_route' => 'pimcore_admin_user_roleget',);
                }

                // pimcore_admin_user_search
                if ('/admin/user/search' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController::searchAction',  '_route' => 'pimcore_admin_user_search',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/update/index')) {
                if (0 === strpos($pathinfo, '/admin/update/index/check-')) {
                    // pimcore_admin_update_index_checkdebugmode
                    if ('/admin/update/index/check-debug-mode' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::checkDebugModeAction',  '_route' => 'pimcore_admin_update_index_checkdebugmode',);
                    }

                    // pimcore_admin_update_index_checkcomposerinstalled
                    if ('/admin/update/index/check-composer-installed' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::checkComposerInstalledAction',  '_route' => 'pimcore_admin_update_index_checkcomposerinstalled',);
                    }

                    // pimcore_admin_update_index_checkfilepermissions
                    if ('/admin/update/index/check-file-permissions' === $pathinfo) {
                        return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::checkFilePermissionsAction',  '_route' => 'pimcore_admin_update_index_checkfilepermissions',);
                    }

                }

                // pimcore_admin_update_index_getavailableupdates
                if ('/admin/update/index/get-available-updates' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::getAvailableUpdatesAction',  '_route' => 'pimcore_admin_update_index_getavailableupdates',);
                }

                // pimcore_admin_update_index_getjobs
                if ('/admin/update/index/get-jobs' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::getJobsAction',  '_route' => 'pimcore_admin_update_index_getjobs',);
                }

                // pimcore_admin_update_index_jobparallel
                if ('/admin/update/index/job-parallel' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::jobParallelAction',  '_route' => 'pimcore_admin_update_index_jobparallel',);
                }

                // pimcore_admin_update_index_jobprocedural
                if ('/admin/update/index/job-procedural' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController::jobProceduralAction',  '_route' => 'pimcore_admin_update_index_jobprocedural',);
                }

            }

            // pimcore_admin_variants_updatekey
            if ('/admin/variants/update-key' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController::updateKeyAction',  '_route' => 'pimcore_admin_variants_updatekey',);
            }

            // pimcore_admin_variants_getvariants
            if ('/admin/variants/get-variants' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController::getVariantsAction',  '_route' => 'pimcore_admin_variants_getvariants',);
            }

            // pimcore_admin_workflow_getworkflowform
            if ('/admin/workflow/get-workflow-form' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController::getWorkflowFormAction',  '_route' => 'pimcore_admin_workflow_getworkflowform',);
            }

            // pimcore_admin_workflow_submitworkflowtransition
            if ('/admin/workflow/submit-workflow-transition' === $pathinfo) {
                return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController::submitWorkflowTransitionAction',  '_route' => 'pimcore_admin_workflow_submitworkflowtransition',);
            }

            if (0 === strpos($pathinfo, '/admin/extensionmanager/admin')) {
                if (0 === strpos($pathinfo, '/admin/extensionmanager/admin/extensions')) {
                    // pimcore_admin_extensionmanager_extensionmanager_getextensions
                    if ('/admin/extensionmanager/admin/extensions' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::getExtensionsAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_getextensions',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_admin_extensionmanager_extensionmanager_getextensions;
                        }

                        return $ret;
                    }
                    not_pimcore_admin_extensionmanager_extensionmanager_getextensions:

                    // pimcore_admin_extensionmanager_extensionmanager_updateextensions
                    if ('/admin/extensionmanager/admin/extensions' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::updateExtensionsAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_updateextensions',);
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_pimcore_admin_extensionmanager_extensionmanager_updateextensions;
                        }

                        return $ret;
                    }
                    not_pimcore_admin_extensionmanager_extensionmanager_updateextensions:

                }

                // pimcore_admin_extensionmanager_extensionmanager_toggleextensionstate
                if ('/admin/extensionmanager/admin/toggle-extension-state' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::toggleExtensionStateAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_toggleextensionstate',);
                }

                // pimcore_admin_extensionmanager_extensionmanager_install
                if ('/admin/extensionmanager/admin/install' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::installAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_install',);
                }

                // pimcore_admin_extensionmanager_extensionmanager_uninstall
                if ('/admin/extensionmanager/admin/uninstall' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::uninstallAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_uninstall',);
                }

                // pimcore_admin_extensionmanager_extensionmanager_update
                if ('/admin/extensionmanager/admin/update' === $pathinfo) {
                    return array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::updateAction',  '_route' => 'pimcore_admin_extensionmanager_extensionmanager_update',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/webservice/rest')) {
            if (0 === strpos($pathinfo, '/webservice/rest/class')) {
                // pimcore_api_rest_class_class
                if (0 === strpos($pathinfo, '/webservice/rest/class/id') && preg_match('#^/webservice/rest/class/id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_class_class')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::classAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_class_class;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_class_class:

                // pimcore_api_rest_class_classes
                if ('/webservice/rest/classes' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::classesAction',  '_route' => 'pimcore_api_rest_class_classes',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_class_classes;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_class_classes:

                // pimcore_api_rest_class_classificationstoredefinition
                if ('/webservice/rest/classificationstore-definition' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::classificationstoreDefinitionAction',  '_route' => 'pimcore_api_rest_class_classificationstoredefinition',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_class_classificationstoredefinition;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_class_classificationstoredefinition:

            }

            elseif (0 === strpos($pathinfo, '/webservice/rest/object')) {
                // pimcore_api_rest_class_objectbrick
                if (0 === strpos($pathinfo, '/webservice/rest/object-brick/id') && preg_match('#^/webservice/rest/object\\-brick/id/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_class_objectbrick')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::objectBrickAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_class_objectbrick;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_class_objectbrick:

                // pimcore_api_rest_class_objectbricks
                if ('/webservice/rest/object-bricks' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::objectBricksAction',  '_route' => 'pimcore_api_rest_class_objectbricks',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_class_objectbricks;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_class_objectbricks:

                // pimcore_api_rest_element_dataobject_get
                if (0 === strpos($pathinfo, '/webservice/rest/object/id') && preg_match('#^/webservice/rest/object/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_dataobject_get')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::getAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_dataobject_get;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_dataobject_get:

                // pimcore_api_rest_element_dataobject_get_1
                if ('/webservice/rest/object' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::getAction',  '_route' => 'pimcore_api_rest_element_dataobject_get_1',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_dataobject_get_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_dataobject_get_1:

                // pimcore_api_rest_element_dataobject_create
                if ('/webservice/rest/object' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::createAction',  '_route' => 'pimcore_api_rest_element_dataobject_create',);
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pimcore_api_rest_element_dataobject_create;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_dataobject_create:

                if (0 === strpos($pathinfo, '/webservice/rest/object/id')) {
                    // pimcore_api_rest_element_dataobject_update
                    if (preg_match('#^/webservice/rest/object/id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_dataobject_update')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::updateAction',));
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_pimcore_api_rest_element_dataobject_update;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_update:

                    // pimcore_api_rest_element_dataobject_delete
                    if (preg_match('#^/webservice/rest/object/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_dataobject_delete')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_pimcore_api_rest_element_dataobject_delete;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_delete:

                }

                // pimcore_api_rest_element_dataobject_delete_1
                if ('/webservice/rest/object' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::deleteAction',  '_route' => 'pimcore_api_rest_element_dataobject_delete_1',);
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_pimcore_api_rest_element_dataobject_delete_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_dataobject_delete_1:

                if (0 === strpos($pathinfo, '/webservice/rest/object-')) {
                    // pimcore_api_rest_element_dataobject_list
                    if ('/webservice/rest/object-list' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::listAction',  '_route' => 'pimcore_api_rest_element_dataobject_list',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_dataobject_list;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_list:

                    // pimcore_api_rest_element_dataobject_objectmeta
                    if (0 === strpos($pathinfo, '/webservice/rest/object-meta/id') && preg_match('#^/webservice/rest/object\\-meta/id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_dataobject_objectmeta')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::objectMetaAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_dataobject_objectmeta;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_objectmeta:

                    // pimcore_api_rest_element_dataobject_count
                    if ('/webservice/rest/object-count' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::countAction',  '_route' => 'pimcore_api_rest_element_dataobject_count',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_dataobject_count;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_count:

                    // pimcore_api_rest_element_dataobject_inquire
                    if ('/webservice/rest/object-inquire' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController::inquireAction',  '_route' => 'pimcore_api_rest_element_dataobject_inquire',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pimcore_api_rest_element_dataobject_inquire;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_dataobject_inquire:

                }

            }

            // pimcore_api_rest_class_fieldcollection
            if (0 === strpos($pathinfo, '/webservice/rest/field-collection/id') && preg_match('#^/webservice/rest/field\\-collection/id/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_class_fieldcollection')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::fieldCollectionAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_class_fieldcollection;
                }

                return $ret;
            }
            not_pimcore_api_rest_class_fieldcollection:

            // pimcore_api_rest_class_fieldcollections
            if ('/webservice/rest/field-collections' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::fieldCollectionsAction',  '_route' => 'pimcore_api_rest_class_fieldcollections',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_class_fieldcollections;
                }

                return $ret;
            }
            not_pimcore_api_rest_class_fieldcollections:

            // pimcore_api_rest_class_quantityvalueunitdefinition
            if ('/webservice/rest/quantity-value-unit-definition' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController::quantityValueUnitDefinitionAction',  '_route' => 'pimcore_api_rest_class_quantityvalueunitdefinition',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_class_quantityvalueunitdefinition;
                }

                return $ret;
            }
            not_pimcore_api_rest_class_quantityvalueunitdefinition:

            if (0 === strpos($pathinfo, '/webservice/rest/asset')) {
                // pimcore_api_rest_element_asset_get
                if (0 === strpos($pathinfo, '/webservice/rest/asset/id') && preg_match('#^/webservice/rest/asset/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_asset_get')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::getAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_asset_get;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_asset_get:

                // pimcore_api_rest_element_asset_get_1
                if ('/webservice/rest/asset' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::getAction',  '_route' => 'pimcore_api_rest_element_asset_get_1',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_asset_get_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_asset_get_1:

                // pimcore_api_rest_element_asset_create
                if ('/webservice/rest/asset' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::createAction',  '_route' => 'pimcore_api_rest_element_asset_create',);
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pimcore_api_rest_element_asset_create;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_asset_create:

                if (0 === strpos($pathinfo, '/webservice/rest/asset/id')) {
                    // pimcore_api_rest_element_asset_update
                    if (preg_match('#^/webservice/rest/asset/id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_asset_update')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::updateAction',));
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_pimcore_api_rest_element_asset_update;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_asset_update:

                    // pimcore_api_rest_element_asset_delete
                    if (preg_match('#^/webservice/rest/asset/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_asset_delete')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_pimcore_api_rest_element_asset_delete;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_asset_delete:

                }

                // pimcore_api_rest_element_asset_delete_1
                if ('/webservice/rest/asset' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::deleteAction',  '_route' => 'pimcore_api_rest_element_asset_delete_1',);
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_pimcore_api_rest_element_asset_delete_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_asset_delete_1:

                if (0 === strpos($pathinfo, '/webservice/rest/asset-')) {
                    // pimcore_api_rest_element_asset_list
                    if ('/webservice/rest/asset-list' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::listAction',  '_route' => 'pimcore_api_rest_element_asset_list',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_asset_list;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_asset_list:

                    // pimcore_api_rest_element_asset_count
                    if ('/webservice/rest/asset-count' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::countAction',  '_route' => 'pimcore_api_rest_element_asset_count',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_asset_count;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_asset_count:

                    // pimcore_api_rest_element_asset_inquire
                    if ('/webservice/rest/asset-inquire' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController::inquireAction',  '_route' => 'pimcore_api_rest_element_asset_inquire',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pimcore_api_rest_element_asset_inquire;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_asset_inquire:

                }

            }

            elseif (0 === strpos($pathinfo, '/webservice/rest/document')) {
                // pimcore_api_rest_element_document_get
                if (0 === strpos($pathinfo, '/webservice/rest/document/id') && preg_match('#^/webservice/rest/document/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_document_get')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::getAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_document_get;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_document_get:

                // pimcore_api_rest_element_document_get_1
                if ('/webservice/rest/document' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::getAction',  '_route' => 'pimcore_api_rest_element_document_get_1',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_document_get_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_document_get_1:

                // pimcore_api_rest_element_document_create
                if ('/webservice/rest/document' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::createAction',  '_route' => 'pimcore_api_rest_element_document_create',);
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pimcore_api_rest_element_document_create;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_document_create:

                if (0 === strpos($pathinfo, '/webservice/rest/document/id')) {
                    // pimcore_api_rest_element_document_update
                    if (preg_match('#^/webservice/rest/document/id/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_document_update')), array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::updateAction',));
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_pimcore_api_rest_element_document_update;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_document_update:

                    // pimcore_api_rest_element_document_delete
                    if (preg_match('#^/webservice/rest/document/id(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_element_document_delete')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_pimcore_api_rest_element_document_delete;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_document_delete:

                }

                // pimcore_api_rest_element_document_delete_1
                if ('/webservice/rest/document' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::deleteAction',  '_route' => 'pimcore_api_rest_element_document_delete_1',);
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_pimcore_api_rest_element_document_delete_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_document_delete_1:

                if (0 === strpos($pathinfo, '/webservice/rest/document-')) {
                    // pimcore_api_rest_element_document_list
                    if ('/webservice/rest/document-list' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::listAction',  '_route' => 'pimcore_api_rest_element_document_list',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_document_list;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_document_list:

                    // pimcore_api_rest_element_document_count
                    if ('/webservice/rest/document-count' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::countAction',  '_route' => 'pimcore_api_rest_element_document_count',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_pimcore_api_rest_element_document_count;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_document_count:

                    // pimcore_api_rest_element_document_inquire
                    if ('/webservice/rest/document-inquire' === $pathinfo) {
                        $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController::inquireAction',  '_route' => 'pimcore_api_rest_element_document_inquire',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pimcore_api_rest_element_document_inquire;
                        }

                        return $ret;
                    }
                    not_pimcore_api_rest_element_document_inquire:

                }

            }

            elseif (0 === strpos($pathinfo, '/webservice/rest/t')) {
                // pimcore_api_rest_element_tag_taglist
                if ('/webservice/rest/tag-list' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController::tagListAction',  '_route' => 'pimcore_api_rest_element_tag_taglist',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_tag_taglist;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_tag_taglist:

                // pimcore_api_rest_element_tag_tagselementlist
                if ('/webservice/rest/tags-element-list' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController::tagsElementListAction',  '_route' => 'pimcore_api_rest_element_tag_tagselementlist',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_element_tag_tagselementlist;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_element_tag_tagselementlist:

                // pimcore_api_rest_info_translations
                if ('/webservice/rest/translations' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController::translationsAction',  '_route' => 'pimcore_api_rest_info_translations',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_info_translations;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_info_translations:

            }

            // pimcore_api_rest_element_tag_elementstaglist
            if ('/webservice/rest/elements-tag-list' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController::elementsTagListAction',  '_route' => 'pimcore_api_rest_element_tag_elementstaglist',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_element_tag_elementstaglist;
                }

                return $ret;
            }
            not_pimcore_api_rest_element_tag_elementstaglist:

            if (0 === strpos($pathinfo, '/webservice/rest/image-thumbnail')) {
                // pimcore_api_rest_image_imagethumbnail
                if (0 === strpos($pathinfo, '/webservice/rest/image-thumbnail/id') && preg_match('#^/webservice/rest/image\\-thumbnail/id(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'pimcore_api_rest_image_imagethumbnail')), array (  'id' => NULL,  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController::imageThumbnailAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_image_imagethumbnail;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_image_imagethumbnail:

                // pimcore_api_rest_image_imagethumbnail_1
                if ('/webservice/rest/image-thumbnail' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController::imageThumbnailAction',  '_route' => 'pimcore_api_rest_image_imagethumbnail_1',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_image_imagethumbnail_1;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_image_imagethumbnail_1:

                // pimcore_api_rest_image_imagethumbnails
                if ('/webservice/rest/image-thumbnails' === $pathinfo) {
                    $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController::imageThumbnailsAction',  '_route' => 'pimcore_api_rest_image_imagethumbnails',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_pimcore_api_rest_image_imagethumbnails;
                    }

                    return $ret;
                }
                not_pimcore_api_rest_image_imagethumbnails:

            }

            // pimcore_api_rest_info_systemclock
            if ('/webservice/rest/system-clock' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController::systemClockAction',  '_route' => 'pimcore_api_rest_info_systemclock',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_info_systemclock;
                }

                return $ret;
            }
            not_pimcore_api_rest_info_systemclock:

            // pimcore_api_rest_info_serverinfo
            if ('/webservice/rest/server-info' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController::serverInfoAction',  '_route' => 'pimcore_api_rest_info_serverinfo',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_info_serverinfo;
                }

                return $ret;
            }
            not_pimcore_api_rest_info_serverinfo:

            // pimcore_api_rest_info_user
            if ('/webservice/rest/user' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController::userAction',  '_route' => 'pimcore_api_rest_info_user',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_pimcore_api_rest_info_user;
                }

                return $ret;
            }
            not_pimcore_api_rest_info_user:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
