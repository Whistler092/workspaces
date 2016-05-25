<?php
include_once ("Controller.php");
include ("apiSmarty.php");

class frmLenguage extends Controller
{
	private $objSmarty;
	
	function __construct()
	{
		$this->objSmarty = new ApiSmarty();
		$this->objSmarty->template_dir = "../View/templates";
	}
	
	function executeFormMain()
	{
		$sbLenguaje = $_REQUEST['lenguage'];
		if(strcmp($sbLenguaje, "SPA")==0)
		{
			include_once ("../Lenguage/Spanish/Span.php");
		}else
		{
			include_once ("../Lenguage/English/Eng.php");
		}
		/*
				$this->objSmarty->assign("El del PHP",El de los Lenguage);
		*/
        $this->objSmarty->assign("Title",MainTitle);

        //
        $this->objSmarty->assign("Home",Container_Home);
        $this->objSmarty->assign("About",Container_About);
        $this->objSmarty->assign("Portfolio",Container_Portfolio);
        $this->objSmarty->assign("OurClients",Container_OurClients);
        $this->objSmarty->assign("Contact",Container_Contact);
        $this->objSmarty->assign("ContactOther",Container_ContactOther);

        //slides
        $this->objSmarty->assign("Slider01",Slider01);
        $this->objSmarty->assign("Slider02",Slider02);
        $this->objSmarty->assign("Slider03",Slider03);
        $this->objSmarty->assign("Slider04",Slider04);
        
        //Subtitle Home
        $this->objSmarty->assign("HomeLove",Home_Love);
        $this->objSmarty->assign("HomeResponsive",Home_Responsive);
        $this->objSmarty->assign("HomePerfect",Home_Perfect);
        $this->objSmarty->assign("HomeEasy",Home_Easy);
        $this->objSmarty->assign("HomeGallery",Home_Gallery);
        $this->objSmarty->assign("HomeHTML",Home_HTML);

        //Subtitle About
        $this->objSmarty->assign("AboutWhyUs",About_WhyUs);

        //Portfolio
		$this->objSmarty->assign("PortfolioAll",Portfolio_All);
		$this->objSmarty->assign("PortfolioStuff",Portfolio_Stuff);
		$this->objSmarty->assign("PortfolioN",Portfolio_N);
		$this->objSmarty->assign("PortfolioLandScape",Portfolio_LandScape);        

		//Contact
		$this->objSmarty->assign("ContactName",Contact_Name);        
		$this->objSmarty->assign("ContactEmail",Contact_Email);        
		$this->objSmarty->assign("ContactSubject",Contact_Subject);        
		$this->objSmarty->assign("ContactMessage",Contact_Message);        
		$this->objSmarty->assign("ContactSend",Contact_Send);        


		$this->objSmarty->assign("Top",Top);        
		         
		$this->objSmarty->display ("main.html");
		
	}
	
}

$objFrmLenguage = new frmLenguage();
$sbAction = $_REQUEST['action'];
$objFrmLenguage->execute( $objFrmLenguage , $sbAction );

?>