CI-00-hmvc
==========

dc series

basis installatie overeenkomstig wiredesignz Modular eXtentions (MX) en david connelly 

> Jerry van Heerwaarden <br/>
> vanHeerwaarden websites <br/>
> http://ellislab.com/codeigniter <br/> 
> http://wiredesignz.co.nz/ <br/> 
> https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc <br/>
> DC tutorials dcradionetwork.com <br/>


01 Codeigniter HMVC installatie:

1] Schone Codeigniter installatie uitgevoerd <br/>
2] De $config ['base_url'] correct ingesteld <br/>
3] Check uitgevoerd -> de URL/index.php/welcome => toont de Welkom boodschap van CodeIgniter <br/>
3a] Folder public_html aangemaakt en in indexfile system -> ../system en application -> ../application <br/>
4] Codeigniter is als HMVC applicatie te gebruiken met Modular eXtentions (MX). MX hebben we geplaatst in de application/third_party folder. <br/>
5] De core-bestanden van Modulaire eXtensies in de map application/core geplaatst. <br/>
6] De URL/index.php/welcome => toont weer Welkom bij CodeIgniter <br/>
7] De module directory-structuur aangemaakt: application/modules/welcome/controllers <br/>
8] De controller application/controllers/welkom.php verplaatst naar application/modules/welcome/controllers/welkom.php <br/>
9] De URL/index.php/welcome => toont de Welkom bij CodeIgniter volgens de HMVC systematiek <br/>
10] Nu de map application/modules/welcome/views aangemaakt <br/>
11] De welkomboodschap verplaatst van application/views/welcome_message.php naar application/modules/welcome/views/welcome_message.php <br/>
12] Toegang tot de URL/index.php/welcome => toont Welkom bij CodeIgniter <br/>

We hebben een werkende Modular eXtensions installatie.
