<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Forms\Contact as ContactForm;
use AppBundle\Forms\Career as CareerForm;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class RedirectsController extends Controller {

    /**
     * @Route("/about-us/we-at-work")
     * @Route("/presentation")
     * @Route("/o-nas/my-w-pracy")
     *
     */
    public function redirectAction(Request $request) {
//        return new Response('Please check back later', 503);
        return $this->redirectToRoute('about-us', array(), 301);
    }

    /**
     * @Route("/career")
     * @Route("/kariera")
     * @Route("/o-nas/kariera")
     */
    public function redirect2Action(Request $request) {
        return $this->redirectToRoute('careers', array(), 301);
    }

    /**
     * @Route("/contact/brief_project")
     * @Route("/kontakt/brief_graficzny")
     */
    public function redirect3Action(Request $request) {
        return $this->redirectToRoute('contact', array(), 301);
    }

    /**
     * @Route("/offer")
     * @Route("/offer/magento")
     * @Route("/offer/magento/other")
     * @Route("/oferta")
     * @Route("/oferta/magento")
     * @Route("/oferta/magento/pozostale")
     */
    public function redirect4Action(Request $request) {
        return $this->redirectToRoute('magentoservice', array(), 301);
    }

    /**
     * @Route("/offer/search-engine-optimalisation")
     * @Route("/offer/webpages/webdevelopment")
     * @Route("/offer/websao")
     *
     */
    public function redirect5Action(Request $request) {
        return $this->redirectToRoute('frontendservice', array(), 301);
    }

    /**
     * @Route("/offer/webpages")
     * @Route("/offer/webpages/projectsportals")
     * @Route("/offer/webpages/websites")
     * @Route("/oferta/strony-i-serwisy")
     * @Route("/oferta/strony-i-serwisy/strony-internetowe")
     * @Route("/oferta/strony-i-serwisy/serwisy-internetowe")
     *
     */
    public function redirect6Action(Request $request) {
        return $this->redirectToRoute('phpframeworksservice', array(), 301);
    }

    /**
     * @Route("/realization/webdevelopment/mm-prime-tfi")
     * @Route("/realization/mm-prime-tfi")
     * @Route("/realization/strony-internetowe/mm-prime-tfi")
     *
     */
    public function redirect8Action(Request $request) {
        return $this->redirectToRoute('mmprimeproject', array(), 301);
    }

    /**
     * @Route("/realization/ambigante-magento")
     * @Route("/realization/webdevelopment/ambigante-magento")
     * @Route("/realization/strony-internetowe/ambigante-magento")
     */
    public function redirect9Action(Request $request) {
        return $this->redirectToRoute('ambiganteproject', array(), 301);
    }

    /**
     * @Route("/realization/webdevelopment/wirtualne-biuro")
     * @Route("/realization/wirtualne-biuro")
     * @Route("/realization/strony-internetowe/wirtualne-biuro")
     */
    public function redirect10Action(Request $request) {
        return $this->redirectToRoute('virtualofficeproject', array(), 301);
    }

    /**
     * @Route("/realization/polish-souls")
     * @Route("/realization/webdevelopment/polish-souls")
     * @Route("/realization/strony-internetowe/polish-souls")
     */
    public function redirect11Action(Request $request) {
        return $this->redirectToRoute('polishsoulsproject', array(), 301);
    }

    /**
     * @Route("/realizations/da-de-la-independncia")
     * @Route("/realizations/yasumi-epil2")
     * @Route("/realizations/yasumi")
     * @Route("/realizations/readymadecompanycom")
     * @Route("/realizations/accountingservicespl")
     * @Route("/realizations/scienceshipcom")
     * @Route("/realizations/yorknetpl")
     * @Route("/realizations/zaremba-store")
     * @Route("/realizations/nickel-design2")
     * @Route("/realizations/akademia-nutricia")
     * @Route("/realizations/zoio")
     * @Route("/realizations/i-know-what-i-eat-mobile-app-rwd")
     * @Route("/realizations/provita-me-magento-ecommerce")
     * @Route("/realizations/ecolight-magento")
     * @Route("/realizations/platforma-edukacyjna-dla-starszych2")
     * @Route("/realizations/gb-architekt1")
     * @Route("/realizations/platforma-edukacyjna-dla-dzieci1")
     * @Route("/realizations/bezglutenowy-swiat-sote1")
     * @Route("/realizations/zentiva-aplikacja-mobilna")
     * @Route("/realizations/polska-szkola-echokardiografii1")
     * @Route("/realizations/nickel-dom2")
     * @Route("/realizations/nickel-design1")
     * @Route("/realizations/wyrazownia1")
     * @Route("/realizations/qubus-hotel-memory-game")
     * @Route("/realizations/optico1")
     * @Route("/realizations/zak")
     * @Route("/realizations/rm-legal")
     * @Route("/realizations/eco-light1")
     * @Route("/realizations/muzeum-fotografii-kalisza1")
     * @Route("/realizations/kamyk2")
     * @Route("/realizations/schodolaz-magento-ce1")
     * @Route("/realizations/tlen-dla-aktywnych-magento-ce1")
     * @Route("/realizations/firelli")
     * @Route("/realizations/gry-na-kase1")
     * @Route("/realizations/super-przedsiebiorca")
     * @Route("/realizations/yasumi-epil")
     * @Route("/realizations/coolturovo")
     * @Route("/realizations/gry-na-kase")
     * @Route("/realizations/wyrazownia")
     * @Route("/realization/well-group")
     * @Route("/realization/pse")
     * @Route("/realization/zloty-orkisz")
     * @Route("/realization/e24-cloud")
     * @Route("/realization/fun-fair")
     * @Route("/realization/air-ball")
     * @Route("/realization/popgirl")
     * @Route("/realization/akademia-policyjna")
     * @Route("/realization/prizenoid")
     * @Route("/realization/caveman")
     * @Route("/realization/the-carphone-warehouse")
     * @Route("/realization/green-day")
     * @Route("/realization/hearts-and-minds")
     * @Route("/portfolio")
     * @Route("/portfolio/customers")
     * @Route("/portfolio/case-study")
     * @Route("/realizations")
     * @Route("/portfolio/references")
     * @Route("/portfolio/case-study/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realization/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realization/webdevelopment/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realization/games-and-apps/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realization/logo-designs/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     *
     *
     * @Route("/realization/da-de-la-independncia")
     * @Route("/realization/yasumi-epil2")
     * @Route("/realization/yasumi")
     * @Route("/realization/readymadecompanycom")
     * @Route("/realization/accountingservicespl")
     * @Route("/realization/scienceshipcom")
     * @Route("/realization/yorknetpl")
     * @Route("/realization/zaremba-store")
     * @Route("/realization/nickel-design2")
     * @Route("/realization/akademia-nutricia")
     * @Route("/realization/polska-szkola-echokardiografii1")
     * @Route("/realization/nickel-dom2")
     * @Route("/realization/nickel-design1")
     * @Route("/realization/wyrazownia1")
     * @Route("/realization/qubus-hotel-memory-game")
     * @Route("/realization/optico1")
     * @Route("/realization/zak")
     * @Route("/realization/rm-legal")
     * @Route("/realization/eco-light1")
     * @Route("/realization/muzeum-fotografii-kalisza1")
     * @Route("/realization/kamyk2")
     * @Route("/realization/schodolaz-magento-ce1")
     * @Route("/realization/tlen-dla-aktywnych-magento-ce1")
     * @Route("/realization/firelli")
     * @Route("/realization/gry-na-kase1")
     * @Route("/realization/super-przedsiebiorca")
     * @Route("/realization/yasumi-epil")
     * @Route("/realization/coolturovo")
     * @Route("/realization/gry-na-kase")
     * @Route("/realization/wyrazownia")
     * @Route("/realization/well-group")
     * @Route("/realization/pse")
     * @Route("/realization/zloty-orkisz")
     * @Route("/realization/e24-cloud")
     * @Route("/realization/strony-internetowe/yasumi-epil2")
     * @Route("/realization/strony-internetowe/yasumi")
     * @Route("/realization/strony-internetowe/readymadecompanycom")
     * @Route("/realization/strony-internetowe/accountingservicespl")
     * @Route("/realization/strony-internetowe/scienceshipcom")
     * @Route("/realization/strony-internetowe/yorknetpl")
     * @Route("/realization/strony-internetowe/zaremba-store")
     * @Route("/realization/strony-internetowe/nickel-design2")
     * @Route("/realization/strony-internetowe/akademia-nutricia")
     * @Route("/realization/strony-internetowe/zoio")
     * @Route("/realization/projekty-logo/wyrazownia")
     * @Route("/realization/projekty-logo/well-group")
     * @Route("/realization/projekty-logo/pse")
     * @Route("/realization/projekty-logo/prizenoid")
     * @Route("/realization/gry-i-aplikacje/da-de-la-independncia")
     * @Route("/realization/gry-i-aplikacje/zentiva-aplikacja-mobilna")
     * @Route("/realization/gry-i-aplikacje/qubus-hotel-memory-game")
     * @Route("/realization/gry-i-aplikacje/zak")
     * @Route("/realization/gry-i-aplikacje/firelli")
     * @Route("/realization/gry-i-aplikacje/super-przedsiebiorca")
     * @Route("/realization/gry-i-aplikacje/coolturovo")
     * @Route("/realization/gry-i-aplikacje/gry-na-kase")
     * @Route("/realization/gry-i-aplikacje/zloty-orkisz")
     * @Route("/realization/gry-i-aplikacje/fun-fair")
     * @Route("/realization/gry-i-aplikacje/air-ball")
     * @Route("/realization/gry-i-aplikacje/popgirl")
     * @Route("/realization/zoio")
     * @Route("/realization/i-know-what-i-eat-mobile-app-rwd")
     * @Route("/realization/provita-me-magento-ecommerce")
     * @Route("/realization/ims-med")
     * @Route("/realization/ecolight-magento")
     * @Route("/realization/platforma-edukacyjna-dla-starszych2")
     * @Route("/realization/gb-architekt1")
     * @Route("/realization/platforma-edukacyjna-dla-dzieci1")
     * @Route("/realization/bezglutenowy-swiat-sote1")
     * @Route("/realization/zentiva-aplikacja-mobilna")
     * @Route("/realization/fun-fair")
     * @Route("/realization/air-ball")
     * @Route("/realization/popgirl")
     * @Route("/realization/akademia-policyjna")
     * @Route("/realization/prizenoid")
     * @Route("/realization/caveman")
     * @Route("/realization/the-carphone-warehouse")
     * @Route("/realization/green-day")
     * @Route("/realization/hearts-and-minds")
     * @Route("/realization/strony-internetowe/i-know-what-i-eat-mobile-app-rwd")
     * @Route("/realization/strony-internetowe/provita-me-magento-ecommerce")
     * @Route("/realization/strony-internetowe/ims-med")
     * @Route("/realization/strony-internetowe/ecolight-magento")
     * @Route("/realization/strony-internetowe/platforma-edukacyjna-dla-starszych2")
     * @Route("/realization/strony-internetowe/gb-architekt1")
     * @Route("/realization/strony-internetowe/platforma-edukacyjna-dla-dzieci1")
     * @Route("/realization/strony-internetowe/bezglutenowy-swiat-sote1")
     * @Route("/realization/strony-internetowe/polska-szkola-echokardiografii1")
     * @Route("/realization/strony-internetowe/nickel-dom2")
     * @Route("/realization/strony-internetowe/nickel-design1")
     * @Route("/realization/strony-internetowe/wyrazownia1")
     * @Route("/realization/strony-internetowe/optico1")
     * @Route("/realization/strony-internetowe/rm-legal")
     * @Route("/realization/strony-internetowe/eco-light1")
     * @Route("/realization/strony-internetowe/muzeum-fotografii-kalisza1")
     * @Route("/realization/strony-internetowe/kamyk2")
     * @Route("/realization/strony-internetowe/schodolaz-magento-ce1")
     * @Route("/realization/strony-internetowe/tlen-dla-aktywnych-magento-ce1")
     * @Route("/realization/strony-internetowe/gry-na-kase1")
     * @Route("/realization/gry-i-aplikacje/akademia-policyjna")
     * @Route("/realization/gry-i-aplikacje/caveman")
     * @Route("/realization/gry-i-aplikacje/pet-parlour")
     * @Route("/portfolio/klienci")
     * @Route("/portfolio/referencje")
     * @Route("/portfolio/studium-przypadku/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realizacje/{page}", defaults = {"page" = false}, requirements = {"page"="\d+(\/\d+)?"})
     * @Route("/realizacje/strony-internetowe/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realizacje/gry-i-aplikacje/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realizacje/projekty-logo/{page}", defaults = {"page" = false}, requirements = {"page"="\d+"})
     * @Route("/realizacje//1")
     *
     *
     */
    public function redirect7Action(Request $request) {
        return $this->redirectToRoute('projectslist', array(), 301);
    }

    /**
     * @Route("/kariera/Junior+Front-end+developer/7")
     * @Route("/kariera/Junior+Front-end+developer")
     */
    public function redirect13Action(Request $request) {
        return $this->redirectToRoute('juniorfrontenddevelopercareer', array(), 301);
    }

    /**
     * @Route("/kariera/Regular+Front-end+developer/6")
     * @Route("/kariera/Regular+Front-end+developer")
     */
    public function redirect14Action(Request $request) {
        return $this->redirectToRoute('frontenddevelopercareer', array(), 301);
    }

    /**
     * @Route("/kariera/Software+developer+(Magento)/5")
     * @Route("/kariera/Software+developer+(Magento)")
     */
    public function redirect15Action(Request $request) {
        return $this->redirectToRoute('magentodevelopercareer', array(), 301);
    }

    /**
     * @Route("/kariera/Senior+PHP+Developer/3")
     * @Route("/kariera/Senior+PHP+Developer")
     */
    public function redirect16Action(Request $request) {
        return $this->redirectToRoute('seniorphpcareer', array(), 301);
    }

    /**
     * @Route("/kariera/Full-stack+Senior+Developer/2")
     * @Route("/kariera/Full-stack+Senior+Developer")
     */
    public function redirect17Action(Request $request) {
        return $this->redirectToRoute('seniordevelopercareer', array(), 301);
    }



    /**
     * @Route("/swieta/wielkanoc2013/")
     */
    public function redirect99Action(Request $request) {
        return $this->redirectToRoute('singlenews10', array(), 301);
    }

    /**
     * @Route("/oferta/linki-sponsorowane")
     * @Route("/oferta/linki-sponsorowane/jak-to-dziala")
     * @Route("/oferta/linki-sponsorowane/koszty")
     * @Route("/oferta/pozycjonowanie/jak-to-dziala")
     * @Route("/oferta/pozycjonowanie/jak-pozycjonujemy")
     * @Route("/oferta/social-media/facebook")
     * @Route("/oferta/social-media/reklama")
     * @Route("/oferta/social-media/aplikacje-spolecznosciowe")
     * @Route("/oferta/gry-i-aplikacje")
     * @Route("/oferta/gry-i-aplikacje/gry")
     * @Route("/oferta/gry-i-aplikacje/aplikacje-mobilne")
     * @Route("/oferta/gry-i-aplikacje/aplikacje-stacjonarne")
     * @Route("/oferta/pozycjonowanie")
     * @Route("/oferta/social-media")
     * @Route("/oferta/salesmanago")
     */
    public function redirect100Action(Request $request) {
        return $this->redirectToRoute('home', array(), 301);
    }




    /**
     * @Route("/readthis/{news}",
     *      defaults = {"news" = false},
     *      requirements = {"news"=".+"})
     * @Route("/czytajto/{news}",
     *      defaults = {"news" = false},
     *      requirements = {"news"=".+"})
     */
    public function newsAction(Request $request) {
        $newslist = [
            'Facebook' => 'singlenews13',
            'Happy'    => 'singlenews12',
            'Kamyk'    => 'singlenews11',
            'The'      => 'singlenews16',
            'Tomek'    => 'singlenews5',
            'We'       => 'singlenews1',


            'Wreszcie' => 'singlenews1',
            'Wakacyjne'=> 'singlenews6',
            'Szukamy'  => 'singlenews7',
            'Uwaga'    => 'singlenews8',
            'Pilnie'   => 'singlenews9',
            'Weso'     => 'singlenews10',
            'Najlepsze'=> 'singlenews12',
            'Kampania' => 'singlenews13',
            'Muzeum'   => 'singlenews14',
            'Wiosenna' => 'singlenews15',
            'Nowe'     => 'singlenews16',
            'Darmowa'  => 'singlenews17',
        ];
        $news = $request->get('news');
        if ($news === false){
            return $this->redirectToRoute('news', array(), 301);
        }
        foreach ($newslist as $k=>$v){
            if (strpos($news, $k) === 0){
                return $this->redirectToRoute($v, array(), 301);
            }
        }
    }
}
